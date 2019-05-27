<?php
include ("./../conexao.php");

$erro = false;

// Verifica se o POST tem algum valor
if ( !isset( $_POST ) || empty( $_POST ) ) {
	$erro = 'Nada foi postado.';
}

// Cria as variáveis dinamicamente
foreach ( $_POST as $chave => $valor ) {
	// Remove todas as tags HTML
	// Remove os espaços em branco do valor
	$$chave = trim( strip_tags( $valor ) );
	
	// Verifica se tem algum valor nulo
	if ( empty ( $valor ) ) {
		$erro = 'Existem campos em branco.';
	}
}

// Não mexer


$nomeEmpresa =  $_POST ['nomeEmpresa'];
$nomeFantasia =  $_POST ['nomeFantasia'];
$cnpj = $_POST ['cnpj'];
$numInscricao = $_POST ['numInscricao'];
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
$senha =  $_POST ['senha'];
$confSenha =  $_POST ['confSenha'];


/* Teste */
//echo "$cnpj, $nomeEmpresa, $nomeFantasia ,$endereco ,$bairro, $cidade ,$cep ,$uf ,$telefone";


$insert_empresa = "CALL `green_alert`.`PROC_IN_EMPRESA`('$nomeEmpresa','$nomeFantasia','$cnpj',
'$numInscricao','$email','$responsavel','$telefone','$telefoneOpc','$descAtv','$endereco',
$numero,'$bairro','$cidade','$cep','$uf','$senha','$confSenha');";


//mysqli_query($conexao,$result_empresa);
$result_empresa = mysqli_query ($conexao, $insert_empresa);


//Validação dos campos


/*
// function verifique() //função verifica se o dado foi inserido
// {
    if ($result_empresa = '') {
        echo 'Erro ao salvar!';
    } else {
        echo 'Salvo com Sucesso!';
    };
// } */

// Verifica se $email realmente existe e se é um email. 
// Também verifica se não existe nenhum erro anterior
if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
    $erro = 'Envie um email válido.';
    echo $erro;
}

?>

