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
    <h1>signUp Page</h1>
    <p>Already have an account <a href="login.php">Login</a></p>
</body>

</html>


<?php

echo $_SESSION["username"];
echo "<br>";
echo $_SESSION["password"];


?>



