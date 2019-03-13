<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 3/13/2019
 * Time: 2:07 PM
 */

class Valid
{
    function validName($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return ctype_alpha($data) ? true : false;
    }
    function validUser($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return (ctype_digit($data)) ? true : false;
    }
    function validPassword($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return ctype_alpha($data) ? true : false;
    }
    function validEmail($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return !filter_var($data, FILTER_VALIDATE_EMAIL) ? false : true;
    }
}