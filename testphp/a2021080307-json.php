<h3>

<?php

for($i=1; $i<10; $i++){
   $br[]= $i*$i;
}

array_push($br,100,101);

echo json_encode($br);

// json_encode為轉換成json的字串

echo'<br>-------------<br>';

$ar = array(
  
   'name' => 'Davie',
   'age' => 23,
   'gender' =>'male',
   
   );
echo json_encode($ar);

echo'<br>-------------<br>';

$ar = array(
  
   'name' => '燈燈/可愛!',
   'age' => 7,
   'gender' =>'女生',
   
   );
echo json_encode($ar); //顯示會變成亂碼

echo'<br>-------------<br>';

echo json_encode($ar,JSON_UNESCAPED_UNICODE); //後方要加一個UNICODE屬性，中文字才能正常顯示，且亦不跳脫亞洲其他文字
echo'<br>-------------<br>';
echo json_encode($ar,JSON_UNESCAPED_SLASHES); //不跳脫slash，但跳脫中文字
echo'<br>-------------<br>';
echo json_encode($ar,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE); //不跳脫斜線也不跳脫中文字，中間的|可用+
?>
</h3>