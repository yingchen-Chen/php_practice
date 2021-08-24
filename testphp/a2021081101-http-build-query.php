<?php
$ar =[
  'a'=>100,
  'name'=>'bill',
];
echo http_build_query($ar);

// 就是將一個陣列轉換成url 問號?後面的引數字串，並且會自動進行urlencode處理。