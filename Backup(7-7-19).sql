-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: gaido
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Dumping data for table `brand_users`
--

LOCK TABLES `brand_users` WRITE;
/*!40000 ALTER TABLE `brand_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `brand_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT  IGNORE INTO `brands` VALUES (1,'Burger King','img1.png','Best burger place in town',0,NULL,'2019-05-31 17:19:56','2019-05-31 17:19:56');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `discussions`
--

LOCK TABLES `discussions` WRITE;
/*!40000 ALTER TABLE `discussions` DISABLE KEYS */;
INSERT  IGNORE INTO `discussions` VALUES (1,1,'Had this last night. It was cold when it arrived but still tasted great.','img9.jpg',0,1,'2019-07-07 04:27:53','2019-07-07 04:27:53');
/*!40000 ALTER TABLE `discussions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT  IGNORE INTO `migrations` VALUES (10,'2019_07_07_072234_create_brand_categories_table',3),(11,'2019_07_07_072707_create_brand_subcategories_table',3),(12,'2014_10_12_000000_create_users_table',4),(13,'2014_10_12_100000_create_password_resets_table',4),(14,'2019_04_04_153757_create_reviews_table',4),(15,'2019_05_29_152703_create_discussions_table',4),(16,'2019_06_01_073550_create_recommendations_table',4),(17,'2019_06_20_103850_create_admins_table',4),(18,'2019_06_20_104105_create_brand_users_table',4),(19,'2019_06_20_104131_create_brands_table',4),(20,'2019_07_06_133933_add_foreign_key_constraints_to_reviews_dis_rec_and_brand_users',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `recommendations`
--

LOCK TABLES `recommendations` WRITE;
/*!40000 ALTER TABLE `recommendations` DISABLE KEYS */;
INSERT  IGNORE INTO `recommendations` VALUES (1,1,'Is there a place in Karachi where I can get this?','img8.jpg',1,'2019-07-07 04:19:21','2019-07-07 04:19:21');
/*!40000 ALTER TABLE `recommendations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT  IGNORE INTO `reviews` VALUES (1,1,1,'Superub place. Lovedddddd itttt!!!! :heart::heart::heart:',5,0,'2019-07-07 04:25:15','2019-07-07 04:25:15');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT  IGNORE INTO `users` VALUES (1,'Sumita Abrar','img0.jpg','sumitaabrar@yahoo.com',NULL,'$2y$10$ybQ26F4Mrod44uOuVUD0GOLrdx4Vnq1pPnqo7gKMiT7bzoYKJNFUS',NULL,'2019-07-07 04:17:24','2019-07-07 04:17:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-07 14:30:19
