
<?php
session_start();

if(!isset($_SESSION['username'])){
    echo "<script>alert('Please login')</script>";
    echo "<script>location.href='admin-login.php'</script>";
}
?>