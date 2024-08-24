-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ICP_RWANDA
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Placeat vel dignissimos nemo qui aut aperiam.','Eos earum deserunt eligendi consequatur doloremque nisi. Quas exercitationem molestiae expedita asperiores quasi. Et quos provident ex ad maxime qui quisquam. Omnis nemo est placeat tenetur harum.','https://via.placeholder.com/640x480.png/00bbcc?text=mollitia','2024-08-24 11:08:53','2024-08-24 11:08:53'),(2,'Aut quibusdam eum cumque.','Est aut perferendis non nobis cum. Similique nemo accusantium ut sint dolor id. Mollitia sequi ipsa adipisci sed officiis magnam fugiat. Ea eius et dolor quia ipsum sit est.','https://via.placeholder.com/640x480.png/00ee88?text=itaque','2024-08-24 11:08:53','2024-08-24 11:08:53'),(3,'Error ut architecto rerum consectetur.','Non qui maxime molestiae ad aut. Earum aut aut velit animi qui ut. Ut temporibus voluptatem ab voluptate dolor. Veniam quod sed alias facere. Enim minima nemo excepturi molestiae nam sed saepe.','https://via.placeholder.com/640x480.png/005533?text=eos','2024-08-24 11:08:53','2024-08-24 11:08:53'),(4,'Suscipit dolores est in mollitia.','Blanditiis dolor laborum repudiandae dolorem ut. Itaque ut voluptatem voluptatem pariatur et.','https://via.placeholder.com/640x480.png/0055aa?text=id','2024-08-24 11:08:53','2024-08-24 11:08:53'),(5,'Cum et nam ut soluta explicabo eius impedit.','Ut nobis esse maxime quo error nulla nisi. Est voluptate explicabo vel fugit nam sed facilis quaerat. Distinctio qui expedita nobis reprehenderit quo illo voluptate. Est voluptatem quia ipsam necessitatibus voluptatibus. Voluptatem consequuntur dignissimos aut fugiat.','https://via.placeholder.com/640x480.png/002266?text=temporibus','2024-08-24 11:08:53','2024-08-24 11:08:53');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificates`
--

