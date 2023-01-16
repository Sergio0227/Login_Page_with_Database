<?php   include "db.php";
        include "funtions.php";

createRows();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Login Page</title>
    </head>

<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Create</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" name="username" type="text">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password">
                <input class="btn btn-primary" type="submit" name="submit" value="Create">
            </div>
        </form>
    </div>
</div>
</body>
</html>