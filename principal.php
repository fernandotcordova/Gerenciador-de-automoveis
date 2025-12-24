<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <?php 
        
            if (!isset($_SESSION["email"])) {
                $_SESSION["erro"] = "Você precisa estar logado para acessar esta página!";
                header("Location: login.php");
                exit();
            }
        ?>
        <h1>Esqueceu a senha<?php if(isset($_SESSION['nome'])){
            echo ', '.$_SESSION['nome'];
        }?>&#x1F926; </h1>
        <p>Sem problemas vamos recuperá-la</p>

        <?php 
            if(isset($_SESSION['nome'])){
                echo ', '.$_SESSION['nome'];
            }
        ?>
        <form action="acoes-recuperar.php?nome=<?=$nome?>" method="post">
            <label for="senha-antiga">Digite sua senha antiga</label>
            <input type="password" name="senha-antiga">

            <label for="senha-nova">Digite sua senha nova</label>
            <input type="password" name="senha-nova">

            <input type="submit" value="Enviar">
        </form>
    </main>

</body>
</html>