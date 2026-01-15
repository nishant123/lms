
<?php
include "header.php"; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


    try {
        

        $link = BASE_URL.'student-registration-verify.php?email='.$_POST['email'].'&token='.$token;
        $email_message = 'Please click on this link to verify the registration: <br>';
        $email_message .= '<a href="'.$link.'">Click Here</a>';

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_ENCRYPTION;
        $mail->Port = SMTP_PORT;
        $mail->setFrom(SMTP_FROM);
        $mail->addAddress('chawla.nishant@gmail.com');
        $mail->addReplyTo('chawla.nishant@gmail.com');
        //$mail->addReplyTo(SMTP_FROM);
        $mail->isHTML(true);
        $mail->Subject = 'Registration Verify';
        $mail->Body = $email_message;
        $mail->send();

        $success_message = 'An email is sent to your email address. Please check and verify the registration.';
        $_SESSION['success_message'] = $success_message;
        echo $_SESSION['success_message'];die;
       // header('location: '.BASE_URL.'registration');
       // exit;

    } catch(Exception $e) {
        $error_message = $e->getMessage();
        $_SESSION['error_message'] = $error_message;
        echo  $_SESSION['error_message'];
      //  header('location: '.BASE_URL.'registration');
        exit;
    }

    ?>