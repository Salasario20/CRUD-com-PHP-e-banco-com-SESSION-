
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/styleLogin.css" >
   <title>Login</title>
</head>

<body>
<form action="autenticacao.php" method="POST" class="login-form">
   <div class="login-container">
      <div class="login-form">
         <h3>Faça login para continuar</h3>
         <?php if (isset($_GET['erro']) && $_GET['erro'] == 1) { ?>
            <p>Usuário ou senha inválidos</p>
         <?php } ?>
         <label for="login">Login</label>
         <input type="text" name="login" placeholder="Insira o Login aqui">
         <label for="senha">Senha</label>
         <input type="password" name="senha" placeholder="Insira a senha aqui">
         <button type="submit">Fazer login</button>
      </div>
   </div>
   </form>
</body>

</html>
