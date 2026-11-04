<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
 <body>
    <header class="cabecalho">
        <h1>Cadastro de Produtos</h1>
    </header>
    <div class="Formulario">
        <form action="processa.php" method ="post">
            <!-- campos do formulário para serem preenchidos -->
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do produto" required>

            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" placeholder="Digite o preço do produto" required>

            <label for="quantidade">Quantidade em Estoque:</label>
            <input type="number" id="quantidade" name="quantidade" required>

            <button type="submit" class="botao">Enviar</button>
    </div>
 </body>
</html>