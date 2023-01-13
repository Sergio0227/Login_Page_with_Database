<?php

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect("localhost", 'root', '', 'loginapp');

        if($connection) {
            echo "We are connected";
        }
        else {
            die("Database connection failed");
        }
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";
        $result = mysqli_query($connection, $query);

        if(!$result)
        {
            die('Query failed' .mysqli_error());
        }



    }

