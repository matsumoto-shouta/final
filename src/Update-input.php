<?php require 'DB-connect.php'; ?>
<?php require 'header.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        echo '<form action="Update-edit.php" method="post">';
        $pdo = new PDO($connect,USER,PASS);
        $sql = $pdo -> query('select * from beans, TYPE where beans.type = TYPE.type_id');
        foreach($sql as $row){
            echo $row['id'];
            echo $row['name'];
            echo $row['country'];
            echo '<button type="submit">更新</button>';
            echo '<br>';
        }
        echo '</form>';
    ?>
</body>
</html>