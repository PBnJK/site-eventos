<?php
$db_name = "pedrob_users";
$db_host = "mysql-pedrob.alwaysdata.net";
$db_user = "pedrob";
$db_pass = "mypwd@45";

$dsn = "mysql:dbname=$db_name;host=$db_host";

try {
    $conn = new PDO($dsn, $db_user, $db_pass);
} catch(PDOException $e) {
    die("Erro ao criar uma conexão com o banco de dados: " . $e->getMessage());
}

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );