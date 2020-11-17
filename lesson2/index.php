<?php
# 1. phải nhập username
# 2. username phải có ít nhất 4 ký tự
# 3. username không vượt quá 20 ký tự
# 4. tuổi của nam phải trên 18
# 5. tuổi của nữ phải trên 16
# 6. nếu không phải nam hoặc nữ thì yêu cầu phải lớn hơn 17 tuổi
# thì mới hiển thị dữ liệu
$name = $_GET['name'];
if($name == null || strlen($name) < 4){
    echo "Hãy nhập lại username (không đc để trống, số lượng ký tự phải >= 4)";
    die;
}
$age = $_GET['age'];
if($age < 1 || $age > 3){
    echo "không xác định đc giới tính thật";
    die;
}
if(
    ($gender == 1 && $age < 16) 
    || ($gender == 2 && $age < 18)
    || ($gender == 3 && $age < 17)){
        echo "Bạn không đủ tuổi";
        die;
}

$gender = $_GET['gender'];
switch($gender){
    case 1:
        $genderText = "Nữ";
        break;
    case 2: 
        $genderText = "Nam";
        break;
    default:
        $genderText = "Khác";
        break;
}   


?>

<h3>Họ và tên:<?= $name ?></h3>
<h3>Tuổi: <?= $age ?></h3>
<h3>Giới tính: <?= $genderText ?></h3>