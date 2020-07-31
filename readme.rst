Executar importar banco de dados abaixo antes de executar o codigo, servidor deve utilizar porta 8888 para ser compativel com frontend



-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 31/07/2020 às 17:02
-- Versão do servidor: 5.7.26
-- Versão do PHP: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de dados: `ezoom`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `mainimagepath` varchar(256) NOT NULL,
  `secondimg` varchar(64) NOT NULL,
  `thirdimage` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `mainimagepath`, `secondimg`, `thirdimage`) VALUES
(1, 'curso1', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsum', 'http://localhost:8888/ezoom/images/curso1.png', 'http://localhost:8888/ezoom/images/curso1.png', 'http://localhost:8888/ezoom/images/curso1.png'),
(2, 'curso2', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsum', 'http://localhost:8888/ezoom/images/curso2.png', 'http://localhost:8888/ezoom/images/curso2.png', 'http://localhost:8888/ezoom/images/curso2.png'),
(3, 'curso3', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsum', 'http://localhost:8888/ezoom/images/curso3.png', 'http://localhost:8888/ezoom/images/curso3.png', 'http://localhost:8888/ezoom/images/curso3.png'),
(4, 'curso4', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsum', 'http://localhost:8888/ezoom/images/curso4.png', 'http://localhost:8888/ezoom/images/curso4.png', 'http://localhost:8888/ezoom/images/curso4.png'),
(8, '\"teste\"', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsum', 'http://localhost:8888/ezoom/images/curso4.png', 'http://localhost:8888/ezoom/images/curso4.png', 'http://localhost:8888/ezoom/images/curso4.png');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `courses`
--
ALTER TABLE `courses`
  ADD UNIQUE KEY `id` (`id`);
