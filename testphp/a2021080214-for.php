<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table border="1"><!-- 此為舊的寫法最好是用style去設定 -->
    <?php for($i=1; $i<=10; $i++)
    { ?>
     <tr>
         <!-- 此範例為一層迴圈 -->
         <td><?Php echo $i ?></td>
         <!-- $i後面沒有分號;是因為已經在PHP標籤的最尾了，因此可省略 -->
         <td><?= $i ?></td>
         <!-- 也可以縮寫成這樣 -->
         <td><?= $i*$i ?></td>
         
         <td><?= "$i*$i=".$i*$i ?></td>
         <!-- 沒有{$i*$i}這寫法，也沒有${i*i}這種，要用.來接 -->
     </tr>
    <?Php
    }
    ?>
    </table>
</body>
</html>


    