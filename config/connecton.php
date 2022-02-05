<?php
    define('SITEURL','http://localhost/');
    $db_Host = 'localhost';
    $db_User = 'root';
    $db_password = '1234';
    $db_Name = 'bookstoredb';

    // //Database connection
    $conn = mysqli_connect($db_Host, $db_User, $db_password, $db_Name);
    // //Selecting Database
    if(!$conn){
        die('Connection failed. '.mysqli_connect_error());
    }
    else{
        echo('Connection Error'.mysqli_connect_error());
        exit();
    }
    
    // Set DSN
    // $dsn = 'mysql:host='. $db_Host . ':dbname='. $db_Name;

    // //Create a PDO instance
    // $conn = new PDO($dsn, $db_User, $db_password);

    // 
    // if(!$conn){
    //     die(mysqli_error($conn));
    // }
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