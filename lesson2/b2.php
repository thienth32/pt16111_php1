<?php

$name = "tRuong Van haN";

# Truong Van Han
# tHien tRan Huu => Thien Tran Huu

$upperName = strtoupper($name);
$lowerName = strtolower($name);

// var_dump($upperName, $lowerName);
for($i = 0; $i < strlen($name); $i++){
    echo $name[$i] . "<br>";
}


?>