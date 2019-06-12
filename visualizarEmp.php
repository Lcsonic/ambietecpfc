<?php
include("classes/conexao.php");


$id = $_GET['id'];

//$consulta = "SELECT * FROM cliente_empresa WHERE nomeFantasia_empresa='$nf'";
$consulta = "SELECT * FROM cliente_empresa WHERE id_empresa ='$id' ";
$result_consulta =  mysqli_query($conn, $consulta);



?>

<script>
    <!-- Imports -->
    <
    link rel = "stylesheet"
    href = "./css/css-visualizarEmp.css" >
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhe da Empresa</title>

    <link rel="stylesheet" href="./css/css-visualizarEmp.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <?php while ($dado = $result_consulta->fetch_array()) { ?>

        <div>
            <div class="corpo bccu">


                <div class="topo">
                    <div>
                        <h2><i class="material-icons"></i> Detalhes da Empresa</h2>
                    </div>
                </div>

                <div class=" flex-center-center">
                    <form method="POST" action="./classes/Classes-GA/cadastroEmp.php">
                        <!-- Inicio do formulario -->
                        <div class="informacoesesquerda">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="cnpj">CNPJ </label><span class="asterisco-ver">*</span>
                                    <input type="text" class="form-control" name="cnpj" id="cnpjJS" value="<?php echo $dado['cnpj_empresa']; ?>" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nomeEmpresa">Nome da Empresa </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="nomeEmpresa" id="nomeEmpresaJS" value="<?php echo $dado['razaoSocial_empresa']; ?>" disabled="disabled">

                                <label for="nomeFantasia">Nome Fantasia </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="nomeFantasia" id="nomeFantasiaJS" value="<?php echo $dado['nomeFantasia_empresa']; ?>" disabled="disabled">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="descAtv">Principal atividade </label><span class="asterisco-ver">*</span>
                                    <input type="text" class="form-control" name="descAtv" id="descAtvJS" value="<?php echo $dado['descricao_empresa']; ?>" disabled="disabled">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="telefone">Telefone </label><span class="asterisco-ver">*</span>
                                    <input type="text" class="form-control ttinput" name="telefone" id="telefoneJS" value="<?php echo $dado['telefone_empresa']; ?>" disabled="disabled">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="telefoneOpc">Telefone Opcional </label>
                                    <input type="text" class="form-control ttinput" name="telefoneOpc" id="telefoneOpcJS" value="<?php echo $dado['telefoneOpc_empresa']; ?>" disabled="disabled">
                                </div>
                            </div>



                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="responsavel">Responsável </label><span class="asterisco-ver">*</span>
                                    <input type="text" class="form-control" name="responsavel" id="responsavelJS" value="<?php echo $dado['responsavel_empresa']; ?>" disabled="disabled">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">E-mail </label><span class="asterisco-ver">*</span>
                                    <input type="email" class="form-control" name="email" id="emailJS" value="<?php echo $dado['email_empresa']; ?>" disabled="disabled">
                                </div>
                            </div>


                            <div class="form-group">

                                <label for="Endereco">Endereço </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="endereco" id="enderecoJS" value="<?php echo $dado['rua_endereco']; ?>" disabled="disabled">
                            </div>

                            <div class="form-row df">

                                <div class="form-group col-md-2">
                                    <label for="numero">Número </label><span class="asterisco-ver">*</span>
                                    <input type="text" class="form-control" name="numero" id="numeroJS" value="<?php echo $dado['numero_endereco']; ?>" disabled="disabled">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="bairro">Bairro </label><span class="asterisco-ver">*</span>
                                    <input type="text" class="form-control" name="bairro" id="bairroJS" value="<?php echo $dado['bairro_endereco']; ?>" disabled="disabled">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="cidade">Cidade </label><span class="asterisco-ver">*</span>
                                    <input type="text" class="form-control" name="cidade" id="cidadeJS" value="<?php echo $dado['cidade_endereco']; ?>" disabled="disabled">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="cep">CEP </label><span class="asterisco-ver">*</span>
                                    <input type="text" class="form-control" name="cep" id="cepJS" value="<?php echo $dado['cep_endereco']; ?>" disabled="disabled">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="uf">UF </label> <span class="asterisco-ver">*</span>
                                    <input type="text" class="form-control" name="cep" id="cepJS" value="<?php echo $dado['uf_endereco']; ?>" disabled="disabled">
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>


    <?php }  ?>

</body>

</html>