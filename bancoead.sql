-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Nov-2018 às 00:52
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `dataAcesso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `id_aluno`, `dataAcesso`) VALUES
(1, 4, '2018-11-16 21:32:30'),
(2, 4, '2018-11-16 22:38:27'),
(3, 3, '2018-11-16 23:22:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `id_atividade` int(11) NOT NULL,
  `pergunta` varchar(500) DEFAULT NULL,
  `tipoPergunta` enum('Aberta','Multipla','CertoErrado','Justifica') DEFAULT NULL,
  `multipla` varchar(300) DEFAULT NULL,
  `resposta` varchar(500) DEFAULT NULL,
  `nota` float DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `correta` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `confSenha` varchar(32) NOT NULL,
  `nivel` enum('Aluno','Professor') NOT NULL,
  `curso` varchar(100) NOT NULL,
  `acesso` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `usuario`, `nome`, `sobrenome`, `email`, `senha`, `confSenha`, `nivel`, `curso`, `acesso`) VALUES
(1, 'gianvelox', 'Gian', 'Michel', 'gianveloxsi@gmail.com', 'a8e0a09388d92d2a17633e4e5adbdc66', 'a8e0a09388d92d2a17633e4e5adbdc66', 'Aluno', 'Sistemas de Informação', NULL),
(2, 'sandro', 'Sandro', 'Matias', 'sandro@unipam.edu.br', '2c40837dd4b97fd00a5a598a8a25426f', '2c40837dd4b97fd00a5a598a8a25426f', 'Professor', 'Sistemas de Informação', NULL),
(3, 'jcarlos', 'Jose', 'Carlos', 'jcarlos_2013@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'Aluno', 'Sistemas de Informação', 1),
(4, 'a', 'Antônio', 'Fonseca', 'a@a.com', '0cc175b9c0f1b6a831c399e269772661', '0cc175b9c0f1b6a831c399e269772661', 'Aluno', 'Sistemas de Informação', 2),
(5, 'p', 'Fabrício', 'Araújo', 'fonfas@unipam.edu.br', '83878c91171338902e0fe0fb97a8c47a', '83878c91171338902e0fe0fb97a8c47a', 'Professor', 'Sistemas de Informação', NULL),
(6, 't', 'Treinamento', 'Treinamento', 'treina@unipam.edu.br', 'e358efa489f58062f10dd7316b65649e', 'e358efa489f58062f10dd7316b65649e', 'Aluno', 'Treinamento da Biblioteca', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE `materiais` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(500) NOT NULL,
  `curso` varchar(200) DEFAULT NULL,
  `dataUpload` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
-- Indexes for table `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id_atividade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materiais`
--
ALTER TABLE `materiais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
