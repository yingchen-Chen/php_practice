<?php
setcookie('my_cookie','1');
// 設定餅乾必須在所有html內容之前，是在設定檔頭response headers，之後可以在headers裡看到紀錄
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?= $_COOKIE['my_cookie'] ?> 
    <!-- 這邊做讀取的動作 -->
</body>
</html>