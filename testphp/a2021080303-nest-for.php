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
    <table border="1">
    <?php for($i=1; $i<=9; $i++)
    : ?>

     <tr>
        <?php for($k=1; $k<=9; $k++) : ?>
            <!-- <td><?= sprintf('%s*%s=%s',$i,$k,$i*$k) ?></td>  -->
            <td><?php printf('&nbsp;%s*%s=%s&nbsp',$i,$k,$i*$k) ?></td> 
            <!-- 兩種寫法皆可;&nbsp為增加一個空白使空間不那麼擁擠 -->
             <?Php endfor ?>

             <?php /* for($k=1; $k<=9; $k++) : ?>
            <td><?= sprintf('%s*%s=%s',$i,$k,$i*$k) ?></td> 
            <td><?php printf('&nbsp;%s*%s=%s&nbsp',$i,$k,$i*$k) ?></td> 
             <?Php endfor ?> */ ?>

             上方為展示php如何完全註解掉 在Php標籤後面打上/* 在?>前打上*/即可

     </tr>
     <?Php endfor ?>
    </table>
</body>

</html>