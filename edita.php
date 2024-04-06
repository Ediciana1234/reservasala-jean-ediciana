<?php
require_once './actions/config.php';

$id = $_GET['id'];

$sqlUser = "SELECT * FROM sala WHERE idsala = :id";
$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bindValue(':id', $id);
$stmtUser->execute();

$sala = $stmtUser->fetch(PDO::FETCH_ASSOC);


?>

<?php include './layout/header.php'; ?>

<div class="container">

    <div class="mt-3 d-flex justify-content-between">

        <div>
            <h4>Editar Sala</h4>
        </div>

        <div>
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div>

    </div>

    <form class="row g-3" method="POST" action="./actions/processaEdita.php" >

        <input type="hidden" name="idsala" value="<?= $sala['idsala'] ?>"> 
    

        <div class="col-12">

            <label for="sala" class="form-label">sala</label>
            <input type="text" name="sala" class="form-control" id="sala" value="<?= $sala['sala'] ?>" >

        </div>

        <div class="col-12">

            <label for="capacidade" class="form-label">capacidade</label>
            <input type="text" name="capacidade" class="form-control" id="capacidade" value="<?= $sala['capacidade'] ?>">
        </div>

        <div class="col-12">

            <label for="recursos" class="form-label">recursos</label>
            <input type="text" name="recursos" class="form-control" id="recursos" value="<?= $sala['recursos'] ?>">

        </div>

        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>


        


<?php include './layout/footer.php'; ?>