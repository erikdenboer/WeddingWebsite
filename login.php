<?php include('templates/header.php')?>

<!--Main Content Start -->

<form method="post" action="/check_login.php" name="login">
    <label for="password">Please enter the password:</label><br>
    <input type="password" id="password" name="password" placeholder="Check your invite!"><br>
    <input type="submit" value="Log in">
</form>

<!--Main Content End -->

<?php include('templates/footer.php');?>