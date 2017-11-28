-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2017 às 14:08
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
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
  `idcliente` int(100) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `datanascimento` varchar(20) NOT NULL,
  `pais` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idcliente`, `nome`, `sobrenome`, `senha`, `email`, `cidade`, `bairro`, `cpf`, `telefone`, `datanascimento`, `pais`) VALUES
(12, 'William', 'Adrian', 'joamarcos', 'williamadrian@gmail.com', 'Pereiro', 'Centro', '02345312309', '(88) 98876876', '24/01/2001', 'Brasil'),
(13, 'Amanda', 'Maciel', '123456789', 'amandardg32@gmail.com', 'Pereiro', 'Sitio SÃ£o Paulo', '02345312309', '(88) 98876876', '24/01/2001', 'Brasil'),
(14, 'Amanda', 'Maciel', '123456789', 'amandardg32@gmail.com', 'Peireiro', 'Centro', '08099812382', '(88) 98876876', '10/03/1994', 'Brasil'),
(15, 'Victor', 'Alves', '0987654321', 'victorales@gmail.com', 'SÃ£o Miguel', 'Alto', '090.900.888-09', '(88) 98876876', '12/09/2000', 'Brasil'),
(16, 'Francisca', 'Sabrina', '0987654321', 'fsabrina@gmail.com', 'Fortaleza', 'Av. Beira Mar', '098.765.432-00', '(85) 98976011', '04/06/1996', 'Brasil');

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
  MODIFY `idcliente` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
