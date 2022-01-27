<?php
    define('SITEURL','http://localhost:3000/');
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = 'havi&val';// when using cahne it to your password 
    $db_name = 'bookStoreDataBase';

    //Database connection
    $conn = mysqli_connect($db_host, $db_user, $db_pass);

    //Selecting Database
    if($conn){
        $db_select = mysqli_select_db($conn, $db_name) or die(mysqli_connect_error());
    }
    else{
        echo('Connection Error'.mysqli_connect_error());
        exit();
    }

    //Database connection
    // try{
    //     $conn = new PDO("mysql:host=$db_host;dbname=$db_name, $db_user, $db_pass");
    //     $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //     echo ("Connection success");
    // }catch(PDOException $e){
    //     echo('Connection Error'.$e ->getMessage());
    //     exit();
    // }
?>