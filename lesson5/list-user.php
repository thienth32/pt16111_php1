<?php
require_once './db.php';
$kw = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";

$getListUserQuery = "select * from users where name like '%$kw%'";
$connect = getConnect();
$stmt = $connect->prepare($getListUserQuery);
$stmt->execute();
$users = $stmt->fetchAll();

?>
<form action="">
    <input type="text" name="keyword" value="<?= $kw ?>">
</form>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $value) :?>
            <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['name']?></td>
                <td><?= $value['email']?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>