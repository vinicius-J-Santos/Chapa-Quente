<?php

require_once "../bd.php";

$email = $_POST["email2"];
$senha = $_POST["senha2"];

$sql = "select * from cliente where email = $email and senha = $senha";

$conn->query($sql);

if($conn->affected_rows>0){
    header("location: ../pages/menu.php");
    exit;
}else{
    die("Email ou senha incorreto");
    exit;
}

?>