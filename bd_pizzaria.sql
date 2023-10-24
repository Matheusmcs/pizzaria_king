-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Out-2023 às 19:05
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

DROP TABLE IF EXISTS `cardapio`;
CREATE TABLE IF NOT EXISTS `cardapio` (
  `ID` int NOT NULL,
  `Nome` varchar(502) DEFAULT NULL,
  `Preco` varchar(1002) DEFAULT NULL,
  `Tempo_P` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`ID`, `Nome`, `Preco`, `Tempo_P`) VALUES
(9, 'frango_requeijao', 'R$ 29,90', '25Min'),
(10, 'Portuguesa', 'R$ 35,00', '35Min'),
(11, 'Calabresa', 'R$ 29,90', '25Min');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregadores`
--

DROP TABLE IF EXISTS `entregadores`;
CREATE TABLE IF NOT EXISTS `entregadores` (
  `ID` int NOT NULL,
  `Nome` varchar(502) DEFAULT NULL,
  `Tempo_M` varchar(1200) DEFAULT NULL,
  `Frete` varchar(152) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `entregadores`
--

INSERT INTO `entregadores` (`ID`, `Nome`, `Tempo_M`, `Frete`) VALUES
(7, 'Godofredo O Porpeta', '45Min', 'R$ 8,00'),
(8, 'Gugu Gaiteiro', '30Min', 'R$ 10,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `ID` int NOT NULL,
  `Nome` varchar(520) DEFAULT NULL,
  `Cargo` varchar(1200) DEFAULT NULL,
  `Turno` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`ID`, `Nome`, `Cargo`, `Turno`) VALUES
(6, 'Flavio Flamengo', 'Zelador', '8:00 a 18:00'),
(7, 'Mario', 'Pizzaiolo', '8:30 a 17:00'),
(8, 'Ana', 'Atendente', '9:00 a 17:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--

DROP TABLE IF EXISTS `promocoes`;
CREATE TABLE IF NOT EXISTS `promocoes` (
  `ID` int NOT NULL,
  `Nome` varchar(502) DEFAULT NULL,
  `Validade` varchar(2100) DEFAULT NULL,
  `Valor` varchar(215) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `promocoes`
--

INSERT INTO `promocoes` (`ID`, `Nome`, `Validade`, `Valor`) VALUES
(15, 'Calabresa Com Queijo', '15/10/2023', 'R$ 45,00'),
(16, 'Meia Portuguesa e Calabresa', '20/10/2023', 'R$ 35,00'),
(17, 'Mussarela Com Cheddar', '25/10/2023', 'R$ 32,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `endereco`, `telefone`) VALUES
(15, 'marwin barbosa silva soares', 'marwinsoares070@gmail.com', '123456789', 'rua lagoa do campelo', '11959237933'),
(17, 'kaue wendell de oliveira', 'kaue.jonas@gmail.com', 'senha', 'a casa da minha mãe', '40028922');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
