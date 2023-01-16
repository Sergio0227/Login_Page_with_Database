<?php   include "db.php";
        include "funtions.php";
        include "header.php";

if (isset($_POST['submit']))
{
    deleteRows();
}
?>

<!DOCTYPE html>
<html>

<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" name="username" type="text">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password">
                <input class="btn btn-primary" type="submit" name="submit" value="Delete">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                    ?>
                </select>
            </div>
        </form>
    </div>
</div>
</body>
</html>

