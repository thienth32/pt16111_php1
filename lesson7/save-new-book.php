<?php
require_once './db.php';

$name = $_POST['name'];
$cate_id = $_POST['cate_id'];
$price = $_POST['price'];
$description = $_POST['description'];
$file = $_FILES['image'];

$filename = "";
if($file['size'] > 0){
    # 2. Đặt tên cho file
    $filename = uniqid() . '-' . $file['name'];

    # 3. Lưu file
    move_uploaded_file($file['tmp_name'], './uploads/' . $filename);
    $filename = 'uploads/' . $filename;
}

$insertNewBookQuery = "insert into books 
                                (name, feature_image, 
                                cate_id, price, 
                                description)
                        values 
                                ('$name', '$filename', 
                                '$cate_id', '$price', 
                                '$description')";
executeQuery($insertNewBookQuery);

header('location: index.php');
?>