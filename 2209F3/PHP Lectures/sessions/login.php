<?php

    session_start();


?>

<?php

    // $_SESSION["username"] = "usama";
    // $_SESSION["password"] = "2343";

    // echo $_SESSION["username"];
    // echo "<br>";
    // echo $_SESSION["password"];


    // $error = null;
    
    
    // if(isset($_POST["login"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];
        
    //     if(!empty($username)
    //     && !empty($password)){
    //         $_SESSION["username"] = $username;
    //         $_SESSION["password"] = $password;
    //         header("location:home.php");
    //             // echo $_SESSION['username'];
    //             // echo "<br>";
    //             // echo $_SESSION['password'];
                
    //         }else{
                
    //             $error = "Email or Password is incorrect!";
    //     }

       
    // }



    $_SESSION['username'] = 'Arif';
    $_SESSION['password'] = '1234';


    $username = $_POST['username'];
    $password = $_POST['password'];










   if(isset($_POST['login'])){

    if($username === $_SESSION['username'] && $password === $_SESSION['password']){
        echo $_SESSION['username'];
        echo "<br>";
    //    echo $_SESSION['password'];

       header("location:home.php");


    }else{
        echo "wrong email or password";
    }




   }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions in PHP</title>
</head>
<body>

    <h1>Login Page</h1>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <label for="username">Password:</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Login" name="login">
    </form>


    <p style="color: red;"><?php echo $error ?></p>
    <p>Don't have an account <a href="signup.php">signUp</a></p>
    
</body>
</html>


<?php

    // $_SESSION["username"] = "usama";
    // $_SESSION["password"] = "2343";

    // echo $_SESSION["username"];
    // echo "<br>";
    // echo $_SESSION["password"];


    // $error = null;
    
    
    // if(isset($_POST["login"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];
        
    //     if(!empty($username)
    //     && !empty($password)){
    //         $_SESSION["username"] = $username;
    //         $_SESSION["password"] = $password;
    //         header("location:home.php");
    //             // echo $_SESSION['username'];
    //             // echo "<br>";
    //             // echo $_SESSION['password'];
                
    //         }else{
                
    //             $error = "Email or Password is incorrect!";
    //     }

       
    // }






?>