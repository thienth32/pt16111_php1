<?php
require_once './db.php';
$listCateQuery = "select * from categories";
$cates = executeQuery($listCateQuery);

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
                <th>Tên danh mục</th>
                <th>Đường dẫn</th>
                <th>
                    <a href="<?= BASE_URL . 'tao-moi-danh-muc.php'?>" class="btn btn-sm btn-success">Tạo mới</a>
                </th>
            </thead>
            <tbody>
                <?php foreach($cates as $b):?>
                    <tr>
                        <td><?= $b['id']?></td>
                        <td><?= $b['name']?></td>
                        <td><?= $b['slug']?></td>
                        <td>
                            <a href="<?= BASE_URL . 'sua-danh-muc.php?id=' . $b['id']?>" class="btn btn-sm btn-info">Sửa</a>
                            <a href="<?= BASE_URL . 'xoa-danh-muc.php?id=' . $b['id']?>" class="btn btn-sm btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>