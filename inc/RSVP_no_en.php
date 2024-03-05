<?php
//RSVP template for RSVP = 'No'
//Header comprised of logo and heading, followed by some text
$body1 =   '<table><tr><td>
            <img style="margin: auto; max-width: 50%;" src="https://www.eandzgethitched.com/images/logo-colored-pink.png" alt="Wedding logo" width="640" />
            </td></tr></table>
            <h1>Your RSVP to E&Z\'s wedding!</h1>
            <p style="margin: auto;">Hello ' . $_POST['name1'] . ", <br>
            It's a shame you won't be able to join us. This is what you entered in your RSVP:<br>";

//Generate user-friendly list of their responses
$email_vars = array(
    'Name: ' . $names[0] . '<br>',
    'RSVP: ' . $rsvp . '<br>',
    'Email: ' . $email . '<br>');

$body2 = implode(" ", $email_vars);

//Closing statement
$body3 = "Contact the groom if you want to change or check anything. Thanks for RSVP'ing! <br><br>
Love, Erik & Zaneera</p>
";

//Compile parts into message body to be sent
$body = $body1 . $body2. $body3;