<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
    try{
        //Server settings
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'fruitioncore@gmail.com';               // SMTP username
        $mail->Password   = 'fantapepsi';                           // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
        //Recipent
        $mail->setFrom('fruitioncore@gmail.com', 'Fruition Team');
        $mail->addAddress($email, $name);
        $mail->addReplyTo('fruitioncore@gmail.com', 'Fruition Team');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thanks for Contacting Us';
        $mail->Body    = 'We will review your query/suggestion and get back to you soon.';
        $mail->AltBody = 'We will review your query/suggestion and get back to you soon.';

        $mail->send();
        echo("<script LANGUAGE = 'Javascript'>
        window.alert('Message Sent');
        window.location.href = 'https://www.nsec.tk';
        </script>");
    }catch (Exception $e) {
        echo("<script LANGUAGE = 'Javascript'>
        window.alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        window.location.href = 'https://www.nsec.tk';
        </script>");
    }
?>