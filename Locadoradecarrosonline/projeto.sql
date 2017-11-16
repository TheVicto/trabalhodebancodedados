-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2017 às 15:02
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(15) NOT NULL,
  `user_autor` varchar(50) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `user_autor`, `titulo`, `texto`, `icon`, `data`, `hora`) VALUES
(1, 'Pedro', 'Isso é um teste!', 'Testandoooooooo, 1, 2,3, testando.', 'glyphicon glyphicon-flash', '2017-09-09', '14:28:00'),
(2, 'Pedro', 'Outro teste!', 'AAAAAAAAAAAAAAAAAAAA', 'glyphicon glyphicon-heart-empty', '2017-09-10', '17:23:00'),
(3, 'Pedro', 'Isso é muito legal!!!!!!', 'Não  acredito que sei fazer isso sz', 'glyphicon glyphicon-heart', '2017-09-11', '17:29:00'),
(4, 'Pedro', 'Mais um teste', 'asas', 'glyphicon glyphicon-flag', '2017-09-11', '00:11:52'),
(5, 'Pedro', 'Outro teste', 'asdfg', 'glyphicon glyphicon-paperclip', '2017-09-11', '00:14:23'),
(6, 'Pedro', 'Outro teste', 'asdfg', 'glyphicon glyphicon-paperclip', '2017-09-11', '00:16:02'),
(7, 'Pedro', 'Mais um teste', '123', 'glyphicon glyphicon-paperclip', '2017-09-11', '12:26:46'),
(8, 'Pedro', 'Mais um teste', '123', 'glyphicon glyphicon-paperclip', '2017-09-11', '12:27:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(15) NOT NULL,
  `user` varchar(16) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `user`, `pass`, `email`, `id`) VALUES
('Pedro', 'Pedro', 'c28ebfda7ec5011b17b41d3651aae510', 'miqueiasfr1@gmail.com', 2),
('Sillas', 'Sillas', 'c28ebfda7ec5011b17b41d3651aae510', 'sillas116@gmail.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
