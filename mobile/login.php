<?php include('inc/header.php')?>

<!--Main Content Start
Password-only login field -->
<div class="gatekeeper">
    <form method="post" action="check_login.php" name="login">
        <label for="password">Please enter the password:<br>
        Voer hier het wachtwoord in:<br></label>
        <input type="password" id="password" name="password" placeholder="Check your invite! Zie uitnodiging!"><br>
    

        <!-- Toggle password visibility -->
        <input type="checkbox" onclick="showpass()">Show/Weergeven<br><br>

        <label for="lang">Select language/Kies taal:</label><br>
        <input type="radio" id="english" name="lang" value="en">
        <label for="english"><img src="/images/USflag.png" style="width:20px;" alt="USflag">English</label><br>
        <input type="radio" id="dutch" name="lang" value="nl">
        <label for="dutch"><img src="/images/NLflag.png" style="width:20px;" alt="NLflag">Nederlands</label><br>
        <input type="submit" value="Log in">
    </form>
</div>
<!--Main Content End -->
<?php include('inc/footer.php');?>
<script src='inc/scripts_en.js'></script>
