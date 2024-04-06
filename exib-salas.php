<?php

require_once './actions/config.php';

$sql = "SELECT * FROM sala";
$stmt = $conn->query($sql);
$sala = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

 <?php include './layout/header.php'; ?>

 <div class="container">

        <div class="mt-5 d-flex justify-content-center">

        <div >
            <h3>Gerenciamento de Salas</h3>
        </div>
        </div>


    
        <div class=" d-flex justify-content-end">
            <div>
            
            <a href="index.php" class="btn btn-secondary">Voltar</a>
            </div> 
        </div>

            
            <table class=" table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sala</th>
                        <th>Capacidade</th>
                        <th>Recursos</th>
                        <th>Status</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                </div>

               <?php foreach($sala as $sala){ ?>
                        <tr>
                            <td><?php echo $sala['idsala']; ?></td>
                            <td><?php echo $sala['sala']; ?></td>
                            <td><?php echo $sala['capacidade']; ?></td>
                            <td><?php echo $sala['recursos']; ?></td>
                            <td><?php echo $sala['estatus']; ?></td>
                                                    
                            <td>
                                <a href="edita.php?id=<?= $sala['idsala']; ?>" class="btn btn-primary">Editar Sala</a>
                                <a href="exluir.php" class="btn btn-danger btn_excluir" data-id="<?php echo $sala['idsala']; ?>">Excluir Sala</a>
                               
                            </td> 

                            
                        </tr> 

                <?php } ?> 

               

                                      
                </tbody> 
            </table>
                
    </div> 
    

    <?php include './layout/footer.php'; ?>