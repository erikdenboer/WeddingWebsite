<?php
//RSVP template for RSVP = 'No'
//Header comprised of logo and heading, followed by some text
$body1 =   '<table><tr><td>
            <img style="margin: auto; max-width: 100%;" src="https://www.eandzgethitched.com/images/logo-colored-pink.png" alt="Wedding logo" width="640" />
            </td></tr></table>
            <h1>Jouw RSVP voor E&Z\'s bruiloft!</h1>
            <p style="margin: auto;">Hallo ' . $_POST['name1'] . ", <br>
            We vinden het enorm jammer dat je er niet bij kunt zijn. Hierbij de bevestiging van wat je aangegeven hebt:<br>";

//Generate user-friendly list of their responses
$email_vars = array(
    'Naam: ' . $names[0] . '<br>',
    'RSVP: ' . $rsvp . '<br>');
//    'Email: ' . $email . '<br>'
    
$body2 = implode(" ", $email_vars);

//Closing statement
$body3 = "Mocht je iets willen checken of veranderen, neem dan even contact op met de bruidegom. Bedankt voor je RSVP! <br><br>
Liefs, Erik & Zaneera</p>
";

//Compile parts into message body to be sent
$body = $body1 . $body2. $body3;