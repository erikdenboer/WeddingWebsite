<?php include('templates/header.php')?>

<!--Main Content Start -->
<?php

$server = 'localhost';
$user = 'eandftug_DM';
$pw = 'Ens0rcelled';
$db = 'eandftug_RSVPs';

$conn = mysqli_connect($server, $user, $pw, $db); 
if (!$conn)  {
    die('Connection Failed: ' . mysqli_connect_error());
}
echo 'Connected successfully!<br><br>';

// Get data from form
$rsvp = mysqli_real_escape_string($conn, $_POST['rsvp']);
if ($rsvp == 1){
    $rsvp = 'Yes';
    $names = array(mysqli_real_escape_string($conn, $_POST['name1']));
    $food = array(mysqli_real_escape_string($conn, $_POST['food1']));
    if ($_POST['name2'] && $_POST['food2']) {
    	$names[1] = mysqli_real_escape_string($conn, $_POST['name2']);
        $food[1] = mysqli_real_escape_string($conn, $_POST['food2']);
    }
    if ($_POST['name3'] && $_POST['food3']) {
    	$names[2] = mysqli_real_escape_string($conn, $_POST['name3']);
        $food[2] = mysqli_real_escape_string($conn, $_POST['food3']);
    }
    $message = mysqli_real_escape_string($conn, $_POST['message']);
} else if ($rsvp == 0){
    $rsvp = 'No';
}
$email = mysqli_real_escape_string($conn, $_POST['email']);
/*$email_subject = ['Your RSVP to Zaneera & Erik\'s wedding!'];
$email_body = 'Hi ' + $name1 + ','+
    'Thanks for RSVP\'ing to our wedding! Below is a copy of your answers: \n';*/

echo 'Variables collected.<br><br>';
for ($i=0; $i < count($names); $i++) {
    $sql[$i] = "INSERT INTO Responses (Name, RSVP, Food, Comment, Email) VALUES ('$names[$i]', '$rsvp', '$food[$i]', '$message', '$email')";
}
/*
echo 'Completed SQL request array compiling.<br><br>';
echo "SQL request 1: $sql[0] <br><br>";
echo "SQL request 2: $sql[1] <br><br>";
echo "SQL request 3: $sql[2] <br><br>";*/
/*
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="Name = ". $name1 . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: erikdenboer92@gmail.com" . "\r\n" .
            "CC: zaneerasim@gmail.com";
if($email != NULL) {
    mail($email, $subject, $txt, $headers);
 
// Redirect to
header("Location:last.html");
}
*/
for ($i = 0; $i < count($sql); $i++) {
    if (mysqli_query($conn, $sql[$i])) {
        echo "New record created successfully! <br>";
    } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);

?>
<!--Main Content End -->
<?php include('templates/footer.php');?>
<script src='inc/scripts.js'></script>