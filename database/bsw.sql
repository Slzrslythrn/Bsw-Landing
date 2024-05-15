-- MariaDB dump 10.19  Distrib 10.11.7-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bsw
-- ------------------------------------------------------
-- Server version	10.11.7-MariaDB-1:10.11.7+maria~ubu2204

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
-- Table structure for table `cctv`
--

DROP TABLE IF EXISTS `cctv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cctv` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `SiteId` int(11) NOT NULL,
  `nama_cctv` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `embed` text NOT NULL,
  `url_gambar` text DEFAULT NULL,
  `lat` varchar(150) DEFAULT NULL,
  `lng` varchar(150) DEFAULT NULL,
  `pemilik_cctv` varchar(100) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `kategori` enum('Publik','Privat') DEFAULT NULL,
  `status` enum('Publish','Nonpublish') DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cctv`
--

LOCK TABLES `cctv` WRITE;
/*!40000 ALTER TABLE `cctv` DISABLE KEYS */;
INSERT INTO `cctv` VALUES
(1,85,'CCTV Simpang Cipaku','Simpang Cipaku arah Stasiun Cipaku','https://restreamer.kotabogor.go.id/memfs/370f05d8-e9f1-443a-affe-361525593c5d.m3u8','https://restreamer.kotabogor.go.id/memfs/370f05d8-e9f1-443a-affe-361525593c5d.jpg','','','Diskominfo Kota Bogor','2023','Publik','Publish','2023-05-02 09:51:30','2023-05-29 09:28:13'),
(2,85,'CCTV BTM','BTM Simpang BTM arah Juanda','https://restreamer.kotabogor.go.id/memfs/e2647348-299b-41d7-9037-c8cc9648a9b0.m3u8','https://restreamer.kotabogor.go.id/memfs/e2647348-299b-41d7-9037-c8cc9648a9b0.jpg','-6.603864676404527','106.79617965861135','DISHUB Kota Bogor','2023','Publik','Publish','2023-05-08 09:51:30','2023-05-23 03:01:31'),
(3,85,'CCTV Tugu Kujang','Tugu Kujang arah Pasar Bogor','https://restreamer.kotabogor.go.id/memfs/86a0a251-b602-47ea-88c9-66725aea81c7.m3u8','https://restreamer.kotabogor.go.id/memfs/86a0a251-b602-47ea-88c9-66725aea81c7.jpg','','','DISHUB Kota Bogor','2019','Publik','Publish','2023-05-23 02:08:41','2023-05-30 08:41:34'),
(4,85,'CCTV  Jembatan Otista 1','Dari Arah Tugu Kujang ke Jembatan Otista','https://restreamer.kotabogor.go.id/memfs/18dc9f2d-e061-4eff-b2bb-d6489b6bb9a7.m3u8','https://restreamer.kotabogor.go.id/memfs/18dc9f2d-e061-4eff-b2bb-d6489b6bb9a7.jpg','','','DISHUB Kota Bogor','2023','Privat','Publish','2023-05-23 02:17:36','2023-05-30 04:39:06'),
(5,85,'CCTV TAJUR','Depan Tajur','https://restreamer.kotabogor.go.id/memfs/df176690-bc0e-4cb2-8338-b5fa05be5edf.m3u8','https://restreamer.kotabogor.go.id/memfs/df176690-bc0e-4cb2-8338-b5fa05be5edf.jpg','','','DISHUB Kota Bogor','2023','Publik','Publish','2023-05-23 02:19:10','2023-10-05 03:59:40'),
(6,85,'CCTV DEPAN ALUN-ALUN','ARAH JEMBATAN MERAH','https://restreamer.kotabogor.go.id/memfs/c9fdba9e-052a-4611-b5c5-915aa6dd224e.m3u8','https://restreamer.kotabogor.go.id/memfs/c9fdba9e-052a-4611-b5c5-915aa6dd224e.jpg','','','DISHUB Kota Bogor','2023','Publik','Publish','2023-05-23 02:21:26','2023-10-05 03:59:25'),
(7,85,'CCTV PASAR BOGOR','Depan Gerbang Kebun Raya Ps. Bogor arah Tugu Kujang','https://restreamer.kotabogor.go.id/memfs/baa05ad6-ddf7-4948-ad12-0d853d4cc182.m3u8','https://restreamer.kotabogor.go.id/memfs/baa05ad6-ddf7-4948-ad12-0d853d4cc182.jpg','','','DISHUB Kota Bogor','2019','Privat','Publish','2023-05-23 02:23:19','2023-10-04 09:04:52'),
(8,85,'CCTV Mbah Dalem','Pertigaan Cipaku Mbah Dalem arah Sukasari','https://restreamer.kotabogor.go.id/memfs/6784a614-6ce7-4818-a310-237cc2fbf58d.m3u8','https://restreamer.kotabogor.go.id/memfs/6784a614-6ce7-4818-a310-237cc2fbf58d.jpg','','','DISHUB Kota Bogor','2019','Publik','Publish','2023-05-23 02:25:43','2023-05-30 08:47:53'),
(10,85,'CCTV CIHELEUT','ARAH CIHELEUT','https://restreamer.kotabogor.go.id/memfs/46897241-d748-4bd1-9b57-537e6336efa9.m3u8','https://restreamer.kotabogor.go.id/memfs/46897241-d748-4bd1-9b57-537e6336efa9.jpg','','','DISHUB Kota Bogor','2023','Publik','Publish','2023-05-23 02:27:25','2023-10-05 03:58:53'),
(11,85,'CCTV JUANDA','ARAH MUSEUM PRESIDEN','https://restreamer.kotabogor.go.id/memfs/8d93bddb-fbd1-479f-bfa8-f23f22ad916f.m3u8','https://restreamer.kotabogor.go.id/memfs/8d93bddb-fbd1-479f-bfa8-f23f22ad916f.jpg','','','DISHUB Kota Bogor','2023','Publik','Publish','2023-05-23 02:28:07','2023-10-05 03:58:41'),
(12,85,'CCTV Pertigaan Kapten Muslihat','Pertigaan Kapten Muslihat arah Jembatan Merah','https://restreamer.kotabogor.go.id/memfs/d8b5b357-8e81-4b3a-a53d-831a4843aec9.m3u8','https://restreamer.kotabogor.go.id/memfs/d8b5b357-8e81-4b3a-a53d-831a4843aec9.jpg','','','DISHUB Kota Bogor','2017','Publik','Publish','2023-05-23 02:28:50','2023-05-30 08:47:08'),
(15,85,'CCTV LAWANG GINTUNG','Simpang Tiga Lawang Gintung','https://restreamer.kotabogor.go.id/memfs/e839442a-13e3-42c8-bda7-d1cbb567bf81.m3u8','https://restreamer.kotabogor.go.id/memfs/8d3a89b2-d07b-4d4c-a724-553474b54333.jpg','','','DISHUB Kota Bogor','2019','Publik','Publish','2023-05-23 02:32:15','2023-05-30 08:47:02'),
(16,85,'CCTV DEPAN MASJID RAYA','Depan Masjid Raya','https://restreamer.kotabogor.go.id/memfs/c7f36272-3d3e-4817-910b-d3f483776a2c.m3u8','https://restreamer.kotabogor.go.id/memfs/c7f36272-3d3e-4817-910b-d3f483776a2c.jpg','','','DISHUB Kota Bogor','2023','Publik','Publish','2023-05-23 02:32:54','2023-10-05 03:58:07'),
(17,85,'CCTV Simpang Gunung Batu','Simpang Gunung Batu arah Gunung Batu','https://restreamer.kotabogor.go.id/memfs/39b5cb9d-b2a8-4a34-ac7f-4190c2327587.m3u8','https://restreamer.kotabogor.go.id/memfs/39b5cb9d-b2a8-4a34-ac7f-4190c2327587.jpg','','','DISHUB Kota Bogor','2023','Privat','Publish','2023-05-23 02:33:41','2023-10-04 09:05:14'),
(18,85,'CCTV GANG AUT','ARAH GANG AUT','https://restreamer.kotabogor.go.id/memfs/7b72e6ed-23ef-4921-9467-07964650aaa6.m3u8','https://restreamer.kotabogor.go.id/memfs/7b72e6ed-23ef-4921-9467-07964650aaa6.jpg','','','DISHUB Kota Bogor','2023','Publik','Publish','2023-05-23 02:34:42','2023-10-05 03:56:47'),
(19,85,'CCTV TERMINAL BARANG SIANG','ARAH DEPAN TERMINAL BARANANG SIANG','https://restreamer.kotabogor.go.id/memfs/74a7daf7-90b9-425f-9333-690e536595c4.m3u8','https://restreamer.kotabogor.go.id/memfs/74a7daf7-90b9-425f-9333-690e536595c4.jpg','','','DISHUB Kota Bogor','2023','Publik','Publish','2023-05-23 02:35:29','2023-10-05 03:56:28'),
(21,85,'CCTV Depan Balaikota','Depan Balaikota arah Gerbang Istana Bogor','https://restreamer.kotabogor.go.id/memfs/13894c93-c36b-4f2e-9d68-853cf097d4a2.m3u8','https://restreamer.kotabogor.go.id/memfs/13894c93-c36b-4f2e-9d68-853cf097d4a2.jpg','','','POLRESTA Kota Bogor','2023','Privat','Publish','2023-05-30 04:16:31','2023-10-04 09:01:37'),
(22,85,'CCTV Ciawi Arah Bogor','Pertigaan Ciawi ke Arah Kota Bogor','https://restreamer.kotabogor.go.id/memfs/b6677b33-d6fa-4475-bdc0-fdba8c5e7354.m3u8','https://restreamer.kotabogor.go.id/memfs/b6677b33-d6fa-4475-bdc0-fdba8c5e7354.jpg','','','Diskominfo Kota Bogor','2023','Publik','Publish','2023-05-30 04:41:21','2023-05-30 08:46:20'),
(23,85,'CCTV Depan DISHUB','Depan Dinas Perhubungan arah Ke Ciawi','https://restreamer.kotabogor.go.id/memfs/df176690-bc0e-4cb2-8338-b5fa05be5edf.m3u8','https://restreamer.kotabogor.go.id/memfs/df176690-bc0e-4cb2-8338-b5fa05be5edf.jpg','','','DISHUB Kota Bogor','2019','Publik','Publish','2023-05-30 04:42:19','2023-05-30 08:45:21'),
(24,85,'CCTV Simpang Tiga Pancasan','Simpang Tiga Pancasan Arah Jalan Empang Pasir Kuda','https://restreamer.kotabogor.go.id/memfs/231320de-6ecd-4a45-ae12-2e504d43469a.m3u8','https://restreamer.kotabogor.go.id/memfs/231320de-6ecd-4a45-ae12-2e504d43469a.jpg','','','DISHUB Kota Bogor','2019','Publik','Publish','2023-05-30 04:43:33','2023-05-30 08:45:16'),
(25,85,'CCTV Pintu Utama Istana Bogor','Simpang Tiga RS. Salak arah Gerbang Istana','https://restreamer.kotabogor.go.id/memfs/c0f61baf-cb26-453d-ab66-660291b2980a.m3u8','https://restreamer.kotabogor.go.id/memfs/c0f61baf-cb26-453d-ab66-660291b2980a.jpg','','','POLRESTA Kota Bogor','2023','Privat','Nonpublish','2023-05-30 04:44:21','2023-10-05 03:38:11'),
(26,85,'CCTV Sudirman Bogor Permai','Jalan Sudirman - Bogor Permai','https://restreamer.kotabogor.go.id/memfs/00ab7ed5-6111-4a3f-b54d-caa3b2232b35.m3u8','','','','DISHUB Kota Bogor','2019','Publik','Nonpublish','2023-05-30 04:45:32','2023-05-30 08:45:07'),
(27,85,'CCTV Taman Peranginan','Taman Peranginan arah Air Mancur','https://restreamer.kotabogor.go.id/memfs/6dd573ff-a406-4763-b1dd-4d8ad3658b2a.m3u8','https://restreamer.kotabogor.go.id/memfs/6dd573ff-a406-4763-b1dd-4d8ad3658b2a.jpg','','','POLRESTA Kota Bogor','2019','Publik','Publish','2023-05-30 04:46:22','2023-05-30 08:45:02'),
(28,85,'CCTV Toll BORR','Pertigaan arah Tol Jalan Tol BORR','https://restreamer.kotabogor.go.id/memfs/b2c3f51a-9386-4cfd-9cbd-5be64e1bc83d.m3u8','https://restreamer.kotabogor.go.id/memfs/b2c3f51a-9386-4cfd-9cbd-5be64e1bc83d.jpg','','','Diskominfo Kota Bogor','2019','Publik','Publish','2023-05-30 04:47:08','2023-05-30 08:44:22'),
(29,85,'CCTV Jembatan Otista 2','Jembatan Otista Mengarah ke Pasar Bogor','https://restreamer.kotabogor.go.id/memfs/6b5551fc-04d2-46da-addf-de1b044f1c71.m3u8','https://restreamer.kotabogor.go.id/memfs/6b5551fc-04d2-46da-addf-de1b044f1c71.m3u8','','','Diskominfo Kota Bogor','2023','Privat','Publish','2023-05-30 04:48:04','2023-05-30 06:50:28'),
(30,85,'CCTV EMPANG ARAH BNR','SIMPANG EMPANG','https://restreamer.kotabogor.go.id/memfs/6376158f-586e-4363-8d3b-98201277a4d6.m3u8','https://restreamer.kotabogor.go.id/memfs/6376158f-586e-4363-8d3b-98201277a4d6.jpg','','','Kominfo','2023','Publik','Publish','2023-05-30 04:48:44','2023-10-05 03:46:30'),
(31,85,'CCTV EMPANG ARAH PANCASAN','SIMPANG EMPANG','https://restreamer.kotabogor.go.id/memfs/70961dc5-0f85-48a9-9c23-3f7ce6ea6ec0.m3u8','https://restreamer.kotabogor.go.id/memfs/70961dc5-0f85-48a9-9c23-3f7ce6ea6ec0.jpg','','','Diskominfo','2023','Publik','Publish','2023-05-30 04:50:02','2023-10-05 03:45:45'),
(32,85,'CCTV EKALOS','BUNDARAN EKALOS','https://restreamer.kotabogor.go.id/memfs/0984227a-6df1-43bc-bf1b-4f6a977098e3.m3u8','https://restreamer.kotabogor.go.id/memfs/0984227a-6df1-43bc-bf1b-4f6a977098e3.jpg','','','kominfo','2023','Publik','Publish','2023-05-30 04:50:51','2023-10-05 03:44:40'),
(33,85,'CCTV JAMBU 2','SIMPANG JAMBU 2','https://restreamer.kotabogor.go.id/memfs/2e691d1f-3e29-48b5-bfb4-2eb6cbc3ee66.m3u8','https://restreamer.kotabogor.go.id/memfs/2e691d1f-3e29-48b5-bfb4-2eb6cbc3ee66.jpg','','','kominfo','2023','Publik','Publish','2023-05-30 04:51:40','2023-10-05 03:44:23'),
(34,85,'CCTV AIR MANCUR','BUNDARAN AIR MANCUR ARAH ISTANA','https://restreamer.kotabogor.go.id/memfs/0be2aaf5-806e-4e70-842b-6ad196fcc754.m3u8','https://restreamer.kotabogor.go.id/memfs/0be2aaf5-806e-4e70-842b-6ad196fcc754.jpg','','','Dishub','2023','Publik','Publish','2023-05-30 04:52:29','2023-05-30 08:41:59'),
(35,85,'CCTV PAKUAN','ARAH PAKUAN','https://restreamer.kotabogor.go.id/memfs/e8aa3c86-ead2-4c66-aa08-bb44927fd7ab.m3u8','https://restreamer.kotabogor.go.id/memfs/e8aa3c86-ead2-4c66-aa08-bb44927fd7ab.jpg','','','Dishub','2023','Publik','Publish','2023-05-30 04:53:13','2023-10-05 03:44:08'),
(36,85,'CCTV JALAN PEDATI','ARAH KEC.GUDANG','https://restreamer.kotabogor.go.id/memfs/daa21e2f-e2dc-4d5c-a659-4f2f10070c1c.m3u8','https://restreamer.kotabogor.go.id/memfs/8f9a5e0d-06c5-431a-ace1-4ee8f86194f4.jpg','','','Kominfo','2023','Publik','Publish','2023-05-30 04:54:32','2023-10-05 03:43:53'),
(37,85,'CCTV JALAN PEDATI','ARAH SURKEN','https://restreamer.kotabogor.go.id/memfs/6887fa5f-d707-467a-957d-fa93eec33703.m3u8','https://restreamer.kotabogor.go.id/memfs/6887fa5f-d707-467a-957d-fa93eec33703.jpg','','','Kominfo','2023','Publik','Publish','2023-05-30 04:55:18','2023-10-05 03:43:26'),
(38,85,'CCTV JALAN SEKETENG','ARAH KEL. GUDANG','https://restreamer.kotabogor.go.id/memfs/922fbe21-4730-435c-a5ac-289055e2941e.m3u8','https://restreamer.kotabogor.go.id/memfs/922fbe21-4730-435c-a5ac-289055e2941e.jpg','','','Kominfo','2023','Publik','Publish','2023-05-30 04:56:02','2023-10-05 04:03:33'),
(39,85,'CCTV JALAN SEKETENG','ARAH SURKEN','https://restreamer.kotabogor.go.id/memfs/3d89e0d4-8ea2-47e2-9e91-e9a9c5fa00b3.m3u8','https://restreamer.kotabogor.go.id/memfs/3d89e0d4-8ea2-47e2-9e91-e9a9c5fa00b3.jpg','','','Kominfo','2023','Publik','Publish','2023-05-30 04:56:50','2023-10-05 03:43:01'),
(40,85,'CCTV PINTU KRB 2','Depan Perpustakaan dan Listerasi Pertanian','https://restreamer.kotabogor.go.id/memfs/d278709c-eb37-4627-8b41-3325ffe897d9.m3u8','https://restreamer.kotabogor.go.id/memfs/d278709c-eb37-4627-8b41-3325ffe897d9.jpg','','','Polresta','2023','Publik','Publish','2023-05-30 04:57:58','2023-10-05 03:40:41'),
(41,85,'CCTV KRB 3','SIMPANG PINTU KEBUN RAYA 3','https://restreamer.kotabogor.go.id/memfs/f4bc188d-33f6-4a59-8f3b-51afffbaa634.m3u8','https://restreamer.kotabogor.go.id/memfs/f4bc188d-33f6-4a59-8f3b-51afffbaa634.jpg','','','Polresta','2023','Publik','Publish','2023-05-30 04:58:32','2023-05-30 08:18:04'),
(42,85,'CCTV PINTU 2 KRB','ARAH PINTU 2 KRB','https://restreamer.kotabogor.go.id/memfs/d0e98e4f-48fa-4361-a72b-dadb116f67ca.m3u8','https://restreamer.kotabogor.go.id/memfs/d0e98e4f-48fa-4361-a72b-dadb116f67ca.jpg','','','Polresta','2023','Privat','Publish','2023-05-30 04:59:13','2023-10-04 09:02:14');
/*!40000 ALTER TABLE `cctv` ENABLE KEYS */;
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
-- Table structure for table `layanans`
--

DROP TABLE IF EXISTS `layanans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `layanans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_layanan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `layanans`
--

LOCK TABLES `layanans` WRITE;
/*!40000 ALTER TABLE `layanans` DISABLE KEYS */;
INSERT INTO `layanans` VALUES
(1,'Administrasi Kependudukan dan Pencatatan Sipil',NULL,NULL),
(2,'Kepegawaian',NULL,NULL),
(3,'Kesehatan',NULL,NULL),
(4,'Keuangan',NULL,NULL),
(5,'Komunikasi dan Informasi',NULL,NULL),
(6,'Lingkungan Hidup',NULL,NULL),
(7,'Pariwisata dan Kebudayaan',NULL,NULL),
(8,'Penanaman Modal',NULL,NULL),
(9,'Pendapatan',NULL,NULL),
(10,'Pendidikan',NULL,NULL),
(11,'Pemerintahan',NULL,NULL),
(12,'Pelayanan Publik',NULL,NULL);
/*!40000 ALTER TABLE `layanans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_layanans`
--

DROP TABLE IF EXISTS `menu_layanans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_layanans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `layanan_id` int(10) unsigned NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `link_sso` text DEFAULT NULL,
  `link_website` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `status` enum('aktif','tidak-aktif') NOT NULL,
  `visit` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_layanans`
--

LOCK TABLES `menu_layanans` WRITE;
/*!40000 ALTER TABLE `menu_layanans` DISABLE KEYS */;
INSERT INTO `menu_layanans` VALUES
(1,1,NULL,'','https://disdukcapil.kotabogor.go.id/sikancil-berlari/',NULL,'aktif',NULL,NULL,NULL),
(2,2,NULL,'','https://simpeg.kotabogor.go.id/simpeg/',NULL,'aktif',NULL,NULL,NULL),
(3,2,NULL,'','https://ekinerja.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(4,2,NULL,'','https://bkpsdm.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(5,3,NULL,'','https://esirbogorsehat.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(6,3,NULL,'','https://pamongwalagri.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(7,3,NULL,'','https://dikaper.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(8,3,NULL,'','https://simpus.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(9,3,NULL,'','https://sigeulis.kotabogor.go.id/admin/auth/login',NULL,'aktif',NULL,NULL,NULL),
(10,3,NULL,'','https://pkmmulyaharja.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(11,3,NULL,'','https://pkmbelong.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(12,3,NULL,'','https://pkmbogorselatan.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(13,3,NULL,'','https://pkmbogortengah.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(14,3,NULL,'','https://pkmbogortimur.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(15,3,NULL,'','https://pkmbogorutara.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(16,3,NULL,'','https://pkmbondongan.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(17,3,NULL,'','https://pkmcipaku.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(18,3,NULL,'','https://pkmgangaut.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(19,3,NULL,'','https://pkmgangkelor.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(20,3,NULL,'','https://pkmkayumanis.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(21,3,NULL,'','https://pkmkedungbadak.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(22,3,NULL,'','https://pkmlawanggintung.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(23,3,NULL,'','https://pkmmekarwangi.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(24,3,NULL,'','https://pkmmerdeka.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(25,3,NULL,'','https://pkmmulyaharja.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(26,3,NULL,'','https://pkmpancasan.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(27,3,NULL,'','https://pkmpasirmulya.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(28,3,NULL,'','https://pkmpondokrumput.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(29,3,NULL,'','https://pkmpuloarmyn.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(30,3,NULL,'','https://pkmsemplak.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(31,3,NULL,'','https://pkmsempur.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(32,3,NULL,'','https://pkmsindangbarang.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(33,3,NULL,'','https://pkmtanahsareal.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(34,3,NULL,'','https://pkmtegalgundil.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(35,3,NULL,'','https://pkmwarungjambu.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(36,4,NULL,'','https://aset.bogorkota.net/',NULL,'aktif',NULL,NULL,NULL),
(37,4,NULL,'','https://eoffice-bkad.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(38,5,NULL,'','https://agendabapak.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(39,5,NULL,'https://tnd.kotabogor.go.id/login/login','https://tnd.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(40,5,NULL,'','https://kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(41,5,NULL,'','https://sibadra.kotabogor.go.id/#/',NULL,'aktif',NULL,NULL,NULL),
(42,5,NULL,'','https://ppid.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(43,5,NULL,'','https://monsterweb.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(44,5,NULL,'','https://presensimeeting.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(45,5,NULL,'','https://smartcity.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(46,5,NULL,'','https://simral.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(47,6,NULL,'','https://dinaslingkunganhidup.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(48,6,NULL,'','https://dev-simpela.inovasialfatih.com/login',NULL,'tidak-aktif',NULL,NULL,NULL),
(49,8,NULL,'','perizinan.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(50,8,NULL,'','http://smartv2.kotabogor.go.id/bognew/izin/index.php/menu/home',NULL,'aktif',NULL,NULL,NULL),
(51,8,NULL,'','https://mpp.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(52,9,NULL,'','https://e-sspd.kotabogor.go.id/login',NULL,'aktif',NULL,NULL,NULL),
(53,9,NULL,'','https://layanan-bapenda.kotabogor.go.id/arcloc/',NULL,'aktif',NULL,NULL,NULL),
(54,9,NULL,'','https://layanan-bapenda.kotabogor.go.id/web/',NULL,'aktif',NULL,NULL,NULL),
(55,9,NULL,'','https://layanan-bapenda.kotabogor.go.id/siwarah/',NULL,'aktif',NULL,NULL,NULL),
(56,9,NULL,'','http://e-molen.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(57,9,NULL,'https://layanan-bapenda.kotabogor.go.id/dalang','https://layanan-bapenda.kotabogor.go.id/dalang',NULL,'aktif',NULL,NULL,NULL),
(58,9,NULL,'https://layanan-bapenda.kotabogor.go.id/e-sppt/','https://layanan-bapenda.kotabogor.go.id/e-sppt/',NULL,'aktif',NULL,NULL,NULL),
(59,9,NULL,'','http://simtaru.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(60,10,NULL,'','https://siperi.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(61,10,NULL,'','https://sibos.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(62,10,NULL,'','http://103.14.229.40/',NULL,'aktif',NULL,NULL,NULL),
(63,10,NULL,'','https://ppdb.kotabogor.go.id/beranda',NULL,'aktif',NULL,NULL,NULL),
(64,11,NULL,'','https://silajangsistal.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(65,11,NULL,'','https://kecbogorutara.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(66,11,NULL,'','https://kecbogorselatan.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(67,11,NULL,'','https://kecbogorbarat.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(68,11,NULL,'','https://kecbogortimur.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(69,11,NULL,'','https://kecbogortengah.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(70,11,NULL,'','https://kectanahsareal.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(71,12,NULL,'','https://csr.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(72,12,NULL,'','https://sianceu.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(73,12,NULL,'','https://bogorberkebun.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(74,12,NULL,'','https://solusi.kotabogor.go.id/beranda',NULL,'aktif',NULL,NULL,NULL),
(75,12,NULL,'https://e-metrologi.kotabogor.go.id/login-sso','https://e-metrologi.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(76,12,NULL,'','https://destinasi.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(77,12,NULL,'','http://polinggaul.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(78,12,NULL,'','https://smartposyandu.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(79,12,NULL,'','https://angkutan.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(80,12,NULL,'','https://bogorkerja.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(81,12,NULL,'','https://pelayanansosial.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(82,12,NULL,'','https://jdih-dprd.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(83,12,NULL,'','https://data.kotabogor.go.id/landing',NULL,'aktif',NULL,NULL,NULL),
(84,12,NULL,'','https://forumanak.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(85,12,NULL,'','https://digitalbapokting.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(86,12,NULL,'','bkpsdm.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(87,12,NULL,'','https://bkad.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(88,12,NULL,'','bapenda.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(89,12,NULL,'','https://dinkes.kotabogor.go.id/',NULL,'aktif',NULL,NULL,NULL),
(90,12,NULL,'','https://dishub.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(91,12,NULL,'','https://kominfo.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(92,12,NULL,'','https://kelbalumbangjaya.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(93,12,NULL,'','https://kelbubulak.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(94,12,NULL,'','https://kelcilendekbarat.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(95,12,NULL,'','https://kelcilendektimur.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(96,12,NULL,'','https://kelcurug.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(97,12,NULL,'','https://kelcurugmekar.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(98,12,NULL,'','https://kelgunungbatu.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(99,12,NULL,'','https://kelloji.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(100,12,NULL,'','https://kelmargajaya.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(101,12,NULL,'','https://kelmenteng.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(102,12,NULL,'','https://kelpasirjaya.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(103,12,NULL,'','https://kelpasirkuda.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(104,12,NULL,'','https://kelpasirmulya.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(105,12,NULL,'','https://kelsemplak.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(106,12,NULL,'','https://kelsindangbarang.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(107,12,NULL,'','https://kelsitugede.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(108,12,NULL,'','https://kelcipaku.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(109,12,NULL,'','https://kelpakuan.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(110,12,NULL,'','https://kelgenteng.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(111,12,NULL,'','https://kelmuarasari.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(112,12,NULL,'','https://kelharjasari.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(113,12,NULL,'','https://kelkertamaya.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(114,12,NULL,'','https://kelrancamaya.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(115,12,NULL,'','https://kelbojongkerta.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(116,12,NULL,'','https://kelranggamekar.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(117,12,NULL,'','https://kelmulyaharja.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(118,12,NULL,'','https://kelpamoyanan.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(119,12,NULL,'','https://kelcikaret.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(120,12,NULL,'','https://kelbatutulis.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(121,12,NULL,'','https://kelbondongan.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(122,12,NULL,'','https://kelempang.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(123,12,NULL,'','https://kellawanggintung.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(124,12,NULL,'','https://kelbabakan.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(125,12,NULL,'','https://kelbabakanpasar.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(126,12,NULL,'','https://kelcibogor.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(127,12,NULL,'','https://kelciwaringin.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(128,12,NULL,'','https://kelgudang.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(129,12,NULL,'','https://kelkebonkalapa.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(130,12,NULL,'','https://kelpabaton.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(131,12,NULL,'','https://kelpaledang.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(132,12,NULL,'','https://kelpanaragan.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(133,12,NULL,'','https://kelsempur.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(134,12,NULL,'','https://keltegallega.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(135,12,NULL,'','https://kelbaranangsiang.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(136,12,NULL,'','https://kelkatulampa.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(137,12,NULL,'','https://kelsindangrasa.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(138,12,NULL,'','https://kelsindangsari.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(139,12,NULL,'','https://kelsindangsari.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(140,12,NULL,'','https://keltajur.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(141,12,NULL,'','https://kelbantarjati.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(142,12,NULL,'','https://kelcibuluh.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(143,12,NULL,'','https://kelciluar.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(144,12,NULL,'','https://kelcimahpar.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(145,12,NULL,'','https://kelciparigi.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(146,12,NULL,'','https://kelkedunghalang.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(147,12,NULL,'','https://keltanahbaru.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(148,12,NULL,'','https://keltegalgundil.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(149,12,NULL,'','https://kelcibadak.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(150,12,NULL,'','https://kelkayumanis.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(151,12,NULL,'','https://kelkebonpedes.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(152,12,NULL,'','https://kelkedungbadak.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(153,12,NULL,'','https://kelkedungjaya.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(154,12,NULL,'','https://kelkedungwaringin.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(155,12,NULL,'','https://kelkencana.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(156,12,'Kelurahan Mekarwangi',NULL,'https://kelmekarwangi.kotabogor.go.id','18042024oQREOGXA9N.png','aktif',NULL,NULL,'2024-04-17 20:01:25'),
(157,12,NULL,'','https://kelsukadamai.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(158,12,NULL,'','https://kelsukaresmi.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL),
(159,12,NULL,'','https://keltanahsareal.kotabogor.go.id',NULL,'aktif',NULL,NULL,NULL);
/*!40000 ALTER TABLE `menu_layanans` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2024_04_02_021036_create_layanans_table',2),
(6,'2024_04_02_021508_create_menu_layanans_table',3),
(7,'2024_04_16_032001_add_nama_to_menu_layanans_table',4),
(8,'2024_04_18_020122_add_icon_to_menu_layanans',5),
(10,'2024_04_29_020805_create_pengumumen_table',6),
(11,'2024_05_02_013201_create_sliders_table',7),
(12,'2024_05_02_014720_add_judul_to_slider_table',8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengumuman`
--

