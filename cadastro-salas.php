<?php



?>

<?php include './layout/header.php'; ?>


<div class="container mt-5">

        <div> <h4>Cadastrar Sala</h4></div> 

    <div class="mt-5 d-flex justify-content-end">
        

       <div>
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div> 

    </div>

    <form class=" row g-3" method="POST" action="./actions/processaAdicionar.php" >

        <div class="col-12">

            <label for="sala" class="form-label">Sala</label>
            <input type="text" name="sala" class="form-control" id="sala" >

        </div>

        <div class="col-12">

            <label for="capacidade" class="form-label">Capacidade</label>
            <input type="number" name="capacidade" class="form-control" id="capacidade" min="1" max="20">

        </div>

        <div class="col-12">

            <label for="recursos" class="form-label">Recursos</label>
            <input type="text" name="recursos" class="form-control" id="recursos">

        </div>

        <div class="col-12">
            
            <label for="status" class="form-label">Estatus</label>
            <input type="text" name="status" class="form-control" id="status" value="Disponível">

        </div>

        <div class="col-12">

            <button type="submit" class="btn btn-primary">Salvar</button>

        </div>
        
    </form>
</div>

<?php include './layout/footer.php'; ?>
