<?php include('templates/header.php')?>

<!--Main Content Start -->

<?php
$password = $_POST['password'];
if($password == 'Shackled forever!')
{
    session_start();
    $_SESSION['sid']=session_id();
    header("location:index.php");
} else 
    {echo "Sorry, that's not right. Make sure your spelling is exactly as on the invite or contact the groom if you keep seeing this error.";}
?>
    
<!--Main Content End -->
<?php include('templates/footer.php');?>