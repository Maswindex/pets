<?php

//reuire the autoload file
require_once('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function () {
    $view = new View;
    echo $view->render
    ('views/home.html');
});

//run fat free
$f3->run();