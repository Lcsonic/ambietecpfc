<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("classes/conexao.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['email_empresa'])) && (isset($_POST['senha_empresa']))){
        $empresa = mysqli_real_escape_string($conn, $_POST['email_empresa']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senhaEmpresa = mysqli_real_escape_string($conn, $_POST['senha_empresa']);
        $senhaEmpresa = md5($senhaEmpresa);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_empresa = "SELECT * FROM cliente_empresa WHERE email_empresa = '$empresa' && senha_empresa = '$senhaEmpresa' LIMIT 1";
        $resultado_empresa = mysqli_query($conn, $result_empresa);
        $resultadoEmpresa = mysqli_fetch_assoc($resultado_empresa);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultadoEmpresa)){
            $_SESSION['empresaId'] = $resultadoEmpresa['id_empresa'];
            $_SESSION['empresaNome'] = $resultadoEmpresa['nomeFantasia_empresa'];
            $_SESSION['empresaNiveisAcessoId'] = $resultadoEmpresa['niveis_acesso_id'];
            $_SESSION['empresaEmail'] = $resultadoEmpresa['email_empresa'];
            if($_SESSION['empresaNiveisAcessoId'] == "3"){
                $_SESSION['Logado'] = true; // Cria a sessão que Valida o login 
                header("Location: documentos.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                $_SESSION['Logado'] = true; // Cria a sessão que Valida o login 
                header("Location: documentos.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    }
?>