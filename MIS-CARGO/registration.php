<?php include('server.php') ?>
<!DOCTYPE html>
<link rel="stylesheet" href="registration.css">
<html>
  <head>
    <title>Registration</title>
  </head>
  <body>
    <div class="center">
        <div class="centered-div"><a href="index.html"><img src="img/logo.png" alt="Image Failed to Load" width="150" height="150"></div>
        <form method="post">
            <div class="txt-field">
            <a href="index.html"></article></a>
                <input type="text" required id="firstname" name="firstname" >
                <span></span>
                <label for = "username">First Name</label>
            </div>
            <div class="txt-field">
                <input type="text" required id="lastname" name="lastname">
                <span></span>
                <label for = "username">Last Name</label>
            </div>
            <div class="txt-field">
                <input type="text" required id="email" name="email">
                <span></span>
                <label for = "username">Email</label>
            </div>
            <div class="txt-field">
                <input type="password" required id="password" name="password">
                <span></span>
                <label for = "password">Password</label>
            </div>
            <div class="txt-field">
                <input type="password" required id="cpassword" name="cpassword">
                <span></span>
                <label for = "cpassword">Confirm Password</label>
            </div>
            <div>
                <input type="checkbox">
                <span>I agree to the Terms of Service and Privacy Policy</span>
            </div>
            <br>
            <div class="register">
            <input type="submit" value="Register" name = "register">
             </div>
             <div class="signup_link">
                Already have an account? <a href="login.php">Login</a>
            </div>
        </form>
    </div>
  </body>
</html>