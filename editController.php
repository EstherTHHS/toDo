<?php
require "config.php";
session_start();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // echo $id;

    $sql = $pdo->prepare("
    SELECT * FROM todolist WHERE id=:id
    ");
    $sql->bindValue(":id", $id);

    $sql->execute();

    $todo = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($todo);

    $_SESSION["editList"] = $todo;
    header("Location: ./edit.php");
} else {
    echo "err";
}
