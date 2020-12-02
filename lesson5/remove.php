<?php
require_once './db.php';
$id = $_GET['id'];
$removeCategoryQuery = "delete from categories where id = $id";
$connect = getConnect();
$stmt = $connect->prepare($removeCategoryQuery);
$stmt->execute();
header('location: index.php');

?>