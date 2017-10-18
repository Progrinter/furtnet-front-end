-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Out-2017 às 20:18
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `remetente` varchar(255) NOT NULL,
  `destinatario` varchar(255) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `user` varchar(255) NOT NULL,
  `privacidade` varchar(255) NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `psicologo`
--

CREATE TABLE `psicologo` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(12) NOT NULL,
  `crp` varchar(12) NOT NULL,
  `formacao` text NOT NULL,
  `instituicao` text NOT NULL,
  `cursos` text NOT NULL,
  `experiencia` text NOT NULL,
  `status` char(1) NOT NULL,
  `tipo` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `psicologo`
--

INSERT INTO `psicologo` (`user_id`, `nome`, `data`, `genero`, `email`, `senha`, `estado`, `cidade`, `cpf`, `crp`, `formacao`, `instituicao`, `cursos`, `experiencia`, `status`, `tipo`) VALUES
(0, 'Daniela Ferreira', '05/11/1997', 'Feminino', 'daniela.ferreira_97@hotmail.com', 'teste123', NULL, NULL, '44456992840', '1111111111', 'MÃºsica, Psicologia, Medicina', 'PUC', 'tenho', 'sim', '0', '1');

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
  `user_id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `medicamento` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `nomes_remedios` text COLLATE utf8_unicode_ci NOT NULL,
  `consulta` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `sintomas` text COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`user_id`, `nome`, `data`, `genero`, `email`, `senha`, `estado`, `cidade`, `cpf`, `medicamento`, `nomes_remedios`, `consulta`, `sintomas`, `status`, `tipo`) VALUES
(35, 'Paulo Henrique', '11/03/1994', 'Masculino', 'paulohenriquepaiva@ymail.com', 'teste123', NULL, NULL, '44456992840', 'nao', '', 'Sim', 'No momento estou muito bem.', '0', '0');

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `psicologo`
--
ALTER TABLE `psicologo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_membros`
--
ALTER TABLE `tbl_membros`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
