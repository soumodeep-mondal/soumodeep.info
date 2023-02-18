
<?php
    include '../hostdb-conn.php';


$user_inp= $_POST['username'] ;
$pass_inp= $_POST['password'] ;


$sql="SELECT * FROM `admin-login` WHERE user_sql='$user_inp'";
$query=mysqli_query($conn,$sql);
$num=mysqli_num_rows($query);
if ($num==1){
    while($r=mysqli_fetch_assoc($query)){

        if(password_verify($pass_inp,$r['pass_sql'])){
            session_start();
            $_SESSION['username']=$user_inp;
            echo header("location:admin-dashboard.php");
           }
           else{
               echo "<script>alert('Wrong input')</script>";
               echo "<script>location.href='admin-login.php'</script>";
           }
    }
}
?>
<!--  Register Validation End  echo header("location:welcomeuser.php");  ===================================================================-->

