<?php
session_start();
include("conexao.php");
$idItens = $_POST['idItens'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];

$query = "UPDATE tabela_itens SET nome = '$nome', quantidade = $quantidade WHERE idItens = $idItens";
$resultado = mysqli_query($mysqli, $query);


if ($resultado) {
    header("Location: listagemItensAdm.php?atualizado=1");
    exit;
} else {
    header("Location: listagemItensAdm.php?erro=1");
    exit;
}
