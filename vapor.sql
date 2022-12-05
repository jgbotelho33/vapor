-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 29-Nov-2022 às 01:47
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vapor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `cpf`, `email`, `senha`) VALUES
(1, 'Matheus de Barros Fagionato', '42381546812', 'mdbf42@gmail.com', 'teste1'),
(2, 'Roberto Arnaldo', '80583687091', 'mdbf43@gmail.com', 'teste2'),
(3, 'Pedro Henrique Renosto Cardoso', '73030876055', 'pedro.renosto100@gmail.com', 'teste3'),
(4, 'Seu Cebola', '07924654070', 'mdbf45@gmail.com', 'teste4'),
(5, 'Ronaldo Fenômeno', '01547105046', 'mdbf46@gmail.com', 'teste5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `armazenadas`
--

CREATE TABLE `armazenadas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `armazenadas`
--

INSERT INTO `armazenadas` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(23, 'gsdgdsg', 'pedro.renosto100@gmail.com', 'sugestao', 'tsgsdg'),
(24, 'gfhfdhfd', 'pedro.renosto100@gmail.com', 'elogio', 'hgdgd'),
(25, 'Superte', 'superte@hotmail.com', 'elogio', 'Bom trabalho'),
(26, 'Suporte ', 'suporte@hotmail.com', 'elogio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra justo sed magna lobortis, sit amet auctor nulla accumsan. Sed commodo tortor et lorem dictum molestie at non mi. Ut ac finibus dui. Sed pellentesque lectus id ipsum porttitor semper. Donec eget commodo eros. Cras non felis diam. Quisque mollis luctus tincidunt. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi congue mi in lacus efficitur molestie. Curabitur rhoncus neque turpis, id tempus eros semper et. Donec ornare elit sem, sit amet auctor risus maximus ac.\r\n\r\nMaecenas et magna at mauris aliquet vehicula. Duis sed erat ut est facilisis iaculis eu ac sem. Praesent eu erat a turpis tristique vestibulum. Curabitur et nisl dui. Praesent ultrices diam ac sem lacinia bibendum. Nunc id neque condimentum, rhoncus eros egestas, porta sem. Nulla laoreet, velit eget suscipit vulputate, urna risus feugiat ipsum, ac condimentum sem risus a nulla. Integer feugiat ut leo non congue. Etiam feugiat rutrum ipsum vel rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque id ullamcorper urna. Pellentesque sit amet pulvinar elit. Mauris hendrerit, sapien ut laoreet malesuada, erat mi blandit risus, eget tincidunt purus est eu nulla. Sed sed lacus a quam rhoncus sollicitudin nec nec urna.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras massa ipsum, tristique ac ipsum eget, vulputate efficitur diam. Maecenas diam nunc, bibendum in lectus nec, feugiat accumsan augue. Ut at arcu mauris. Proin ut lacus a velit bibendum tempor at et nunc. Maecenas placerat volutpat pulvinar. Curabitur rhoncus sodales tellus ac fermentum. Fusce placerat, quam non porta suscipit, erat est molestie est, non facilisis turpis massa sit amet mi. Duis non libero congue, consequat tortor lobortis, imperdiet mauris.\r\n\r\nUt eget lectus ac sapien vehicula consequat. Suspendisse potenti. Nullam vel scelerisque ipsum. Nullam faucibus fringilla lacus, id posuere est dignissim quis. Donec dignissim, ligula a gravida porta, eros nisi feugiat ex, id feugiat ex orci at leo. Phasellus auctor augue ac mi auctor, vel pretium eros eleifend. Mauris ullamcorper ex vitae elit vehicula tempus. Integer ultrices tortor eget dignissim consectetur. Nam a nulla iaculis sapien varius laoreet id eu mi. Maecenas imperdiet imperdiet augue non scelerisque. Praesent at ornare nulla. Curabitur maximus venenatis nisl non tincidunt. Ut ac magna vitae tellus gravida blandit sed sit amet diam.\r\n\r\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ac volutpat diam, ut feugiat sem. Nulla mattis, magna id gravida sagittis, mi nibh fringilla metus, porta porttitor arcu mauris vitae velit. Mauris tempor blandit ante. Phasellus purus erat, mollis ac rhoncus aliquet, mollis vehicula magna. Mauris egestas mollis eros, et pulvinar lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris massa nunc, efficitur ut iaculis eu, efficitur sit amet nisl. Suspendisse metus nisi, viverra ac semper convallis, euismod id dui. Quisque tempus est eu nunc maximus, at porta tortor volutpat. Vivamus lobortis odio ut arcu feugiat faucibus. Vivamus quis eros placerat, porttitor lorem at, consequat odio. Maecenas lobortis ornare molestie.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(28, 'AÇÃO'),
(18, 'AMIZADE'),
(17, 'ARCADE'),
(15, 'AVENTURA'),
(16, 'CORRIDA'),
(19, 'ESPORTES'),
(23, 'FPS'),
(26, 'FUTEBOL'),
(30, 'MOBA'),
(20, 'PESCARIA'),
(25, 'RPG'),
(21, 'SIMULADOR'),
(22, 'SUSPENSE'),
(13, 'TERROR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `idioma`
--

CREATE TABLE `idioma` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `idioma`
--

INSERT INTO `idioma` (`id`, `nome`) VALUES
(4, 'Chinês'),
(5, 'Inglês'),
(6, 'Português'),
(19, 'Alemão'),
(20, 'Francês');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `descricao` longtext DEFAULT NULL,
  `imagem_url` varchar(200) NOT NULL,
  `video_url` varchar(200) DEFAULT NULL,
  `data_lancamento` date NOT NULL,
  `desenvolvedora` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `nome`, `valor`, `descricao`, `imagem_url`, `video_url`, `data_lancamento`, `desenvolvedora`, `id_categoria`) VALUES
(1, 'Minecraft', 29, 'Jogo Quadrado', 'https://s2.glbimg.com/15xQ4Yuki5ofQbhfnP7ZJxfBnAM=/0x0:1200x675/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2022/C/R/1MBd3lSK6bytY7m1NXn', 'https://www.youtube.com/watch?v=jMe3tdyjouM', '2022-09-09', 'Mojang', 15),
(2, 'The Last of Us', 30, 'Jogo de Zumbi', 'https://upload.wikimedia.org/wikipedia/pt/b/be/The_Last_of_Us_capa.png', 'https://www.youtube.com/watch?v=IpjRuuFEPMk', '2022-10-09', 'Naughty Dog', 13),
(4, 'Valorant', 0, 'Jogo de Tiro e Poderzinho', 'https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt3f072336e3f3ade4/63096d7be4a8c30e088e7720/Valorant_2022_E5A2_PlayVALORANT_ContentStackThumbnail_1200x625_MB01.png', 'https://www.youtube.com/watch?v=0qhHKedfvkg', '2021-05-03', 'Riot', 23),
(7, 'The Legend of Zelda: Breath of the Wild', 300, 'Jogo do Link', 'https://cdn.pocket-lint.com/r/s/970x/assets/images/137952-games-review-the-legend-of-zelda-breath-of-the-wild-review-image1-tbvqza2wel-jpg.webp', 'https://www.youtube.com/watch?v=zw47_q9wbBE', '2017-05-03', 'Nintendo', 15),
(8, 'Cuphead', 40, 'Jogo das Xicrina', 'https://conteudo.imguol.com.br/c/entretenimento/fd/2022/02/23/the-cuphead-show-personagem-diabo-1645649422377_v2_900x506.jpg.webp', 'https://www.youtube.com/watch?v=NN-9SQXoi50', '2018-05-03', 'Studio MDHR', 17),
(11, 'The Witcher 3: Wild Hunt', 99, 'Jogo brabo de bão', 'https://2.bp.blogspot.com/-Y5nkN2QquFQ/VWkPVfJ-NXI/AAAAAAAAAy8/KkrUR5guuew/s1600/NFR7xCi.jpg', NULL, '2014-03-01', 'CD Projekt RED', 25),
(14, 'Fortnite', 0, 'Fortnite é um famoso jogo de tiro do tipo Battle Royale, ou seja, todos contra todos onde o último sobrevivente é o vencedor. O game tem versões para PC, PS4, Xbox One, Nintendo Switch, iOS e Android. Assim, como outros títulos do gênero, é necessário dominar uma série de estratégias para ficar vivo por mais tempo.', 'https://cdn2.unrealengine.com/fortnite-throwback-axe-pickaxe-1920x1080-433374381.jpg', 'https://www.youtube.com/watch?v=LqK2woAKDUw', '2017-07-12', 'Epic', 23),
(27, 'Battlefield 4', 300, 'God of War é uma série de jogos eletrônicos de ação-aventura criada por David Jaffe da Santa Monica Studio, da Sony. Iniciada em 2005 no console PlayStation 2, tornou-se carro-chefe para a marca PlayStation, consistindo em nove jogos em várias plataformas.', 'https://cdn.ome.lt/htwL1J8GSAhX21mAR3JJuzp7SNE=/770x0/smart/uploads/conteudo/fotos/God_of_War_Ragnarok_arte.png', NULL, '0000-00-00', 'Monica studios', 28);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_idioma`
--

CREATE TABLE `jogo_idioma` (
  `id` int(11) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo_idioma`
--

INSERT INTO `jogo_idioma` (`id`, `id_jogo`, `id_idioma`) VALUES
(3, 1, 4),
(20, 11, 6),
(21, 11, 5),
(22, 11, 19),
(23, 8, 6),
(24, 8, 5),
(25, 4, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_plataforma`
--

CREATE TABLE `jogo_plataforma` (
  `id` int(11) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `id_plataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(2) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma`
--

CREATE TABLE `plataforma` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `plataforma`
--

INSERT INTO `plataforma` (`id`, `nome`) VALUES
(23, 'PS4'),
(24, 'Mobile'),
(26, 'Xbox One'),
(27, 'Xbox 360'),
(28, 'PC');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `armazenadas`
--
ALTER TABLE `armazenadas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices para tabela `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `imagem_url` (`imagem_url`),
  ADD UNIQUE KEY `video_url` (`video_url`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Índices para tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_idioma` (`id_idioma`);

--
-- Índices para tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_plataforma` (`id_plataforma`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `armazenadas`
--
ALTER TABLE `armazenadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);

--
-- Limitadores para a tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  ADD CONSTRAINT `jogo_idioma_ibfk_1` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`),
  ADD CONSTRAINT `jogo_idioma_ibfk_2` FOREIGN KEY (`id_idioma`) REFERENCES `idioma` (`id`);

--
-- Limitadores para a tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  ADD CONSTRAINT `jogo_plataforma_ibfk_1` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`),
  ADD CONSTRAINT `jogo_plataforma_ibfk_2` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
