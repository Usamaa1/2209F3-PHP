<?php

    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome!</h1>
    <h3><?php echo $_SESSION['username'] ?></h3>

    <form action="home.php" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
</body>
</html>

<?php

//    $username = $_SESSION['username'];


    // if(isset($_POST['logout'])){
    //     session_destroy();
    //     header('location: login.php');
    // }


    echo $_SESSION['username'];
    echo "<br>";
//    echo $_SESSION['password'];



?>
