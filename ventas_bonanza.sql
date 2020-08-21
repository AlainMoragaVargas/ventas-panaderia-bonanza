CREATE DATABASE  IF NOT EXISTS `ventas_bonanza` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ventas_bonanza`;
-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: ventas_bonanza
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `estado_ventas`
--

DROP TABLE IF EXISTS `estado_ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `estado_ventas` (
  `id_estado_ventas` int(11) NOT NULL,
  `descripcion_estado_ventas` varchar(20) NOT NULL,
  `estado_venta_prov` int(11) NOT NULL,
  PRIMARY KEY (`id_estado_ventas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_ventas`
--

LOCK TABLES `estado_ventas` WRITE;
/*!40000 ALTER TABLE `estado_ventas` DISABLE KEYS */;
INSERT INTO `estado_ventas` VALUES (999,'0-cerrado, 1-abierto',0);
/*!40000 ALTER TABLE `estado_ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta_provisoria`
--

DROP TABLE IF EXISTS `venta_provisoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `venta_provisoria` (
  `id_venta_prov` int(11) NOT NULL AUTO_INCREMENT,
  `valor_venta_prov` int(11) NOT NULL,
  `fecha_venta_prov` date NOT NULL,
  `hora_venta_prov` time NOT NULL,
  PRIMARY KEY (`id_venta_prov`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta_provisoria`
--

LOCK TABLES `venta_provisoria` WRITE;
/*!40000 ALTER TABLE `venta_provisoria` DISABLE KEYS */;
INSERT INTO `venta_provisoria` VALUES (1,5000,'2020-08-20','22:39:00'),(2,3400,'2020-08-20','22:39:00'),(3,5500,'2020-08-20','22:39:00');
/*!40000 ALTER TABLE `venta_provisoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas_totales`
--

DROP TABLE IF EXISTS `ventas_totales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ventas_totales` (
  `id_ventas_totales` int(11) NOT NULL AUTO_INCREMENT,
  `valor_total` int(11) NOT NULL,
  `fecha_ventas_totales` date NOT NULL,
  PRIMARY KEY (`id_ventas_totales`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas_totales`
--

LOCK TABLES `ventas_totales` WRITE;
/*!40000 ALTER TABLE `ventas_totales` DISABLE KEYS */;
INSERT INTO `ventas_totales` VALUES (29,13900,'2020-08-20');
/*!40000 ALTER TABLE `ventas_totales` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-20 22:42:38
