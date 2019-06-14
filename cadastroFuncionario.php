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
      <form method="POST" action="./classes/Classes-GA/cadastroFunc.php" id="formID">
        <!-- Inicio do formulario -->
        <div class="informacoesesquerda">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="cpf">CPF </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="cpf" id="cpfJS" placeholder="CPF" required>
            </div>
            <div class="form-group col-md-3">
              <label for="nomeFuncionario">Nome Funcionario </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="nomeFuncionario" id="nomeFuncionarioJS" placeholder="Nome Funcionario" required>
            </div>

            <div class="form-group col-md-3">
              <label for="rg">RG </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control ttinput" name="rg" id="rgJS" placeholder="RG" required>
            </div>

            <div class="form-group col-md-2.1">
              <label for="dataNascimento">Data de Nascimento </label><span class="asterisco-ver">*</span>
              <input type="date" class="form-control" name="dataNascimento" id="dataNascimentoJS" placeholder="Data de Nascimento" required>
            </div>

          </div>

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="cnh">CNH</label>
              <input type="text" class="form-control" name="cnh" id="cnhJS" placeholder="CNH">
            </div>

            <div class="form-group col-md-2">
              <label for="categoria">Categoria </label>
              <select class="form-control" name="categoria" id="categoriaJS">
                <option>--Selecione--</option>
                <option value="A">A</option>
                <option value="B">B</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="ctps">CTPS</label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="ctps" id="ctpsJS" placeholder="CTPS" required>
            </div>

            <div class="form-group col-md-3">
              <label for="nomeMae">Nome da Mãe </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control ttinput" name="nomeMae" id="nomeMaeJS" placeholder="Nome da Mãe" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="email">E-mail </label><span class="asterisco-ver">*</span>
              <input type="email" class="form-control" name="emailFuncionario" id="emailJS" placeholder="E-mail" required>
            </div>

            <div class="form-group col-md-3">
              <label for="escolaridade">Escolaridade </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control ttinput" name="escolaridade" id="escolaridadeJS" placeholder="Escolaridade" required>
            </div>

            <div class="form-group col-md-2">
              <label for="telefone">Telefone </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control ttinput" name="telefone" id="telefoneJS" placeholder="Telefone" required>
            </div>

            <div class="form-group col-md-2">
              <label for="telefoneOpc">Telefone Opcional </label>
              <input type="text" class="form-control ttinput" name="telefoneOpc" id="telefoneOpcJS" placeholder="Telefone Opcional">
            </div>
          </div>

          <div class="form-row df">

            <div class="form-group col-md-5">
              <label for="Endereco">Endereço </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="endereco" id="enderecoJS" placeholder="Endereço" required>
            </div>
          </div>


          <div class="form-row df">

            <div class="form-group col-md-2">
              <label for="numero">Número </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="numero" id="numeroJS" placeholder="Número" required>
            </div>

            <div class="form-group col-md-2">
              <label for="bairro">Bairro </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="bairro" id="bairroJS" placeholder="Bairro" required>
            </div>

            <div class="form-group col-md-2">
              <label for="cidade">Cidade </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="cidade" id="cidadeJS" placeholder="Cidade" required>
            </div>

            <div class="form-group col-md-2">
              <label for="cep">CEP </label><span class="asterisco-ver">*</span>
              <input type="text" class="form-control" name="cep" id="cepJS" placeholder="CEP" required>
            </div>

            <div class="form-group col-md-1.5">
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
            <div class="form-group col-md-3">
              <label for="senha">Senha </label><span class="asterisco-ver">*</span>
              <input type="password" class="form-control" name="senhaFuncionario" id="senhaJS" placeholder="Senha" required>
            </div>
            <div class="form-group col-md-3">
              <label for="confSenha">Confirmar Senha </label><span class="asterisco-ver">*</span>
              <input type="password" class="form-control" name="confSenhaFuncionario" id="confSenhaJS" placeholder="Confirmar Senha" required>
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

</html>