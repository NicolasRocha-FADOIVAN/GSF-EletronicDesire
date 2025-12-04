-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2025 at 03:53 AM
-- Server version: 9.1.0
-- PHP Version: 8.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eletronicdesire`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrinhos`
--

DROP TABLE IF EXISTS `carrinhos`;
CREATE TABLE IF NOT EXISTS `carrinhos` (
  `id_cliente` int NOT NULL,
  `produtos_carrinho` json DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrinhos`
--

INSERT INTO `carrinhos` (`id_cliente`, `produtos_carrinho`) VALUES
(2, '[\"6\", \"4\", \"4\", \"2\", \"2\", \"2\", \"2\"]'),
(11, NULL),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(12, '[]'),
(13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sobrenome_cliente` varchar(255) NOT NULL,
  `cpf_cliente` bigint NOT NULL,
  `email_cliente` varchar(255) NOT NULL,
  `senha_cliente` varchar(80) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `sobrenome_cliente`, `cpf_cliente`, `email_cliente`, `senha_cliente`) VALUES
(4, 'João', 'da Silva', 2147483647, 'silva.joao@gmail.com', '1234'),
(12, 'sick', 'horas', 111111111, 'a@a', '123'),
(10, 'fnaf', 'fnaf', 1111, 'ass@gay.cum', 'saf'),
(11, 'Hudson', 'Hudson', 69696969696, 'hudson.bryan@gay.molestador', 'saf'),
(13, 'sick', 'sick', 1111, 'a@a', 'gay');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `id_cliente` int DEFAULT NULL,
  `produtos_compra` json DEFAULT NULL,
  `id_endereco` int DEFAULT NULL,
  `preco_compra` decimal(10,2) DEFAULT NULL,
  `met_pagamento` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_compra` int NOT NULL AUTO_INCREMENT,
  `status_compra` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_compra`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id_cliente`, `produtos_compra`, `id_endereco`, `preco_compra`, `met_pagamento`, `id_compra`, `status_compra`) VALUES
(12, '[\"1\", \"11\", \"12\", \"13\", \"14\"]', 20, 7015.45, 'nupay', 1, 1),
(12, '[\"1\", \"11\", \"12\", \"13\", \"14\"]', 20, 7015.45, 'nupay', 2, 1),
(12, '[\"1\", \"11\", \"12\", \"13\", \"14\"]', 21, 7015.45, 'credit', 3, 1),
(12, '[\"1\", \"11\", \"12\", \"13\", \"14\"]', 22, 7015.45, 'pix', 4, 1),
(12, '[\"12\", \"12\"]', 23, 935.82, 'nupay', 5, 1),
(13, '[\"13\", \"12\", \"14\"]', 25, 2527.09, 'credit', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE IF NOT EXISTS `enderecos` (
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `estado` char(2) NOT NULL,
  `numero_endereco` int DEFAULT NULL,
  `complemento_endereco` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pontodereferencia_endereco` varchar(255) NOT NULL,
  `id_endereco` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  PRIMARY KEY (`id_endereco`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enderecos`
--

INSERT INTO `enderecos` (`cep`, `endereco`, `bairro`, `cidade`, `estado`, `numero_endereco`, `complemento_endereco`, `pontodereferencia_endereco`, `id_endereco`, `id_cliente`) VALUES
('999999999', 'sick gay', 'ass', 'do', 'sk', 12323, '3323', '123322', 18, 12),
('999999999', 'sick gyad', 'safado', 'hudson', '41', 23232323, 'sei lá', 'meu pau', 20, 12),
('999999999', 'sick gay', 'ass', 'do', 'sk', 12323, 'sei lá', '123322', 21, 12),
('999999999', 'sick gyad', 'ass', 'hudson', 'mt', 12323, 'sei lá', 'meu pau', 22, 12),
('ass', 'do', 'siyt', 'hudson', 'mt', 12323, 'sei lá', 'meu pau', 23, 12),
('ass', 'sick gay', 'safado', '4106902', 'sk', 12323, 'sei lá', '123322', 24, 12),
('999999999', 'rua dos viados', 'bacacheri', 'curitiba', 'pr', 23232323, '3323', 'meu pau', 25, 13);

-- --------------------------------------------------------

--
-- Table structure for table `favoritos`
--

DROP TABLE IF EXISTS `favoritos`;
CREATE TABLE IF NOT EXISTS `favoritos` (
  `id_cliente` int NOT NULL,
  `produtos_favoritos` json NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `favoritos`
--

INSERT INTO `favoritos` (`id_cliente`, `produtos_favoritos`) VALUES
(12, '[]'),
(13, '[\"13\"]');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(255) NOT NULL,
  `desc_produto` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `preco_produto` decimal(10,2) NOT NULL,
  `img_produto` varchar(255) NOT NULL,
  `palavra_chave` varchar(255) NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `desc_produto`, `preco_produto`, `img_produto`, `palavra_chave`) VALUES
(1, 'Console PlayStation 5 Slim Sony, SSD 1TB, Com Controle Sem Fio DualSense, Branco...', '', 3347.07, '\'screen/assets/produtos/console-playstation-5-sony-slim-branco-2-jogos-1000038899_1710512868_m.jpg\'', 'playstation'),
(11, 'Placa de Vídeo RTX 3060 1-Click OC Galax NVIDIA GeForce, 12GB GDDR6, LHR, DLSS, Ray Tracing', '', 1639.99, '\'screen/assets/produtos/placa-de-video-galax-geforce-rtx-3060-1-click-oc-15-gbps-12gb-gddr6-ray-tracing-dlss-36nol7md1voc_1614253646_m.jpg\'', ''),
(12, 'Gabinete Gamer Rise Mode Galaxy Glass Standard, Mid Tower, ARGB, ATX, Lateral...', '', 519.90, '\'screen/assets/produtos/gabinete-gamer-rise-mode-galaxy-glass-standard-white-10-fans-argb-rm-ga-ggsw-argb_1685731687_m.jpg\'', ''),
(13, 'Monitor Gamer Curvo LG UltraGear LG 34\", UltraWide, 160Hz, WQHD, 1ms, DisplayPort...', '', 1927.99, '\'screen/assets/produtos/monitor-gamer-lg-ultragear-lg-34-curvo-led-wqhd-ultrawide-160hz-1ms-displayport-e-hdmi-amd-freesync-premium-hdr10-99-srgb-34gp63a-b_1717591886_m.jpg\'', ''),
(14, 'Teclado Óptico-Mecânico Gamer Redragon BroadSword Pro RGB, Switch Redragon Blue', '<li><strong>Iluminação RGB Completa:</strong> Retroiluminação RGB com Underglow, efeitos personalizáveis e 9 teclas programáveis para máxima personalização.</li> <li><strong>Conforto e Construção:</strong> Layout ABNT2, descanso de pulso removível e estrutura sólida para longas sessões de jogo.</li> <li><strong>Tecnologia Gamer:</strong> Full anti-ghosting, conexão USB 2.0 e cabo de 1,6 m garantindo precisão e estabilidade.</li>', 359.99, '\'screen/assets/produtos/teclado-optico-mecanico-gamer-redragon-broadsword-pro-rgb-switch-redragon-blue-abnt-k588-rgb_1602167625_m.jpg\'', 'gamer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
