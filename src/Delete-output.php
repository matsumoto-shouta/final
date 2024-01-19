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
    $sql = $pdo -> prepare('delete from beans where id = ?');
    $sql -> execute([$_POST['id']]);

    echo '「',$_POST['name'],'」の豆を削除しました。';
    echo '<hr>';

?>

<?php require 'All.php'; ?>

<div class="home">
    <input type="button" onclick="location.href='index.html'" value="ホームへ戻る">
</div>

</body>
</html>
