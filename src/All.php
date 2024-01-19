<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Table.css">
    <title>Document</title>
</head>
<body>
    <?php
        $pdo = new PDO($connect,USER,PASS);
        $sql = $pdo -> query('select * from beans, TYPE where beans.type = TYPE.type_id');

        echo '<table class="table">';
        echo '<tr><th>ID</th><th>銘柄</th><th>品種</th><th>原産国</th></tr>';
        foreach($sql as $row){
            echo '<tr>';
            echo '<td>',$row['id'],'</td>';
            echo '<td>',$row['name'],'</td>';
            echo '<td>',$row['type_name'],'</td>';
            echo '<td>',$row['country'],'</td>';
            echo '</tr>';
        };
        echo '</table>';
    ?>

</body>
</html>