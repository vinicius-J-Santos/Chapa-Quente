<?php

require_once "../bd.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];

$sql = "insert into cliente(nome,email,telefone,senha) values ($nome,$email,$telefone,$senha)";

$conn->query($sql);

header("location: ../page/menu");
exit();

?>