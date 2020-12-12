<?php
session_start();

require_once './db.php';
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}


$cart = $_SESSION['cart'];
$totalPrice = 0;
$totalItem = 0;
if(count($cart) > 0){
    foreach ($cart as $key => $value) {
        $totalItem += $value['quantity'];
        $totalPrice += $value['quantity']*$value['price'];
    }
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL . 'danh-muc.php'?>">Danh mục</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL . 'sach.php'?>">Sách</a>
      </li>
      
    </ul>
  </div>
</nav>