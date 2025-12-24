<?php 
    session_start();
  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
  <main>
    <h1>Cadastro de novos usuários</h1>
    <form action="acoes.php" method="post" enctype="multipart/form-data">
      <label for="nome">Digite seu nome aqui</label>
      <input type="text" name="nome">

      <label for="email">Digite seu endereço de e-mail</label>
      <input type="email" name="email">

      <label for="dataNascimento">Digite sua data de nascimento</label>
      <input type="date" name="nascimento">
    
      <label for="senha">Digite sua senha:</label>
      
      <div class="input-group mb-3">
        <input type="password" name="senha" id="senha" class="form-control">
        
        <button type="button" onclick="mostrarSenha()" class="btn btn-outline-secondary">
          <i id="icone" class="bi bi-eye-slash"></i>
        </button>
      </div>

      <label for="foto">Escolha uma foto</label>
      <input type="file" name="foto" onchange="validarArquivo()" accept=".jpg, .jpeg, .png, .gif">

      <button type="submit" style="margin-top: 10px;">Cadastrar-se</button>
      </div>

      <input type="button" onclick="window.location.href='login.php'" value="Já sou cadastrado, quero entrar!">
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
        
    </body>
  </main>
</html>
