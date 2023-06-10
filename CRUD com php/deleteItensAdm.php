<?php
include("conexao.php");
session_start();


if (!isset($_SESSION['login'])) {
    
    header("Location: login.php");
    exit;
}

$id = $_POST['idItens'];
if (isset($_POST['idItens'])) {
    $id = $_POST['idItens'];

   
    $query = "DELETE FROM tabela_itens WHERE iditens = '$id'";
    $resultado = mysqli_query($mysqli, $query);

    if ($resultado) {
       
        header("Location: listagemItensAdm.php?excluido=1");
        exit;
    } else {
       
        header("Location: listagemItensAdm.php?erro=1");
        exit;
    }
}
echo("$id ");
?>

