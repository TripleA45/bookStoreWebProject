<?php
    define('SITEURL','http://localhost/');
    $db_Host = 'localhost';
    $db_User = 'adem';
    $db_password = '1234';
    $db_Name = 'bookstoredatabase';

    // //Database connection
    // $conn = mysqli_connect("localhost", "root", "1234");

    // // //Selecting Database
    // if(!$conn){
    //     die('Connection failed. '.mysqli_connect_error());
    // }
    // else{
    //     echo('Connection Error'.mysqli_connect_error());
    //     exit();
    // }
    
    // Set DSN
    $dsn = 'mysql:host='. $db_Host . ':dbname='. $db_Name;

    //Create a PDO instance
    $conn = new PDO($dsn, $db_User, $db_password);

    if($conn){
        echo('Success');
    }else{
        echo('failure');
    }

    // $conn = new mysqli($db_Host, $db_User, $db_password, $db_Name);
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