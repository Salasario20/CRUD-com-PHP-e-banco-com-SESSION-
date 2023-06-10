<?php
include('conexao.php');
session_start();

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
        <h1>Listagem de Itens</h1>

        <div  class="button-container">
        <form action="logout.php" method="POST">
                <button type="submit" class="custom-button">Fazer logoff</button>
            </form>
            <br>
            <button class="custom-button" onclick="window.location.href='cadastroItenss.php'">Adicionar Itens</button>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
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
                                <form action="deleteItens.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="idItens" value="<?php echo $row['idItens']; ?>">
                                    <button type="submit" class="button delete-button">Excluir</button>
                                </form>
                                <form action="editItens.php" method="POST" style="display: inline;">
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
