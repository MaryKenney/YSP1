<?php 
function dbConnect() {
    $host = "localhost";
    $user = "cdh7012_temp";
    $pwd = "Mia0630!";
    $database = "cdh7012_ysp";
    $port = "3306";

    $conn = new mysqli($host, $user, $pwd, $database, $port) or die("could not connect to server");

    return $conn;
}
?>