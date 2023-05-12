<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "hci_project");
if(!$con){
    print mysqli_error($con);
}else{
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $selectquery = "SELECT * FROM `account` WHERE `email`= '".$username."' AND `password` = '".$password."' ;";
    $result = mysqli_query($con, $selectquery);
    $resut_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if($result->num_rows > 0){
        $_SESSION['username'] = $result_data[0]['email'];
        $sucess = "You have logged in successfully!";
        header("Location:index.php?error=$error");
    }else{
        $error = "This account is not yet created";
        header("Location:register.php?error=$error");
    }
}
?>