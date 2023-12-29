<?php
    session_start();
	session_destroy();
	setcookie("PHPSESSID",session_id(),time()-1);
    include('templates/header.php');
    echo "Logged out successfully";
    include('templates/footer.php');
?>