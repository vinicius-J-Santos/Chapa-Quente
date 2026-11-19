<?php

$host = "localhost";
$user = "root";
$pass = "etecPoa#2026";
$db = "chapaquente";
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);

if($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>