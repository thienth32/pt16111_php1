<?php
session_start();
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Giỏ hàng (<?= $totalItem?>) sp
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php foreach( $cart as $item):?>
                <a class="dropdown-item" href="#">
                    <p>
                        <strong><?= $item['name']?></strong>
                        - <?= $item['quantity']?>
                        - $<?= $item['quantity']*$item['price'] ?>
                    </p>
                </a>
            <?php endforeach?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Tổng: $<?= $totalPrice ?></a>
        </div>
      </li>
    </ul>
  </div>
</nav>