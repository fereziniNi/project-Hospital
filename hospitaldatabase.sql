-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/06/2024 às 14:22
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
-- Banco de dados: `hospitaldatabase`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `consultation`
--

CREATE TABLE `consultation` (
  `cpf` char(11) NOT NULL,
  `crm` int(10) NOT NULL,
  `dt` date NOT NULL,
  `hour` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fmembers`
--

CREATE TABLE `fmembers` (
  `crm` int(10) NOT NULL,
  `fullName` text NOT NULL,
  `password` char(128) NOT NULL,
  `position` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fmembers`
--

INSERT INTO `fmembers` (`crm`, `fullName`, `password`, `position`) VALUES
(1, 'Nicolas Ferezini', '998a6b361ae079140ae14ebdac17fc0a1172143391a296ad01b77f9b34f171c1915283d11dd8227d22ef127fc354e993cd3b455858fc398904d6e2b5a3737cbc', 'Programmer');

-- --------------------------------------------------------

--
-- Estrutura para tabela `membersinfo`
--

CREATE TABLE `membersinfo` (
  `crm` int(10) NOT NULL,
  `specialty` text NOT NULL,
  `convenant` varchar(20) DEFAULT NULL,
  `admission` date NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(14) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `membersinfo`
--

INSERT INTO `membersinfo` (`crm`, `specialty`, `convenant`, `admission`, `phone`, `email`) VALUES
(1, 'Boss', NULL, '2024-05-15', '19999730929', 'nikinhaferezini14@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `patientinfo`
--

CREATE TABLE `patientinfo` (
  `cpf` char(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `rg` char(8) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(28) NOT NULL,
  `convenant` varchar(20) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `cep` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `patientinfo`
--

INSERT INTO `patientinfo` (`cpf`, `fullName`, `rg`, `phone`, `email`, `convenant`, `gender`, `date`, `cep`) VALUES
('181855561', 'Carolina Cláudia Rocha', '14780996', '6536448093', 'carolina-rocha96@marcati.com', 'amil', 'female', '2005-02-27', '78045370'),
('25494653501', 'Otávio Benedito Renato Almeida', '14452279', '9637235945', 'otavio_benedito_almeida@powe', 'bradesco', 'male', '1952-04-03', '68909090');

-- --------------------------------------------------------

--
-- Estrutura para tabela `screening`
--

CREATE TABLE `screening` (
  `ticket` varchar(12) NOT NULL,
  `cpf` char(11) NOT NULL,
  `entryTime` datetime NOT NULL DEFAULT current_timestamp(),
  `sector` varchar(50) NOT NULL,
  `risk` varchar(25) NOT NULL,
  `exit` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `fmembers`
--
ALTER TABLE `fmembers`
  ADD PRIMARY KEY (`crm`);

--
-- Índices de tabela `membersinfo`
--
ALTER TABLE `membersinfo`
  ADD PRIMARY KEY (`crm`);

--
-- Índices de tabela `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `screening`
--
ALTER TABLE `screening`
  ADD PRIMARY KEY (`ticket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
