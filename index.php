<?php
require_once './actions/config.php';


$sql = "SELECT * FROM sala";
$stmt = $conn->query($sql);
$sala = $stmt->fetchAll(PDO::FETCH_ASSOC);
$reserva = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include './layout/header.php'; ?>

<head>
    <title>Sua Página Inicial</title>
    <style>
        
        .navbar {
            background-color: #ddd;
            color: black;
            padding: 10px;
            text-align: center;
            text-decoration: none;
        }

        .navbar a {
            text-decoration: none; /* Remove o sublinhado */
            color: black; /* Cor dos links */
            margin: 0 10px; /* Espaçamento entre os links */
        }
        
        .home-image {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1><a  href="index.php">Salas de reunião</a></h1>

        <a  href="cadastro-salas.php">Cadastrar salas</a>
        <a  href="exib-salas.php"> Exibir Salas</a>
        <a  href="reserva.php">Reservar salas</a>
        <a  href="exib-reserva.php">Exibir reservas</a>


    </div>

    <img class="home-image" src="https://www.deltabc.com.br/uploads/salas-de-reuniao-para-alugar.jpg" alt="Imagem na home">

   
 

       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
  </body>
</html>