-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jan-2019 às 10:55
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_erp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(80) CHARACTER SET utf8 NOT NULL,
  `ativo_categoria` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT 'S',
  `mostrar_no_menu` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`, `ativo_categoria`, `mostrar_no_menu`) VALUES
(11, 'Cozinha', 'S', 'S'),
(12, 'Banheiro', 'S', 'S'),
(13, 'Decoração de Natal', 'S', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `cliente` varchar(150) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `ddd` varchar(3) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `fone` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `data_cadastro` date NOT NULL,
  `ativo_cliente` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `cliente`, `cpf`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `ddd`, `cep`, `fone`, `email`, `senha`, `data_cadastro`, `ativo_cliente`) VALUES
(1, 'Silvio Coelho', '', 'Rua Ricardo m. Ramos\r\nPatriarca', '', '', '', '', 'PR', '', '', '91184783', 'conejofoz@gmail.com', 'conejo24', '0000-00-00', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL,
  `titulo_imagem` varchar(150) NOT NULL,
  `path_imagem` varchar(150) NOT NULL,
  `ativo_imagem` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `qtde_atendido` int(11) DEFAULT NULL,
  `valor` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`id_item`, `id_pedido`, `id_produto`, `qtde`, `qtde_atendido`, `valor`) VALUES
(1, 7, 1, 2, 0, '12.00'),
(2, 7, 6, 6, 0, '12.00'),
(3, 7, 5, 1, NULL, '3.88'),
(4, 7, 4, 1, NULL, '9.85'),
(5, 7, 0, 1, NULL, '0.00'),
(6, 7, 0, 0, NULL, '0.00'),
(76, 9, 1, 2, NULL, '11.00'),
(77, 9, 6, 5, NULL, '11.00'),
(78, 9, 7, 6, NULL, '3.00'),
(79, 9, 5, 3, NULL, '3.88'),
(80, 9, 4, 12, NULL, '9.85');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_pedido` date NOT NULL,
  `hora_pedido` time NOT NULL,
  `baixado` varchar(1) NOT NULL DEFAULT 'N',
  `finalizado` varchar(1) NOT NULL DEFAULT 'N',
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_cliente`, `data_pedido`, `hora_pedido`, `baixado`, `finalizado`, `total`) VALUES
(5, 1, '0000-00-00', '00:00:00', 'N', 'S', '0.00'),
(6, 1, '0000-00-00', '00:00:00', 'N', 'S', '0.00'),
(7, 1, '0000-00-00', '00:00:00', 'N', 'S', '10.00'),
(8, 1, '2019-01-11', '00:00:00', 'N', 'S', '0.00'),
(9, 1, '2019-01-11', '00:39:06', 'N', 'N', '224.84');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `produto` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `unidade` varchar(50) DEFAULT NULL,
  `preco_alto` decimal(10,2) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `eh_lancamento` varchar(1) DEFAULT NULL,
  `eh_promocao` varchar(1) DEFAULT NULL,
  `eh_maisvendido` varchar(1) DEFAULT NULL,
  `ativo` varchar(1) DEFAULT 'S',
  `imagem` varchar(100) DEFAULT NULL,
  `descricao` text,
  `peso_correio` float DEFAULT NULL,
  `diametro_correio` float DEFAULT NULL,
  `comprimento_correio` float DEFAULT NULL,
  `largura_correio` float DEFAULT NULL,
  `altura_correio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_categoria`, `id_subcategoria`, `produto`, `unidade`, `preco_alto`, `preco`, `eh_lancamento`, `eh_promocao`, `eh_maisvendido`, `ativo`, `imagem`, `descricao`, `peso_correio`, `diametro_correio`, `comprimento_correio`, `largura_correio`, `altura_correio`) VALUES
(1, 13, 13, 'JARRA BKY-022 AZUL', 'N', '522.00', '12.25', '', '', '', 'S', NULL, 'aaaa\r\n', 0, 0, 0, 0, 0),
(4, 11, 7, 'café', 'S', '0.00', '9.85', '', '', '', 'S', NULL, '', 0, 0, 0, 0, 0),
(5, 13, 13, 'sabão', NULL, NULL, '3.88', NULL, NULL, NULL, 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 11, 7, 'JARRA BKY-022 VERDE', 'S', '12.00', '0.00', '', '', '', 'S', NULL, '', 0, 0, 0, 0, 0),
(7, 11, 7, 'JARRA BKY-022 VERMELHO', 'S', '12.00', '0.00', '', '', '', 'S', NULL, '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id_subcategoria` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `subcategoria` varchar(80) NOT NULL,
  `ativo_subcategoria` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `subcategoria`
--

INSERT INTO `subcategoria` (`id_subcategoria`, `id_categoria`, `subcategoria`, `ativo_subcategoria`) VALUES
(1, 0, 'JARRAS DE VIDRO', 'S'),
(2, 8, 'JARRAS DE VIDRO', 'S'),
(4, 9, 'copo9', 'S'),
(6, 10, 'jarra verde', 'N'),
(7, 11, 'Jarras', 'S'),
(8, 11, 'Copos', 'S'),
(9, 12, 'Lixeiro', 'S'),
(10, 11, 'teste', 'S'),
(11, 11, 'teste', 'S'),
(12, 11, 'teste', 'S'),
(13, 11, 'JARRAS DE VIDRO', 'S'),
(14, 11, 'JARRAS DE VIDRO', 'S'),
(15, 11, 'JARRAS DE VIDRO', 'S'),
(16, 11, 'teste', 'S'),
(17, 11, 'JARRAS DE VIDRO', 'S'),
(18, 11, 'teste', 'S'),
(19, 11, 'JARRAS DE VIDRO', 'S'),
(20, 11, 'JARRAS DE VIDRO', 'S'),
(21, 11, 'JARRAS DE VIDRO', 'S'),
(22, 11, 'JARRAS DE VIDRO', 'S'),
(23, 11, 'JARRAS DE VIDRO', 'S'),
(24, 11, '', 'S'),
(25, 11, 'JARRAS DE VIDRO', 'S'),
(26, 11, 'JARRAS DE VIDRO', 'S'),
(27, 11, 'JARRAS DE VIDRO', 'S'),
(28, 11, 'JARRAS DE VIDRO', 'S'),
(29, 11, 'categoria alterada', 'S'),
(30, 11, 'JARRAS DE VIDRO', 'S'),
(31, 11, 'JARRAS DE VIDRO', 'S'),
(33, 11, 'carro', 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id_subcategoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
