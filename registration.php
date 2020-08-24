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
    <form action="" method="post">
        <input type="text" class="username_input" methdo="post" placeholder="youremail@email.com"><br>
        <input type="text" class="password_input" method="post" placeholder="password"><br>
    </form>
    <form action="" method="post">
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
</body>
</html>