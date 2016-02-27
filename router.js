/*
 * Express Router for serving the templates
 * Team Tedx
 * The MIT License
 */

var h = require('http'),
    e = require('express'),
    f = require('fs'),
    m = require('./emailserver'),
    b = require('body-parser');

module.exports.app = function() {
        var port = process.env.PORT || 5000;
        var app = express();
        var router = express.Router();
        var errorPage = f.readFileSync("404.html", "UTF-8");

        app.use(express.static('assets'));
        app.set('title', "tedx");
        app.set('view engine', 'ejs');
        app.use(b.json());
        app.use(bodyParser.urlencoded({extended: true}));

        router.get('/', function(req, res) {
                res.render('main.ejs');
        });


        router.get('/[0-9]', function(req, res) {
                res.redirect(errorPage);
        });
        
        router.get('/:value', function(req, res) {
                var match = 'views/' + req.params.value + '.ejs';
                f.exists(match, function(present) {
                        if(present) {
                                f.readFile(match, function(err, data) {
                                        if(err) {
                                                res.send(errorPage.toStrng(), "UTF-8");
                                                console.log("GET/" + match + " couldnot be processed");
                                        }
                                        else {
                                                res.end(data, "UTF-8");
                                        }
                                });
                        }
                        else {
                                res.end(errorPage.toString(), "UTF-8");
                                console.log("GET/ " + match + " couldnot be processed");
                        }
                });
        });

        app.use('/', router);

        http.createServer(app).listen(port, function() {
                console.log("Front End Application server started, Open http://localhost:5000");
        });
}
