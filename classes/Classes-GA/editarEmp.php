<?php
include ("./../conexao.php");

$id = $_POST ['idEmp'];
$nomeEmpresa =  $_POST ['nomeEmpresa'];
$nomeFantasia =  $_POST ['nomeFantasia'];
$cnpj = $_POST ['cnpj'];
$email =  $_POST ['email'];
$responsavel=  $_POST ['responsavel'];
$telefone =  $_POST ['telefone'];
$telefoneOpc =  $_POST ['telefoneOpc'];
$descAtv =  $_POST ['descAtv'];
$endereco =  $_POST ['endereco'];
$numero =  $_POST ['numero'];
$bairro =  $_POST ['bairro'];
$cidade =  $_POST ['cidade'];
$cep =  $_POST ['cep'];
$uf =  $_POST ['uf'];

$edit_empresa = "UPDATE cliente_empresa SET razaoSocial_empresa='$nomeEmpresa', nomeFantasia_empresa='$nomeFantasia', cnpj_empresa='$cnpj', 
email_empresa='$email', responsavel_empresa='$responsavel', telefone_empresa='$telefone', telefoneOpc_empresa='$telefoneOpc', 
descricao_empresa='$descAtv', rua_endereco='$endereco', numero_endereco='$numero', bairro_endereco='$bairro', cidade_endereco='$cidade',
cep_endereco='$cep', uf_endereco='$uf' WHERE id_empresa ='$id'";

/*
$edit_empresa = "CALL `green_alert`.`PROC_UP_EMPRESA`('$nomeEmpresa','$nomeFantasia','$cnpj',
'$email','$responsavel','$telefone','$telefoneOpc','$descAtv','$endereco',
$numero,'$bairro','$cidade','$cep','$uf');";
*/

$resultado_empresa = mysqli_query($conn, $edit_empresa);


if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Empresa Editada com sucesso</p>";
    header("Location: ./../../empresas.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Empresa Editada com sucesso</p>";
    header("Location: editarEmpresa.php?id=$id");
}



?>