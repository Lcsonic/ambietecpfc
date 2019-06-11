<?php

//Importa a validação da sessão para evitar acesso via URL
include('validaPagina.php');
//verifica se a pagina pertence ao nivel do usuario logado 
if ($_SESSION['Logado'] = true && $_SESSION['usuarioNiveisAcessoId'] == "3") { // comparação para verificar o nivel do acesso
    session_start();
    unset($_SESSION['usuarioId'],
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioNiveisAcessoId'],
    $_SESSION['usuarioLogin'],
    $_SESSION['usuarioSenha']);
    header("Location: index.php");
    $_SESSION['loginAcesso'] = "Você tentou acessa uma pagina que não corresponde ao seu acesso."; //mensagem exibida quando o acesso não e permitido 
    exit();
} else { }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro de Funcionário</title>

  <!-- Imports -->
  <link rel="stylesheet" type="text/css" href="./css/css-cadastroFuncionario.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <div class="corpo">


    <div class="topo">
      <div>
        <h2><i class="material-icons"></i> Cadastro de Funcionário</h2>
      </div>
    </div>

    <div class="Info flex-center-center">
      <form method="POST" action="./classes/Classes-GA/cadastroFunc.php">
        <!-- Inicio do formulario -->
        <div class="informacoesesquerda">
          <div class="form-group">
            <div class="nome">
              <label for="Nome">Nome </label><span class="asterisco-ver">*</span>
              <input type="text" size="10" maxlength="20" class="form-control" name="nomeFuncionario" id="nomeJS" placeholder="Infome o seu nome" required>
            </div>

            <div class="email">
              <label for="email">E-mail </label><span class="asterisco-ver">*</span>
              <input type="email" class="form-control" name="emailFuncionario" id="emailJS" placeholder="E-mail" required>
            </div>

            <div class="Senhas">
              <label for="senha">Senha </label><span class="asterisco-ver">*</span>
              <input type="password" class="form-control" name="senhaFuncionario" id="senhaJS" placeholder="Senha" required>

              <label for="confSenha">Confirmar Senha </label><span class="asterisco-ver">*</span>
              <input type="password" class="form-control" name="confSenhaFuncionario" id="confSenhaJS" placeholder="Confirmar Senha" required>
            </div>

            <div class="form-group buttons">
              <input type="submit" value="Cancelar" class="btn btn-danger buttons" onClick='history.go(-1)'>
              <input type="submit" id="Adicionar"value="Adicionar" class="btn btn-success buttons" onclick="Salvo()">
            </div>

            <script>
            function Salvo() {
              alert(document.getElementById("Adicionar").style.display='Cadastrado com sucesso');
            }
          </script>
          
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>