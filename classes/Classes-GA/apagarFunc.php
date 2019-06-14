<?php
include ("./../conexao.php");


$id = $_GET['id'];

$delete_FUNC = "DELETE FROM usuarios WHERE id = '$id'";
$resultado_empresa = mysqli_query($conn, $delete_FUNC); 

//redirecionamento de volta pra pagina de listar empresas
if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Empresa apagada com sucesso</p>";
    header("Location: ./../../funcionario.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Empresa não foi apagada com sucesso.</p>";
    header("Location: ./../../funcionario.php");
}

?>