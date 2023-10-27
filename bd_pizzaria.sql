-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Out-2023 às 23:50
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`ID`, `Nome`, `Preco`, `Tempo_P`) VALUES
(20, 'frango', '25.50', '25min'),
(21, 'portuguesa', '35.50', '30min'),
(22, 'chocolate', '39.99', '30min'),
(19, 'calabresa', '15.50', '25min');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `carrinho_id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int DEFAULT NULL,
  `pizza_nome` varchar(255) DEFAULT NULL,
  `quantidade` int DEFAULT NULL,
  `preco_total` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`carrinho_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`carrinho_id`, `usuario_id`, `pizza_nome`, `quantidade`, `preco_total`) VALUES
(1, 0, 'quantidade_chocolate', 1, '0.00'),
(2, 0, 'chocolate', 1, '39.99'),
(3, 0, 'quantidade_portuguesa', 0, '0.00'),
(4, 0, 'portuguesa', 0, '0.00'),
(5, 0, 'quantidade_frango', 0, '0.00'),
(6, 0, 'frango', 0, '0.00'),
(7, 0, 'quantidade_calabresa', 0, '0.00'),
(8, 0, 'calabresa', 0, '0.00');

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
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nome`, `email`, `senha`, `endereco`, `telefone`) VALUES
(15, 'marwin barbosa silva soares', 'marwinsoares070@gmail.com', '123456789', 'rua lagoa do campelo', '11959237933');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
