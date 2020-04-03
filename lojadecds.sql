-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2019 às 15:40
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lojadecds`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cds`
--

CREATE TABLE `cds` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `artista` varchar(100) NOT NULL,
  `estoque` int(100) NOT NULL,
  `ano` int(100) NOT NULL,
  `genero` text NOT NULL,
  `gravadora` text NOT NULL,
  `preco` int(100) NOT NULL,
  `imagem` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cds`
--

INSERT INTO `cds` (`id`, `nome`, `artista`, `estoque`, `ano`, `genero`, `gravadora`, `preco`, `imagem`) VALUES
(20, 'Meteora', 'Linkin Park', 20, 2003, 'Rock', 'Warner Music', 10, ''),
(21, 'Nothing but the beat', 'David Guetta', 30, 2011, 'POP', 'What A Music LTD', 15, ''),
(22, 'Sweetener', 'Ariana Grande', 40, 2018, 'POP', 'Republic', 20, ''),
(23, 'Troco Likes', 'Tiago Iorc', 50, 2015, 'POP', 'Som Livre', 25, ''),
(24, 'Terra Sem CEP', 'Jorge & Mateus', 70, 2018, 'Sertanejo', 'Som Livre', 45, ''),
(25, 'Kisses', 'Anitta', 100, 2019, 'Reggaeton', 'Warner Music', 50, ''),
(26, 'Gusttavo Lima', 'Gusttavo Lima', 100, 2018, 'Sertanejo', 'Warner Music', 35, ''),
(27, 'Ludmilla', 'Ludmilla', 70, 2012, 'POP/Funk', 'Som Livre', 25, ''),
(28, 'MC Kevinho', 'MC Kevinho', 30, 2008, 'Funk', 'Universal Music', 20, ''),
(30, 'Wesley SafadÃ£o', 'Wesley SafadÃ£o', 40, 2018, 'ForrÃ³', 'Som Livre', 40, ''),
(31, 'Metallica', 'Metallica', 25, 1991, 'Rock', 'Elektra Records', 30, ''),
(32, 'Tardezinha 2', 'Thiaguinho', 25, 2018, 'Pagode', 'Som Livre', 25, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `niveis_acesso` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `email`, `senha`, `niveis_acesso`, `nome`, `cpf`) VALUES
(1, 'paola@gmail.com', '123', 1, 'Paola', '21474836-47'),
(2, 'thiago@gmail.com', '456', 2, 'Thiago', '12412015-42'),
(3, 'uriel@gmail.com', '789', 2, 'Uriel', '62712815-21'),
(4, 'bia@gmail.com', '123', 1, 'Bia', '23456789-34'),
(5, 'matheus@gmail.com', '456', 2, 'Matheus', '13456789-34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_produto`
--

CREATE TABLE `tabela_produto` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_cd` int(11) NOT NULL,
  `nome_cliente` text NOT NULL,
  `quantidade` int(50) NOT NULL,
  `preco` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `id_cliente`, `id_cd`, `nome_cliente`, `quantidade`, `preco`) VALUES
(1, 6, 20, 'Fernando', 1, 10),
(9, 2, 22, 'Thiago', 100, 19),
(33, 0, 0, '', 0, 0),
(34, 0, 0, '', 0, 0),
(35, 0, 0, '', 0, 0),
(36, 0, 0, '', 0, 0),
(37, 0, 0, '', 0, 0),
(38, 0, 0, '', 0, 0),
(39, 0, 0, '', 0, 0),
(40, 0, 0, '', 0, 0),
(41, 0, 0, '', 0, 0),
(42, 0, 0, '', 0, 0),
(43, 0, 0, '', 0, 0),
(44, 0, 0, '', 0, 0),
(45, 0, 0, '', 0, 0),
(46, 0, 0, '', 0, 0),
(47, 0, 0, '', 0, 0),
(48, 0, 0, '', 0, 0),
(49, 0, 0, '', 0, 0),
(50, 0, 0, '', 0, 0),
(51, 0, 0, '', 0, 0),
(52, 0, 0, '', 0, 0),
(53, 0, 0, '', 0, 0),
(54, 0, 0, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabela_produto`
--
ALTER TABLE `tabela_produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabela_produto`
--
ALTER TABLE `tabela_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
