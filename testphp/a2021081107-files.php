<pre>
<?php

var_dump($_FILES);
//多個檔案的時候
//$_FILES['avatar']['name'][0] //上傳檔案的原來的檔名第一個
//$_FILES['avatar']['name'][1]] //上傳檔案的原來的檔名第二 個
/* array(1) {
  ["avatar"]=>
  array(5) {
    ["name"]=>
    array(2) {
      [0]=>
      string(12) "彩繪03.jpg"
      [1]=>
      string(12) "彩繪04.jpg"
    }
    ["type"]=>
    array(2) {
      [0]=>
      string(10) "image/jpeg"
      [1]=>
      string(10) "image/jpeg"
    }
    ["tmp_name"]=>
    array(2) {
      [0]=>
      string(24) "C:\xampp\tmp\php28DE.tmp"
      [1]=>
      string(24) "C:\xampp\tmp\php290E.tmp"
    }
    ["error"]=>
    array(2) {
      [0]=>
      int(0)
      [1]=>
      int(0)
    }
    ["size"]=>
    array(2) {
      [0]=>
      int(2995751)
      [1]=>
      int(5162605)
    }
  }
} */

?>
</pre>
