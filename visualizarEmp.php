<?php
include("classes/conexao.php");

$result_emp = "SELECT * FROM cliente_empresa WHERE id_empresa = '45';";
$resultado_emp = mysqli_query ($conexao, $result_emp);
$linha_emp = mysqli_fetch_assoc($resultado_emp);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="proc_edit_empresa.pgp">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nothing" value="<?php echo $linha_emp['nomeFantasia_empresa']?>" >

    </form>

</body>
</html>