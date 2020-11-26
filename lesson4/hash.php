<?php

$email = "thienth32@gmail.com";
$password = "123456";
$pwdHash = password_hash($password, PASSWORD_DEFAULT);

echo "sha1: " . sha1($password) . "<br>";
echo "md5: " . md5($password) . "<br>";
echo "password_hash: " . $pwdHash . "<br>";

var_dump(password_verify("123456", $pwdHash));




?>