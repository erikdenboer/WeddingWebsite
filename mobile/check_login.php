<?php include("inc/header.php")?>

<!--Main Content Start -->

<?php
$password = $_POST["password"];
if($password == "Shackled forever")
{
    session_start();
    $_SESSION["sid"] = session_id();
    if($_POST["lang"] == "dutch"){
        header("location:index_nl.php");
    } else {
        header("location:index_en.php");
    }
} else{
    $_SESSION['login_failed'] = 1;
}
?>
    
<!--Main Content End -->
<?php include("inc/footer.php");?>