<?php

    include("data_base.php");

        $pass1 = htmlspecialchars($_POST['password1']);
        $pass2 = htmlspecialchars($_POST['password2']);
        $email = htmlspecialchars($_POST['email']);
        $user = htmlspecialchars($_POST['user']);



        if (isset($user) && isset($email) && isset($pass1) && isset($pass2)) {
            $req = $DB->query('SELECT * FROM users');
            while($data = $req->fetch()) {
                if($data['user'] === $user){
                    
                    header('location: register.php?user=taken');
                    break;
                }
                else if ($pass1 != $pass2){
                    header('location: register.php?pwd=wrong');
                    break;
                }
                else if ($data['email'] === $email){
                    header('location: register.php?email=taken');
                    break;
                }
                else {
                    $hash = password_hash($pass1, PASSWORD_DEFAULT);
                    $req->closeCursor();
                    $req = $DB->prepare('INSERT INTO users (user, user_password, user_status, email)
                    VALUES(:user, :pass1, :user_status, :email)');
                    $req->execute(array(
                        'user' => $user,
                        'pass1' => $hash,
                        'user_status' => "guest",
                        'email' => $email
                    ));
                    
                    header('location: login.php?login=success');
                }

                
            }
        }
        //$isPasswordCorrect = password_verify($_GET['password'], $data['user_password']);
           /* if ($_POST['password'] === $data['user_password'])
            {
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['user_status'] = $data['user_status'];
                header('location:home.php');
            }
            else {
                header('Location:register.php?username=n');
            }
        }
        else {
            header('Location:register.php?username=n');
        }*/
?>