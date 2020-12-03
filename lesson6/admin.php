<?php
session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php');
    die;
} 


?>

<h1>Xin Chào bạn đã đến với trang quản trị</h1>
<h3>Hello, <?= $_SESSION['auth']['name']?> - <a href="logout.php">Thoát</a></h3>