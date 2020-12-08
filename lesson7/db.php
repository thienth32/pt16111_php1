<?php
const HOST_NAME = '127.0.0.1';
// Tên db mình sẽ tương tác
const DB_NAME = 'angular_service';
const DB_USER_NAME = 'root';
// nếu dùng xampp thì để chuỗi rỗng
const DB_PASSWORD = '123456'; 

const IMG_EXTENSIONS_ARRAY = ["image/jpg", "image/jpeg", "image/png", "image/gif"];
function getConnect(){
    $connect = new PDO("mysql:host=" . HOST_NAME 
                        . ";dbname=" 
                        . DB_NAME . ";charset=utf8",
                    DB_USER_NAME, DB_PASSWORD);

    return $connect;
}

function executeQuery($exeSql, $fetchAll = true){
    $connect = getConnect();
    $stmt = $connect->prepare($exeSql);
    $stmt->execute();

    if($fetchAll){
        return $stmt->fetchAll();
    }

    return $stmt->fetch();
}


?>