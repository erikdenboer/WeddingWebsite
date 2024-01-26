<?php include('inc/header.php')?>

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

//Set session variable to indicate that RSVP form has been submitted (used to trigger confirmation for user)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['posted'] = true;
}

// Get data from form
$rsvp = mysqli_real_escape_string($conn, $_POST['rsvp']);
if ($rsvp == 1){                //Set RSVP to yes/no instead of binary before sending to database
    $rsvp = 'Yes';
} else if ($rsvp == 0){
    $rsvp = 'No';
}
//Gather names and food choices in array
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
$email = mysqli_real_escape_string($conn, $_POST['email']);

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
        echo "New record created successfully! <br>";
        $_SESSION['RSVP'] = 1;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $_SESSION['RSVP'] = 0;
    }
}

//Compilation of confirmation email: to bride & groom as notification, and to guest if they enter their own email
$subject = "Your RSVP to E&Z's wedding!";
$mainmessage = "<h1>Your RSVP to E&Z's wedding!</h1>
<p>Thanks for submitting your RSVP to us. This email is a confirmation that we've received it correctly. You entered the following values:</p>";
$altmess = "Hello!";

if ($email) {
    echo 'Prepping email...';
    sendmail_no($email, $names[0]);//, $subject, $mainmessage, $altmess);
}

//Close database connection and return to RSVP page
mysqli_close($conn);
//header('Location: rsvp.php');
?>
<!--Main Content End -->
<?php include('inc/footer.php');?>
<script src='inc/scripts.js'></script>