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
<body>
	<div class="navbar">
		<header>
			<nav>
				<ul>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/index.php") {echo 'class="active"';}?>><a href="index.php">Home</a></li>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/about.php") {echo 'class="active"';}?>><a href="about.php">About the wedding</a></li>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/contact.php") {echo 'class="active"';}?>><a href="contact.php">Contact</a></li>
					<li <?php if($_SERVER['SCRIPT_NAME'] == "/rsvp.php") {echo 'class="active"';}?>><a href="rsvp.php">RSVP</a></li>
				</ul>
			</nav>
		</header>