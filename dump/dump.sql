-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2017 at 09:37 PM
-- Server version: 10.1.25-MariaDB
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
-- Database: `musicplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `arte_afim`
--

CREATE TABLE `arte_afim` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `descricao` text NOT NULL,
  `autor` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `arte_afim_imagem`
--

CREATE TABLE `arte_afim_imagem` (
  `arte_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bebida`
--

CREATE TABLE `bebida` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `teor_alcoolico` float NOT NULL,
  `amadurecimento` varchar(155) DEFAULT NULL,
  `descricao` text NOT NULL,
  `safra` varchar(155) DEFAULT NULL,
  `tipo` varchar(155) DEFAULT NULL,
  `uva` varchar(155) DEFAULT NULL,
  `pais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bebida_imagem`
--

CREATE TABLE `bebida_imagem` (
  `bebida_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `composicao`
--

CREATE TABLE `composicao` (
  `id` int(11) NOT NULL,
  `titulo_completo` varchar(155) NOT NULL,
  `texto_informativo` text NOT NULL,
  `data_composicao` date NOT NULL,
  `pais_id` int(11) NOT NULL,
  `genero_id` int(11) NOT NULL,
  `tonalidade_id` int(11) NOT NULL,
  `partitura_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `composicao_compositor`
--

CREATE TABLE `composicao_compositor` (
  `composicao_id` int(11) NOT NULL,
  `compositor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `composicao_imagem`
--

CREATE TABLE `composicao_imagem` (
  `obra_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `composicao_usuario`
--

CREATE TABLE `composicao_usuario` (
  `composicao_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compositor`
--

CREATE TABLE `compositor` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(155) NOT NULL,
  `data_nascimento` date NOT NULL,
  `bio` text NOT NULL,
  `epoca_id` int(11) NOT NULL,
  `pais_nascimento_id` int(11) NOT NULL,
  `data_falecimento` date DEFAULT NULL,
  `pais_falecimento_id` int(11) DEFAULT NULL,
  `imagem_principal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compositor_imagem`
--

CREATE TABLE `compositor_imagem` (
  `compositor_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compositor_usuario`
--

CREATE TABLE `compositor_usuario` (
  `compositor_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epoca`
--

CREATE TABLE `epoca` (
  `id` int(11) NOT NULL,
  `descricao` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epoca_imagem`
--

CREATE TABLE `epoca_imagem` (
  `epoca_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epoca_usuario`
--

CREATE TABLE `epoca_usuario` (
  `epoca_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `descricao` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imagem`
--

CREATE TABLE `imagem` (
  `id` int(11) NOT NULL,
  `descricao` varchar(155) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marco_historico`
--

CREATE TABLE `marco_historico` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `descricao` text NOT NULL,
  `pais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marco_historico_imagem`
--

CREATE TABLE `marco_historico_imagem` (
  `marco_historico_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nome` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perfil`
--

INSERT INTO `perfil` (`id`, `descricao`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Table structure for table `tonalidade`
--

CREATE TABLE `tonalidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(155) NOT NULL,
  `cor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `email` varchar(155) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `perfil_id` int(11) NOT NULL,
  `genero` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `email`, `senha`, `data_nascimento`, `perfil_id`, `genero`, `status`) VALUES
(1, 'teste', 'teste', 'teste@teste.com', '698dc19d489c4e4db73e28a713eab07b', '2017-08-11', 1, 0, 1),
(3, 'Teste', 'Testando', 'teste123@teste.com', '698dc19d489c4e4db73e28a713eab07b', NULL, 2, 1, 1),
(4, 'aaa', 'bbb', 'teste1234@teste.com', '698dc19d489c4e4db73e28a713eab07b', NULL, 2, 1, 1),
(5, 'aaa', 'bbb', 'teste12345@teste.com', '698dc19d489c4e4db73e28a713eab07b', NULL, 2, 1, 1),
(6, 'teste', 'sobrenome', 'teste1@teste.com', '698dc19d489c4e4db73e28a713eab07b', NULL, 2, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arte_afim`
--
ALTER TABLE `arte_afim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arte_afim_imagem`
--
ALTER TABLE `arte_afim_imagem`
  ADD PRIMARY KEY (`arte_id`,`imagem_id`),
  ADD KEY `fk_arte_imagem_imagem1_idx` (`imagem_id`),
  ADD KEY `fk_arte_imagem_arte1_idx` (`arte_id`);

--
-- Indexes for table `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bebida_pais1_idx` (`pais_id`);

--
-- Indexes for table `bebida_imagem`
--
ALTER TABLE `bebida_imagem`
  ADD PRIMARY KEY (`bebida_id`,`imagem_id`),
  ADD KEY `fk_bebida_imagem_imagem1_idx` (`imagem_id`),
  ADD KEY `fk_bebida_imagem_bebida1_idx` (`bebida_id`);

--
-- Indexes for table `composicao`
--
ALTER TABLE `composicao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_composicao_pais1_idx` (`pais_id`),
  ADD KEY `fk_composicao_genero1_idx` (`genero_id`),
  ADD KEY `fk_composicao_tonalidade1_idx` (`tonalidade_id`);

--
-- Indexes for table `composicao_compositor`
--
ALTER TABLE `composicao_compositor`
  ADD PRIMARY KEY (`composicao_id`,`compositor_id`),
  ADD KEY `fk_composicao_compositor_compositor1_idx` (`compositor_id`),
  ADD KEY `fk_composicao_compositor_composicao1_idx` (`composicao_id`);

--
-- Indexes for table `composicao_imagem`
--
ALTER TABLE `composicao_imagem`
  ADD PRIMARY KEY (`obra_id`,`imagem_id`),
  ADD KEY `fk_obra_imagem_imagem1_idx` (`imagem_id`),
  ADD KEY `fk_obra_imagem_obra1_idx` (`obra_id`);

--
-- Indexes for table `composicao_usuario`
--
ALTER TABLE `composicao_usuario`
  ADD PRIMARY KEY (`composicao_id`,`usuario_id`),
  ADD KEY `fk_composicao_usuario_usuario1_idx` (`usuario_id`),
  ADD KEY `fk_composicao_usuario_composicao1_idx` (`composicao_id`);

--
-- Indexes for table `compositor`
--
ALTER TABLE `compositor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_compositor_epoca1_idx` (`epoca_id`),
  ADD KEY `fk_compositor_pais1_idx` (`pais_nascimento_id`),
  ADD KEY `fk_compositor_pais2_idx` (`pais_falecimento_id`);

--
-- Indexes for table `compositor_imagem`
--
ALTER TABLE `compositor_imagem`
  ADD PRIMARY KEY (`compositor_id`,`imagem_id`),
  ADD KEY `fk_compositor_imagem_imagem1_idx` (`imagem_id`),
  ADD KEY `fk_compositor_imagem_compositor1_idx` (`compositor_id`);

--
-- Indexes for table `compositor_usuario`
--
ALTER TABLE `compositor_usuario`
  ADD PRIMARY KEY (`compositor_id`,`usuario_id`),
  ADD KEY `fk_compositor_usuario_usuario1_idx` (`usuario_id`),
  ADD KEY `fk_compositor_usuario_compositor1_idx` (`compositor_id`);

--
-- Indexes for table `epoca`
--
ALTER TABLE `epoca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epoca_imagem`
--
ALTER TABLE `epoca_imagem`
  ADD PRIMARY KEY (`epoca_id`,`imagem_id`),
  ADD KEY `fk_epoca_imagem_imagem1_idx` (`imagem_id`),
  ADD KEY `fk_epoca_imagem_epoca1_idx` (`epoca_id`);

--
-- Indexes for table `epoca_usuario`
--
ALTER TABLE `epoca_usuario`
  ADD PRIMARY KEY (`epoca_id`,`usuario_id`),
  ADD KEY `fk_epoca_usuario_usuario1_idx` (`usuario_id`),
  ADD KEY `fk_epoca_usuario_epoca1_idx` (`epoca_id`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marco_historico`
--
ALTER TABLE `marco_historico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_marco_historico_pais1_idx` (`pais_id`);

--
-- Indexes for table `marco_historico_imagem`
--
ALTER TABLE `marco_historico_imagem`
  ADD PRIMARY KEY (`marco_historico_id`,`imagem_id`),
  ADD KEY `fk_marco_historico_imagem_imagem1_idx` (`imagem_id`),
  ADD KEY `fk_marco_historico_imagem_marco_historico1_idx` (`marco_historico_id`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tonalidade`
--
ALTER TABLE `tonalidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_usuario_perfil_idx` (`perfil_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arte_afim`
--
ALTER TABLE `arte_afim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `composicao`
--
ALTER TABLE `composicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `compositor`
--
ALTER TABLE `compositor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epoca`
--
ALTER TABLE `epoca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marco_historico`
--
ALTER TABLE `marco_historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tonalidade`
--
ALTER TABLE `tonalidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `arte_afim_imagem`
--
ALTER TABLE `arte_afim_imagem`
  ADD CONSTRAINT `fk_arte_imagem_arte1` FOREIGN KEY (`arte_id`) REFERENCES `arte_afim` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_arte_imagem_imagem1` FOREIGN KEY (`imagem_id`) REFERENCES `imagem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bebida`
--
ALTER TABLE `bebida`
  ADD CONSTRAINT `fk_bebida_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bebida_imagem`
--
ALTER TABLE `bebida_imagem`
  ADD CONSTRAINT `fk_bebida_imagem_bebida1` FOREIGN KEY (`bebida_id`) REFERENCES `bebida` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_bebida_imagem_imagem1` FOREIGN KEY (`imagem_id`) REFERENCES `imagem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `composicao`
--
ALTER TABLE `composicao`
  ADD CONSTRAINT `fk_composicao_genero1` FOREIGN KEY (`genero_id`) REFERENCES `genero` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_tonalidade1` FOREIGN KEY (`tonalidade_id`) REFERENCES `tonalidade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `composicao_compositor`
--
ALTER TABLE `composicao_compositor`
  ADD CONSTRAINT `fk_composicao_compositor_composicao1` FOREIGN KEY (`composicao_id`) REFERENCES `composicao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_compositor_compositor1` FOREIGN KEY (`compositor_id`) REFERENCES `compositor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `composicao_imagem`
--
ALTER TABLE `composicao_imagem`
  ADD CONSTRAINT `fk_obra_imagem_imagem1` FOREIGN KEY (`imagem_id`) REFERENCES `imagem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_obra_imagem_obra1` FOREIGN KEY (`obra_id`) REFERENCES `composicao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `composicao_usuario`
--
ALTER TABLE `composicao_usuario`
  ADD CONSTRAINT `fk_composicao_usuario_composicao1` FOREIGN KEY (`composicao_id`) REFERENCES `composicao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_usuario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compositor`
--
ALTER TABLE `compositor`
  ADD CONSTRAINT `fk_compositor_epoca1` FOREIGN KEY (`epoca_id`) REFERENCES `epoca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compositor_pais1` FOREIGN KEY (`pais_nascimento_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compositor_pais2` FOREIGN KEY (`pais_falecimento_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compositor_imagem`
--
ALTER TABLE `compositor_imagem`
  ADD CONSTRAINT `fk_compositor_imagem_compositor1` FOREIGN KEY (`compositor_id`) REFERENCES `compositor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compositor_imagem_imagem1` FOREIGN KEY (`imagem_id`) REFERENCES `imagem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compositor_usuario`
--
ALTER TABLE `compositor_usuario`
  ADD CONSTRAINT `fk_compositor_usuario_compositor1` FOREIGN KEY (`compositor_id`) REFERENCES `compositor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compositor_usuario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `epoca_imagem`
--
ALTER TABLE `epoca_imagem`
  ADD CONSTRAINT `fk_epoca_imagem_epoca1` FOREIGN KEY (`epoca_id`) REFERENCES `epoca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_epoca_imagem_imagem1` FOREIGN KEY (`imagem_id`) REFERENCES `imagem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `epoca_usuario`
--
ALTER TABLE `epoca_usuario`
  ADD CONSTRAINT `fk_epoca_usuario_epoca1` FOREIGN KEY (`epoca_id`) REFERENCES `epoca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_epoca_usuario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marco_historico`
--
ALTER TABLE `marco_historico`
  ADD CONSTRAINT `fk_marco_historico_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marco_historico_imagem`
--
ALTER TABLE `marco_historico_imagem`
  ADD CONSTRAINT `fk_marco_historico_imagem_imagem1` FOREIGN KEY (`imagem_id`) REFERENCES `imagem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_marco_historico_imagem_marco_historico1` FOREIGN KEY (`marco_historico_id`) REFERENCES `marco_historico` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
