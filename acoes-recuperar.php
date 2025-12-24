<?php 

    include_once "conecta.php";
    session_start();
    
    if(isset($_POST["email"]))
    $email = mysqli_real_escape_string($conecta, trim($_POST["email"]));

    $senha = mysqli_real_escape_string($conecta, trim($_POST["senha"]));

    $sql = "SELECT senha, nome, foto FROM usuarios WHERE email = '$email'";

    $retorno = mysqli_query($conecta, $sql);
    
    $dados = mysqli_fetch_assoc($retorno);

    if(mysqli_num_rows($retorno) == 1) {
        if($senha['dados'] == $senha){
            $_SESSION['usuario'] = $dados['nome'];
            $_SESSION['foto'] = $dados['foto'];
            $_SESSION['foto'] = $dados['foto'];
            $_SESSION['sucesso'] = "Login efetuado com sucesso";
            header("Location: index.php");
            exit();
        } else{
            $_SESSION["erro"] = "Senha não confere com o cadastro";
            exit();
        }
    } else{
        $_SESSION['erro'] == "Não foi encontrado o email digitado";
        header("Location: login.php");
        exit();
    }



?>