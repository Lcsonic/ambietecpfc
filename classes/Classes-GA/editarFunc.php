<?php
include("./../conexao.php");

$id = $_POST['idFunc'];
$cpf =  $_POST['cpf'];
$nomeFuncionario =  $_POST['nomeFuncionario'];
$rg =  $_POST['rg'];
$dataNascimento =  $_POST['dataNascimento'];
//$dataNascimento = date_format($dataNascimento, 'd/m/y');
$date = date_create($dataNascimento);
date_format($date, 'Y/m/d');
$cnh =  $_POST['cnh'];
$categoria =  $_POST['categoria'];
$ctps =  $_POST['ctps'];
$nomeMae =  $_POST['nomeMae'];
$emailFuncionario =  $_POST['emailFuncionario'];
$escolaridade =  $_POST['escolaridade'];
$telefone =  $_POST['telefone'];
$telefoneOpc =  $_POST['telefoneOpc'];
$endereco =  $_POST['endereco'];
$numero =  $_POST['numero'];
$bairro =  $_POST['bairro'];
$cidade =  $_POST['cidade'];
$cep =  $_POST['cep'];
$uf =  $_POST['uf'];
$senhaFuncionario = md5($_POST['senhaFuncionario']);
$confSenhaFuncionario = md5($_POST['confSenhaFuncionario']);


if ($_POST) {
    if ($senhaFuncionario == "") {
        $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
    } else if ($senhaFuncionario == $confSenhaFuncionario) {
        $mensagem = "<span class='sucesso'><b>Sucesso</b>: Cadastrado com sucesso</span>";
        $edit_funcionario = "UPDATE usuarios SET cpf='$cpf', nome='$nomeFuncionario', rg='$rg',dataNascimento='$dataNascimento',
 cnh='$cnh', categoria='$categoria', ctps='$ctps',nomeMae='$nomeMae', email='$emailFuncionario',
 escolaridade='$escolaridade', telefone='$telefone', telefoneOpc='$telefoneOpc', endereco='$endereco', numero='$numero',
 bairro='$bairro', cidade='$cidade', cep='$cep', uf='$uf', senha='$senhaFuncionario', confSenha='$confSenhaFuncionario'  
 WHERE id ='$id'";
        $resultado_funcionario = mysqli_query($conn, $edit_funcionario);
        header("Location: ./../../funcionario.php");
    } else {
        $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
        header("Location: ./../../editarFuncionario.php?id=$id");
    }
    echo "<p id='mensagem'>" . $mensagem . "</p>";
}


echo $edit_funcionario;






