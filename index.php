<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 1/14/2019
 * Time: 10:10 AM
 */
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {
    $view = new View;
    echo $view->render('views/Login.html');
});


//Define a form1 route
$f3->route('GET|POST /date', function($f3) {

    $template = new Template();
    echo $template->render('views/Registration.php');
});

//Run fat free
$f3->run();