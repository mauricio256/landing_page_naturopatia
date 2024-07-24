-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jul-2024 às 18:20
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `naturopatia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `dataCreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `usuario`, `senha`, `dataCreate`) VALUES
(1, 'mauricio', '2024', '2024-07-06 12:37:26'),
(2, 'wilson', '2024', '2024-07-20 18:05:53'),
(3, 'ricarte', '2024', '2024-07-20 18:05:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `CPF` varchar(120) NOT NULL,
  `RG` varchar(120) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(240) NOT NULL,
  `cidade` varchar(120) NOT NULL,
  `CEP` varchar(120) NOT NULL,
  `UF` varchar(60) NOT NULL,
  `filiacao` varchar(120) NOT NULL,
  `estadoCivil` varchar(60) NOT NULL,
  `atividade` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `escolaridade` varchar(60) NOT NULL,
  `escolaridadeData` date NOT NULL,
  `indicacao` varchar(120) NOT NULL,
  `curso` varchar(120) NOT NULL,
  `dataCreate` datetime NOT NULL,
  `dataUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`CPF`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
