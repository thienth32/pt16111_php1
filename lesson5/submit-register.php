<?php

require_once './db.php';
# nhận dữ liệu từ form gửi sang
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

# mã hóa mật khẩu
$hashPassword = password_hash($password, PASSWORD_DEFAULT);
# tạo câu lệnh sql
$userInsertQuery = "insert into users (name, email, password)
                    values ('$name', '$email', '$hashPassword')";
// var_dump($userInsertQuery);die;
# thực thi câu lệnh với csdl
$connect = getConnect();
$stmt = $connect->prepare($userInsertQuery);
$stmt->execute();

# điều hướng website sang đường dẫn khác
header('location: list-user.php');


?>