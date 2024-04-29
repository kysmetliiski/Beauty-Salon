-- MySQL dump 10.13  Distrib 8.0.31, for macos12 (x86_64)
--
-- Host: localhost    Database: beauty_schema
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `areservations`
--

DROP TABLE IF EXISTS `areservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `areservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `chas` varchar(45) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `datachas` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areservations`
--

LOCK TABLES `areservations` WRITE;
/*!40000 ALTER TABLE `areservations` DISABLE KEYS */;
INSERT INTO `areservations` VALUES (1,NULL,'9:00',20,'2023-06-02 00:00:00'),(2,NULL,'13:00',20,'2023-08-28 00:00:00');
/*!40000 ALTER TABLE `areservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mreservations`
--

DROP TABLE IF EXISTS `mreservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mreservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `chas` varchar(45) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `datachas` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mreservations`
--

LOCK TABLES `mreservations` WRITE;
/*!40000 ALTER TABLE `mreservations` DISABLE KEYS */;
INSERT INTO `mreservations` VALUES (1,NULL,'10:00',20,'10/05/2023');
/*!40000 ALTER TABLE `mreservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` text,
  `price` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Почистване на лице','Иновативна терапия за дълбоко почистване и регенерация на лицето, чрез специално разработени серуми и контролиран вакуум.','75','login'),(2,'Мъжко подстригване при Марио','Модерна визия с отлично качество за всеки мъж!','35','login'),(3,'Горна устна-жени','Elysion премахва нежеланото окосмяване от всеки фототип според скалата на Fitzpatrick. С нашият диоден лазер може да се прави епилация и през лятото. Окосмяването на третираната зона  редуцира веднага след първата процедура, с дълготрайни резултати.','28','login'),(4,'Мъжко подстригване при Веселин','Модерна визия с отлично качество за всеки мъж!','10','veselin'),(5,'Микропигментация на очна линия / Soft Liner Eyes','Процедура, при която се внася постоянен моливоподобен пигмент в горната или долната линия на очите, за да се подчертае тяхната форма и цвят.','350','login'),(6,'Микропигментация на устни/ Aquarelle Lips','Процедура, при която се внася постоянен цвят или дефиниция в устните с помощта на пигменти, за да се постигнат по-плътни, по-цветни или по-формулирани устни.','400','login'),(7,'Микропигментация на Вежди/ Magic Shading Brows','Процедура, при която се внася постоянен пигмент под кожата на веждите, с цел коригиране, дефиниране или запълване на липсващи части от веждите, предоставяйки по-плътен и подчертан външен вид.','350','login'),(8,'Аква пилинг + Луксозна лифтинг терапия','Интензивна борба с признаците на отпуснатата кожа и мощен лифтинг ефект!Лифтинг терапията на MULTYBALANCE подхранва клетките с помощта на екстракт фитохормони от Ирис и скъпоценнии масла. Веднага след терапия се забелязва резултат на озарена и сияйна кожа!','125','login'),(11,'asf','dgkkdf','130',NULL);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uktclog`
--

DROP TABLE IF EXISTS `uktclog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uktclog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` text NOT NULL,
  `type` enum('user','superuser') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uktclog`
--

LOCK TABLES `uktclog` WRITE;
/*!40000 ALTER TABLE `uktclog` DISABLE KEYS */;
INSERT INTO `uktclog` VALUES (1,'Veselin','Atanasov','vesko10203@abv.bg','12345','superuser');
/*!40000 ALTER TABLE `uktclog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vreservations`
--

DROP TABLE IF EXISTS `vreservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vreservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `chas` varchar(45) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `datachas` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vreservations`
--

LOCK TABLES `vreservations` WRITE;
/*!40000 ALTER TABLE `vreservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `vreservations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-29  9:15:34
