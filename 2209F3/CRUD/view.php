<?php
include 'connection.php';
?>

<?php


    $sql = $connection->prepare("SELECT * FROM `crud_table`");


        $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
    $resultInJSON = json_encode($result);

    echo "<script>console.log($resultInJSON)</script>";


    echo "<pre>";
    print_r($result);
    echo "</pre>";


    // foreach($result as $val){
    //     // echo "<pre>";
    //     // print_r($val);
    //     // echo "</pre>";

    //     echo "$val[prod_name] <br>";

    
        ?>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            
        </body>
        </html>











        
    <!-- } -->

