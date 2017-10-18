-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Out-2017 às 01:59
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furtnet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `id` int(10) UNSIGNED NOT NULL,
  `psicologo_id` int(10) UNSIGNED DEFAULT NULL,
  `preco_consulta` double UNSIGNED NOT NULL DEFAULT '0',
  `endereço` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `horarios` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id` int(10) UNSIGNED NOT NULL,
  `psicologo_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `horario_consulta` datetime NOT NULL,
  `preço` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `psicologo`
--

CREATE TABLE `psicologo` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` text NOT NULL,
  `crp` text NOT NULL,
  `formacao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `instituicao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cursos` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `experiencia` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_membros`
--

CREATE TABLE `tbl_membros` (
  `nome` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(75) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_membros`
--

INSERT INTO `tbl_membros` (`nome`, `login`, `senha`) VALUES
('Paulo Henrique', 'paulo.silva@progrinter.com', '0r3qu13m*'),
('Caue Petratti', 'caue.petratti@stcruz.com.br', 'francesco'),
('Caue Petratti', 'caue02p@hotmail.com', 'francesco'),
('teste', 'teste@teste.com', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medicamento` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `nomes_remedios` text COLLATE utf8_unicode_ci NOT NULL,
  `consulta` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `sintomas` text COLLATE utf8_unicode_ci NOT NULL,
  `tipo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_atendimento_psicologo` (`psicologo_id`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_atendimento_psico` (`psicologo_id`),
  ADD KEY `user_id` (`usuario_id`);

--
-- Indexes for table `psicologo`
--
ALTER TABLE `psicologo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_membros`
--
ALTER TABLE `tbl_membros`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `psicologo`
--
ALTER TABLE `psicologo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
