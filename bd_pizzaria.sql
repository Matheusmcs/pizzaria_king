-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Out-2023 às 23:22
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
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(502) DEFAULT NULL,
  `Preco` varchar(1002) DEFAULT NULL,
  `Tempo_P` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`ID`, `Nome`, `Preco`, `Tempo_P`) VALUES
(9, 'frango_requeijao', 'R$ 29,90', '25Min'),
(10, 'Portuguesa', 'R$ 25,50', '35Min'),
(11, 'Calabresa com queijo', '$ 15,50', '25min'),
(14, 'peperoni', 'R$ 15,00', '25min'),
(15, 'marguerita', 'R$25,50', '30min');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregadores`
--

DROP TABLE IF EXISTS `entregadores`;
CREATE TABLE IF NOT EXISTS `entregadores` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(502) DEFAULT NULL,
  `Tempo_M` varchar(1200) DEFAULT NULL,
  `Frete` varchar(152) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `entregadores`
--

INSERT INTO `entregadores` (`ID`, `Nome`, `Tempo_M`, `Frete`) VALUES
(7, 'Godofredo O Porpeta', '40min', 'R$69'),
(9, 'Carlos Miguel', '1min', 'R$100,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(520) DEFAULT NULL,
  `Cargo` varchar(1200) DEFAULT NULL,
  `Turno` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`ID`, `Nome`, `Cargo`, `Turno`) VALUES
(6, 'Flavio Flamengo', 'zelador', '8:00 a 18:00'),
(7, 'Godofredo O Porpeta', 'herdeiro', '13:00 a 13:01'),
(8, 'Marwin Barbosa', 'DONO', '19:00 a 19:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--

DROP TABLE IF EXISTS `promocoes`;
CREATE TABLE IF NOT EXISTS `promocoes` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(502) DEFAULT NULL,
  `Validade` varchar(2100) DEFAULT NULL,
  `Valor` varchar(215) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `promocoes`
--

INSERT INTO `promocoes` (`ID`, `Nome`, `Validade`, `Valor`) VALUES
(15, 'Pizza chocorango + broto aleatório', '15/10/2023', 'R$ 35,00'),
(16, 'Meia Portuguesa e Calabresa', '20/10/2023', 'R$ 29,90'),
(17, '2 Pizzas e um Refri', '25/10/2023', 'R$ 30,00');

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `endereco`, `telefone`) VALUES
(15, 'marwin barbosa silva soares', 'marwinsoares070@gmail.com', '123456789', 'rua lagoa do campelo', '11959237933');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
