-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2017 às 00:42
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdlocadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcarro`
--

CREATE TABLE `tbcarro` (
  `modelodocarro` varchar(45) NOT NULL,
  `datadelancamento` date NOT NULL,
  `placa` varchar(11) NOT NULL,
  `classcarro` varchar(1) NOT NULL,
  `marcacarro` varchar(45) NOT NULL,
  `idcarro` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcarro`
--

INSERT INTO `tbcarro` (`modelodocarro`, `datadelancamento`, `placa`, `classcarro`, `marcacarro`, `idcarro`) VALUES
('Pálio', '2017-11-08', '123456', 'a', 'Fiat', 1),
('Pálio', '2017-11-08', '123465', 'a', 'Fiat', 2),
('Pálio', '2017-11-01', 'zzz11111', 'b', 'Fiat', 3),
('Pálio', '2017-11-01', 'zzza1121', 'b', 'Fiat', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `nome` varchar(45) NOT NULL,
  `datanascimento` date NOT NULL,
  `cpf` int(11) NOT NULL,
  `e-mail` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `endereço` varchar(45) NOT NULL,
  `carteiradediraçao` varchar(1) NOT NULL,
  `idcliente` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE `tbfuncionario` (
  `nomefuncionario` varchar(45) NOT NULL,
  `datanascimentofuncionario` date NOT NULL,
  `cpffuncionario` int(11) NOT NULL,
  `emailfuncionario` varchar(45) NOT NULL,
  `senhafuncionario` varchar(100) NOT NULL,
  `telefonefuncionario` int(11) NOT NULL,
  `enderecofuncionario` varchar(45) NOT NULL,
  `carteiradedirecaofuncionario` text NOT NULL,
  `idfuncionario` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblocacao`
--

CREATE TABLE `tblocacao` (
  `nomecliente` varchar(45) NOT NULL,
  `nomefuncionario` varchar(45) NOT NULL,
  `idcarro` int(45) NOT NULL,
  `valorlocacao` int(255) NOT NULL,
  `datalocacao` date NOT NULL,
  `datadevolucao` date NOT NULL,
  `idlocacao` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcarro`
--
ALTER TABLE `tbcarro`
  ADD PRIMARY KEY (`idcarro`);

--
-- Indexes for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indexes for table `tblocacao`
--
ALTER TABLE `tblocacao`
  ADD PRIMARY KEY (`idlocacao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idcliente` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
