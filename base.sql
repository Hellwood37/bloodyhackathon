-- MySQL dump 10.13  Distrib 5.7.27, for osx10.14 (x86_64)
--
-- Host: localhost    Database: bloodyhackaton
-- ------------------------------------------------------
-- Server version	5.7.27

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
-- Table structure for table `movies_pitches`
--

DROP TABLE IF EXISTS `movies_pitches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies_pitches` (
  `Movie_name` varchar(80) DEFAULT NULL,
  `Main_character` varchar(80) DEFAULT NULL,
  `Main_vilain` varchar(80) DEFAULT NULL,
  `Pitch` longtext,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User_name` varchar(80) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_pitches`
--

LOCK TABLES `movies_pitches` WRITE;
/*!40000 ALTER TABLE `movies_pitches` DISABLE KEYS */;
INSERT INTO `movies_pitches` VALUES ('Massacre à la Wildonneuse','MetalEtienne','Mikarambolage','Un élève de la Wild deviens fou et tente d\'exterminer tout le monde lors d\'un hackathon. MetalEtienne parviendra-t-il à le stopper?',1,NULL,NULL),('Halloweene','laurie Strode','Michaël Myers','Laurie et ses amis échepperont-ils à \'The Shape\'?',2,NULL,NULL),('A nightmare on Elm Streete','A scream queen','Freddy','Et si vos cauchemars devenaient réalité ?',3,NULL,NULL),('The last house on the left','young pretty girl','A psycho band of smokers','Si le pire arrivait à votre enfant, comment réagiriez-vous ?',4,NULL,NULL),('The thing','Un gars qui en a gros','The thing','Trapped on a mountain, how will you survive ?',5,NULL,NULL),('Friday the 13rd','Camp monitors','Who knows','Comment faire un carnage en 10 leçons ?',6,NULL,NULL),('The Critters','Naive people','arent they cutes?','Un festin de roi ?',7,NULL,NULL),('Cannibal Holocost','Some reporters','Have you read the title?','Une équipe de reporter a disparu, un expédition part à leur recherche dans cet \'enfer vert\'',8,NULL,NULL),('Dracula','Mina Archer','Vlad Tepes','L\'amour peut-il franchir toutes les frontières',9,NULL,NULL),('Brain Dead','Lionel et paquitar','Zombies','L\'Amour peut-il survivre à une invasion de Zombies?',10,NULL,NULL);
/*!40000 ALTER TABLE `movies_pitches` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-30 14:38:22
