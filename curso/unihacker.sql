-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2020 at 04:30 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-29+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unihacker`
--
DROP DATABASE IF EXISTS `unihacker`;
CREATE DATABASE IF NOT EXISTS `unihacker` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `unihacker`;

-- --------------------------------------------------------

--
-- Table structure for table `alunos`
--

CREATE TABLE `alunos` (
  `matricula` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `curso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `media` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `curso`, `media`) VALUES
('101010', 'Fulano de Tal Souza', 'Sistemas de Informação', 8.7),
('101011', 'Fulana de Tal Batista', 'Arquitetura', 9.5),
('111111', 'Ciclano da Silva Nunes', 'Sistemas de Informação', 6.1),
('111000', 'Beltrana Costa e Silva', 'Ciências Biológicas', 9.1),
('111000', 'Beltrana Costa e Silva', 'Bioquímica ', 8.6);

-- --------------------------------------------------------

--
-- Table structure for table `recados`
--

CREATE TABLE `recados` (
  `aluno` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recados`
--

INSERT INTO `recados` (`aluno`, `titulo`, `descricao`) VALUES
('Fulano', 'Oferta!', 'Vendo mesa de escritório em ótimo estado.\r\nValor R$ 120,00. Contato pelo e-mail fulano@teste.com.br.'),
('Beltrana', 'Vendo ou troco', 'Estou negociando a minha geladeira. Valor: R$ 200,00. Aceito algo em troca caso seja do meu interesse. Contato pelo telefone (53) 9 9999-9999.'),
('Ciclano', 'Aulas de francês online', 'Dou aulas de inglês online com horário marcado. Valor a combinar. Contato pelo WhatsApp: (53) 9 8765.4321'),
('Aluno Hacker', 'Invasão!', '<script>alert(\'Site invadido!\');</script>');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`) VALUES
('Beltrana', 'beltrana@teste.com.br', '*886B6FD250C55248D319031711FF785C85EBEB72'),
('Fulano de Tal', 'fulano@teste.com.br', '*00A51F3F48415C7D4E8908980D443C29C69B60C9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
