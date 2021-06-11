-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2020 às 17:29
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdagenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbalunos`
--

CREATE TABLE `tbalunos` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `fone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbalunos`
--

INSERT INTO `tbalunos` (`codigo`, `nome`, `fone`, `email`) VALUES
(1, 'Giovanna', '13-991233445', 'gigi@hotmail.com'),
(2, 'Henrique', '13-991232323', 'henrique_rodrigues@gmail.com'),
(3, 'Paulo de Tarso', '13-991556677', 'paulinho@hotmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbalunos`
--
ALTER TABLE `tbalunos`
  ADD PRIMARY KEY (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
