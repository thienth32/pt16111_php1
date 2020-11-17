<?php
# định nghĩa 1 hàm dùng để tạo ra 1 mảng số nguyên
# mảng này có số phần tùy theo tham số truyền vào
function randomNumberArray($totalEl)
{
    $arr = [];
    for ($i=0; $i < $totalEl; $i++) { 
        $arr[] = rand(0, 100);
    }

    return $arr;
}

$randomArr = randomNumberArray(1000000);

// var_dump($randomArr);
function sortElement($a, $b, $c){
    $arr = [$a, $b, $c];
    arsort($arr);

    return $arr;
}

$sortedArr = sortElement(5, 3, 17);
var_dump($sortedArr);


?>