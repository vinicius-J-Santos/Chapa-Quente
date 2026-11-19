<?php

require_once "../bd.php";

$nome = $_POST["name"];
$email = $_POST["email"];
$telefone = $_POST["phone"];
$senha = $_POST["password"];

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO cliente
        (nomeCliente, emailCliente, telefoneCliente, senhaCliente)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssss", $nome, $email, $telefone, $senhaHash);

$stmt->execute();

$stmt->close();

header("location: ../page/menu.php");
exit();

?>
