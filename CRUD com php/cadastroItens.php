<?php
session_start();
include("conexao.php");

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];

$res = "INSERT INTO tabela_itens (nome, quantidade) VALUES ('$nome', $quantidade)";

if (mysqli_query($mysqli, $res)) {
    // Item cadastrado no banco com sucesso
    echo '';
} else {
    // Não foi possível cadastrar o item
    echo 'Não foi possível cadastrar o item. Erro: ' . mysqli_error($mysqli);
}
?>
