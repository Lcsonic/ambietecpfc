<!- implantando conexao -!>
    <?php
    include("classes/conexao.php");

    $result_empresa = "SELECT * FROM cliente_empresa;";
    $resultado_empresa = mysqli_query($conexao, $result_empresa);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Painel de Empresas</title>
        <!-- Imports -->
        <link rel="stylesheet" href="./css/css-empresas.css">
        <link rel="stylesheet" href="./css/css-modalVisualizar.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- DataTables css -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

        <!-- Script imports -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>]
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

                        </div>
                    </nav>
                </div>

                <div class="navegadorLogo">
                    <div class="logoImg">
                        <img src="https://i.imgur.com/XGpUJgO.png" alt="imagemLogo" width=60px>
                    </div>


                </div>

            </div>



            <div class="areaLogo">

            </div>

            <div class="divisoria">
                <hr>
            </div>

            <div class="areaBranca">

                <div class="descrAba">

                    <div class="descrImg">
                        <img src="https://cdn0.iconfinder.com/data/icons/lined-global-business/48/a-14-512.png" alt="" width=47px>
                    </div>

                    <div class="descrTxt">
                        Painel de empresas
                    </div>

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
                                <th></th>
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
                                        <!--
                                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $dado['cnpj_empresa']; ?>">Visualizar</button>
                                                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $dado['id_empresa']; ?>">Editar</button>
                                                     <button type="button" class="btn btn-xs btn-danger">Apagar</button>
                                                  -->

                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl" id="<?php echo $dado['id_empresa']; ?>" >Extra large modal</button>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $dado['id_empresa']; ?>">Editar</button>
                                        <button type="button" class="btn btn-xs btn-danger">Apagar</button>
                                    </td>
                                </tr>

                                <!-- Extra large modal -->


                                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <?php echo $dado['nomeFantasia_empresa']; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--INICIO MODAL-->
                                <div class="modal fade" id="myModal<?php echo $dado['cnpj_empresa']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" text=center id="myModalLabel"><?php echo $dado['nomeFantasia_empresa']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="modal-all">

                                                    <div class="modal-empresa">

                                                        <div class="empTxt">
                                                            Descrição
                                                        </div>

                                                        <div class="infEmpresa">

                                                            <div class="divFull">

                                                                <div class="rzSocial">

                                                                    <div class="rzSocialTxt">
                                                                        Razão Social:
                                                                    </div>

                                                                    <div class="rzSocialPh">
                                                                        <?php echo $dado['razaoSocial_empresa']; ?>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="divFull2">

                                                                A

                                                            </div>

                                                        </div>

                                                        <hr>

                                                        <div class="empTxt">
                                                            Contato
                                                        </div>

                                                        <div class="infEmpresa">

                                                            <div class="divFull">

                                                                a

                                                            </div>

                                                            <div class="divFull2">

                                                                A

                                                            </div>

                                                        </div>

                                                        <hr>

                                                        <div class="empTxt">
                                                            Endereço
                                                        </div>

                                                        <div class="infEmpresa">

                                                            <div class="divFull">

                                                                a

                                                            </div>

                                                            <div class="divFull2">

                                                                A

                                                            </div>

                                                        </div>

                                                        <hr>

                                                    </div>


                                                </div>
                                                <p><?php echo $dado['nomeFantasia_empresa']; ?></p>
                                                <p><?php echo $dado['cnpj_empresa']; ?></p>
                                                <p><?php echo $dado['email_empresa']; ?></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--FIM MODAL-->
                            <?php }  ?>
                        </tbody>

                    </table>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="btnCadastro">
                    <a href="cadastroEmpresa.php">
                        <!- Link para pagina "documentos.php" -!>
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