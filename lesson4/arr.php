<?php

$arr1 = [1,2,3,5];

$arr1[] = "something";
array_push($arr1, false);
array_unshift($arr1, true);

array_splice($arr1, 2, 0, ['thienth', 'thanhvc']);

echo "<pre>";
var_dump($arr1);
// unset($arr1[2]);

// array_splice($arr1, 2, 1);

echo "<pre>";
var_dump($arr1);
// foreach ($arr1 as $key => $value) {
//     var_dump($value);
//     echo "<br>";
// }

?>