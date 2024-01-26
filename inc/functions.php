<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendmail_no($to,$nameto) {//},$subject,$message,$altmess)  {
    $from  = "noreply@eandzgethitched.com";
    $Z_mail = "zaneerasim@gmail.com";
    $E_mail = "erikdenboer92@gmail.com";
    $namefrom = "Erik & Zaneera";
    $mail = new PHPMailer();
    $mail->SMTPDebug = 0;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host   = 'server227.web-hosting.com';
    $mail->Port       = 465;
    $mail->Username   = $from;
    $mail->Password   = "WhyAmISoDamnLazy";
    $mail->SMTPSecure = "ssl";
    $mail->setFrom($from, $namefrom);
    $mail->addCC($Z_mail, 'Zaneera Asim');
    $mail->addCC($E_mail, 'Erik den Boer');
    //$mail->Subject  = $subject;
    $mail->isHTML(true);
    //$mail->Body = $message;
    //$mail->AltBody  = $altmess;
    $mail->addAddress($to, $nameto);
    $mail->msgHTML(file_get_contents('RSVP_no.html'));
    if($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Error:' . $mail->ErrorInfo;
    }
}