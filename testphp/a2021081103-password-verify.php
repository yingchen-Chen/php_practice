<?php

$hash ='$2y$10$XyBRXztybsZYmrffvxlpXedp1HsnWrqBMc8jtvgsWCDAAEoRYdUPG';
echo password_verify('adws123', $hash) ? 'yes' : 'no';
// password_hash：建立密碼雜湊值,在使用時，需要搭配第二個參數，推薦直接使用 PASSWORD_DEFAULT
// 每次處理時，都會在背後產生隨機的SALT

