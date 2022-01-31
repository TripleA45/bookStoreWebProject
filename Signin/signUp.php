<?php 
include('../config/connecton.php');
include 'Login-register.php';

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(isset($_POST['signup'])){
    //get all the values from the form
    $userName = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $userStatus = 1;
    //creating the sql query
    $sql = "INSERT INTO `userAccount` VALUES ('$userName', '$email', '$password')";
    // execute the query
    $res = mysqli_query($conn, $sql);
    //check if the query is executed 
    if($res == true){
        $count = mysqli_num_rows($res);
        if($count > 1){
            $sql2 = "UPDATE `userAccount` SET userStatus = $userStatus";
            $res2 = mysqli_query($conn, $sql2);
            if($res2 == true)
            {
                $_SESSION['Logged'] = 'Successfully logged in.'; 
                header('location:'.SITEURL.'../index.php');
            }
        }else{
            header('location:'.SITEURL.'Signin/Login-register.php');
        }
    }else{
        header('location:'.SITEURL.'Signin/Login-register.php');
    }
}

if(isset($_POST['close'])){
    header('location:'.SITEURL.'../index.php');
}
?>
