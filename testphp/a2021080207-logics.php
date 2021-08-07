<?php

$a=1.2;
var_dump($a); //查看變數或常數的值
echo '<br>';
var_dump(true);
echo '<br>';

var_dump(7&&5); //如果在JS裡7&&5則結果會是5，因為7判定為true則就把5丟出來。php當中邏輯運算子結果一律為布林值bool。
echo '<br>';
var_dump(7 and 5); //and為舊的表現手法,與新版用符號表示之間的差異在於與等號的優先權-----新版符號表示方式(&&,||) >   =   > 舊版表示方式(and,or)


$b = 7||5; // &&,||優先權高於 =
var_dump($b);
echo'<br>';

$c = 7 or 5; //and,or的優先權低於=，所以此程式的意思為($c=7),後面的就不會執行了
var_dump($c);
echo'<br>';
?>
    