-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: projfilm
-- ------------------------------------------------------
-- Server version	5.7.28-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `filmes`
--

DROP TABLE IF EXISTS `filmes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `filmes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `nota` decimal(10,0) NOT NULL,
  `genero` varchar(60) NOT NULL,
  `duracao` int(11) NOT NULL,
  `sinopse` text NOT NULL,
  `ano` int(11) NOT NULL,
  `img` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filmes`
--

LOCK TABLES `filmes` WRITE;
/*!40000 ALTER TABLE `filmes` DISABLE KEYS */;
INSERT INTO `filmes` VALUES (1,'Dunkirk',8,'Ação, Drama, Guerra',106,'Durante a Segunda Guerra Mundial, a Alemanha avança rumo à França e cerca as tropas aliadas nas praias de Dunkirk. Sob cobertura aérea e terrestre das forças britânicas e francesas, as tropas são lentamente evacuadas da praia.',2017,'dunkirk.png'),(2,'6 dias',6,'Ação, Suspense, Drama',95,'Em abril de 1980, uma série de homens armados invadem a embaixada iraniana localizada em Princes Gate, na cidade de Londres. Eles fazem todos de refém e durante os seis dias seguintes, um impasse tenso acontece. Um grupo de soldados altamente treinados se prepara para uma invasão nunca vista antes no mundo.',2017,'6dias.png'),(3,'13 Horas',7,'Ação',144,'Baseado em fatos reais, o longa conta a história de um grupo de seis soldados privados que trabalham num complexo da CIA em Benghazi, na Líbia, em 2012. Em um aniversário dos atentados de 11 de setembro, eles precisaram defender um posto diplomático que recebe a visita de um embaixador americano, e que, obviamente, será um alvo de terroristas.',2016,'13horas.png'),(4,'As Aventuras de Pi',8,'Aventura, Drama',127,'Pi Patel (Suraj Sharma) é filho do dono de um zoológico localizado em Pondicherry, na Índia. Após anos cuidando do negócio, a família decide vender o empreendimento devido à retirada do incentivo dado pela prefeitura local. A ideia é se mudar para o Canadá, onde poderiam vender os animais para reiniciar a vida. Entretanto, o cargueiro onde todos viajam acaba naufragando devido a uma terrível tempestade. ',2012,'pi.png'),(5,'Coringa',8,'Suspense, Drama',122,'Arthur Fleck trabalha como palhaço para uma agência de talentos e, toda semana, precisa comparecer a uma agente social, devido aos seus conhecidos problemas mentais. Após ser demitido, Fleck reage mal à gozação de três homens em pleno metrô e os mata. Os assassinatos iniciam um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante.',2019,'coringa.png'),(6,'Um Lugar Silencioso',7,'Terror, Drama, Ficção Científica',90,'Em uma fazenda dos Estados Unidos, uma família do meio-oeste é perseguida por uma entidade fantasmagórica assustadora. Para se protegerem, eles devem permanecer em silêncio absoluto, a qualquer custo, pois o perigo é ativado pela percepção do som.',2018,'silencioso.png'),(7,'Frozen II',7,'Animação, Aventura',104,'De volta à infância de Elsa e Anna, as duas garotas descobrem uma história do pai, quando ainda era príncipe de Arendelle. Ele conta às meninas a história de uma visita à floresta dos elementos, onde um acontecimento inesperado teria provocado a separação dos habitantes da cidade com os quatro elementos fundamentais: ar, fogo, terra e água. Esta revelação ajudará Elsa a compreender a origem de seus poderes.',2019,'frozen2.png'),(8,'Frozen: Uma Aventura Congelante',7,'Animação, Aventura',102,'A caçula Anna adora sua irmã Elsa, mas um acidente envolvendo os poderes especiais da mais velha, durante a infância, fez com que os pais as mantivessem afastadas. Após a morte deles, as duas cresceram isoladas no castelo da família, até o dia em que Elsa deveria assumir o reinado de Arendell. Com o reencontro das duas, um novo acidente acontece e ela decide partir para sempre e se isolar do mundo, deixando todos para trás e provocando o congelamento do reino. É quando Anna decide se aventurar pelas montanhas de gelo para encontrar a irmã e acabar com o frio.',2013,'frozen1.png'),(9,'O Hobbit: Uma Jornada Inesperada',8,'Aventura, Ação',169,'Bilbo Bolseiro (Martin Freeman) vive uma vida pacata no condado, como a maioria dos hobbits. Um dia, aparece em sua porta o mago Gandalf, o cinzento (Ian McKellen), que lhe promete uma aventura como nunca antes vista. Na companhia de vários anões, Bilbo e Gandalf iniciam sua jornada inesperada pela Terra Média.',2012,'hobbit1.png'),(10,'O Hobbit: A Desolação de Smaug',8,'Aventura, Ação',161,'Após iniciar sua jornada ao lado de um grupo de anões e de Gandalf (Ian McKellen), Bilbo Bolseiro (Martin Freeman) segue em direção à Montanha Solitária, onde deverá ajudar seus companheiros de missão a retomar a Arken Stone, que fará com que Thorin (Richard Armitage) obtenha o respeito de todos os anões e o apoio na luta para retomar seu reino. ',2013,'hobbit2.png'),(11,'O Hobbit: A Batalha dos Cinco Exércitos',7,'Aventura, Ação ',144,'Após ser expulso da montanha de Erebor, o dragão Smaug ataca com fúria a cidade dos homens que fica próxima ao local. Após muita destruição, Bard (Luke Evans) consegue derrotá-lo. Não demora muito para que a queda de Smaug se espalhe, atraindo os mais variados interessados nas riquezas que existem dentro de Erebor. Entretanto, Thorin (Richard Armitage) está disposto a tudo para impedir a entrada de elfos, anões e orcs, ainda mais por ser tomado por uma obsessão crescente pela riqueza à sua volta. Paralelamente a estes eventos, Bilbo Bolseiro (Martin Freeman) e Gandalf (Ian McKellen) tentam impedir a guerra.',2014,'hobbit3.png'),(12,'O Senhor dos Anéis: A Sociedade do Anel',9,'Aventura, Ação',178,'Em uma terra fantástica e única, um hobbit recebe de presente de seu tio um anel mágico e maligno que precisa ser destruído antes que caia nas mãos do mal. Para isso, o hobbit Frodo tem um caminho árduo pela frente, onde encontra perigo, medo e seres bizarros. ',2001,'sraneis.png'),(13,'O Senhor dos Anéis: As Duas Torres',8,'Aventura, Ação',179,'Após a captura de Merry e Pippy pelos orcs, a Sociedade do Anel é dissolvida. Frodo e Sam seguem sua jornada rumo à Montanha da Perdição para destruir o anel e descobrem que estão sendo perseguidos pelo misterioso Gollum. Enquanto isso, Aragorn, o elfo e arqueiro Legolas e o anão Gimli partem para resgatar os hobbits sequestrados e chegam ao reino de Rohan, onde o rei Theoden foi vítima de uma maldição mortal de Saruman.',2002,'sraneis2.png'),(14,'O Senhor dos Anéis: O Retorno do Rei',9,'Aventura, Ação',201,'O confronto final entre as forças do bem e do mal que lutam pelo controle do futuro da Terra Média se aproxima. Sauron planeja um grande ataque a Minas Tirith, capital de Gondor, o que faz com que Gandalf e Pippin partam para o local na intenção de ajudar a resistência. Um exército é reunido por Theoden em Rohan, em mais uma tentativa de deter as forças de Sauron. Enquanto isso, Frodo, Sam e Gollum seguem sua viagem rumo à Montanha da Perdição para destruir o anel.',2003,'sraneis3.png'),(15,'Batman Begins',8,'Ação, Drama',140,'Marcado pelo assassinato de seus pais quando ainda era criança, o milionário Bruce Wayne (Christian Bale) decide viajar pelo mundo em busca de encontrar meios que lhe permitam combater a injustiça e provocar medo em seus adversários. Após retornar a Gotham City, sua cidade-natal, ele idealiza seu alter-ego: Batman, um justiceiro mascarado que usa força, inteligência e um arsenal tecnológico para combater o crime.',2005,'batmanBegins.png'),(16,'Batman: O Cavaleiro das Trevas',9,'Ação, Drama',152,'Após dois anos desde o surgimento do Batman, os criminosos de Gotham City têm muito o que temer. Com a ajuda do tenente James Gordon e do promotor público Harvey Dent, Batman luta contra o crime organizado. Acuados com o combate, os chefes do crime aceitam a proposta feita pelo Coringa e o contratam para combater o Homem-Morcego.',2008,'batmanTrevas.png'),(17,'Batman: O Cavaleiro das Trevas Ressurge',8,'Ação, Drama',165,'Após ser culpado pela morte de Harvey Dent e passar de herói a vilão, Batman desaparece. As coisas mudam com a chegada de uma ladra misteriosa, a Mulher-Gato, e Bane, um terrorista mascarado, que fazem Batman abandonar seu exílio forçado.',2012,'batmanRessurge.png'),(18,'Perdido em Marte',8,'Aventura, Drama, Ficção Científica',141,'O astronauta Mark Watney (Matt Damon) é enviado a uma missão em Marte. Após uma severa tempestade ele é dado como morto, abandonado pelos colegas e acorda sozinho no misterioso planeta com escassos suprimentos, sem saber como reencontrar os companheiros ou retornar à Terra.',2015,'marte.png'),(19,'Animais Fantásticos e Onde Habitam',7,'Aventura, Fantasia',133,'Baseado no livro homônimo de J.K. Rowling. O excêntrico magizoologista Newt Scamander (Eddie Redmayne) chega à cidade de Nova York com sua maleta, um objeto mágico onde ele carrega uma coleção de fantásticos animais do mundo da magia que coletou durante as suas viagens. Em meio a comunidade bruxa norte-americana que teme muito mais a exposição aos trouxas do que os ingleses, Newt precisará usar suas habilidades e conhecimentos para capturar uma variedade de criaturas que acabam saindo da sua maleta.',2016,'animais.png'),(20,'Animais Fantásticos: Os Crimes de Grindelwald',6,'Aventura, Fantasia',134,'Newt Scamander (Eddie Redmayne) reencontra os queridos amigos Tina Goldstein (Katherine Waterston), Queenie Goldstein (Alison Sudol) e Jacob Kowalski (Dan Fogler). Ele é recrutado pelo seu antigo professor em Hogwarts, Alvo Dumbledore (Jude Law), para enfrentar o terrível bruxo das trevas Gellert Grindelwald (Johnny Depp), que escapou da custódia da MACUSA (Congresso Mágico dos EUA) e reúne seguidores, dividindo o mundo entre seres de magos sangue puro e seres não-mágicos.',2018,'animais2.png');
/*!40000 ALTER TABLE `filmes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'','','8d5891b55ccb5f5809559d62af779ae306d2f39b23e0d2508a11e8140b049f003e4004e6f5189b5513d56c1ba75074f9efba4a02b7ab92db43496f426e46075e'),(2,'','','8d5891b55ccb5f5809559d62af779ae306d2f39b23e0d2508a11e8140b049f003e4004e6f5189b5513d56c1ba75074f9efba4a02b7ab92db43496f426e46075e'),(3,'','','8d5891b55ccb5f5809559d62af779ae306d2f39b23e0d2508a11e8140b049f003e4004e6f5189b5513d56c1ba75074f9efba4a02b7ab92db43496f426e46075e'),(4,'UVA','UVA','UVA'),(5,'banana','teste@teste.com','01a2a6df8cd8c822188e77a716fb0a726a3ed59db1c28ae490a85c90f5c9aaab36819dceb1780c71ee986257cdb82ee11b9d7c62cd6ef164119df620701fa300'),(6,'teste2','teste@teste.com','7208fce10777fac51e36e02b5a63127be0ffe522949a5ec3da7ed316bda3153c7f70a59b34697609129e813d07752f2288811b8bdb0a17396c46579ca7d48026');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-15  8:50:33
