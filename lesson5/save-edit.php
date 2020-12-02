<?php
require_once './db.php';
#lấy id từ đường dẫn
$id = $_GET['id'];
# lấy các thuộc tính cần thay đổi từ form
$name = $_POST['name'];
$slug = $_POST['slug'];
# tạo câu lệnh update với db
$updateCateQuery = "update categories 
                        set name = '$name',
                            slug = '$slug'
                    where id = $id";
# thực thi cau lệnh với db
$connect = getConnect();
$stmt = $connect->prepare($updateCateQuery);
$stmt->execute();

#điều hướng website
header('location: index.php');


?>