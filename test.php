
<?php


// $array1 = array("color" => "red", 2, 4);
// // $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $result = array_merge($array1);
// print_r($result);


// $array = array(0,1,2,3,4,5,6,7,8,9);
// $value = array_search();
// print_r($value);


// $queue = [
//     "orange",
//     "banana"
// ];

// array_unshift($queue, "apple", "raspberry");
// var_dump($queue);


// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// asort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "$key = $val\n";
// }

//  $day = "Monday";
//   switch ($day) {
//     case "Monday":
//       echo "Today is Monday.";
//       break;
//     case "Tuesday":
//       echo "Today is Tuesday.";
//       break;
//     default:
//       echo "Today is not Monday or Tuesday.";
//   }

//   for ($i = 0; $i <= 10; $i++) {
//     echo $i;
//     echo PHP_EOL;
//   }

//   $fruits = array("Apple","Banana", "Orange");
//   for ($i = 0;  $i< count($fruits); $i++){
//     echo $fruits[1];
//   }  
  
  
//   $fruits = array("Apple","Banana", "Orange");
//   foreach( $fruits as $fruit){
//     echo $fruit;
//     echo PHP_EOL;
//   }


// $prices = array("Apple" => 0.50, "Banana" => 0.25, "Orange" => 0.75);
//   foreach ($prices as $value) {
//     echo "$value";
//     echo PHP_EOL;
//   }

//   $students = array(
//     array("name" => "John", "age" => 20),
//     array("name" => "Jane", "age" => 21),
//     array("name" => "Bob", "age" => 22)
//   );

//   foreach ($students as $student) {
//     echo $student["name"] . "'s age is " . $student["age"];
   
//     foreach ($student as $key => $value) {
//       echo $key . ": " . $value;
//       echo PHP_EOL;
//     }
//   }

// $fruits = array("apple", "banana");
// array_push($fruits, "orange", "grape","Abdur Rahim");
// print_r($fruits);


// $fruit= array("apple", "banana");
// array_pop($fruit);
// print_r($fruit);


$fruits1 = array("apple", "banana");
$fruits2 = array("orange", "grape","apple");
$all_fruits = array_merge($fruits1, $fruits2);

print_r($all_fruits);