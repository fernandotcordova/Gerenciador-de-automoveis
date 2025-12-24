<?php
session_start();
include 'conecta.php';

if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($conecta, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conecta, trim($_POST['senha']));


    $sql = "SELECT senha, nome, email, foto FROM usuarios WHERE email = '$email'";

    $retorno = mysqli_query($conecta, $sql);

    
    if (mysqli_num_rows($retorno) == 1) {
        
        $dados = mysqli_fetch_assoc($retorno);
        if (password_verify($senha, $dados['senha'])) {
            $_SESSION['usuario']= $dados['nome'];
            $_SESSION['foto']= $dados['foto'];
            $_SESSION['email']= $dados['email'];
            $_SESSION['sucesso'] = "Login realizado com sucesso!";
            $_SESSION['mensagem'] = "Ativado";
            header("Location:  index.php");
            exit();
        } else {
            $_SESSION['erro'] = "Senha não confere com o cadastro!";
            header("Location:  login.php");
            exit();
        }
    } else {
        $_SESSION['erro'] = "Não foi encontrado o email digitado!";
        header("Location:  login.php");
        exit();
    }
}
