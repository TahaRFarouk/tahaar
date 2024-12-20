<?php

    $con = mysqli_connect('https://taharfarouk.github.io/tahaar/','root');
    if ($con){
        echo "Connection Succefult";
    }else {
        echo "Connection Faild";
    }
    mysqli_select_db($con,'contactport');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    $query ="INSERT INTO users (name,email,number,subject,message) VALUES('$name','$email','$number','$subject','$message')";
    mysqli_query($con,$query);
    header('location:index.php'); 
?>
