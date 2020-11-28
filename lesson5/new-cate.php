<?php
require_once 'db.php';
$name = $_GET['name'];
$slug = $_GET['slug'];

$insertNewCateQuery = "insert into categories 
                            (name, slug) 
                        values 
                            ('$name', '$slug')";

$connect = getConnect();
$stmt = $connect->prepare($insertNewCateQuery);
$stmt->execute();

header('location: index.php');


?>