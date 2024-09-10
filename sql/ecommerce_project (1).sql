-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Set-2024 às 14:00
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce_project`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(255) DEFAULT NULL,
  `categoria_produto` enum('PERIFÉRICO','COSMÉTICO','VESTUÁRIO') DEFAULT NULL,
  `marca_produto` varchar(255) DEFAULT NULL,
  `peso_produto` varchar(50) DEFAULT NULL,
  `material_produto` varchar(255) DEFAULT NULL,
  `cor_produto` enum('PRETO','BRANCO','PRATA','AZUL','VERMELHO','VERDE','ROSA','ROXO','AMARELO','LARANJA','CINZA','CIANO') DEFAULT NULL,
  `preco_venda` decimal(10,2) DEFAULT NULL,
  `unidade_medida` enum('UNIDADE','CAIXA','LITRO','QUILO') DEFAULT NULL,
  `garantia_produto` enum('3 MESES','6 MESES','1 ANO','1,5 ANO','2 ANOS','3 ANOS') DEFAULT NULL,
  `descricao_produto` text DEFAULT NULL,
  `img_produto` varchar(255) DEFAULT NULL,
  `quantidade_produto` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_produto`, `categoria_produto`, `marca_produto`, `peso_produto`, `material_produto`, `cor_produto`, `preco_venda`, `unidade_medida`, `garantia_produto`, `descricao_produto`, `img_produto`, `quantidade_produto`) VALUES
(55, 'CONTROLE XBOX', 'PERIFÉRICO', 'Xbox', '300', 'Plástico', 'PRETO', '499.00', 'UNIDADE', '2 ANOS', 'Controle do Xbox One', 'black white nature logo (1).png', 0),
(56, 'Camiseta HIGH', 'VESTUÁRIO', 'HIGH', '100', 'Poliester', 'VERMELHO', '249.00', 'UNIDADE', '2 ANOS', 'Camiseta da High', 'black white nature logo.png', 0),
(57, 'Perfume Malbec', 'COSMÉTICO', 'Boticário', '200', 'Vidro', 'VERMELHO', '189.00', 'UNIDADE', '3 MESES', 'Perfume Malbec', 'black white nature logo (1).png', 0),
(58, 'Boné New Era', 'VESTUÁRIO', 'New Era', '100', 'Tecido', 'CINZA', '199.00', 'UNIDADE', '3 MESES', 'Boné New Era Cinza', 'black white nature logo (1).png', 0),
(59, 'Mouses Redragon', 'PERIFÉRICO', 'Redragon', '200', 'Plástico', 'BRANCO', '999.00', 'UNIDADE', '3 ANOS', 'Mouse Redragon', 'black white nature logo.png', 0),
(60, 'Lápis', 'COSMÉTICO', 'Bic', '15', 'Madeira', 'PRETO', '1.00', 'UNIDADE', '3 MESES', 'Lápis BIC', 'CARRO.jpg', 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `idade_usuario` int(11) NOT NULL,
  `cep_usuario` varchar(9) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `senha_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
