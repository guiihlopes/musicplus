-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Jun-2018 às 22:30
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
-- Estrutura da tabela `arte_afim`
--

CREATE TABLE `arte_afim` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `descricao` text NOT NULL,
  `autor` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arte_afim_imagem`
--

CREATE TABLE `arte_afim_imagem` (
  `arte_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebida`
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
-- Estrutura da tabela `bebida_imagem`
--

CREATE TABLE `bebida_imagem` (
  `bebida_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `composicao`
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
-- Extraindo dados da tabela `composicao`
--

INSERT INTO `composicao` (`id`, `titulo_completo`, `texto_informativo`, `data_composicao`, `pais_id`, `genero_id`, `tonalidade_id`, `partitura_url`, `composicao_url`, `compositor_id`) VALUES
(9, 'Sinfonia n.º 5 em Dó menor Op. 67', 'A Sinfonia n.º 5 em Dó menor Op. 67, dita Sinfonia do Destino, [1][2] de Ludwig van Beethoven, escrita entre 1804 e 1808, é uma das composições mais populares e mais conhecidas em todo repertório da Música Erudita Europeia, além de ser uma das sinfonias mais executadas nos tempos atuais.[3]\r\n\r\nTrata-se da primeira sinfonia do autor composta em tonalidade menor, o que só voltaria a acontecer em 1824 com a Sinfonia n.º 9, em Ré menor op. 125. A Sinfonia n.º5 em Dó menor ainda hoje é considerada como um \"monumento\" da criação artística.\r\n\r\nOs quatro movimentos caracterizam-se pela homogeneidade orquestral, sendo, ao mesmo tempo, um exemplo de alternância: o primeiro movimento, revelando grande tensão, denunciada pelas cordas e elevada a um dramatismo extremo; o segundo movimento revela solenidade, numa marcha fúnebre que se eleva pela sua emoção e beleza; o terceiro andamento, uma crispação; o quarto movimento expressa triunfo e magnificência.', '1808-12-22', 17, 2, 1, '14', 'https://r5---sn-8p8v-bg0es.googlevideo.com/videoplayback?c=WEB&expire=1530411424&key=cms1&keepalive=yes&ei=QOU3W4WuEI-OD4a2megP&source=youtube&signature=3774030BFAA6B3BA7B0C594B2E620BC5F111D0D1.8403951EE9ED028434E21951F11A0635D2B9A64D&clen=33255757&fvip=5&gir=yes&ipbits=0&lmt=1509116690916231&itag=140&fexp=23709359&sparams=clen,dur,ei,expire,gir,id,initcwndbps,ip,ipbits,itag,keepalive,lmt,mime,mip,mm,mn,ms,mv,pcm2cms,pl,requiressl,source,usequic&ip=138.197.175.98&id=o-AAXAsOG3uSrmmyA_CWYJLA6dYWl8KPLynv6UtHWxK-vp&dur=2093.812&mime=audio/mp4&requiressl=yes&pl=24&cms_redirect=yes&mip=201.27.75.13&mm=31&mn=sn-8p8v-bg0es&ms=au&mt=1530389738&mv=m&pcm2cms=yes&usequic=no', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `composicao_imagem`
--

CREATE TABLE `composicao_imagem` (
  `obra_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `composicao_usuario`
--

CREATE TABLE `composicao_usuario` (
  `composicao_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compositor`
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
-- Extraindo dados da tabela `compositor`
--

INSERT INTO `compositor` (`id`, `nome_completo`, `data_nascimento`, `bio`, `epoca_id`, `pais_nascimento_id`, `data_falecimento`, `pais_falecimento_id`, `imagem_principal`) VALUES
(9, 'Johann Sebastian Bach', '1965-03-31', 'Johann Sebastian Bach (Eisenach, 21 de março de 1685 — Leipzig, 28 de julho de 1750) foi um compositor, cravista, Kapellmeister, regente, organista, professor, violinista e violista oriundo do Sacro Império Romano-Germânico, atual Alemanha.\r\n\r\nNascido numa família de longa tradição musical, cedo mostrou possuir talento e logo tornou-se um músico completo. Estudante incansável, adquiriu um vasto conhecimento da música europeia de sua época e das gerações anteriores. Desempenhou vários cargos em cortes e igrejas alemãs, mas suas funções mais destacadas foram a de Kantor da Igreja de São Tomás e Diretor Musical da cidade de Leipzig, onde desenvolveu a parte final e mais importante de sua carreira. Absorvendo inicialmente o grande repertório de música contrapontística germânica como base de seu estilo, recebeu mais tarde a influência italiana e francesa, através das quais sua obra se enriqueceu e transformou, realizando uma síntese original de uma multiplicidade de tendências. Praticou quase todos os gêneros musicais conhecidos em seu tempo, com a notável exceção da ópera, embora suas cantatas maduras revelem bastante influência desta que foi uma das formas mais populares do período Barroco.', 3, 4, '1750-07-28', 4, '10'),
(10, 'Ludwig Van beethoven', '1770-12-01', 'Ludwig van Beethoven (Bonn, batizado em 17 de dezembro de 1770 — Viena, 26 de março de 1827) foi um compositor alemão, do período de transição entre o Classicismo (século XVIII) e o Romantismo (século XIX). É considerado um dos pilares da música ocidental, pelo incontestável desenvolvimento, tanto da linguagem como do conteúdo musical demonstrado nas suas obras, permanecendo como um dos compositores mais respeitados e mais influentes de todos os tempos. \"O resumo de sua obra é a liberdade\", observou o crítico alemão Paul Bekker (1882-1937), \"a liberdade política, a liberdade artística do indivíduo, sua liberdade de escolha, de credo e a liberdade individual em todos os aspectos da vida\".', 5, 4, '1827-03-26', 17, '11'),
(11, 'Wolfgang Amadeus Mozart', '1756-01-27', 'Wolfgang Amadeus Mozart (AFI: [?v?lfga? ama?de?s ?mo?tsa?t]; batizado Johannes Chrysostomus Wolfgangus Theophilus Mozart[nota 1]; Salzburgo, 27 de janeiro de 1756 – Viena, 5 de dezembro de 1791) foi um prolífico e influente compositor austríaco do período clássico.\r\n\r\nMozart mostrou uma habilidade musical prodigiosa desde sua infância. Já competente nos instrumentos de teclado e no violino, começou a compor aos cinco anos de idade, e passou a se apresentar para a realeza europeia, maravilhando a todos com seu talento precoce. Chegando à adolescência, foi contratado como músico da corte em Salzburgo, porém as limitações da vida musical na cidade o impeliram a buscar um novo cargo em outras cortes, mas sem sucesso. Ao visitar Viena em 1781 com seu patrão, desentendeu-se com ele e solicitou demissão, optando por ficar na capital, onde, ao longo do resto de sua vida, conquistou fama, porém pouca estabilidade financeira. Seus últimos anos viram surgir algumas de suas sinfonias, concertos e óperas mais conhecidos, além de seu Requiem. As circunstâncias de sua morte prematura deram origem a diversas lendas. Deixou uma esposa, Constanze, e dois filhos.\r\n\r\nFoi autor de mais de seiscentas obras, muitas delas referenciais na música sinfônica, concertante, operística, coral, pianística e camerística. Sua produção foi louvada por todos os críticos de sua época, embora muitos a considerassem excessivamente complexa e difícil, e estendeu sua influência sobre vários outros compositores ao longo de todo o século XIX e início do século XX. Hoje Mozart é visto pela crítica especializada como um dos maiores compositores do ocidente, conseguiu conquistar grande prestígio mesmo entre os leigos, e sua imagem se tornou um ícone popular.', 4, 17, '1791-12-05', 17, '12'),
(12, 'Piotr Ilitch Tchaikovsky', '1840-05-07', 'Piotr Ilitch Tchaikovsky (em russo: Loudspeaker.svg? ???? ?????? ???????????, por vezes, traduzido Pyotr Ilyich Tchaikowsky); (Kamsko-Wotkinski Sawod, actual Tchaikovsky, 7 de maio de 1840 — São Petersburgo, 6 de novembro de 1893) foi um compositor romântico russo que compôs géneros como sinfonias, concertos, óperas, ballets, para música de câmara e obras para coro para liturgias da Igreja Ortodoxa Russa. Algumas das suas obras encontram-se entre as mais populares do repertório erudito. Este foi o primeiro compositor russo a conquistar fama internacional, tendo sido maestro convidado no final da sua carreira pelos Estados Unidos e Europa. Como exemplo pode considerar-se o concerto inaugural do Carnegie Hall de Nova Iorque, em 1891. Tchaikovsky foi honrado em 1884 com uma pensão vitalícia pelo Imperador Alexandre III.\r\n\r\nTchaikovsky foi educado para ter uma carreira como funcionário público. Na sua época as oportunidades para se ter uma carreira musical (na Rússia) eram escassas e não existia um sistema público de educação musical. Quando surgiu a oportunidade, ingressou no Conservatório de São Petersburgo, onde se graduou em 1865.\r\n\r\nA sua vida foi preenchida por crises pessoais e depressões. Estas crises advém do facto de a sua mãe ter falecido prematuramente e do colapso da sua relação com a viúva Nadezhda von Meck. A sua possivel homossexualidade foi mantida em sigilo por anos. A sua morte prematura aos 53 anos de idade é atribuída à cólera, mas especula-se um possível suicídio.\r\n\r\nEmbora não faça parte do chamado Grupo dos Cinco (Mussorgsky, César Cui, Rimsky-Korsakov, Balakirev e Borodin) composto por compositores nacionalistas russos, a sua música tornou-se conhecida e admirada pelo seu carácter distintamente russo, bem como pelas suas ricas harmonias e vivas melodias. As suas obras, no entanto, foram muito mais ocidentalizadas que as de seus compatriotas, uma vez que utilizava elementos internacionais em simultâneo com melodias populares nacionalistas russas.', 5, 193, '1893-11-06', 193, '13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compositor_imagem`
--

CREATE TABLE `compositor_imagem` (
  `compositor_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compositor_usuario`
--

CREATE TABLE `compositor_usuario` (
  `compositor_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `epoca`
--

CREATE TABLE `epoca` (
  `id` int(11) NOT NULL,
  `descricao` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `epoca`
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
-- Estrutura da tabela `epoca_imagem`
--

CREATE TABLE `epoca_imagem` (
  `epoca_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `epoca_usuario`
--

CREATE TABLE `epoca_usuario` (
  `epoca_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `descricao` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `genero`
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
-- Estrutura da tabela `imagemanager`
--

CREATE TABLE `imagemanager` (
  `id` int(10) UNSIGNED NOT NULL,
  `fileName` varchar(128) NOT NULL,
  `fileHash` varchar(32) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `createdBy` int(10) UNSIGNED DEFAULT NULL,
  `modifiedBy` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagemanager`
--

INSERT INTO `imagemanager` (`id`, `fileName`, `fileHash`, `created`, `modified`, `createdBy`, `modifiedBy`) VALUES
(10, '250px-Johann-Sebastian-Bach.jpg', 'C27t9kH2mCyoVJIiWi94Y2TPF9qOLt3Q', '2018-06-30 17:04:59', '2018-06-30 17:04:59', NULL, NULL),
(11, '220px-Beethoven.jpg', 'mBMUfDboPY-4hQoikQ48gxgWkxne4GKD', '2018-06-30 17:07:08', '2018-06-30 17:07:08', NULL, NULL),
(12, '250px-Wolfgang-amadeus-mozart-1.jpg', 'B1snwqKi-UPruq8X6m7uY5Myi343o3Lv', '2018-06-30 17:10:21', '2018-06-30 17:10:21', NULL, NULL),
(13, '230px-Peter-Tschaikowski.jpg', 'fFw7TeJ2h5GRUBpENTWy6PTzrmMlqEdI', '2018-06-30 17:12:22', '2018-06-30 17:12:22', NULL, NULL),
(14, '220px-Beethoven-Deckblatt.png', 'UkvLJi3CbZij5pPBWV1CisdQ23NmMyqZ', '2018-06-30 17:15:22', '2018-06-30 17:15:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marco_historico`
--

CREATE TABLE `marco_historico` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `descricao` text NOT NULL,
  `pais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marco_historico`
--

INSERT INTO `marco_historico` (`id`, `data`, `descricao`, `pais_id`) VALUES
(5, '1808-12-05', 'Marco histórico teste', 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marco_historico_imagem`
--

CREATE TABLE `marco_historico_imagem` (
  `marco_historico_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marco_historico_imagem`
--

INSERT INTO `marco_historico_imagem` (`marco_historico_id`, `imagem_id`) VALUES
(5, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1529014974),
('m160622_085710_create_ImageManager_table', 1529015020),
('m170223_113221_addBlameableBehavior', 1529015020);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nome` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pais`
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
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `descricao`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tonalidade`
--

CREATE TABLE `tonalidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(155) NOT NULL,
  `cor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tonalidade`
--

INSERT INTO `tonalidade` (`id`, `nome`, `cor`) VALUES
(1, 'C', 'red'),
(2, 'C#', 'orange'),
(3, 'G', 'yellow');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
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
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `email`, `senha`, `data_nascimento`, `perfil_id`, `genero`, `status`) VALUES
(1, 'teste', 'teste', 'teste@teste.com', '698dc19d489c4e4db73e28a713eab07b', '2017-08-11', 1, 0, 1),
(3, 'Teste', 'Testando', 'teste123@teste.com', '698dc19d489c4e4db73e28a713eab07b', '2000-02-08', 2, 1, 1),
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
-- Indexes for table `imagemanager`
--
ALTER TABLE `imagemanager`
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
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `composicao`
--
ALTER TABLE `composicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `compositor`
--
ALTER TABLE `compositor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `imagemanager`
--
ALTER TABLE `imagemanager`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `marco_historico`
--
ALTER TABLE `marco_historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Limitadores para a tabela `arte_afim_imagem`
--
ALTER TABLE `arte_afim_imagem`
  ADD CONSTRAINT `fk_arte_imagem_arte1` FOREIGN KEY (`arte_id`) REFERENCES `arte_afim` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `bebida`
--
ALTER TABLE `bebida`
  ADD CONSTRAINT `fk_bebida_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `bebida_imagem`
--
ALTER TABLE `bebida_imagem`
  ADD CONSTRAINT `fk_bebida_imagem_bebida1` FOREIGN KEY (`bebida_id`) REFERENCES `bebida` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `composicao`
--
ALTER TABLE `composicao`
  ADD CONSTRAINT `composicao_ibfk_1` FOREIGN KEY (`compositor_id`) REFERENCES `compositor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_genero1` FOREIGN KEY (`genero_id`) REFERENCES `genero` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_tonalidade1` FOREIGN KEY (`tonalidade_id`) REFERENCES `tonalidade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `composicao_imagem`
--
ALTER TABLE `composicao_imagem`
  ADD CONSTRAINT `fk_obra_imagem_obra1` FOREIGN KEY (`obra_id`) REFERENCES `composicao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `composicao_usuario`
--
ALTER TABLE `composicao_usuario`
  ADD CONSTRAINT `fk_composicao_usuario_composicao1` FOREIGN KEY (`composicao_id`) REFERENCES `composicao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_composicao_usuario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `compositor`
--
ALTER TABLE `compositor`
  ADD CONSTRAINT `fk_compositor_epoca1` FOREIGN KEY (`epoca_id`) REFERENCES `epoca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compositor_pais1` FOREIGN KEY (`pais_nascimento_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compositor_pais2` FOREIGN KEY (`pais_falecimento_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `compositor_imagem`
--
ALTER TABLE `compositor_imagem`
  ADD CONSTRAINT `fk_compositor_imagem_compositor1` FOREIGN KEY (`compositor_id`) REFERENCES `compositor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `compositor_usuario`
--
ALTER TABLE `compositor_usuario`
  ADD CONSTRAINT `fk_compositor_usuario_compositor1` FOREIGN KEY (`compositor_id`) REFERENCES `compositor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_compositor_usuario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `epoca_imagem`
--
ALTER TABLE `epoca_imagem`
  ADD CONSTRAINT `fk_epoca_imagem_epoca1` FOREIGN KEY (`epoca_id`) REFERENCES `epoca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `epoca_usuario`
--
ALTER TABLE `epoca_usuario`
  ADD CONSTRAINT `fk_epoca_usuario_epoca1` FOREIGN KEY (`epoca_id`) REFERENCES `epoca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_epoca_usuario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `marco_historico`
--
ALTER TABLE `marco_historico`
  ADD CONSTRAINT `fk_marco_historico_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `marco_historico_imagem`
--
ALTER TABLE `marco_historico_imagem`
  ADD CONSTRAINT `fk_marco_historico_imagem_marco_historico1` FOREIGN KEY (`marco_historico_id`) REFERENCES `marco_historico` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
