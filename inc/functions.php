<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Functions sorted alphabetically
function sendmail_no($to,$nameto,$body) {//,$altmess
    $from  = "noreply@eandzgethitched.com";
    $Z_mail = "zaneerasim@gmail.com";
    $E_mail = "erikdenboer92@gmail.com";
    $namefrom = "Erik & Zaneera";
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
    //$mail->AltBody  = $altmess;
    $mail->addAddress($to, $nameto);
    if($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Error:' . $mail->ErrorInfo;
    }
}
  
function sendmail_yes($to,$nameto,$body) {//,$altmess
    $from  = "noreply@eandzgethitched.com";
    $Z_mail = "zaneerasim@gmail.com";
    $E_mail = "erikdenboer92@gmail.com";
    $namefrom = "Erik & Zaneera";
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
    //$mail->AltBody  = $altmess;
    $mail->addAddress($to, $nameto);
    if($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Error:' . $mail->ErrorInfo;
    }
}