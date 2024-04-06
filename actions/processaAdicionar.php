<?php
require_once './config.php';

$id = $_POST['id'];
$sala = $_POST['sala'];
$capacidade = $_POST['capacidade'];
$recursos = $_POST['recursos'];
$status = $_POST['status'];

//$senha = password_hash($senha, PASSWORD_DEFAULT);

/*var_dump($sala, $capacidade, $recursos, $status);
die();*/


$sql = "INSERT INTO sala (sala, capacidade, recursos, estatus) VALUES (:sala, :capacidade, :recursos, :estatus)";
$stmt = $conn->prepare($sql);

$stmt->bindValue(':sala', $sala);
$stmt->bindValue(':capacidade', $capacidade);
$stmt->bindValue(':recursos', $recursos);
$stmt->bindValue(':estatus', $status);
$stmt->execute();

if($stmt->rowCount() > 0){
    header("Location: ../index.php");
}else{
    echo "Erro ao tentar adicionar usuario";
}


