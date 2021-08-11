<pre>

<?php

for($i=1; $i<10; $i++){
   $br[]= $i*$i;
}

array_push($br,100,101);
foreach($br as $v){
   // foreach是用來索引陣列資料結構裡的元素。v為我自己決定的變數，該變數會拿到前方的原數值
   echo "$v <br>";
}
echo'-------------<br>';

$ar = array(
   123,
   'name' => 'Davie',
   'age' => 23,
   'gender' =>'male',
   'orange'
   );
// 沒有給key也會輸出，就已編排的順序當輸出的順序，所以原則上不要混用索引式與關聯式
foreach($ar as $v){
   echo "$v <br>";
   }
echo'-------------<br>';
foreach($ar as $k => $v){
      echo "$k => $v <br>";
   }
   // $K$V可以自己取自己要的，取KV單純是代表key$value的簡寫
echo'-------------<br>';

echo count($ar);
// 查看陣列長度

?>
</pre>