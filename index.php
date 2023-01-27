<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/Trabajo/Freelancer/Samuel/garcias-ent/");


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

Flight::route('/speakers', function () {
    Flight::render('speakers.php');
});

Flight::route('/eventos', function () {
    Flight::render('eventos.php');
});

Flight::route('/liga', function () {
    Flight::render('liga.php');
});

Flight::route('/contacto', function () {
    Flight::render('contacto.php');
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
