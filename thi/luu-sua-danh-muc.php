<?php
require_once './db.php';

$id = $_GET['id'];

$name = $_POST['name'];
$slug = $_POST['slug'];

$updateCateQuery = "update categories 
                            set name = '$name', 
                                slug = '$slug'
                        where id = $id";
executeQuery($updateCateQuery);

header('location: ' . BASE_URL . 'danh-muc.php');


?>