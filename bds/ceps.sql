-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2021 às 22:55
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ceps`
--

CREATE TABLE `ceps` (
  `id` int(11) NOT NULL,
  `cep` char(8) NOT NULL,
  `logradouro` varchar(200) NOT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `localidade` varchar(200) DEFAULT NULL,
  `uf` char(2) NOT NULL,
  `ibge` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ceps`
--

INSERT INTO `ceps` (`id`, `cep`, `logradouro`, `bairro`, `localidade`, `uf`, `ibge`) VALUES
(1, '63122105', 'Rua Doutor Antônio Nirson Monteiro', 'Santa Luzia', 'Crato', 'CE', '2304202'),
(4, '63122135', 'Rua José Sales Feitosa', 'Santa Luzia', 'Crato', 'CE', '2304202'),
(5, '63122140', 'Rua Vereador Paulo Bezerra', 'Santa Luzia', 'Crato', 'CE', '2304202'),
(6, '63122125', 'Rua Francisco Sousa Brasil', 'Santa Luzia', 'Crato', 'CE', '2304202'),
(13, '63122095', 'Rua Doutor Antônio Tavares Bezerra', 'Santa Luzia', 'Crato', 'CE', '2304202'),
(14, '63122185', 'Rua Jucier Antônio da Silva', 'São Miguel', 'Crato', 'CE', '2304202');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ceps`
--
ALTER TABLE `ceps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ceps`
--
ALTER TABLE `ceps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
