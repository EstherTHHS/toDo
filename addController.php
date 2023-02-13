<?php
require 'config.php';

if (isset($_POST["submit"])) {
    $title = $_POST['title'];
    $notes = $_POST['notes'];

    // echo $title . $notes;

    $sql = $pdo->prepare("
    INSERT INTO  todolist
    (
    title,
    description
    )
    VALUES
    (
    :title,
    :description
    )
");
    $sql->bindValue(":title", $title);
    $sql->bindValue(":description", $notes);
    $sql->execute();

    header("Location:./index.php");
} else {
    echo "ERR";
}

// if ($result) {
    //     echo "<script>alert('New To do notes is added successfully!');window.location.href</script>";
    // }
