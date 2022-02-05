<?php 
include('../config/connecton.php');
include 'Login-register.php';
 
session_start();
$id = $_SESSION['currentuserID'];
$name = $_SESSION['currentUserName'];
$email = $_SESSION['currentUserEmail'];
$pass = $_SESSION['currentUserPassword']; 
$userStatus = 0;

//creating the sql query
$sql = "SELECT * FROM `useraccount` WHERE userName = '$name' AND userPassword = '$pass'";
// execute the query
$res = mysqli_query($conn, $sql);
//check if the query is executed 
if($res == true){
    $count = mysqli_num_rows($res);
    if($count == 1){
        $sql2 = "UPDATE `useraccount` WHERE userName = '$name' AND userPassword = '$pass' SET userStatus = $userStatus";
        $res2 = mysqli_query($conn, $sql2);
        if($res2 == true)
        {
            $_SESSION['Logged'] = 'Successfully logged out.'; 
            header('location:'.SITEURL.'../main.php');
        }
    }
}
?>