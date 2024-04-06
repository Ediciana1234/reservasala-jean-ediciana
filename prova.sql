-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/04/2024 às 23:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prova`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

CREATE TABLE `reserva` (
  `idreserva` int(11) NOT NULL,
  `Sala_idsala` int(11) NOT NULL,
  `data_2` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `organizador` varchar(100) DEFAULT NULL,
  `assunto` varchar(100) DEFAULT NULL,
  `participantes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `reserva`
--

INSERT INTO `reserva` (`idreserva`, `Sala_idsala`, `data_2`, `hora`, `organizador`, `assunto`, `participantes`) VALUES
(1, 0, '2024-04-05', '18:15:00', 'Jean', 'IA', 10),
(2, 2, '2024-04-06', '15:30:00', 'Ediciana', 'Internet das coisas', 10),
(3, 3, '2024-04-10', '10:00:00', 'Jean', 'IOT', 15),
(7, 4, '2024-04-07', '08:30:00', 'Ediciana', 'IA', 10),
(8, 2, '2024-04-07', '10:00:00', 'Jean', 'IA', 20),
(9, 4, '2024-04-06', '12:00:00', 'Ediciana', 'IA', 10),
(10, 4, '2024-04-06', '12:00:00', 'Ediciana', 'IA', 10),
(11, 3, '2024-04-07', '10:21:00', 'Ediciana', 'IOT', 10),
(12, 6, '2024-03-06', '13:00:00', 'Ediciana', 'Banco de Dados (DB)', 10),
(16, 10, '2024-04-14', '18:00:00', 'Jean', 'Banco de dados (BD)', 10),
(17, 11, '2024-04-25', '14:00:00', 'Ediciana', '', 15);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idreserva`),
  ADD KEY `Reserva_FKIndex1` (`Sala_idsala`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
