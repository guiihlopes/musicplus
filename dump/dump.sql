-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2018 at 10:15 PM
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

--
-- Dumping data for table `arte_afim`
--

INSERT INTO `arte_afim` (`id`, `data`, `descricao`, `autor`) VALUES
(1, '0000-00-00', 'Lorem ipsum 1234', 'Autor 1234'),
(2, '0000-00-00', 'Atque nihil est in at magni ut nemo nisi quibusdam consectetur ut laudantium', 'Iste aute hic omnis in aut adipisci fugiat blanditiis et');

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

--
-- Dumping data for table `bebida`
--

INSERT INTO `bebida` (`id`, `nome`, `data`, `teor_alcoolico`, `amadurecimento`, `descricao`, `safra`, `tipo`, `uva`, `pais_id`) VALUES
(1, 'vinho tinto', '0000-00-00', 50, 'Consectetur natus ipsam do porro quo accusantium eos aute autem ipsum et earum unde nihil sit', 'Aliquip aut magni aut beatae consequuntur in aliqua Itaque ad', 'Sunt pariatur Suscipit qui repudiandae laudantium rerum ea', 'Adipisicing est nostrud ex aliqua Quia in Nam aut magnam natus minim voluptatem tempora non', 'Lorem architecto tempor ea aut numquam et molestiae molestiae est cupidatat duis odit', 46),
(2, 'Sunt perferendis elit aut fugit quisquam in officia impedit amet do repudiandae ut consequatur i', '0000-00-00', 50, 'Dolore nulla non duis magnam et optio laboriosam excepturi', 'Nostrum et placeat minus dignissimos tempora odit voluptatem eveniet ad id vel cum unde veritatis', 'Eum totam labore ut beatae obcaecati quaerat deleniti doloribus in molestiae rerum enim eos unde et dolorem', 'Quia dolores amet placeat tempore culpa facere qui rerum esse tempora hic suscipit voluptate culpa aut explicabo Aut voluptatem', 'Tenetur itaque rerum dolore itaque Nam quia nulla quisquam quas dolore velit facilis ipsam recusandae Animi nulla', 74);

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
  `partitura_url` varchar(255) DEFAULT NULL,
  `composicao_url` text NOT NULL,
  `compositor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `composicao`
--

INSERT INTO `composicao` (`id`, `titulo_completo`, `texto_informativo`, `data_composicao`, `pais_id`, `genero_id`, `tonalidade_id`, `partitura_url`, `composicao_url`, `compositor_id`) VALUES
(2, 'Musica 14235', 'fhgviudjsokrneihuviejowkpfk new uifojekow fijewb fuejwik ewb fejwkofpewifuhiewfjikw efnwehnfj iekwofewpkijfouhiewfjoeikwofpew bfweyhufjiekwopfiejwouibgwyfhijewikpo fewhfiwufjoekpw', '2017-11-01', 21, 4, 1, 'images/p1.jpg', 'http://flatfull.com/themes/assets/musics/Miaow-07-Bubble.mp3', 3),
(3, 'teste', 'fhgviudjsokrneihuviejowkpfk new uifojekow fijewb fuejwik ewb fejwkofpewifuhiewfjikw efnwehnfj iekwofewpkijfouhiewfjoeikwofpew bfweyhufjiekwopfiejwouibgwyfhijewikpo fewhfiwufjoekpw', '2017-11-01', 21, 4, 2, 'images/p1.jpg', 'http://flatfull.com/themes/assets/musics/Miaow-07-Bubble.mp3', 3),
(4, 'Musica de teste', 'lorem ipsum dolor sit amet consectur', '0000-00-00', 2, 3, 1, NULL, 'https://dragon-g3.sscdn.co/palcomp3/0/e/a/3/brunofelix_voodookings-faixa-9-859bb4.mp3', 3),
(5, 'Aliquam et eligendi iure id voluptate ipsa quos asperiores impedit iusto eos sint excepturi Nam cillum repudiandae in', 'Quam rem ea omnis tempor velit tempora non delectus ullam corporis ipsa excepturi est aperiam qui maxime', '0000-00-00', 121, 8, 2, NULL, 'https://pegasus-g4.sscdn.co/palcomp3/2/b/5/8/brunofelix_voodookings-bruno-felix-thursday-in-blues-d47223.mp3', 3),
(6, 'Apresentacao', 'fhdsjfkdsfsd', '0000-00-00', 6, 4, 3, NULL, 'https://pegasus-g4.sscdn.co/palcomp3/2/b/5/8/brunofelix_voodookings-bruno-felix-thursday-in-blues-d47223.mp3', 5);

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

--
-- Dumping data for table `compositor`
--

INSERT INTO `compositor` (`id`, `nome_completo`, `data_nascimento`, `bio`, `epoca_id`, `pais_nascimento_id`, `data_falecimento`, `pais_falecimento_id`, `imagem_principal`) VALUES
(2, 'Compositor 2', '0000-00-00', 'Lorem ipsum', 2, 46, NULL, NULL, 'uploads/f652d7cbda0a63cdc9504d347da7058d.png'),
(3, 'Compositor 3', '0000-00-00', 'Lorem ipsum', 3, 4, NULL, NULL, 'uploads/734a2b9d7929280331ee9432141fcb5c.png'),
(4, 'Compositor 4', '0000-00-00', 'Non doloribus natus do rerum consequatur', 7, 62, NULL, 129, 'uploads/734a2b9d7929280331ee9432141fcb5c.png'),
(5, 'Compositor 5', '0000-00-00', 'kfdskfdks', 5, 5, NULL, NULL, 'uploads/f652d7cbda0a63cdc9504d347da7058d.png');

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

--
-- Dumping data for table `compositor_usuario`
--

INSERT INTO `compositor_usuario` (`compositor_id`, `usuario_id`) VALUES
(3, 3),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `epoca`
--

CREATE TABLE `epoca` (
  `id` int(11) NOT NULL,
  `descricao` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epoca`
