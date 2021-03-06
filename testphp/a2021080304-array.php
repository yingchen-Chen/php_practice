<pre>
<!-- pre標籤:如果html裡有空白與換行符號就呈現出來，一般用在網頁程式碼縮排，如果用其他標籤內容就會擠在一起一路往橫排過去 -->
<?php
// php的陣列也是動態陣列，可增加裡面的元素

// 以下為索引式陣列

$ar1= array(3,5,7); //舊的語法，現在仍通用
$ar2=[3,5,7]; //5.X才開始支援的語法

var_dump($ar2); //查看內容，除錯用
print_r($ar2); //查看內容，除錯用

//以下是關聯式陣列

$ar3 = array(
    'name' => 'Davie',
    'age' => 23,
    );
// 一個key對一個value，key一定要是字串。不是字串系統也會自動幫你轉成字串。
$ar4 = [
    'name' => 'Davie',
    'age' => 23,
    ];
// 另一種表現方式，array與小括號()簡寫成一個中括號[]
print_r($ar4);

?>
</pre>