<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?= isset($_COOKIE['my_cookie'])? $_COOKIE['my_cookie']:'' ?> 
  <!-- 有沒有設定cookie?有就顯示，沒有就空字串。與前一個檔案不同是因為已設定過cookie，所以第二個檔案只做讀取的動作。結論:cookie的資源是可以跨頁面，但現在這世代有點不好用-->
</body>
</html>