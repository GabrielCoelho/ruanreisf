-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 27/02/2018 às 09:13
-- Versão do servidor: 5.7.21
-- Versão do PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ruanreis-dev`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'ensaio'),
(2, 'casamento'),
(3, 'aniversario');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `texto_comentario` text NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `texto_comentario`, `id_usuario`) VALUES
(1, 'Ruan você é lindo e maravilhoso, te quero seu tesão! <3 ', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ensaios`
--

CREATE TABLE `ensaios` (
  `id_historia` int(11) NOT NULL,
  `nome_historia` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ensaios`
--

INSERT INTO `ensaios` (`id_historia`, `nome_historia`) VALUES
(1, 'Gabriel e Tainá'),
(2, 'João e Maria'),
(3, 'Ruan e Ana Paula'),
(4, 'Gabriela'),
(5, 'Ana Maria e João Kleber'),
(6, 'Luis Augusto'),
(7, 'Henrique e Monica'),
(8, 'Barbara'),
(9, 'Leandra');

-- --------------------------------------------------------

--
-- Estrutura para tabela `faz_comentario`
--

CREATE TABLE `faz_comentario` (
  `id_faz_comentario` int(11) NOT NULL,
  `id_comentario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_comentario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `faz_comentario`
--

INSERT INTO `faz_comentario` (`id_faz_comentario`, `id_comentario`, `id_usuario`, `data_comentario`) VALUES
(1, 1, 1, '2018-02-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL,
  `caminho_imagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `info_ensaio`
--

CREATE TABLE `info_ensaio` (
  `id_info_ensaio` int(11) NOT NULL,
  `descricao_breve` varchar(200) NOT NULL,
  `descricao_extensa` text NOT NULL,
  `data_ensaio` date NOT NULL,
  `local_ensaio` varchar(150) NOT NULL,
  `equipe_filmagem` varchar(200) DEFAULT NULL,
  `equipe_cerimônia` varchar(200) DEFAULT NULL,
  `buffet` varchar(200) DEFAULT NULL,
  `decoracao` varchar(200) DEFAULT NULL,
  `maquiagem` varchar(200) DEFAULT NULL,
  `vestuário` varchar(200) DEFAULT NULL,
  `confeitaria` varchar(200) DEFAULT NULL,
  `músicos` varchar(200) DEFAULT NULL,
  `iluminação` varchar(200) DEFAULT NULL,
  `celebrante` varchar(200) DEFAULT NULL,
  `penteados` varchar(200) DEFAULT NULL,
  `outros` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `info_ensaio`
--

INSERT INTO `info_ensaio` (`id_info_ensaio`, `descricao_breve`, `descricao_extensa`, `data_ensaio`, `local_ensaio`, `equipe_filmagem`, `equipe_cerimônia`, `buffet`, `decoracao`, `maquiagem`, `vestuário`, `confeitaria`, `músicos`, `iluminação`, `celebrante`, `penteados`, `outros`) VALUES
(1, 'Ensaio amoroso de Gabriel e Tainá', 'Ensaio de namorados. O amor é lindo e eles também são. ', '2017-12-07', 'Campo da Chiarelli', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `superusuario`
--

CREATE TABLE `superusuario` (
  `id_superuser` int(11) NOT NULL,
  `nome_superuser` varchar(200) NOT NULL,
  `email_login` varchar(180) NOT NULL,
  `senha_login` varchar(16) NOT NULL,
  `permicao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tem_categoria`
--

CREATE TABLE `tem_categoria` (
  `id_tem_categoria` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_historia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tem_categoria`
--

INSERT INTO `tem_categoria` (`id_tem_categoria`, `id_categoria`, `id_historia`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 4),
(5, 2, 5),
(6, 3, 6),
(7, 1, 7),
(8, 1, 8),
(9, 3, 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tem_comentario`
--

CREATE TABLE `tem_comentario` (
  `id_tem_comentario` int(11) NOT NULL,
  `id_comentario` int(11) NOT NULL,
  `id_historia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tem_comentario`
--

INSERT INTO `tem_comentario` (`id_tem_comentario`, `id_comentario`, `id_historia`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tem_ensaio`
--

CREATE TABLE `tem_ensaio` (
  `id_tem_ensaio` int(11) NOT NULL,
  `id_historia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tem_ensaio`
--

INSERT INTO `tem_ensaio` (`id_tem_ensaio`, `id_historia`, `id_usuario`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tem_imagem`
--

CREATE TABLE `tem_imagem` (
  `id_tem_imagem` int(11) NOT NULL,
  `id_historia` int(11) NOT NULL,
  `id_imagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tem_informacao`
--

CREATE TABLE `tem_informacao` (
  `id_tem_info` int(11) NOT NULL,
  `id_historia` int(11) NOT NULL,
  `id_info_ensaio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tem_informacao`
--

INSERT INTO `tem_informacao` (`id_tem_info`, `id_historia`, `id_info_ensaio`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
  `email_usuario` varchar(180) NOT NULL,
  `senha_usuario` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`) VALUES
(1, 'Gabriel', 'soares@workmail.com', '01ab02cd03');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `ensaios`
--
ALTER TABLE `ensaios`
  ADD PRIMARY KEY (`id_historia`);

--
-- Índices de tabela `faz_comentario`
--
ALTER TABLE `faz_comentario`
  ADD PRIMARY KEY (`id_faz_comentario`),
  ADD KEY `id_comentario` (`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices de tabela `info_ensaio`
--
ALTER TABLE `info_ensaio`
  ADD PRIMARY KEY (`id_info_ensaio`);

--
-- Índices de tabela `superusuario`
--
ALTER TABLE `superusuario`
  ADD PRIMARY KEY (`id_superuser`);

--
-- Índices de tabela `tem_categoria`
--
ALTER TABLE `tem_categoria`
  ADD PRIMARY KEY (`id_tem_categoria`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_historia` (`id_historia`),
  ADD KEY `id_categoria_2` (`id_categoria`);

--
-- Índices de tabela `tem_comentario`
--
ALTER TABLE `tem_comentario`
  ADD PRIMARY KEY (`id_tem_comentario`),
  ADD KEY `id_comentario` (`id_historia`),
  ADD KEY `id_historia` (`id_comentario`);

--
-- Índices de tabela `tem_ensaio`
--
ALTER TABLE `tem_ensaio`
  ADD PRIMARY KEY (`id_tem_ensaio`),
  ADD KEY `id_historia` (`id_historia`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `tem_imagem`
--
ALTER TABLE `tem_imagem`
  ADD PRIMARY KEY (`id_tem_imagem`),
  ADD KEY `id_historia` (`id_historia`),
  ADD KEY `id_imagem` (`id_imagem`);

--
-- Índices de tabela `tem_informacao`
--
ALTER TABLE `tem_informacao`
  ADD PRIMARY KEY (`id_tem_info`),
  ADD KEY `id_historia` (`id_historia`),
  ADD KEY `id_info_ensaio` (`id_info_ensaio`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `ensaios`
--
ALTER TABLE `ensaios`
  MODIFY `id_historia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `faz_comentario`
--
ALTER TABLE `faz_comentario`
  MODIFY `id_faz_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `info_ensaio`
--
ALTER TABLE `info_ensaio`
  MODIFY `id_info_ensaio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `superusuario`
--
ALTER TABLE `superusuario`
  MODIFY `id_superuser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tem_categoria`
--
ALTER TABLE `tem_categoria`
  MODIFY `id_tem_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tem_comentario`
--
ALTER TABLE `tem_comentario`
  MODIFY `id_tem_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tem_ensaio`
--
ALTER TABLE `tem_ensaio`
  MODIFY `id_tem_ensaio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tem_imagem`
--
ALTER TABLE `tem_imagem`
  MODIFY `id_tem_imagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tem_informacao`
--
ALTER TABLE `tem_informacao`
  MODIFY `id_tem_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Restrições para tabelas `faz_comentario`
--
ALTER TABLE `faz_comentario`
  ADD CONSTRAINT `faz_comentario_ibfk_1` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id_comentario`),
  ADD CONSTRAINT `faz_comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Restrições para tabelas `tem_categoria`
--
ALTER TABLE `tem_categoria`
  ADD CONSTRAINT `tem_categoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `tem_categoria_ibfk_2` FOREIGN KEY (`id_historia`) REFERENCES `ensaios` (`id_historia`);

--
-- Restrições para tabelas `tem_comentario`
--
ALTER TABLE `tem_comentario`
  ADD CONSTRAINT `tem_comentario_ibfk_1` FOREIGN KEY (`id_historia`) REFERENCES `ensaios` (`id_historia`),
  ADD CONSTRAINT `tem_comentario_ibfk_2` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id_comentario`);

--
-- Restrições para tabelas `tem_ensaio`
--
ALTER TABLE `tem_ensaio`
  ADD CONSTRAINT `tem_ensaio_ibfk_1` FOREIGN KEY (`id_historia`) REFERENCES `ensaios` (`id_historia`),
  ADD CONSTRAINT `tem_ensaio_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Restrições para tabelas `tem_imagem`
--
ALTER TABLE `tem_imagem`
  ADD CONSTRAINT `tem_imagem_ibfk_1` FOREIGN KEY (`id_historia`) REFERENCES `ensaios` (`id_historia`),
  ADD CONSTRAINT `tem_imagem_ibfk_2` FOREIGN KEY (`id_imagem`) REFERENCES `imagem` (`id_imagem`);

--
-- Restrições para tabelas `tem_informacao`
--
ALTER TABLE `tem_informacao`
  ADD CONSTRAINT `tem_informacao_ibfk_1` FOREIGN KEY (`id_historia`) REFERENCES `ensaios` (`id_historia`),
  ADD CONSTRAINT `tem_informacao_ibfk_2` FOREIGN KEY (`id_info_ensaio`) REFERENCES `info_ensaio` (`id_info_ensaio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
