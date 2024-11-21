-- MySQL dump 10.13  Distrib 8.0.40, for Linux (x86_64)
--
-- Host: localhost    Database: icprwanda
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.22.04.1

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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (6,'Many remote state solutions offer disaster recovery features','','Some Terraform remote state backends offer remote execution of Terraform operations, which can be especially useful when you want to keep the execution environment separate from your local machine.\r\n\r\nIncorporating remote state management into your Terraform workflows offers the benefits mentioned above and more, making it an essential practice for modern infrastructure provisioning and management. The choice of backend for managing remote state files depends on two factors:\r\n\r\nHow the backend performs remote operations ΓÇô the ability to execute apply and destroy operations along with the general plan and state query operations. Typically, state queries are fundamental requirements of any backend, and operational abilities are optional. \r\nStorage encryption and locking ΓÇô you often want the project state file to be stored, retrieved, and updated securely. Thus, encryption at rest and in transit becomes important. Additionally, the remote backend should also provide state file-locking functionality to avoid race conditions ΓÇô which can potentially corrupt the state files.','assets/img/blogs/1726924012.jpg',NULL,NULL),(7,'This handy tool helps you create dummy text for all your layout needs.','','Some Terraform remote state backends offer remote execution of Terraform operations, which can be especially useful when you want to keep the execution environment separate from your local machine.\r\n\r\nIncorporating remote state management into your Terraform workflows offers the benefits mentioned above and more, making it an essential practice for modern infrastructure provisioning and management. The choice of backend for managing remote state files depends on two factors:\r\n\r\nHow the backend performs remote operations ΓÇô the ability to execute apply and destroy operations along with the general plan and state query operations. Typically, state queries are fundamental requirements of any backend, and operational abilities are optional. \r\nStorage encryption and locking ΓÇô you often want the project state file to be stored, retrieved, and updated securely. Thus, encryption at rest and in transit becomes important. Additionally, the remote backend should also provide state file-locking functionality to avoid race conditions ΓÇô which can potentially corrupt the state files.','assets/img/blogs/1726924012.jpg',NULL,NULL),(8,'hey mavin reka turebe iyi blog ibyayo','hey-mavin-reka-turebe-iyi-blog-ibyayo','<p>;jkbasdfjk hladfskafbhdjks adsja poza k</p><p>dsoza;fjnsd a</p><p> fodskzha kld</p><p>zxaodszba fbdnzaf</p><p>dsfjsdba fn sd</p><p>afsdjka fbsdznka fbndzaklcvndsbajkfndas</p><p>sdjkb ;fjknsda </p><p>sjkbfjkbadzkafd]safzdbafnldsa</p><p>jjbjkdfansm, fma</p><p>sdfasfbsda fds a\\</p><p>ashfkldsa</p><p><img src=\"data:image/jpeg;base64,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\" style=\"border: 4px solid #fff; border-radius: 15px; margin: 10px 0; max-width: 100%; height: auto;\"></p><p>fld</p><p>safjksd nafd afd</p><p>afdkls afnkldas</p><p>olsjdfnas/df</p><p>askdf;kdasmf as</p><p> kfdklsa \'sdfk</p><p>a  jkdfklsjafkljsdklajfsd\'</p><p>alf jsd[ dfl</p><p>ldlsaf jasd</p><p>lasd</p><p>j fsdkf sdfkkjsda</p><p> masdf</p><p> </p>','assets/img/blogs/1726924012.jpg','2024-09-25 13:42:06','2024-09-25 13:42:06');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificates`
--

DROP TABLE IF EXISTS `certificates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `certificates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qr_code_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificates`
--

