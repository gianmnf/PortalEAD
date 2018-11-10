-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Nov-2018 às 13:01
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
  `pergunta` varchar(500) DEFAULT NULL,
  `tipoPergunta` enum('Aberta','Multipla','CertoErrado','Justifica') DEFAULT NULL,
  `multipla` varchar(300) DEFAULT NULL,
  `resposta` varchar(500) DEFAULT NULL,
  `nota` float DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_atividade`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id_atividade`, `pergunta`, `tipoPergunta`, `multipla`, `resposta`, `nota`, `valor`) VALUES
(1, 'Como é feito um teste?', 'Aberta', NULL, 'dsfdssdsfsdfdsf', 3, 4),
(2, 'Testando atividades?', 'Aberta', NULL, 'fdsfdsfdsqweqewqe', 2, 3),
(3, 'Como executar uma sequencia for()?', 'Aberta', NULL, 'asDASDSADSADSA', 1, 2),
(4, 'Defina a velocidade máxima permitida na passagem de um semáforo de uma avenida, leia a placa dos automóveis e a velocidade com que cada motorista passa pelo semáforo e que calcule a multa que este motorista deverá receber, sabendo que são pagos R$ 5,00 por cada quilômetro que o motorista ultrapassar acima da velocidade permitida, até um limite de R$ 190,00.', 'Aberta', NULL, 'saddsafdfgxcxcz', 2, 2),
(5, 'Um tipo abstrato de dados está desvinculado de sua implementação, ou seja, a sua definição visa a preocupação com o que ele faz e não como ele faz. | A lista duplamente encadeada além de saber o próximo nó, cada elemento também conhece o nó anterior a ele na lista, o que facilita a remoção de um elemento e a exibição dos elementos na ordem inversa. ', 'Justifica', NULL, 'As duas afirmações são verdadeiras, e a segunda não justifica a primeira.', 1, 1),
(6, 'Analise as afirmações a seguir sobre algoritmos.  I Um algoritmo é a solução específica para um problema específico. II Todo algoritmo recursivo tem um equivalente iterativo, e todo algoritmo iterativo tem um equivalente recursivo. III Um algoritmo possui uma quantidade de passos definidos, garantindo que ele possua um tempo máximo, possível de calcular, para terminar. IV Todos os dados, em um algoritmo, são armazenados em variáveis, através da operação de atribuição.  Estão corretas', 'Multipla', 'III e IV|II e III|I e IV|I e II|I e III', 'II e III', 1, 1),
(7, 'Julgue o item seguinte a respeito da construção de algoritmos, dos conceitos de variáveis e de bloco de comandos e das estruturas de controle.    Durante a execução de um programa, o conteúdo de uma variável pode mudar ao longo do tempo, no entanto ela só pode armazenar um valor por vez.', 'CertoErrado', NULL, 'Errado', 1, 1);

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `usuario`, `nome`, `sobrenome`, `email`, `senha`, `confSenha`, `nivel`, `curso`) VALUES
(1, 'gianvelox', 'Gian', 'Michel', 'gianveloxsi@gmail.com', 'a8e0a09388d92d2a17633e4e5adbdc66', 'a8e0a09388d92d2a17633e4e5adbdc66', 'Aluno', 'Sistemas de Informação'),
(2, 'sandro', 'Sandro', 'Matias', 'sandro@unipam.edu.br', '2c40837dd4b97fd00a5a598a8a25426f', '2c40837dd4b97fd00a5a598a8a25426f', 'Professor', 'Sistemas de Informação'),
(3, 'jcarlos', 'Jose', 'Carlos', 'jcarlos_2013@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'Aluno', 'Sistemas de Informação'),
(4, 'a', 'Antônio', 'Fonseca', 'a@a.com', '0cc175b9c0f1b6a831c399e269772661', '0cc175b9c0f1b6a831c399e269772661', 'Aluno', 'Sistemas de Informação'),
(5, 'p', 'Fabrício', 'Araújo', 'fonfas@unipam.edu.br', '83878c91171338902e0fe0fb97a8c47a', '83878c91171338902e0fe0fb97a8c47a', 'Professor', 'Sistemas de Informação'),
(6, 't', 'Treinamento', 'Treinamento', 'treina@unipam.edu.br', 'e358efa489f58062f10dd7316b65649e', 'e358efa489f58062f10dd7316b65649e', 'Aluno', 'Treinamento da Biblioteca');

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
