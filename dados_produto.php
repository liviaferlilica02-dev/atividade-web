<?php

$banco = new PDO("sqlite:loja.db");

$sql = "CREATE TABLE IF NOT EXISTS produto (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT,
    quantidade INTEGER,
    valor_compra REAL,
    valor_venda REAL
)";

$banco->exec($sql);


$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"];
$valor_compra = $_POST["valor_compra"];
$valor_venda = $_POST["valor_venda"];


$sql = "INSERT INTO produto
(nome, quantidade, valor_compra, valor_venda)
VALUES
(:nome, :quantidade, :valor_compra, :valor_venda)";

$consulta = $banco->prepare($sql);

$consulta->execute([
    ":nome" => $nome,
    ":quantidade" => $quantidade,
    ":valor_compra" => $valor_compra,
    ":valor_venda" => $valor_venda
]);

echo "Produto cadastrado com sucesso!";

?>