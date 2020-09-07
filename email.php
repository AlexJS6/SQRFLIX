<?php
session_start();

$code = rand(1000000000, 10000000000); 
$_SESSION['code'] = $code;

include("data_base.php");
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendmail($email_user,$user_name,$code_send) {
// Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 1;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'sqrflix@gmail.com';                     // SMTP username
        $mail->Password   = 'carre2cube3';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('noreply@sqrflix.com','SQRFLIX');
        $mail->addAddress($email_user,$user_name);     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Password lost - SQRFLIX';
        $mail->Body    = 'this is the code to change your password : ' . $code_send ;
        $mail->AltBody = 'This is the code to change your password : ' . $code_send;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if(isset($_POST['email'])) {
    $req = $DB->query('SELECT * FROM users');
    while($data = $req->fetch()){
        if ($data['email'] === $_POST['email']) {
            sendmail($_POST,$data['user'],$code);
        }
    }    
}
?>
