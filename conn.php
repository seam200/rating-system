<?php

$servername  = "localhost";
$username = "root";
$password = "";
$database = "ratings";

$conn = mysqli_connect($servername, $username, $password, $database);
function sefuda($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}
