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
  `idcontent` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `subtitle` varchar(150) DEFAULT NULL,
  `new` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `description` text,
  `category` varchar(50) DEFAULT NULL,
  `best` int(11) DEFAULT NULL,
  `linktype` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcontent`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'Beethoven symphony #7,','Orquesta Sinfónica Provincial de Bahía Blanca,',1,2014,'','SymphonicMusic',1,'video','https://youtu.be/qJHuqI5iDUs'),(3,'Órgão da casa,','Cova do vapor, Lisbonne',1,2013,'','PerformingArt',1,'video',''),(8,'Le Carnaval des Animaux,','Saint Saëns',0,2016,'','SymphonicMusic',1,'video','https://youtu.be/RIii9I8UhT4'),(9,'On social metamorphosis','Kadist Art Foundation, Paris',0,2012,'','PerformingArt',1,'video','https://youtu.be/wCy496Qx8aw'),(10,'Symphonie #2 / Borodine,','Orquesta Sinfónica\nProvincial de Bahía Blanca',1,2017,'','SymphonicMusic',1,'video','https://youtu.be/FmUsL6biVro'),(11,'La dame de chez Maxime... ou presque,','Théâtre du Peuple, Bussang',0,2017,'','PerformingArt',0,'video','https://youtu.be/jgmpqicKFj8'),(12,'Lanquan li Jorn Son Lonc en May,','Pompidou Paris / ISELP Bruxelles',1,2017,NULL,'PerformingArt',0,'video',NULL),(13,'Spirit of coalition,','Parckdesign2016 , Bruxelles',0,2016,'','PerformingArt',0,'video',NULL),(14,'The Disoriented Cabaret,','Dutch Art Institute, Arnhem / Greylight Projects, Bruxelles',0,2016,NULL,'PerformingArt',0,'video',''),(15,'Dieu, les caravanes et les voitures,','Rodéo d’âme, Strasbourg',0,2016,NULL,'PerformingArt',0,'video',NULL),(16,'Opéra de Quat’sous,','Théâtre du Peuple, Bussang',0,2016,NULL,'PerformingArt',0,'video',NULL),(17,'Récital à deux sous,','Théâtre du Peuple, Bussang',0,2016,NULL,'PerformingArt',0,'video',NULL),(18,'Contrepoint pour Télévision,','Strasbourg',0,2014,NULL,'PerformingArt',0,'video',NULL),(19,'Drapeau sonore,','EVENTO 2011, Bordeaux',0,2011,NULL,'PerformingArt',0,'video',NULL),(20,'L\'ORCHESTRE 1 1* 1 2 / 1 2 1 1 - 1percu - cordes,','Ceeac, Strasbourg',0,2011,NULL,'PerformingArt',0,'video',NULL),(21,'Une poignée de Terre,','Rodéo d’âme, Strasbourg',0,2011,NULL,'PerformingArt',0,'video',NULL),(22,'Histoire du Soldat / Strasvinsky,','Elan Lyrique, Strasbourg',0,2004,NULL,'SymphonicMusic',0,'video',NULL),(23,'Le Pauvre Matelot / Milhaud & Gendarme incompris/ Poulenc,','Elan Lyrique, TAPS Strasbourg',0,2005,NULL,'SymphonicMusic',0,'video',NULL),(24,'La clé des chants,','Orchestre Philarmonique de Monte Carlo',0,2008,NULL,'SymphonicMusic',0,'video',NULL),(25,'HsinChu Young symphonic Orchestra,','Taïwan',0,2014,NULL,'SymphonicMusic',0,'video',NULL),(26,'TECO Foundation Orchestra,','Taïwan',0,2012,NULL,'SymphonicMusic',0,'video',NULL),(27,'Requiem/MOZART,','Orchestre M , Strasbourg',0,2009,NULL,'SymphonicMusic',0,'video',NULL),(28,'Symphonie #8/DVORAK,','Orquesta Sinfónica Provincial de Bahía Blanca,',0,2013,NULL,'SymphonicMusic',0,'video',NULL),(29,'Piano concerto #5 / BEETHOVEN,','Orquesta Sinfónica Provincial de Bahía Blanca,',0,2013,NULL,'SymphonicMusic',0,'video',NULL),(30,'Bastien & Bastienne /MOZART,','Orchestre M , Strasbourg',0,2013,NULL,'SymphonicMusic',0,'video',NULL),(31,'Youth Concert,','Kammerensemble Kehl-Strasbourg -Kehl',0,2015,NULL,'SymphonicMusic',0,'video',NULL);
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

-- Dump completed on 2017-04-04 19:35:36
