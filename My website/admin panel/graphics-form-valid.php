<?php
    //include '../localdb-conn.php';
include '../hostdb-conn.php';
    
// Graphics Form validation ===============================================================//
if(isset($_POST['graphicssubmit'])){
    if(isset($_FILES['imagegraphics'])){
        $errors= array();
        $imagegraphics=$_FILES['imagegraphics']['name'];
        $imagegraphics_temp=$_FILES['imagegraphics']['tmp_name'];
        if(empty($errors)==true){
            move_uploaded_file($imagegraphics_temp,"../assets/img/portfolio/graphics/".$imagegraphics);
        }
        else{   
            print_r ($errors);
        }
    }   
    $graphicstitle= $_POST['graphicstitle'];
    $graphics_subtitle= $_POST['graphics_subtitle'];
}    
$graphicssql="INSERT INTO `graphics_uploadform`(`Title_graphics`, `subtitle_graphics`, `Image_graphicsfile`) VALUES ('$graphicstitle', ' $graphics_subtitle',   '$imagegraphics')";

$query=mysqli_query($conn,$graphicssql);
if($query){

    echo "<script>alert('Submit Sucessfully')</script>";
    echo "<script>location.href='graphics-form.php'</script>";
}
// Graphics Form validation ===============================================================//

?>


