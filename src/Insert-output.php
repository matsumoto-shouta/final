<?php require 'DB_connect.php'; ?>
<?php require 'header.php'; ?>

<?php
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo -> prepare('insert into beans(name,type,country) values(?,?,?)');
    $sql -> execute([$_POST['name'],$_POST['type'],$_POST['country']]);

    echo '<p>新たな豆を追加しました</p>';

?>

<?php require 'All.php'; ?>