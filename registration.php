
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
        <input type="password" name="password" class="password_input" placeholder="password" ><br>
        <input type="submit" class="registration_button" value="submit">
    </form>
    <?php 
        if($_GET['password'] === 'null') {
        echo '<p class="redWriting" >Wrong user or password.</p>';
        }
    ?>
</body>
</html>
<?php /*<form action="" method="post" class="registration_button_form">
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
    */ ?>