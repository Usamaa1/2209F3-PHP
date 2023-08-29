<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statement</title>
</head>

<body>


    <form action="switchStatement.php" method="post">
        <label for="">GRADE: </label>
        <input type="text" name="grade">
        <input type="submit" value="Submit">
    </form>

</body>

</html>

<?php

$grade = $_POST["grade"];



// switch ($grade) {
//     case 'A':
//         echo "Excellent Grade";
//         break;
//     case 'B':
//         echo "Good Grade";
//         break;
//     case 'C':
//         echo "Fair Grade";
//         break;
//     case 'D':
//         echo "Satisfactory Grade";
//         break;
//     case 'F':
//         echo "Sorry you are Failed in your exam.";
//         break;
//     default:
//         echo "Kindly enter valid grade";
//         break;
// }



    $a = [3,4,5,56,6,76];
    // $a = 45;



    foreach($a as $v){
        echo "<script>console.log($v)
        
        arrayarray = [4,5,6,7,8];

        arrayarray.map((el, i)=>{
        console.log(el , i);
        
        })
        
        
        </script>";
    }







 























// switch($grade){
//     case "A":
//         echo "You did great";
//         break;
//     case "B":
//         echo "You did good";
//         break;
//     case "C":
//         echo "You did okay";
//         break;
//     case "D":
//         echo "You did poorly";
//         break;
//     case "F":
//         echo "Sorry you Failed";
//         break;
//     default:
//         echo "{$grade} is not valid";

// }






?>