<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro de empresa</title>

  <!-- Imports -->
  <link rel="stylesheet" type="text/css" href="./css/css-cadastroUsuario.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <div class="corpo">


    <div class="topo">
      <div>
        <h2><i class="material-icons"></i> Cadastro de Usuário</h2>
      </div>
    </div>

    <div class="Info flex-center-center">
      <form method="POST" action="./classes/Classes-GA/cadastroUsu.php">
        <!-- Inicio do formulario -->
        <div class="informacoesesquerda">
          <div class="form-group">
            <div class="nome">
              <label for="Nome">Nome </label><span class="asterisco-ver">*</span>
              <input type="text" size="10" maxlength="20" class="form-control" name="nome" id="nomeJS" placeholder="Infome o seu nome" required>
            </div>

            <div class="email">
              <label for="email">E-mail </label><span class="asterisco-ver">*</span>
              <input type="email" class="form-control" name="email" id="emailJS" placeholder="E-mail" required>
            </div>

            <div class="Senhas">
              <label for="senha">Senha </label><span class="asterisco-ver">*</span>
              <input type="password" class="form-control" name="senha" id="senhaJS" placeholder="Senha" required>

              <label for="confSenha">Confirmar Senha </label><span class="asterisco-ver">*</span>
              <input type="password" class="form-control" name="confSenha" id="confSenhaJS" placeholder="Confirmar Senha" required>
            </div>

            <div class="Permissão">
              <label for="uf">Permissão </label> <span class="asterisco-ver">*</span>
              <select class="form-control" name="uf" id="ufJS">
                <option>--Selecione--</option>
                <option value="Moderador">Moderador</option>
                <option value="Cliente">Cliente</option>
              </select>
            </div>

            <div class="form-group buttons">
            <a href="menu.php">
              <!-- Link para pagina "menu.php" !-->
                <button type="button" class="btn btn-danger buttons">Cancelar</button>
            </a>
            <input type="submit" value="Adicionar" class="btn btn-success buttons">
          </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>