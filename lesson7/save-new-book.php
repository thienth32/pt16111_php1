<?php
require_once './db.php';

$name = $_POST['name'];
$cate_id = $_POST['cate_id'];
$price = $_POST['price'];
$description = $_POST['description'];
$file = $_FILES['image'];




$errors = "";

$checkExistedQuery = "select * from books where name = '$name'";
$existedBook = executeQuery($checkExistedQuery, false);
if($name == "" ){
    $errors .= "name-err=Tên sách không được để trống";
}else if(strlen($name) < 4 || strlen($name) > 30){
    $errors .= "name-err=Tên sách phải nằm trong khoảng 4-30 ký tự";
}else if($existedBook != false){
    $errors .= "name-err=Tên sách đã tồn tại, vui lòng chọn tên khác";
}

if($price <= 0){
    $errors .= "&price-err=Giá không hợp lệ";
}else if($price !== ceil($price)){
    $errors .= "&price-err=Giá phải là số nguyên";
}

if($file['size'] <= 0){
    $errors .= "&image-err=Hãy chọn ảnh";
}else if(!in_array($file['type'], IMG_EXTENSIONS_ARRAY)){
    $errors .= "&image-err=Không đúng định dạng ảnh";
}


if(strlen($errors) > 0){
    header('location: add-new.php?'.$errors);
    die;
}


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