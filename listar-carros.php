<?php 

    include_once "conecta.php";
    $sql = "SELECT * FROM carros";
    $resultado = mysqli_query($conecta, $sql);

    if(mysqli_num_rows($resultado) > 0){

?>


<table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome do carro</th>
          <th scope="col">Montadora</th>
          <th scope="col">Ano</th>
          <th scope="col">Foto</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody id="conteudo-tabela">

        <?php
        
        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
          <tr>
            <td><?=$linha["id"]?></td>
            <td><?=$linha["nome"]?></td>
            <td><?=$linha["montadora"]?></td>
            <td><?=$linha["ano"]?></td>
            <td>
              <img src="upload-carro/<?=$linha["foto"]?>" alt="Foto de carro" style="height: 80px; width: auto; display: block;">
            </td>
            <td>
                <div style = "display: flex; gap: 5px;">
                  <button onclick="apagarCarro(<?=$linha['id']?>)">Remover</button>
                  <button onclick="window.location.href='editar-carro.php?id=<?=$linha['id']?>'">Editar</button>
                </div>
            </td>

          </tr>
          <?php }} else{
            echo "Nenhum carro encontrado";
          }?>
      </tbody>
    </table>

<script src="ajax.js"></script>
<script src="script.js"></script>