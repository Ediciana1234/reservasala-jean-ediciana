<?php

require_once './config.php';


$id = $_POST['idsala'];
$sala = $_POST['sala'];
$capacidade = $_POST['capacidade'];
$recursos = $_POST['recursos'];



/*$senha = password_hash($senha, PASSWORD_DEFAULT);

$sqlUser = "SELECT * FROM sala WHERE id = :id";

$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bindValue(':id', $id);
$stmtUser->execute();

$usuario = $stmtUser->fetch(PDO::FETCH_ASSOC);


if ($sala) {

    if ($senha == null) {
        $senha = $usuario['senha'];
    }

    */

    $sql = "UPDATE sala SET sala = :sala, capacidade = :capacidade, recursos = :recursos WHERE idsala = :idsala";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':idsala', $id);
    $stmt->bindValue(':sala', $sala);
    $stmt->bindValue(':capacidade', $capacidade);
    $stmt->bindValue(':recursos', $recursos);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header("Location: ../index.php");
    } else {

        echo "Erro ao tentar editar usuario";
    }

