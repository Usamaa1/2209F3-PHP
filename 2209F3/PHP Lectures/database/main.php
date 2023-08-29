<?php

    include('database.php');


    // ********************* FOR INSERTING DATA INTO MYSQL TABLES *********************

    // $username = "usama";
    // $password = "1234534";

    // $sql = "INSERT into first_table (username, password) values 
    // ('$username', '$password')";

    // try{

    //     mysqli_query($connection, $sql);
    //     echo "Data inserted";
    // }catch(mysqli_sql_exception){
    //     echo "Data insertition failed";
    // }



    // ********************* FOR READING DATA FROM MYSQL TABLES *********************


    $sql = "SELECT * from first_table";

    $result = mysqli_query($connection, $sql);


    if (mysqli_num_rows($result)) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<br>". "id: ". $row["id"]. " - Name: ". $row["username"]. " - Password: ". $row["password"]. " - Date: ". $row["date"]. "<br>";
        }
    }else{
        echo "No result found!";
    }


















    mysqli_close($connection);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    
</body>
</html>