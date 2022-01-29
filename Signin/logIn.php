<?php 
include('../config/connecton.php');
include 'Login-register.php';

if(isset($_POST['signin'])){
    //get all the values from the form
    $userName = $_POST['username'];
    $password = md5($_POST['password']);

    //creating the sql query
   
    // execute the query

    //check if the query is executed 
    if($res == true){
        $count = mysqli_num_rows($res);
        if($count == 1){
            header('location:'.SITEURL.'../index.php');
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