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


<?php
//Incluindo Conexão
include("classes/conexao.php");

//Criando a consulta no banco de dados
$result_empresa = "SELECT * FROM cliente_empresa;";
$resultado_empresa = mysqli_query($conn, $result_empresa);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresas</title>
    <!-- -->
    <!-- Imports -->
    <link rel="stylesheet" href="./css/css-empresas.css"> <!-- css da página de listar empresas !-->
    <link rel="stylesheet" href="./css/css-navbar.css"> <!-- css do navbar de todas as páginas !-->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- DataTables css -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <!-- Script imports -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></script>
    <script src="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"></script>



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

        <div class="divisoria">
            <hr>
        </div>


        <div class="listarDT">
            <table id="listar-empresa" class="table table-striped table-bordered" style="width:100%">
                <!--Cabeçalho-->
                <thead>
                    <tr>
                        <th>Empresa</th>
                        <th>CNPJ</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                        <!-- <th>Ações</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php while ($dado = $resultado_empresa->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $dado['nomeFantasia_empresa']; ?></td>
                            <td><?php echo $dado['cnpj_empresa']; ?></td>
                            <td><?php echo $dado['telefone_empresa']; ?></td>
                            <td><?php echo $dado['email_empresa']; ?></td>
                            <td>
                                <div class="buttonsA">
                                    <a href="visualizarEmp.php?id=<?php echo $dado['id_empresa']; ?>" class="btn btn-primary">View</a>
                                    <a href="editarEmpresa.php?id=<?php echo $dado['id_empresa']; ?>" class="btn btn-success">Editar</a>
                                    <a href="./classes/Classes-GA/apagarEmp.php?id=<?php echo $dado['id_empresa']; ?>" class="btn btn-xs btn-danger">Apagar</a>
                                </div>
                            </td>
                        </tr>

                    <?php }  ?>
                </tbody>

            </table>
        </div>

        <div class="btnCadastro">
            <a href="cadastroEmpresa.php">
                <!-- Link para pagina "documentos.php" !-->
                <button type="button" class="btn btn-success">Adicionar Empresa</button>
            </a>
        </div>

    </div>

    </div>

    </div>

</body>

</html>

<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>

<script>
    $(document).ready(function() {
        $('#listar-empresa').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>