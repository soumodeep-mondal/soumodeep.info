<?php
//include '../localdb-conn.php';
include '../hostdb-conn.php';
require "sequre-site.php";

  if(isset($_POST['delete_btn_set'])) {
    $del_id = $_POST['delete_id'];

        $sql="DELETE FROM `graphics_uploadform` WHERE id='$del_id'";
        $query=mysqli_query($conn,$sql);



  }
?>