<?php include 'connection.php' ?>

<?php 


    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productDesc = $_POST['productDesc'];
    $productRating = $_POST['productRating'];
   


    $insert_query = "INSERT INTO `ajax`(`prod_name`, `prod_desc`, `prod_price`, `prod_rating`) VALUES (:prodName,   :prodDesc, :prodPrice, :prodRating)";


    $insert_query_prepare = $connection->prepare($insert_query);

    $insert_query_prepare->bindParam(':prodName', $productName);
    $insert_query_prepare->bindParam(':prodDesc', $productDesc);
    $insert_query_prepare->bindParam(':prodPrice', $productPrice);
    $insert_query_prepare->bindParam(':prodRating', $productRating);
    $insert_query_prepare->execute();


    echo "Product Added Successfully"




?>