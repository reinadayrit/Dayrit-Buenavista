<?php
include('config.php');

session_start();
if (isset($_POST['login'])){

  $email=$_POST['email'];
  $password = $_POST['password'];
  
  //$password=md5($_POST['password']);

  $query = $conn->prepare ("SELECT * FROM tbl_users where email = ? and password = ?");
  $query->bind_param('ss', $email,$password);
  $query->execute();
  $query->store_result();

  
  if($query->num_rows()>0){
    $_SESSION['email']=$email;
    header('location:landing.html');
  } 
  else{
    echo"<script> alert ('Login Credentials Not Found'); </script>";
  }
}
?>

<link rel="stylesheet" href="login.css">
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <div class="center">
        <div class="centered-div"><a href="index.html"><img src="img/logo.png" alt="Image Failed to Load" width="150" height="150"> </div>
        <form method="post">
            <a href="index.html"></article></a>
            <div class="txt-field">
                <input type="text" required id="email" name="email">
                <span></span>
                <label for="username">Username</label>
            </div>
            <div class="txt-field">
                <input type="password" required id="password" name="password">
                <span></span>
                <label for="password">Password</label>
            </div>
            <div class="pass color">Forgot Password?</div>
            <input type="submit" value="Login" name="login">
            <div class="signup_link">
                Not a member? <a href="registration.php">Sign Up</a>
            </div>
        </form>
    </div>
  </body>
</html>