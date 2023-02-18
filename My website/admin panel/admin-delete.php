<?php
//include '../localdb-conn.php';
include '../hostdb-conn.php';
require "sequre-site.php";
// Delete function
$id=$_GET['id'];

$sql="DELETE FROM `admin-login` WHERE id=$id";
$query=mysqli_query($conn,$sql);
if($query){
    echo "<script>alert('Delete Sucessfully')</script>";
    echo "<script>location.href='admin-manage.php'</script>";
}
else{
    die(mysqli_error($conn));
}  
// Delete function
?>