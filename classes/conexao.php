<?php
	$servidor = "localhost"; //nome do servidor
	$usuario = "root"; //usuario do banco
	$senha = ""; //senha do banco
	$dbname = "green_alert"; //nome do banco
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	mysqli_query($conn, "SET NAMES 'utf8'");

	if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{      // Tirar as barras caso queira fazer teste de conexão
       // echo "Conexao realizada com sucesso";
    }   

?>
