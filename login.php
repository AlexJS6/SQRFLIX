<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sign_in.css">
    <title>Squarflix - log in</title>
</head>
<body class="sign_body">
    <div class="login-box">
    <div class="logo">SQRFLIX</div>
        <h2>Log in</h2>
        <form action="login_check.php" method="POST">
          <div class="user-box">
            <input type="text" name="user" required>
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required>
            <label>Password</label>
          </div>

          <?php 
            if(isset($_GET['pwd']) && $_GET['pwd'] == 'n') {
            echo '<div class="wrong_password" >Wrong user or password.</div>';
            } 
            if(isset($_GET['login']) && $_GET['login'] == 'success') {
            echo '<div class="wrong_password" >You successfully created your account.</div>';
            }
            
          ?>

          <div class="login">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" class="login_button" value="Log in ">         
          </div><br>
          <a href="register.php" class="password_forget">No account? Register now!</a><br>
          <a href="#" class="password_forget">Forgot password?</a>
        </form>
      </div>

</body>
</html>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body id="body_sign">
    <h1 class="title-main">SQRFLIX</h1>
    <form action="registration.php" method="post">
        <input type="submit" class="sign_in_button" name="sign" value="SIGN IN">
        <input type="submit" class="sign_up_button" name="sign" value="SIGN UP">
    </form>
</body>
</html>-->