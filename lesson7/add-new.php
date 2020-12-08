<?php
require_once './db.php';
$getListCateQuery = "select * from categories";
$cates = executeQuery($getListCateQuery);

?>
<!-- 
<select name="" id="">
    <?php foreach($cates as $c):?>
        <option 
            <?php if($c['id'] == $book_cate_id):?>
                selected
            <?php endif?>
            value="<?= $c['id']?>">
            <?=$c['name']?>
        </option>
    <?php endforeach?>
</select>
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Thêm mới sách</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body>
    <div class="container">
    <form action="save-new-book.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên sách</label>
                    <input type="text" name="name" class="form-control">
                    <?php if(isset($_GET['name-err'])): ?>
                        <span class="text-danger"><?= $_GET['name-err'] ?></span>
                    <?php endif ?>
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="cate_id" class="form-control">
                        <?php foreach($cates as $c):?>
                            <option 
                                value="<?= $c['id']?>">
                                <?=$c['name']?>
                            </option>
                        <?php endforeach?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" name="price" class="form-control">
                    <?php if(isset($_GET['price-err'])): ?>
                        <span class="text-danger"><?= $_GET['price-err'] ?></span>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" name="image" class="form-control">
                    <?php if(isset($_GET['image-err'])): ?>
                        <span class="text-danger"><?= $_GET['image-err'] ?></span>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="description" class="form-control" rows="5"></textarea>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Tạo mới</button>
        </div>
        </form>
    </div>

     
 </body>
 </html>