<?php
require_once './db.php';
$id = $_GET['id'];

$removeBookQuery = "delete from books where id = $id";
executeQuery($removeBookQuery);
header('location: ' . BASE_URL);

?>