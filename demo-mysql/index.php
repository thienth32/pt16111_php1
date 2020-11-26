<?php
require_once './db.php';
// lấy ra danh sách danh mục
$getCatesQuery = "select * from categories";

// tạo kết nối đến db
$conn = getConnect();
// nạp câu sql phía trên vào kết nối
$stmt = $conn->prepare($getCatesQuery);
// thực thi câu lệnh đã nạp với csdl
$stmt->execute();
// thu toàn bộ data kết quả của câu sql về
// và gán cho 1 biến (dạng mảng trong mảng)
$cates = $stmt->fetchAll();

// echo "<pre>";
// var_dump($cates);

?>
<table border="1">
    <thead>
        <th>Mã</th>
        <th>Tên</th>
        <th>Đường dẫn</th>
        <th>
            <a href="">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($cates as $key => $value) :?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['slug'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>