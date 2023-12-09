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
	<div class="wrapper">
		<header>
			<h1><?php echo $title; ?></h1>
			<nav>
				<ul>
					<li><a href="about.php">About the wedding</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="rsvp.php">RSVP</a></li>
				</ul>
			</nav>
		</header>