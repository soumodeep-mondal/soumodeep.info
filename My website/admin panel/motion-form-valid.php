<?php
// Connection My Database ===============================================================//
//include '../localdb-conn.php';
include '../hostdb-conn.php';



// Web Form validation ===============================================================//
if(isset($_POST['motionsubmit'])){
    if(isset($_FILES['imagemotion'])){
        $errors= array();
        $imagemotion=$_FILES['imagemotion']['name'];
        $imagemotion_temp=$_FILES['imagemotion']['tmp_name'];
        if(empty($errors)==true){
            move_uploaded_file($imagemotion_temp,"../assets/img/portfolio/motion/".$imagemotion);
        }
        else{   
            print_r ($errors);
        }
    }   
    $motiontitle= $_POST['motiontitle'];
    $motion_subtitle= $_POST['motion_subtitle'];
}    
$motionsql="INSERT INTO `motion_uploadform`(`Title_motion`, `subtitle_motion`, `Image_motionfile`) VALUES ('$motiontitle', '$motion_subtitle', '$imagemotion')";

$query=mysqli_query($conn,$motionsql);
if($query){
    echo "<script>alert('Submit Sucessfully')</script>";
    echo "<script>location.href='motion-form.php'</script>";
}
// Web Form validation ===============================================================//

?>



