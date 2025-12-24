<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>

  <main style="margin-top: 10px;">
    <h1>Remover carro &#x1F697;</h1>
    
    <?php
      if(!isset($_SESSION["email"])) {
        $_SESSION["erro"] = "Você precisa estar logado para acessar esta página!";
        header("Location: login.php");
        exit();
      }
    ?>

    <form action="remover-acoes.php" method="post" enctype="multipart/form-data">
      <label for="id">Digite o ID do carro</label>

      <?php
        $id = $_GET["id"];
      ?>
      <input type="number" name="id" value="<?=$id?>">
      <button type="submit">Enviar</button>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>