<?php

echo $_GET['a'] ?? ''; //a沒有設定的話就給空字串(預設值的''空字串)，get為取得query-string數值的意思,query-string翻譯為查詢字串，為網頁與伺服器之間的問答機制。

$a= isset($_GET['a'] ) ? $_GET['a'] : 0; //isset()是用來檢視變數有沒有設定;整句意思:判斷變數a是否有設定值，沒有則a為o
echo $a;
$a= isset($_GET['a'] ) ? intval($_GET['a']) : 0; //也可以這樣寫
$b= isset($_GET['b'] ) ? intval($_GET['b']) : 0;
echo $a+$b;
?>


    