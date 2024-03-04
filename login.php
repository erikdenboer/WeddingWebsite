<?php include('inc/header.php')?>

<!--Main Content Start
Password-only login field -->
<div class="gatekeeper">
    <form method="post" action="check_login.php" name="login">
        <label for="password">Please enter the password:<br>
        Voer hier het wachtwoord in:<br></label>
        <input type="password" id="password" name="password" placeholder="Check your invite! Zie uitnodiging!"><br>
    

        <!-- Toggle password visibility -->
        <input type="checkbox" onclick="showpass()">Show password/Toon wachtwoord<br><br>
        <input type="submit" value="Log in">
    </form>
</div>
<!--Main Content End -->
<?php include('inc/footer.php');?>
<script src='inc/scripts.js'></script>
