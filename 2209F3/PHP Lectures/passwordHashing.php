<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hashing</title>
</head>

<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="">Username</label>
        <input type="text" name="username" id="">
        <label for="">Password</label>
        <input type="text" name="password" id="">

        <input type="submit" value="Submit" >
    </form>



</body>

</html>


<?php

        $password = "hello1234";

        $userEnteredPassword = $_POST["password"];


        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);


        echo $hashedPassword;



        if($_SERVER["REQUEST_METHOD"] == "POST"){


        if (password_verify($userEnteredPassword, $hashedPassword)) {
            echo "<h1>Password Verified</h1>";
        } else {
            echo "<h1>Password Not Verified</h1>";
        }


            }


?>