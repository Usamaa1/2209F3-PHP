<?php include "connection.php" ?>
<?php

    $delId = $_POST['delId'];
    $deleteQuery = "DELETE FROM `ajax` WHERE `prod_id` = :prodId";
    $deleteQueryPrepare = $connection->prepare($deleteQuery);
    $deleteQueryPrepare->bindParam(':prodId', $delId);
    $deleteQueryPrepare->execute();
?>