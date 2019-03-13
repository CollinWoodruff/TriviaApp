<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 1/14/2019
 * Time: 10:10 AM
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Required files
require_once('vendor/autoload.php');
include('model/Valid.php');

ob_start();
session_start();

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
$f3->route('GET|POST /Registration', function($f3) {

    $f3->set('isValid', TRUE);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['fname']) && $_POST['fname'] != "") {
            $f3->set('first', $_POST['fname']);
        }
        if (empty($_POST['fname'])) {
            $f3->set('fNameErr', "First name is required");
            $f3->set('isValid', FALSE);
        } else {
            if (validName($_POST['fname'])) {
                $member->setFname($_POST['fname']);
            } else {
                $f3->set('fNameErr', "Not a valid first name");
                $f3->set('isValid', FALSE);
            }
        }
        if (isset($_POST['lname']) && $_POST['lname'] != "") {
            $f3->set('last', $_POST['lname']);
        }
        if (empty($_POST['lname'])) {
            $f3->set('lNameErr', "Last name is required");
            $f3->set('isValid', FALSE);
        } else {
            if (validName($_POST['lname'])) {
                $member->setLname($_POST['lname']);
            } else {
                $f3->set('lNameErr', "Not a valid last name");
                $f3->set('isValid', FALSE);
            }
        }
        if (isset($_POST['age']) && $_POST['age'] != "") {
            $f3->set('age', $_POST['age']);
        }
        if (empty($_POST['age'])) {
            $f3->set('ageErr', "Age is required");
            $f3->set('isValid', FALSE);
        } else {
            if (validAge($_POST['age'])) {
                $member->setAge($_POST['age']);
            } else {
                $f3->set('ageErr', "Must enter a valid age over 18");
                $f3->set('isValid', FALSE);
            }
        }
        if (!empty($_POST['gender'])) {
            $member->setGender($_POST['gender']);
        }
        if (isset($_POST['phone']) && $_POST['phone'] != "") {
            $f3->set('phone', $_POST['phone']);
        }
        if (empty($_POST['phone'])) {
            $f3->set('phoneErr', "Phone number is required");
            $f3->set('isValid', FALSE);
        } else {
            if (validPhone($_POST['phone'])) {
                $member->setPhone($_POST['phone']);
            } else {
                $f3->set('phoneErr', "Please enter a valid phone number");
                $f3->set('isValid', FALSE);
            }
        }
        $_SESSION['member'] = serialize($member);
        $valid = $f3->get('isValid');
        if ($valid) {
            $f3->reroute('./profile');
        }
    }

    $template = new Template();
    echo $template->render('views/Registration.php');
});

//Run fat free
$f3->run();