-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2025 at 12:49 AM
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
  `produtos_carrinho` json DEFAULT NULL,
  `valor_total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrinhos`
--

INSERT INTO `carrinhos` (`id_cliente`, `produtos_carrinho`, `valor_total`) VALUES
(2, '[\"6\", \"4\", \"4\", \"2\", \"2\", \"2\", \"2\"]', 0),
(11, NULL, 0),
(12, '[\"1\", \"11\", \"12\", \"13\", \"14\"]', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `sobrenome_cliente`, `cpf_cliente`, `email_cliente`, `senha_cliente`) VALUES
(4, 'João', 'da Silva', 2147483647, 'silva.joao@gmail.com', '1234'),
(12, 'sick', 'horas', 111111111, 'a@a', '123'),
(10, 'fnaf', 'fnaf', 1111, 'ass@gay.cum', 'saf'),
(11, 'Hudson', 'Hudson', 69696969696, 'hudson.bryan@gay.molestador', 'saf');

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
