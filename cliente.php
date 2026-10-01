<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Cliente</title>

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

            <h1>Cadastro de Cliente</h1>

            <form action="dados_cliente.php" method="POST">

                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">

                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">

                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone">

                <label for="rua">Rua:</label>
                <input type="text" name="rua" id="rua">

                <label for="numero">Número:</label>
                <input type="text" name="numero" id="numero">

                <label for="complemento">Complemento:</label>
                <input type="text" name="complemento" id="complemento">

                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro">

                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade">

                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado">

                <button type="submit">Cadastrar cliente</button>

            </form>

        </div>

    </section>

</body>

</html>