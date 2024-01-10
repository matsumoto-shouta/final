<?php require 'DB_connect.php'; ?>
<?php require 'header.php'; ?>

<?php
    $pdo = new PDO($connect,USER,PASS);
    $sql = $pdo -> prepare()