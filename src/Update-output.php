<?php require 'DB_connect.php'; ?>
<?php require 'header.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/Design.css">
    <title>Document</title>
</head>
<body>
    
<?php
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo -> prepare('update beans set name=?, type=?,country=? where id=?');
    $sql -> execute([$_POST['name'],$_POST['type'],$_POST['country'],$_POST['id']]);

    echo '<p>豆の情報を更新しました<p>';

    echo '<hr>';
    require 'All.php';
?>

<div class="home">
    <input type="button" onclick="location.href='index.html'" value="ホームへ戻る">
</div>

</body>
</html>