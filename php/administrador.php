<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curso Naturopatia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/icone.png">
    <script defer src="js/scriptLogin.js"></script>
    <link rel="stylesheet" href="../css/styleForm.css">
</head>
  <body> 
    <div class="mt-5 mb-5 text-light">
          <div style="text-align: center;">
            <img src="img/icone.png" width="150px" alt="">
        </div>
        <form id="form" action="verificaLoginAdm.php" method="post">

        <h1>LOGIN</h1><br>
        
              <?php
              if(isset($_SESSION["MSG_loginErro"])) {
                echo $_SESSION["MSG_loginErro"];
                unset($_SESSION["MSG_loginErro"]);
              }
              ?>

          <label for="usuario">Usuário:</label>
          <input class="input" type="text" name="usuario" id="usuario">
          <span class="span"></span>
  
          <label for="">Senha:</label>
          <input class="input" name="senha" id="senha" type="password"> 
          <span class="span"></span>
          <a class="link text-dark " href="#">Esqueci minha senha</a>

          <button type="submit" class="btn btn-lg btn-dark" name="entrar" onclick="return validaLogin();">Entrar</button>
          <a href="../" class=" text-end">Página Principal</a>
        </form>  
  </body>
</html>