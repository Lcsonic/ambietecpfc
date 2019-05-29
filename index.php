<?php
//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu Inicial</title>

  <!-- Imports !-->
  <link rel="stylesheet" href="./css/css-index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <div class="card card-container">
      <div class="ambietecImg">
        <img src=".\Imagens\ambietecLogo.png" alt="imagemLogo" width=300px>
      </div>
      <p id="profile-name" class="profile-name-card"></p>
      <form method="POST" action="valida.php">
        <span id="reauth-email" class="reauth-email"></span>
        <input type="email" name="email" id="nome" class="form-control" placeholder="Email" required autofocus>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
        <p>
          <?php
          //Recuperando o valor da variável global, os erro de login.
          if (isset($_SESSION['loginErro'])) {
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
          } ?>
        </p>
        <div id="remember" class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembre-se de mim
          </label>
        </div>
        <button type="submit" class="btn btn-success">Entrar</button>
      </form> <!-- /form -->
      <a href="#" class="forgot-password">
        Esqueceu a senha?
      </a>
    </div> <!-- /card-container !-->
  </div>

</body>

</html>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>