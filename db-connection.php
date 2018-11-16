<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "orphan";

// Database Connection
$con = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>