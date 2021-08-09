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
    <!-- 介紹{}的另一種寫法 -->
    <table border="1">
    <?php for($i=1; $i<=10; $i++)
    : ?>
    <!-- 由於{}很容易產生位置放錯，或除錯時難辨別到底是誰的所以可以將首{改成: -->
     <tr>
         <!-- <td><?Php echo $i ?></td> -->
         <td><?= sprintf('%s*%s=%s',$i,$i,$i*$i) ?></td> <!-- sprintf()函數意思:回傳一個字串，printf本身就是輸出字串與echo相同。用法是用%挖一個洞讓你填數值，s為string意思,前面橘色是公式，後面式數值一個對一個填進去 -->
         <td><?= $i ?></td>
         
         <td><?= $i*$i ?></td>
         
         <td><?= "$i*$i=".$i*$i ?></td>
        
     </tr>
    <?Php
    endfor
    // 尾}改成endXXXX,首字是endfor為for的end
    ?>
    </table>
</body>
</html>


    