<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sign_in.css">
    <title>Squarflix - login</title>
</head>
<body>
    <div class="Name">SQRFLIX</div>
    <div class="login-box">
        <h2>Login</h2>
        <form>
          <div class="user-box">
            <input type="text" name="" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="" required="">
            <label>Password</label>
          </div>
          <div class="email">
            <a href="#" class="password_forget">Register now!</a>
          </div>
          <a href="#" class="login">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Login
          </a>
          <div class="email">
            <a href="#" class="password_forget">Forgot password?</a>
          </div>
        </form>
      </div>
</body>
</html>


<!--<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body id="body_registration">
    <h1 class="title-main-registration">SQRFLIX</h1>
    <form action="sign_in_check.php" method="post">
        <input type="text" name="user" class="username_input" placeholder="username" ><br>
        <input type="password" name="password" class="password_input" placeholder="pasword1234" ><br>
        <input type="submit" class="registration_button" value="submit">
    </form>
    <?php 
        /*----IN USE----if($_GET['password'] === 'null') {
        echo '<p class="redWriting" >Wrong user or password.</p>';
        }*/
    ?>
</body>
</html>
<?php /*----NOT IN USE----*/
/*<form action="" method="post" class="registration_button_form">
    <?php
    print_r($_POST['sign']);
    if ($_POST['sign'] == 'SIGN IN')
    {
        echo '<input type="submit" class="registration_button" value="SIGN IN">';
    }
    elseif ($_POST['sign'] == 'SIGN UP')
    {
        echo '<input type="submit" class="registration_button" value="SIGN UP">';
    }
    ?>
    </form>
    */ ?>-->