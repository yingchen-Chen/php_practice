<?php
include __DIR__ . './partials/init.php';

header('Content-Type:application/json');
$output= [
    'success'=>false,
    'error' => '資料欄位不足',
    'code'=> 0,
    'rowCount'=> 0,
    'postData' => $_POST,
];//要輸出的格式

//驗證email格式正確與否的程式碼
// var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));

//練習題:便免直接拜訪時的錯誤訊息
if(
    empty($_POST['sid']) or 
    empty($_POST['email']) or
    empty($_POST['mobile']) or
    empty($_POST['directions'])
    
){   
    echo json_encode($output);
    exit;
}
//TODO:資料格式檢查
if(mb_strlen($_POST['name'])<2){ //mb_strlen一個檢視字串長度的函式。
    $output['code']= 410;

    echo json_encode($output);
    exit;

}
if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $output['error']='信箱格式錯誤'; 
    $output['code']= 420;

    echo json_encode($output);
    exit;
}

/* 
以下為一個錯誤寫法，會受到SQL injection 攻擊
 $sql="INSERT INTO `hw_designer`(
     `name`, `email`, `mobile`, 
     `upload date`, `directions`, `created_at`
    ) VALUES(
        '{$_POST['name']}','{$_POST['email']}','{$_POST['mobile']}',
        '{$_POST['upload date']}','{$_POST['directions']}',NOW()
    )";
$stmt = $pdo->query($sql);
*/

$sql="UPDATE `hw_designer` SET 
                              `name`= ?,
                              `email`= ?,
                              `mobile`= ?,
                              `directions`= ? 
                              WHERE `sid`= ?"; //從SQL複製過來後把SID放在where後面因為他是條件
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['directions'],
    $_POST['sid'],



]);

// 當你使用的是$statement->prepared()時，你會先創造一個prepared的聲明(prepared statement)，並且說明哪些是placeholder，會在之後的地方才放入。

// 當你之後執行$statement->execute()時，你再把屬於該placeholder的值放入，並且加以執行。
//只要資料是來自外面(用戶端)的一律當作不安全資料，使用prepare語法

$output['rowCount']=$stmt->rowCount();//修改的筆數,如果為一則成功(true)
if($stmt->rowCount()==1){
    $output['success']= true;
    $output['error']= '';
}else{
    $output['error']= '資料未修改';
}


echo json_encode($output);

    