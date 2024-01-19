<?php require 'DB_connect.php'; ?>
<?php require 'header.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/Box.css">
</head>
<body>
    <?php
        echo '<form action="Update-output.php" class="insert" method="post">';
        $pdo = new PDO($connect,USER,PASS);
        $sql = $pdo -> prepare('select * from beans, TYPE where beans.type = TYPE.type_id and beans.id = ?');
        $sql -> execute([$_POST ['id']]);

        foreach($sql as $row){
            echo '<p>ID：',$_POST['id'],'</p><br>';
            echo '<input type="hidden" name="id" value="',$_POST['id'],'">';
            echo '<p>銘柄：<input type="text" class="box" name="name"></p><br>';
            echo '<label class="selectbox">';
            echo '<p>品種：<select name="type">';
            echo '<option value="1">アラビカ種</option>';
            echo '<option vlaue="2">ロブスタ種</option>';
            echo '<option value="3">リベリカ種</option>';
            echo '</select></p>';
            echo '</label>';
            echo '<p>国名：<input type="text" class="box" name="country"></p><br>';

        }

        echo '<button type="submit" id="btn2">更新する</button>';
        
        echo '</form>';
    ?>
</body>
</html>