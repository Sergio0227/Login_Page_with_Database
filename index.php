<?php   include "db.php";
        include "funtions.php";
        include "header.php";

createRows();

?>

<!DOCTYPE html>
<html>

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