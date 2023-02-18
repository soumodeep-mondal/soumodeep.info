<!--  Connection My Database ===============================================================-->
<?php
// Change Table Name //
include '../hostdb-conn.php';

$user_inp= $_POST['username'] ;
$pass_inp= $_POST['password'] ;
$hash=password_hash($pass_inp,PASSWORD_DEFAULT);


$sql="INSERT INTO `admin-login`( `user_sql`, `Pass_sql`) VALUES ('$user_inp','$hash')";
$query=mysqli_query($conn,$sql);

if($query){
    echo "<script>alert('You are registered sucessfully & Please sign in')</script>";
    echo "<script>location.href='admin-login.php'</script>";
}
else{
    echo "error";
}
?>




                    
              


