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
    $userId = 0;
    //creating the sql query
    $sql = "INSERT INTO `useraccount`(userName, userEmail, userPassword, userStatus) VALUES ('$userName', '$email', '$password', $userStatus)";
    // execute the query
    $res = mysqli_query($conn, $sql);
    //check if the query is executed 
    if($res == true){
        $count = mysqli_num_rows($res);
        if($count == 1){
            while($row = mysqli_fetch_assoc($res)){
                $userID= $row['userID'];
            }
                $_SESSION['currentuserID'] = $userId; 
                $_SESSION['currentUserName'] = $userName;
                $_SESSION['currentUserPassword'] = $password ;
                $_SESSION['currentUserEmail'] = $email;
                $_SESSION['currentUserStatus'] = $userStatus;
                $_SESSION['Logged'] = 'Successfully logged in.'; 
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
