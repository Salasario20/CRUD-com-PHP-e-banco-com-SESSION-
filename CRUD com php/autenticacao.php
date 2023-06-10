<?php
session_start();
include('conexao.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$query= "SELECT idPrivilegio FROM tabela_usuarios WHERE login = '$login' AND senha = '$senha'";
$resultado = mysqli_query($mysqli, $query);

if ($resultado) {
   
    if (mysqli_num_rows($resultado) > 0) {
        // O usuário existe no banco de dados
        $privilegio = mysqli_fetch_assoc($resultado)['idPrivilegio'];
        
        // Faça a verificação do privilégio e redirecione para a página apropriada
        if ($privilegio == 1) {
            // Usuário comum
            $_SESSION['login'] = $login;
            header("Location: listagemItens.php");
            exit;
        } elseif ($privilegio == 2) {
            // Administrador
            $_SESSION['login'] = $login;
            header("Location: listagemItensAdm.php");
            exit;
        }
    } else {
        header("Location: login.php?erro=1");
    }
} else {
    // Erro banco
    echo "Erro ao executar a consulta: " . mysqli_error($mysqli);
}
