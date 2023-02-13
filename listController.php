<?php

include "./config.php";
$sql = $pdo->prepare("
    SELECT * FROM todolist WHERE del_flg=0;
");

$sql->execute();
$lists = $sql->fetchAll(PDO::FETCH_ASSOC);
