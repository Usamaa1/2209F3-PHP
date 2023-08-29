<?php
include 'connection.php';
?>

<?php


    $product_name = $_POST['productName'];
    $product_desc = $_POST['productDesc'];
    $product_price = $_POST['productPrice'];


    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // $sql = "INSERT INTO products (product_name, product_desc, product_price) VALUES ('$product_name', '$product_desc', '$product_price')";
        // if($conn->query($sql) === TRUE){
        //     echo "New record created successfully";
        // }else{
        //     echo "Error: ". $sql. "<br>". $conn->error;
        // }

        // echo " -------- $product_name ---- $product_desc ---- $product_price ";

        if(isset($_POST['submit'])){

            if(empty($product_name) && empty($product_desc) && empty($product_price)){
                echo "<script>alert('Please fill all the fields')</script>";
            }else{
                
                
                $sql = $connection->prepare("INSERT INTO crud_table (prod_name, prod_desc, prod_price) VALUES ('$product_name', '$product_desc', '$product_price')");
    
                $sql->execute();
    
                echo "<br> Product Added successfully! <br>";
    
    
    
            }

        }

   

        




    }

// $sql = $connection->prepare("SELECT * FROM crud_table");

// $sql->execute();



// foreach ($sql->fetch(PDO::FETCH_NUM) as $val) {
//     echo "$val <br>";
// }





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method = 'post'>
    <label for="">Product Name</label>
    <input type="text" name="productName" id=""><br><br>
    <label for="">Product Description</label>
    <input type="text" name="productDesc" id=""><br><br>
    <label for="">Product Price</label>
    <input type="text" name="productPrice" id=""><br><br>
    <input type="submit" value="submit" name='submit'>
    </form>
</body>

</html>