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
        $email = $_POST['email'];
        $password = md5($_POST['oldPass']);
        $current_password = md5($_POST['newPass']);
        $userId = $_SESSION['currentuserID'];


        //creating the sql query
        $sql = "SELECT * FROM `userAccount` WHERE userId = $userId";
        // execute the query
        $res = mysqli_query($conn, $sql);
        //check if the query is executed 
        if($res == true){
            $count = mysqli_num_rows($res);
            if($count == 1){
                if($password == $current_password){
                    $sql2 = "UPDATE `userAccount` WHERE userId = $userId SET userName = '$userName', userEmail = '$email', userPasword = '$password'";
                    $res2 = mysqli_query($conn, $sql2);
                    if($res2 == true){
                        $_SESSION['Update'] = 'Information has been successfully updated.'; 
                        header('location:'.SITEURL.'../userSetting.php');
                    }
                }
            }
        }else{
            header('location:'.SITEURL.'../userSetting.php');
        }
    }

    if(isset($_POST['delete'])){
        $email = $_POST['email'];
         //creating the sql query
         $sql = "DELETE userEmail FROM `userAccount` WHERE userId = $userId";
         // execute the query
         $res = mysqli_query($conn, $sql);
         //check if the query is executed 
         if($res == true){
             $count = mysqli_num_rows($res);
             if($count == 1){
                $_SESSION['Delete'] = 'Information has been successfully deleted.'; 
                header('location:'.SITEURL.'../userSetting.php');
             }
        }else{
            header('location:'.SITEURL.'../userSetting.php');
        }
    }
?>