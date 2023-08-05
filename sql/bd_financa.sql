-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Ago-2023 às 03:08
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_financa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_cliente`
--

CREATE TABLE `t_cliente` (
  `id_cliente` int(255) NOT NULL,
  `nome_da_empresa` varchar(255) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contato` varchar(15) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `t_cliente`
--

INSERT INTO `t_cliente` (`id_cliente`, `nome_da_empresa`, `email`, `contato`, `senha`) VALUES
(4, 'fortuna', 'diegorodriguesdantas02@gmail.com', '19999999', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_cliente`
--
ALTER TABLE `t_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_cliente`
--
ALTER TABLE `t_cliente`
  MODIFY `id_cliente` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
