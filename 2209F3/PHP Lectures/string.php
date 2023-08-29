<?php 

    $username = ["Sohail", "Khan", "Niazi"];
    // $username = "Sohail Khan Niazi";
    $city = "karachi";
    $phone = "234-454-2342";



    // $result = strtolower($username);
    // $result = strtoupper($username);
    // $result = trim($username, "Soha");
    // $result = str_pad($city, 10, "-");
    // $result = str_replace("-", "", $phone);
    // $result = strrev($username);
    // $result = str_shuffle($username);
    // $result = strcmp($username, $username);
    // $result = strcmp($username, $city);
    // $result = strlen($username);
    // $result = strpos($username, "S");
    // $result = substr($username, 2, 6);
    // $result = substr($username, 6);
    // $result = explode(" ",$username);
    $result = implode(" ",$username);

    // foreach($result as $elem){
    //     echo $elem."<br>";
    // }

    // for($i =0 ; $i < 3; $i++){
    //     echo $result[$i] . "<br>";
    // };


    // foreach($result as $el){
    //     echo $el . "<br>";
    // }




    // foreach($username as $elem){
    //     echo $elem."<br>";
    // }



    echo $result;


?>