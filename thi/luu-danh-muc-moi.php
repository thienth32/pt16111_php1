<?php
require_once './db.php';

$name = $_POST['name'];
$slug = $_POST['slug'];


$insertNewCateQuery = "insert into categories 
                                (name, slug)
                        values 
                                ('$name', '$slug')";
executeQuery($insertNewCateQuery);

header('location: ' . BASE_URL . 'danh-muc.php');


?>