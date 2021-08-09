<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$age=isset($_GET['age'])? intval($_GET['age']) : 0;

if($age >= 18) :
    echo '<img src="./imgs/S__71614552.jpg" alt="">' ;

else :
    echo '<img src="./imgs/godiva_homepage_20201005175401_154.png" alt="">' ;
endif

?>
</body>
</html>


    