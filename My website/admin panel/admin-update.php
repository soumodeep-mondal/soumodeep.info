<?php
include '../hostdb-conn.php';
require "sequre-site.php";
$id=$_GET['id'];

if(isset($_POST['submit'])){
$user_inp= $_POST['username'] ;
$pass_inp= $_POST['password'] ;
$hash=password_hash($pass_inp,PASSWORD_DEFAULT);


$sql="UPDATE `admin-login` SET`user_sql`='$user_inp',`pass_sql`='$hash' WHERE id=$id";
$query=mysqli_query($conn,$sql);

  if($query){
      echo "<script>alert('You are update sucessfully ')</script>";
      echo "<script>location.href='admin-manage.php'</script>";
  }
  else{
      echo "error";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin update</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/adminicon.svg" rel="icon">
  <link href="../assets/img/adminicon.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="css/admin_panel.css" rel="stylesheet">


    <!-- ======================================================= -->
    <script type="text/javascript">
      function preventBack(){window.history.forward()};
      setTimeout("preventBack()",0);
        window.onload=function(){null;}
    </script>

  <!--  ======================================================== -->
</head>
<body> 

    <div class="login-box">
        <h2>Admin update</h2>
      <form action="" method="POST">
      <?php
          $sql="SELECT * FROM `admin-login` WHERE id=$id LIMIT 1";
          $query=mysqli_query($conn,$sql);
          $admindisplay=mysqli_fetch_assoc($query);
      ?>
          <div class="user-box">
              <input type="text" name="username" value="<?php echo $admindisplay['user_sql'];?>" required="">
              <label>Username</label>
          </div>
          <div class="user-box">
              <input type="password" name="password" value="<?php echo $admindisplay['pass_sql'];?>" required="">
              <label>Password</label>
          </div>
          <input type="submit" name="submit" value="Update" class="submitbtn">
      </form>
    </div>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Connect to contact mail File -->
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>
</html>

