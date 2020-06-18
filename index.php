<?php
$dsn = 'mysql:dbname=user;host=127.0.0.1;';
$user = 'ryu';
$password = 'Haru0806';
try {
    $dbh = new PDO($dsn, $user, $password);
    echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <div class="container">
            <? php foreach($result as $value){
                echo "<h1>$value[id] $value[name] $value[age]<h1>";

            }?>
        </div>
    </body>
    </html>
