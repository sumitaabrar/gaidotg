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
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT  IGNORE INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_04_04_153757_create_reviews_table',2);
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
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT  IGNORE INTO `reviews` VALUES (1,'Kiran Ali','uDP3.jpg','1','I had the most amazing experience there. They had the best  burger and fries and service was really Good.','4','2019-04-04 11:04:06','2019-04-04 11:04:06'),(2,'Ali Hasan','uDP1.jpg','1','They are okay. Taste is also fine but I won\'t call it the Best','3','2019-04-04 11:08:23','2019-04-04 11:08:23'),(3,'Umer Jahangir','uDP2.jpg','1','Flop Jaga hai bhai. Is se acha to mera Amarbail tha. Wahin rehna chahiye tha mujhey =/','1','2019-04-04 11:39:24','2019-04-04 11:39:24'),(4,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(5,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(6,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(7,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(8,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(9,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(10,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(11,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(12,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(13,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(14,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(15,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(16,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(17,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33'),(18,'Rida Hassan','UDP3.jpg','2','LOVED it!','5','2019-05-21 15:22:33','2019-05-21 15:22:33');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2019-05-22 17:16:06
