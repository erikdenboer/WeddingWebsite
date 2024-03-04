<!-- Define header for all pages -->

<?php require_once('variables.php');
	  require_once('functions.php');
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="<?php echo $site_icon; ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $site_icon; ?>">
</head>

<?php
	//Check whether user is logged in. If not, send to login page, or exit loop if already there.
	session_start();
	if($_SESSION['sid'] !== session_id()){
			if($_SERVER['SCRIPT_NAME'] == "/login.php"){
				return;
			}  
			else {header("location:login.php");}
	}
	if($_SESSION['login_failed'] === 1){
		if($_POST["lang"] === "Dutch"){
			echo "<script type='text/javascript'>
			alert(Sorry, dat klopt niet helemaal. Weet je zeker dat je het exact zoals op de uitnodiging gespeld hebt? Als je deze melding blijft zien, neem dan contact op met de bruidegom.
			</script>";
			//header("location:login.php");
		}
		else{
			echo "<script type='text/javascript'>
			alert(Sorry, that's not right. Make sure your spelling is exactly as on the invite or contact the groom if you keep seeing this error.)
			</script>";
			//header("location:login.php");
		}
	}
	//Check whether RSVP form has just been posted successfully
	if (isset($_SESSION['RSVP']) && $_SESSION['RSVP']) {
		unset($_SESSION['RSVP']);
		echo "<script type='text/javascript'>alert('RSVP received!')</script>";
	 } else if (isset($_SESSION['RSVP']) && !$_SESSION['RSVP']) {
		echo "<script type='text/javascript'>alert('It seems something went wrong! Please contact the groom to check.')</script>";
	 }
?>
<body>
<!-- Navigation menu bar including highlighting of active page and login/logout button depending on session status of user -->
	<div id="menu">
		<header>
			<nav>
				<ul>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/index.php") {echo 'class="active"';}?>><a href="#home">Home</a></li>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/about.php") {echo 'class="active"';}?>><a href="#about">About the wedding</a></li>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/contact.php") {echo 'class="active"';}?>><a href="#contact">Contact</a></li>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/rsvp.php") {echo 'class="active"';}?>><a href="#rsvp">RSVP</a></li>
					<?php if($_SESSION['sid'] == session_id()){echo '<li><a href="logout.php">Log out</a></li>';}?>
				</ul>
			</nav>
		</header>
	</div>
<!-- End of header -->