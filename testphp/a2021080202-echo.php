<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo __DIR__;//  此PHP所在的實體資料夾
    echo '<br>';
    echo __FILE__;//  此PHP所在的路徑(包含檔名)
    echo '<br>';
    echo __LINE__;// 所在地幾行，較少使用通常用在除錯(左方的數字)
    echo '<br>';
    echo PHP_VERSION;
    echo '<br>';


?>
    
</body>
</html>