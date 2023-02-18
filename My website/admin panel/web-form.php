<?php
//include '../localdb-conn.php';
include '../hostdb-conn.php';
require "sequre-site.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Soumodeep Mondal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://img.icons8.com/external-ui-website-adri-ansyah/64/null/external-interface-basic-ui-ui-website-adri-ansyah-20.png" rel="icon">
  <link href="https://img.icons8.com/external-ui-website-adri-ansyah/64/null/external-interface-basic-ui-ui-website-adri-ansyah-20.png" rel="apple-touch-icon">

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

  <!-- Google reCAPTCHA script  -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>



  <!-- Template Main CSS File -->
  <link href="../assets/css/stylemain.css" rel="stylesheet">
  <link href="css/upload_form.css" rel="stylesheet">

    <!-- ======================================================= -->
    <script type="text/javascript">
      function preventBack(){window.history.forward()};
      setTimeout("preventBack()",0);
        window.onload=function(){null;}
    </script>

  <!--  ======================================================== -->
</head>

<body>




  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <div class="profile-img rounded-circle"></div>
        
        <h1 class="text-light"><?php echo "Welcome "."<br>" .$_SESSION['username'];?></h1>
        <div class=" mt-3 text-center"style="color:#fff;">
          <h4 class="fw-bold">Database Management</h4>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="admin-dashboard.php" class="nav-link active"><i class="bx bx-home"></i> <span>Dashboard</span></a></li>

          <li>
            <a  class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
            <i class="bx bxs-file-import"></i><span>Portfolio upload</span></a>
            <ul class="collapse multi-collapse" id="multiCollapseExample1">
              <li><a class="dropdown-item" href="graphics-form.php">Graphics Design Form</a></li>
              <li><a class="dropdown-item" href="web-form.php">Web Design Form</a></li>
              <li><a class="dropdown-item" href="motion-form.php">Motion Design Form</a></li>
            </ul>
          </li>

          <li>
            <a  class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">  
            <i class="bx bx-data"></i><span>Database Manage</span></a>
            <ul class="collapse multi-collapse" id="multiCollapseExample2">
            <li><a class="dropdown-item" href="admin-manage.php">Admin Database</a></li>
              <li><a class="dropdown-item" href="graphics-manage.php">Graphics Database</a></li>
              <li><a class="dropdown-item" href="web-manage.php">Web Database</a></li>
              <li><a class="dropdown-item" href="motion-manage.php">Motion Database</a></li>
            </ul>
          </li>
          <li><a href="https://mail.google.com/mail/u/1/#inbox" class="nav-link"><i class="bx bx-envelope"></i> <span>Mailbox</span></a></li>
          <li><a href="#" class="nav-link"><i class="bx bx-folder"></i> <span>File manager</span></a></li>

          <li><a href="admin-logout.php" class="nav-link">
            <svg version="1.1" id="Layer_1" width="25px" id="svghover_logout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 301.11 324.92" style="enable-background:new 0 0 301.11 324.92;" xml:space="preserve"><style type="text/css">.st0{fill:#149DDD;}</style><g><path class="st0" d="M150.39,290.9c55.82-0.39,103.56-41.27,110.8-96.15c5.41-41.01-8.76-74.96-39.32-102.3c-4.71-4.22-10.04-7.78-15.28-11.37c-7.07-4.85-10.29-11.8-7.98-18.04c2.75-7.42,10.69-11.94,19.05-10.46c2.62,0.46,5.31,1.53,7.58,2.95c38.58,24.13,61.34,58.8,67.71,103.81c9.52,67.33-30.11,132.15-94.03,154.62c-76.93,27.04-159.78-13.81-185.17-91.32C-7.09,159.1,19.99,88.01,77.82,54.42c9.53-5.54,20.18-2.11,24.53,8.01c2.41,5.62,0.6,10.59-3.22,14.8c-1.89,2.08-4.39,3.65-6.75,5.25c-30.66,20.91-49.54,49.33-53.04,86.58c-5.24,55.81,31.67,106.04,86.31,118.32C133.75,289.21,142.13,289.76,150.39,290.9z"/><path class="st0" d="M166.53,74.48c0,18.59,0.1,37.18-0.03,55.77c-0.08,11.95-9.75,18.95-21.18,15.48c-6.09-1.85-9.5-6.15-10.4-12.42c-0.19-1.35-0.18-2.74-0.18-4.11c-0.01-36.43-0.02-72.86,0-109.29c0.01-8.84,3.39-14.09,10.34-16.31c11.41-3.65,21.31,3.2,21.41,15.12C166.64,37.3,166.52,55.89,166.53,74.48z"/></g></svg> 
            <span>&nbsp; Logout</span></a>
          </li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->



    <div class="container-fluid form-body">
        <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="form-box">
                      <div class="upload-icon">
                        <img src="https://img.icons8.com/external-bearicons-blue-bearicons/100/null/external-upload-call-to-action-bearicons-blue-bearicons.png" width="60px"/>
                      </div>
                        <h2>Web Upload</h2>
                        <form action="web-form-valid.php" method="POST" enctype="multipart/form-data">
                             <div class="user-box">
                                <input type="text" name="web-title" required=>
                                <label>Title</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="web-subtitle" required>
                                <label>Sub Title</label>
                            </div>
                            <div class="user-box">
                                <input type="file" name="imageweb" required>
                            </div>
                            <div class="user-box">
                                <input type="text" name="web_subtitle" >
                                <label>Project Information</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="web_subtitle" >
                                <label>Category</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="web_subtitle" >
                                <label>Client</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="web_subtitle" >
                                <label>Date</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="web_subtitle" >
                                <label>Url</label>
                            </div>
                            <div class="user-box">
                                <input type="text" name="web_subtitle" >
                                <label>Title Details</label>
                            </div>
                            <div class="user-box">
                                <textarea class="form-control" name="details" rows="4"></textarea>
                                <label>Details</label>
                            </div>
                                <input type="submit" name="websubmit" class="submitbtn">
                        </form>
                    </div>
                </div>
        </div>
    </div>
    


   


    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <span>Soumodeep Mondal</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Connect to contact mail File -->

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

  </body>
  </html>