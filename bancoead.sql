-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Nov-2018 às 16:01
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
-- Estrutura da tabela `acessos`
--

DROP TABLE IF EXISTS `acessos`;
CREATE TABLE IF NOT EXISTS `acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) NOT NULL,
  `dataAcesso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `id_aluno`, `dataAcesso`) VALUES
(1, 4, '2018-11-16 21:32:30'),
(2, 4, '2018-11-16 22:38:27'),
(3, 3, '2018-11-16 23:22:06'),
(4, 5, '2018-11-17 17:13:46'),
(5, 5, '2018-11-17 17:15:17'),
(6, 5, '2018-11-17 17:15:21'),
(7, 5, '2018-11-17 17:18:11'),
(8, 5, '2018-11-17 17:18:30'),
(9, 5, '2018-11-17 17:21:16'),
(10, 5, '2018-11-17 17:21:22'),
(11, 5, '2018-11-17 20:04:12'),
(12, 5, '2018-11-17 20:04:18'),
(13, 5, '2018-11-17 20:06:47'),
(14, 5, '2018-11-17 20:06:52'),
(15, 5, '2018-11-17 20:07:09'),
(16, 5, '2018-11-17 20:07:12'),
(17, 5, '2018-11-17 20:08:37'),
(18, 5, '2018-11-17 20:08:42'),
(19, 5, '2018-11-17 20:09:11'),
(20, 5, '2018-11-17 20:09:11'),
(21, 5, '2018-11-17 20:10:30'),
(22, 5, '2018-11-17 20:32:38'),
(23, 5, '2018-11-17 20:33:30'),
(24, 5, '2018-11-17 20:34:28'),
(25, 5, '2018-11-17 20:35:04'),
(26, 5, '2018-11-17 20:35:07'),
(27, 5, '2018-11-17 20:35:23'),
(28, 5, '2018-11-17 20:36:20'),
(29, 5, '2018-11-17 20:37:20'),
(30, 5, '2018-11-17 20:38:23'),
(31, 5, '2018-11-17 20:38:32'),
(32, 5, '2018-11-17 20:40:08'),
(33, 5, '2018-11-17 20:43:10'),
(34, 5, '2018-11-17 20:48:29'),
(35, 5, '2018-11-17 20:48:49'),
(36, 5, '2018-11-17 20:49:03'),
(37, 5, '2018-11-17 21:32:40'),
(38, 5, '2018-11-17 21:32:44'),
(39, 5, '2018-11-17 21:35:14'),
(40, 5, '2018-11-17 21:36:44'),
(41, 5, '2018-11-17 21:36:45'),
(42, 5, '2018-11-17 21:44:31'),
(43, 5, '2018-11-17 21:45:10'),
(44, 5, '2018-11-17 21:45:34'),
(45, 5, '2018-11-17 21:50:52'),
(46, 5, '2018-11-17 22:00:38'),
(47, 5, '2018-11-17 22:03:56'),
(48, 5, '2018-11-17 22:04:05'),
(49, 5, '2018-11-17 22:06:17'),
(50, 5, '2018-11-17 22:17:03'),
(51, 5, '2018-11-17 22:17:15'),
(52, 5, '2018-11-17 22:18:09'),
(53, 5, '2018-11-17 22:18:16'),
(54, 5, '2018-11-17 22:21:54'),
(55, 5, '2018-11-17 22:23:22'),
(56, 5, '2018-11-17 22:27:26'),
(57, 5, '2018-11-17 22:27:41'),
(58, 5, '2018-11-17 22:27:47'),
(59, 5, '2018-11-17 22:29:11'),
(60, 5, '2018-11-17 22:31:13'),
(61, 5, '2018-11-17 22:33:10'),
(62, 5, '2018-11-17 22:37:02'),
(63, 5, '2018-11-17 22:38:15'),
(64, 5, '2018-11-17 22:42:41'),
(65, 5, '2018-11-17 22:42:48'),
(66, 5, '2018-11-17 22:54:12'),
(67, 5, '2018-11-17 22:55:10'),
(68, 5, '2018-11-17 22:57:14'),
(69, 5, '2018-11-17 22:58:54'),
(70, 5, '2018-11-17 22:59:21'),
(71, 5, '2018-11-17 22:59:49'),
(72, 5, '2018-11-17 23:00:17'),
(73, 5, '2018-11-17 23:02:25'),
(74, 5, '2018-11-17 23:02:50'),
(75, 5, '2018-11-17 23:03:20'),
(76, 5, '2018-11-17 23:03:34'),
(77, 5, '2018-11-17 23:04:28'),
(78, 5, '2018-11-17 23:05:14'),
(79, 5, '2018-11-17 23:09:57'),
(80, 5, '2018-11-17 23:10:14'),
(81, 5, '2018-11-17 23:11:43'),
(82, 5, '2018-11-17 23:12:22'),
(83, 5, '2018-11-17 23:12:36'),
(84, 5, '2018-11-17 23:13:28'),
(85, 5, '2018-11-17 23:16:21'),
(86, 5, '2018-11-17 23:16:36'),
(87, 5, '2018-11-17 23:20:31'),
(88, 5, '2018-11-17 23:22:23'),
(89, 5, '2018-11-18 19:20:18'),
(90, 5, '2018-11-18 19:20:31'),
(91, 5, '2018-11-18 19:21:16'),
(92, 5, '2018-11-18 19:22:58'),
(93, 5, '2018-11-18 19:29:29'),
(94, 5, '2018-11-18 19:32:40'),
(95, 5, '2018-11-18 19:39:09'),
(96, 5, '2018-11-18 19:41:33'),
(97, 5, '2018-11-18 19:42:13'),
(98, 5, '2018-11-18 19:42:39'),
(99, 5, '2018-11-18 19:44:34'),
(100, 5, '2018-11-18 19:45:58'),
(101, 5, '2018-11-18 19:46:18'),
(102, 5, '2018-11-18 19:46:53'),
(103, 5, '2018-11-18 19:53:57'),
(104, 5, '2018-11-18 20:30:24'),
(105, 5, '2018-11-18 20:31:43'),
(106, 5, '2018-11-18 20:33:20'),
(107, 5, '2018-11-18 20:34:54'),
(108, 5, '2018-11-18 20:35:40'),
(109, 5, '2018-11-18 20:36:12'),
(110, 5, '2018-11-18 20:36:52'),
(111, 5, '2018-11-18 20:37:22'),
(112, 5, '2018-11-18 20:38:23'),
(113, 5, '2018-11-18 20:38:25'),
(114, 5, '2018-11-18 20:39:05'),
(115, 5, '2018-11-18 20:39:29'),
(116, 5, '2018-11-18 20:43:30'),
(117, 5, '2018-11-18 20:49:33'),
(118, 5, '2018-11-18 20:49:34'),
(119, 5, '2018-11-18 20:55:38'),
(120, 5, '2018-11-18 21:26:23'),
(121, 5, '2018-11-18 21:29:01'),
(122, 5, '2018-11-18 21:29:02'),
(123, 5, '2018-11-18 21:30:45'),
(124, 5, '2018-11-18 21:33:10'),
(125, 5, '2018-11-18 21:33:11'),
(126, 5, '2018-11-18 21:36:19'),
(127, 5, '2018-11-18 21:36:20'),
(128, 5, '2018-11-18 21:38:02'),
(129, 5, '2018-11-18 21:41:40'),
(130, 5, '2018-11-18 21:42:52'),
(131, 5, '2018-11-18 21:42:54'),
(132, 5, '2018-11-18 21:45:00'),
(133, 5, '2018-11-18 21:45:01'),
(134, 5, '2018-11-18 21:46:53'),
(135, 5, '2018-11-18 21:52:33'),
(136, 5, '2018-11-18 21:52:34'),
(137, 5, '2018-11-18 21:54:46'),
(138, 5, '2018-11-18 22:01:45'),
(139, 5, '2018-11-18 22:01:47'),
(140, 5, '2018-11-18 22:06:18'),
(141, 5, '2018-11-18 22:06:49'),
(142, 5, '2018-11-19 15:32:51'),
(143, 5, '2018-11-19 15:33:21'),
(144, 5, '2018-11-19 15:36:30'),
(145, 5, '2018-11-19 15:36:32'),
(146, 5, '2018-11-19 15:37:29'),
(147, 5, '2018-11-19 15:38:12'),
(148, 5, '2018-11-19 15:39:24'),
(149, 5, '2018-11-19 15:43:05'),
(150, 5, '2018-11-19 15:47:23'),
(151, 5, '2018-11-19 15:48:30'),
(152, 5, '2018-11-19 15:48:32'),
(153, 5, '2018-11-20 14:34:26'),
(154, 5, '2018-11-20 14:35:15'),
(155, 5, '2018-11-20 14:35:22'),
(156, 5, '2018-11-20 14:38:01'),
(157, 5, '2018-11-20 14:43:09'),
(158, 5, '2018-11-20 14:43:14'),
(159, 5, '2018-11-20 14:43:46'),
(160, 5, '2018-11-20 14:48:54'),
(161, 5, '2018-11-20 14:51:42'),
(162, 5, '2018-11-20 14:55:52'),
(163, 5, '2018-11-20 14:57:30'),
(164, 5, '2018-11-20 15:00:14'),
(165, 5, '2018-11-20 15:00:28'),
(166, 5, '2018-11-20 15:00:41'),
(167, 5, '2018-11-20 15:00:45'),
(168, 4, '2018-11-20 15:28:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

DROP TABLE IF EXISTS `atividades`;
CREATE TABLE IF NOT EXISTS `atividades` (
  `id_atividade` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(500) DEFAULT NULL,
  `tipoPergunta` enum('Aberta','Multipla','CertoErrado') DEFAULT NULL,
  `multipla` varchar(300) DEFAULT NULL,
  `resposta` varchar(500) DEFAULT NULL,
  `nota` float DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `correta` varchar(10) DEFAULT NULL,
  `email_prof` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_atividade`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id_atividade`, `pergunta`, `tipoPergunta`, `multipla`, `resposta`, `nota`, `valor`, `correta`, `email_prof`) VALUES
(1, 'Uma lista linear é um conjunto de informações de qualquer tipo, organizadas sequencialmente. A organização sequencial estabelece uma relação de ordem, decorrendo daí a possibilidade de identificar qualquer elemento da lista: o primeiro ou último ou qual elemento precede ou sucede qualquer outro. Partindo dessa organização, explique quais são as operações básicas em listas lineares.', 'Aberta', NULL, NULL, NULL, 2, NULL, 'fonfas@unipam.edu.br'),
(2, 'Durante a execução do programa os dados são armazenados na memória do computador. As localizações de memória em que esses dados são armazenados se denominam de', 'Multipla', 'Estrutura de Algoritmos|Estrutura de Dados|Tipos de Dados|Estrutura de Arquivos|Tipos de Arquivos', NULL, NULL, 1, 'B', 'fonfas@unipam.edu.br'),
(3, 'Assinale se a assertiva a seguir é certa ou errada: O comando Top transfere o último elemento para o topo da pilha.', 'CertoErrado', NULL, NULL, NULL, 1, 'Errado', 'fonfas@unipam.edu.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

DROP TABLE IF EXISTS `dados`;
CREATE TABLE IF NOT EXISTS `dados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `confSenha` varchar(32) NOT NULL,
  `nivel` enum('Aluno','Professor') NOT NULL,
  `curso` varchar(100) NOT NULL,
  `acesso` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `usuario`, `nome`, `sobrenome`, `email`, `senha`, `confSenha`, `nivel`, `curso`, `acesso`) VALUES
(1, 'gianvelox', 'Gian', 'Michel', 'gianveloxsi@gmail.com', 'a8e0a09388d92d2a17633e4e5adbdc66', 'a8e0a09388d92d2a17633e4e5adbdc66', 'Aluno', 'Sistemas de Informação', NULL),
(2, 'sandro', 'Sandro', 'Matias', 'sandro@unipam.edu.br', '2c40837dd4b97fd00a5a598a8a25426f', '2c40837dd4b97fd00a5a598a8a25426f', 'Professor', 'Sistemas de Informação', NULL),
(3, 'jcarlos', 'Jose', 'Carlos', 'jcarlos_2013@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'Aluno', 'Sistemas de Informação', 1),
(4, 'a', 'Antônio', 'Fonseca', 'a@a.com', '0cc175b9c0f1b6a831c399e269772661', '0cc175b9c0f1b6a831c399e269772661', 'Aluno', 'Sistemas de Informação', 3),
(5, 'p', 'Fabrício', 'Araújo', 'fonfas@unipam.edu.br', '83878c91171338902e0fe0fb97a8c47a', '83878c91171338902e0fe0fb97a8c47a', 'Professor', 'Sistemas de Informação', NULL),
(6, 't', 'Treinamento', 'Treinamento', 'treina@unipam.edu.br', 'e358efa489f58062f10dd7316b65649e', 'e358efa489f58062f10dd7316b65649e', 'Aluno', 'Treinamento da Biblioteca', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

DROP TABLE IF EXISTS `materiais`;
CREATE TABLE IF NOT EXISTS `materiais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arquivo` varchar(500) NOT NULL,
  `curso` varchar(200) DEFAULT NULL,
  `dataUpload` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `materiais`
--

INSERT INTO `materiais` (`id`, `arquivo`, `curso`, `dataUpload`) VALUES
(1, 'Poster.pdf', 'Sistemas', '2018-10-21 00:00:00'),
(2, 'Teste.pdf', 'Sistemas', '2018-10-21 00:00:00'),
(3, 'Poster.pdf', 'Treinamento', '2018-10-22 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
