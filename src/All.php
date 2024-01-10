<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pdo = new PDO($connect,USER,PASS);
        $sql = $pdo -> query('select * from beans, TYPE where beans.type = TYPE.type_id');
        foreach($sql as $row){
            echo $row['id'];
            echo $row['name'];
            echo $row['type_name'];
            echo $row['country'];
            echo '<br>';
        };
    ?>

    <a href="index.html">ホームに戻る</a>
</body>
</html>