<?php 


    try
    {
        $connection = new PDO('mysql:host=localhost;dbname=2209f3','root','');
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }




?>