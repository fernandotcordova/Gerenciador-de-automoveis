<?php
    session_start();

    include_once "conecta.php"; 
            
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    } else{
        echo "Um erro inesperado aconteceu";
        die();
    }
        
    if (!isset($_SESSION["email"])) {
        $_SESSION["erro"] = "Você precisa estar logado para acessar esta página!";
        header("Location: login.php");
        exit();
    }

    $sql_id = "SELECT * FROM carros WHERE id=$_GET[id]";
    $resultado = mysqli_query($conecta, $sql_id);
    $carro = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Editar carro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <main style="margin-top: 10px;">
    <h1>Editar carro &#x1F697;</h1>
    
    <?php

    if (!isset($_SESSION['email'])) {
        echo '<p class="alert alert-info">' . $_SESSION['mensagem'] . '</p>';
        unset($_SESSION['mensagem']);
    }
    ?>  


    <form action="editar-acoes.php?id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data" onsubmit="return validarArquivo()"> 

        <label for="novo_nome">Novo nome</label>
        <input type="text" name="nome" id="novo_nome" value="<?=$carro['nome']?>">

        <label for="nova_montadora">Nova montadora</label>
        <input type="text" name="montadora" id="nova_montadora" value="<?=$carro['montadora']?>">
        <p class="alert alert-warning">O valor antigo já foi pré-selecionado</p>

        <label for="nova_data">Nova data</label>
        <input type="date" name="data" id="nova_data"  value="<?=$carro['ano']?>">
        
        <label for="nova_foto">Nova Imagem do carro</label>
        <input type="file" name="nova_foto" id="foto" onchange="validarArquivo()" accept=".jpg, .jpeg, .png, .gif">

        <div id="mensagem-foto" class="invalid-feedback"></div>
        <img src="#" alt="Pré visualização da imagem" id="preview" style="display: none; max-width: 200px; margin-top: 10px;">

        <button type="submit">Atualizar Carro</button>
        
        <?php 
            
        ?>
    </form>
    

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

    <script>

        function validarArquivo() {
        var foto = document.getElementById('foto');
        var caminhoArquivo = foto.value;
        var extensoesPermitidas = /(.jpg|.jpeg|.png|.gif)$/i;
        if (!extensoesPermitidas.exec(caminhoArquivo)) {
            foto.classList.add("is-invalid");
            var erro = document.getElementById('mensagem-foto');
            erro.innerHTML = 'Por favor envie um arquivo que tenha as extensões.jpeg/.jpg/.png/.gif .';
            foto.value = '';
            document.getElementById('preview').style.display = 'none';

            return false;
        } else {
            if (foto.files && foto.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('preview').src = e.target.result;
                    document.getElementById('preview').style.display = 'block';
                };
                foto.classList.remove('is-invalid');
                reader.readAsDataURL(foto.files[0]);
            }
        }
        }
    </script>
</body>

</html>