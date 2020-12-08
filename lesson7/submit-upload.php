<?php

# 1. nhận cái file gửi lên từ form
$file = $_FILES['avatar'];
$filename = "";
if($file['size'] > 0){
    # 2. Đặt tên cho file
    $filename = uniqid() . '-' . $file['name'];

    # 3. Lưu file
    move_uploaded_file($file['tmp_name'], './uploads/' . $filename);
    $filename = 'uploads/' . $filename;
}

# 4. hiển thị


?>
<img src="<?= $filename ?>" width="200">