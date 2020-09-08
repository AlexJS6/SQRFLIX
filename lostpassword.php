<?php
session_start();
include("data_base.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sign_in.css">
    <title>Squarflix - login</title>
</head>
<body class="sign_body">
    <div class="login-box">
    <div class="logo">SQRFLIX</div>
        <h2>Password lost?</h2>
        <form method="get" action="lostpassword.php">
          <div class="user-box">
            <input type="email" name="email" required>
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="text" name="code" required>
            <label>Code received</label>
          </div>
          <div class="user-box">
            <input type="password" name="password1" required>
            <label>New password</label>
          </div>
          <div class="user-box">
            <input type="password" name="password2" required>
            <label>Confirm new password</label>
          </div>
       <?php if(isset($_GET['pwd']) && isset($_GET['code'])) 
              {
                echo '<p>Error : your password or code is not correct!</p>';  
              }
          ?>
          <div class="login">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" class="login_button" value="Confirm" name="submit">         
          </div><br>
        </form>
      </div>
        <?php 
 
        if(isset($_GET['submit'])) {
            $email = $_GET['email'];
            if ($_GET['password1'] == $_GET['password2']){
                $newpassword = password_hash($_GET['password1'], PASSWORD_DEFAULT);
                if($_SESSION['code'] == $_GET['code'])
                {
                    $req = $DB->prepare("UPDATE users SET user_password = :newpassword WHERE email ='$email'");
                    $req -> execute(array(
                    'newpassword' => $newpassword
                    ));
                    header('location: login.php');
                }
                else {
                  header('location: lostpassword.php?code=n');
                }
            }
            else {
              header('location: lostpassword.php?pwd=n');
            }
        }
        ?>

</body>