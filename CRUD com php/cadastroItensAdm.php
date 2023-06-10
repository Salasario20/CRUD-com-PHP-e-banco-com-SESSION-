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
    <title>Cadastro de Itens</title>
    <link rel="stylesheet" href="css/cadastroItensAdm.css">
</head>
<body>
<div class="button-container">
    <button class="back-button" onclick="window.location.href='listagemItensAdm.php'">Voltar para listagem de Itens</button>
</div>


    <div class="container">
        <h1>Cadastro de Itens</h1>

        <form id="cadastroForm" action="cadastroItens.php" method="POST">
            <label class="label1" for="nome"> Nome </label>
            <input type="text" required name="nome" class="input-field">
            <label class="label2" for="quantidade">Quantidade</label>
            <input type="number" required name="quantidade" class="input-field">
            <button type="submit" class="submit-button">Cadastrar</button>
        </form>

        <div id="resultado"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
