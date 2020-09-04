<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "luxstudiodb";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Verbinding mislukt: " . mysqli_connect_error());
}
