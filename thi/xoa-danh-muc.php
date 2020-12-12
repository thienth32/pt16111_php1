<?php
require_once './db.php';
$id = $_GET['id'];

$removeCateQuery = "delete from categories where id = $id";
executeQuery($removeCateQuery);
header('location: ' . BASE_URL . 'danh-muc.php');

?>