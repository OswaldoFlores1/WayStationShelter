CREATE DATABASE  IF NOT EXISTS `waystationguests` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `waystationguests`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: waystationguests
-- ------------------------------------------------------
-- Server version	8.3.0

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
-- Table structure for table `entries`
--

DROP TABLE IF EXISTS `entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entries` (
  `identries` int NOT NULL AUTO_INCREMENT,
  `idguests` int NOT NULL,
  `entries_family_members` int NOT NULL,
  `entries_breakfast` tinyint(1) NOT NULL DEFAULT '0',
  `entries_lunch` tinyint(1) NOT NULL DEFAULT '0',
  `entries_bike` tinyint(1) NOT NULL DEFAULT '0',
  `entries_laundry` tinyint(1) NOT NULL DEFAULT '0',
  `entries_current_residence` varchar(200) NOT NULL,
  `entries_home_eviction` tinyint(1) DEFAULT '0',
  `entries_home_cutoff` tinyint(1) DEFAULT '0',
  `entries_home_crowded` tinyint(1) DEFAULT '0',
  `entries_home_unsafe` tinyint(1) DEFAULT '0',
  `entries_consider_homeless` varchar(500) DEFAULT NULL,
  `entries_service_food_now` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_food_takeout` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_clothes` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_laundry` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_clothes_multiple` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_home_address_or_phone` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_birth_cert_or_id` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_food_stamp` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_free_phone` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_housing_options` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_sleep_tonight` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_shower` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_attorney` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_locker` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_mental_health` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_physical_health` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_daycare` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_resources_for_kids` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_prevent_eviction` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_power_back` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_job` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_resume` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_smoking` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_addiction` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_talk` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_skills` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_parent_help` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_counseling` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_bus` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_work_or_appointment_transport` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_disability` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_insurance` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_medication` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_other` tinyint(1) NOT NULL DEFAULT '0',
  `entries_service_other_answer` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`identries`),
  UNIQUE KEY `identries_UNIQUE` (`identries`),
  KEY `idguests_idx` (`idguests`),
  CONSTRAINT `idguests` FOREIGN KEY (`idguests`) REFERENCES `guests` (`idguests`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entries`
--

LOCK TABLES `entries` WRITE;
/*!40000 ALTER TABLE `entries` DISABLE KEYS */;
/*!40000 ALTER TABLE `entries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guests`
--

DROP TABLE IF EXISTS `guests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guests` (
  `idguests` int NOT NULL AUTO_INCREMENT,
  `guest_first_name` varchar(45) NOT NULL,
  `guest_last_name` varchar(45) NOT NULL,
  `guest_social_last_four` int NOT NULL,
  `guest_phone` int NOT NULL,
  `guest_dob` date NOT NULL,
  `guest_email` varchar(45) NOT NULL,
  `guest_vet_stat` tinyint(1) NOT NULL DEFAULT '0',
  `guest_race` varchar(45) NOT NULL,
  `entries_disc_flyer` tinyint(1) NOT NULL DEFAULT '0',
  `entries_disc_friend` tinyint(1) NOT NULL DEFAULT '0',
  `entries_disc_church` tinyint(1) NOT NULL DEFAULT '0',
  `entries_disc_school` tinyint(1) NOT NULL DEFAULT '0',
  `entries_disc_social_service` tinyint(1) NOT NULL DEFAULT '0',
  `entries_disc_online` tinyint(1) NOT NULL DEFAULT '0',
  `entries_disc_211` tinyint(1) NOT NULL DEFAULT '0',
  `entries_disc_other` tinyint(1) NOT NULL DEFAULT '0',
  `entries_disc_other_answer` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idguests`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guests`
--

LOCK TABLES `guests` WRITE;
/*!40000 ALTER TABLE `guests` DISABLE KEYS */;
/*!40000 ALTER TABLE `guests` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-05 18:14:04
