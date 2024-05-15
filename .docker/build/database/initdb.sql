-- MySQL dump 10.13  Distrib 8.0.34, for macos13 (arm64)
--
-- Host: 127.0.0.1    Database: letaky_endpoint_tipli
-- ------------------------------------------------------
-- Server version	8.2.0

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
-- Table structure for table `doctrine_migrations`
--

DROP TABLE IF EXISTS `doctrine_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migrations` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migrations`
--

LOCK TABLES `doctrine_migrations` WRITE;
/*!40000 ALTER TABLE `doctrine_migrations` DISABLE KEYS */;
INSERT INTO `doctrine_migrations` VALUES ('Migrations\\Version20240514141720','2024-05-14 16:17:49',56);
/*!40000 ALTER TABLE `doctrine_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leaflet`
--

DROP TABLE IF EXISTS `leaflet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leaflet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `shop_id` int DEFAULT NULL,
  `url` varchar(2048) COLLATE utf8mb3_unicode_ci NOT NULL,
  `valid_from` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expired_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `title` varchar(2048) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3D7389A74D16C4DD` (`shop_id`),
  CONSTRAINT `FK_3D7389A74D16C4DD` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leaflet`
--

LOCK TABLES `leaflet` WRITE;
/*!40000 ALTER TABLE `leaflet` DISABLE KEYS */;
INSERT INTO `leaflet` VALUES (1,1,'https://xxxxx','2024-05-13 00:00:00','2024-06-30 00:00:00',NULL),(2,1,'https://expirovanyletak','2024-03-01 00:00:00','2024-04-30 00:00:00',NULL),(3,1,'xxxxx','2024-04-30 00:00:00','2024-05-15 00:00:00',NULL),(5,4,'https://leaflets.kaufland.com/sk-SK/SK_sk_KDZ_2220_SK19-LFT/view/flyer/page/1','2024-05-01 00:00:00','2024-05-15 00:00:00','Kaufland leták'),(6,4,'https://leaflets.kaufland.com/sk-SK/SK_sk_KDZ_2220_SK19-LFT/view/flyer/page/1','2024-05-01 00:00:00','2024-05-15 00:00:00',NULL);
/*!40000 ALTER TABLE `leaflet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shop` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_AC6A4CA25E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop`
--

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;
INSERT INTO `shop` VALUES (2,'Billa'),(3,'Kaufland'),(1,'Lidl'),(4,'xxxxx');
/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-15 21:02:13
