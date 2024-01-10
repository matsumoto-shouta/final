<?php require 'DB_connect.php'; ?>
<?php require 'header.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        echo '<form action="Update-output.php" method="post">';
        $pdo = new POD($connect,USER,PASS);
        $sql = $pod -> prepare('select * from beans, TYPE where beans.type = TYPE.type_id and bands.id = ?');
        $sql -> execute([$_POST['id']]);

        echo '<p>ID：',$_POST['id'],'</p><br>';
        echo '<p>銘柄：<input type="text" name="name" value="',$_POST['name'],'"></p><br>';
        echo '<p>品種：<select name="type">';
        echo '<option value="1">アラビカ種</option>';
        echo '<option vlaue="2">ロブスタ種</option>';
        echo '<option value="3">リベリカ種</option>';
        echo '</select></p><br>';
        echo '<p>国名：<input type="text" name="country" vlaue="',$_POST['country'],'"></p><br>';

        echo '<button type="submit">更新する</button>';
        
        echo '</from>';
    ?>
</body>
</html>