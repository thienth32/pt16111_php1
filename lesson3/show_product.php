<?php
require_once 'helpers.php';
$data = readTxtData('products.txt', '|');
?>
<table border="1">
    <thead>
        <th>STT</th>
        <th>Tên SP</th>
        <th>Ảnh</th>
        <th>Giá</th>
    </thead>
    <tbody>
    <?php foreach ($data as $line):?>
        <tr>
            <td><?= $line[0] ?></td>
            <td><?= $line[1] ?></td>
            <td>
                <img src="<?= $line[2] ?>" width="70">
            </td>
            <td><?= $line[3] ?></td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>