<!DOCTYPE html>
<?php
    include "login.php";

?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Udemy Course 01</title>
    </head>

<body>
<div class="container">
    <div class="col-xs-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" name="username" type="text">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>

</div>

<?php



?>

</body>
</html>



