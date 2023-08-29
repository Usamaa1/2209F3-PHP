<?php

include('database.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <p>User Name </p>
        <input type="text" name="username">
        <p>Password : </p>
        <input type="password" name="password">
        <p>Email : </p>
        <input type="email" name="email">
        <p>City :</p>
        <input type="text" name="city"> <br><br>
        <input type="submit" value="SignUp">
    </form>
</body>

</html>

<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS);



    
    if(empty($username)){
        echo "Username cannot be empty";
    }elseif(empty($password)){
        echo "Password cannot be empty";
    }elseif(empty($email)){
        echo "Email cannot be empty";
    }elseif(empty($city)){
        echo "City cannot be empty";
    }
    else{

        
        $securePass = password_hash($password, PASSWORD_BCRYPT);
        
        $sql = "INSERT INTO signup (username, password, email, city) VALUES ('$username', '$securePass', '$email', '$city')";


        mysqli_query($connection, $sql);
        echo "You are registered";




    }


}

mysqli_close($connection);


?>