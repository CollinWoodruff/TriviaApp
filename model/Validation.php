<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 3/2/2019
 * Time: 4:46 PM
 */
print_r($_POST);
global $isValid;
$fname = $lname = $email = $username = $password = "";
if(!empty($_POST['submit'])) {

    $isValid ['firstName'] = true;
    $isValid ['lastName'] = true;
    $isValid ['email'] = true;
    $isValid ['username'] = true;
    $isValid ['password'] = true;

    if (!empty($_POST['firstName'])) {
        $fname = $_POST['firstName'];
        $_SESSION['firstName'] = $fname;
    } else {
        $errorName = "Please enter a name";
        $isValid['firstName'] = false;
    }

    if (!empty($_POST['lastName'])) {
        $lname = $_POST['lastName'];
        $_SESSION['lastName'] = $lname;
    } else {
        $errorName = "Please enter a name";
        $isValid['lastName'] = false;
    }

    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
    } else {
        $errorEmail = "Please enter a name";
        $isValid['email'] = false;
    }

    if (!empty($_POST['username'])) {
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
    } else {
        $errorUsername = "Please enter a name";
        $isValid['username'] = false;
    }

    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
        $_SESSION['password'] = $password;
    } else {
        $errorPassword = "Please enter a name";
        $isValid['password'] = false;
    }
    //$isValid =true;
    //return $isValid;
}

if ($isValid == true)
{
    echo "<p>Is valid</p>";
}else {
    echo "<p>Is not valid</p>";
}

print_r($_SESSION);