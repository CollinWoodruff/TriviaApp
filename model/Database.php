<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 12/2/2018
 * Time: 1:53 PM
 *
 *  CREATE TABLE member ( _fname Varchar(15), _lname Varchar(15), _age int, __gender Varchar(10),
 * _phone Varchar(15), _email Varchar(35), _state Varchar(25), _seeking Varchar(10), _bio Varchar(150) )
 *
 * ALTER TABLE member
 * ADD COLUMN _interests VARCHAR(225) AFTER _phone;
 *
 * ALTER TABLE member
 * ADD COLUMN member_id INT AUTO_INCREMENT PRIMARY KEY AFTER _age;
 *
 * UPDATE `member` SET `_fname` = 'Collin', `_lname` = 'Woodruff', `_age` = '20', `__gender` = 'Male', `
 * _phone` = '2068194354', `_interests` = 'Biking, Reading', `_email` = 'Cwoodruff@mail.greenriver.edu',
 * `_state` = 'Washington', `_seeking` = 'Female', `_bio` = 'Bio' WHERE `member`.`member_id` = 1;
 */
require '/home/cwoodruf/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <title>Admin</title>

</head>
<body>

<h3>Members</h3>
<table id="Admin">
    <thead>
    <tr>
        <th>ID</th>
        <th>First</th>
        <th>Last</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Email</th>
        <th>State</th>
        <th>Gender</th>
        <th>Seeking</th>
        <th>Premium</th>
        <th>Interests</th>
    </tr>
    </thead>
    <tbody>

    <?php

    $sql = "SELECT member_id, _fname, _lname, _age, _phone, _email, _state, __gender, _seeking, _interests FROM member
            ORDER BY _lname ASC ";

    // Executes the query
    $result = @mysqli_query($cnxn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        // print_r($row);
        $id= $row['member_id'];
        $fname = $row['_fname'];
        $lname = $row['_lname'];
        $age = $row['_age'];
        $phone = $row['_phone'];
        $email = $row['_email'];
        $state = $row['_state'];
        $gender = $row['__gender'];
        $seeking = $row['_seeking'];
        $interests = $row['_interests'];




        echo "<tr>
                    <td>$id</td>
                    <td>$fname</td>
                    <td>$lname</td>
                    <td>$age</td>
                    <td>$phone</td>
                    <td>$email</td>
                    <td>$state</td>
                    <td>$gender</td>
                    <td>$seeking</td>
                    <td><input type=\"checkbox\" name=\"name1\" />&nbsp;</td>
                    <td>$interests</td>
              </tr>";

    }
    ?>
    </tbody>
</table><br><br>
<p>This is a manually entered member. I sent you a crude email briefly describing how I am struggling on the concept of
    f3 templating with a php validated form sent from an html page. I am unable to test if I am posting any variables because
the registration page goes blank when the form is sent. However if you leave the page and come back it is sticky. Any php echo statements
did not show up. I got fairly close this past week but just wasn't able to get it done.</p>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script src="../Javascript/DataTable.js"></script>
</body>
</html>