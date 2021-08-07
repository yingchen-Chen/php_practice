<?php

$name ='Peter';

$a =66;
$b ="22";
$c = 'hi'; //非數值

echo $a + $b; // + 只做數值的相加減乘除
echo '<br>';

echo $a * $b;
echo '<br>';

echo intval($b) + intval($c);  //intval():轉換為整數,int為整數val為value
echo '<br>';

echo intval($b) * intval($c);
echo '<br>';

echo $b + $c;  //沒有打intval()則系統會說無法計算
echo '<br>';

echo $b * $c;
echo '<br>';



?>
    