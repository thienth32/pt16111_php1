<?php
require_once './db.php';

$id = $_GET['id'];
$getBookQuery = "select * from books where id = $id";
$book = executeQuery($getBookQuery, false);


$name = $_POST['name'];
$cate_id = $_POST['cate_id'];
$price = $_POST['price'];
$file = $_FILES['image'];


$filename = $book['feature_image'];
if($file['size'] > 0){
    # 2. Đặt tên cho file
    $filename = uniqid() . '-' . $file['name'];

    # 3. Lưu file
    move_uploaded_file($file['tmp_name'], './uploads/' . $filename);
    $filename = 'uploads/' . $filename;
}
$updateBookQuery = "update books 
                            set name = '$name', 
                                feature_image = '$filename', 
                                cate_id = '$cate_id', 
                                price = '$price'
                        where id = $id";
executeQuery($updateBookQuery);

header('location: ' . BASE_URL);


?>