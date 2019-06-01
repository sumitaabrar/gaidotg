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
-- Dumping data for table `discussions`
--

LOCK TABLES `discussions` WRITE;
/*!40000 ALTER TABLE `discussions` DISABLE KEYS */;
INSERT  IGNORE INTO `discussions` VALUES (1,'Sara','uDP1.jpg',1,'ksdj sjjsd asldsa dsalkkd salkd sd saldlk d salkd sk ldlas dlk asl dlaks dlas flkasld asklk cld flka skl sakdl skld sal dlkkas fkakl fklas l aslk lf.','img2.jpg',0,1,'2019-06-01 03:19:56','2019-06-01 03:19:56'),(2,'Ahmed','uDP5.jpg',1,'Have you guys ever been to this new Burger King Franchise at DHA? I went there last night. Wanted to share my experience with you all...\r\n:hamburger::fries::hamburger::pizza::fries::hotdog::taco::burrito::ok_hand::ok_hand::ok_hand::ok_hand:','img3.jpg',0,1,'2019-06-01 04:02:33','2019-06-01 04:02:33'),(3,'Aliya','uDP8.jpg',1,'Jisey chaha dar pe bula lia\r\nJisey chaha apna bana lia\r\n\r\nYeh barey karam k hain faiselay\r\nYeh barey naseeb ki baat hai \r\n\r\n:broken_heart::sob:','img7.jpg',0,1,'2019-06-01 04:23:22','2019-06-01 04:23:22'),(4,'Joe','uDP6.jpg',1,'Blah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh. Blah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh. Blah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh. Blah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh\r\n\r\nBlah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh. Blah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh. Blah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh. Blah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh\r\n\r\nBlah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh. Blah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh. Blah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh. Blah Blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh blah Blah blaaaaaah bluh bluh bluuuuuuhhhhhhhh',NULL,0,1,'2019-06-01 04:26:01','2019-06-01 04:26:01'),(5,'Joe','uDP6.jpg',1,'Yo what you wanna do han???',NULL,0,1,'2019-06-01 12:46:17','2019-06-01 12:46:17');
/*!40000 ALTER TABLE `discussions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT  IGNORE INTO `migrations` VALUES (17,'2014_10_12_000000_create_users_table',1),(18,'2014_10_12_100000_create_password_resets_table',1),(19,'2019_04_04_153757_create_reviews_table',1),(20,'2019_05_29_152703_create_discussions_table',1),(21,'2019_06_01_073550_create_recommendations_table',1);
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
/*!40000 ALTER TABLE `recommendations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT  IGNORE INTO `reviews` VALUES (1,'Ahmed','uDP5.jpg',1,'Waaaaaaaaaaaooooooowwwwwww:ok_hand::ok_hand::ok_hand::ok_hand:',5,0,'2019-06-01 03:19:56','2019-06-01 03:19:56'),(2,'Ahmed','uDP5.jpg',1,'I hated it :rage:',1,0,'2019-06-01 03:20:24','2019-06-01 03:20:24'),(3,'Ahmed','uDP5.jpg',1,'lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.\r\n\r\nlsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.\r\nlsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.\r\n\r\nlsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.lsakd asljas aslkdsa dlskdjal dalsdbas dalskdkas dsalkkdas dlasd saas dlasdoiieq d osad odq daodakjsciue wewc.',3,0,'2019-06-01 03:21:42','2019-06-01 03:21:42');
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

-- Dump completed on 2019-06-01 22:48:20
