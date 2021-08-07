<?php

$name ='Peter';

echo $name ?? 'noname'; //php 7以上才支援這種??的用法, 若沒有設定$name的值則顯示結果將會變為noname

$name =false;

echo $name ?? 'noname'; //若是這種則在php裡顯示就是空字串"" 因為$name定義為false。但在JS則因為前方為false就不會理會，直接顯示??後方的值>noname

?>
    