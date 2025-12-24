<?php
    header("Content-Type: application/json; charset=UTF-8");
    session_start();
    include "conecta.php";

    $dados = json_decode(file_get_contents("php://input"), true);

    if (!isset($dados["id"])) {
        echo json_encode(["status" => "erro", "mensagem" => "ID não enviado"]);
        exit;
    }

    $id = intval($dados["id"]);

    $sql = "DELETE FROM carros WHERE id = $id";

    if (mysqli_query($conecta, $sql)) {
        echo json_encode(["status" => "ok", "mensagem" => "Carro removido com sucesso"]);
    } else {
        echo json_encode(["status" => "erro", "mensagem" => "Falha ao remover"]);
    }

?>