<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getPost</title>
</head>

<body>

    <!-- get -->
    <!-- <form action="getPost.php" method="get">
        <label for="">User Name</label>
        <input type="text" name="username" id=""><br>
        <label for="">Password</label>
        <input type="password" name="password" id=""><br>
        <input type="submit" name="login" value="Login">
    </form> -->


    <!-- Post -->
    <form action="getPost.php" method="post">
        <label for="">User Name</label>
        <input type="text" name="username" id=""><br>
        <label for="">Password</label>
        <input type="password" name="password" id=""><br>
        <input type="submit" name="login" value="Login">
    </form>




    <?php

    // echo $_GET["username"] . "<br>";
    // echo $_GET["password"];
    


    // echo $_POST["username"] . "<br>";
    // echo $_POST["password"];
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo $username * $password;




    




    ?>
</body>

</html>