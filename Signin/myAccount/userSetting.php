<!-- <#?php
    include '../../config/connecton.php';
?> -->
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
    <!-- <#?php 
        $sql = "SELECT * FROM userAccount;";
        $res = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($res);
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($res)){
                
            }
        }
    ?> -->
    <div class="main">
        <form action="crud.php" method="post">
            <div class="left-panel">
                <div class="head">
                    <h2 class="header">User settings</h2>
                </div>
                <div class="name">
                    <input type="name" name="" value="" >
                    <label for="">User Name</label>
                </div>
                <div class="name">
                    <input type="hidden" name="" value="id" disabled>
                    <label for=""></label>
                </div>
                <div class="phoneNumber">
                    <input type="text" name="" value="">
                    <label for="">Contact number</label>
                </div>
                <div class="email">
                    <input type="email" name="" value="" disabled>
                    <label for="">Email</label>
                </div>
                <div class="password">
                    <input type="password" class="pass" name="" value="">
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