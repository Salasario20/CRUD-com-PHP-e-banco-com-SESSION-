<?php

session_start();
include("conexao.php");

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
    <title>Cadastro de Usuarios</title>
    <link rel="stylesheet" href="css/telaCadastroUsuarios.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <h1>Cadastro de Novos Usuários</h1>

    <form action="cadastroUsuarios.php" method="POST">
        <label for="nome">Login do Novo Usuário:</label>
        <br>
        <input type="text" name="login" required class="">
        <br>
        <label for="quantidade">Senha do Novo Usuário:</label>
        <br>
        <input type="password" name="senha" required class="">
        <br><br>
        <select name="idPrivilegio" required>
            <option disabled selected value="" >Selecione o tipo de usuário</option>
            <option value="1">Usuário Comum</option>
            <option value="2">Administrador</option>
        </select>
        <br><br>
        <button class="back-button" onclick="window.location.href='listagemUsuarios.php'">Voltar</button>
        <button type="submit" class="submit-button">Cadastrar</button>
        <?php if (isset($_GET['erro']) && $_GET['erro'] == 2) { ?>
        <p class="error-message">Já existe um mesmo login registrado, por favor tente outro.</p>
    <?php } ?>

    </form>

    
</body>

</html>
