<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<?php

    define('MY_CONST',234); // 使用方式:define('自定義常數名稱',數字或是常數皆可);  常數名稱定了之後就不能變更，為全域常數
    echo MY_CONST;//  直接echo後面加定義的常數名稱就ok了
    echo '<br>';

    echo true ; // 布林值true,TRUE,不區分大小寫都可以 true輸出到頁面會變成1
    echo '<br>';
    echo false ;// false會自動轉換成空字串，所以網頁顯示不出東西


?>
</div>   
</body>
</html>