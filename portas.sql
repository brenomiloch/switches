-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jul-2023 às 02:05
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
  `numero_patrimonio` varchar(250) DEFAULT NULL,
  `portas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `portas`
--

INSERT INTO `portas` (`id`, `id_switch`, `link_type`, `vlan_untagged`, `vlan_tagged`, `patch_panel`, `sala`, `setor`, `referencia_ponto`, `tipo_equipamento`, `modelo_equipamento`, `endereco_ip`, `endereco_mac`, `numero_patrimonio`, `portas`) VALUES
(2, 9, 'Trunk', '1', '11', 'DIRETO', '499', 'PATRIMONIO ', 'DIRETO', 'SWITCH', 'HP1920', '192.168.7.20', '40:b9:3c:8f:59:ff', '12912', '01'),
(3, 9, 'Access', '1', '-', 'DIRETO', '499', 'PATRIMONIO ', 'DIRETO', 'COMPUTADOR', 'LIVA', '192.168.2.67', 'B8:AE:ED:84:5F:F0', '12531', '02'),
(4, 9, 'Access', '1', '-', 'DIRETO', '499', 'PATRIMONIO ', 'DIRETO', 'COMPUTADOR', 'DESKTOP', '192.168.2.61', '00:24:8c:da:84:cf', '16042', '03'),
(5, 9, 'Access', '1', '-', 'DIRETO', '499', 'PATRIMONIO ', 'DIRETO', 'COMPUTADOR', 'OptiPlex 7050', '192.168.2.68', '48:4d:7e:fb:f4:46', '13149', '04'),
(6, 9, 'Access', '1', '-', 'DIRETO', '499', 'PATRIMONIO ', 'DIRETO', 'IMPRESSORA', 'DCP-L5652DN', '192.168.1.228', 'b4:22:00:6a:3a:28', '-', '05'),
(7, 9, 'Disable', 'Disable', 'Disable', 'Disable', 'Disable', 'Disable', 'Disable', 'Disable', 'Disable', 'Disable', 'Disable', 'Disable', '06');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