DROP TABLE IF EXISTS `pengumuman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengumuman` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `banner` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `isactive` enum('0','1') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengumuman`
--

LOCK TABLES `pengumuman` WRITE;
/*!40000 ALTER TABLE `pengumuman` DISABLE KEYS */;
INSERT INTO `pengumuman` VALUES
(2,'29042024AdHpPRvS4J.jpg','Contoh Data 1','https://kemendikbud.go.id','1','2024-04-28 21:03:13','2024-04-28 21:03:13');
/*!40000 ALTER TABLE `pengumuman` ENABLE KEYS */;
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
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slider` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `isactive` enum('0','1') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES
(2,'02052024s5j9MfCvTd.gif','Layanan SSO','Salah satu layanan SSO yang terintegrasi dengan layanan .. Salah satu layanan SSO yang terintegrasi dengan layanan .. Salah satu layanan SSO yang terintegrasi dengan layanan .. Salah satu layanan SSO yang terintegrasi dengan layanan .. Salah satu layanan SSO yang terintegrasi dengan layanan ..','https://sso-bsw.kotabogor.go.id/','1','2024-05-01 20:05:05','2024-05-01 20:11:00'),
(3,'02052024cfqprah4cR.gif','Slider 2','Lorem ipsum dolor si amet Lorem ipsum dolor si amet Lorem ipsum dolor si amet Lorem ipsum dolor si amet Lorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si ametLorem ipsum dolor si amet Lorem ipsum dolor si amet Lorem ipsum dolor si amet Lorem ipsum dolor si amet Lorem ipsum dolor si amet Lorem ipsum dolor si amet Lorem ipsum dolor si amet Lorem ipsum dolor si amet<br>','https://sso-bsw.kotabogor.go.id/','1','2024-05-01 20:18:07','2024-05-01 20:18:07');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
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
INSERT INTO `users` VALUES
(1,'admin','admin@gmail.com',NULL,'$2y$12$di/5VybMf7n8NPG8yotGfuBE97.f7fE7JjkmHqRT1XjZ4pv6FbRNW',NULL,'2024-04-01 19:21:13','2024-04-18 00:08:15');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bsw'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-03 15:07:35
