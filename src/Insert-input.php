<?php require 'DB_connect.php'; ?>
<?php require 'header.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    echo '<form action="Insert-output.php" method="post">';
    echo '<p>銘柄：<input type="text" name="name"><br></p>';
    echo '<p>品種：<select name="type">';
                echo '<option value="1">アラビカ種</option>';
                echo '<option value="2">ロブスタ種</option>';
                echo '<option value="3">リベリカ種</option>';
    echo '</select></p>';
    echo '<p>生産国：<input type="text" name="country"><br></p>';

    echo '<button type="submit">追加</button>';
    echo '</form>';
    ?>
</body>
</html>