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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!- Imports -!>
  <link rel="stylesheet" href="./css/css-cadastroNotificacao.css">   
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
<div class="corpo width100">
  <div class="cadNotificacao">
    <header><h3>Cadastro de Notificações</h3>
    <div class="btn1">
                <a href="cadastroEmpresa.php"> <!- Link para pagina "empresas.php" -!>
                <button type="button" class="btn btn-light">Cadastrar Empresas</button>
                </a>
    </div>          
    </header>
  </div>
  <div class="informacoes flex-center-center">
    <div class="informacoesesquerda">
     <p><strong>Empresa</strong></p>
     <input type="text" name="cnpj" size="45">

    <div class="ed">
      <p><strong>Data de Vencimento</strong>
   </div>
   <div class="edinput">
     <input type="date" name="data" size="18">
      </div> 
      </div>
    <div class="informacoesdireita">
  <div class="do">
    <p><strong>Documento</strong>
   </div>
   <div class="doinput">
    <input type="text" name="bairro" size="45">
     <button>Selecione</button>
      </div>
      <div class="obs">
          <p><strong>Observações</strong></p>
     <textarea name="obs" id="obs" cols="45" rows="10"></textarea>
      </div>
  </div>
 </div>
</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>