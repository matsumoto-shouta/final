<?php require 'DB_connect.php'; ?>
<?php require 'header.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/Table.css">
</head>
<body>
    <?php
        $pdo = new PDO($connect,USER,PASS);
        $sql = $pdo -> query('select * from beans, TYPE where beans.type = TYPE.type_id');

        echo '<table class="table">';
        echo '<tr><th>ID</th><th>銘柄</th><th>品種</th><th>原産国</th><th>操作</th></tr>';
        foreach($sql as $row){
            echo '<tr>';
            echo '<form  class="insert" action="Update-edit.php" method="post">';
            echo '<td>',$row['id'],'</td>';
            echo '<input type="hidden" name="id" value="',$row['id'],'">';
            echo '<td>',$row['name'],'</td>';
            echo '<input type="hidden" name="name" value="',$row['name'],'">';
            echo '<td>',$row['type_name'],'</td>';
            echo '<input type="hidden" name="country" value="',$row['country'],'">';
            echo '<td>',$row['country'],'</td>';
            echo '<td>';
            echo '<button type="submit">更新</button>';
            echo '</form>';
            echo '<form action="Delete-output.php" method="post">';
            echo '<input type="hidden" name="id" value="',$row['id'],'">';
            echo '<input type="hidden" name="name" value="',$row['name'],'">';
            echo '<button type="submit">削除</button>';
            echo '</form>';
            echo '</td>';
        }
        echo '</table>';
    ?>

    <div class="home">
        <input type="button" onclick="location.href='index.html'" value="ホームへ戻る">
    </div>
</body>
</html>