<pre>
<?php
$str= '{"name":"\u71c8\u71c8\/\u53ef\u611b!","age":7,"gender":"\u5973\u751f"}'; // 包成這樣就將字串變成了一個object

$obj = json_decode($str); //json_decode為將字串解析轉換成PHP Object，json_encode為轉換成json的字串。顯示出的stdClass Object為std為standard的縮寫;標準。
$ar = json_decode($str,true);
//第二格提示字為associative(關聯的/聯想的)，如果輸入true則顯示關聯式陣列(associative arrays)結果，輸入false則回傳一個物件(objects)。

print_r($obj);
echo '<br>-----<br>';
print_r($ar);
echo '<br>-----<br>';

// 以下兩個寫法皆會拿到同樣的內容。
echo $obj -> name; //物件的屬性。 ->要拿到某個物件(objects)的某一個屬性值就要用此符號
echo '<br>-----<br>';
echo $ar['name']; //陣列的元素值，用中括號裡面放一個key


?>
</pre