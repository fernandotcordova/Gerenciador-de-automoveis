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
        if(isset($_SESSION['erro'])){
            echo $_SESSION['erro'];
            unset($_SESSION['erro']);
        }
        ?>
        <h1>Olá, seja bem-vindo(a) a nossa aplicação &#x1F44B;</h1>
        
        <div>
            <p>Já cadastrado(a)?</p>
            <input type="submit" onclick="window.location.href='cadastro.php'" value="Cadastrar">
        </div>

        <div>
            <p>Realizar login?</p>
            <input type="submit" value="Entrar" onclick="window.location.href='login.php'">
        </div>
    </main>

    
</body>
</html>