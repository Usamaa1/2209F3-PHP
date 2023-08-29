

<?php

   

    // if($_SERVER["REQUEST_METHOD"] === 'POST'){
    //     @$username = $_POST['username'];
    //     @$password = $_POST['password'];
    
        // echo $username . "<br>";
    //     echo $password . "<br>";
    // }



    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_NUMBER_INT);

        // validate

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            $email_error = 'Incorrect email';
        }

        if(empty($username) && empty($age) && empty($email) && empty($_POST['password'])){
            echo "Kindly fill the input fields";
        }else{
            echo "success";
        }



        echo "<br>" . $age;
        echo "<br>" . $username;
        echo "<br>" . $email;
        echo "<br>" . $_POST['password'];

    }











    // if($_SERVER["REQUEST_METHOD"] === 'POST'){
    // if(isset($_POST['submit'])){
    //     if(empty($_POST['username'])){
    //         echo "Kindly fill user name <br>";
    //     }
    //     if(empty($_POST['password'])){
    //         echo "Kindly fill Password";
    //     }

    //     if(!empty($_POST['username']) && !empty($_POST['password'])){


    //         // sanitize input

    //         $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    //         $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_NUMBER_INT);
    //         $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
    //         // @$password = $_POST['password'];
        

    //         // validate input


    //         @$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    //         @$age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
      



    //         if(empty($email)){
                
    //             echo "email is incorrect" . "<br>";
    //         }
    //         else{
    //             echo $email ."<br>";
    //         }



    //         echo $username . "<br>";
    //         echo $age . "<br>";

          

    //         echo $password . "<br>";
    //     }

      
    // }
    // }








   
    

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     // if(isset($_GET["submit"])){
    //         $username = $_POST["username"];
    //         echo $username;
    //     // }
    // }






    // foreach($_SERVER as $key => $val){
    //     echo "<br>$key =  $val <br> <br>";
    // }









?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Gloabal Variable</title>
</head>
<body>
    <h1>Server Gloabal Variable</h1>


    <!-- <form action=" <?php htmlspecialchars($_SERVER["PHP_SELF"]) ?> " method="post">
        <label for="">User Name</label>
        <input type="text" name="username">
        <input type="submit" value="Submit" name="submit">
    </form> -->




        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="">User Name : </label>
            <input type="text" name="username"><br><br>
            <label for="">age : </label>
            <input type="text" name="age"><br>
            <label for="">Email : </label>
            <input type="text" name="email"><br>
            <p style="color: red;"><?php echo $email_error ?></p>
            <label for="">password : </label>
            <input type="password" name="password"><br>
            <input type="submit" name="submit" id="" >
        </form>

    









</body>
</html>




<?php

    // foreach($_SERVER as $key => $value ){
    //     echo "$key => $value <br>";
    // }


?> 



<!-- <script>
    alert('this is alert');
</script> -->