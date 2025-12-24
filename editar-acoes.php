<?php
    session_start();
    include_once "conecta.php"; 

    if (!isset($_SESSION['email'])) {
        $_SESSION["erro"] = "Você precisa estar logado para acessar esta página!";
        header("Location: login.php");
        exit();
    }

    $id_editar = mysqli_real_escape_string($conecta, $_GET["id"]); 
    $novo_nome = mysqli_real_escape_string($conecta, $_POST["nome"]);
    $nova_montadora = mysqli_real_escape_string($conecta, $_POST["montadora"]);
    $nova_data = mysqli_real_escape_string($conecta, $_POST["data"]);

    $novo_nome_foto = null;

    if (isset($_FILES['nova_foto']) && $_FILES['nova_foto']['error'] == 0) {
        $arquivo = $_FILES['nova_foto'];
        $path = $arquivo['name'];
        $extensao = pathinfo($path, PATHINFO_EXTENSION);
        $novo_nome_foto = md5(time() . uniqid()) . "." . $extensao;
        $diretorio = "upload-carro/" . $novo_nome_foto;

        if (move_uploaded_file($arquivo['tmp_name'], $diretorio)) {
            $_SESSION['mensagem-foto'] = "Foto enviada";
        } else {
            $_SESSION['mensagem-foto'] = "Erro ao fazer upload da nova imagem";
        }
    }


    if (empty($novo_nome)) {
        $_SESSION['mensagem'] = "Nome não foi definido";
        header("Location: editar-carro.php");
        die();
    }

    if (empty($nova_montadora)) {
        $_SESSION['mensagem'] = "Montadora não foi definida";
        header("Location: editar-carro.php");
        die();
    }
    
    if (empty($nova_data)) {
        $_SESSION['mensagem'] = "Data não foi definida";
        header("Location: editar-carro.php");
        die();
    }

    if (!empty($id_editar)) {
        $query_atuali = "UPDATE carros SET nome = '$novo_nome', montadora = '$nova_montadora', ano = '$nova_data', foto = '$novo_nome_foto' WHERE id='$id_editar'";

        if (mysqli_query($conecta, $query_atuali)) {
            $_SESSION['mensagem'] = "Carro atualizado";
        } else {
            $_SESSION['mensagem'] = "Erro ao atualizar o carro: " . mysqli_error($conecta);
        }
    } else if (!$id_editar) {
        $_SESSION['mensagem'] = "ERRO: O ID do carro não foi fornecido.";
    } else {
        $_SESSION['mensagem'] = "Nenhum campo foi alterado para atualização.";
    }


    header("Location: index.php");
    exit();
    
?>