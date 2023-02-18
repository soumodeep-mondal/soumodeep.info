<?php

// Connection My Database //
    include 'hostdb-conn.php';

    
    

if(isset($_POST['submit'])){

    $secret = '6Ld2O-YjAAAAADweEVlYzbJuRXdwwLoEeyqHNG9v';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '$response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);

    $name_inp= $_POST['name_cvdown'] ;
    $number_inp= $_POST['number_cvdown'] ;
    $agree=$_POST['agree'];

    if(isset($_POST['g-recaptcha-response'])){
        $recaptcha=$_POST['g-recaptcha-response'];

        if(!$recaptcha){
                echo "<script>alert('Please go back and check recaptcha box')</script>";
                echo "<script>location.href='index.php'</script>";
        }
        else{
            $secret="6Ld2O-YjAAAAADweEVlYzbJuRXdwwLoEeyqHNG9v";
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$recaptcha;
            $response=file_get_contents($url);
            $responseKey=json_decode($response,true);
                
            if($responseKey['success']){
                $sql="INSERT INTO `cv_download_info`(`Name`, `Mobile_No`, `agree`) VALUES ('$name_inp','$number_inp', '$agree')";
                $query=mysqli_query($conn,$sql);

                if($query){
                    echo "<script>alert('Sucessfully Download')</script>";
                    echo "<script>location.href='assets/img/cv/soumodeepmondalCV.pdf'</script>";
                }
                else{
                    echo "Error please try again later";
                }



            }

        }
    }
}
?>


