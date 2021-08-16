<?php

require __DIR__. '/vendor/autoload.php';
// 自動載入程式碼

use PhpOffice\PhpSpreadsheet\Spreadsheet;
//use功能類似JS import,引用的意思;spreadsheet與xlsx是類別檔，上方的autoload就是自動載入該類別檔;類別前方就是套件的路徑。
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
//getActiveSheet是取得目前所在的分頁。在建立分頁的時候就會產生一個預設的分頁。
$sheet->setCellValue('A1', 'Hello World !');
//該格子的值(該格子的座標，該格子座標的值);此檔案存在記憶體內。

$writer = new Xlsx($spreadsheet);
//建立xlsx類別的物件
$writer->save('hello world.xlsx');
//存成甚麼樣的檔案(檔名.類別檔)，然後就會輸出一個excel檔，在php檔同一層位置。
?>