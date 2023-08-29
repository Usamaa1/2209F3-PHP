<?php



    $dbname = "mysql:host=localhost;dbname=crud";
    $dbuser = "root";
    $dbpass = "";

    
    try{
        $connection = new PDO($dbname,$dbuser,$dbpass);
        echo "Connection Sucessfull";
    }
    catch(PDOException){
        die("Connection Failed");
    }







?>