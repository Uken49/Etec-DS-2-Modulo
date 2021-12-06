-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2021 às 04:01
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdportaldenoticias`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `descCategoria` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `descCategoria`) VALUES
(1, 'Tecnologia'),
(2, 'Esportes'),
(3, 'Politica'),
(4, 'Fake News'),
(5, 'Medicina'),
(6, 'Jojo'),
(7, 'Sla');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbnoticia`
--

CREATE TABLE `tbnoticia` (
  `idNoticia` int(11) NOT NULL,
  `tituloNoticia` varchar(200) DEFAULT NULL,
  `subTituloNoticia` varchar(200) DEFAULT NULL,
  `textoNoticia` varchar(2000) DEFAULT NULL,
  `dataPublicacaoNoticia` date DEFAULT NULL,
  `fotoNoticia` varchar(1000) DEFAULT NULL,
  `idCategoria` int(11) NOT NULL,
  `idStatusNoticia` int(11) NOT NULL,
  `idReporter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbnoticia`
--

INSERT INTO `tbnoticia` (`idNoticia`, `tituloNoticia`, `subTituloNoticia`, `textoNoticia`, `dataPublicacaoNoticia`, `fotoNoticia`, `idCategoria`, `idStatusNoticia`, `idReporter`) VALUES
(1, 'Texto 1', 'O que é o Lorem Ipsum?', 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.', '2021-06-23', '../../imagens/noticias/Donquixote Doflamengo.jpg', 1, 2, 1),
(2, 'Texto 2', 'De onde é que ele vem?', 'Ao contrário da crença popular, o Lorem Ipsum não é simplesmente texto aleatório. Tem raízes numa peça de literatura clássica em Latim, de 45 AC, tornando-o com mais de 2000 anos. Richard McClintock, um professor de Latim no Colégio Hampden-Sydney, na Virgínia, procurou uma das palavras em Latim mais obscuras (consectetur) numa passagem Lorem Ipsum, e atravessando as cidades do mundo na literatura clássica, descobriu a sua origem. Lorem Ipsum vem das secções 1.10.32 e 1.10.33 do \"de Finibus Bonorum et Malorum\" (Os Extremos do Bem e do Mal), por Cícero, escrito a 45AC. Este livro é um tratado n', '2021-06-23', '../../imagens/noticias/Luffy G5.jpg', 2, 2, 2),
(3, 'Texto 3', 'Porque é que o usamos?', 'É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos normal de letras, ao contrário do uso de \"Conteúdo aqui, conteúdo aqui\", tornando-o texto legível. Muitas ferramentas de publicação electrónica e editores de páginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omissão, e uma pesquisa por \"lorem ipsum\" irá encontrar muitos websites ainda na sua infância. Várias versões têm evoluído ao longo dos anos, por vezes por acidente, por vezes', '2021-06-23', '../../imagens/noticias/Diamante.png', 3, 2, 3),
(4, 'Texto 4', 'Onde posso arranjar algum?', 'Existem muitas variações das passagens do Lorem Ipsum disponíveis, mas a maior parte sofreu alterações de alguma forma, pela injecção de humor, ou de palavras aleatórias que nem sequer parecem suficientemente credíveis. Se vai usar uma passagem do Lorem Ipsum, deve ter a certeza que não contém nada de embaraçoso escondido no meio do texto. Todos os geradores de Lorem Ipsum na Internet acabam por repetir porções de texto pré-definido, como necessário, fazendo com que este seja o primeiro verdadeiro gerador na Internet. Usa um dicionário de 200 palavras em Latim, combinado com uma dúzia de model', '2021-06-23', '../../imagens/noticias/Donquixote Doflamengo.jpg', 1, 2, 2),
(5, 'Texto 5', 'A passagem do Lorem Ipsum usada desde 1500', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '2021-06-24', '../../imagens/noticias/engraçado.png', 1, 2, 4),
(6, 'Texto 6', 'Secção 1.10.32 do \"de Finibus Bonorum et Malorum\", escrito p', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis ', '2021-06-19', '../../imagens/noticias/engraçado.png', 1, 2, 4),
(7, 'Estou voltando', 'Mensagem Séria', 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem ', '2021-06-26', '../../imagens/noticias/Vetor.png', 5, 2, 5),
(8, 'EA anuncia novo jogo estrelado por Anitta.', 'Nesta segunda, às 10hrs, o perfil oficial da cantora anuncio', 'KSOAKDOKSA ODKSOAKDOKSAODK SOAKDOKSAODKSOAKDOKSAODKS OAKDOKSAO DKSOAKDOKSA ODKSOAKDOK SAODKSOAK DOKSAODKSOA KDOKSAODK SOAKDOKSAODK SOAKDOKSAODKSOA KDOKSAODKSOAKDO KSAOD KSOAKDOKSA ODKSOAKDO KSAODKSOAK DOKSAODK', '2021-06-26', '../../imagens/noticias/Pinguin.png', 6, 2, 4),
(9, 'Enesimo Texto', 'Enesimo sub-titulo', 'hon3xphon3 xphon3xphon3xph on3xphon3xphon3x phon3xph on3xphon3x\r\nphon3xp hon3xpho n3xphon3xphon 3xphon3xphon3xpho n3xphon3xph on3xphon3xph on3xphon 3xphon3x.', '2021-06-26', '../../imagens/noticias/Eu com o Baruk.jpg', 5, 2, 5),
(10, 'Combina', 'realmente,uma meratriz', 'lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem ipsum,deus dos textos random lorem', '2021-06-26', '../../imagens/noticias/NO.jpg', 4, 2, 3),
(11, 'Texto 2077', 'Cyberbug é minha religião', 'ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi hackeado ui ui hacker anonimo ui ui você foi ', '2021-06-26', '../../imagens/noticias/html.jpg', 4, 2, 2),
(12, 'Brasil vence Polônia de virada e conquista título inédito da Liga das Nações', 'Título enche a equipe de moral para os Jogos Olímpicos de Tóquio.', 'O Brasil é o novo campeão da Liga das Nações masculina de vôlei. Neste domingo, 27, a seleção alcançou a conquista inédita com uma grande vitória de virada sobre a Polônia por 3 sets a 1 em Rimini, na Itália.\r\n\r\nApós perder o primeiro set da decisão, a equipe brasileira não se abalou e buscou o título com autoridade no embalo das atuações decisivas de Leal, Wallace, Lucarelli e Bruninho. As parciais foram de 22/25, 25/23, 25/16 e 25/14.\r\n\r\nO resultado eliminou o “fantasma” que rondava a seleção, que havia perdido a decisão dos dois últimos mundiais justamente para a Polônia em 2014 e 2018.\r\n\r\n', '2021-06-27', '../imagens/noticias/Brasil-vs-Polonia-Esporte.png', 3, 1, 1),
(13, 'Com um a mais, Corinthians vacila e cede empate para o Fluminense', 'O problema financeiro tem se projetado diretamente no elenco do Timão. ', 'O Corinthians teve tudo para conquistar a vitória na tarde deste domingo (27) diante do Fluminense, em São Januário, em partida válida pela sétima rodada do Brasileirão. Com um a mais e à frente do placar, a equipe corintiana acabou cedendo o empate em 1 a 1 para o Tricolor. Jô, para o Corinthians e Cazares, para o Flu, anotaram os gols da partida. Durante o primeiro tempo, o Flu ofereceu perigo com as finalizações de Abel Hernández, mas foi o Corinthians quem marcou primeiro. Gustavo Silva sofreu pênalti e Jô cobrou com perfeição. O uruguaio foi personagem também no início da segunda etapa, quando foi expulso após dividida com o volante Gabriel. Mesmo com um a menos, o Flu seguiu no ataque e conseguiu empatar a partida com Cazares.', '2021-06-27', '../imagens/noticias/corinthians-vs-fluminense-Esporte.jpg', 1, 1, 1),
(14, 'Windows 11 permitirá a instalação de aplicativos Android de fora da Amazon Appstore', 'Com isso, usuários poderão baixar e instalar APKs que não estão disponíveis na loja da Amazon', 'O Windows 11 foi oficialmente anunciado na última quinta-feira (27), e uma das grandes novidades da nova versão do sistema operacional da Microsoft está na possibilidade de rodar aplicativos Android de forma nativa. Graças a integração da Appstore da Amazon na Microsoft Store, usuários poderão baixar os aplicativos disponíveis na loja, como TikTok, Uber e Ring, e utilizar eles diretamente no Windows. Entretanto, se comparado a Google Play Store, a loja de aplicativos da Amazon é, de certa forma, inferior em questão de apps e jogos disponíveis para o download por parte do usuário. Porém, segundo Miguel de Icaza, um dos engenheiros da Microsoft por trás do desenvolvimento do Windows 11, revelou recentemente em resposta a um usuário no Twitter que as pessoas poderão instalar seus aplicativos mesmo que não estejam disponíveis na loja da Amazon. Miguel não foi claro como isso será possível ou se haverá algum tipo de limitação nisso, apenas respondendo que \"Sim!\", será possível instalar aplicativos de fora da Amazon Appstore.', '2021-06-27', '../imagens/noticias/windows-11-aplicativos-de-fora-amazon-appstore-Tecnologia.jpg', 2, 2, 1),
(15, 'Mulher grávida é primeira pessoa a falecer de variante Delta no Brasil', 'Variante ganha força e letalidade.', 'Uma mulher grávida de 42 anos foi a primeira pessoa a morrer pela variante Delta, também conhecida como cepa indiana, no Brasil. Ela faleceu no fim de abril no Paraná, mas a informação só foi divulgada nesta sexta-feira (25). A variante, que foi identificada pela primeira vez na Índia, já circula por 92 países, segundo a Organização Mundial da Saúde (OMS). De acordo com o Ministério da Saúde, já foram identificados onze casos de infecção pela cepa, incluindo da mulher que veio a falecer. A única região que não registrou a variante foi a Norte. Os primeiros registros foram confirmados em maio, entre tripulantes do navio MV Shandong da Zhi, que atracou em São Luís, e somam seis dos onze casos. Há ainda dois casos de Apucarana (Paraná), e ocorrências isoladas nos municípios de Campos dos Goytacazes (Rio), Juiz de Fora (Minas) e Goiânia (Goiás). O primeiro caso da Delta no Paraná foi anunciado no início do mês, em uma mulher de 71 anos, que foi hospitalizada e sobreviveu.', '2021-06-27', '../imagens/noticias/Variante-Delta-Brasil-Covid.jpeg', 1, 1, 2),
(16, 'Hit musical é responsável por inverno adiantado.', 'Drip veneno congelou tanto que o Brasil está enfrentando tempestades de neve.', 'Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia Pfv man,tenho familia ', '2021-06-28', '../imagens/noticias/NO.jpg', 6, 1, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbreporter`
--

CREATE TABLE `tbreporter` (
  `idReporter` int(11) NOT NULL,
  `nomeReporter` varchar(60) DEFAULT NULL,
  `cpfReporter` varchar(14) DEFAULT NULL,
  `emailReporter` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbreporter`
--

INSERT INTO `tbreporter` (`idReporter`, `nomeReporter`, `cpfReporter`, `emailReporter`) VALUES
(1, 'José Firmino Santos da Silva', '111.222.333-96', 'Josefirminio_49@gmail.com'),
(2, 'Rodrigo Faro dos Anjos', '999.999.999-12', 'Rodriguin@bol.com'),
(3, 'Andrade de Almeida', '111.444.333-96', 'andrade_almeida@outlook.com'),
(4, 'Helder Druida Roberto de Alvarenga', '222.345.678-12', 'helderdruidara@outlook.com'),
(5, 'Jesus Cristo', '111.555.639-95', 'jesus@cristo.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbstatusnoticia`
--

CREATE TABLE `tbstatusnoticia` (
  `idStatusNoticia` int(11) NOT NULL,
  `descStatusNoticia` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbstatusnoticia`
--

INSERT INTO `tbstatusnoticia` (`idStatusNoticia`, `descStatusNoticia`) VALUES
(1, 'Ativado'),
(2, 'Desativado');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices de tabela `tbnoticia`
--
ALTER TABLE `tbnoticia`
  ADD PRIMARY KEY (`idNoticia`),
  ADD KEY `fk_idReporter` (`idReporter`),
  ADD KEY `fk_idStatusNoticia` (`idStatusNoticia`),
  ADD KEY `fk_idCategoria` (`idCategoria`);

--
-- Índices de tabela `tbreporter`
--
ALTER TABLE `tbreporter`
  ADD PRIMARY KEY (`idReporter`);

--
-- Índices de tabela `tbstatusnoticia`
--
ALTER TABLE `tbstatusnoticia`
  ADD PRIMARY KEY (`idStatusNoticia`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbnoticia`
--
ALTER TABLE `tbnoticia`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbreporter`
--
ALTER TABLE `tbreporter`
  MODIFY `idReporter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbstatusnoticia`
--
ALTER TABLE `tbstatusnoticia`
  MODIFY `idStatusNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbnoticia`
--
ALTER TABLE `tbnoticia`
  ADD CONSTRAINT `tbnoticia_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`),
  ADD CONSTRAINT `tbnoticia_ibfk_2` FOREIGN KEY (`idReporter`) REFERENCES `tbreporter` (`idReporter`),
  ADD CONSTRAINT `tbnoticia_ibfk_3` FOREIGN KEY (`idStatusNoticia`) REFERENCES `tbstatusnoticia` (`idStatusNoticia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
