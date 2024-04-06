<?php
require_once './config.php';


$idsala = $_POST['sala'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$organizador = $_POST['organizador'];
$assunto = $_POST['assunto'];
$participantes = $_POST['participantes'];

/*var_dump($idsala, $data, $hora, $organizador, $assunto, $participantes);
die();*/

// Inserir reserva na tabela de reservas de salas

    $sql = "INSERT INTO reserva ( sala_idsala, data_2, hora, organizador, assunto, participantes) VALUES ( :sala_idsala, :data_2, :hora, :organizador, :assunto, :participantes)";
    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':sala_idsala', $idsala);
    $stmt->bindValue(':data_2', $data);
    $stmt->bindValue(':hora', $hora);
    $stmt->bindValue(':organizador', $organizador);
    $stmt->bindValue(':assunto', $assunto);
    $stmt->bindValue(':participantes', $participantes);
    
             
    if ($stmt->execute()) {
        // Atualizar o status da sala para 'ocupado' após inserir a reserva
              
        $sql_update_sala = "UPDATE sala SET estatus = 'ocupado' WHERE idsala = ?";
        $stmt_update = $conn->prepare($sql_update_sala);
        $stmt_update->bindParam(1, $idsala);
        $stmt_update->execute();
        header("Location: ../index.php");
                
    }else{
        echo "Erro ao tentar adicionar reserva";
    }
    
    
                                        

