<!-- Define header for all pages -->

<?php require_once('inc/variables.php'); ?>
<?php require_once('inc/functions.php'); ?>
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
	if($_SESSION['sid'] == session_id()){
			echo "<a href='logout.php'>Logout</a>";
	}
	else{
			if($_SERVER['SCRIPT_NAME'] == "/login.php"){
				return;
			}  
			else
			{
				header("location:login.php");
			}
	}	
?>

<!-- Navigation menu bar including highlighting of active page -->
<body>
	<div class="navbar">
		<header>
			<nav>
				<ul>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/index.php") {echo 'class="active"';}?>><a href="index.php">Home</a></li>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/about.php") {echo 'class="active"';}?>><a href="about.php">About the wedding</a></li>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/contact.php") {echo 'class="active"';}?>><a href="contact.php">Contact</a></li>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/rsvp.php") {echo 'class="active"';}?>><a href="rsvp.php">RSVP</a></li>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/login.php") {echo 'class="active"';}?>><a href="login.php">Login</a></li>
				</ul>
			</nav>
		</header>

		<!-- End of header -->