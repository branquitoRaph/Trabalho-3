-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24-Jun-2022 às 20:29
-- Versão do servidor: 5.6.51
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_camed`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idContato` int(11) NOT NULL,
  `nomeUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenomeUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cepUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emailUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idContato`, `nomeUsuario`, `sobrenomeUsuario`, `cepUsuario`, `emailUsuario`, `mensagem`) VALUES
(1, 'Jonathan', 'Castro', '12345-678', 'jonathancastrosilva8@gmail.com', 'testando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamento`
--

CREATE TABLE `medicamento` (
  `idMedicamento` int(11) NOT NULL,
  `nomeMedicamento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pmvc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `necessarioReceita` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `medicamento`
--

INSERT INTO `medicamento` (`idMedicamento`, `nomeMedicamento`, `pmvc`, `necessarioReceita`) VALUES
(1, 'Paracetamol', 'R$29,07', 'Não precisa de receita'),
(2, 'Dipirona', 'R$38,15', 'Não precisa de receita'),
(3, 'Ibuprofeno', 'R$28,86', 'Não precisa de receita'),
(4, 'Algy-Flanderil 600 mg', 'R$19,26', 'Precisa de receita'),
(5, 'Cefalium', 'R$26,37', 'Precisa de receita'),
(6, 'Aspirina 100 mg', 'R$65,35', 'Precisa de receita'),
(7, 'Sumax', 'R$75,87', 'Precisa de receita'),
(8, 'Torsilax', 'R$17,51', 'Não precisa de receita'),
(9, 'Paco', 'R$93,06', 'Precisa de receita'),
(10, 'Tramadol', 'R$84,30', 'Precisa de receita'),
(11, 'Dorflex', 'R$15,40', 'Não precisa de receita');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenomeUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cepUsuario` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `emailUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senhaUsuario` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nomeUsuario`, `sobrenomeUsuario`, `cepUsuario`, `emailUsuario`, `senhaUsuario`) VALUES
(1, 'Raphael', 'da Silva', '29165-791', 'raphaelbranco2004@hotmail.com', '54eeaa3fea5b6a6062e793c260cb44c8'),
(2, 'João', 'Eid Dias', '29101-480', 'jaooeiid@gmail.com', 'c292ed40b074282891625c764cd95d00'),
(3, 'Jonathan', 'Castro Silva', '29769-069', 'jonathancastrosilva8@gmail.com', 'd0e07407bdb5953247d68f00d20e33cf'),
(6, 'Weverton', 'Gomes', '29000-000', 'wevgomes123@gmail.com', 'b0a036a7c0ad66fafd4e5b4ba5754d8b'),
(10, 'Ian', 'Fracalossi', '29165-875', 'ian.luiz@gmail.com', '1a702aa6a846acf9103b80f07a01647c'),
(11, 'Miguel', 'Abreu', '29654-895', 'miguelabreu@gmail.com', '6aad4d12730ec26b4e12f5eb3b3c1165');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idContato`);

--
-- Índices para tabela `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`idMedicamento`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `idMedicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
