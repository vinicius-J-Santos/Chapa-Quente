<?php

$host = "localhost";
$user = "root";
$pass = "etec";
$db = "chapaquente";
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);

if($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>