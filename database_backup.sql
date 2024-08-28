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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (6,'Many remote state solutions offer disaster recovery features','Some Terraform remote state backends offer remote execution of Terraform operations, which can be especially useful when you want to keep the execution environment separate from your local machine.\r\n\r\nIncorporating remote state management into your Terraform workflows offers the benefits mentioned above and more, making it an essential practice for modern infrastructure provisioning and management. The choice of backend for managing remote state files depends on two factors:\r\n\r\nHow the backend performs remote operations ΓÇô the ability to execute apply and destroy operations along with the general plan and state query operations. Typically, state queries are fundamental requirements of any backend, and operational abilities are optional. \r\nStorage encryption and locking ΓÇô you often want the project state file to be stored, retrieved, and updated securely. Thus, encryption at rest and in transit becomes important. Additionally, the remote backend should also provide state file-locking functionality to avoid race conditions ΓÇô which can potentially corrupt the state files.','/assets/img/1724752588.jpg',NULL,NULL),(7,'This handy tool helps you create dummy text for all your layout needs.','Some Terraform remote state backends offer remote execution of Terraform operations, which can be especially useful when you want to keep the execution environment separate from your local machine.\r\n\r\nIncorporating remote state management into your Terraform workflows offers the benefits mentioned above and more, making it an essential practice for modern infrastructure provisioning and management. The choice of backend for managing remote state files depends on two factors:\r\n\r\nHow the backend performs remote operations ΓÇô the ability to execute apply and destroy operations along with the general plan and state query operations. Typically, state queries are fundamental requirements of any backend, and operational abilities are optional. \r\nStorage encryption and locking ΓÇô you often want the project state file to be stored, retrieved, and updated securely. Thus, encryption at rest and in transit becomes important. Additionally, the remote backend should also provide state file-locking functionality to avoid race conditions ΓÇô which can potentially corrupt the state files.','/assets/img/1724875692.png',NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificates`
--

LOCK TABLES `certificates` WRITE;
/*!40000 ALTER TABLE `certificates` DISABLE KEYS */;
INSERT INTO `certificates` VALUES (1,'Maniragaba','Computer Engineering','2024-08-26','certificates/certificate_1724694544.pdf','certificates/assets/certificates/qrcode_1724694544.png','2024-08-26 15:49:16','2024-08-26 15:49:16'),(2,'Placide','Computer Engineering. Biology','2024-08-26','certificates/certificate_1724694605.pdf','certificates/assets/certificates/qrcode_1724694605.png','2024-08-26 15:50:17','2024-08-26 15:50:17'),(3,'Maniragaba','Computer Engineering','2024-08-26','certificates/certificate_1724713229.pdf','certificates/assets/certificates/qrcode_1724713229.png','2024-08-26 21:00:35','2024-08-26 21:00:35'),(4,'jeph','Biology','2024-08-26','certificates/certificate_1724714008.pdf','certificates/assets/certificates/qrcode_1724714008.png','2024-08-26 21:13:37','2024-08-26 21:13:37'),(5,'kanyesaro','Kinyarwanda','2024-08-27','certificates/certificate_1724768743.pdf','certificates/assets/certificates/qrcode_1724768744.png','2024-08-27 12:25:55','2024-08-27 12:25:55'),(6,'Maniragaba','Mathematics for Engineers 1. Computer Engineering. marketing','2024-08-27','certificates/certificate_1724768869.pdf','certificates/assets/certificates/qrcode_1724768869.png','2024-08-27 12:27:59','2024-08-27 12:27:59'),(7,'jeph','Biology','2024-08-27','certificates/certificate_1724786396.pdf','certificates/assets/certificates/qrcode_1724786396.png','2024-08-27 17:20:05','2024-08-27 17:20:05'),(8,'Placide','Computer Engineering. Biology','2024-08-28','certificates/certificate_1724847482.pdf','certificates/assets/certificates/qrcode_1724847484.png','2024-08-28 10:18:15','2024-08-28 10:18:15'),(9,'Maniragaba','Computer Engineering','2024-08-28','certificates/certificate_1724853132.pdf','certificates/assets/certificates/qrcode_1724853132.png','2024-08-28 11:52:21','2024-08-28 11:52:21'),(10,'Maniragaba','Computer Engineering','2024-08-28','certificates/certificate_1724853480.pdf','certificates/assets/certificates/qrcode_1724853480.png','2024-08-28 11:58:09','2024-08-28 11:58:09'),(11,'Maniragaba','Computer Engineering','2024-08-28','certificates/certificate_1724853963.pdf','certificates/assets/certificates/qrcode_1724853964.png','2024-08-28 12:06:12','2024-08-28 12:06:12');
/*!40000 ALTER TABLE `certificates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_student`
--

DROP TABLE IF EXISTS `course_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_student` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'Mathematics for Engineers 1','This is Year One Course.','2024-08-26 11:19:05','2024-08-26 11:19:05'),(2,'Mathematics for Engineers 1','This is Year One Course.','2024-08-26 11:19:06','2024-08-26 11:19:06'),(3,'Mathematics for Engineers 1','This is for Year One.','2024-08-26 11:20:51','2024-08-26 11:20:51'),(4,'Computer Engineering','Short course','2024-08-26 11:22:02','2024-08-26 11:22:02'),(5,'Biology','Short course','2024-08-26 12:29:31','2024-08-26 12:29:31'),(6,'marketing',NULL,'2024-08-26 21:12:18','2024-08-26 21:12:18'),(7,'Kinyarwanda',NULL,'2024-08-27 12:05:23','2024-08-27 12:05:23');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
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
INSERT INTO `customer__supports` VALUES (2,'Sunt error voluptas totam minima dolores perferendis nisi.','Fugiat qui non et ut sit quia laudantium unde.','Quam consectetur optio ut reprehenderit.','Beatae vero tempora fugit molestiae ex. Error minima eos expedita accusantium ipsum ratione nulla. Omnis modi animi at dolorum sit enim est corrupti. Et est reiciendis ullam provident et aut ipsa.','2024-08-24 11:08:53','2024-08-24 11:08:53'),(4,'Dolor nisi beatae recusandae ea ut quis aut optio.','Quia sit enim quis doloremque officia aut necessitatibus.','Odio sunt quos dolor repellendus illo.','Molestiae modi odit et quis voluptatem suscipit voluptas. Odit consequatur voluptas ratione. Est nobis odio est eaque. Ipsam aliquid sunt ullam voluptatem non. Ducimus rerum vero quia omnis quia.','2024-08-24 11:08:53','2024-08-24 11:08:53');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (6,'Natural','assets/img/1724767200.jpg','2024-08-27 12:00:00','2024-08-27 12:00:00'),(7,'Evangelism','assets/img/1724769108.jpg','2024-08-27 12:31:48','2024-08-27 12:31:48'),(11,'Our_Hackathons','assets/img/1724784065.jpg','2024-08-27 16:41:05','2024-08-27 16:41:05');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_08_15_083202_create_services_table',1),(6,'2024_08_15_083916_create_galleries_table',1),(7,'2024_08_15_084141_create_staff_table',1),(8,'2024_08_15_131202_modify_services_table',1),(9,'2024_08_16_062555_create_customer__supports_table',1),(10,'2024_08_16_103309_create_certificates_table',1),(11,'2024_08_23_125443_create_blogs_table',1),(12,'2024_08_26_084712_create_courses_table',2),(13,'2024_08_26_085020_create_students_table',2);
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (7,'Serving The Best Calling Service On behalf of Any','This handy tool helps you create dummy text for all your layout needs.\r\n\r\nWe are gradually adding new functionality and we welcome your suggestions and feedback.\r\n\r\nPlease feel free to send us any additional dummy texts.','assets/img/1724875639.png','2024-08-28 18:07:19','2024-08-28 18:07:19'),(8,'Welcome to the Dummy Text Generator!','Please feel free to send us any additional dummy texts.\r\nWe are gradually adding new functionality and we welcome your suggestions and feedback.\r\nThis handy tool helps you create dummy text for all your layout needs.','assets/img/1724875692.png','2024-08-28 18:08:12','2024-08-28 18:08:12'),(9,'Many remote state solutions offer disaster recovery features','uch as automated backups and replication across regions. This ensures that your state data remains resilient even in the face of unexpected outages.\r\nMany remote state solutions offer disaster recovery features','assets/img/1724875754.png','2024-08-28 18:09:14','2024-08-28 18:09:14');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'test','Cumque omnis nihil tenetur rem explicabo.','assets/img/1724756008.jpg','Consectetur et eveniet repellat inventore repellat qui debitis. Voluptatem illo amet illum ullam consequuntur delectus non exercitationem. Mollitia delectus nihil harum.','2024-08-24 11:08:53','2024-08-27 08:53:28'),(2,'Testing second','Similique omnis repellendus quidem ipsam adipisci tempore vel.','assets/img/1724756165.jpg','Quos sed distinctio esse a mollitia ratione. Illo necessitatibus sint eos dolore nulla repellat a velit. Corporis praesentium eius quidem et qui ut optio.','2024-08-24 11:08:53','2024-08-27 08:56:05'),(3,'Kanyesaro','PM','assets/img/1724768978.jpg','At ratione officia placeat delectus est. Voluptatem deleniti ex accusamus non praesentium necessitatibus illum autem. Est veritatis nemo impedit ipsam voluptatem aut. Quaerat ratione nostrum accusamus dolorum qui sed est.','2024-08-24 11:08:53','2024-08-27 12:29:38'),(6,'testing','IT','assets/img/1724767158.jpg','It manager','2024-08-27 11:59:18','2024-08-27 11:59:18');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `biography_description` varchar(255) DEFAULT NULL,
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
INSERT INTO `students` VALUES (1,'Maniragaba','josephmaniragaba9@gmail.com','male','2024-08-26 12:35:30','2024-08-26 12:35:30'),(2,'Placide','placide@gmail.com','male','2024-08-26 12:43:10','2024-08-26 12:43:10'),(3,'kawa','kawa@gmail.com','female','2024-08-26 20:51:49','2024-08-26 20:51:49'),(4,'jeph','jeph@gmail.com','male','2024-08-26 21:12:18','2024-08-26 21:12:18'),(5,'Maniragaba','josephmanira@gmail.com','Male','2024-08-27 12:01:16','2024-08-27 12:01:16'),(6,'kanyesaro','kanyesaro@gmail.com','male','2024-08-27 12:05:23','2024-08-27 12:05:23');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Kanyesaro','banana@gmail.com',NULL,'$2y$10$Z1Qf0rXaGs6.2kz9BmrgT.lsOJOyj.LrDhF0Vx7QYu8VxM7WSCu.e',NULL,'2024-08-24 11:11:26','2024-08-24 11:11:26'),(2,'kanyesaro','kanyesaro@gmail.com',NULL,'$2y$10$ykXEH4mIOdN7fEtdP.f0jO95M6tmh0/PXMxGop/JTadR5gO0UOydW',NULL,'2024-08-27 11:56:02','2024-08-27 11:56:02');
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

-- Dump completed on 2024-08-28 22:25:27