LOCK TABLES `certificates` WRITE;
/*!40000 ALTER TABLE `certificates` DISABLE KEYS */;
INSERT INTO `certificates` VALUES (1,'Maniragaba','Computer Engineering','2024-08-26','certificates/certificate_1724694544.pdf','certificates/assets/certificates/qrcode_1724694544.png','2024-08-26 13:49:16','2024-08-26 13:49:16'),(2,'Placide','Computer Engineering. Biology','2024-08-26','certificates/certificate_1724694605.pdf','certificates/assets/certificates/qrcode_1724694605.png','2024-08-26 13:50:17','2024-08-26 13:50:17'),(3,'Maniragaba','Computer Engineering','2024-08-26','certificates/certificate_1724713229.pdf','certificates/assets/certificates/qrcode_1724713229.png','2024-08-26 19:00:35','2024-08-26 19:00:35'),(4,'jeph','Biology','2024-08-26','certificates/certificate_1724714008.pdf','certificates/assets/certificates/qrcode_1724714008.png','2024-08-26 19:13:37','2024-08-26 19:13:37'),(5,'kanyesaro','Kinyarwanda','2024-08-27','certificates/certificate_1724768743.pdf','certificates/assets/certificates/qrcode_1724768744.png','2024-08-27 10:25:55','2024-08-27 10:25:55'),(6,'Maniragaba','Mathematics for Engineers 1. Computer Engineering. marketing','2024-08-27','certificates/certificate_1724768869.pdf','certificates/assets/certificates/qrcode_1724768869.png','2024-08-27 10:27:59','2024-08-27 10:27:59'),(7,'jeph','Biology','2024-08-27','certificates/certificate_1724786396.pdf','certificates/assets/certificates/qrcode_1724786396.png','2024-08-27 15:20:05','2024-08-27 15:20:05'),(8,'Placide','Computer Engineering. Biology','2024-08-28','certificates/certificate_1724847482.pdf','certificates/assets/certificates/qrcode_1724847484.png','2024-08-28 08:18:15','2024-08-28 08:18:15'),(9,'Maniragaba','Computer Engineering','2024-08-28','certificates/certificate_1724853132.pdf','certificates/assets/certificates/qrcode_1724853132.png','2024-08-28 09:52:21','2024-08-28 09:52:21'),(10,'Maniragaba','Computer Engineering','2024-08-28','certificates/certificate_1724853480.pdf','certificates/assets/certificates/qrcode_1724853480.png','2024-08-28 09:58:09','2024-08-28 09:58:09'),(11,'Maniragaba','Computer Engineering','2024-08-28','certificates/certificate_1724853963.pdf','certificates/assets/certificates/qrcode_1724853964.png','2024-08-28 10:06:12','2024-08-28 10:06:12');
/*!40000 ALTER TABLE `certificates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_student`
--

DROP TABLE IF EXISTS `course_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_student` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `course_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_student_student_id_foreign` (`student_id`),
  KEY `course_student_course_id_foreign` (`course_id`),
  CONSTRAINT `course_student_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_student`
--

LOCK TABLES `course_student` WRITE;
/*!40000 ALTER TABLE `course_student` DISABLE KEYS */;
INSERT INTO `course_student` VALUES (1,1,4),(2,2,4),(3,2,5),(4,3,6),(5,4,5),(6,5,3),(7,5,4),(8,5,6),(9,6,7);
/*!40000 ALTER TABLE `course_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'Mathematics for Engineers 1','This is Year One Course.','2024-08-26 09:19:05','2024-08-26 09:19:05'),(2,'Mathematics for Engineers 1','This is Year One Course.','2024-08-26 09:19:06','2024-08-26 09:19:06'),(3,'Mathematics for Engineers 1','This is for Year One.','2024-08-26 09:20:51','2024-08-26 09:20:51'),(4,'Computer Engineering','Short course','2024-08-26 09:22:02','2024-08-26 09:22:02'),(5,'Biology','Short course','2024-08-26 10:29:31','2024-08-26 10:29:31'),(6,'marketing',NULL,'2024-08-26 19:12:18','2024-08-26 19:12:18'),(7,'Kinyarwanda',NULL,'2024-08-27 10:05:23','2024-08-27 10:05:23'),(8,'icp level one','sagfsd jkhskajhf dsafbhsjkha fdsa','2024-09-25 14:01:01','2024-09-25 14:01:01');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer__supports`
--

DROP TABLE IF EXISTS `customer__supports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer__supports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `customer__supports` VALUES (2,'Sunt error voluptas totam minima dolores perferendis nisi.','Fugiat qui non et ut sit quia laudantium unde.','Quam consectetur optio ut reprehenderit.','Beatae vero tempora fugit molestiae ex. Error minima eos expedita accusantium ipsum ratione nulla. Omnis modi animi at dolorum sit enim est corrupti. Et est reiciendis ullam provident et aut ipsa.','2024-08-24 09:08:53','2024-08-24 09:08:53'),(4,'Dolor nisi beatae recusandae ea ut quis aut optio.','Quia sit enim quis doloremque officia aut necessitatibus.','Odio sunt quos dolor repellendus illo.','Molestiae modi odit et quis voluptatem suscipit voluptas. Odit consequatur voluptas ratione. Est nobis odio est eaque. Ipsam aliquid sunt ullam voluptatem non. Ducimus rerum vero quia omnis quia.','2024-08-24 09:08:53','2024-08-24 09:08:53');
/*!40000 ALTER TABLE `customer__supports` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Image_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_event_id` bigint unsigned DEFAULT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci,
  `event_year` year DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_parent_event_id_foreign` (`parent_event_id`),
  CONSTRAINT `galleries_parent_event_id_foreign` FOREIGN KEY (`parent_event_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (6,'Natural','assets/img/1724767200.jpg',NULL,NULL,NULL,NULL,'2024-08-27 10:00:00','2024-08-27 10:00:00'),(7,'Evangelism','assets/img/1724769108.jpg',NULL,NULL,NULL,NULL,'2024-08-27 10:31:48','2024-08-27 10:31:48'),(11,'Our_Hackathons','assets/img/1724784065.jpg',NULL,NULL,NULL,NULL,'2024-08-27 14:41:05','2024-08-27 14:41:05');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_08_15_083202_create_services_table',1),(6,'2024_08_15_083916_create_galleries_table',1),(7,'2024_08_15_084141_create_staff_table',1),(8,'2024_08_15_131202_modify_services_table',1),(9,'2024_08_16_062555_create_customer__supports_table',1),(10,'2024_08_16_103309_create_certificates_table',1),(11,'2024_08_23_125443_create_blogs_table',1),(12,'2024_08_26_084712_create_courses_table',2),(13,'2024_08_26_085020_create_students_table',2),(14,'2024_09_03_180555_add_social_media_to_users_table',3),(15,'2024_09_03_182839_add_social_media_to_staff_table',3),(16,'2024_09_04_200840_create_winners_or_special_certificate_table',3),(17,'2024_09_04_202724_add_fields_to_best_projects_table',3),(18,'2024_09_09_102908_add_parent_event_id_to_galleries_table',3),(19,'2024_09_09_104536_add_event_details_to_galleries_table',3),(20,'2024_09_20_172554_update_content_column_in_blogs_table',3);
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Service_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Service_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'this is the icon to each title',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_service_title_unique` (`Service_title`),
  UNIQUE KEY `services_service_description_unique` (`Service_description`(255))
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (7,'Serving The Best Calling Service On behalf of Any','This handy tool helps you create dummy text for all your layout needs.\r\n\r\nWe are gradually adding new functionality and we welcome your suggestions and feedback.\r\n\r\nPlease feel free to send us any additional dummy texts.','assets/img/1727278617.jpg','2024-08-28 16:07:19','2024-09-25 13:36:57'),(8,'Welcome to the Dummy Text Generator!','Please feel free to send us any additional dummy texts.\r\nWe are gradually adding new functionality and we welcome your suggestions and feedback.\r\nThis handy tool helps you create dummy text for all your layout needs.','assets/img/1727278664.jpeg','2024-08-28 16:08:12','2024-09-25 13:37:44'),(9,'Many remote state solutions offer disaster recovery features','uch as automated backups and replication across regions. This ensures that your state data remains resilient even in the face of unexpected outages.\r\nMany remote state solutions offer disaster recovery features','assets/img/1727278687.jpeg','2024-08-28 16:09:14','2024-09-25 13:38:07');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `staff` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Biography_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'test','Cumque omnis nihil tenetur rem explicabo.','assets/img/1724756008.jpg','Consectetur et eveniet repellat inventore repellat qui debitis. Voluptatem illo amet illum ullam consequuntur delectus non exercitationem. Mollitia delectus nihil harum.','2024-08-24 09:08:53','2024-08-27 06:53:28',NULL,NULL,NULL),(2,'Testing second','Similique omnis repellendus quidem ipsam adipisci tempore vel.','assets/img/1724756165.jpg','Quos sed distinctio esse a mollitia ratione. Illo necessitatibus sint eos dolore nulla repellat a velit. Corporis praesentium eius quidem et qui ut optio.','2024-08-24 09:08:53','2024-08-27 06:56:05',NULL,NULL,NULL),(3,'Kanyesaro','PM','assets/img/1724768978.jpg','At ratione officia placeat delectus est. Voluptatem deleniti ex accusamus non praesentium necessitatibus illum autem. Est veritatis nemo impedit ipsam voluptatem aut. Quaerat ratione nostrum accusamus dolorum qui sed est.','2024-08-24 09:08:53','2024-08-27 10:29:38',NULL,NULL,NULL),(6,'testing','IT','assets/img/1724767158.jpg','It manager','2024-08-27 09:59:18','2024-08-27 09:59:18',NULL,NULL,NULL);
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Maniragaba','josephmaniragaba9@gmail.com','male','2024-08-26 10:35:30','2024-08-26 10:35:30'),(2,'Placide','placide@gmail.com','male','2024-08-26 10:43:10','2024-08-26 10:43:10'),(3,'kawa','kawa@gmail.com','female','2024-08-26 18:51:49','2024-08-26 18:51:49'),(4,'jeph','jeph@gmail.com','male','2024-08-26 19:12:18','2024-08-26 19:12:18'),(5,'Maniragaba','josephmanira@gmail.com','Male','2024-08-27 10:01:16','2024-08-27 10:01:16'),(6,'kanyesaro','kanyesaro@gmail.com','male','2024-08-27 10:05:23','2024-08-27 10:05:23');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
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
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Kanyesaro','banana@gmail.com',NULL,'$2y$10$Z1Qf0rXaGs6.2kz9BmrgT.lsOJOyj.LrDhF0Vx7QYu8VxM7WSCu.e',NULL,'2024-08-24 09:11:26','2024-08-24 09:11:26',NULL,NULL,NULL),(2,'kanyesaro','kanyesaro@gmail.com',NULL,'$2y$10$ykXEH4mIOdN7fEtdP.f0jO95M6tmh0/PXMxGop/JTadR5gO0UOydW',NULL,'2024-08-27 09:56:02','2024-08-27 09:56:02',NULL,NULL,NULL),(3,'mavin hatari','maicseba@gmail.com',NULL,'$2y$10$S6PQJxa0Skm9pbA/.ZPwSu4PM1j6rPfISMZq2eh84Ib3/mNVV8Mn2',NULL,'2024-09-25 13:32:26','2024-09-25 13:32:26',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `winners_or_special_certificate`
--

DROP TABLE IF EXISTS `winners_or_special_certificate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `winners_or_special_certificate` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name_or_special_award` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qr_code_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `winners_or_special_certificate`
--

LOCK TABLES `winners_or_special_certificate` WRITE;
/*!40000 ALTER TABLE `winners_or_special_certificate` DISABLE KEYS */;
/*!40000 ALTER TABLE `winners_or_special_certificate` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-21 16:04:58
