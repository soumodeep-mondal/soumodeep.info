<?php
// Connection My Database ===============================================================//
include '../localdb-conn.php';



// Web Form validation ===============================================================//
if(isset($_POST['websubmit'])){
    if(isset($_FILES['imageweb'])){
        $errors= array();
        $imageweb=$_FILES['imageweb']['name'];
        $imageweb_temp=$_FILES['imageweb']['tmp_name'];
        if(empty($errors)==true){
            move_uploaded_file($imageweb_temp,"../assets/img/portfolio/web/".$imageweb);
        }
        else{   
            print_r ($errors);
        }
    }   
    $webtitle= $_POST['webtitle'];
    $web_subtitle= $_POST['web_subtitle'];
}    
$websql="INSERT INTO `web_uploadform`(`Title_webimg`, `subtitle_web`, `Image_webfile`) VALUES ('$webtitle', '$web_subtitle', '$imageweb')";

$query=mysqli_query($conn,$websql);
if($query){
    echo "<script>alert('Submit Sucessfully')</script>";
    echo "<script>location.href='upload-form.php'</script>";

}
// Web Form validation ===============================================================//














?>



