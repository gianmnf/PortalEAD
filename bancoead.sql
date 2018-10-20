-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Out-2018 às 19:54
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

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
-- Estrutura da tabela `atividades`
--

DROP TABLE IF EXISTS `atividades`;
CREATE TABLE IF NOT EXISTS `atividades` (
  `id_atividade` int(11) NOT NULL AUTO_INCREMENT,
  `Atividade` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `id_aluno` int(11) DEFAULT NULL,
  `resposta` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_atividade`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id_atividade`, `Atividade`, `id_aluno`, `resposta`) VALUES
(2, 'Como é feito um teste?', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

DROP TABLE IF EXISTS `dados`;
CREATE TABLE IF NOT EXISTS `dados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `sobrenome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `confSenha` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `nivel` enum('Aluno','Professor') COLLATE latin1_general_ci NOT NULL,
  `curso` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `usuario`, `nome`, `sobrenome`, `email`, `senha`, `confSenha`, `nivel`, `curso`) VALUES
(1, 'gianvelox', 'Gian', 'Michel', 'gianveloxsi@gmail.com', 'a8e0a09388d92d2a17633e4e5adbdc66', 'a8e0a09388d92d2a17633e4e5adbdc66', 'Aluno', 'Sistemas de Informação'),
(2, 'sandro', 'Sandro', 'Matias', 'sandro@unipam.edu.br', '2c40837dd4b97fd00a5a598a8a25426f', '2c40837dd4b97fd00a5a598a8a25426f', 'Professor', 'Sistemas de Informação');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
