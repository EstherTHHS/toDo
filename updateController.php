<?php
session_start();

include "./config.php";

if (isset($_POST["update"])) {

    $upTitle = $_POST["upTitle"];
    $upNote = $_POST["upNote"];
    $upId = $_POST["editId"];

    $sql = $pdo->prepare(
        "UPDATE todolist SET  title=:title,description=:note WHERE id=:id"
    );

    $sql->bindValue(":title", $upTitle);
    $sql->bindValue(":note", $upNote);
    $sql->bindValue(":id",  $upId);

    $sql->execute();
    header("Location: ./index.php");
} else {
    echo "err";
}
