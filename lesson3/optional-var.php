<?php
# trong 1 hàm
# có thể định nghĩa ra 2 loại tham số
# 1. Tham số bắt buộc: khi gọi hàm bắt buộc phải
# truyền giá trị vào (nếu k truyền đủ thì báo lỗi)
# 2. Tham số tùy chọn: khi gọi hàm không bắt buộc 
# phải truyền giá trị tương ứng, bởi vì tự nó có
# giá trị mặc định
// function test($a, $b = 10){
//     return $a + $b;
// }


// echo test(3);

function test2(){
    $argArr = func_get_args();
    foreach ($argArr as $key => $value) {
        var_dump($value);
    }
}


test2(1,3,5,67,8);


?>