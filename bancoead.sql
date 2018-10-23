-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Out-2018 às 13:53
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancoead`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `id_atividade` int(11) NOT NULL,
  `Atividade` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `id_aluno` int(11) DEFAULT NULL,
  `resposta` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  `valor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id_atividade`, `Atividade`, `id_aluno`, `resposta`, `nota`, `valor`) VALUES
(1, 'Como é feito um teste?', NULL, 'teste', 3, 4),
(2, 'Testando atividades?', NULL, 'testando', 2, 3),
(3, 'Como executar uma sequencia for()?', NULL, 'testarossa', 1, 2),
(4, 'Como é feito uma estimativa?', NULL, 'show de bola eu amo o brasil', 3, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `sobrenome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `confSenha` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `nivel` enum('Aluno','Professor') COLLATE latin1_general_ci NOT NULL,
  `curso` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `usuario`, `nome`, `sobrenome`, `email`, `senha`, `confSenha`, `nivel`, `curso`) VALUES
(1, 'gianvelox', 'Gian', 'Michel', 'gianveloxsi@gmail.com', 'a8e0a09388d92d2a17633e4e5adbdc66', 'a8e0a09388d92d2a17633e4e5adbdc66', 'Aluno', 'Sistemas de Informação'),
(2, 'sandro', 'Sandro', 'Matias', 'sandro@unipam.edu.br', '2c40837dd4b97fd00a5a598a8a25426f', '2c40837dd4b97fd00a5a598a8a25426f', 'Professor', 'Sistemas de Informação'),
(3, 'jcarlos', 'Jose', 'Carlos', 'jcarlos_2013@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'Aluno', 'Sistemas de Informação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE `materiais` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `curso` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `dataUpload` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `materiais`
--

INSERT INTO `materiais` (`id`, `arquivo`, `curso`, `dataUpload`) VALUES
(1, 'Poster.pdf', 'Sistemas', '2018-10-21 00:00:00'),
(2, 'Teste.pdf', 'Sistemas', '2018-10-21 00:00:00'),
(3, 'Poster.pdf', 'Treinamento', '2018-10-22 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id_atividade`);

--
-- Indexes for table `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materiais`
--
ALTER TABLE `materiais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id_atividade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `materiais`
--
ALTER TABLE `materiais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
