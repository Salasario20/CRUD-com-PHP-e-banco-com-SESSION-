<?php
include("conexao.php");


session_start();


if (!isset($_SESSION['login'])) {
    
    header("Location: login.php");
    exit;
}


$idItens = $_POST['idItens'];

$query = "SELECT * FROM tabela_itens WHERE idItens = $idItens";
$resultado = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($resultado);
?>
<link rel="stylesheet" href="css/editItens.css">
<form action="atualizarItens.php" method="POST" class="formedit">
    <input type="hidden" name="idItens" value="<?php echo $row['idItens']; ?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br>
    <label>Quantidade:</label>
    <input type="text" name="quantidade" value="<?php echo $row['quantidade']; ?>"><br>
    <input type="submit" value="Salvar" class="botao">
</form>


