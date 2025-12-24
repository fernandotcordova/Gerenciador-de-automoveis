<?php
    session_start();
    include_once "conecta.php";

    if (!isset($_SESSION["email"])) {
      $_SESSION["erro"] = "Você precisa estar logado para acessar esta página!";
      header("Location: login.php");
      exit();
    }   
  
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
  <main>
    <?php include_once "menu.php"?>
    <h1 style="text-align: center;">Bem vindo<?php if(isset($_GET["nome"])){
      echo ", ". $_GET["nome"];
    }?> &#x1F604;</h1>

    <!--Para remoção-->

    <div id="conteudo-temporario">
      <?php 
      
        if(isset($_SESSION["remocao"])){
          echo $_SESSION["remocao"];
          unset($_SESSION["remocao"]);
        }
        ?>
        </div>
    <?php 
      //Verificando se há algo em nossa variável de erros
      if(isset($_POST['mensagem'])){
        echo ', '. $_POST['mensagem'];
        unset($_POST['mensagem']);
      }
      
    ?>
    <?php
      if(isset($_GET["nome"])){
        $nome_user = $_GET["nome"];
      }
    ?>
    <p><img src=""></p>
      <?php
          $sql = "SELECT * FROM carros";
          $resultado = mysqli_query($conecta, $sql);
      ?>
    <div id="lista-carros"></div>

    <main>
      <div class="adicionar">
        <p>Que legal &#x1F604; você já faz parte do nosse time. Que tal adicionar um carro ao nosso catálogo?</p>
        <button onclick="window.location.href='adicionar-carro.php'">Adicionar</button>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="ajax.js"></script>
    
    <p></p>
    <?php
        mysqli_close($conecta);
    ?>
  </main>
</body>
</html>