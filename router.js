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
        var port = process.env.PORT || 8010;
        var app = e();
        var router = e.Router();
        var errorPage = f.readFileSync("404.html", "UTF-8");

        app.use(e.static('assets'));
        app.set('title', "tedx");
        app.set('view engine', 'ejs');
        app.use(b.json());
        app.use(b.urlencoded({extended: true}));

        router.get('/', function (req, res) {
                res.render('main.ejs');
        });

        router.get('/about', function (req, res) {
                res.render('about.ejs');
        });

        router.get('/contact', function (req, res) {
                res.render('contact.ejs');
        });

        router.get('/attend', function (req, res) {
                res.render('register.ejs');
        });

        router.get('/[0-9]', function (req, res) {
                res.redirect(errorPage);
        });

        router.get('/:value', function(req, res) {
                var match = 'views/' + req.params.value;
                f.exists(match, function(present) {
                        if(present) {
                                f.readFile(match, function(err, data) {
                                        if(err) {
                                                res.send(errorPage.toString(), "UTF-8");
                                                console.log("GET:" + match + " couldnot be processed");
                                        }
                                        else {
                                                res.end(data, "UTF-8");
                                        }
                                });
                        }
                        else {
                                res.end(errorPage.toString(), "UTF-8");
                                console.log("GET:" + match + " couldnot be processed");
                        }
                });
        });

        app.use('/', router);

        h.createServer(app).listen(port, function() {
                console.log("Front End Application server started, Open http://localhost:5000");
        });
}
