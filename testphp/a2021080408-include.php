<?php

include 'a2021080208-query-string1.php' ;//包含某個php檔案的內容(也可以其他檔ex:html/txt)，找不到檔案會發出warning
require 'a2021080208-query-string1.php' ; //功能與include一樣，找不到檔案會發出error

include __DIR__. '/a2021080208-query-string1.php' ; //也可以這樣寫(相對路徑)
require __DIR__. '/a2021080208-query-string1.php' ; 
