<?php
session_start();

if (!isset($_SESSION["email"])) {
    $_SESSION["erro"] = "Você precisa estar logado para acessar esta página!";
    header("Location: login.php");
    exit();
}
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
</head>

<body>

  <main style="margin-top: 10px;">
    <h1>Adicionar carro &#x1F697;</h1>

    <form action="acoes-carros.php" method="post" enctype="multipart/form-data">
      <label for="nome">Nome do veículo</label>
      <input type="text" name="nome" required>

      <label for="montadora">Montadora</label>
      <input type="text" name="montadora" required>

      <label for="ano">Ano de lançamento</label>
      <input type="date" name="ano" required>

      <label for="foto">Foto do veículo</label>
      <input type="file" name="foto" required>

      <input type="submit" value="Enviar"></input>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>