/*
 * Express Router for serving the templates
 * Akhil Pandey
 * The MIT License
 */
var http = require('http'),
    express = require('express'),
    fs = require('fs'),
    bodyParser = require('body-parser'),
    cookieParser = require('cookie-parser');

module.exports.app = function() {
        var port = process.env.PORT || 5000;
        var app = express();
        var router = express.Router();
        var errorPage = fs.readFileSync("404.html", "UTF-8");

        require('node-jsx').install();
        app.use(express.static('assets'));
        app.set('title', "instaStore");
        app.set('view engine', 'ejs');
        app.use(cookieParser());
        app.use(bodyParser.json());
        app.use(bodyParser.urlencoded({extended: true}));

        router.get('/', function(req, res) {
                res.render('index.ejs');
        });

        router.get('/[0-9]', function(req, res) {
                res.redirect(errorPage);
        });

        router.get('*', function(req, res) {
                var match = 'views/' + req.params[0] + '.ejs';
                fs.exists(match, function(present) {
                        if(present) {
                                fs.readFile(match, function(err, data) {
                                        if(err) {
                                                res.send(errorPage.toStrng(), "UTF-8");
                                        }
                                        else {
                                                res.end(data, "UTF-8");
                                        }
                                });
                        }
                        else {
                                res.end(errorPage.toString(), "UTF-8");
                        }
                });
        });

        app.use('/', router);

        http.createServer(app).listen(port, function() {
                console.log("Front End Application server started, Open http://localhost:5000");
        });
}
