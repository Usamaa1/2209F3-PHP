<?php


$db_name = "mysql:host=localhost;dbname=pdo_test";
$username = "root";
$password = "";


$connection = new PDO($db_name, $username, $password);


// $sql = $connection->query("SELECT * from pdo_table");



    // PDO::FETCH_ASSOC
    // PDO::FETCH_NUM
    // PDO::FETCH_BOTH
    // PDO::FETCH_OBJ



    // $data = $sql->fetchAll(PDO::FETCH_NUM);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    // $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    // $data = $sql->fetchAll(PDO::FETCH_BOTH);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    // $data = $sql->fetchAll(PDO::FETCH_OBJ);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";


    // ****************** FOR LOOP ******************
    // foreach($data as $val){
    //     foreach($val as $v){
    //         echo $v."<br>";
    //     }
    // }




// foreach ($sql->fetch(PDO::FETCH_ASSOC) as $row) {
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
// }




// ********************************************************************
// ********************************************************************
// ************************ PREPARE METHOD ****************************
// ********************************************************************
// ********************************************************************



    // NO need of bind method


    // $sql = $connection->prepare("SELECT * FROM pdo_table");

    // $sql->execute();


    //     $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";




        // Need of bind method

        // $city = 'Islamabad';

        // $sql = $connection->prepare("SELECT * FROM pdo_table WHERE city = ?  AND country = ?");
        // $sql = $connection->prepare("SELECT * FROM pdo_table WHERE city = :city");

        // $sql->bindValue(1, "Islamabad", PDO::PARAM_STR);   //---------> only value passed in the arguments
        // $sql->bindValue(2, "Pakistan", PDO::PARAM_STR);   //---------> only value passed in the arguments
        // $sql->bindParam(1, $city, PDO::PARAM_STR);  //---------> only variables passed in the arguments
        // $sql->bindValue(':city', "Islamabad", PDO::PARAM_STR); 
        // $sql->execute(array('Karachi','Pakistan'));
    
    
        // $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";


?>