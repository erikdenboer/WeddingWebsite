<?php
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
require("PHPMailer-master/src/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendmail($to,$nameto,$body) {
    echo 'Mailing process started!';
    $from  = "info@eandzgethitched.com";
    $namefrom = "Erik & Zaneera";
    $Z_mail = "zaneerasim@gmail.com";
    $E_mail = "erikdenboer92@gmail.com";
    $mail = new PHPMailer();
    $mail->SMTPDebug  = 0;
    $mail->CharSet    = 'UTF-8';
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host       = 'server227.web-hosting.com';
    $mail->Port       = 465;
    $mail->Username   = $from;
    $mail->Password   = "WhyAmISoDamnLazy";
    $mail->SMTPSecure = "ssl";
    $mail->setFrom($from, $namefrom);
    $mail->addCC($Z_mail, 'Zaneera Asim');
    $mail->addCC($E_mail, 'Erik den Boer');
    $mail->Subject  = "Your RSVP to E&Z's wedding!";
    $mail->isHTML(true);
    $mail->MsgHTML($body);
    $mail->AltBody  = 'Your RSVP has been received and stored in our database successfully! Contact the groom if you want to change or check anything.';
    $mail->addAddress($to, $nameto);
    if($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Error:' . $mail->ErrorInfo;
    }
}