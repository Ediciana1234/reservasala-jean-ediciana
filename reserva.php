<?php

require_once './actions/config.php';


/*$id = $_GET['id'];

$sqlUser = "SELECT * FROM sala WHERE id = :id";
$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bindValue(':id', $id);
$stmtUser->execute(); 
$sala = $stmtUser->fetch(PDO::FETCH_ASSOC); */


?>
<?php include './layout/header.php'; ?>

    <div class="container">

        <div> <h4>Reservar Sala</h4></div>

    <div class="mt-5 d-flex justify-content-end">

        

       <div>
            <a href="index.php" class=" btn btn-secondary">Voltar</a>
        </div> 

    </div> 

    

    <form class="row g-3" method="POST" action="./actions/processaReserva.php" >

    

        


        <div class="col-12">

            <label for="sala">Selecione a sala:</label>

                <select name="sala" id="sala">
                <option value="">Sala</option>
                <?php

                // Conecte-se ao banco de dados e recupere a lista de salas
                
                $stmt = $conn->query('SELECT idsala, sala, capacidade, recursos, estatus FROM sala');
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['idsala'] . '">' . 'Nome da sala-->' . $row['sala'] . ' Capacidade--> ' . $row['capacidade'] . ' - Status--> ' . $row['estatus'] . '</option>';
                }
                ?>
                </select>

               

            <!--<label for="sala" class="form-label">sala</label>
            <input type="text" name="sala" class="form-control" id="sala" >-->

        </div>

             
        <div class="col-12">

            <label for="data" class="form-label">Data</label>
            <input type="date" name="data" class="form-control" id="data" >

        </div>

        <div class="col-12">

            <label for="hora" class="form-label">Hora:</label>
            <input type="time" name="hora" class="form-control" id="hora">

        </div>

       
        <div class="col-12">
            
            <label for="organizador" class="form-label">organizador</label>
            <input type="text" name="organizador" class="form-control" id="organizador">

        </div>

        <div class="col-12">
            
            <label for="assunto" class="form-label">Assunto</label>
            <input type="text" name="assunto" class="form-control" id="assunto" >

        </div> 

        <div class="col-12">
            
            <label for="participantes" class="form-label">Nº de participantes</label>
            <input type="number" name="participantes" class="form-control" id="participantes" min="1" max="20">

        </div>

        
        <div class="col-12">

            <button type="submit" class="btn btn-primary">Salvar</button>

        </div>
        
    </form>
</div>

