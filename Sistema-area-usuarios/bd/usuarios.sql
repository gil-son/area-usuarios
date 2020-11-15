-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: sistema2
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `imagem` varchar(150) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `senha` char(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Alana','https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ0o0FP1af7evpo_Pr6wNeg-VKnN16pyKX7ww&usqp=CAU','alana@gmail.com','b59c67bf196a4758191e42f76670ceba'),(2,'Júlio Cocielo','https://diariodonordeste.verdesmares.com.br/image/contentid/policy:1.2989117:1600255516/Cocielo.jpg?f=16x9&$p$f=d1dba00','julio@gmail','b59c67bf196a4758191e42f76670ceba'),(4,'Fulano A','https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ0o0FP1af7evpo_Pr6wNeg-VKnN16pyKX7ww&usqp=CAU','fulanoa@gmail','b59c67bf196a4758191e42f76670ceba'),(5,'aaaa','https://cdn.icon-icons.com/icons2/1506/PNG/512/emblemok_103757.png','aaaa@gmail','b59c67bf196a4758191e42f76670ceba'),(6,'Alana2','https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ0o0FP1af7evpo_Pr6wNeg-VKnN16pyKX7ww&usqp=CAU','alana2@gmail.com','b59c67bf196a4758191e42f76670ceba'),(7,'Alana3','https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ0o0FP1af7evpo_Pr6wNeg-VKnN16pyKX7ww&usqp=CAU','alana3@gmail.com','b59c67bf196a4758191e42f76670ceba'),(8,'Alana','https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ0o0FP1af7evpo_Pr6wNeg-VKnN16pyKX7ww&usqp=CAU','alana4@gmail.com','b59c67bf196a4758191e42f76670ceba');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-14  8:00:12
