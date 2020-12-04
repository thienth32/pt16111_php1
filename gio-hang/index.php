<?php
session_start();

#lấy danh sách các quyển sách
require_once './db.php';
$getBooksQuery = "select * from books limit 10";
$conn = getConnect();
$stmt = $conn->prepare($getBooksQuery);
$stmt->execute();
$books = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php foreach($books as $item):?>
            <div class="col-3">
                <div class="card" style="width: 100%; margin-bottom: 10px;">
                    <img src="<?= $item['feature_image']?>" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title"><?= $item['name'] ?></h6>
                        <p class="card-text">Gía: 
                            <?= number_format($item['price'], 0, '.', ',') ?>
                        </p>
                        <a href="add-to-cart.php?id=<?=$item['id']?>" 
                                class="btn btn-warning">Thêm giỏ hàng</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    
</body>
</html>