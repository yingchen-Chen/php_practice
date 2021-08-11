<h3>
<?php

$ar = array(
  
   'name' => '燈燈',
   'age' => 7,
   'gender' =>'女生',
   
);

$ar2 =$ar;  //複製一個新的陣列給ar2，在指定(設定值),set by value.
$ar2['name']='大吉子';

echo json_encode($ar,JSON_UNESCAPED_UNICODE); 
echo'<br>-----------<br>';
echo json_encode($ar2,JSON_UNESCAPED_UNICODE); 
echo'<br>-----------<br>';

$ar3 =&$ar;  //加上&為設定位址，把$ar設定指到的位置，設定給$ar3。所以ar跟ar3是指到相同的陣列(一般情況下不用特別用到這個功能)。set by address.

$ar3['name']='小球球';

echo json_encode($ar,JSON_UNESCAPED_UNICODE); 
echo'<br>-----------<br>';
echo json_encode($ar3,JSON_UNESCAPED_UNICODE); 
echo'<br>-----------<br>';
?>
</h3>