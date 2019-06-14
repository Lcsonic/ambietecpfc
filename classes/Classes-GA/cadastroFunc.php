<?php
include("./../conexao.php");

$erro = false;

// Verifica se o POST tem algum valor
if (!isset($_POST) || empty($_POST)) {
	$erro = 'Nada foi postado.';
}

// Cria as variáveis dinamicamente
foreach ($_POST as $chave => $valor) {
	// Remove todas as tags HTML
	// Remove os espaços em branco do valor
	$$chave = trim(strip_tags($valor));

	// Verifica se tem algum valor nulo
	if (empty($valor)) {
		$erro = 'Existem campos em branco.';
	}
}

// Não mexer

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
		$insert_funcionario = "CALL `green_alert`.`PROC_IN_FUNCIONARIO`('$cpf','$nomeFuncionario','$rg','$dataNascimento',
		'$cnh','$categoria','$ctps','$nomeMae','$emailFuncionario','$escolaridade','$telefone','$telefoneOpc','$endereco',
		'$numero','$bairro','$cidade','$cep','$uf','$senhaFuncionario','$confSenhaFuncionario',2)";
		$result_funcionario = mysqli_query($conn, $insert_funcionario);
		header("Location: ./../../menu.php");
	} else {
		$mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
	}
	echo "<p id='mensagem'>" . $mensagem . "</p>";
}

		


/* Teste */
//echo "$nomeFuncionario";



//echo "$insert_funcionario";

//mysqli_query($conn,$result_funcionario);


//Validação dos campos
	


/* function verifique() //função verifica se o dado foi inserido
 {
    if ($result_funcionario = '') {
        echo 'Erro ao salvar!';
    } else {
        echo 'Salvo com Sucesso!';
    };
 } */

// Verifica se $email realmente existe e se é um email. 
// Também verifica se não existe nenhum erro anterior
//if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
  //  $erro = 'Envie um email válido.';
    //echo $erro;
//}
