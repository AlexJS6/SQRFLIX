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
        <h2>Register</h2>
        <form method="post" action="register_insert.php">
          <div class="user-box">
            <input type="text" name="user" required>
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="email" name="email" required>
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password1" required>
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="password" name="password2" required>
            <label>Confirm password</label>
          </div>
          <?php 
            if(isset($_GET['user']) && $_GET['user'] == 'taken') {
            echo '<div class="wrong_password" >Error: This username is already exists.</div>';
            }
            if(isset($_GET['pwd']) && $_GET['pwd'] == 'wrong') {
            echo '<div class="wrong_password" >Error: Your passwords did not match</div>';
            }
            if(isset($_GET['email']) && $_GET['email'] == 'taken') {
            echo '<div class="wrong_password" >Error: this email is already linked to an existing account.</div>';
            }

          ?>
          <div class="login">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" class="login_button" value="Register">         
          </div><br>
        </form>
      </div>
</body>
</html>


<!--
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
    
</body>
</html>
