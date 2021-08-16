<h2>
  <?php
  // date_default_timezone_set('Asia/Taipei');
  // 設定時區，僅適用於這個檔案，如果要一勞永逸要去php.ini(php的設定檔)的[Date] date.timezone = 設定

  echo time(). '<br>';
  echo date("Y-m-d H:i:s"). '<br>';
  echo date("D N w"). '<br>'; //N數值1-7 w是0-6 都是顯示星期幾
  echo date("Y-m-d H:i:s",time()+40*24*60*60).'<br>';
  // 這是看40天後是幾月幾日幾十幾分幾秒

  // 詳細英文代號可以去php的documentation裡搜尋date/ DateTimeInterface::format().

  $t=strtotime('2021/08/12');
 //這就是一個timestamp
  echo date("Y-m-d H:i:s",$t). '<br>';
  // t是給時間戳記的當天日期，因為沒設定更詳細時間所以都0時分秒
  


  ?>
</h2>