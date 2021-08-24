<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="a2021081107-files.php" name="form1" method="post" enctype="multipart/form-data"><!-- enctype="multipart/form-data設定表單編碼怎麼送出去，一定要設定這個才能送出檔案，設定後會變成URLencode-->

    <input type="file" name="avatar[]" accept="image/*" multiple> <!-- 可以在accept後面加multiple是可以上傳多個檔案，並且後端是php檔案的話name的欄位名稱要變成一個陣列 -->
    <br>
    <input type="text" name="name" placeholder="作品">
    <br>
    <input type="submit">



    </form>
</body>
</html>

