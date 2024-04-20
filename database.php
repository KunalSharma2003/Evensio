<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}
else{
    echo("Conneted Succesfully");
}
return $mysqli;
?>