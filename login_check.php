<?php
        include("data_base.php");

        $pass = htmlspecialchars($_POST['password']);
        $user = htmlspecialchars($_POST['user']);


        if (isset($_POST['user']) && isset($pass)) {
        $req = $DB->prepare('SELECT user, user_password, user_status FROM users WHERE user = ?');
        $req -> execute(array($_POST['user']));
        $data = $req->fetch();

        //$isPasswordCorrect = password_verify($_GET['password'], $data['user_password']);
            if (password_verify($_POST['password'] ,$data['user_password']))
            {
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['user_status'] = $data['user_status'];
                header('location:home.php');
            }
            else {
                header('Location:login.php?pwd=n');
            }
        }
        else {
            header('Location:login.php?pwd=n');
        }
        
?>