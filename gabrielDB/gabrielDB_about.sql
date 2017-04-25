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
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `bio` text,
  `subbio` text,
  `contact1` text,
  `contact2` text,
  `image` varchar(255) DEFAULT NULL,
  `cvanglais` varchar(45) DEFAULT NULL,
  `cvfrancais` varchar(45) DEFAULT NULL,
  `cvchinois` varchar(45) DEFAULT NULL,
  `mail1` varchar(45) DEFAULT NULL,
  `mail2` varchar(45) DEFAULT NULL,
  `tel1` varchar(45) DEFAULT NULL,
  `tel2` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'Chef d\'orchestre et compositeur formé à Paris et à Vienne, Gabriel Mattei partage ses activités musicales entre Strasbourg, Paris et Bruxelles. Directeur de l\'Orchestre métropolitain de Strasbourg (Orchesre m) et kammerensemble Kehl-Strasbourg, il developpe une activité musicale exigeante et transversale alliant sa volonté d\'associer différents cultures à la grande tradition de la musique classique et son souci de communication avec le public.','Gabriel MATTEI a été directeur musical de l\'Orchestre Universitaire de Strasbourg de 2002 à 2006, de l\'Ortenau Orchestre d\'Offrenburg(Allemagne) de 2009 à 2011 et dirige le Kammerenselble Kehl- Strasbourg depuis 2004.Chef de choeur, il a dirigé le choeur mulhousien << La Saltarelle>> de 2004 à 2008. Co-directeur de la Compagnie l\'Elan Lyrique, il dirige >>l\'Histoire du Soldat>> de Stravinsky et Ramuz en 2004/2005 et, en 2006, une nouvelle production de l\'opéra << le pauvre Matelot >>de Milhaud ainsi que << Le Gendarme incompris >> de Poulenc. En 2007, Gabriel MATTEI crée un nouvel orchestreà géométrie variable l\'Orchestre métropolitain (Orchestre m) avec lequel il se consacre à la musique du XXème siècle,et plus particulièrement aux compositeur français de cette période. Il expérimete également avec ses musiciens diverses formes de concert avec des dispositifs scénographiques expérimentaux (concert à vélo, concert en piscine, concert en appartement...). Après avoir développé plusieurs échanges artistiques entre la France et l’Amérique du sud (Venezuela en 2001 et Argentine à partir de 2003) , Gabriel Mattei amorce dès 2012 des collaborations musicales avec la Chine continentale et Taïwan. Chef invité, il a dirigé l’Orchestre Philharmonique de Monte Carlo, l’Orchestre Philharmonique de Strasbourg, l’Orquestre symphonique de Bahía Blanca (Argentine), L’Orchestre de la fondation TECO de Taïwan, l’Orchestre Symphonique Libertador San Martín de Buenos Aires, l’Ensemble du Nouveau Siècle et l’Orchestre du Festival de Neuf-Brisach...','AGENCE METI-JORI','https://fr-fr.facebook.com/gabriel.mattei.79','GabrielMattei.jpg',NULL,NULL,NULL,'info@meiti-jori-agency.com','contact@gabielmattei.eu','1 (514) 241-7226','+ 33 (0)6 02 97 13 89');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
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
