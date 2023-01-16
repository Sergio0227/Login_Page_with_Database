<?php   include "db.php";
        include "funtions.php";
        include "header.php";

 if (isset($_POST['submit']))
 {
     updateTable();
 }
?>

<!DOCTYPE html>
<html>


<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Update</h1>
        <form action="login_update.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" name="username" type="text">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password">
                <input class="btn btn-primary" type="submit" name="submit" value="Create">
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
