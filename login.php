<?php include('inc/header.php')?>

<!--Main Content Start
Password-only login field -->
<form method="post" action="/check_login.php" name="login">
    <label for="password">Please enter the password:</label><br>
    <input type="password" id="password" name="password" placeholder="Check your invite!"><br>
    <input type="submit" value="Log in">
</form>

<!-- Toggle password visibility -->
<input type="checkbox" onclick="showpass()">Show password

<!--Main Content End -->
<?php include('inc/footer.php');?>
<script src='inc/scripts.js'></script>