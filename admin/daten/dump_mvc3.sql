-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: mvc3
-- ------------------------------------------------------
-- Server version	11.4.0-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `mvc3`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `mvc3` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `mvc3`;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin','$2y$10$j8LA2gr/H.aQGnWoM8uoBO7xNKxDG2K7AL3E4xjTkE76awSmrf7B6');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategorien`
--

DROP TABLE IF EXISTS `kategorien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategorien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategorien` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategorien`
--

LOCK TABLES `kategorien` WRITE;
/*!40000 ALTER TABLE `kategorien` DISABLE KEYS */;
INSERT INTO `kategorien` VALUES (1,'Anwendungsentwicklung'),(2,'Systemintegration'),(3,'Web development'),(4,'Büromanagement');
/*!40000 ALTER TABLE `kategorien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personen`
--

DROP TABLE IF EXISTS `personen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anrede` varchar(30) NOT NULL,
  `vorname` varchar(30) NOT NULL,
  `nachname` varchar(30) NOT NULL,
  `strasse` varchar(50) NOT NULL,
  `hausnr` int(11) NOT NULL,
  `plz` int(11) NOT NULL,
  `ort` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personen`
--

LOCK TABLES `personen` WRITE;
/*!40000 ALTER TABLE `personen` DISABLE KEYS */;
INSERT INTO `personen` VALUES (1,'Herr','Liam','Müller','Hauptstraße',12,12345,'Berlin','liam.m@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(2,'Frau','Emma','Schmidt','Bahnhofsweg',34,23456,'Hamburg','emma.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(3,'Herr','Noah','Schneider','Marktplatz',56,34567,'Frankfurt','noah.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(4,'Frau','Olivia','Fischer','Gartenstraße',78,45678,'München','olivia.f@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(5,'Frau','Ava','Weber','Dorfplatz',90,56789,'Köln','ava.w@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(6,'Herr','Lucas','Wagner','Am Ring',22,67890,'Stuttgart','lucas.w@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(7,'Frau','Sophia','Becker','Lindenallee',44,78901,'Düsseldorf','sophia.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(8,'Frau','Mia','Schulz','Birkenweg',66,89012,'Dresden','mia.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(9,'Herr','Liam','Hofmann','Ahornstraße',88,90123,'Leipzig','liam.h@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(10,'Frau','Emma','Schmitt','Erlenweg',10,71234,'München','emma.s1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(11,'Herr','Noah','Koch','Buchenallee',32,12345,'Dresden','noah.k@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(12,'Frau','Olivia','Vogel','Kiefernweg',54,23456,'Hamburg','olivia.v@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(13,'Frau','Ava','Mayer','Tannenstraße',76,34567,'Köln','ava.m@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(14,'Herr','Lucas','Bauer','Eschenplatz',98,45678,'Leipzig','lucas.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(15,'Frau','Sophia','Richter','Ulmenweg',20,56789,'Berlin','sophia.r@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(16,'Frau','Mia','Kühn','Lindenstraße',42,67890,'Frankfurt','mia.k@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(17,'Herr','Liam','Schulz','Birkenweg',64,78901,'Stuttgart','liam.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(18,'Frau','Emma','Wagner','Fichtenweg',86,89012,'Düsseldorf','emma.w1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(19,'Herr','Noah','Becker','Kastanienplatz',16,90123,'Leipzig','noah.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(20,'Frau','Olivia','Fischer','Erlenstraße',38,61234,'München','olivia.f1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(21,'Frau','Ava','Weber','Lindenplatz',60,12345,'Berlin','ava.w1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(22,'Herr','Lucas','Schulz','Buchenplatz',82,23456,'Hamburg','lucas.s1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(23,'Frau','Sophia','Hofmann','Ahornweg',4,34567,'Frankfurt','sophia.h@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(24,'Frau','Mia','Schmidt','Kiefernpfad',26,45678,'München','mia.s1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(25,'Herr','Liam','Vogel','Eichenallee',48,56789,'Köln','liam.v@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(26,'Frau','Elena','Schulz','Buchenplatz',80,89012,'Dresden','elena.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(27,'Herr','David','Hofmann','Ahornweg',2,90123,'Leipzig','david.h@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(28,'Frau','Isabella','Schmidt','Kiefernpfad',24,41234,'München','isabella.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(29,'Frau','Sophie','Maier','Rosenstraße',14,34567,'München','sophie.m@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(30,'Herr','Leon','Krause','Fliederweg',36,45678,'Berlin','leon.k@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(31,'Frau','Emilia','Wagner','Sonnenallee',58,56789,'Frankfurt','emilia.w@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(32,'Herr','Benjamin','Bauer','Mondstraße',80,67890,'Köln','benjamin.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(33,'Frau','Ella','Hofmann','Sterngasse',2,78901,'Hamburg','ella.h@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(34,'Herr','Finn','Fischer','Wiesenweg',24,89012,'Stuttgart','finn.f@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(35,'Frau','Lina','Becker','Amselweg',46,90123,'Düsseldorf','lina.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(36,'Herr','Milo','Schulz','Lindenstraße',68,71234,'Leipzig','milo.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(37,'Frau','Maya','Koch','Erlenweg',90,12345,'Dresden','maya.k@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(38,'Herr','Luca','Vogel','Buchenplatz',12,23456,'Hamburg','luca.v@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(39,'Frau','Amelie','Mayer','Ahornweg',34,34567,'Frankfurt','amelie.m@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(40,'Herr','Oscar','Bauer','Kiefernstraße',56,45678,'Stuttgart','oscar.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(41,'Frau','Eva','Wagner','Birkenplatz',78,56789,'Düsseldorf','eva.w@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(42,'Herr','Liam','Richter','Lindenallee',10,67890,'Berlin','liam.r@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(43,'Frau','Lina','Kühn','Dorfplatz',32,78901,'Köln','lina.k@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(44,'Herr','Henry','Schulz','Am Ring',54,89012,'Leipzig','henry.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(45,'Frau','Clara','Hofmann','Eschenplatz',76,90123,'München','clara.h@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(46,'Herr','Elias','Becker','Ulmenweg',98,21234,'Dresden','elias.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(47,'Frau','Emma','Schmidt','Birkenweg',20,12345,'Stuttgart','emma.s2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(48,'Herr','David','Fischer','Erlenstraße',42,23456,'Frankfurt','david.f@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(49,'Frau','Mia','Weber','Lindenplatz',64,34567,'Hamburg','mia.w@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(50,'Herr','Liam','Schulz','Buchenplatz',86,45678,'Berlin','liam.s2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(51,'Frau','Sophia','Hofmann','Ahornweg',8,56789,'Köln','sophia.h1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(52,'Frau','Mila','Schmidt','Kiefernpfad',30,67890,'München','mila.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(53,'Herr','Luca','Vogel','Eichenallee',52,78901,'Düsseldorf','luca.v1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(54,'Frau','Elena','Schulz','Buchenplatz',74,89012,'Dresden','elena.s1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(55,'Herr','David','Hofmann','Ahornweg',6,90123,'Leipzig','david.h1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(56,'Frau','Isabella','Schmidt','Kiefernpfad',28,81234,'München','isabella.s1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(57,'Herr','Felix','Müller','Ahornstraße',14,34567,'München','felix.m@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(58,'Frau','Sophie','Krause','Erlenweg',36,45678,'Berlin','sophie.k@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(59,'Herr','Leon','Wagner','Fliederweg',58,56789,'Frankfurt','leon.w@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(60,'Frau','Emilia','Bauer','Birkenstraße',80,67890,'Köln','emilia.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(61,'Herr','Benjamin','Hofmann','Kastanienplatz',2,78901,'Hamburg','benjamin.h@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(62,'Frau','Ella','Fischer','Buchenplatz',24,89012,'Stuttgart','ella.f@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(63,'Herr','Finn','Becker','Amselweg',46,90123,'Düsseldorf','finn.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(64,'Frau','Lina','Schulz','Lindenallee',68,21435,'Leipzig','lina.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(65,'Herr','Milo','Koch','Tannenstraße',90,12345,'Dresden','milo.k@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(66,'Frau','Maya','Vogel','Birkenweg',12,23456,'Hamburg','maya.v@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(67,'Herr','Luca','Mayer','Ahornweg',34,34567,'Frankfurt','luca.m@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(68,'Frau','Amelie','Bauer','Kiefernpfad',56,45678,'Stuttgart','amelie.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(69,'Herr','Oscar','Wagner','Lindenplatz',78,56789,'Düsseldorf','oscar.w@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(70,'Frau','Eva','Richter','Eschenplatz',10,67890,'Berlin','eva.r@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(71,'Herr','Liam','Kühn','Dorfplatz',32,78901,'Köln','liam.k@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(72,'Frau','Clara','Schulz','Fichtenweg',54,89012,'Leipzig','clara.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(73,'Herr','Elias','Hofmann','Sterngasse',76,90123,'München','elias.h@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(74,'Frau','Emma','Becker','Ulmenweg',98,21435,'Dresden','emma.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(75,'Herr','Lina','Fischer','Birkenplatz',20,12345,'Stuttgart','lina.f@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(76,'Frau','Henry','Wagner','Kiefernstraße',42,23456,'Frankfurt','henry.w@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(77,'Frau','Clara','Mayer','Dorfplatz',64,34567,'Hamburg','clara.m@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(78,'Herr','Elias','Schulz','Erlenstraße',86,45678,'Berlin','elias.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(79,'Frau','Sophia','Hofmann','Lindenplatz',8,56789,'Köln','sophia.h2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(80,'Frau','Mila','Schmidt','Buchenplatz',30,67890,'München','mila.s1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(81,'Herr','Luca','Vogel','Eichenallee',52,78901,'Düsseldorf','luca.v2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(82,'Frau','Elena','Becker','Kastanienplatz',74,89012,'Dresden','elena.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(83,'Herr','David','Hofmann','Ahornweg',6,90123,'Leipzig','david.h2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(84,'Frau','Isabella','Schmidt','Kiefernpfad',28,21435,'München','isabella.s2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(85,'Herr','Paul','Becker','Tannenweg',14,34567,'Berlin','paul.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(86,'Frau','Marie','Koch','Dorfstraße',36,45678,'Düsseldorf','marie.k@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(87,'Herr','Max','Mayer','Eichenweg',58,56789,'Köln','max.m@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(88,'Frau','Emily','Vogel','Fichtenstraße',80,67890,'München','emily.v@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(89,'Herr','Jonas','Wagner','Amselplatz',2,78901,'Frankfurt','jonas.w@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(90,'Frau','Mia','Schmidt','Ulmenweg',24,89012,'Leipzig','mia.s3@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(91,'Herr','Liam','Becker','Buchenplatz',46,90123,'Stuttgart','liam.b2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(92,'Frau','Lina','Hofmann','Lindenallee',68,21435,'Hamburg','lina.h@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(93,'Herr','Noah','Fischer','Kiefernpfad',90,12345,'Berlin','noah.f@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(94,'Frau','Sophie','Kühn','Tannenstraße',12,23456,'Dresden','sophie.k4@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(95,'Herr','Elias','Mayer','Kastanienplatz',34,34567,'Köln','elias.m@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(96,'Frau','Emma','Wagner','Birkenweg',56,45678,'München','emma.w@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(97,'Herr','Leon','Krause','Dorfplatz',78,56789,'Hamburg','leon.k2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(98,'Frau','Mila','Becker','Eschenplatz',10,67890,'Frankfurt','mila.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(99,'Herr','Benjamin','Schulz','Fichtenweg',32,78901,'Stuttgart','benjamin.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(100,'Frau','Ella','Hofmann','Sterngasse',54,89012,'Leipzig','ella.h2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(101,'Herr','Henry','Becker','Buchenplatz',76,90123,'Düsseldorf','henry.b@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(102,'Frau','Clara','Müller','Erlenstraße',98,21435,'Berlin','clara.m4@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(103,'Herr','Liam','Richter','Ahornweg',20,12345,'Hamburg','liam.r1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(104,'Frau','Emilia','Schulz','Buchenplatz',42,23456,'Köln','emilia.s@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(105,'Herr','Oscar','Vogel','Lindenstraße',64,34567,'Frankfurt','oscar.v@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(106,'Frau','Sophia','Hofmann','Kiefernstraße',86,45678,'Stuttgart','sophia.h3@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(107,'Herr','Milo','Schmidt','Eichenallee',8,56789,'Düsseldorf','milo.s2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(108,'Frau','Amelie','Becker','Amselweg',30,67890,'München','amelie.b2@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(109,'Herr','David','Müller','Kiefernstraße',74,89012,'Berlin','david.m1@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(110,'Frau','Elena','Fischer','Lindenplatz',6,90123,'Hamburg','elena.f@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6'),(111,'Herr','Luca','Vogel','Erlenstraße',28,21435,'Frankfurt','luca.v3@example.com','$2y$10$cZznY06B189UTH/njTYWWuqH6nddp94HYrCITRaBPsmzMh6/oWeS6');
/*!40000 ALTER TABLE `personen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personen_termine`
--

DROP TABLE IF EXISTS `personen_termine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personen_termine` (
  `personen_id` int(11) NOT NULL,
  `termine_id` int(11) NOT NULL,
  KEY `personen_fk_1` (`personen_id`),
  KEY `termine_fk_2` (`termine_id`),
  CONSTRAINT `personen_fk_1` FOREIGN KEY (`personen_id`) REFERENCES `personen` (`id`),
  CONSTRAINT `termine_fk_2` FOREIGN KEY (`termine_id`) REFERENCES `termine` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personen_termine`
--

LOCK TABLES `personen_termine` WRITE;
/*!40000 ALTER TABLE `personen_termine` DISABLE KEYS */;
INSERT INTO `personen_termine` VALUES (1,46),(1,108),(1,64),(1,113),(1,7),(1,1),(1,104),(2,91),(2,55),(2,58),(2,4),(2,2),(2,24),(2,12),(2,84),(2,7),(2,61),(2,56),(3,88),(3,14),(3,1),(3,119),(3,74),(3,81),(3,94),(3,6),(4,4),(4,83),(4,16),(4,101),(4,63),(4,78),(4,54),(5,16),(5,4),(5,66),(5,59),(5,73),(5,87),(5,47),(6,66),(6,1),(6,82),(6,73),(6,18),(6,2),(6,25),(6,105),(7,72),(7,106),(7,3),(7,56),(7,81),(7,109),(8,41),(8,93),(8,59),(8,108),(8,109),(8,9),(8,5),(8,8),(8,6),(9,45),(9,61),(9,88),(9,12),(9,16),(9,4),(9,87),(9,99),(10,99),(10,4),(10,28),(10,68),(10,18),(10,33),(10,24),(10,5),(10,92),(10,75),(10,45),(11,61),(11,1),(11,31),(11,43),(11,34),(11,19),(12,6),(12,95),(12,3),(12,19),(12,8),(12,35),(12,5),(13,42),(13,64),(13,24),(13,118),(13,96),(13,27),(13,83),(13,43),(13,75),(14,13),(14,108),(14,118),(14,18),(14,112),(14,44),(14,83),(14,74),(15,9),(15,55),(15,37),(15,33),(15,46),(15,105),(15,66),(15,56),(15,106),(15,11),(16,7),(16,48),(16,9),(16,81),(16,72),(16,25),(16,4),(16,26),(16,98),(17,83),(17,53),(17,89),(17,107),(17,75),(17,98),(17,67),(17,101),(17,77),(17,25),(18,6),(18,91),(18,1),(18,51),(18,54),(18,52),(18,9),(18,104),(19,7),(19,38),(19,9),(19,108),(19,57),(19,66),(19,4),(19,7),(19,8),(19,32),(20,112),(20,36),(20,51),(20,113),(20,86),(20,61),(20,57),(20,13),(21,96),(21,11),(21,74),(21,58),(21,78),(21,12),(21,2),(21,72),(21,16),(21,49),(22,115),(22,106),(22,8),(22,103),(22,15),(22,3),(22,32),(22,1),(22,105),(22,13),(23,87),(23,33),(23,21),(23,57),(23,99),(23,7),(23,11),(23,108),(23,78),(24,32),(24,36),(24,81),(24,67),(24,33),(24,42),(24,87),(25,48),(25,32),(25,68),(25,11),(25,63),(25,4),(25,59),(26,44),(26,13),(26,14),(26,28),(26,96),(26,77),(26,83),(26,39),(26,2),(26,34),(27,92),(27,113),(27,63),(27,13),(27,4),(27,107),(27,11),(27,36),(28,54),(28,24),(28,21),(28,49),(28,15),(28,84),(28,57),(28,76),(29,4),(29,29),(29,42),(29,53),(29,46),(29,64),(29,17),(29,81),(30,37),(30,58),(30,41),(30,19),(30,5),(30,42),(30,105),(30,76),(30,59),(30,22),(31,64),(31,105),(31,85),(31,61),(31,6),(31,78),(31,14),(32,45),(32,89),(32,9),(32,119),(32,47),(32,17),(32,4),(32,93),(32,98),(33,33),(33,97),(33,3),(33,118),(33,36),(33,58),(34,84),(34,91),(34,11),(34,92),(34,57),(34,118),(35,47),(35,7),(35,9),(35,49),(35,109),(35,3),(35,97),(35,66),(35,92),(36,38),(36,6),(36,62),(36,51),(36,65),(36,97),(36,15),(37,62),(37,106),(37,11),(37,61),(37,22),(37,117),(37,113),(37,5),(38,78),(38,96),(38,113),(38,72),(38,69),(38,76),(39,54),(39,83),(39,41),(39,68),(39,113),(39,66),(39,62),(39,63),(40,111),(40,114),(40,8),(40,42),(40,36),(40,106),(40,85),(40,73),(40,87),(40,44),(41,85),(41,89),(41,2),(41,44),(41,48),(41,63),(41,5),(41,19),(41,6),(41,103),(42,7),(42,114),(42,17),(42,7),(42,91),(42,97),(42,83),(42,41),(42,33),(43,25),(43,98),(43,23),(43,105),(43,52),(43,69),(43,85),(43,47),(43,92),(44,92),(44,12),(44,32),(44,3),(44,37),(44,22),(44,62),(44,43),(45,82),(45,106),(45,99),(45,11),(45,72),(45,2),(45,93),(46,4),(46,41),(46,42),(46,33),(46,8),(46,8),(46,87),(47,42),(47,23),(47,37),(47,117),(47,11),(47,74),(47,92),(47,39),(47,119),(47,4),(48,8),(48,49),(48,42),(48,18),(48,16),(48,63),(48,85),(48,24),(48,22),(49,113),(49,9),(49,96),(49,2),(49,41),(49,3),(50,97),(50,47),(50,82),(50,18),(50,43),(50,29),(50,85),(51,95),(51,9),(51,7),(51,41),(51,1),(51,111),(51,48),(51,112),(51,85),(51,38),(51,77),(52,109),(52,61),(52,86),(52,1),(52,58),(52,28),(52,43),(52,29),(52,59),(53,19),(53,32),(53,48),(53,103),(53,89),(53,87),(53,35),(53,6),(53,79),(53,29),(53,37),(54,34),(54,37),(54,88),(54,9),(54,62),(54,89),(54,114),(54,53),(54,31),(55,8),(55,37),(55,71),(55,115),(55,3),(55,54),(55,68),(55,44),(55,32),(56,104),(56,43),(56,86),(56,98),(56,99),(56,85),(57,78),(57,115),(57,69),(57,92),(57,22),(57,41),(57,2),(58,16),(58,97),(58,104),(58,1),(58,101),(58,11),(58,109),(58,74),(58,1),(58,69),(58,111),(59,28),(59,1),(59,5),(59,107),(59,2),(59,1),(59,45),(59,26),(60,65),(60,23),(60,45),(60,91),(60,76),(60,13),(60,33),(60,34),(61,7),(61,117),(61,29),(61,43),(61,64),(61,24),(61,28),(61,3),(62,95),(62,29),(62,24),(62,82),(62,94),(62,76),(62,56),(63,89),(63,37),(63,18),(63,66),(63,48),(63,82),(63,35),(64,54),(64,2),(64,32),(64,85),(64,4),(64,33),(64,29),(65,23),(65,1),(65,49),(65,26),(65,18),(65,9),(65,46),(65,7),(66,95),(66,44),(66,84),(66,12),(66,25),(66,32),(66,8),(66,1),(66,87),(67,88),(67,63),(67,108),(67,78),(67,14),(67,112),(67,37),(67,57),(67,65),(67,62),(67,113),(68,69),(68,11),(68,57),(68,6),(68,109),(68,52),(68,14),(68,7),(68,21),(69,113),(69,108),(69,34),(69,88),(69,75),(69,56),(69,3),(69,57),(70,41),(70,34),(70,77),(70,17),(70,99),(70,37),(70,95),(70,111),(71,29),(71,115),(71,2),(71,99),(71,43),(71,95),(71,79),(71,107),(71,38),(72,15),(72,3),(72,62),(72,75),(72,4),(72,64),(72,19),(72,59),(72,71),(72,17),(73,95),(73,64),(73,105),(73,111),(73,44),(73,47),(73,9),(74,8),(74,7),(74,14),(74,6),(74,59),(74,87),(74,103),(75,13),(75,14),(75,81),(75,96),(75,1),(75,56),(75,17),(75,52),(75,87),(75,45),(75,108),(76,49),(76,6),(76,15),(76,43),(76,94),(76,93),(76,69),(76,109),(76,12),(76,42),(77,116),(77,69),(77,36),(77,7),(77,102),(77,58),(77,5),(77,22),(78,112),(78,84),(78,22),(78,28),(78,52),(78,48),(78,1),(78,91),(78,109),(78,1),(79,47),(79,39),(79,75),(79,102),(79,107),(79,101),(79,79),(79,116),(80,57),(80,25),(80,94),(80,24),(80,88),(80,103),(80,69),(81,28),(81,14),(81,3),(81,27),(81,106),(81,112),(81,118),(81,53),(81,98),(82,107),(82,64),(82,38),(82,4),(82,98),(82,2),(82,39),(83,103),(83,97),(83,112),(83,53),(83,104),(83,15),(83,52),(83,19),(83,11),(83,115),(84,62),(84,94),(84,81),(84,26),(84,71),(84,83),(84,107),(84,24),(85,56),(85,108),(85,13),(85,106),(85,63),(85,23),(85,7),(85,86),(85,102),(85,25),(86,71),(86,108),(86,35),(86,88),(86,58),(86,111),(86,21),(86,32),(86,77),(86,91),(86,3),(87,6),(87,64),(87,109),(87,71),(87,76),(87,5),(87,104),(87,22),(87,46),(88,118),(88,64),(88,107),(88,93),(88,34),(88,44),(88,2),(88,96),(89,2),(89,15),(89,17),(89,33),(89,75),(89,71),(89,7),(89,26),(90,48),(90,107),(90,21),(90,4),(90,91),(90,81),(90,49),(90,38),(90,101),(91,111),(91,9),(91,115),(91,53),(91,36),(91,4),(92,117),(92,48),(92,92),(92,61),(92,94),(92,26),(93,12),(93,48),(93,46),(93,112),(93,42),(93,18),(93,1),(93,81),(93,52),(94,8),(94,58),(94,36),(94,95),(94,47),(94,92),(94,104),(95,81),(95,83),(95,11),(95,111),(95,105),(95,107),(95,13),(95,11),(95,9),(95,31),(96,9),(96,111),(96,101),(96,29),(96,94),(96,74),(96,11),(96,56),(96,73),(97,58),(97,36),(97,83),(97,59),(97,7),(97,14),(97,71),(97,21),(98,52),(98,106),(98,89),(98,98),(98,88),(98,22),(98,91),(98,44),(98,118),(99,34),(99,86),(99,5),(99,9),(99,79),(99,39),(99,51),(100,101),(100,3),(100,105),(100,16),(100,35),(100,58),(100,27),(100,11),(101,85),(101,47),(101,99),(101,86),(101,49),(101,26),(101,118),(102,102),(102,63),(102,78),(102,3),(102,24),(102,23),(102,28),(102,113),(102,2),(102,106),(103,22),(103,119),(103,99),(103,2),(103,5),(103,3),(103,96),(104,19),(104,93),(104,8),(104,31),(104,11),(104,54),(104,23),(104,53),(104,1),(105,41),(105,51),(105,44),(105,114),(105,82),(105,15),(105,117),(105,111),(105,8),(106,36),(106,26),(106,1),(106,75),(106,73),(106,47),(106,89),(106,61),(107,86),(107,1),(107,12),(107,7),(107,55),(107,28),(107,88),(107,1),(107,102),(107,71),(107,6),(108,1),(108,115),(108,39),(108,57),(108,99),(108,71),(108,61),(108,13),(109,91),(109,71),(109,56),(109,89),(109,74),(109,96),(109,101),(109,11),(109,8),(110,6),(110,11),(110,78),(110,56),(110,88),(110,69),(110,51),(110,94),(110,8),(110,35),(110,18),(111,11),(111,118),(111,6),(111,16),(111,72),(111,98),(111,96),(111,116),(111,29),(111,8);
/*!40000 ALTER TABLE `personen_termine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seminare`
--

DROP TABLE IF EXISTS `seminare`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seminare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(30) NOT NULL,
  `beschreibung` text NOT NULL,
  `preis` decimal(6,2) NOT NULL,
  `kategorien_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titel` (`titel`),
  KEY `kategorien_fk_1` (`kategorien_id`),
  CONSTRAINT `kategorien_fk_1` FOREIGN KEY (`kategorien_id`) REFERENCES `kategorien` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seminare`
--

LOCK TABLES `seminare` WRITE;
/*!40000 ALTER TABLE `seminare` DISABLE KEYS */;
INSERT INTO `seminare` VALUES (1,'KWIS','Wirtschafts- und Geschäftsprozesse',1750.00,4),(2,'WISO','Wirtschafts- und Soziallehre',1456.00,4),(3,'WARE','Wirtschafts- und Arbeitsrecht',1234.00,4),(4,'GRHW','Grundlagen Hardware',1876.00,2),(5,'GRDB','Grundlagen Relationale Datenbanken / SQL',1622.00,1),(6,'PCNE','Netzwerkgrundlagen',1357.00,2),(7,'GLCC','Grundlagen Cloud-Computing',1988.00,2),(8,'SCR1','Agiles Projektmanagement mit Scrum',1205.00,4),(9,'SCR2','Certified Scrum Master',1556.00,4),(10,'HCJ1','Programmierung in HTML5 mit JavaScript und CSS3 - Grundlagen',1765.00,1),(11,'HCJ2','Programmierung in HTML5 mit JavaScript und CSS3 - Aufbaukurs',1433.00,1),(12,'HCJ3','Programmierung in HTML5 mit JavaScript und CSS3 - Fortgeschrittene',1567.00,1),(13,'OSE1','Objektorientierte Programmierung',1899.00,1),(14,'UML1','UML - Unified Modeling Language',1123.00,1),(15,'REAC','React',1743.00,1),(16,'PYT1','Associate in Python Programming - Grundlagen',1244.00,1),(17,'PYT2','Associate in Python Programming - Aufbaukurs',1665.00,1),(18,'PYTP1','Associate in Python Programming - Zertifizierung',1956.00,1),(19,'JCA1','OCFA Java Foundations - Grundlagen',1344.00,1),(20,'JCA2','OCFA Java Foundations - Aufbaukurs',1432.00,1),(21,'JCA3','OCFA Java Foundations - Zertifizierung',1777.00,1),(22,'AWS11','AWS Certified: Developer Associate - Grundlagen',1989.00,2),(23,'AWS12','AWS Certified: Developer Associate - Aufbaukurs',1345.00,2),(24,'AWS13','AWS Certified: Developer Associate - Prüfungsvorbereitung und Zertifizierung',1567.00,2),(25,'PHPA','Objektorientierte Programmierung mit PHP: Grundlagen der PHP-Programmierung',1888.00,3),(26,'PHPB','Objektorientierte Programmierung mit PHP: Webentwicklung mit PHP',1112.00,3),(27,'PHPC','Objektorientierte Programmierung mit PHP: PHP & Datenbanken',1444.00,3),(28,'PHPD','Objektorientierte Programmierung mit PHP: Fremdformate, Administration und Sicherheit mit PHP',1999.00,3),(29,'PHPE','Objektorientierte Programmierung mit PHP: PHP-Fallstudie',1222.00,3),(30,'ZEND','Zend-PHP-Zertifizierung',1666.00,3),(31,'WPR1','Word Press - Grundlagen',1444.00,3),(32,'WPR2','Word Press - Aufbaukurs',1221.00,3);
/*!40000 ALTER TABLE `seminare` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standorte`
--

DROP TABLE IF EXISTS `standorte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standorte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `standort` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `standort` (`standort`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standorte`
--

LOCK TABLES `standorte` WRITE;
/*!40000 ALTER TABLE `standorte` DISABLE KEYS */;
INSERT INTO `standorte` VALUES (2,'Berlin'),(3,'Frankfurt'),(1,'Hamburg');
/*!40000 ALTER TABLE `standorte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `termine`
--

DROP TABLE IF EXISTS `termine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `termine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beginn` date NOT NULL,
  `ende` date NOT NULL,
  `seminare_id` int(11) NOT NULL,
  `standorte_id` int(11) NOT NULL,
  `raum` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `seminare_fk_1` (`seminare_id`),
  KEY `standorte_fk_2` (`standorte_id`),
  CONSTRAINT `seminare_fk_1` FOREIGN KEY (`seminare_id`) REFERENCES `seminare` (`id`),
  CONSTRAINT `standorte_fk_2` FOREIGN KEY (`standorte_id`) REFERENCES `standorte` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `termine`
--

LOCK TABLES `termine` WRITE;
/*!40000 ALTER TABLE `termine` DISABLE KEYS */;
INSERT INTO `termine` VALUES (1,'2024-01-08','2024-01-19',23,1,'RH101'),(2,'2024-01-08','2024-01-19',5,3,'RF101'),(3,'2024-01-08','2024-01-19',15,1,'RH102'),(4,'2024-01-15','2024-01-26',7,2,'RB101'),(5,'2024-01-15','2024-01-26',12,1,'RH103'),(6,'2024-01-15','2024-01-26',28,2,'RB103'),(7,'2024-01-22','2024-02-02',19,3,'RF101'),(8,'2024-01-22','2024-02-02',31,1,'RH101'),(9,'2024-01-22','2024-02-02',14,2,'RB102'),(10,'2024-02-05','2024-02-16',9,3,'RF102'),(11,'2024-02-05','2024-02-16',18,2,'RB101'),(12,'2024-02-05','2024-02-16',26,1,'RH101'),(13,'2024-02-12','2024-02-23',3,3,'RF101'),(14,'2024-02-12','2024-02-23',17,1,'RH102'),(15,'2024-02-12','2024-02-23',10,2,'RB105'),(16,'2024-02-19','2024-03-01',21,3,'RF103'),(17,'2024-02-19','2024-03-01',8,1,'RH104'),(18,'2024-02-19','2024-03-01',19,1,'RH105'),(19,'2024-02-19','2024-03-01',27,1,'RH101'),(20,'2024-03-04','2024-03-15',13,1,'RH101'),(21,'2024-03-04','2024-03-15',30,3,'RF101'),(22,'2024-03-04','2024-03-15',14,3,'RF102'),(23,'2024-03-04','2024-03-15',16,2,'RB101'),(24,'2024-03-11','2024-03-22',24,3,'RF103'),(25,'2024-03-11','2024-03-22',2,2,'RB102'),(26,'2024-03-11','2024-03-22',11,2,'RB104'),(27,'2024-03-18','2024-03-29',1,1,'RH101'),(28,'2024-03-18','2024-03-29',22,2,'RB101'),(29,'2024-03-18','2024-03-29',20,3,'RF101'),(30,'2024-03-18','2024-03-29',32,3,'RF104'),(31,'2024-04-01','2024-04-12',6,1,'RH101'),(32,'2024-04-01','2024-04-12',25,2,'RB101'),(33,'2024-04-01','2024-04-12',29,3,'RF101'),(34,'2024-04-08','2024-04-19',4,1,'RH102'),(35,'2024-04-08','2024-04-19',15,2,'RB103'),(36,'2024-04-08','2024-04-19',23,3,'RF102'),(37,'2024-04-15','2024-04-26',7,1,'RH101'),(38,'2024-04-15','2024-04-26',12,2,'RB101'),(39,'2024-04-15','2024-04-26',28,3,'RF101'),(40,'2024-05-06','2024-05-17',9,2,'RB101'),(41,'2024-05-06','2024-05-17',18,1,'RH101'),(42,'2024-05-06','2024-05-17',26,2,'RF103'),(43,'2024-05-13','2024-05-24',3,1,'RH102'),(44,'2024-05-13','2024-05-24',17,1,'RH103'),(45,'2024-05-13','2024-05-24',32,1,'RH104'),(46,'2024-05-13','2024-05-24',10,3,'RF101'),(47,'2024-05-20','2024-05-31',21,2,'RB101'),(48,'2024-05-20','2024-05-31',8,3,'RF102'),(49,'2024-05-20','2024-05-31',5,2,'RB102'),(50,'2024-05-20','2024-05-31',27,3,'RF103'),(51,'2024-06-03','2024-06-14',13,1,'RH101'),(52,'2024-06-03','2024-06-14',31,2,'RB101'),(53,'2024-06-03','2024-06-14',30,2,'RF101'),(54,'2024-06-03','2024-06-14',16,3,'RF104'),(55,'2024-06-10','2024-06-21',24,1,'RH102'),(56,'2024-06-10','2024-06-21',2,1,'RH103'),(57,'2024-06-10','2024-06-21',11,1,'RH104'),(58,'2024-06-17','2024-06-28',1,3,'RF105'),(59,'2024-06-17','2024-06-28',22,3,'RF101'),(60,'2024-06-17','2024-06-28',20,1,'RH101'),(61,'2024-07-01','2024-07-12',6,1,'RH102'),(62,'2024-07-01','2024-07-12',25,1,'RH103'),(63,'2024-07-01','2024-07-12',29,2,'RF102'),(64,'2024-07-08','2024-07-19',4,3,'RF103'),(65,'2024-07-08','2024-07-19',15,3,'RF104'),(66,'2024-07-08','2024-07-19',23,2,'RB101'),(67,'2024-07-15','2024-07-26',7,3,'RF101'),(68,'2024-07-15','2024-07-26',12,3,'RF105'),(69,'2024-07-15','2024-07-26',14,1,'RH101'),(70,'2024-07-15','2024-07-26',28,1,'RH102'),(71,'2024-08-05','2024-08-16',9,3,'RF102'),(72,'2024-08-05','2024-08-16',18,1,'RH101'),(73,'2024-08-05','2024-08-16',26,2,'RF103'),(74,'2024-08-12','2024-08-23',3,1,'RH102'),(75,'2024-08-12','2024-08-23',17,2,'RB101'),(76,'2024-08-12','2024-08-23',10,1,'RH103'),(77,'2024-08-19','2024-08-30',21,2,'RB102'),(78,'2024-08-19','2024-08-30',8,2,'RF101'),(79,'2024-08-19','2024-08-30',27,1,'RH101'),(80,'2024-09-02','2024-09-13',13,1,'RH102'),(81,'2024-09-02','2024-09-13',30,3,'RF102'),(82,'2024-09-02','2024-09-13',16,2,'RB101'),(83,'2024-09-09','2024-09-20',24,1,'RH101'),(84,'2024-09-09','2024-09-20',2,3,'RF103'),(85,'2024-09-09','2024-09-20',32,2,'RF101'),(86,'2024-09-09','2024-09-20',11,3,'RF104'),(87,'2024-09-16','2024-09-27',1,3,'RF105'),(88,'2024-09-16','2024-09-27',22,1,'RH104'),(89,'2024-09-16','2024-09-27',20,3,'RF102'),(90,'2024-10-07','2024-10-18',6,2,'RB101'),(91,'2024-10-07','2024-10-18',25,3,'RF101'),(92,'2024-10-07','2024-10-18',29,1,'RH101'),(93,'2024-10-14','2024-10-25',4,2,'RB104'),(94,'2024-10-14','2024-10-25',31,3,'RF105'),(95,'2024-10-14','2024-10-25',15,2,'RB102'),(96,'2024-10-14','2024-10-25',23,1,'RH103'),(97,'2024-10-21','2024-11-01',7,1,'RH101'),(98,'2024-10-21','2024-11-01',12,3,'RF101'),(99,'2024-10-21','2024-11-01',28,2,'RB101'),(100,'2024-11-04','2024-11-15',9,1,'RH101'),(101,'2024-11-04','2024-11-15',18,3,'RF102'),(102,'2024-11-04','2024-11-15',26,3,'RF103'),(103,'2024-11-11','2024-11-22',3,2,'RB101'),(104,'2024-11-11','2024-11-22',17,3,'RF104'),(105,'2024-11-11','2024-11-22',5,1,'RH102'),(106,'2024-11-11','2024-11-22',10,1,'RH103'),(107,'2024-11-18','2024-11-29',21,1,'RH105'),(108,'2024-11-18','2024-11-29',8,2,'RB102'),(109,'2024-11-18','2024-11-29',27,2,'RB105'),(110,'2024-12-02','2024-12-13',13,2,'RB103'),(111,'2024-12-02','2024-12-13',30,1,'RH101'),(112,'2024-12-02','2024-12-13',16,1,'RH104'),(113,'2024-12-09','2024-12-20',24,3,'RF101'),(114,'2024-12-09','2024-12-20',19,2,'RB101'),(115,'2024-12-09','2024-12-20',2,3,'RF102'),(116,'2024-12-09','2024-12-20',11,2,'RB102'),(117,'2024-12-16','2024-12-27',1,1,'RH101'),(118,'2024-12-16','2024-12-27',22,2,'RB103'),(119,'2024-12-16','2024-12-27',20,2,'RB104');
/*!40000 ALTER TABLE `termine` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-20 14:27:33
