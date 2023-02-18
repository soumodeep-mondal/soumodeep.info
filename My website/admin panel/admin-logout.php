<?php

session_start();

if(isset($_SESSION['username'])){
    session_unset();
    session_destroy();
    echo header("location:admin-login.php");
}
else{
    echo header("location:admin-login.php");
}


?>