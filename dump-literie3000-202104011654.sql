-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: literie3000
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

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
-- Table structure for table `lits`
--

DROP TABLE IF EXISTS `lits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lits` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `marque` varchar(50) NOT NULL,
  `taille` varchar(250) NOT NULL,
  `prix` decimal(5,2) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lits`
--

LOCK TABLES `lits` WRITE;
/*!40000 ALTER TABLE `lits` DISABLE KEYS */;
INSERT INTO `lits` VALUES (2,'Dreamway','Matelas Waldor 90x190',809.00,'https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/M/A/MAT-MOLIERE_01.jpg'),(4,'Epeda','Matelas Melon 160x200',950.00,'https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/w/e/web-alize1.jpg'),(10,'Dreamway','Matelas Waldor 90x190',809.00,'https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/M/A/MAT-MOLIERE_01.jpg'),(11,'Bultex','Matelas Joris 140x190',759.00,'https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/M/A/MAT-MOLIERE_01.jpg'),(12,'Epeda','Matelas Melon 160x200',950.00,'https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/w/e/web-alize1.jpg'),(13,'Dorsoline','Matelas poire 140x200',750.00,'https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/h/e/heris_1.jpg'),(14,'MemoryLine','matelas Pomme 160x190',859.00,'https://www.leroidumatelas.fr/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/w/e/web-tesla.jpg');
/*!40000 ALTER TABLE `lits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'literie3000'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-01 16:54:46
