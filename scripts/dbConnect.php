<?php
$servername = "localhost";
$username = "root";
$password = "EuSkYq19NAkjAyTM";
$database = "demosdo";

// Create connection
$mySQL = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$mySQL) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully <br>";

function escape ($mySQL, $string){
    $string = mysqli_real_escape_string($mySQL,$string);
    $string = str_replace("\\'", "''", "$string");
    return $string;
}
?>