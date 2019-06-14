<?php
include("classes/conexao.php");


$id = $_GET['id'];

$consulta = "SELECT * FROM usuarios WHERE id ='$id' ";
$result_consulta =  mysqli_query($conn, $consulta);



?>

<script>
    <!-- Imports -->
    <
    link rel = "stylesheet"
    href = "./css/css-visualizarFunc.css" >
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

        <div class="corpo">


            <div class="topo">
                <div>
                    <h2><i class="material-icons"></i> Visualizar Cadastro de Funcionário</h2>
                </div>
            </div>

            <div class="Info flex-center-center">
                <form method="POST" id="formID">
                    <!-- Inicio do formulario -->
                    <div class="informacoesesquerda">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="cpf">CPF </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="cpf" id="cpfJS" value="<?php echo $dado['cpf']; ?>" disabled="disabled">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nomeFuncionario">Nome Funcionario </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="nomeFuncionario" id="nomeFuncionarioJS" value="<?php echo $dado['nome']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="rg">RG </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control ttinput" name="rg" id="rgJS" value="<?php echo $dado['rg']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-2.1">
                                <label for="dataNascimento">Data de Nascimento </label><span class="asterisco-ver">*</span>
                                <input type="date" class="form-control" name="dataNascimento" id="dataNascimentoJS" value="<?php echo $dado['dataNascimento']; ?>" disabled="disabled">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="cnh">CNH</label>
                                <input type="text" class="form-control" name="cnh" id="cnhJS" value="<?php echo $dado['cnh']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="categoria">Categoria </label>
                                <input type="text" class="form-control" name="categoria" id="categoriaJS" value="<?php echo $dado['categoria']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="ctps">CTPS</label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="ctps" id="ctpsJS" value="<?php echo $dado['ctps']; ?>" disabled="disabled"> 
                            </div>

                            <div class="form-group col-md-3">
                                <label for="nomeMae">Nome da Mãe </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control ttinput" name="nomeMae" id="nomeMaeJS" value="<?php echo $dado['nomeMae']; ?>" disabled="disabled">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="email">E-mail </label><span class="asterisco-ver">*</span>
                                <input type="email" class="form-control" name="emailFuncionario" id="emailJS" value="<?php echo $dado['email']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="escolaridade">Escolaridade </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control ttinput" name="escolaridade" id="escolaridadeJS" value="<?php echo $dado['escolaridade']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="telefone">Telefone </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control ttinput" name="telefone" id="telefoneJS" value="<?php echo $dado['telefone']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="telefoneOpc">Telefone Opcional </label>
                                <input type="text" class="form-control ttinput" name="telefoneOpc" id="telefoneOpcJS" value="<?php echo $dado['telefoneOpc']; ?>" disabled="disabled">
                            </div>
                        </div>

                        <div class="form-row df">

                            <div class="form-group col-md-5">
                                <label for="Endereco">Endereço </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="endereco" id="enderecoJS" value="<?php echo $dado['endereco']; ?>" disabled="disabled">
                            </div>
                        </div>


                        <div class="form-row df">

                            <div class="form-group col-md-2">
                                <label for="numero">Número </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="numero" id="numeroJS" value="<?php echo $dado['numero']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="bairro">Bairro </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="bairro" id="bairroJS" value="<?php echo $dado['bairro']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="cidade">Cidade </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="cidade" id="cidadeJS" value="<?php echo $dado['cidade']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="cep">CEP </label><span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="cep" id="cepJS" value="<?php echo $dado['cep']; ?>" disabled="disabled">
                            </div>

                            <div class="form-group col-md-1.5">
                                <label for="uf">UF </label> <span class="asterisco-ver">*</span>
                                <input type="text" class="form-control" name="uf" id="ufJS" value="<?php echo $dado['uf']; ?>" disabled="disabled">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="senha">Senha </label><span class="asterisco-ver">*</span>
                                <input type="password" class="form-control" name="senhaFuncionario" id="senhaJS" value="<?php echo $dado['senha']; ?>" disabled="disabled">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="confSenha">Confirmar Senha </label><span class="asterisco-ver">*</span>
                                <input type="password" class="form-control" name="confSenhaFuncionario" id="confSenhaJS" value="<?php echo $dado['confSenha']; ?>" disabled="disabled">
                            </div>
                        </div>


                        <div class="form-group buttons">
                            <input type="button" value="Cancelar" class="btn btn-danger buttons" onClick='history.go(-1)'>
                        </div>

                    </div>
                </form>
            </div>
        </div>


    <?php }  ?>

</body>

</html>