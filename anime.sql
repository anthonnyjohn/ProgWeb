-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2023 às 12:20
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `anime`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `animes`
--

CREATE TABLE `animes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `anime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `animes`
--

INSERT INTO `animes` (`id`, `nome`, `email`, `anime`) VALUES
(12, 'Arysson', 'arysson2020@gmail.com', 'konosuba'),
(13, 'Arysson', 'arysson2020@gmail.com', 'konosuba'),
(14, 'Arysson', 'arysson2020@gmail.com', 'Pokemon');

-- --------------------------------------------------------

--
-- Estrutura para tabela `falecon`
--

CREATE TABLE `falecon` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `falecon`
--

INSERT INTO `falecon` (`id`, `nome`, `email`, `texto`) VALUES
(8, 'Arysson', 'arysson2020@gmail.com', 'oi');

-- --------------------------------------------------------

--
-- Estrutura para tabela `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` text NOT NULL,
  `img` longtext NOT NULL,
  `url` longtext NOT NULL,
  `sino` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `post2`
--

CREATE TABLE `post2` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` text NOT NULL,
  `img` longtext NOT NULL,
  `url` longtext NOT NULL,
  `sino` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `post2`
--

INSERT INTO `post2` (`id`, `nome`, `img`, `url`, `sino`) VALUES
(15, 'Kimetsu no Yaiba', 'https://th.bing.com/th/id/R.9d99dafb14c6c803a764f354db6aede9?rik=GUbJsiIYO0UNjQ&pid=ImgRaw&r=0', 'https://th.bing.com/th/id/R.ca81ecd3b89476a0c7255173f1800ae6?rik=/hxH5YNYiaWU/A&pid=ImgRaw&r=0', 'No Japão da era Taisho, Tanjiro Kamado é um garoto de bom coração que ganha a vida vendendo carvão. No entanto, sua vida pacífica é destruída quando um demônio mata toda a sua família. Sua irmã mais nova Nezuko é a única sobrevivente, mas ela foi transformada em um demônio! Tanjiro parte em uma jornada perigosa para encontrar uma maneira de devolver sua irmã ao normal e destruir o Demônio que arruinou sua vida.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `falecon`
--
ALTER TABLE `falecon`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `post2`
--
ALTER TABLE `post2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `falecon`
--
ALTER TABLE `falecon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT de tabela `post2`
--
ALTER TABLE `post2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
