-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2017 às 02:19
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
('Pálio', '2017-11-01', 'zzza1121', 'b', 'Fiat', 4),
('Pálio', '2017-11-01', 'asa1234', 'c', 'Fiat', 5),
('pálio', '2017-11-02', 'saa4321', 'c', 'Fiat', 6),
('Pálio', '2017-11-01', 'assa1243', 'd', 'Fiat', 7),
('Pálio', '2017-11-01', 'awe1234', 'd', 'Fiat', 8),
('Pálio', '2017-11-01', 'adw1234', 'e', 'Fiat', 9),
('Pálio', '2017-11-01', 'asw4321', 'e', 'Fiat', 10),
('Prisma', '2017-11-01', 'qas1234', 'f', 'chevrolet', 11),
('doblo', '2017-11-01', 'asdf1234', 'g', 'Fiat', 12),
('Zafira Elegance Automatic	', '2017-11-01', 'zxc1234', 'h', 'chevrolet', 13),
('Prisma', '2017-11-01', 'dfg1234', 'f', 'chevrolet', 14),
('celta', '2015-11-30', 'nxn6161', 'a', 'chevrolet', 15),
('celta', '2016-11-16', 'vdf5464', 'b', 'chevrolet', 16),
('celta', '2014-11-10', 'frd8567', 'c', 'chevrolet', 17),
('celta', '2016-11-12', 'edr6890', 'd', 'chevrolet', 18),
('gol', '2007-11-08', 'vfg7688', 'a', 'volcksvaguen', 19),
('gol', '2008-11-15', 'yty7543', 'b', 'volcksvaguen', 20),
('gol', '2009-11-22', 'vgd7034', 'c', 'volcksvaguen', 21),
('gol', '2010-11-14', 'fgt8974', 'd', 'volcksvaguen', 22);

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
  `idcliente` int(100) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `naturalidade` varchar(45) NOT NULL,
  `carteiradeindenti` varchar(45) NOT NULL
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
