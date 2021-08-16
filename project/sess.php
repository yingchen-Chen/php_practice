<?php
//啟動session功能
session_start();

echo json_encode($_SESSION,JSON_UNESCAPED_UNICODE);


//單純在查看session的狀態，主要是用來除錯
?>