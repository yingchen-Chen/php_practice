<pre>
<?php
//上船後的檔案要放在哪裡
$folder = __DIR__. '/imgs/';

//如果有上傳檔案(如果不是空的)
if(! empty($_FILES)){

    if(move_uploaded_file(
        $_FILES['avatar']['tmp_name'],
        $folder.$_FILES['avatar']['name']
    )){
       echo 'OK' ;
    }else{
        echo 'move file error';

    }

}else {
    echo 'no files';
}

// move_uploaded_file只可搬動已經上傳的暫存資料檔案，不是任何檔案都可以搬






// var_dump($_FILES);
//單一檔案
//$_FILES['avatar']['name'] //上傳檔案的原來的檔名，上傳完後才能拿到這些資料，通常不會允許上傳太大檔案。檔案太大會上傳時間花太久，php有機制會停止
/*array(1) {
  ["avatar"]=>
  array(5) {
    ["name"]=>
    array(1) {
      [0]=>
      string(12) "彩繪04.jpg"
    }
    ["type"]=>
    array(1) {
      [0]=>
      string(10) "image/jpeg"
    }
    ["tmp_name"]=>
    array(1) {
      [0]=>
      string(24) "C:\xampp\tmp\php6567.tmp"
    }
    ["error"]=>
    array(1) {
      [0]=>
      int(0)
    }
    ["size"]=>
    array(1) {
      [0]=>
      int(5162605)
    }
  }
} */
?>
</pre>
