-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2021 às 20:31
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlojagames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `codCli` int(4) NOT NULL,
  `codUsuFK` int(4) NOT NULL,
  `nomeCli` varchar(50) NOT NULL,
  `cpfCli` char(14) NOT NULL,
  `foneCli` char(12) NOT NULL,
  `datanasCli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`codCli`, `codUsuFK`, `nomeCli`, `cpfCli`, `foneCli`, `datanasCli`) VALUES
(5, 11, 'Leonardo', '12345678', '12345678', '2004-08-10'),
(6, 12, 'Giovani', '12345678', '12345678', '1111-11-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE `tbfuncionario` (
  `codFun` int(4) NOT NULL,
  `codUsuFK` int(4) NOT NULL,
  `nomeFun` varchar(50) NOT NULL,
  `funcaoFun` varchar(10) NOT NULL,
  `foneFun` char(12) NOT NULL,
  `datanasFun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfuncionario`
--

INSERT INTO `tbfuncionario` (`codFun`, `codUsuFK`, `nomeFun`, `funcaoFun`, `foneFun`, `datanasFun`) VALUES
(9, 11, 'Leonardo', 'Função', '12345678', '1111-11-11'),
(10, 12, 'Giovanni', 'A', '12345678', '1111-11-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbjogo`
--

CREATE TABLE `tbjogo` (
  `codJog` int(4) NOT NULL,
  `nomeJog` varchar(30) NOT NULL,
  `tamanhoJog` char(10) NOT NULL,
  `precoJog` decimal(6,2) NOT NULL,
  `requisitosjog` varchar(500) NOT NULL,
  `consoleJog` varchar(100) NOT NULL,
  `classificacaoJog` varchar(10) NOT NULL,
  `avaliacaoJog` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbjogo`
--

INSERT INTO `tbjogo` (`codJog`, `nomeJog`, `tamanhoJog`, `precoJog`, `requisitosjog`, `consoleJog`, `classificacaoJog`, `avaliacaoJog`) VALUES
(2, 'Minecraft', '1 GB', '120.00', 'Intel Core i3, 4GB RAM, Windows 7+', 'Xbox, PlayStation e PC', 'Livre', 5),
(27, 'A', 'A', '9999.99', 'A', 'A', 'A', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpedido`
--

CREATE TABLE `tbpedido` (
  `codPed` int(4) NOT NULL,
  `codCliFK` int(4) NOT NULL,
  `codFunFK` int(4) NOT NULL,
  `codJogFK` int(4) NOT NULL,
  `valorUnit` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbpedido`
--

INSERT INTO `tbpedido` (`codPed`, `codCliFK`, `codFunFK`, `codJogFK`, `valorUnit`) VALUES
(18, 5, 9, 2, 120),
(19, 5, 9, 27, 10000),
(21, 5, 9, 2, 120),
(22, 5, 9, 2, 120),
(23, 5, 9, 2, 120),
(24, 5, 9, 2, 120);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `codUsu` int(4) NOT NULL,
  `emailUsu` varchar(60) NOT NULL,
  `senhaUsu` varchar(60) NOT NULL,
  `pinUsu` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`codUsu`, `emailUsu`, `senhaUsu`, `pinUsu`) VALUES
(11, 'leo@leo', '$2y$10$4XQgFtcuCIrehaaiV5c2JeMjBIyUXRqoXy8rcwVVUOSMT0bIQFhH6', 123),
(12, 'giovani@giovani', '$2y$10$cUpmcpNIj9sGI9SH05UGbOevIz3M0ozT56Y8OrY61BCeJ2uSZXLdW', 123);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`codCli`),
  ADD KEY `rel_codUsu_codUsuFK` (`codUsuFK`);

--
-- Índices para tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD PRIMARY KEY (`codFun`),
  ADD KEY `rel_codUsu_codUsuFK2` (`codUsuFK`);

--
-- Índices para tabela `tbjogo`
--
ALTER TABLE `tbjogo`
  ADD PRIMARY KEY (`codJog`);

--
-- Índices para tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  ADD PRIMARY KEY (`codPed`),
  ADD KEY `rel_codCli_codCliFK` (`codCliFK`),
  ADD KEY `rel_codFun_codFunFK` (`codFunFK`),
  ADD KEY `rel_codJog_codJogFK` (`codJogFK`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`codUsu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `codCli` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  MODIFY `codFun` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbjogo`
--
ALTER TABLE `tbjogo`
  MODIFY `codJog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  MODIFY `codPed` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `codUsu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD CONSTRAINT `rel_codUsu_codUsuFK` FOREIGN KEY (`codUsuFK`) REFERENCES `tbusuario` (`codUsu`);

--
-- Limitadores para a tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD CONSTRAINT `rel_codUsu_codUsuFK2` FOREIGN KEY (`codUsuFK`) REFERENCES `tbusuario` (`codUsu`);

--
-- Limitadores para a tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  ADD CONSTRAINT `rel_codCli_codCliFK` FOREIGN KEY (`codCliFK`) REFERENCES `tbcliente` (`codCli`),
  ADD CONSTRAINT `rel_codFun_codFunFK` FOREIGN KEY (`codFunFK`) REFERENCES `tbfuncionario` (`codFun`),
  ADD CONSTRAINT `rel_codJog_codJogFK` FOREIGN KEY (`codJogFK`) REFERENCES `tbjogo` (`codJog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
