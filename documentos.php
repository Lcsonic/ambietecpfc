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
    <title>Painel de Empresas</title>

    <!- Imports -!>
        <link rel="stylesheet" href="./css/css-documentos.css">
        <link rel="stylesheet" href="./css/css-navbar.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="all">

        <div class="navegadorBar">


            <div class="nvgdBar">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="menu.php">Ambietec</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Empresas
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="cadastroEmpresa.php">Cadastrar</a>
                                    <a class="dropdown-item" href="empresas.php">Listar</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Notificações
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="cadastroNotificacao.php">Cadastrar</a>
                                    <a class="dropdown-item" href="documentos.php">Listar</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Funcionário
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="cadastroFuncionario.php">Cadastrar</a>
                                    <a class="dropdown-item" href="#">Editar</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Órgão Lic.
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="cadastroFuncionario.php">Cadastrar</a>
                                    <a class="dropdown-item" href="#">Editar</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Documentos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="">Cadastrar</a>
                                    <a class="dropdown-item" href="">Listar</a>
                                </div>


                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="menu.php">Relatório</a>
                            </li>


                        </ul>
                        <?php
                        echo $_SESSION['usuarioNome'];
                        ?>
                        <br>
                        <a href="sair.php" class="sair">Sair</a>
                    </div>
                </nav>
            </div>

            <div class="navegadorLogo">
                <div class="ambietecImg">
                    <img src=".\Imagens\ambietecLogo.png" alt="imagemLogo" width=80px>
                </div>
            </div>

        </div>

        <div class="areaLogo">

            <div class="divisoria">
                <hr>
            </div>

            <div class="areaBranca">

                <div class="descrAba">

                    <div class="descrImg">
                        <img src="https://parqueibirapuera.org/wp/wp-content/uploads/2014/08/events-calendar-icon.png" alt="" width=47px>
                    </div>

                    <div class="descrTxt">
                        Painel de notificações
                    </div>

                </div>

                <div class="areaBlank">

                    <div class="enum">

                        <div class="idTxt">
                            ID
                        </div>

                        <div class="nomeTxt">
                            Empresa
                        </div>

                        <div class="cnpjTxt">
                            Data de validade
                        </div>

                        <div class="cidadeTxt">
                            Observações
                        </div>

                    </div>

                </div>

                <div class="btnCadastro">
                    <a href="cadastroNotificacao.php">
                        <!- Link para pagina "documentos.php" -!>
                            <button type="button" class="btn btn-success">Cadastrar Notificação</button>
                    </a>
                </div>

            </div>

        </div>

    </div>

</body>

</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>