<?php
// session_start(); 
//如果啟動兩次session會有問題，所以可以先下一個判斷式是否有啟用了
if(! isset($_SESSION)) {
  session_start();
}

var_dump($_SESSION);
// var_dump 函式的功能是用來印出變數的相關訊息於螢幕上，例如變數的值或是變數的種類，var_dump 可以判斷一般字串變數以及陣列變數，使用方式很簡單，僅需將要印出的變數填入 var_dump 函式即可，函式會直接輸出結果，沒有返回值。
