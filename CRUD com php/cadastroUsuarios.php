<?php
include("conexao.php");
session_start();


if (!isset($_SESSION['login'])) {
    
    header("Location: login.php");
    exit;
}


$login = $_POST['login'];
$senha = $_POST['senha'];
$idPrivilegio = $_POST['idPrivilegio'];


$query = "SELECT COUNT(*) AS total FROM tabela_usuarios WHERE login = '$login'";
$resultado = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($resultado);


if($row['total'] > 0){
    header("Location: telaCadastroUsuarios.php?erro=2");
    exit;
}else{ 
    // O login é único, podemos prosseguir com a inserção do novo usuário
    $inserirUsuario = "INSERT INTO tabela_usuarios (login, senha, idPrivilegio) VALUES ('$login', '$senha', '$idPrivilegio')";
    $resultadoInsercao = mysqli_query($mysqli, $inserirUsuario);
};
if ($resultadoInsercao) {
        // Inserção bem-sucedida, redirecione para a página de sucesso ou exiba uma mensagem de sucesso
 header("Location: telaCadastroUsuarios.php?sucesso=2");
 exit;
};
    



?>