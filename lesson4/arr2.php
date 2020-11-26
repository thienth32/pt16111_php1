<?php

$users = [
    ['name' => 'truong van ba', 'age' => 29,'address' => 'ha noi'],
    ['name' => 'truong van bon', 'age' => 24,'address' => 'ha ngoai'],
    ['name' => 'truong van nam', 'age' => 21,'address' => 'ha giang'],
];

?>
<table border="1">
    <thead>
        <th>Tên</th>
        <th>Tuổi</th>
        <th>Địa chỉ</th>
    </thead>
    <?php foreach ($users as $key => $value) :?>
        <tr>
            <td><?= $value['name'] ?></td>
            <td><?= $value['age'] ?></td>
            <td><?= $value['address'] ?></td>
        </tr>
    <?php endforeach ?>
</table>