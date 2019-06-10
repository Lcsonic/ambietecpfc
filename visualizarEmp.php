<?php
include("classes/conexao.php");


$id = $_GET['id'];
echo $id;

//$consulta = "SELECT * FROM cliente_empresa WHERE nomeFantasia_empresa='$nf'";
$consulta = "SELECT * FROM cliente_empresa WHERE id_empresa ='$id' ";
$result_consulta =  mysqli_query($conexao, $consulta);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <?php while ($dado = $result_consulta->fetch_array()) { ?>

        <div>
            <?php echo $dado['nomeFantasia_empresa']; ?>
        </div>

        <?php echo $dado['cnpj_empresa']; ?>
        <?php echo $dado['telefone_empresa']; ?>
        <?php echo $dado['email_empresa']; ?>


    <?php }  ?>

</body>

</html>