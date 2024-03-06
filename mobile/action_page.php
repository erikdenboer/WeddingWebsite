<?php 
include('inc/header.php');

//Connect to MySQL database
$server = 'localhost';
$user = 'eandftug_DM';
$pw = 'Ens0rcelled';
$db = 'eandftug_RSVPs';

$conn = mysqli_connect($server, $user, $pw, $db); 
if (!$conn)  {
    die('Connection Failed: ' . mysqli_connect_error());
}
//echo 'Connected successfully!<br><br>';

//Set session variable to indicate that RSVP form has been submitted (used to trigger confirmation for user)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['posted'] = true;
}

// Get data from form
$rsvp = mysqli_real_escape_string($conn, $_POST['rsvp']);
if($_SESSION["lang"] == "nl"){
    if ($rsvp == 1){                //Set RSVP to yes/no instead of binary before sending to database
        $rsvp = 'Ja';
    } elseif ($rsvp == 0){
    $rsvp = 'Nee';
    }
} else{
    if ($rsvp == 1){
        $rsvp = 'Yes';
    } elseif ($rsvp == 0){
    $rsvp = 'No';
    }
}
//Gather replies. Only gather optional variables if they were actually set
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
if($_POST['message']) {
    $message = mysqli_real_escape_string($conn, $_POST['message']);
}
/*if($_POST['email']){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
}*/

//echo 'Variables collected.<br><br>';
//Loop through name/food combo's, creating one SQL request for each. If user RSVPs for multiple guests,
//all will be listed with same RSVP, message and email address values.
for ($i=0; $i < count($names); $i++) {
    $sql[$i] = "INSERT INTO Responses (Name, RSVP, Food, Comment, Email) VALUES ('$names[$i]', '$rsvp', '$food[$i]', '$message', '$email')";
}

//echo 'Completed SQL request array compiling.<br><br>';
//Send query to database; set session variable 'RSVP' based on result (used to notify user of result)
for ($i = 0; $i < count($sql); $i++) {
    if (mysqli_query($conn, $sql[$i])) {
        //echo "New record created successfully! <br><br><br>";
        $_SESSION['RSVP'] = 1;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $_SESSION['RSVP'] = 0;
    }
}

//Load all submitted variables into one single array for compiling of confirmation email body
//Compilation of body for email is done in template file in inc directory
//Note that confirmation email will still get sent to bride and groom as notification, even is $email is not entered by user

if(isset($email)){
    echo 'Compiling email...<br>';    
} else {
    echo 'Compiling notification email to hosts...<br>';
    $email = 'noreply@eandzgethitched.com';
}

if($rsvp == 'Yes'){
    if($_SESSION["lang"] == "nl"){
        include('inc/RSVP_yes_nl.php');
        sendmail($email, $_POST['name1'], $body);
    } elseif($_SESSION["lang"] == "en"){
        include('inc/RSVP_yes_en.php');
        sendmail($email, $_POST['name1'], $body);
    }
} elseif($rsvp == 'No') {
    if($_SESSION["lang"] == "nl"){
        include('inc/RSVP_no_nl.php');
        sendmail($email, $_POST['name1'], $body);
    } elseif($_SESSION["lang"] == "en"){
        include('inc/RSVP_no_en.php');
        sendmail($email, $_POST['name1'], $body);
    }
}

//Close database connection and return to main page
mysqli_close($conn);
if($_SESSION["lang"] == "nl"){
    header("location:index_nl.php");
} else {
    header("location:index_en.php");
}

include('inc/footer.php');?>
<script src='inc/scripts_en.js'></script>