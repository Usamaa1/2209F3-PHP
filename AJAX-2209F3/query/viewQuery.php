<?php include "connection.php" ?>
<?php


$view_query = "SELECT * FROM `ajax`";
$view_query_prepare = $connection->prepare($view_query);
$view_query_prepare->execute();
$products = $view_query_prepare->fetchAll(PDO::FETCH_ASSOC);

// print_r($products);


foreach($products as $product){

?>
  <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $product['prod_name'] ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $product['prod_price'] ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $product['prod_rating'] ?></h6>
            <p class="card-text"><?= $product['prod_desc'] ?></p>
            <a href="#" class="card-link">Update</a>
            <button class="btn btn-danger delBtn" delId='<?= $product['prod_id'] ?>' >Delete</button>
        </div>
    </div>

<?php } ?>
