<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "";
$port = "";

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>