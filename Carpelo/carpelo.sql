-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Maio-2019 às 05:08
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carpelo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `razao_social` varchar(500) NOT NULL,
  `cnpj` varchar(500) NOT NULL,
  `senha_acesso` varchar(500) NOT NULL,
  `senha_pagar` varchar(500) NOT NULL,
  `endereco` varchar(500) NOT NULL,
  `numero` varchar(500) NOT NULL,
  `bairro` varchar(500) NOT NULL,
  `cidade` varchar(500) NOT NULL,
  `estado` varchar(500) NOT NULL,
  `cep` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telefone` varchar(500) NOT NULL,
  `pagina_web` varchar(500) NOT NULL,
  `responsavel` varchar(500) NOT NULL,
  `cpf` varchar(500) NOT NULL,
  `cargo` varchar(500) NOT NULL,
  `logo` varchar(500) NOT NULL,
  PRIMARY KEY (`id_empresa`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `telefone` (`telefone`),
  UNIQUE KEY `pagina_web` (`pagina_web`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(500) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `rg` varchar(500) NOT NULL,
  `cpf` varchar(500) NOT NULL,
  `senha_acesso` varchar(500) NOT NULL,
  `data_nascimento` varchar(500) NOT NULL,
  `endereco` varchar(500) NOT NULL,
  `numero` varchar(500) NOT NULL,
  `bairro` varchar(500) NOT NULL,
  `cidade` varchar(500) NOT NULL,
  `estado` varchar(500) NOT NULL,
  `cep` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `celular` varchar(500) NOT NULL,
  `nome_mae` varchar(500) NOT NULL,
  `formacao` varchar(500) NOT NULL,
  `idioma` varchar(500) NOT NULL,
  `estado_civil` varchar(500) NOT NULL,
  `numero_filhos` varchar(500) NOT NULL,
  `carteira` varchar(500) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `rg` (`rg`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `celular` (`celular`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
