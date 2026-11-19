<?php

require_once "../bd.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["tel"];
$senha = $_POST["senha"];

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO cliente
        (nomeCliente, emailCliente, telefoneCliente, senhaCliente)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssss", $nome, $email, $telefone, $senhaHash);

$stmt->execute();

$stmt->close();

header("location: ../page/menu");
exit();

?>
