<?php


// *************************** Normal Array Destructuring ***************************


// $array = [10, 20, 30];


// [$a, $b, $c] = $array;
// list($a, , $c) = $array;


// echo "$a <br>";
// echo "$b <br>";
// echo "$c <br>";



// $array = [10, 20, 30];


// [$a, $b, $c] = $array;



// echo "$a <br>";
// echo "$b <br>";
// echo "$c <br>";


// *************************** Associative Array Destructuring ***************************


// $customer = [
//     'name' => 'Arif Alvi',
//     'email' => 'arif@gmail.com',
//     'phone' => 92355587382,
//   ];



//   ["name" => $name, "email" => $email, "phone" => $phone] = $customer;



//   echo "$name <br>";
//   echo "$email <br>";
//   echo "$phone <br>";



// *************************** spread Operator ***************************



// $evens = [2,4,6,8,10];
// $odds = [1,3,5,7,9];


// $even_odd = array_merge($even, $odd);

// echo "<pre>";
// print_r($even_odd);
// echo "</pre>";


// $numbers = [...$evens, ...$odds];

// echo "<pre>";
// print_r($numbers);
// echo "</pre>";


// sort($numbers);

// echo "<pre>";
// print_r($sorted_array);
// echo "</pre>";


// foreach($numbers as $values){
//     echo "$values <br>";
// }




// *************************** rest Operator ***************************


// function add($a, ...$b){
// echo $a;
// echo "<pre>";
// print_r($b);
// echo "</pre>";

// $c = null;

// foreach($b as $val){
//     $c += $val;
// }
// return $a + $c;


// }

// echo add(3,4,5,6,7);



// In javascript 

// let array = [4,5,6,766,776,];

// [a,b,c] = array;



// In php


$evens = [2, 4, 6, 8, 10];
$odds = [1, 3, 5, 7, 9];




// [$a, , ,$b] = $evens;

// echo "$a <br>";
// echo "$b <br>";




// In associative array


// $cars = [
//     "suzuki" => "Mehran",
//     "Daihatsu" => "Mira",
//     "Honda" => "City",
//     "Toyota" => "GLI"
// ];



// ["suzuki" => $suzuki, "Honda" => $honda] = $cars;

// echo $suzuki ;
// echo "<br>";
// echo $honda;




// SPREAD OPERATOR


// $numbers = [...$evens,"hello",...$odds];


// sort($numbers);


// echo "<pre>";
// print_r($numbers);
// echo "</pre>";


// foreach($numbers as $val){
//     echo "$val <br>";
// }






?>