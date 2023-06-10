<?php
session_start();
include('conexao.php');

if (!isset($_SESSION['login'])) {

    header("Location: login.php");
    exit;
}

$query = "SELECT * FROM tabela_itens";
$resultado = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Itens</title>
    <link rel="stylesheet" href="css/listagemItens.css">
</head>

<body>
    <div class="container">
        <h1>Listagem Itens</h1>
         
        <div class="button-container">
            <div>
                <button class="custom-button" onclick="window.location.href='listagemUsuarios.php'">Ir para listagem de usuários</button>
                <button class="custom-button" onclick="window.location.href='cadastroItensAdm.php'">Adicionar itens</button>
                <form action="logout.php" method="POST">
                    <br>
                <button type="submit" class="custom-button">Fazer logoff</button>
            </form>
                
            </div>
            <form action="logout.php" method="POST">

            </form>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Iten</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <td><?php echo $row['nome']; ?></td>
                            <td><?php echo $row['quantidade']; ?></td>
                            <td>
                                <form action="deleteItensAdm.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="idItens" value="<?php echo $row['idItens']; ?>">
                                    <button type="submit" class="button delete-button">Excluir</button>
                                </form>
                                <form action="editItensAdm.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="idItens" value="<?php echo $row['idItens']; ?>">
                                    <button type="submit" class="button edit-button">Editar</button>
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