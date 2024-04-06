<?php
require_once './config.php';

$id = $_GET['id'];

$sqlUser = "SELECT * FROM sala WHERE idsala = :id";
$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bindValue(':id', $id);
$stmtUser->execute();

$sala = $stmtUser->fetch(PDO::FETCH_ASSOC);

if($sala){
    $sql = "DELETE FROM sala WHERE idsala = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $sala['idsala']);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        header("Location: ../index.php");
    }else{
        echo "Erro ao tentar excluir sala";
    }
}

$id = $_GET['id'];

$sqlUser = "SELECT * FROM reserva WHERE idreserva = :id";
$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bindValue(':id', $id);
$stmtUser->execute();

$reserva = $stmtUser->fetch(PDO::FETCH_ASSOC);

if($reserva){
    $sql = "DELETE FROM reserva WHERE idreserva = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $reserva['idreserva']);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        header("Location: ../index.php");
    }else{
        echo "Erro ao tentar excluir reserva";
    }
}
