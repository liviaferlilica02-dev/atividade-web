<?php

$banco = new PDO("sqlite:loja.db");

$clientes = $banco->query("SELECT * FROM cliente")->fetchAll(PDO::FETCH_ASSOC);

$produtos = $banco->query("SELECT * FROM produto")->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Cadastro</title>

    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <nav>

        <a href="index.php">Início</a>

        <a href="cliente.php">Cliente</a>

        <a href="produto.php">Produto</a>

    </nav>


    <section class="pagina">

        <div class="conteudo">

            <h1>Sistema de Cadastro</h1>

            <p>
                Bem-vindo ao sistema de cadastro de clientes e produtos.
            </p>

            <div class="botoes">

                <a class="botao" href="cliente.php">
                    Cadastrar cliente
                </a>

                <a class="botao" href="produto.php">
                    Cadastrar produto
                </a>

            </div>

        </div>

    </section>


    <section class="tabela">

        <h2>Clientes cadastrados</h2>

        <table>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Cidade</th>
            </tr>

            <?php foreach ($clientes as $cliente) { ?>

                <tr>

                    <td>
                        <?php echo $cliente["id"]; ?>
                    </td>

                    <td>
                        <?php echo $cliente["nome"]; ?>
                    </td>

                    <td>
                        <?php echo $cliente["email"]; ?>
                    </td>

                    <td>
                        <?php echo $cliente["telefone"]; ?>
                    </td>

                    <td>
                        <?php echo $cliente["cidade"]; ?>
                    </td>

                </tr>

            <?php } ?>

        </table>


        <h2>Produtos cadastrados</h2>

        <table>

            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor de compra</th>
                <th>Valor de venda</th>
            </tr>

            <?php foreach ($produtos as $produto) { ?>

                <tr>

                    <td>
                        <?php echo $produto["id"]; ?>
                    </td>

                    <td>
                        <?php echo $produto["nome"]; ?>
                    </td>

                    <td>
                        <?php echo $produto["quantidade"]; ?>
                    </td>

                    <td>
                        R$ <?php echo $produto["valor_compra"]; ?>
                    </td>

                    <td>
                        R$ <?php echo $produto["valor_venda"]; ?>
                    </td>

                </tr>

            <?php } ?>

        </table>

    </section>

</body>

</html>