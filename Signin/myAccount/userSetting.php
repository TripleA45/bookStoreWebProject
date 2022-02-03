<?php 
     session_start(); 
     $id = $_SESSION['currentuserID'];
     $name = $_SESSION['currentUserName'];
     $email = $_SESSION['currentUserEmail'];
     $pass = $_SESSION['currentUserPassword'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <form action="crud.php" method="post">
            <div class="left-panel">
                <div class="head">
                    <h2 class="header">User settings</h2>
                </div>
                <div class="id">
                    <input type="name" name="" value="<?php $id?>" disabled>
                    <label for="">ID</label>
                </div>
                <div class="Username">
                    <input type="text" name="" value="<?php $name?>">
                    <label for="">User Name</label>
                </div>
                <div class="email">
                    <input type="email" name="" value="<?php $email?>">
                    <label for="">Email</label>
                </div>
                <div class="password">
                    <input type="password" class="pass" name="" value="<?php $pass?>">
                    <label for="">Password</label>
                </div>
                <div class="password">
                    <input type="password" class="pass" name="" value="">
                    <label for="">Confirm password</label>
                </div>
                <div class="btn">
                    <input type="submit" class="update" value="Update settings">
                    <input type="submit" class="delete" value="Delete">
                </div>
            </div>
            <div class="right-panel">
                <div class="sideImage">
                    <img src="../Icons/account.svg" alt="" class="side-logo">
                </div>
            </div>
        </form>
    </div>
</body>
</html>