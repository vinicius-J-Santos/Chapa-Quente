<?php

require_once "../bd.php";

$email = $_POST["email"];
$senha = $_POST["password"];

$sql = "SELECT * FROM cliente WHERE emailCliente = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if ($cliente = $result->fetch_assoc()) {

    if (password_verify($senha, $cliente["senhaCliente"])) {

        session_start();

        session_regenerate_id(true);

        $_SESSION["idCliente"] = $cliente["idCliente"];
        $_SESSION["nomeCliente"] = $cliente["nomeCliente"];

        header("location: ../page/menu");
        exit();

    } else {
        die("Email ou senha incorreto");
    }

} else {
    die("Email ou senha incorreto");
}

$stmt->close();

?>
