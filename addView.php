<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container-fluid col-6">
    <h2 class="m-3">Create New To Do List</h2>
    <form action="addController.php" method="post">
        <div class="mb-3 form-group">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">TitleList</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="notes"></textarea>
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-primary" id="exampleFormControlInput1" name="submit" value="Submit">
                <a href="index.php" class="btn btn-success">Back</a>
            </div>


        </div>

    </form>