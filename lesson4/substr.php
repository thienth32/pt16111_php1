<?php
$str = "thienth poly someone something";

$cutStr = "poly";

$index = strpos($str, $cutStr);

echo substr($str, $index, strlen($cutStr));

?>