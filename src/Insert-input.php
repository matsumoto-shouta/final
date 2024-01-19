<?php require 'DB_connect.php'; ?>
<?php require 'header.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/Box.css">
    <link rel="stylesheet" href="./css/Design.css">
</head>
<body>
    <?php
    echo '<form class="insert" action="Insert-output.php" method="post">';
    echo '<p>銘柄：<input type="text" class="box" name="name"><br></p>';
    echo '<label class="selectbox">';
    echo '<p>品種：<select name="type">';   
                echo '<option value="1">アラビカ種</option>';
                echo '<option value="2">ロブスタ種</option>';
                echo '<option value="3">リベリカ種</option>';
    echo '</select></p>';
    echo '</label>';
    echo '<p>生産国：<input type="text" class="box" name="country"><br></p>';


    echo '<button id="btn2" type="submit"">追加</button>';
    echo '</form>';
    ?>

    <div class="home" >
        <input type="button" onclick="location.href='index.html'" value="ホームへ戻る">
    </div>
</body>
</html>