<?php
session_start();
include("conexao.php");

// Verificar se a variável de sessão está definida
if (!isset($_SESSION['login'])) {
    // Redirecionar o usuário para a página de login
    header("Location: login.php");
    exit;
}

$query = "SELECT * FROM tabela_usuarios";
$resultado = mysqli_query($mysqli, $query);

$privilegios = array(
    1 => 'Usuário Comum',
    2 => 'Administrador'
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Lista de Usuários</title>
   <link rel="stylesheet" href="css/listagemUsuarios.css">
</head>

<body>
   <div class="container">
      <div class="content">
         <button class="voltar" onclick="window.location.href='listagemItensAdm.php'">Voltar para a listagem de Itens</button>
         <button class="voltar" onclick="window.location.href='telaCadastroUsuarios.php'">Adicionar novos Usuarios</button>
         <table>
            <thead>
               <tr>
                  <th>Login</th>
                  <th>Senha</th>
                  <th>Privilégio</th>
                  <th>Ações</th>
               </tr>
            </thead>
            <tbody>
               <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
                  <tr>
                     <td><?php echo $row['login']; ?></td>
                     <td><?php echo $row['senha']; ?></td>
                     <td><?php echo $privilegios[$row['idPrivilegio']]; ?></td>
                     <td>
                        <form action="deleteUsuario.php" method="POST" style="display: inline;">
                           <input type="hidden" name="idUsuarios" value="<?php echo $row['idUsuarios']; ?>">
                           <button type="submit" class="excluir">Excluir</button>
                        </form>
                     </td>
                  </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</body>

</html>
