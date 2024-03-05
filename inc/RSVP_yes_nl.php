<?php
//RSVP template for RSVP = 'Yes'
//Header comprised of logo and heading, followed by some text
$body1 =   '<table><tr><td>
            <img style="margin: auto; max-width: 50%;" src="https://www.eandzgethitched.com/images/logo-colored-pink.png" alt="Wedding logo" width="640" />
            </td></tr></table>
            <h1>Your RSVP to E&Z\'s wedding!</h1>
            <p style="margin: auto;">Hello ' . $_POST['name1'] . ", <br>
            We kijken ernaar uit je te zien op onze bruiloft! Hierbij de bevestiging van wat je aangegeven hebt:<br>";

//Generate user-friendly list of their responses
$email_vars = array(
    'Naam: ' . $names[0] . '<br>',
    'RSVP: ' . $rsvp . '<br>',
    'Email: ' . $email . '<br>');

//Add optional values if set
if($food[0]){
    $email_vars[] = 'Food preference: ' . $food[0] . '<br>';
}
if($names[1] && $food[1]){
    $email_vars[] = 'Name of guest 2: ' . $names[1] . '<br>';
    $email_vars[] = 'Food preference of guest 2: ' . $food[1] . '<br>';
}
if($names[2] && $food[2]){
    $email_vars[] = 'Name of guest 3: ' . $names[2] . '<br>';
    $email_vars[] = 'Food preference of guest 3: ' . $food[2] . '<br>';
}
if(isset($message)){
    $email_vars[] = 'Message: ' . $message . '<br><br>';
}
$body2 = implode(" ", $email_vars);

//Closing statement
$body3 = "Mocht je iets willen checken of veranderen, neem dan even contact op met de bruidegom. Bedankt voor je RSVP! <br><br>
Liefs, Erik & Zaneera</p>
";

//Compile parts into message body to be sent
$body = $body1 . $body2. $body3;