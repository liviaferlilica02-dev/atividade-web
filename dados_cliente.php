<?php

$banco = new PDO("sqlite:loja.db");

$sql = "CREATE TABLE IF NOT EXISTS cliente (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT,
    email TEXT,
    telefone TEXT,
    rua TEXT,
    numero TEXT,
    complemento TEXT,
    bairro TEXT,
    cidade TEXT,
    estado TEXT
)";

$banco->exec($sql);


$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];


$sql = "INSERT INTO cliente
(nome, email, telefone, rua, numero, complemento, bairro, cidade, estado)
VALUES
(:nome, :email, :telefone, :rua, :numero, :complemento, :bairro, :cidade, :estado)";

$consulta = $banco->prepare($sql);

$consulta->execute([
    ":nome" => $nome,
    ":email" => $email,
    ":telefone" => $telefone,
    ":rua" => $rua,
    ":numero" => $numero,
    ":complemento" => $complemento,
    ":bairro" => $bairro,
    ":cidade" => $cidade,
    ":estado" => $estado
]);

echo "Cliente cadastrado com sucesso!";

?>