<?php
include ("./../conexao.php");


$id = $_GET['id'];

$delete_EMP = "DELETE FROM cliente_empresa WHERE id_empresa = '$id'";
$resultado_empresa = mysqli_query($conexao, $delete_EMP); 

//redirecionamento de volta pra pagina de listar empresas
if(mysqli_affected_rows($conexao)){
    $_SESSION['msg'] = "<p style='color:green;'>Empresa apagada com sucesso</p>";
    header("Location: ./../../empresas.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Empresa não foi apagada com sucesso.</p>";
    header("Location: ./../../empresas.php");
}

?>