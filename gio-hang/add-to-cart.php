<?php
session_start();
require_once './db.php';
$cart = $_SESSION['cart'];

# lấy id và lấy sản phẩm theo id
$id = $_GET['id'];
$getBookByIdQuery = "select * from books where id = $id";
$conn = getConnect();
$stmt = $conn->prepare($getBookByIdQuery);
$stmt->execute();
$book = $stmt->fetch();

// echo "<pre>";
// var_dump($cart);
// die;


$existed = -1;
# kiểm tra xem quyển sách đã có trong giỏ hàng hay chưa? 
# nếu existed = -1 => chưa có | existed != -1 => có rồi 
# và thứ tự là giá trị của existed
foreach ($cart as $key => $value) {
    if($value['id'] === $book['id']){
        $existed = $key;
        break;
    }
}

if($existed == -1){
    $book['quantity'] = 1;
    $cart[] = $book;
}else{
    $cart[$existed]['quantity'] += 1;
}

$_SESSION['cart'] = $cart;
// echo "<pre>";
// var_dump($cart);
// die;

header('location: index.php');

?>