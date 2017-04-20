-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: gabrielDB
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `subtitle` varchar(150) DEFAULT NULL,
  `new` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `description` text,
  `category` enum('symphonicMusic','performingArt') DEFAULT NULL,
  `best` int(11) DEFAULT NULL,
  `credits` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (3,'Órgão da casa,','Cova do vapor, Lisbonne',1,2013,'Impossible de penser un nouveau lieu de vie collective et participative sans y prévoir une petite place pour la musique. L’Órgão da casa est une invitation à la découverte des sons par le plaisir simple de frapper sur des bouteilles accordées. Jouez ou simplement écoutez, seul ou en duo quelques notes ou encore quelques rythmes au grès des inspirations. Sans autre prétention que de vouloir apporter un peu d’éveil musical dans ce lieu en construction, l’Órgão da casa a été conçu, en quelques jours, et laissera pour les mois à venir, une trace sonore, libre et gratuite, bercée par les vents marins de Cova do Vapor.','performingArt',1,'Avec EXYST, 2013. Ce projet a été conçu dans le cadre du projet CASA DO VAPOR mené par AMD, EXYZT et Associação de Moradores da Cova.'),(8,'Le Carnaval des Animaux,','Saint Saëns',0,2016,'','symphonicMusic',1,''),(9,'On social metamorphosis,','Kadist Art Foundation, Paris',0,2012,'Ce film, conçu pour le projet expositif Enacting Populism in its Mediæscape de Matteo Lucchetti, analyse l’aspect émancipateur des dynamiques populistes, autour de l’idée de la transformation des mythes à l’aune du climat populiste.\n\nOn social metamorphosis est né d’une collaboration entre Luigi Coppola et l’économiste et anthropologue belge Paul Jorion. A partir de la section « utopie réaliste » du célébre blog de Paul Jorion, ils ont travaillé sur un texte qui rassemble à la fois les propositions écrites par les internautes, qui ont participé collectivement à cette section, et des textes de Louis Antoine de Saint Just, John Maynard Keynes et Franklin Roosevelt. Luigi Coppola a ensuite mis en scène ce nouveau script sous la forme d’un chœur grec classique, de manière à articuler un parallélisme entre les demandes et les propositions formulées dans le texte et la voix d’un \"peuple\".\n“La révolte peine à trouver la parole” remarque Luigi Coppola, qui suggère le masque comme outil symbolique de fédération et de protestation. Conçus par l’artiste avec des pages de journaux économiques, les masques ouvrent la bouche du peuple. Les visages de la métamorphose sociale ne se cachent pas, ils se reconnaissent au contraire les uns dans les autres : le masque leur procure la puissance de la multitude.','performingArt',1,'ON SOCIAL METAMORPHOSIS de Luigi COPPOLA (http://luiscoppola.blogspot.fr/)  \nComposition et direction musicale ; Gabriel MATTEI'),(10,'Symphonie #2 / Borodine,','Orquesta SinfónicaProvincial de Bahía Blanca',1,2017,'','symphonicMusic',1,NULL),(11,'La dame de chez Maxime... ou presque,','Théâtre du Peuple, Bussang',0,2017,'','performingArt',0,NULL),(12,'Lanquan li Jorn Son Lonc en May,','Pompidou Paris / ISELP Bruxelles',1,2017,NULL,'performingArt',0,NULL),(13,'Spirit of coalition,','Parckdesign2016 , Bruxelles',0,2016,'','performingArt',0,NULL),(14,'The Disoriented Cabaret,','Dutch Art Institute, Arnhem / Greylight Projects, Bruxelles',0,2016,NULL,'performingArt',0,NULL),(15,'Dieu, les caravanes et les voitures,','Rodéo d’âme, Strasbourg',0,2016,NULL,'performingArt',0,NULL),(16,'Opéra de Quat’sous,','Théâtre du Peuple, Bussang',0,2016,NULL,'performingArt',0,NULL),(17,'Récital à deux sous,','Théâtre du Peuple, Bussang',0,2016,NULL,'performingArt',0,NULL),(18,'Contrepoint pour Télévision,','Strasbourg',0,2014,'En collaboration avec le chef d’orchestre et compositeur  Gabriel Mattei, Joséphine Kaeppelin a travaillé sur la réalisation d’un contrepoint sonore et visuel pour télévision.\nLe contrepoint est une technique de composition musicale qui fait chanter ensemble ou converser plusieurs parties mélodiques, suivant une structure \nhorizontale et linéaire. Cette forme d’écriture est propice à l’introspection et à la réflexion. Son développement rythmique, envoûtant et répétitif,\nnous transporte. À la fois archaïque et complexe, souvent en flux continu, l’écriture contrapuntique se structure autour de la répétition\nd’une cellule mélodique, celle-ci pouvant être sujette à des variations, des divertissements. La collaboration entre l’artiste et le musicien repose \nsur le partage d’un protocole : chacun, avec le langage propre à son médium — l’image, le son — reprend la quintessence du contrepoint \npour produire la pièce visuelle et sonore : Contrepoint pour télévision.','performingArt',0,'Contrepoint pour télévision, 2014\nvidéo sonore, couleur, 3 min 57 s (présentée en boucle)\nimage: Joséphine Kaeppelin musique: Gabriel Mattei '),(19,'Drapeau sonore,','EVENTO 2011, Bordeaux',0,2011,'Le drapeau sonore de la ré-évolution urbaine flottera dans les oreilles des habitants de la place St Michel et des visiteurs d’EVENTO2011 .\nLa présence musicale de la place St Michel de Bordeaux passe en partie par les cloches de sa flèche centrale qui rythment les différents moments de la semaine en donnant à entendre des mélodies puisées dans le répertoire culturel régional.\nInterface entre l’instrument séculaire et les habitants de la place St Michel, la performance du Gabriel Mattei permettra une appropriation temporaire de l’élément musical et identitaire de ce lieu de vie.\nPar une approche progressive de cette partition aux dimensions urbaines, le chef d’orchestre et tous les participants feront entendre leur dialogue sur l’ensemble du quartier.\nNul besoin d’aptitudes particulières pour cette rencontre avec l’instrument de la place St Michel. Alors participer à cette expérience musicale hors normes et rejoignez-nous le 8 octobre 2011 à 18h00 au pied de la flèche St Michel.','performingArt',0,'DRAPEAU SONORE\nConception et direction d\'un évènement musical participatif autour d\'un carillon séculaire.'),(20,'L\'ORCHESTRE 1 1* 1 2 / 1 2 1 1 - 1percu - cordes,','Ceeac, Strasbourg',0,2011,'L’interprétation de la musique d’orchestre ne fait pas appel qu’à une virtuosité instrumentale individuelle mais également à une communication non verbale entre les musiciens. L’attitude corporelle de chaque musicien, son implication physique dans son interaction avec les membres de l’orchestre et sa détermination à appartenir à ce collectif en action constituent l’essence de la vie interne d’un orchestre. \nNotre performance présentée au CEEAC permettait une immersion, pour notre public, dans ce tissu relationnel entre interprètes. Avec trois gestes musicaux simples (relais sonore, dialogue entre 2 groupes et improvisation individuelle), nous avons fait partager l’expérience orchestrale vécus habituellement que par les musiciens.','performingArt',0,'Performance de Gabriel Mattei & Zahra Poonawala http://www.zahrapoonawala.org/ \nPièce pour 18 musiciens.\nLe 15 septembre 2011 au Ceaac, Strasbourg'),(21,'Une poignée de Terre,','Rodéo d’âme, Strasbourg',0,2011,NULL,'performingArt',0,NULL),(22,'Histoire du Soldat / Strasvinsky,','Elan Lyrique, Strasbourg',0,2004,NULL,'symphonicMusic',0,NULL),(23,'Le Pauvre Matelot / Milhaud & Gendarme incompris/ Poulenc,','Elan Lyrique, TAPS Strasbourg',0,2005,NULL,'symphonicMusic',0,NULL),(24,'La clé des chants,','Orchestre Philarmonique de Monte Carlo',0,2008,NULL,'symphonicMusic',0,NULL),(25,'HsinChu Young symphonic Orchestra,','Taïwan',0,2014,NULL,'symphonicMusic',0,NULL),(26,'TECO Foundation Orchestra,','Taïwan',0,2012,NULL,'symphonicMusic',0,NULL),(27,'Requiem/MOZART,','Orchestre M , Strasbourg',0,2009,NULL,'symphonicMusic',0,NULL),(28,'Symphonie #8/DVORAK,','Orquesta Sinfónica Provincial de Bahía Blanca',0,2013,NULL,'symphonicMusic',0,NULL),(29,'Piano concerto #5 / BEETHOVEN,','Orquesta Sinfónica Provincial de Bahía Blanca',0,2013,NULL,'symphonicMusic',0,'Orquesta Sinfònica Provincial de Bahía Blanca\nPiano : Hugo SCHULER\nDirection : Gabriel MATTEI'),(30,'Bastien & Bastienne /MOZART,','Orchestre M , Strasbourg',0,2013,NULL,'symphonicMusic',0,NULL),(31,'Youth Concert,','Kammerensemble Kehl-Strasbourg -Kehl',0,2015,NULL,'symphonicMusic',0,NULL),(33,'Beethoven symphony #7,','Orquesta Sinfónica Provincial de Bahía Blanca',1,2014,NULL,'symphonicMusic',1,NULL);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-20 12:04:36
