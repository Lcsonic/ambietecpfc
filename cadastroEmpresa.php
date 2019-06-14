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
  <title>Cadastro de empresa</title>

  <!-- Imports -->
  <link rel="stylesheet" type="text/css" href="./css/css-cadastroEmpresa.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <div class="corpo">


    <div class="topo">
      <div>
        <h2><i class="material-icons"></i> Cadastro de Empresa</h2>
      </div>
    </div>

    <div class=" flex-center-center">
      <form method="POST" action="./classes/Classes-GA/cadastroEmp.php">
        <!-- Inicio do formulario -->
        <div class="informacoesesquerda">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="cnpj">CNPJ </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="cnpj" id="cnpjJS" placeholder="Infome o CNPJ da empresa" required>
            </div>
          </div>

          <div class="form-group">
            <label for="nomeEmpresa">Nome da Empresa </label><span class="asterisco-ver">*</span>
            <input type="text" class="form-control" name="nomeEmpresa" id="nomeEmpresaJS" placeholder="Nome da empresa" required>

            <label for="nomeFantasia">Nome Fantasia </label><span class="asterisco-ver">*</span>
            <input type="text" class="form-control" name="nomeFantasia" id="nomeFantasiaJS" placeholder="Nome fantasia" required>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="descAtv">Principal atividade </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="descAtv" id="descAtvJS" placeholder="Descrição da principal atividade" required>
            </div>

            <div class="form-group col-md-4">
              <label for="telefone">Telefone </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control ttinput" name="telefone" id="telefoneJS" placeholder="Telefone" required>
            </div>

            <div class="form-group col-md-4">
              <label for="telefoneOpc">Telefone Opcional </label>
              <input type="text" class="form-control ttinput" name="telefoneOpc" id="telefoneOpcJS" placeholder="Telefone Opcional">
            </div>
          </div>



          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="responsavel">Responsável </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="responsavel" id="responsavelJS" placeholder="Responsável" required>
            </div>

            <div class="form-group col-md-6">
              <label for="email">E-mail </label><span class="asterisco-ver">*</span>
              <input type="email" class="form-control" name="email" id="emailJS" placeholder="E-mail" required>
            </div>
          </div>


          <div class="form-group">

            <label for="Endereco">Endereço </label><span class="asterisco-ver">*</span>
            <input type="text" class="form-control" name="endereco" id="enderecoJS" placeholder="Endereço" required>
          </div>

          <div class="form-row df">

            <div class="form-group col-md-1.5">
              <label for="numero">Número </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="numero" id="numeroJS" placeholder="Número" required>
            </div>

            <div class="form-group col-md-3">
              <label for="bairro">Bairro </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="bairro" id="bairroJS" placeholder="Bairro" required>
            </div>

            <div class="form-group col-md-3">
              <label for="cidade">Cidade </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="cidade" id="cidadeJS" placeholder="Cidade" required>
            </div>

            <div class="form-group col-md-2">
              <label for="cep">CEP </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="cep" id="cepJS" placeholder="CEP" required>
            </div>

            <div class="form-group col-md-2">
              <label for="uf">UF </label> <span class="asterisco-ver">*</span>
              <select class="form-control" name="uf" id="ufJS">
                <option>--Selecione--</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="ES">ES</option>
                <option value="DF">DF</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
              </select>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="senha">Senha </label><span class="asterisco-ver">*</span>
              <input type="password" name="senha" class="form-control" id="senhaJS" placeholder="Senha" required>
            </div>
            <div class="form-group col-md-4">
              <label for="confSenha">Confirmar senha </label><span class="asterisco-ver">*</span>
              <input type="password" name="confSenha" class="form-control" id="confSenhaJS" placeholder="Confirmar senha" required>
            </div>
          </div>


          <div class="form-group buttons">
            <input type="submit" value="Cancelar" class="btn btn-danger buttons" onClick='history.go(-1)'>
            <input id="Adicionar" type="submit" value="Adicionar" onclick="Salvo()" class="btn btn-success buttons">
          </div>

          <script>
            function Salvo() {
              senhaJS = document.getElementById("senhaJS");
              confSenhaJS = document.getElementById("confSenhaJS");

              if (senhaJS.value != "" && confSenhaJS.value != "") {
                if (senhaJS.value != confSenhaJS.value) {
                  alert('Senhas diferentes!');
                } else {
                  alert('Cadastrado com sucesso!');
                }
              } else {
                alert('Preencha os campos!');
              }
            }
          </script>

        </div>
      </form>
    </div>
  </div>
</body>

<script>
  <?php
  include("validacaoCnpj/validarCnpj.php");

  $cnpjJS
  ?>
</script>

</html>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>