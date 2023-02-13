<?php
include "./config.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // echo $id;

    $sql = $pdo->prepare("UPDATE todolist SET del_flg=1 WHERE id=:id");

    $sql->bindValue(":id", $id);
    $sql->execute();

    header("Location: ./index.php");
}
