<?php
        try {
            $DB = new PDO('mysql:host=localhost;dbname=sqrflix;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
            die ('Erreur ' . $e->getMessage());
        }

        $pass = htmlspecialchars($_POST['password']);
        $user = htmlspecialchars($_POST['user']);


        if (isset($_POST['user']) && isset($pass)) {
        $req = $DB->prepare('SELECT user, user_password, user_status FROM users WHERE user = ?');
        $req -> execute(array($_POST['user']));
        $data = $req->fetch();

        //$isPasswordCorrect = password_verify($_GET['password'], $data['user_password']);
            if ($_POST['password'] === $data['user_password'])
            {
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['user_status'] = $data['user_status'];
                header('Location:home.php');
            }
            else {
                header('Location:registration.php?password=null');
            }
        }
        else {
            header('Location:registration.php?password=null');
        }
        
?>