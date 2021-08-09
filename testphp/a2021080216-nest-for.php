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
        <!-- 以下為兩層迴圈案例 -->
    <?php for($i=1; $i<=9; $i++): ?>
     <tr>
     <?php for($k=1; $k<=9; $k++): ?>
         <td><?=$i*$k ?></td> 
         <?Php endfor?>
    </tr>
    <?Php endfor?>
    </table>
</body>
</html>


    