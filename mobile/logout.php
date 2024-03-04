<?php
    session_start();
	session_destroy();
	setcookie("PHPSESSID",session_id(),time()-1);
    include('inc/header.php');
    echo "Logged out successfully";
    include('inc/footer.php');
?>