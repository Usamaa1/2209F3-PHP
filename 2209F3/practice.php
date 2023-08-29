<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- GET -->

    <!-- <form action="practice.php" method="get">
    <label for="">User Name</label><br>
    <input type="text" name="userName" id=""><br>
    <label for="">Password</label><br>
    <input type="text" name="password" id=""><br>
    <input type="submit" name="" id="" value= "Login">
</form> -->



    <!-- POST-->

    <!-- <form action="practice.php" method="post">
    <label for="">User Name</label><br>
    <input type="text" name="userName" id=""><br>
    <label for="">Password</label><br>
    <input type="text" name="password" id=""><br>
    <input type="submit" name="" id="" value="Login">
</form> -->




    <!-- Math Methods -->

    <!-- <form action="practice.php" method="post">
    <label for="">Number 1</label><br>
    <input type="text" name="num1" id=""><br>
    <label for="">Number 2</label><br>
    <input type="text" name="num2" id=""><br>
    <input type="submit" name="" id="" value="Operation">
</form> -->


</body>

</html>

<?php


// @$username = $_POST['userName'];
// @$password = $_POST['password'];


//    echo  $username . "<br>";
//    echo $password;



// echo $username + $password;




// $num1 = $_POST['num1'];
// $num2 = $_POST['num2'];
// $num3 = $_POST['num3'];




// **************************************
// **************************************
// **************************************
// **********  MATH OPERATORS ***********
// **************************************
// **************************************
// **************************************


// echo $num2;




// echo abs($num1);
// echo round($num1);
// echo floor($num1);
// echo ceil($num1);
// echo sqrt($num1);
// echo pow($num1, $num2);
// echo min($num1, $num2, $num3);
// echo max($num1, $num2, $num3);
// echo pi();
// echo rand(1,15);






//    echo $_GET['userName'] . "<br>";
//    echo $_GET['password'];









// const array = [2,45,78,87,889];

$array = [3, 5, 6, 2, 88, 8, 7, 3];
// echo $array;



// for($i =0; $i<19; $i++){
//     echo $array[$i] . "<br>";
// }




// foreach($array as $el){
//     echo $el . "<br>";

// }


// for($i = 0; $i < 8; $i++){
//     echo $array[$i] . "<br>";
// }


// foreach($array as $element){
//     echo "For Each: ". $element . "<br>";
// }


// $k = 0;

// while($k < 8){
//     echo "While Loop: ".$array[$k] . "<br>";
//     $k++;
// }

// $j = 0;

// do{
//     echo "do While Loop: ".$array[$j] . "<br>";
//     $j++;
// }while($j < 8);


// Associative Array



// $bio = [
//     "username" => "Afaaz",
//     "email" => "email@gmail.com",
//     "phoneNumber" => 23423423423
// ];

// foreach($bio as $key => $value){
//     echo "$key = $value <br>";
// }



// array_push($cars, "Mehran","Sonata");
// array_pop($cars);
// array_shift($cars);


// $reverse = array_reverse($numbers);
// sort($numbers);
// rsort($numbers);

// echo "array length: ". count($numbers). "<br>";

// foreach ($reverse as $value) {
//     echo "{$value} <br>";
// }
// foreach ($numbers as $value) {
//     echo "{$value} <br>";
// }






// $bio = [
//     "username" => "Afaaz",
//     "email" => "email@gmail.com",
//     "phoneNumber" => 23423423423
// ];



    // $bio["username"] = "Basketball";

    // foreach($bio as $key => $val){
    //     echo "$key = $val <br>";
    // }




    $play = ["Bat" , "Ball" , "Wicket", "Football"];

    // $play[0] = "Basketball";




    // In JavaScript
    // $play.pop()


    // In PHP
    // array_pop($play);
    // array_shift($play);
    // array_unshift($play, "shift");
    // array_push($play, "push");
    // $result = array_reverse($play);

    sort($play);



    foreach($play as $val){
        echo $val . "<br>";
    }


    echo "_______________________________________________<br>";
    // foreach($result as $val){
    //     echo $val . "<br>";
    // }


















?>