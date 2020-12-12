<?php
require_once './db.php';
$listBooksQuery = "select b.*, c.name as cate_name from books b join categories c on b.cate_id = c.id";
$books = executeQuery($listBooksQuery);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php include_once './header.php' ?>
    <div class="container">
        <table class="table table-stripped">
            <thead>
                <th>ID</th>
                <th>Tên sách</th>
                <th>Danh mục</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>
                    <a href="<?= BASE_URL . 'tao-moi-sach.php'?>" class="btn btn-sm btn-success">Tạo mới</a>
                </th>
            </thead>
            <tbody>
                <?php foreach($books as $b):?>
                    <tr>
                        <td><?= $b['id']?></td>
                        <td><?= $b['name']?></td>
                        <td><?= $b['cate_name']?></td>
                        <td>
                            <img src="<?= $b['feature_image']?>" width="70">
                        </td>
                        <td><?= $b['price']?></td>
                        <td>
                            <a href="<?= BASE_URL . 'sua-sach.php?id=' . $b['id']?>" class="btn btn-sm btn-info">Sửa</a>
                            <a href="<?= BASE_URL . 'xoa-sach.php?id=' . $b['id']?>" class="btn btn-sm btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>