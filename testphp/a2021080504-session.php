<?php
session_start();//啟用session，跟設定cookie一樣設定檔頭

if(! isset($_SESSION['num'])){
  $_SESSION['num']= 1 ;
}else {
  $_SESSION['num'] ++;
}
//判斷是否有沒有設定，沒有設定則num=1否則num值+1。$_SESSION['num'];是一個php的array，cookie的值只能是字串，session沒有限定是甚麼類型;可以字串陣列數值...etc

// unset($_SESSION['num']); 刪掉某個session變數(陣列，講變數也行)
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
   <?= $_SESSION['num'] ?>
</body>
</html>