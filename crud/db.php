<?php
$servername = "db";
$username = "capp1";
$password = "florist1202";
$dbname = "capp1";

// creating connection

$conn = new mysqli ($servername, $username, $password, $dbname);

//check the connection

if ($conn->connect_error)
{
    die("connection failed:" . $conn->connect_error);
}

?>