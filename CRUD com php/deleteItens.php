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

    // Executar a lógica de exclusão no banco de dados
    $query = "DELETE FROM tabela_itens WHERE iditens = '$id'";
    $resultado = mysqli_query($mysqli, $query);

    if ($resultado) {
        // Exclusão bem-sucedida, redirecione para a página de listagem ou exiba uma mensagem de sucesso
        header("Location: listagemItens.php?excluido=1");
        exit;
    } else {
        // Ocorreu um erro na exclusão, redirecione para a página de listagem ou exiba uma mensagem de erro
        header("Location: listagemItens.php?erro=1");
        exit;
    }
}
echo("$id ");
?>

