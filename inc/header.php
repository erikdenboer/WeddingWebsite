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
	<?php 
	if($_SERVER['SCRIPT_NAME'] == "/index.php") {
		echo '<link rel="stylesheet" href="style_index.css">';
	} else{
		echo '<link rel="stylesheet" href="style.css">';
	}
	?>    
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
			<ul>
				<li <?php if($_SERVER['SCRIPT_NAME'] == "/index.php") {echo 'class="active"';}?>><a href="index.php">Home</a></li>
				<li <?php if($_SERVER['SCRIPT_NAME'] == "/about.php") {echo 'class="active"';}?>><a href="about.php">About the wedding</a></li>
				<li <?php if($_SERVER['SCRIPT_NAME'] == "/contact.php") {echo 'class="active"';}?>><a href="contact.php">Contact</a></li>
				<li <?php if($_SERVER['SCRIPT_NAME'] == "/rsvp.php") {echo 'class="active"';}?>><a href="rsvp.php">RSVP</a></li>
				<?php if($_SESSION['sid'] == session_id()){echo '<li><a href="logout.php">Log out</a></li>';}?>
			</ul>
		</header>
	</div>

<!-- End of header -->