--

INSERT INTO `epoca` (`id`, `descricao`) VALUES
(1, 'Medieval'),
(2, 'Renascença'),
(3, 'Barroco'),
(4, 'Clássico'),
(5, 'Romântico'),
(6, 'Impressionismo'),
(7, 'Moderno'),
(8, 'Contemporâneo');

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

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`id`, `descricao`) VALUES
(1, 'Concerto'),
(2, 'Sinfonia'),
(3, 'Sonata'),
(4, 'Quarteto'),
(5, 'Quinteto'),
(6, 'Sexteto'),
(7, 'Opera'),
(8, 'Abertura');

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

--
-- Dumping data for table `marco_historico`
--

INSERT INTO `marco_historico` (`id`, `data`, `descricao`, `pais_id`) VALUES
(1, '0000-00-00', 'Marco histórico 123456', 16);

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

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`id`, `nome`) VALUES
(1, 'Afeganistão'),
(2, 'África do Sul'),
(3, 'Albânia'),
(4, 'Alemanha'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antártica'),
(9, 'Antígua e Barbuda'),
(10, 'Antilhas Holandesas'),
(11, 'Arábia Saudita'),
(12, 'Argélia'),
(13, 'Argentina'),
(14, 'Armênia'),
(15, 'Aruba'),
(16, 'Austrália'),
(17, 'Áustria'),
(18, 'Azerbaijão'),
(19, 'Bahamas'),
(20, 'Bangladesh'),
(21, 'Barbados'),
(22, 'Barein'),
(23, 'Belarus'),
(24, 'Bélgica'),
(25, 'Belize'),
(26, 'Benin'),
(27, 'Bermuda'),
(28, 'Bolívia'),
(29, 'Bósnia e Herzegovina'),
(30, 'Botswana'),
(31, 'Brasil\"'),
(32, 'Brunei Darussalém'),
(33, 'Bulgária'),
(34, 'Burkina Fasso'),
(35, 'Burundi'),
(36, 'Butão'),
(37, 'Cabo Verde'),
(38, 'Camarões'),
(39, 'Camboja'),
(40, 'Canadá'),
(41, 'Catar'),
(42, 'Cazaquistão'),
(43, 'Chade'),
(44, 'Chile'),
(45, 'China'),
(46, 'Chipre'),
(47, 'Cidade do Vaticano'),
(48, 'Cingapura'),
(49, 'Colômbia'),
(50, 'Congo (Brazzaville)'),
(51, 'Congo (Kinshasa)'),
(52, 'Coréia do Norte'),
(53, 'Coréia do Sul'),
(54, 'Costa do Marfim'),
(55, 'Costa Rica'),
(56, 'Croácia'),
(57, 'Cuba'),
(58, 'Dinamarca'),
(59, 'Djibuti'),
(60, 'Dominica'),
(61, 'Egito'),
(62, 'El Salvador'),
(63, 'Emirados Árabes Unidos'),
(64, 'Equador'),
(65, 'Eritréia'),
(66, 'Eslováquia'),
(67, 'Eslovênia'),
(68, 'Espanha'),
(69, 'Estados Unidos'),
(70, 'Estônia'),
(71, 'Etiópia'),
(72, 'Fiji'),
(73, 'Filipinas'),
(74, 'Finlândia'),
(75, 'França'),
(76, 'França Metropolitana'),
(77, 'Gabão'),
(78, 'Gâmbia'),
(79, 'Gana'),
(80, 'Geórgia'),
(81, 'Geórgia do Sul e Ilhas Sandwich'),
(82, 'Gibraltar'),
(83, 'Granada'),
(84, 'Grécia'),
(85, 'Groelândia'),
(86, 'Guadalupe'),
(87, 'Guam'),
(88, 'Guatemala'),
(89, 'Guiana'),
(90, 'Guiana Francesa'),
(91, 'Guiné'),
(92, 'Guiné Equatorial'),
(93, 'Guiné-Bissau'),
(94, 'Haiti'),
(95, 'Holanda'),
(96, 'Honduras'),
(97, 'Hong Kong'),
(98, 'Hungria'),
(99, 'Iêmen'),
(100, 'Ilha Bouvet'),
(101, 'Ilha Norfolk'),
(102, 'Ilha Reunião'),
(103, 'Ilhas Cayman'),
(104, 'Ilhas Christmas'),
(105, 'Ilhas Cocos'),
(106, 'Ilhas Comores'),
(107, 'Ilhas Cook'),
(108, 'Ilhas Falkland (Malvinas)'),
(109, 'Ilhas Feroé'),
(110, 'Ilhas Heard e Mcdonald'),
(111, 'Ilhas Marianas do Norte'),
(112, 'Ilhas Marshall'),
(113, 'Ilhas Salomão'),
(114, 'Ilhas Svalbard e Jan Mayen'),
(115, 'Ilhas Turks e Caicos'),
(116, 'Ilhas Virgens Americanas'),
(117, 'Ilhas Virgens Britânicas'),
(118, 'Ilhas Wallis e Futuna'),
(119, 'Índia'),
(120, 'Indonésia'),
(121, 'Irã'),
(122, 'Iraque'),
(123, 'Irlanda'),
(124, 'Islândia'),
(125, 'Israel'),
(126, 'Itália'),
(127, 'Jamaica'),
(128, 'Japão'),
(129, 'Jordânia'),
(130, 'Kiribati'),
(131, 'Kuwait'),
(132, 'Laos'),
(133, 'Lesoto'),
(134, 'Letônia'),
(135, 'Líbano'),
(136, 'Libéria'),
(137, 'Líbia'),
(138, 'Liechtenstein'),
(139, 'Lituânia'),
(140, 'Luxemburgo'),
(141, 'Macau'),
(142, 'Macedônia'),
(143, 'Madagascar'),
(144, 'Malásia'),
(145, 'Malavi'),
(146, 'Maldivas'),
(147, 'Mali'),
(148, 'Malta'),
(149, 'Marrocos'),
(150, 'Martinica'),
(151, 'Maurício'),
(152, 'Mauritânia'),
(153, 'Mayotte'),
(154, 'México'),
(155, 'Micronésia'),
(156, 'Moçambique'),
(157, 'Moldávia'),
(158, 'Mônaco'),
(159, 'Mongólia'),
(160, 'Montenegro'),
(161, 'Montserrat'),
(162, 'Myanma'),
(163, 'Namíbia'),
(164, 'Nauru'),
(165, 'Nepal'),
(166, 'Nicarágua'),
(167, 'Níger'),
(168, 'Nigéria'),
(169, 'Niue'),
(170, 'Noruega'),
(171, 'Nova Caledônia'),
(172, 'Nova Zelândia'),
(173, 'Omã'),
(174, 'Palau'),
(175, 'Panamá'),
(176, 'Papua-Nova Guiné'),
(177, 'Paquistão'),
(178, 'Paraguai'),
(179, 'Peru'),
(180, 'Pitcairn'),
(181, 'Polinésia Francesa'),
(182, 'Polônia'),
(183, 'Porto Rico'),
(184, 'Portugal'),
(185, 'Quênia'),
(186, 'Quirguistão'),
(187, 'Reino Unido'),
(188, 'República Centro-Africana'),
(189, 'República Dominicana'),
(190, 'República Tcheca'),
(191, 'Romênia'),
(192, 'Ruanda'),
(193, 'Russia'),
(194, 'Saara Ocidental'),
(195, 'Saint Kitts e Nevis'),
(196, 'Saint Pierre e Miquelon'),
(197, 'Samoa'),
(198, 'Samoa Americana'),
(199, 'Santa Helena'),
(200, 'Santa Lúcia'),
(201, 'São Marino'),
(202, 'São Tomé e Príncipe'),
(203, 'São Vicente e Granadinas'),
(204, 'Senegal'),
(205, 'Serra Leoa'),
(206, 'Sérvia'),
(207, 'Seychelles'),
(208, 'Síria'),
(209, 'Somália'),
(210, 'Sri Lanka'),
(211, 'Suazilândia'),
(212, 'Sudão'),
(213, 'Suécia'),
(214, 'Suíça'),
(215, 'Suriname'),
(216, 'Tadjiquistão'),
(217, 'Tailândia'),
(218, 'Taiwan'),
(219, 'Tanzânia'),
(220, 'Territórios Britânicos do Oceano Índico'),
(221, 'Territórios Franceses do Sul'),
(222, 'Territórios Insulares dos Estados Unidos'),
(223, 'Timor Oriental'),
(224, 'Togo'),
(225, 'Tokelau'),
(226, 'Tonga'),
(227, 'Trinidad e Tobago'),
(228, 'Tunísia'),
(229, 'Turcomenistão'),
(230, 'Turquia'),
(231, 'Tuvalu'),
(232, 'Ucrânia'),
(233, 'Uganda'),
(234, 'Uruguai'),
(235, 'Uzbequistão'),
(236, 'Vanuatu'),
(237, 'Venezuela'),
(238, 'Vietnã'),
(239, 'Zâmbia'),
(240, 'Zimbabwe');

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

--
-- Dumping data for table `tonalidade`
--

INSERT INTO `tonalidade` (`id`, `nome`, `cor`) VALUES
(1, 'C', 'red'),
(2, 'C#', 'orange'),
(3, 'G', 'yellow');

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
(6, 'teste', 'sobrenome', 'teste1@teste.com', '698dc19d489c4e4db73e28a713eab07b', NULL, 2, 0, 1),
(7, 'Apresentação', 'Teste', 'nada@nada.com', 'a77b4f006a4994d245a12247b8e4082c', NULL, 2, 1, 1),
(8, 'apresentacao', 'pre banca', 'banca@banca.com', '33284cfe03da16025c9641fb5dc03063', NULL, 2, 1, 1);

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
  ADD KEY `fk_composicao_tonalidade1_idx` (`tonalidade_id`),
  ADD KEY `compositor_id` (`compositor_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `composicao`
--
ALTER TABLE `composicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `compositor`
--
ALTER TABLE `compositor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `epoca`
--
ALTER TABLE `epoca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marco_historico`
--
ALTER TABLE `marco_historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tonalidade`
--
ALTER TABLE `tonalidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  ADD CONSTRAINT `composicao_ibfk_1` FOREIGN KEY (`compositor_id`) REFERENCES `compositor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_genero1` FOREIGN KEY (`genero_id`) REFERENCES `genero` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_tonalidade1` FOREIGN KEY (`tonalidade_id`) REFERENCES `tonalidade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
