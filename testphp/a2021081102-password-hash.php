<?php

$p ='adws123';
echo password_hash($p, PASSWORD_DEFAULT);
// password_hash：建立密碼雜湊值,在使用時，需要搭配第二個參數，推薦直接使用 PASSWORD_DEFAULT
// 每次處理時，都會在背後產生隨機的SALT

