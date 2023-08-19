<?php


// $num1 = 30;
// $num2 = 20;
//   if($num1 + $num2 == 50){ 
//     echo "Result is 50";
//   }else if ($num1 == 50){
//     echo "First is 50";
//   }else if ($num2 == 50) {
//     echo "Second is 50";
//   };

  
////////////////////////////
// $num1 = 4;
// $num2 = 1;
// if ($num1 > 0 && $num2 > 0) {
//   echo "Both Are Positives";
// }else if ($num1 < 0 && $num2 < 0) {
//   echo "Both Are Negatives";
// }
// else if ($num1 > 0 && $num2 < 0) {
// echo "$num1 Is Positive & $num2 Is Negative";
// }
// else if ($num1 < 0 && $num2 > 0) {
//   echo "$num1 Is Negative & $num2 Is Positive";
// }

///////////////////////////////
// $num = 16;

// if($num > 0 && $num % 5 == 0) {
//   echo "$num is Multiple Of 5";
// } else if ($num > 0 && $num % 8 == 0 ){
//   echo "$num is Multiple Of 8";
// }else {
//   echo "Try Another Number";
// }

///////////////////////////
// function calc($num1,$num2,$op) {
//   $res = 0;
//   switch ($op) {
//     case "+":
//       $res = $num1 + $num2;
//       break;
//     case "-":
//       $res = $num1 - $num2;
//       break;
//     case "*":
//       $res = $num1 * $num2;
//       break;
//     case "/":
//       $res = $num1 / $num2;
//       break;
//   }
//   echo "$res";
// }
// calc(12,6,"*");

//////////////////////////////////

// use function PHPSTORM_META\type;

// $nums = [];
// function fizzBuzz ($nums) {
//   for ($i = $nums[0] ; $i <= count($nums); $i++) {
//     if(gettype($i) == "integer") {
//       if($i % 3 == 0){
//         if ($i % 3 == 0 && $i % 5 == 0) {
//           echo "fizzbuzz";
//           echo "<br>";
//           continue;
//         }
//         echo "fizz";
//         echo "<br>";
//       }else if($i % 5 == 0){
//         echo "buzz";
//         echo "<br>";
//       }else {
//         echo "$i" ;
//         echo "<br>";
//       }
//     }else {
//       echo "Enter Valid Numbers";
//       break;
//     }
//   }
// }
// fizzBuzz([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]);






//////////////////////////////////

// function factorial($num) {
//   if($num === 0 | $num === 1) {
//     echo "Factorial => {$num}";
//   }else {
//     for($i = $num - 1; $i > 1; $i--) {
//       $num *= $i;
//     }
//     echo "Factorial => {$num}";
//   } 
// }
// factorial(1);