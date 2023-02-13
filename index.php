<?php
include "./listController.php";

// echo "<pre>";
// print_r($lists);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Welcome Your personal Notion</h2>
            <div>
                <a href="./addView.php" type="button" class="btn btn-success">Create New</a>
            </div>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1 ?>
                    <?php foreach ($lists  as $key => $list) {  ?>

                        <tr>
                            <td><?= $count++ ?></td>
                            <td><?= $list["title"] ?></td>
                            <td><?= $list["description"] ?></td>
                            <td><?= $list["created_date"] ?></td>
                            <td>
                                <a href="./editController.php?id=<?= $list["id"] ?>">Edit</a>
                                <a href="./deleteController.php?id=<?= $list["id"] ?>">Delete</a>
                            </td>

                        </tr>


                    <?php } ?>




                </tbody>
            </table>
        </div>
    </div>

</body>

</html>