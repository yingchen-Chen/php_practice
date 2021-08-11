<?php

header('Content-Type: application/json');// 設定回應給用戶端的擋頭

$a= isset($_POST['a'] ) ? intval($_POST['a']) : 0; 
$b= isset($_POST['b'] ) ? intval($_POST['b']) : 0;

echo json_encode([
    'postData' =>$_POST,
    'result' =>$a+$b,
]);


