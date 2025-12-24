<?php

session_start();
include 'conecta.php';
if (isset($_POST['nome'])) {
    $nome = mysqli_real_escape_string($conecta, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conecta, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conecta, trim($_POST['senha']));
    $data_nascimento = mysqli_real_escape_string($conecta, $_POST['nascimento']);

    if(empty($nome)){
        header("Location: cadastro.php");
        die();
    }

    if(empty($email)){
        header("Location: cadastro.php");
        die();
    }

    if(empty($data_nascimento)){
        header("Location: cadastro.php");
        die();
    }

    if(empty($senha)){
        header("Location: cadastro.php");
        die();
    }

    $sql = "SELECT id FROM usuarios WHERE email = '{$email}'";

    $retorno = mysqli_query($conecta, $sql);
    if (mysqli_num_rows($retorno) > 0) {
        $_SESSION['erro'] = "Já existe o email cadastrado!";
        header("Location:  cadastro.php");
        exit();
    }

    if(!isset($_FILES['foto']) || $_FILES['foto']['error'] != 0){ 
        header("Location: cadastro.php"); die(); 
    }

    $arquivo = $_FILES['foto'];
    $path = $_FILES['foto']['name'];
    $extensao = pathinfo($path, PATHINFO_EXTENSION);
    $novo_nome = md5(time()) . ".$extensao";  //define o novo nome usando hash
    $diretorio = "upload/" . $novo_nome; //diretorio para onde vai o arquivo	

    // consulta sql para inserir um novo valor com a senha criptografada
    $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO usuarios (nome, dataNascimento, email, senha, foto)
            VALUES ('$nome', '$data_nascimento' ,'$email', '$senha_criptografada', '$novo_nome')";
    
    if (mysqli_query($conecta, $sql)) {
        move_uploaded_file($arquivo['tmp_name'], $diretorio);
        $_SESSION['sucesso'] = "Novo cadastro realizado com sucesso!";
        $_SESSION['email'] = "$email";
        header("Location:  login.php");
        exit();
    } else {
        $_SESSION['erro'] = "Erro ao realizar o cadastro";
        header("Location:  cadastro.php");
        exit();
    }
}
