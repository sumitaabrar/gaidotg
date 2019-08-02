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
-- Dumping data for table `assessments`
--

LOCK TABLES `assessments` WRITE;
/*!40000 ALTER TABLE `assessments` DISABLE KEYS */;
INSERT  IGNORE INTO `assessments` VALUES (1,1,3.50,1,1,0,'2019-07-07 09:59:38','2019-07-07 09:59:38'),(2,2,2.00,2,0,0,'2019-07-07 10:00:55','2019-07-07 10:00:55');
/*!40000 ALTER TABLE `assessments` ENABLE KEYS */;
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
INSERT  IGNORE INTO `brands` VALUES (1,'Burger King','img1.png','img0.jpg','Best burger place in town','burgerking.com','info@burgerking.com',0,'2019-05-31 17:19:56','2019-05-31 17:19:56',2,6,3),(2,'Food Club','img2.png','img0.jpg','Add flavour to life',NULL,NULL,0,'2019-05-31 17:19:56','2019-05-31 17:19:56',2,6,3);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `categorys`
--

LOCK TABLES `categorys` WRITE;
/*!40000 ALTER TABLE `categorys` DISABLE KEYS */;
INSERT  IGNORE INTO `categorys` VALUES (1,'Product Selling','2019-07-07 05:26:47','2019-07-07 05:26:47'),(2,'Place','2019-07-07 05:26:47','2019-07-07 05:26:47');
/*!40000 ALTER TABLE `categorys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `d_comments`
--

LOCK TABLES `d_comments` WRITE;
/*!40000 ALTER TABLE `d_comments` DISABLE KEYS */;
INSERT  IGNORE INTO `d_comments` VALUES (2,1,1,'wonderful','2019-07-29 01:54:06','2019-07-29 01:54:06'),(5,1,1,'try','2019-07-29 02:05:35','2019-07-29 02:05:35'),(9,3,2,'funnnnnnn','2019-07-29 02:16:47','2019-07-29 02:16:47'),(10,3,1,'bruh','2019-07-29 02:19:36','2019-07-29 02:19:36'),(11,3,2,'bruh','2019-07-29 02:20:42','2019-07-29 02:20:42'),(12,3,1,'bruh','2019-07-29 02:20:51','2019-07-29 02:20:51'),(13,3,2,'uff','2019-07-29 02:21:21','2019-07-29 02:21:21'),(14,3,1,'uff','2019-07-29 02:21:42','2019-07-29 02:21:42'),(15,3,2,'Loved it too!','2019-07-31 11:08:11','2019-07-31 11:08:11'),(16,3,1,'Testingggggggggggggggggggggggggg','2019-07-31 11:12:12','2019-07-31 11:12:12'),(17,4,1,'Testur','2019-07-31 11:12:46','2019-07-31 11:12:46'),(18,1,2,'Successful','2019-07-31 11:24:48','2019-07-31 11:24:48'),(19,4,2,'Cool','2019-07-31 11:25:41','2019-07-31 11:25:41'),(20,4,1,'with Khadija','2019-08-01 02:41:52','2019-08-01 02:41:52'),(21,4,2,'big time','2019-08-01 06:07:16','2019-08-01 06:07:16'),(22,3,2,'ID Testing','2019-08-01 23:28:35','2019-08-01 23:28:35'),(23,4,2,'hi link','2019-08-02 00:06:16','2019-08-02 00:06:16'),(24,3,2,'Bring','2019-08-02 00:08:07','2019-08-02 00:08:07'),(25,3,2,'set it up','2019-08-02 00:08:48','2019-08-02 00:08:48'),(26,4,2,'good to know that','2019-08-02 04:43:43','2019-08-02 04:43:43');
/*!40000 ALTER TABLE `d_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `d_usefuls`
--

LOCK TABLES `d_usefuls` WRITE;
/*!40000 ALTER TABLE `d_usefuls` DISABLE KEYS */;
INSERT  IGNORE INTO `d_usefuls` VALUES (1,1,1,1,'2019-07-31 11:25:41','2019-07-31 11:25:41'),(4,4,1,0,'2019-07-31 11:25:41','2019-07-31 11:25:41'),(5,4,2,1,'2019-07-31 11:25:41','2019-07-31 11:25:41'),(7,1,2,0,'2019-08-02 02:34:03','2019-08-02 02:34:34');
/*!40000 ALTER TABLE `d_usefuls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `discussions`
--

LOCK TABLES `discussions` WRITE;
/*!40000 ALTER TABLE `discussions` DISABLE KEYS */;
INSERT  IGNORE INTO `discussions` VALUES (1,1,'Had this last night. It was cold when it arrived but still tasted great.','img9.jpg',0,1,'2019-07-07 04:27:53','2019-07-07 04:27:53'),(3,2,'Had soooo much fun last night at this new place in our area. Its called Ice cream Palace :shaved_ice::ice_cream:',NULL,0,1,'2019-07-23 09:00:42','2019-07-23 09:00:42'),(4,2,'Must must must try it!','img8.jpg',0,1,'2019-07-23 09:03:03','2019-07-23 09:03:03'),(5,2,'Guess WHaaaaaaatt???????????',NULL,0,1,'2019-08-02 04:53:32','2019-08-02 04:53:32');
/*!40000 ALTER TABLE `discussions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT  IGNORE INTO `migrations` VALUES (10,'2019_07_07_072234_create_brand_categories_table',3),(11,'2019_07_07_072707_create_brand_subcategories_table',3),(12,'2014_10_12_000000_create_users_table',4),(13,'2014_10_12_100000_create_password_resets_table',4),(14,'2019_04_04_153757_create_reviews_table',4),(15,'2019_05_29_152703_create_discussions_table',4),(16,'2019_06_01_073550_create_recommendations_table',4),(17,'2019_06_20_103850_create_admins_table',4),(18,'2019_06_20_104105_create_brand_users_table',4),(19,'2019_06_20_104131_create_brands_table',4),(20,'2019_07_06_133933_add_foreign_key_constraints_to_reviews_dis_rec_and_brand_users',4),(21,'2014_10_12_000000_create_users_table',4),(22,'2014_10_12_100000_create_password_resets_table',4),(23,'2019_04_04_153757_create_reviews_table',4),(24,'2019_05_29_152703_create_discussions_table',4),(25,'2019_06_01_073550_create_recommendations_table',4),(26,'2019_06_20_103850_create_admins_table',4),(27,'2019_06_20_104105_create_brand_users_table',4),(28,'2019_06_20_104131_create_brands_table',4),(29,'2019_07_06_133933_add_foreign_key_constraints_to_reviews_dis_rec_and_brand_users',4),(30,'2019_07_07_100634_create_categorys_table',5),(31,'2019_07_07_100859_create_subcategorys_table',5),(32,'2019_07_07_112917_create_types_table',6),(33,'2019_07_07_131243_add_new_columns_to_brands_table',7),(34,'2019_07_07_140744_create_assessments_table',8),(35,'2019_07_07_141455_create_outlets_table',8),(36,'2019_07_07_152420_add_foreign_key_constraints_to_sub_cat_types_brands_assess_outlets',9),(37,'2019_07_28_184740_create_d_comments_table',10),(38,'2019_07_31_172037_create_d_usefuls_table',11),(39,'2019_08_02_074717_add_foreign_key_constraints_to_dcomments_dusefuls',12),(40,'2019_08_02_075757_create_r_comments_table',12),(41,'2019_08_02_075826_create_r_usefuls_table',12),(42,'2019_08_02_110528_add_foreign_key_constraints_to_rcomments_rusefuls',13),(43,'2019_08_02_110744_create_suggestions_table',13);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `outlets`
--

LOCK TABLES `outlets` WRITE;
/*!40000 ALTER TABLE `outlets` DISABLE KEYS */;
INSERT  IGNORE INTO `outlets` VALUES (1,1,'DHA phase-1 Branch','Shop # 12, Commercial Street 20, DHA phase-1, Karachi.','2019-07-07 09:53:42','2019-07-07 09:53:42'),(2,1,'DHA phase-3 Branch','Shop # 2, Commercial Street 33, DHA phase-3, Karachi.','2019-07-07 09:54:31','2019-07-07 09:54:31'),(3,2,'Gulshan Branch','Shop # 7, main University Road, Karachi.','2019-07-07 09:56:07','2019-07-07 09:56:07');
/*!40000 ALTER TABLE `outlets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `r_comments`
--

LOCK TABLES `r_comments` WRITE;
/*!40000 ALTER TABLE `r_comments` DISABLE KEYS */;
INSERT  IGNORE INTO `r_comments` VALUES (1,3,2,'Pleaseeeeee','2019-08-02 03:43:28','2019-08-02 03:43:28'),(2,3,2,'I need it urgently','2019-08-02 03:43:46','2019-08-02 03:43:46'),(3,2,2,'Biryani Kingz. It\'s the best','2019-08-02 03:44:42','2019-08-02 03:44:42'),(4,3,2,'well....\r\nyeah...\r\nright!\r\n:D','2019-08-02 04:46:25','2019-08-02 04:46:25'),(5,4,2,'It\'s amazing','2019-08-02 04:48:51','2019-08-02 04:48:51');
/*!40000 ALTER TABLE `r_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `r_usefuls`
--

LOCK TABLES `r_usefuls` WRITE;
/*!40000 ALTER TABLE `r_usefuls` DISABLE KEYS */;
INSERT  IGNORE INTO `r_usefuls` VALUES (1,3,2,0,'2019-08-02 03:43:53','2019-08-02 03:43:59'),(2,4,2,1,'2019-08-02 04:49:01','2019-08-02 04:49:01'),(3,1,2,1,'2019-08-02 04:49:19','2019-08-02 04:49:19');
/*!40000 ALTER TABLE `r_usefuls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `recommendations`
--

LOCK TABLES `recommendations` WRITE;
/*!40000 ALTER TABLE `recommendations` DISABLE KEYS */;
INSERT  IGNORE INTO `recommendations` VALUES (1,1,'Is there a place in Karachi where I can get this?','img8.jpg',1,'2019-07-07 04:19:21','2019-07-07 04:19:21'),(2,1,'I need to order 100 kg biryani. What are the best places in the city? :confused:',NULL,1,'2019-07-07 07:10:40','2019-07-07 07:10:40'),(3,2,'Can anybody tell me which place sells the best lasagna in Defence??? :yum:',NULL,1,'2019-07-23 09:02:20','2019-07-23 09:02:20'),(4,2,'How\'s Student Biryani? Any good???',NULL,1,'2019-08-02 04:47:48','2019-08-02 04:47:48');
/*!40000 ALTER TABLE `recommendations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT  IGNORE INTO `reviews` VALUES (1,1,1,'Superub place. Lovedddddd itttt!!!! :heart::heart::heart:',5,0,'2019-07-07 04:25:15','2019-07-07 04:25:15'),(2,2,1,'The place is okay. Itni bhi koi achi nahi hai :unamused:',2,0,'2019-07-07 07:13:48','2019-07-07 07:13:48'),(3,1,1,'nice place.',3,0,'2019-07-07 16:07:15','2019-07-07 16:07:15'),(4,1,1,'Good one',4,0,'2019-07-07 16:13:15','2019-07-07 16:13:15'),(5,1,1,'Flop flop flop',1,0,'2019-07-07 16:14:01','2019-07-07 16:14:01'),(6,1,1,':nauseated_face::nauseated_face::nauseated_face::nauseated_face:',NULL,0,'2019-07-07 16:14:36','2019-07-07 16:14:36'),(7,1,1,':heart:',5,0,'2019-07-07 16:16:54','2019-07-07 16:16:54'),(8,1,1,':heart_eyes::money_mouth::stuck_out_tongue::unamused::cowboy::sunglasses::clown::innocent::rage:.\r\n.\r\n.\r\n.\r\n.\r\n..\r\n.\r\n.\r\n.\r\n.\r\n.\r\n.\r\n.\r\n.\r\n.\r\n.\r\n\r\n...\r\n\r\n..\r\n\r\n.\r\n.\r\n..\r\n.\r\n.\r\n.',NULL,0,'2019-07-13 18:45:35','2019-07-13 18:45:35'),(9,2,1,'Bring it on',NULL,0,'2019-07-14 08:49:47','2019-07-14 08:49:47'),(10,2,1,'Yummmmmm',NULL,0,'2019-07-14 08:55:16','2019-07-14 08:55:16'),(11,2,2,'Yippie',NULL,0,'2019-07-14 08:55:32','2019-07-14 08:55:32');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `subcategorys`
--

LOCK TABLES `subcategorys` WRITE;
/*!40000 ALTER TABLE `subcategorys` DISABLE KEYS */;
INSERT  IGNORE INTO `subcategorys` VALUES (1,1,'Clothing','2019-07-07 05:28:33','2019-07-07 05:28:33'),(2,1,'Food','2019-07-07 05:29:37','2019-07-07 05:29:37'),(3,1,'Electronics','2019-07-07 05:29:37','2019-07-07 05:29:37'),(4,1,'Makeup','2019-07-07 05:29:37','2019-07-07 05:29:37'),(5,2,'Visiting','2019-07-07 05:29:37','2019-07-07 05:29:37'),(6,2,'Food','2019-07-07 05:29:37','2019-07-07 05:29:37');
/*!40000 ALTER TABLE `subcategorys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `suggestions`
--

LOCK TABLES `suggestions` WRITE;
/*!40000 ALTER TABLE `suggestions` DISABLE KEYS */;
INSERT  IGNORE INTO `suggestions` VALUES (1,1,1,1,'2019-08-02 06:37:28','2019-08-02 06:37:28');
/*!40000 ALTER TABLE `suggestions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT  IGNORE INTO `types` VALUES (1,1,'Retail Brand','2019-07-07 06:42:25','2019-07-07 06:42:25'),(2,1,'Boutique','2019-07-07 06:43:04','2019-07-07 06:43:04'),(3,6,'Fast Food','2019-07-07 06:43:04','2019-07-07 06:43:04'),(4,6,'Bakery','2019-07-07 06:43:04','2019-07-07 06:43:04');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT  IGNORE INTO `users` VALUES (1,'Sumita Abrar','img0.jpg','sumitaabrar@yahoo.com',NULL,'$2y$10$ybQ26F4Mrod44uOuVUD0GOLrdx4Vnq1pPnqo7gKMiT7bzoYKJNFUS',NULL,'2019-07-07 04:17:24','2019-07-07 04:17:24'),(2,'Aimen','img2.jpg','aimen@gmail.com',NULL,'$2y$10$ijUlOGDXtIjylmy81axqq.w6qYwBouy7g2Ch.3YH5l2yDbp.S4ENq',NULL,'2019-07-07 07:11:48','2019-07-07 07:11:48');
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

-- Dump completed on 2019-08-02 16:48:28
