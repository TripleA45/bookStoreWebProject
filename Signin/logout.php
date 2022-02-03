<?php 
include('../config/connecton.php');
include 'Login-register.php';

if(!isset($_SESSION)) 
{ 
    session_start(); 
}
$userStatus = 0;

//creating the sql query
$sql = "SELECT * FROM `tblUser` WHERE userName = '$userName' AND userPassword = '$password'";
// execute the query
$res = mysqli_query($conn, $sql);
//check if the query is executed 
if($res == true){
    $count = mysqli_num_rows($res);
    if($count == 1){
        $sql2 = "UPDATE `tblUser` WHERE userName = '$userName' AND userPassword = '$password' SET userStatus = $userStatus";
        $res2 = mysqli_query($conn, $sql2);
        if($res2 == true)
        {
            $_SESSION['Logged'] = 'Successfully logged out.'; 
            header('location:'.SITEURL.'../main.php');
        }
    }
}
?>