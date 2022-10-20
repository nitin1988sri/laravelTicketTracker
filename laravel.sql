-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.21.10.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_04_23_053457_products',2),(5,'2021_04_23_061850_product_descritpion',3),(6,'2021_04_23_061904_product_availability_on_store',3),(7,'2021_10_05_064803_product_category',4),(8,'2019_12_14_000001_create_personal_access_tokens_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',1,'my-app-token','30dbdc6b71e9797409b0c2411dace805b72d4451339ffcd9a50b74d49ceeb6c3','[\"*\"]',NULL,'2021-10-19 09:26:40','2021-10-19 09:26:40'),(2,'App\\Models\\User',1,'my-app-token','7b3da2cbcd36cc1ff7f611b4cd6157390a494041484eb9b766ca4003080f6f9f','[\"*\"]',NULL,'2021-10-19 09:30:46','2021-10-19 09:30:46'),(3,'App\\Models\\User',1,'my-app-token','f508300ff20853cd7b870761ec872c05a25f47d02d91717f6b5f0f63169d6bed','[\"*\"]','2021-10-19 23:11:38','2021-10-19 10:08:33','2021-10-19 23:11:38'),(4,'App\\Models\\User',1,'my-app-token','3474546cadf57ae03fc01bbf10658fde96b79c195e7f8f83fbbf75714780e5c8','[\"*\"]','2022-02-10 05:35:00','2021-10-19 11:15:46','2022-02-10 05:35:00');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_availability_on_stores`
--

DROP TABLE IF EXISTS `product_availability_on_stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_availability_on_stores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `p_id` int NOT NULL,
  `s_state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_at_store` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_availability_on_stores_p_id_unique` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_availability_on_stores`
--

LOCK TABLES `product_availability_on_stores` WRITE;
/*!40000 ALTER TABLE `product_availability_on_stores` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_availability_on_stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categoies`
--

DROP TABLE IF EXISTS `product_categoies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_categoies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categoies`
--

LOCK TABLES `product_categoies` WRITE;
/*!40000 ALTER TABLE `product_categoies` DISABLE KEYS */;
INSERT INTO `product_categoies` VALUES (1,'Miss','Ipsum minus sapiente nemo suscipit voluptas illum qui dolores. Veritatis culpa asperiores tempore maiores iste distinctio maiores voluptas. Molestiae aliquam rerum rerum reiciendis deleniti quasi rerum facilis.',1,'2021-10-11 04:16:11','2021-10-11 04:16:11'),(2,'Ms.','In dignissimos qui commodi. Autem voluptatibus ut nesciunt consequuntur.',1,'2021-10-11 04:16:12','2021-10-11 04:16:12'),(3,'Mrs.','Et aspernatur excepturi dolores tenetur et. Eius deserunt qui quia adipisci amet nostrum rerum. Quod occaecati autem omnis magni.',1,'2021-10-11 04:16:12','2021-10-11 04:16:12'),(4,'Mrs.','Dolore ea enim et sint totam placeat eum. Vel distinctio veniam et velit aspernatur. Labore doloremque consequatur temporibus praesentium.',1,'2021-10-11 04:16:12','2021-10-11 04:16:12'),(5,'Miss','Amet adipisci non cupiditate nobis aut. Quia voluptates tempora ut aut nihil quia. Laborum distinctio enim rerum sit nulla perferendis.',1,'2021-10-11 04:16:13','2021-10-11 04:16:13'),(6,'Dr.','Fugit maiores nesciunt amet tempora ut. Quo quod voluptas perferendis et. Blanditiis ea non eligendi sed debitis iure iusto sunt. Optio ducimus tenetur quis distinctio eos optio pariatur.',1,'2021-10-11 04:16:13','2021-10-11 04:16:13'),(7,'Ms.','Et sit qui voluptatem recusandae corporis laudantium inventore aspernatur. Dolor quos expedita non repellendus. Quia ullam ab iusto impedit.',1,'2021-10-11 04:16:13','2021-10-11 04:16:13'),(8,'Mr.','Autem quia laudantium atque minima libero. Inventore corrupti enim earum sapiente ad. Animi provident facere qui incidunt totam dolores accusamus. Culpa dicta hic eum omnis eos et non.',1,'2021-10-11 04:16:13','2021-10-11 04:16:13'),(9,'Dr.','Praesentium qui vel doloremque sapiente molestiae. Sequi quis exercitationem magni quis ea ullam. Velit corporis vero veritatis accusantium qui numquam. Deserunt voluptates beatae rerum sit.',1,'2021-10-11 04:16:13','2021-10-11 04:16:13'),(10,'Prof. Therese Mueller PhD','Qui omnis sit minus at natus quae.',1,'2021-10-11 04:23:08','2021-10-11 04:23:08'),(11,'Dr. Helga Gutkowski MD','Ex eos quia dicta quia quia voluptatem.',1,'2021-10-11 04:23:09','2021-10-11 04:23:09'),(12,'Allison Rice','Hic dolor ullam impedit consequatur.',1,'2021-10-11 04:23:09','2021-10-11 04:23:09'),(13,'Emmitt Durgan','Itaque saepe commodi est nam.',1,'2021-10-11 04:23:09','2021-10-11 04:23:09'),(14,'Ebba Block','Quia totam consequatur sunt est est.',1,'2021-10-11 04:23:10','2021-10-11 04:23:10'),(15,'Keaton Abshire','Vel quo recusandae et quo ut dolor.',1,'2021-10-11 04:23:10','2021-10-11 04:23:10'),(16,'Ms. Gail Mayert','Excepturi aut fugit animi beatae temporibus a.',1,'2021-10-11 04:23:11','2021-10-11 04:23:11'),(17,'Kris Rempel Sr.','Enim dolores et veniam veniam.',1,'2021-10-11 04:23:11','2021-10-11 04:23:11'),(18,'Chaim Aufderhar','Ea tempore consequuntur omnis et ullam saepe.',1,'2021-10-11 04:23:11','2021-10-11 04:23:11'),(19,'Carli Huel','In quia laboriosam nostrum neque.',1,'2021-10-11 04:23:11','2021-10-11 04:23:11'),(20,'Favian Heathcote','Cum inventore aut libero in excepturi et.',1,'2021-10-11 04:24:06','2021-10-11 04:24:06'),(21,'Wilfrid Kertzmann','Libero pariatur est voluptatem a.',1,'2021-10-11 04:24:07','2021-10-11 04:24:07'),(22,'Ms. Stefanie Conn DDS','Et voluptas voluptate perspiciatis est tenetur.',1,'2021-10-11 04:24:07','2021-10-11 04:24:07'),(23,'Mr. Cleve Bailey','Atque quia eos a maxime.',1,'2021-10-11 04:24:08','2021-10-11 04:24:08'),(24,'Ms. Karlie Wisozk','Voluptatem totam non et.',1,'2021-10-11 04:24:08','2021-10-11 04:24:08'),(25,'Dr. Morton Schowalter','Placeat omnis vel esse rerum recusandae ea.',1,'2021-10-11 04:24:08','2021-10-11 04:24:08'),(26,'Dr. Justen Yundt','Voluptas eum excepturi quia minus.',1,'2021-10-11 04:24:08','2021-10-11 04:24:08'),(27,'Roberto Dicki','Velit sit magnam et maxime laborum.',1,'2021-10-11 04:24:09','2021-10-11 04:24:09'),(28,'Isaias DuBuque','Minima laborum qui aperiam qui.',1,'2021-10-11 04:24:09','2021-10-11 04:24:09'),(29,'Mrs. Lue Dickinson','Quia dicta culpa doloremque perferendis.',1,'2021-10-11 04:24:09','2021-10-11 04:24:09'),(30,'Dariana Ebert','Ut et maxime a porro quia mollitia.',1,'2021-10-11 04:24:09','2021-10-11 04:24:09'),(31,'Jonas Christiansen','Enim autem fuga qui quia sed.',1,'2021-10-11 04:24:09','2021-10-11 04:24:09'),(32,'Jaquelin Von','Aliquid temporibus voluptas quo at.',1,'2021-10-11 04:24:10','2021-10-11 04:24:10'),(33,'Yessenia Mosciski DVM','Et voluptatibus delectus ut sint.',1,'2021-10-11 04:24:10','2021-10-11 04:24:10'),(34,'Cydney Torphy II','Et et recusandae officiis deserunt.',1,'2021-10-11 04:24:10','2021-10-11 04:24:10'),(35,'Richmond Johnston PhD','Voluptas eos ea maxime ullam molestias totam.',1,'2021-10-11 04:24:10','2021-10-11 04:24:10'),(36,'Prof. Mallory Veum II','Autem dignissimos maiores odit.',1,'2021-10-11 04:24:11','2021-10-11 04:24:11'),(37,'Sydni Wintheiser','Blanditiis delectus repudiandae aperiam.',1,'2021-10-11 04:24:11','2021-10-11 04:24:11'),(38,'Clinton Koelpin','Animi culpa sit hic a omnis.',1,'2021-10-11 04:24:11','2021-10-11 04:24:11'),(39,'Cordelia Murphy','Culpa possimus quibusdam iure commodi aut ad.',1,'2021-10-11 04:24:11','2021-10-11 04:24:11'),(40,'Prof. Fredrick Ratke','Iure in id totam odit expedita eum laudantium.',1,'2021-10-11 04:24:12','2021-10-11 04:24:12'),(41,'Terrill Monahan','Modi vitae provident est corporis sit dolores.',1,'2021-10-11 04:24:12','2021-10-11 04:24:12'),(42,'Prof. Catalina Lebsack V','Eligendi molestiae magni qui est aut ea.',1,'2021-10-11 04:24:13','2021-10-11 04:24:13'),(43,'Dr. Lauretta Homenick','Eius tenetur voluptatem exercitationem pariatur.',1,'2021-10-11 04:24:13','2021-10-11 04:24:13'),(44,'Jackson Waelchi','Quibusdam ipsa doloribus qui.',1,'2021-10-11 04:24:13','2021-10-11 04:24:13'),(45,'Prof. Robbie Luettgen Sr.','Quia enim reprehenderit temporibus fuga in.',1,'2021-10-11 04:24:13','2021-10-11 04:24:13'),(46,'Bulah Kuhn','Repellat ipsum qui nostrum velit odio sit.',1,'2021-10-11 04:24:14','2021-10-11 04:24:14'),(47,'Devyn Cole','Atque temporibus maxime impedit fugit harum.',1,'2021-10-11 04:24:14','2021-10-11 04:24:14'),(48,'Lindsey Douglas','Delectus quaerat neque voluptas maiores.',1,'2021-10-11 04:24:15','2021-10-11 04:24:15'),(49,'Miss Delilah Stokes','Voluptatibus ut facilis et doloribus ut.',1,'2021-10-11 04:24:15','2021-10-11 04:24:15'),(50,'Vita Wolff IV','Aut recusandae quisquam qui alias.',1,'2021-10-11 04:24:15','2021-10-11 04:24:15'),(51,'Kasey Welch','Numquam unde pariatur iste laborum quia.',1,'2021-10-11 04:24:16','2021-10-11 04:24:16'),(52,'Stone Cole','Qui animi est repudiandae vel omnis cum omnis.',1,'2021-10-11 04:24:16','2021-10-11 04:24:16'),(53,'Dr. Dudley Morissette','In et nisi reiciendis voluptatum.',1,'2021-10-11 04:24:16','2021-10-11 04:24:16'),(54,'Cordelia White','Est dolorem ratione nihil.',1,'2021-10-11 04:24:17','2021-10-11 04:24:17'),(55,'Shania Sipes','Explicabo quia nam itaque voluptatem architecto.',1,'2021-10-11 04:24:17','2021-10-11 04:24:17'),(56,'Malika Windler','Velit dolor minus quasi eaque sunt.',1,'2021-10-11 04:24:17','2021-10-11 04:24:17'),(57,'Raymundo Feeney III','Enim id ducimus eos dolorem sed est.',1,'2021-10-11 04:24:18','2021-10-11 04:24:18'),(58,'Elton Bode Sr.','Velit rem voluptatem dolore similique illo.',1,'2021-10-11 04:24:18','2021-10-11 04:24:18'),(59,'Dane Bergstrom','Et aliquid aut et.',1,'2021-10-11 04:24:18','2021-10-11 04:24:18'),(60,'Dr. Waldo Herman II','Officiis neque id veritatis.',1,'2021-10-11 04:24:18','2021-10-11 04:24:18'),(61,'Mr. Adolfo Dickinson','Architecto vel dolores qui beatae.',1,'2021-10-11 04:24:19','2021-10-11 04:24:19'),(62,'Abby Marks DDS','Eaque molestiae sapiente et accusamus.',1,'2021-10-11 04:24:20','2021-10-11 04:24:20'),(63,'Creola VonRueden Jr.','Et repudiandae laborum non delectus.',1,'2021-10-11 04:24:20','2021-10-11 04:24:20'),(64,'Tyrel Cronin','Omnis vel rerum ut non hic omnis.',1,'2021-10-11 04:24:20','2021-10-11 04:24:20'),(65,'Prof. Theo Leffler','Itaque odit velit qui eaque neque qui et cumque.',1,'2021-10-11 04:24:20','2021-10-11 04:24:20'),(66,'Mr. Justen Turner I','Officia nemo amet ex reprehenderit nesciunt et.',1,'2021-10-11 04:24:21','2021-10-11 04:24:21'),(67,'Janiya Connelly','Tempora dolorem iure deserunt rerum.',1,'2021-10-11 04:24:21','2021-10-11 04:24:21'),(68,'Mr. Darwin Robel V','Temporibus numquam laboriosam aut qui neque.',1,'2021-10-11 04:24:22','2021-10-11 04:24:22'),(69,'Erika Bauch','Minima in placeat accusamus ut porro qui.',1,'2021-10-11 04:24:22','2021-10-11 04:24:22'),(70,'Dr. Carley Marvin Sr.','Sed optio commodi at.',1,'2021-10-11 04:24:22','2021-10-11 04:24:22'),(71,'Nicole Auer','Est sed dolor ipsa recusandae in.',1,'2021-10-11 04:24:23','2021-10-11 04:24:23'),(72,'Asia Reynolds','Pariatur earum rerum architecto.',1,'2021-10-11 04:24:23','2021-10-11 04:24:23'),(73,'Mrs. Roselyn Ebert','Quibusdam eum magnam quia dolor.',1,'2021-10-11 04:24:23','2021-10-11 04:24:23'),(74,'Mateo Breitenberg','Aut exercitationem et nesciunt veniam asperiores.',1,'2021-10-11 04:24:24','2021-10-11 04:24:24'),(75,'Antonette Morissette','Sit quae reprehenderit rerum itaque.',1,'2021-10-11 04:24:24','2021-10-11 04:24:24'),(76,'Freida Hermann','Quisquam sint consequuntur vel.',1,'2021-10-11 04:24:24','2021-10-11 04:24:24'),(77,'Miss Lia Halvorson','Officia blanditiis itaque velit.',1,'2021-10-11 04:24:24','2021-10-11 04:24:24'),(78,'Christelle Abshire Sr.','Quis vero nostrum corrupti in velit id.',1,'2021-10-11 04:24:25','2021-10-11 04:24:25'),(79,'Gerda Bernhard','Voluptates cupiditate quod voluptatem.',1,'2021-10-11 04:24:25','2021-10-11 04:24:25'),(80,'Dr. Antwan Ziemann PhD','Placeat sunt cupiditate dolorem qui sapiente.',1,'2021-10-11 04:24:25','2021-10-11 04:24:25'),(81,'Prof. Lina Gutmann','Sit eaque veritatis vero voluptatem quis et.',1,'2021-10-11 04:24:25','2021-10-11 04:24:25'),(82,'Wilfredo Green PhD','Ipsum in quia mollitia.',1,'2021-10-11 04:24:26','2021-10-11 04:24:26'),(83,'Kyla Cummings','Odio neque qui qui qui blanditiis.',1,'2021-10-11 04:24:26','2021-10-11 04:24:26'),(84,'Marcos Breitenberg','Incidunt eos ad quaerat et.',1,'2021-10-11 04:24:26','2021-10-11 04:24:26'),(85,'Leland Gusikowski','Qui est dolorem fuga.',1,'2021-10-11 04:24:26','2021-10-11 04:24:26'),(86,'Dr. Donavon Vandervort','Sit ut consequuntur iure et omnis quia ea.',1,'2021-10-11 04:24:27','2021-10-11 04:24:27'),(87,'Shanny Beer','Quia non velit cum odit.',1,'2021-10-11 04:24:27','2021-10-11 04:24:27'),(88,'Christop Torp','Impedit ut sed sunt dignissimos hic.',1,'2021-10-11 04:24:27','2021-10-11 04:24:27'),(89,'Laney Barton I','Aut eaque iure quia sunt et.',1,'2021-10-11 04:24:27','2021-10-11 04:24:27'),(90,'Rita Abbott','Et aperiam nobis facere consequuntur nesciunt.',1,'2021-10-11 04:24:28','2021-10-11 04:24:28'),(91,'Grace Krajcik','Commodi debitis maxime quibusdam esse.',1,'2021-10-11 04:24:28','2021-10-11 04:24:28'),(92,'Jovany Roberts','Aut commodi veniam libero fugit ut corporis.',1,'2021-10-11 04:24:28','2021-10-11 04:24:28'),(93,'Mr. Augustus Grant','Iure qui facilis voluptatem similique.',1,'2021-10-11 04:24:29','2021-10-11 04:24:29'),(94,'Assunta VonRueden','Quia expedita molestias et non ut sint.',1,'2021-10-11 04:24:29','2021-10-11 04:24:29'),(95,'Leila Cremin','Cum saepe et in fuga exercitationem nisi.',1,'2021-10-11 04:24:30','2021-10-11 04:24:30'),(96,'Magali King','Enim harum expedita aliquam qui labore.',1,'2021-10-11 04:24:30','2021-10-11 04:24:30'),(97,'Joesph Bartell','Voluptas odio voluptas sit sed natus.',1,'2021-10-11 04:24:30','2021-10-11 04:24:30'),(98,'Broderick McKenzie','Voluptatem quia consequatur voluptatem et.',1,'2021-10-11 04:24:30','2021-10-11 04:24:30'),(99,'Mrs. Nina Beahan','Qui illo facere vitae sunt recusandae.',1,'2021-10-11 04:24:30','2021-10-11 04:24:30'),(100,'Orville Padberg','Fuga numquam nisi quam sapiente atque officia.',1,'2021-10-11 04:24:31','2021-10-11 04:24:31'),(101,'Darian McKenzie','Dolorem illo molestiae distinctio sit illo sunt.',1,'2021-10-11 04:24:31','2021-10-11 04:24:31'),(102,'Mr. Devan Kutch','Et ad vel quisquam voluptate.',1,'2021-10-11 04:24:31','2021-10-11 04:24:31'),(103,'Santino Herzog','Ipsum dolore ut vero temporibus.',1,'2021-10-11 04:24:31','2021-10-11 04:24:31'),(104,'Mr. Clay Moen Sr.','Quas id expedita quasi tempore aut.',1,'2021-10-11 04:24:32','2021-10-11 04:24:32'),(105,'Dr. Terrill Bauch','Magnam laborum atque maiores sunt aut.',1,'2021-10-11 04:24:32','2021-10-11 04:24:32'),(106,'Kamryn Keebler','Praesentium amet perferendis quo qui eaque dolor.',1,'2021-10-11 04:24:32','2021-10-11 04:24:32'),(107,'Dr. Alanis Bartoletti','Cupiditate et consequatur ipsa praesentium.',1,'2021-10-11 04:24:32','2021-10-11 04:24:32'),(108,'Wendell Langworth IV','Distinctio dolorum accusantium quidem dolorem.',1,'2021-10-11 04:24:33','2021-10-11 04:24:33'),(109,'Zechariah O\'Hara','Accusamus adipisci sed unde voluptatibus.',1,'2021-10-11 04:24:33','2021-10-11 04:24:33'),(110,'Prof. Carmela Mante DVM','Non iure mollitia est et.',1,'2021-10-11 04:24:33','2021-10-11 04:24:33'),(111,'Raphaelle Swaniawski','Corrupti repellat id assumenda eaque temporibus.',1,'2021-10-11 04:24:33','2021-10-11 04:24:33'),(112,'Trenton Hermiston II','Esse quisquam omnis amet ratione sit.',1,'2021-10-11 04:24:33','2021-10-11 04:24:33'),(113,'Brenda Marks IV','Deserunt esse earum sit aliquam.',1,'2021-10-11 04:24:34','2021-10-11 04:24:34'),(114,'Rafaela Jast PhD','Aut provident ut culpa ullam architecto.',1,'2021-10-11 04:24:34','2021-10-11 04:24:34'),(115,'Jaycee Satterfield','Aut quo ratione rerum cum reprehenderit.',1,'2021-10-11 04:24:34','2021-10-11 04:24:34'),(116,'Jacquelyn Muller','Voluptates veniam quia aut esse ea.',1,'2021-10-11 04:24:34','2021-10-11 04:24:34'),(117,'Haylie Brakus','Eos natus quasi commodi veniam et explicabo qui.',1,'2021-10-11 04:24:35','2021-10-11 04:24:35'),(118,'Millie Wiza','Accusantium eum porro nesciunt deleniti.',1,'2021-10-11 04:24:35','2021-10-11 04:24:35'),(119,'Amari Upton','Ut voluptatem illum facilis quibusdam.',1,'2021-10-11 04:24:35','2021-10-11 04:24:35'),(120,'ds','dsd',0,'2021-10-18 02:53:55','2021-10-18 02:53:55'),(121,'dssdsds','dssds',0,'2021-10-21 22:14:14','2021-10-21 22:14:14');
/*!40000 ALTER TABLE `product_categoies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_descritpions`
--

DROP TABLE IF EXISTS `product_descritpions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_descritpions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `p_id` int NOT NULL,
  `category_id` int NOT NULL,
  `sub_category_id` int NOT NULL,
  `price` int NOT NULL,
  `quantity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_descritpions_p_id_unique` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_descritpions`
--

LOCK TABLES `product_descritpions` WRITE;
/*!40000 ALTER TABLE `product_descritpions` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_descritpions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_uuid_unique` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'60728b0930532f2d39b56f27','test 2','Test product','2021-04-23 00:24:38','2021-04-23 00:24:38'),(2,'60728b1e30532f2d39b56f28','test 2','Test product','2021-04-23 00:24:38','2021-04-23 00:24:38'),(3,'60728b2630532f2d39b56f29','test 5','Test product','2021-04-23 00:24:38','2021-04-23 00:24:38'),(4,'60728beeb4177f31708da3ca','test 7','Test product','2021-04-23 00:24:38','2021-04-23 00:24:38'),(5,'6072f8cdc5b67a1580d479b2','test 7','Test product','2021-04-23 00:24:38','2021-04-23 00:24:38'),(6,'607b9863544742033437e13d','test 7','Test product','2021-04-23 00:24:38','2021-04-23 00:24:38'),(7,'607b9891e147bd039b10d7cc','test 7','Test product','2021-04-23 00:24:38','2021-04-23 00:24:38'),(8,'607bb095bb79131d9ac36608','test 7','Test product','2021-04-23 00:24:38','2021-04-23 00:24:38'),(9,'607c089ec37b0a6c803877c8','test 7','Test product','2021-04-23 00:24:38','2021-04-23 00:24:38'),(10,'607c0906ee4a5e6d2972adc8','test 7','Test product','2021-04-23 00:24:39','2021-04-23 00:24:39'),(11,'60805ca050965f79efa77440','test10','Test product 10','2021-04-23 00:24:39','2021-04-23 00:24:39'),(12,'60805cafdfb5b97a0a3691a2','test10','Test product 10','2021-04-23 00:24:39','2021-04-23 00:24:39'),(13,'60805cc4dfb5b97a0a3691a3','Saurabh test 10','saurabh Test product 10','2021-04-23 00:24:39','2021-04-23 00:24:39'),(14,'608586250104b11cb4501322','Saurabh test 11','saurabh Test product 11','2021-04-25 09:44:44','2021-04-25 09:44:44'),(15,'6097a67b9a00633921634b61','new','dsds','2021-05-09 03:53:01','2021-05-09 03:53:01'),(16,'6097a6305a7dcb1f07826355','Saurabh test 10ss','saurabh Test product 10','2021-05-09 03:53:01','2021-05-09 03:53:01'),(17,'6097f744884c6369d78804bc','dsds','dsd','2021-05-09 09:25:38','2021-05-09 09:25:38'),(18,'60a4bb018d3b16c2fc246856','Saurabh test 10ssss new','saurabh Test product 10','2021-05-23 02:18:18','2021-05-23 02:18:18'),(19,'60b1df4ff405b624882caa3d','Test','test 2','2021-05-29 03:03:54','2021-05-29 03:03:54'),(20,'60b1dda0f405b624882caa3c','Saurabh test 10ssss new','saurabh Test product 10','2021-05-29 03:03:55','2021-05-29 03:03:55'),(21,'60b1dd79f405b624882caa3b','new 2 ','New product','2021-05-29 03:03:56','2021-05-29 03:03:56'),(22,'60b1dcaff405b624882caa3a','New','product 1','2021-05-29 03:03:57','2021-05-29 03:03:57'),(23,'60c23530e97b57190c39c332','React test','Comming from react','2021-06-12 08:46:11','2021-06-12 08:46:11'),(24,'6162567d5ab12a6ba9ad604c','sdsd','ds','2021-10-12 06:31:23','2021-10-12 06:31:23');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Saurabh','saurabh.srivastava.mca@gmail.com',NULL,'$2y$10$e6p8WL2efySJLUHzfuZ0tOQuyYUlMOKOKwHhAF2t8M1rXOQhm/ESu',NULL,'2021-05-29 04:01:49','2021-05-29 04:01:49'),(2,'Saurabh Srivastava','saurabh.srivastava.mca1@gmail.com',NULL,'$2y$10$KygNpMc/r0vhTsONvaPjeerxEsGcZZMKjSCSKMDQvlqfwzpu7fPny',NULL,'2021-06-19 03:20:24','2021-06-19 03:20:24'),(3,'admin','saurabh.srivastava.mca222@gmail.com',NULL,'$2y$10$MN7FWl9jxlNPe35V0.Xh6OHxiqSjYtHGF3NdnpAQop.52/BBGEowK',NULL,'2021-09-26 08:28:41','2021-09-26 08:28:41'),(4,'admin','saurabh.srivastava122@gmail.com',NULL,'$2y$10$7Fk7byInDRjLtwLKvwL.U.8eZDI7O1/kt7Qg22QASoMpbPjA/1KGu',NULL,'2021-09-26 08:37:56','2021-09-26 08:37:56');
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

-- Dump completed on 2022-05-15 10:17:49
