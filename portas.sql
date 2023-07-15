-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jul-2023 às 20:34
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
-- Estrutura da tabela `portas`
--

CREATE TABLE `portas` (
  `id` int(11) NOT NULL,
  `id_switch` int(11) DEFAULT NULL,
  `link_type` varchar(200) DEFAULT NULL,
  `vlan_untagged` varchar(200) DEFAULT NULL,
  `vlan_tagged` varchar(200) DEFAULT NULL,
  `patch_panel` varchar(200) DEFAULT NULL,
  `sala` varchar(200) DEFAULT NULL,
  `setor` varchar(200) DEFAULT NULL,
  `referencia_ponto` varchar(200) DEFAULT NULL,
  `tipo_equipamento` varchar(200) DEFAULT NULL,
  `modelo_equipamento` varchar(200) DEFAULT NULL,
  `endereco_ip` varchar(250) DEFAULT NULL,
  `endereco_mac` varchar(250) DEFAULT NULL,
  `numero_patrimonio` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `portas`
--
ALTER TABLE `portas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_switch` (`id_switch`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `portas`
--
ALTER TABLE `portas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `portas`
--
ALTER TABLE `portas`
  ADD CONSTRAINT `portas_ibfk_1` FOREIGN KEY (`id_switch`) REFERENCES `switches` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
