<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Produto</title>

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

            <h1>Cadastro de Produto</h1>

            <form action="dados_produto.php" method="POST">

                <label for="nome">Nome do produto:</label>
                <input type="text" name="nome" id="nome">

                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade">

                <label for="valor_compra">Valor de compra:</label>
                <input type="number" step="0.01" name="valor_compra" id="valor_compra">

                <label for="valor_venda">Valor de venda:</label>
                <input type="number" step="0.01" name="valor_venda" id="valor_venda">

                <button type="submit">Cadastrar produto</button>

            </form>

        </div>

    </section>

</body>

</html>