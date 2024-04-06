<?php
require_once './config.php';

 
    
 
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
