
<?php


// $array1 = array("color" => "red", 2, 4);
// // $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $result = array_merge($array1);
// print_r($result);


// $array = array(0,1,2,3,4,5,6,7,8,9);
// $value = array_search();
// print_r($value);


$queue = [
    "orange",
    "banana"
];

array_unshift($queue, "apple", "raspberry");
var_dump($queue);
