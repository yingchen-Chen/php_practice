<?php
include __DIR__ . './partials/init.php';
$title = '資料列表';

// $page

$rows = $pdo->query("SELECT*FROM address_book1 ORDER BY sid DESC LIMIT 4")
    ->fetchALL();
//資料全部拿出來給$rows這個變數
//ORDER BY sid DESC:資料呈現降冪排列




?>
<!-- -------------資料讀取/觸發----------------- -->

<!-- -------------view資料呈現----------------- -->
<?php include __DIR__ . './partials/html-head.php'; ?>
<?php include __DIR__ . './partials/navbar.php'; ?>
<div class="container">

    <div class="row">
        <div class="col">
            <!-- 放表格 -->
           
            <table class="table table-striped table-bordered"> <!-- table-bordered加邊框屬性 -->
                <thead>
                    <tr>
                    <!-- `sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at` -->
                        <th scope="col">sid</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">mobile</th>
                        <th scope="col">birthday</th>
                        <th scope="col">address</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $r) : ?>
                    <tr>
                        <td><?= $r['sid'] ?></td>
                        <td><?= $r['name'] ?></td>
                        <td><?= $r['email'] ?></td>
                        <td><?= $r['mobile'] ?></td>
                        <td><?= $r['birthday'] ?></td>
                        <td><?= $r['address'] ?></td>

                    </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php include __DIR__ . './partials/scripts.php'; ?>
<?php include __DIR__ . './partials/html-foot.php'; ?>
<!-- 用這種方式，修改與維護方便，不用每一個檔案都開起來改，改原檔案，其他include的都一起改。
這樣此檔案就能當基本版型檔案，改中間container部分就可 -->