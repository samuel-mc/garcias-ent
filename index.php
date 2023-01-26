<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/garcias/");


Flight::route('/', function () {
    Flight::render('index.php');
});

Flight::route('/about', function () {
    Flight::render('about.php');
});

Flight::route('/relaciones', function () {
    Flight::render('relaciones.php');
});

Flight::route('/eventos-deportivos', function () {
    Flight::render('eventosDeportivos.php');
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
