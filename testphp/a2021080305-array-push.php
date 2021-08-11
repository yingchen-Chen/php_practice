<pre>

<?php

for($i=1; $i<10; $i++){
   $br[]= $i*$i;
}
// 這樣的語法$br[]=可以直接當成是array_push的意思
print_r($br);
echo'<br>';

array_push($br,100,101);
// 前方放陣列名，後方放值。

// echo $br;
// 不要直接將陣列轉換為字串，這個出來的結果是系統直接丟一個array給你

echo implode(',' ,$br).'<br>';
// 第一格放要用甚麼符號把陣列黏起來，顯示為陣列接成字串樣子

$str ='1-3-5-7-15';
$ar =explode('-',$str);
// 第一個用甚麼隔開,第二格放要被切割的陣列，將字串切割成陣列
print_r($ar);
?>
</pre>