<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

        h1{
            font-family: Bebas Neue;
        }

        .header-container {
            display: flex; 
            align-items: center; 
            gap: 10px; 
        }


        .foto {
    
            width: 50px; 
            height: 50px; 
            border-radius: 50%; 
        }

    </style>
</head>
<body>
    <?php 
        include_once "conecta.php";

        if(isset($_SESSION['email'])){
         
            $email = $_SESSION['email'];
            $sql = "SELECT email, nome, foto FROM usuarios WHERE email = '$email'";

            $retorno = mysqli_query($conecta, $sql);
            $dados = mysqli_fetch_assoc($retorno);
        } else{
            header("Location: login-cadastro.php");
            exit();
        }

        
    ?>
    <main>
        <div class="header-container">
        
            <div style="text-align: lef;">
                <h1><img src="upload/<?=$dados["foto"]?>" style="width:50px; height: 50px; border-radius: 50%;">Olá, <?=$dados["nome"]?></h1>
            </div>
        </main>
        <main>
                <p>Nome: <?=$dados["nome"]?></p>
                <p>Email: <?=$dados["email"]?></p>
                <p>Recuperar senha? <button onclick="window.location.href='principal.php'">Recuperar</button></p>
        </main>
    </main>
</body>
</html>