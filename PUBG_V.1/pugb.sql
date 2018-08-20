-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Ago-2018 às 06:53
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pugb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pws` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `cep` varchar(9) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `pws`, `cep`) VALUES
(1, 'Luiza', 'ana@ana.com', '11d5eAt/xvqn.', '23520-120'),
(2, 'Mario', 'mario@mario.com', '110eD/CaKuoj.', '23520-200'),
(4, 'Sant\'ana', 'anasanta@anasanta.com', '22k/vxSIrxeh2', '23520-120'),
(5, 'Girino', 'girino@gmail.com', '12YHrdWFQxDdc', '22290-240'),
(6, 'Godofredo', 'Godofredo@god.com', '12tGmW0p8qTSs', '44068-205');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `cep` varchar(9) CHARACTER SET latin1 NOT NULL,
  `logradouro` varchar(100) CHARACTER SET latin1 NOT NULL,
  `bairro` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(50) CHARACTER SET latin1 NOT NULL,
  `uf` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`cep`, `logradouro`, `bairro`, `cidade`, `uf`) VALUES
('22290-240', 'Avenida Pasteur', 'Botafogo', 'Rio de Janeiro', 'RJ'),
('23520-100', 'Rua Antônio Pinto Menezes', 'Santa Cruz', 'Rio de Janeiro', 'RJ'),
('23520-120', 'Rua Antenor', 'Santa Cruz', 'Rio de Janeiro', 'RJ'),
('23520-200', 'Rua Paolielo', 'Santa Cruz', 'Rio de Janeiro', 'RJ'),
('26520-100', 'Alameda Mariana', 'Centro', 'Nilópolis', 'RJ'),
('27520-120', 'Rua Fabiano Barreto', 'Vila Santa Cecília', 'Resende', 'RJ'),
('44068-205', 'Rua A', 'Conceição', 'Feira de Santana', 'BA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_produto`
--

CREATE TABLE `lista_produto` (
  `id_produto` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `quant` int(11) NOT NULL DEFAULT '1',
  `valor_itens` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `nota` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valor` decimal(12,2) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor` decimal(12,2) NOT NULL,
  `quant` int(11) NOT NULL DEFAULT '1',
  `foto01` varchar(50) NOT NULL,
  `foto02` varchar(50) NOT NULL,
  `foto03` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cep` (`cep`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`cep`);

--
-- Indexes for table `lista_produto`
--
ALTER TABLE `lista_produto`
  ADD KEY `id_produto` (`id_produto`),
  ADD KEY `id_nota` (`id_nota`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`nota`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `nota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `lista_produto`
--
ALTER TABLE `lista_produto`
  ADD CONSTRAINT `lista_produto_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`nota`),
  ADD CONSTRAINT `lista_produto_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`);

--
-- Limitadores para a tabela `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
