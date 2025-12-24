<?php
    session_start();
    if(!isset($_SESSION["mensagem"]) == "Ativado"){
            $_SESSION["erro-login"] = "você ainda não está cadastrado ou logado";
    header("Location: login-cadastro.php");
            die();
}
    session_start();
    session_destroy();
    header("Location: index.php");
?>
