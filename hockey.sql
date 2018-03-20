-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: hockey
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `hockeymatch`
--

DROP TABLE IF EXISTS `hockeymatch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hockeymatch` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_home_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_away_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `match_time` datetime NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score_home` tinyint(4) NOT NULL,
  `score_away` tinyint(4) NOT NULL,
  `score_home_2` tinyint(4) NOT NULL,
  `score_away_2` tinyint(4) NOT NULL,
  `half` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hockeymatch`
--

LOCK TABLES `hockeymatch` WRITE;
/*!40000 ALTER TABLE `hockeymatch` DISABLE KEYS */;
INSERT INTO `hockeymatch` VALUES (1,'3','4','2018-03-17 08:00:00','côté est',2,1,2,5,'second','2018-03-14 21:38:29','2018-03-14 21:38:49'),(2,'1','2','2018-03-17 08:00:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(3,'7','8','2018-03-17 08:40:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(4,'5','6','2018-03-17 08:40:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(5,'2','4','2018-03-17 09:35:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(6,'1','3','2018-03-17 09:35:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(7,'6','8','2018-03-17 10:15:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(8,'5','7','2018-03-17 10:15:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(9,'3','2','2018-03-17 11:10:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(10,'1','4','2018-03-17 11:10:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(11,'6','7','2018-03-17 11:50:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(12,'5','8','2018-03-17 11:50:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(13,'2','6','2018-03-17 12:45:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(14,'1','5','2018-03-17 12:45:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(15,'4','7','2018-03-17 13:25:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(16,'3','8','2018-03-17 13:25:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(17,'2','5','2018-03-17 14:20:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(18,'1','6','2018-03-17 14:20:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(19,'4','8','2018-03-17 15:00:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(20,'3','7','2018-03-17 15:00:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(21,'2','8','2018-03-17 15:55:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(22,'1','7','2018-03-17 15:55:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(23,'4','5','2018-03-17 16:35:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(24,'3','6','2018-03-17 16:35:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(25,'2','7','2018-03-17 17:30:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(26,'1','8','2018-03-17 17:30:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(27,'4','6','2018-03-17 18:10:00','côté est',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29'),(28,'3','5','2018-03-17 18:10:00','côté ouest (horloge)',0,0,0,0,'first','2018-03-14 21:38:29','2018-03-14 21:38:29');
/*!40000 ALTER TABLE `hockeymatch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (67,'2018_03_02_203119_create_match_table',1),(68,'2018_03_02_203225_create_team_table',1),(69,'2018_03_13_164802_create_results_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `match_id` tinyint(4) NOT NULL,
  `home_team` text COLLATE utf8_unicode_ci NOT NULL,
  `away_team` text COLLATE utf8_unicode_ci NOT NULL,
  `home_logo_url` text COLLATE utf8_unicode_ci NOT NULL,
  `away_logo_url` text COLLATE utf8_unicode_ci NOT NULL,
  `score_home` tinyint(4) NOT NULL,
  `score_away` tinyint(4) NOT NULL,
  `half` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (1,1,'Neuchâtel','Chx-de-Fds','','',2,1,'first','2018-03-14 21:38:47','2018-03-14 21:38:47'),(2,1,'Neuchâtel','Chx-de-Fds','','',2,5,'second','2018-03-14 21:38:49','2018-03-14 21:38:49');
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `games_played` tinyint(4) NOT NULL,
  `logoUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noOfWins` tinyint(4) NOT NULL,
  `noOfLoses` tinyint(4) NOT NULL,
  `noOfDraws` tinyint(4) NOT NULL,
  `noOfGoalsFor` tinyint(4) NOT NULL,
  `noOfGoalsAgainst` tinyint(4) NOT NULL,
  `noOfPoints` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'Saint-Imier',0,'assets/img/stimier.png',0,0,0,0,0,0,'2018-03-14 21:38:29','2018-03-14 21:38:29'),(2,'Bienne',0,'assets/img/biel.png',0,0,0,0,0,0,'2018-03-14 21:38:29','2018-03-14 21:38:29'),(3,'Neuchâtel',0,'assets/img/neuchatel.png',0,0,0,0,0,0,'2018-03-14 21:38:29','2018-03-14 21:38:29'),(4,'Chx-de-Fds',0,'assets/img/chxdefds.png',0,0,0,0,0,0,'2018-03-14 21:38:29','2018-03-14 21:38:29'),(5,'Ambri-Piotta',0,'assets/img/ambri.png',0,0,0,0,0,0,'2018-03-14 21:38:29','2018-03-14 21:38:29'),(6,'GCK / ZSC',0,'assets/img/zurich.png',0,0,0,0,0,0,'2018-03-14 21:38:29','2018-03-14 21:38:29'),(7,'Berne',0,'assets/img/bern.png',0,0,0,0,0,0,'2018-03-14 21:38:29','2018-03-14 21:38:29'),(8,'Langnau',0,'assets/img/langnau.png',0,0,0,0,0,0,'2018-03-14 21:38:29','2018-03-14 21:38:29');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-14 21:58:34
