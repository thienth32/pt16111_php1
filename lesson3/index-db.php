<?php
$connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", "root", "123456");
$sqlQuery = "select * from categories";
$stmt = $connect->prepare($sqlQuery);
$stmt->execute();
$data = $stmt->fetchAll();

echo "<pre>";
var_dump($data);

?>