<?php

include_once "db_config.php";

$u_nome = $_POST["u-nome"];
$u_email = $_POST["u-email"];
$u_tel = $_POST["u-tel"];
$u_cpf = $_POST["u-cpf"];

$stmt = $conn->prepare("INSERT INTO users (nome, email, tel, cpf) VALUES (?, ?, ?, ?)");

$stmt->bindParam(1, $u_nome);
$stmt->bindParam(2, $u_email);
$stmt->bindParam(3, $u_tel);
$stmt->bindParam(4, $u_cpf);

$result = $stmt->execute();
if( !$result ) {
    die("Falha ao inserir dados no banco de dados: " . $stmt->errorInfo());
}

header("Location: ../index.html");
die();