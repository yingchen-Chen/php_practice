<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="a2021081105-file.php" name="form1" method="post" enctype="multipart/form-data"><!-- enctype="multipart/form-data設定表單編碼怎麼送出去，一定要設定這個才能送出檔案，設定後會變成URLencode-->

    <input type="file" name="avatar" accept="image/*"> <!-- type檔案的欄位要改file，accept是可接受上船的檔案類型，*代表所有類;可以在後面接,然後再加其他檔型。-->
    <br>
    <input type="text" name="name" placeholder="作品">
    <br>
    <input type="submit">



    </form>
</body>
</html>

