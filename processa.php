<?php
require_once 'Produtos.php';
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
// Validação de dados 
if(!$nome || !$preco || !$quantidade){
    exit("<p>Erro: Todos os campos são obrigatórios.</p>");
}
// Objeto da classe produto
$produto1 = new Produto($nome, (float)$preco, (int)$quantidade);
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Cadastrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Exibindo Dados do Produto</h1>
    </header>
    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Informações</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tr>
                <td>Nome:</td>
                <td><?= $produto1->getNome(); ?></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td>R$<?= number_format($produto1->getPreco(), 2, ',','.'); ?></td>
            </tr>
            <tr>
                <td>Quantidade:</td>
                <td><?= $produto1->getQuantidade(); ?></td>
            </tr>
            <tr>
                <td>Valor Total:</td>
                <td>R$<?= number_format($produto1->ValorTotal(), 2, ',','.'); ?></td>
            </tr>
        </table>
        <div class="voltar"> 
            <a href="index.php">Voltar para o Cadastro</a>
        </div>
        
    </main>
</body>
</html>