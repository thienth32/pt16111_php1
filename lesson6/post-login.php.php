<?php
session_start();
require_once './db.php';

# nhận dữ liệu từ form
$email = trim($_POST['email']);
$password = $_POST['password'];

# tạo câu truy vấn lấy user dựa vào email
$getUserByEmailQuery = "select * from users where email = '$email'";
# kiểm tra mk ng dùng nhập vào với mk trong db truy vấn đc
$connect = getConnect();
$stmt = $connect->prepare($getUserByEmailQuery);
$stmt->execute();
$user = $stmt->fetch();
# nếu thỏa mãn 2 điều kiện => tạo session => redirect về admin
if($user && password_verify($password, $user['password'])){
    unset($user['password']);
    $_SESSION['auth'] = $user;
    header('location: admin.php');die;
}

header('location: login.php?msg=Email/Mật khẩu không đúng!');




?>