-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Set-2024 às 01:55
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

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
  `img_produto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
