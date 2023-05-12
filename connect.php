<?php

$con = mysqli_connect("localhost", "root", "", "hci_project");
if(!$con){
    print mysqli_error($con);
}else{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $insertquery = "INSERT INTO `contact`(`firstname`, `lastname`, `email`, `country`, `message`) 
    VALUES ('$firstname','$lastname','$email','$country','$message')";

    if(mysqli_query($con, $insertquery)){
        $success = "Thank you contact us, we will get to you shortly";
        header("Location:index.php?success=$success");
    }else{
        $error = mysqli_error($con);
        header("Location:index.php?error=$error");
    }
}
?>