<?php


    $database_server = "localhost";
    $database_user = "root";
    $database_password = "";
    $database_name = "first_db";
    $connection = "";


    // $connection = mysqli_connect($database_server, $database_user, $database_password, $database_name);


    // if($connection){
    //     echo "Connected to database";
    // }else{
    //     echo "Not connected to database";
    // }




    try{
    $connection = mysqli_connect($database_server, $database_user, $database_password, $database_name);
    }
    catch(mysqli_sql_exception){
            echo "Not connected to database";
    }

    if($connection){
            echo "Connected to database";
    }

?>