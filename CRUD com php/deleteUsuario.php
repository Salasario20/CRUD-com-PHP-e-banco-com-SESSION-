<?php
include("conexao.php");
session_start();


if (!isset($_SESSION['login'])) {
    
    header("Location: login.php");
    exit;
}


if (isset($_POST['idUsuarios'])) {
    $id = $_POST['idUsuarios'];

    
    $query = "DELETE FROM tabela_usuarios WHERE idUsuarios = '$id'";
    $resultado = mysqli_query($mysqli, $query);

    if ($resultado) {
        
        header("Location: listagemUsuarios.php?excluido=1");
        exit;
    } else {
        
        header("Location: listagemUsuarios.php?erro=1");
        exit;
    }
}
