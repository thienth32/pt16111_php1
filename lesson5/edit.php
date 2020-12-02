<?php
require_once './db.php';
# lấy id trên đường dẫn
$id = $_GET['id'];
# tạo câu query lấy danh mục dựa vào id
$getCateByIdQuery = "select * from categories where id = $id";
# thực thi câu query
$connect = getConnect();
$stmt = $connect->prepare($getCateByIdQuery);
$stmt->execute();

# lấy duy nhất 1 bản ghi thỏa mãn id
$cate = $stmt->fetch();

# hiển thị form có dữ liệu đã lấy đc 
?>
<form action="save-edit.php?id=<?= $cate['id']?>" method="post">
    <div>
        <label for="">Tên danh mục</label>
        <input type="text" name="name" value="<?= $cate['name']?>">
    </div>
    <div>
        <label for="">Đường dẫn</label>
        <input type="text" name="slug" value="<?= $cate['slug']?>">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>