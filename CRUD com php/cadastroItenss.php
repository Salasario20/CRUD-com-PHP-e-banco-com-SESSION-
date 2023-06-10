<?php
include("conexao.php");
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastroItenss.css">
    <title>Cadastro de Itens</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <div class="container">
        <button class="back-button" onclick="window.location.href='listagemItens.php'">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="16px" height="16px">
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M9.41 7.41L8 6l-6 6 6 6 1.41-1.41L5.83 12H20V10H5.83l3.58-3.59z" />
            </svg>
            Voltar para listagem de Itens
            </button>

            <h1>Cadastro de Produtos</h1>
            <form id="cadastroForm" action="cadastroItens.php" method="POST">
                <label for="nome">Item</label>
                <input type="text" required name="nome" class="">
                <label for="quantidade">Quantidade</label>
                <input type="number" required name="quantidade" class="">
                <button type="submit">Cadastrar</button>
            </form>
    </div>
</body>

</html>