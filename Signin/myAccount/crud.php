<?php
    include('../config/connecton.php');
    include('userSetting.php');

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    
    if(isset($_POST['update'])){
        //get all the values from the form
        $userName = $_POST['userName'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = md5($_POST['oldPass']);
        $current_password = md5($_POST['newPass']);

        //creating the sql query
        $sql = "SELECT * FROM `userAccount` WHERE userName = '$userName' AND userPassword = '$password'";
        // execute the query
        $res = mysqli_query($conn, $sql);
        //check if the query is executed 
        if($res == true){
            $count = mysqli_num_rows($res);
            if($count == 1){
                $sql2 = "";
                {
                    $_SESSION['Update'] = 'Information has been successfully uppdated.'; 
                    header('location:'.SITEURL.'../userSetting.php');
                }
            }
        }else{
            header('location:'.SITEURL.'../userSetting.php');
        }
    }

    if(isset($_POST['delete'])){
        $phoneNumber = $_POST['phoneNumber'];
        header('location:'.SITEURL.'../userSetting.php');
    }
?>