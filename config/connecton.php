<?php
    $db_host = "localhost";
    $db_user = " root";
    $db_pass = "havi&val";// when using cahne it to your password 
    $db_name = "bookStoreDB";

    //Database connection
    $conn = mysqli_connect($db_host, $db_user, $db_pass) or die(mysqli_connect_error());

    //Selecting Database
    $db_select = mysqli_select_db($conn, $db_name) or die(mysqli_connect_error());
?>