<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 3/2/2019
 * Time: 3:13 PM
 *
 * $_Server[SELF]
 */
//include("../model/Validation.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dating Site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"
          href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
</head>
<body>
<section  class="bg-faded cb-background-reg container" id="about">
    <form class="container offset-lg-2  col-lg-8" method="post" id ='form' action="#">
        <div class="container-fluid form-group text-light p-4 cb-regInfo text-dark" >
            <fieldset class="form-group" id="register">
                <legend>Registration Information 2</legend>
                <div class="form-group">
                    <label class="col-md-5 col-lg-8 control-label">First Name</label>
                    <div class="inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-user-alt"></i></span>
                            <input id="firstName" name="firstName" placeholder="First Name" class="form-control" value = "<?php echo $fname?>" type="text">
                            <span  class="err" id="err-fname"><?php echo $errorName ?></span>
                        </div>
                    </div>
                </div>

    <div class="form-group">
        <label class="col-md-5 col-lg-8 control-label">Last Name</label>
        <div class="inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-user-alt"></i></span>
                <input id="lastName" name="lastName" placeholder="Last Name" class="form-control" value = "<?php echo $lname?>" type="text">
                <span  class="err" id="err-lname"><?php echo $errorName ?></span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-5 col-lg-8 control-label">Age</label>
        <div class="inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-key"></i></span>
                <input id="age" name="age" placeholder="Enter Age" class="form-control" value="<?php echo $age?>" type="number">
                <span  class="err" id="err-Age"><?php echo $errorAge ?></span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-5 col-lg-8 control-label">Gender</label>
        <div class=" text-dark" >
            <div class="radio" >
                <label class="mr-3">
                    <input type="radio" name="flight" value="M" id="male"/> Male
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="flight" value="F" id="female"/> Female
                </label>
            </div>
            <span  class="err" id="err-Age"><?php echo $errorSex ?></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-5 col-lg-8 control-label">Phone Number</label>
        <div class="inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="far fa-envelope"></i></span>
                <input  class="form-control mx-sm-2" type="text" name="phone" id="phone" size="20"
                        pattern="^\d{10}$|^(\(\d{3}\)\s*)?\d{3}[\s-]?\d{4}$" value="<?php echo $phone?>"/>
                <span  class="err" id="err-phone"><?php echo $errorPhone ?></span>
            </div>
        </div>
    </div>

    <legend>Premium Membership</legend>
    <label>
        <input type="checkbox" value="Premium" id="membership"
               name="membership[]">&nbsp;Sign me up For a Premium Account!
    </label><br>
    </fieldset>
    <br>
    <button class='btns' type='submit' name="submit" value="submit">Save</button>
    </div>
</form>
</section>
</body>
</html>