<?php

    session_start();
    include "conecta.php";

    if (!isset($_SESSION["email"])) {
        $_SESSION["erro"] = "Você precisa estar logado para acessar esta página!";
        header("Location: login.php");
        exit();
    }
    

    $nome = $_POST["nome"];
    $montadora = $_POST["montadora"];
    $ano = $_POST["ano"];
    $arquivo = $_FILES['foto'];


    $path = $_FILES['foto']['name']; // pega o nome original do arquivo
    $extensao = pathinfo($path, PATHINFO_EXTENSION); // pega a extensão do arquivo
    $novo_nome = md5(time()) . ".$extensao"; //define o novo nome usando hash
    $diretorio = "upload-carro/".$novo_nome ; //diretorio para onde vai o arquivo
    move_uploaded_file($arquivo['tmp_name'], $diretorio);

    $sql = "INSERT INTO carros(nome,montadora,ano,foto) VALUES ('$nome','$montadora','$ano','$novo_nome')";

    mysqli_query($conecta, $sql);

    $_SESSION['mensagem'] = "ativado";
    $_SESSION['nome'] = $nome;

    header("Location: index.php");
    exit();
?>