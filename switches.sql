-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jul-2023 às 20:33
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sw_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `switches`
--

CREATE TABLE `switches` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `fabricante` varchar(250) DEFAULT NULL,
  `endereco_ip` varchar(250) DEFAULT NULL,
  `endereco_mac` varchar(250) DEFAULT NULL,
  `numero_patrimonio` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `switches`
--

INSERT INTO `switches` (`id`, `nome`, `fabricante`, `endereco_ip`, `endereco_mac`, `numero_patrimonio`) VALUES
(6, 'SW UNIPA 7.22', 'HP', '192.168.7.22', '40-b9-3c-8f-1f-df', '12927'),
(7, 'SW INFORMATICA 7.36', 'HP', '192.168.7.36', 'D8:94:03:45:51:B4', '12818'),
(8, 'SW MESA THYAGO 7.57', 'HP', '192.168.7.57', '40-b9-3c-8f-1a-1f', '12932');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `switches`
--
ALTER TABLE `switches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `switches`
--
ALTER TABLE `switches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
