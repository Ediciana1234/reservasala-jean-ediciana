<?php

require_once './actions/config.php';


?>

 <?php include './layout/header.php'; ?>


<div class="container">

        <div class="d-flex justify-content-between mt-5">

            <div>
                <h4>Exibir reservas de Salas</h4>
            </div>
            
            <div>
                <a href="index.php" class="btn btn-secondary">Voltar</a>
                
            </div>

        </div>

        <div class="mt-5">

            <table class=" table table-bordered table-striped table-hover">

                <thead>

                    <tr>
                        <th>Idreserva</th>
                        <th>Sala</th>
                        <th>Data</th>
                        <th>hora</th> 
                        <th>Capacidade</th>
                        <th>Recursos</th> 
                        <th>Estatus</th>           
                        <th>Organizador</th>
                        <th>Assunto</th>
                        <th>Nº de Pessoas</th>
                        <th>Opções</th>
                        
                    </tr>

                </thead>

                

                <tbody>
                <?php
                $sql = "SELECT r.idreserva, s.sala AS sala, s.capacidade, s.recursos, s.estatus, r.data_2, r.hora, r.organizador, r.assunto, r.participantes
                FROM reserva r
                INNER JOIN sala s ON r.sala_idsala = s.idsala";

                $result = $conn->query($sql);
                   
                if ($result->rowCount() > 0) {
                // Exibe os dados de cada linha
                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["idreserva"] . "</td>";
                echo "<td>" . $row["sala"] . "</td>";
                echo "<td>" . $row["data_2"] . "</td>";
                echo "<td>" . $row["hora"] . "</td>";
                echo "<td>" . $row["capacidade"] . "</td>";
                echo "<td>" . $row["recursos"] . "</td>"; 
                echo "<td>" . $row["estatus"] . "</td>";              
                echo "<td>" . $row["organizador"] . "</td>";
                echo "<td>" . $row["assunto"] . "</td>";
                echo "<td>" . $row["participantes"] . "</td>";
                echo "<td>";
                echo "<a href='excluir.php' class='btn btn-danger btn_excluir' data-id='" . $row["idreserva"] . "'>Cancelar</a>";
                
                echo "</td>";      
                
                echo "</tr>";}
                } 
               
                else { echo "<tr><td colspan='7'>0 resultados</td></tr>";}

                $conn = null;

?>
                

              
                </tbody> 
            </table>
    
    </div> 


    <?php include './layout/footer.php'; ?>
