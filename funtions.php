<?php include "db.php";

function createRows()
{
    if(isset($_POST['submit']))
    {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO users(username, password) ";
        $query .= "VALUES ('$username', '$password')";
        $result = mysqli_query($connection, $query);

        if(!$result) die("Query Failed" .mysqli_error());
        else echo "Record Created";
    }
}

function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) die('Query FAILED' .mysqli_error());


    while ($row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateTable()
{
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = '$id' ";

    $result = mysqli_query($connection,$query);
    if(!$result) die("Query Failed" .mysqli_error());
    else echo "Record Updated";
}

function deleteRows()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE from users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection,$query);
    if(!$result) die("Query Failed" .mysqli_error());
    else echo "Record Deleted";
}

function readData()
{

    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) die('Query FAILED' .mysqli_error());

      while ($row = mysqli_fetch_assoc($result))
      {
          print_r($row);
      }

}