DROP TABLE IF EXISTS `certificates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `qr_code_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificates`
--

LOCK TABLES `certificates` WRITE;
/*!40000 ALTER TABLE `certificates` DISABLE KEYS */;
/*!40000 ALTER TABLE `certificates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer__supports`
--

DROP TABLE IF EXISTS `customer__supports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer__supports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Full_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer__supports`
--

LOCK TABLES `customer__supports` WRITE;
/*!40000 ALTER TABLE `customer__supports` DISABLE KEYS */;
INSERT INTO `customer__supports` VALUES (1,'Quo pariatur beatae consequatur repellendus qui quaerat.','Ullam quia sapiente accusantium veritatis quod delectus molestiae.','At id facere ipsa neque.','Rerum non odit sint cum perspiciatis culpa adipisci quaerat. Rerum sed inventore asperiores rerum.','2024-08-24 11:08:53','2024-08-24 11:08:53'),(2,'Sunt error voluptas totam minima dolores perferendis nisi.','Fugiat qui non et ut sit quia laudantium unde.','Quam consectetur optio ut reprehenderit.','Beatae vero tempora fugit molestiae ex. Error minima eos expedita accusantium ipsum ratione nulla. Omnis modi animi at dolorum sit enim est corrupti. Et est reiciendis ullam provident et aut ipsa.','2024-08-24 11:08:53','2024-08-24 11:08:53'),(3,'Nulla sit nulla deleniti natus consequatur.','Iste ut illum suscipit eaque sint est.','Hic repellendus sint est.','Beatae quia ut odio distinctio voluptatum sunt nesciunt consectetur. Consequatur animi facilis rerum quas officiis debitis qui. Qui quidem error quae officia. Similique et aut eius sint.','2024-08-24 11:08:53','2024-08-24 11:08:53'),(4,'Dolor nisi beatae recusandae ea ut quis aut optio.','Quia sit enim quis doloremque officia aut necessitatibus.','Odio sunt quos dolor repellendus illo.','Molestiae modi odit et quis voluptatem suscipit voluptas. Odit consequatur voluptas ratione. Est nobis odio est eaque. Ipsam aliquid sunt ullam voluptatem non. Ducimus rerum vero quia omnis quia.','2024-08-24 11:08:53','2024-08-24 11:08:53'),(5,'Iusto quia vel nam est.','Doloremque officia fugit illum.','Ut exercitationem nulla in autem autem blanditiis dolores minima.','Quia aliquid autem facere explicabo. Est inventore veritatis dolores quidem magni ut. Ut enim accusantium temporibus et dolore iusto sequi a. Qui incidunt quo aliquid reiciendis magnam quod eos non.','2024-08-24 11:08:53','2024-08-24 11:08:53');
/*!40000 ALTER TABLE `customer__supports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Image_category` varchar(255) DEFAULT NULL,
  `Image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'Et sit repellendus hic rerum sit sit.','https://via.placeholder.com/640x480.png/00dd22?text=nihil','2024-08-24 11:08:53','2024-08-24 11:08:53'),(2,'Et molestiae quaerat eos placeat ut non aperiam.','https://via.placeholder.com/640x480.png/007711?text=consequatur','2024-08-24 11:08:53','2024-08-24 11:08:53'),(3,'Nam quod dolorem voluptatibus totam tempore quam labore.','https://via.placeholder.com/640x480.png/00eecc?text=aut','2024-08-24 11:08:53','2024-08-24 11:08:53'),(4,'Eius nobis laboriosam officiis accusantium magnam voluptas possimus voluptas.','https://via.placeholder.com/640x480.png/0000ff?text=ut','2024-08-24 11:08:53','2024-08-24 11:08:53'),(5,'Beatae exercitationem dolorem aut aut voluptatem atque.','https://via.placeholder.com/640x480.png/0077dd?text=vitae','2024-08-24 11:08:53','2024-08-24 11:08:53');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_08_15_083202_create_services_table',1),(6,'2024_08_15_083916_create_galleries_table',1),(7,'2024_08_15_084141_create_staff_table',1),(8,'2024_08_15_131202_modify_services_table',1),(9,'2024_08_16_062555_create_customer__supports_table',1),(10,'2024_08_16_103309_create_certificates_table',1),(11,'2024_08_23_125443_create_blogs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Service_title` varchar(255) NOT NULL,
  `Service_description` text NOT NULL,
  `Icon` varchar(255) DEFAULT NULL COMMENT 'this is the icon to each title',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_service_title_unique` (`Service_title`),
  UNIQUE KEY `services_service_description_unique` (`Service_description`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Veritatis fugit sit ea officiis id consequatur quis.','Cumque aut possimus modi consequatur est et. Esse quaerat tempore corporis commodi suscipit quia assumenda ipsam. Ut et ut nesciunt aut consequuntur ut non.','https://via.placeholder.com/640x480.png/005588?text=qui','2024-08-24 11:08:53','2024-08-24 11:08:53'),(2,'Qui aspernatur consequatur unde qui dolore beatae.','Laborum rerum et culpa expedita. Omnis animi dolores tempore nulla dolorem sint dolorem. Mollitia corrupti illum similique ut. Nemo quae illum maiores fugit illum quos.','https://via.placeholder.com/640x480.png/00bb55?text=omnis','2024-08-24 11:08:53','2024-08-24 11:08:53'),(3,'Nulla a aperiam culpa harum quos impedit impedit a.','Consectetur voluptatem laborum nesciunt assumenda minima nihil veniam. Soluta commodi et qui sit culpa eligendi.','https://via.placeholder.com/640x480.png/0066bb?text=quisquam','2024-08-24 11:08:53','2024-08-24 11:08:53'),(4,'Aliquam est laudantium est voluptas vitae laborum eligendi eveniet.','Necessitatibus id impedit eius iste vel voluptatem. Porro voluptate porro repudiandae ea magnam eius qui. Dolore quis maiores incidunt aut voluptas qui.','https://via.placeholder.com/640x480.png/001177?text=alias','2024-08-24 11:08:53','2024-08-24 11:08:53'),(5,'Ut consequuntur dolor dolor tempora voluptatibus quo est.','Itaque assumenda facere praesentium odio aut mollitia. Quia sed ipsam ratione atque ipsum molestiae neque. Autem earum quo beatae enim dolor voluptatum qui quisquam. Maxime quod ab quo consequatur quas occaecati repudiandae.','https://via.placeholder.com/640x480.png/00aabb?text=consequuntur','2024-08-24 11:08:53','2024-08-24 11:08:53');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Full_name` varchar(255) NOT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Profile_image` varchar(255) DEFAULT NULL,
  `Biography_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'Rerum cum debitis laboriosam totam sunt qui a.','Cumque omnis nihil tenetur rem explicabo.','https://via.placeholder.com/640x480.png/001199?text=qui','Consectetur et eveniet repellat inventore repellat qui debitis. Voluptatem illo amet illum ullam consequuntur delectus non exercitationem. Mollitia delectus nihil harum.','2024-08-24 11:08:53','2024-08-24 11:08:53'),(2,'Itaque quia quae voluptatem sunt rerum quia.','Similique omnis repellendus quidem ipsam adipisci tempore vel.','https://via.placeholder.com/640x480.png/00dd77?text=earum','Quos sed distinctio esse a mollitia ratione. Illo necessitatibus sint eos dolore nulla repellat a velit. Corporis praesentium eius quidem et qui ut optio.','2024-08-24 11:08:53','2024-08-24 11:08:53'),(3,'Corrupti deleniti iure rem totam.','Rem in totam quia labore autem.','https://via.placeholder.com/640x480.png/0066ff?text=est','At ratione officia placeat delectus est. Voluptatem deleniti ex accusamus non praesentium necessitatibus illum autem. Est veritatis nemo impedit ipsam voluptatem aut. Quaerat ratione nostrum accusamus dolorum qui sed est.','2024-08-24 11:08:53','2024-08-24 11:08:53'),(4,'Distinctio reprehenderit sunt deleniti minima nisi minima.','Ut vero voluptates qui qui.','https://via.placeholder.com/640x480.png/005599?text=esse','Omnis eius aut magnam temporibus maxime. Quos temporibus qui recusandae sit. Hic et et dolores.','2024-08-24 11:08:53','2024-08-24 11:08:53'),(5,'Commodi error fugiat eum ut.','Voluptatem et doloremque animi et aut modi facere.','https://via.placeholder.com/640x480.png/00cc55?text=amet','Necessitatibus aspernatur temporibus similique pariatur. Ex sed repudiandae ut aut aperiam nemo et. Sunt dolor consequuntur itaque ratione sapiente sint.','2024-08-24 11:08:53','2024-08-24 11:08:53');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Banana','banana@gmail.com',NULL,'$2y$10$5i1RL/7jx0I0lex9yxqgiuF0nAqVeTjRr1ctZzv.esaUn6ioZkkf2',NULL,'2024-08-24 11:11:26','2024-08-24 11:11:26');
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

-- Dump completed on 2024-08-24 15:21:36
