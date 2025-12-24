<?php

    session_start();
    include "conecta.php";

    if(!isset($_SESSION["email"])){
        $_SESSION["erro-login"] = "Você ainda não está cadastrado ou logado";
        header("Location: login-cadastro.php");
        die();
    }

    $id = $_POST["id"];

    $sql = "DELETE FROM carros WHERE id ='$id'";
    
    mysqli_query($conecta, $sql);

    $_SESSION["remocao"] = "Removido com sucesso";

    header("Location: index.php");
    exit();
?>