-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2025 at 11:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('sistem_informasi_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1750339878),
('sistem_informasi_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1750339878;', 1750339878),
('sistem_informasi_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:236:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"Add Pages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:16:\"view-any Content\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:2;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:16:\"view-any Content\";s:1:\"c\";s:3:\"api\";}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:12:\"view Content\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:4;a:3:{s:1:\"a\";i:5;s:1:\"b\";s:12:\"view Content\";s:1:\"c\";s:3:\"api\";}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:14:\"create Content\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:6;a:3:{s:1:\"a\";i:7;s:1:\"b\";s:14:\"create Content\";s:1:\"c\";s:3:\"api\";}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:14:\"update Content\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:8;a:3:{s:1:\"a\";i:9;s:1:\"b\";s:14:\"update Content\";s:1:\"c\";s:3:\"api\";}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:14:\"delete Content\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:10;a:3:{s:1:\"a\";i:11;s:1:\"b\";s:14:\"delete Content\";s:1:\"c\";s:3:\"api\";}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:18:\"delete-any Content\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:12;a:3:{s:1:\"a\";i:13;s:1:\"b\";s:18:\"delete-any Content\";s:1:\"c\";s:3:\"api\";}i:13;a:3:{s:1:\"a\";i:14;s:1:\"b\";s:17:\"replicate Content\";s:1:\"c\";s:3:\"web\";}i:14;a:3:{s:1:\"a\";i:15;s:1:\"b\";s:17:\"replicate Content\";s:1:\"c\";s:3:\"api\";}i:15;a:3:{s:1:\"a\";i:16;s:1:\"b\";s:15:\"restore Content\";s:1:\"c\";s:3:\"web\";}i:16;a:3:{s:1:\"a\";i:17;s:1:\"b\";s:15:\"restore Content\";s:1:\"c\";s:3:\"api\";}i:17;a:3:{s:1:\"a\";i:18;s:1:\"b\";s:19:\"restore-any Content\";s:1:\"c\";s:3:\"web\";}i:18;a:3:{s:1:\"a\";i:19;s:1:\"b\";s:19:\"restore-any Content\";s:1:\"c\";s:3:\"api\";}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:15:\"reorder Content\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:3:{s:1:\"a\";i:21;s:1:\"b\";s:15:\"reorder Content\";s:1:\"c\";s:3:\"api\";}i:21;a:3:{s:1:\"a\";i:22;s:1:\"b\";s:20:\"force-delete Content\";s:1:\"c\";s:3:\"web\";}i:22;a:3:{s:1:\"a\";i:23;s:1:\"b\";s:20:\"force-delete Content\";s:1:\"c\";s:3:\"api\";}i:23;a:3:{s:1:\"a\";i:24;s:1:\"b\";s:24:\"force-delete-any Content\";s:1:\"c\";s:3:\"web\";}i:24;a:3:{s:1:\"a\";i:25;s:1:\"b\";s:24:\"force-delete-any Content\";s:1:\"c\";s:3:\"api\";}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:14:\"view-any Dosen\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:26;a:3:{s:1:\"a\";i:27;s:1:\"b\";s:14:\"view-any Dosen\";s:1:\"c\";s:3:\"api\";}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:10:\"view Dosen\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:28;a:3:{s:1:\"a\";i:29;s:1:\"b\";s:10:\"view Dosen\";s:1:\"c\";s:3:\"api\";}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:12:\"create Dosen\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:30;a:3:{s:1:\"a\";i:31;s:1:\"b\";s:12:\"create Dosen\";s:1:\"c\";s:3:\"api\";}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:12:\"update Dosen\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:3:{s:1:\"a\";i:33;s:1:\"b\";s:12:\"update Dosen\";s:1:\"c\";s:3:\"api\";}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:12:\"delete Dosen\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:3:{s:1:\"a\";i:35;s:1:\"b\";s:12:\"delete Dosen\";s:1:\"c\";s:3:\"api\";}i:35;a:3:{s:1:\"a\";i:36;s:1:\"b\";s:16:\"delete-any Dosen\";s:1:\"c\";s:3:\"web\";}i:36;a:3:{s:1:\"a\";i:37;s:1:\"b\";s:16:\"delete-any Dosen\";s:1:\"c\";s:3:\"api\";}i:37;a:3:{s:1:\"a\";i:38;s:1:\"b\";s:15:\"replicate Dosen\";s:1:\"c\";s:3:\"web\";}i:38;a:3:{s:1:\"a\";i:39;s:1:\"b\";s:15:\"replicate Dosen\";s:1:\"c\";s:3:\"api\";}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:13:\"restore Dosen\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:3:{s:1:\"a\";i:41;s:1:\"b\";s:13:\"restore Dosen\";s:1:\"c\";s:3:\"api\";}i:41;a:3:{s:1:\"a\";i:42;s:1:\"b\";s:17:\"restore-any Dosen\";s:1:\"c\";s:3:\"web\";}i:42;a:3:{s:1:\"a\";i:43;s:1:\"b\";s:17:\"restore-any Dosen\";s:1:\"c\";s:3:\"api\";}i:43;a:3:{s:1:\"a\";i:44;s:1:\"b\";s:13:\"reorder Dosen\";s:1:\"c\";s:3:\"web\";}i:44;a:3:{s:1:\"a\";i:45;s:1:\"b\";s:13:\"reorder Dosen\";s:1:\"c\";s:3:\"api\";}i:45;a:3:{s:1:\"a\";i:46;s:1:\"b\";s:18:\"force-delete Dosen\";s:1:\"c\";s:3:\"web\";}i:46;a:3:{s:1:\"a\";i:47;s:1:\"b\";s:18:\"force-delete Dosen\";s:1:\"c\";s:3:\"api\";}i:47;a:3:{s:1:\"a\";i:48;s:1:\"b\";s:22:\"force-delete-any Dosen\";s:1:\"c\";s:3:\"web\";}i:48;a:3:{s:1:\"a\";i:49;s:1:\"b\";s:22:\"force-delete-any Dosen\";s:1:\"c\";s:3:\"api\";}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:25:\"view-any KalenderAkademik\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:50;a:3:{s:1:\"a\";i:51;s:1:\"b\";s:25:\"view-any KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:21:\"view KalenderAkademik\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:52;a:3:{s:1:\"a\";i:53;s:1:\"b\";s:21:\"view KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:23:\"create KalenderAkademik\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:54;a:3:{s:1:\"a\";i:55;s:1:\"b\";s:23:\"create KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:23:\"update KalenderAkademik\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:56;a:3:{s:1:\"a\";i:57;s:1:\"b\";s:23:\"update KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:23:\"delete KalenderAkademik\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:58;a:3:{s:1:\"a\";i:59;s:1:\"b\";s:23:\"delete KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:27:\"delete-any KalenderAkademik\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:60;a:3:{s:1:\"a\";i:61;s:1:\"b\";s:27:\"delete-any KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:61;a:3:{s:1:\"a\";i:62;s:1:\"b\";s:26:\"replicate KalenderAkademik\";s:1:\"c\";s:3:\"web\";}i:62;a:3:{s:1:\"a\";i:63;s:1:\"b\";s:26:\"replicate KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:63;a:3:{s:1:\"a\";i:64;s:1:\"b\";s:24:\"restore KalenderAkademik\";s:1:\"c\";s:3:\"web\";}i:64;a:3:{s:1:\"a\";i:65;s:1:\"b\";s:24:\"restore KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:28:\"restore-any KalenderAkademik\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:3:{s:1:\"a\";i:67;s:1:\"b\";s:28:\"restore-any KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:24:\"reorder KalenderAkademik\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:68;a:3:{s:1:\"a\";i:69;s:1:\"b\";s:24:\"reorder KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:69;a:3:{s:1:\"a\";i:70;s:1:\"b\";s:29:\"force-delete KalenderAkademik\";s:1:\"c\";s:3:\"web\";}i:70;a:3:{s:1:\"a\";i:71;s:1:\"b\";s:29:\"force-delete KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:71;a:3:{s:1:\"a\";i:72;s:1:\"b\";s:33:\"force-delete-any KalenderAkademik\";s:1:\"c\";s:3:\"web\";}i:72;a:3:{s:1:\"a\";i:73;s:1:\"b\";s:33:\"force-delete-any KalenderAkademik\";s:1:\"c\";s:3:\"api\";}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:13:\"view-any Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:74;a:3:{s:1:\"a\";i:75;s:1:\"b\";s:13:\"view-any Page\";s:1:\"c\";s:3:\"api\";}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:9:\"view Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:76;a:3:{s:1:\"a\";i:77;s:1:\"b\";s:9:\"view Page\";s:1:\"c\";s:3:\"api\";}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:11:\"create Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:78;a:3:{s:1:\"a\";i:79;s:1:\"b\";s:11:\"create Page\";s:1:\"c\";s:3:\"api\";}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:11:\"update Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:80;a:3:{s:1:\"a\";i:81;s:1:\"b\";s:11:\"update Page\";s:1:\"c\";s:3:\"api\";}i:81;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:11:\"delete Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:82;a:3:{s:1:\"a\";i:83;s:1:\"b\";s:11:\"delete Page\";s:1:\"c\";s:3:\"api\";}i:83;a:3:{s:1:\"a\";i:84;s:1:\"b\";s:15:\"delete-any Page\";s:1:\"c\";s:3:\"web\";}i:84;a:3:{s:1:\"a\";i:85;s:1:\"b\";s:15:\"delete-any Page\";s:1:\"c\";s:3:\"api\";}i:85;a:3:{s:1:\"a\";i:86;s:1:\"b\";s:14:\"replicate Page\";s:1:\"c\";s:3:\"web\";}i:86;a:3:{s:1:\"a\";i:87;s:1:\"b\";s:14:\"replicate Page\";s:1:\"c\";s:3:\"api\";}i:87;a:3:{s:1:\"a\";i:88;s:1:\"b\";s:12:\"restore Page\";s:1:\"c\";s:3:\"web\";}i:88;a:3:{s:1:\"a\";i:89;s:1:\"b\";s:12:\"restore Page\";s:1:\"c\";s:3:\"api\";}i:89;a:3:{s:1:\"a\";i:90;s:1:\"b\";s:16:\"restore-any Page\";s:1:\"c\";s:3:\"web\";}i:90;a:3:{s:1:\"a\";i:91;s:1:\"b\";s:16:\"restore-any Page\";s:1:\"c\";s:3:\"api\";}i:91;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:12:\"reorder Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:92;a:3:{s:1:\"a\";i:93;s:1:\"b\";s:12:\"reorder Page\";s:1:\"c\";s:3:\"api\";}i:93;a:3:{s:1:\"a\";i:94;s:1:\"b\";s:17:\"force-delete Page\";s:1:\"c\";s:3:\"web\";}i:94;a:3:{s:1:\"a\";i:95;s:1:\"b\";s:17:\"force-delete Page\";s:1:\"c\";s:3:\"api\";}i:95;a:3:{s:1:\"a\";i:96;s:1:\"b\";s:21:\"force-delete-any Page\";s:1:\"c\";s:3:\"web\";}i:96;a:3:{s:1:\"a\";i:97;s:1:\"b\";s:21:\"force-delete-any Page\";s:1:\"c\";s:3:\"api\";}i:97;a:4:{s:1:\"a\";i:98;s:1:\"b\";s:13:\"view-any Post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:98;a:3:{s:1:\"a\";i:99;s:1:\"b\";s:13:\"view-any Post\";s:1:\"c\";s:3:\"api\";}i:99;a:4:{s:1:\"a\";i:100;s:1:\"b\";s:9:\"view Post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:100;a:3:{s:1:\"a\";i:101;s:1:\"b\";s:9:\"view Post\";s:1:\"c\";s:3:\"api\";}i:101;a:4:{s:1:\"a\";i:102;s:1:\"b\";s:11:\"create Post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:102;a:3:{s:1:\"a\";i:103;s:1:\"b\";s:11:\"create Post\";s:1:\"c\";s:3:\"api\";}i:103;a:4:{s:1:\"a\";i:104;s:1:\"b\";s:11:\"update Post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:104;a:3:{s:1:\"a\";i:105;s:1:\"b\";s:11:\"update Post\";s:1:\"c\";s:3:\"api\";}i:105;a:4:{s:1:\"a\";i:106;s:1:\"b\";s:11:\"delete Post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:106;a:3:{s:1:\"a\";i:107;s:1:\"b\";s:11:\"delete Post\";s:1:\"c\";s:3:\"api\";}i:107;a:4:{s:1:\"a\";i:108;s:1:\"b\";s:15:\"delete-any Post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:108;a:3:{s:1:\"a\";i:109;s:1:\"b\";s:15:\"delete-any Post\";s:1:\"c\";s:3:\"api\";}i:109;a:3:{s:1:\"a\";i:110;s:1:\"b\";s:14:\"replicate Post\";s:1:\"c\";s:3:\"web\";}i:110;a:3:{s:1:\"a\";i:111;s:1:\"b\";s:14:\"replicate Post\";s:1:\"c\";s:3:\"api\";}i:111;a:3:{s:1:\"a\";i:112;s:1:\"b\";s:12:\"restore Post\";s:1:\"c\";s:3:\"web\";}i:112;a:3:{s:1:\"a\";i:113;s:1:\"b\";s:12:\"restore Post\";s:1:\"c\";s:3:\"api\";}i:113;a:3:{s:1:\"a\";i:114;s:1:\"b\";s:16:\"restore-any Post\";s:1:\"c\";s:3:\"web\";}i:114;a:3:{s:1:\"a\";i:115;s:1:\"b\";s:16:\"restore-any Post\";s:1:\"c\";s:3:\"api\";}i:115;a:3:{s:1:\"a\";i:116;s:1:\"b\";s:12:\"reorder Post\";s:1:\"c\";s:3:\"web\";}i:116;a:3:{s:1:\"a\";i:117;s:1:\"b\";s:12:\"reorder Post\";s:1:\"c\";s:3:\"api\";}i:117;a:4:{s:1:\"a\";i:118;s:1:\"b\";s:17:\"force-delete Post\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:118;a:3:{s:1:\"a\";i:119;s:1:\"b\";s:17:\"force-delete Post\";s:1:\"c\";s:3:\"api\";}i:119;a:3:{s:1:\"a\";i:120;s:1:\"b\";s:21:\"force-delete-any Post\";s:1:\"c\";s:3:\"web\";}i:120;a:3:{s:1:\"a\";i:121;s:1:\"b\";s:21:\"force-delete-any Post\";s:1:\"c\";s:3:\"api\";}i:121;a:4:{s:1:\"a\";i:122;s:1:\"b\";s:21:\"view-any PostCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:122;a:3:{s:1:\"a\";i:123;s:1:\"b\";s:21:\"view-any PostCategory\";s:1:\"c\";s:3:\"api\";}i:123;a:4:{s:1:\"a\";i:124;s:1:\"b\";s:17:\"view PostCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:124;a:3:{s:1:\"a\";i:125;s:1:\"b\";s:17:\"view PostCategory\";s:1:\"c\";s:3:\"api\";}i:125;a:4:{s:1:\"a\";i:126;s:1:\"b\";s:19:\"create PostCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:126;a:3:{s:1:\"a\";i:127;s:1:\"b\";s:19:\"create PostCategory\";s:1:\"c\";s:3:\"api\";}i:127;a:3:{s:1:\"a\";i:128;s:1:\"b\";s:19:\"update PostCategory\";s:1:\"c\";s:3:\"web\";}i:128;a:3:{s:1:\"a\";i:129;s:1:\"b\";s:19:\"update PostCategory\";s:1:\"c\";s:3:\"api\";}i:129;a:4:{s:1:\"a\";i:130;s:1:\"b\";s:19:\"delete PostCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:130;a:3:{s:1:\"a\";i:131;s:1:\"b\";s:19:\"delete PostCategory\";s:1:\"c\";s:3:\"api\";}i:131;a:3:{s:1:\"a\";i:132;s:1:\"b\";s:23:\"delete-any PostCategory\";s:1:\"c\";s:3:\"web\";}i:132;a:3:{s:1:\"a\";i:133;s:1:\"b\";s:23:\"delete-any PostCategory\";s:1:\"c\";s:3:\"api\";}i:133;a:3:{s:1:\"a\";i:134;s:1:\"b\";s:22:\"replicate PostCategory\";s:1:\"c\";s:3:\"web\";}i:134;a:3:{s:1:\"a\";i:135;s:1:\"b\";s:22:\"replicate PostCategory\";s:1:\"c\";s:3:\"api\";}i:135;a:3:{s:1:\"a\";i:136;s:1:\"b\";s:20:\"restore PostCategory\";s:1:\"c\";s:3:\"web\";}i:136;a:3:{s:1:\"a\";i:137;s:1:\"b\";s:20:\"restore PostCategory\";s:1:\"c\";s:3:\"api\";}i:137;a:3:{s:1:\"a\";i:138;s:1:\"b\";s:24:\"restore-any PostCategory\";s:1:\"c\";s:3:\"web\";}i:138;a:3:{s:1:\"a\";i:139;s:1:\"b\";s:24:\"restore-any PostCategory\";s:1:\"c\";s:3:\"api\";}i:139;a:3:{s:1:\"a\";i:140;s:1:\"b\";s:20:\"reorder PostCategory\";s:1:\"c\";s:3:\"web\";}i:140;a:3:{s:1:\"a\";i:141;s:1:\"b\";s:20:\"reorder PostCategory\";s:1:\"c\";s:3:\"api\";}i:141;a:3:{s:1:\"a\";i:142;s:1:\"b\";s:25:\"force-delete PostCategory\";s:1:\"c\";s:3:\"web\";}i:142;a:3:{s:1:\"a\";i:143;s:1:\"b\";s:25:\"force-delete PostCategory\";s:1:\"c\";s:3:\"api\";}i:143;a:3:{s:1:\"a\";i:144;s:1:\"b\";s:29:\"force-delete-any PostCategory\";s:1:\"c\";s:3:\"web\";}i:144;a:3:{s:1:\"a\";i:145;s:1:\"b\";s:29:\"force-delete-any PostCategory\";s:1:\"c\";s:3:\"api\";}i:145;a:4:{s:1:\"a\";i:146;s:1:\"b\";s:20:\"view-any TahunAjaran\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:146;a:3:{s:1:\"a\";i:147;s:1:\"b\";s:20:\"view-any TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:147;a:4:{s:1:\"a\";i:148;s:1:\"b\";s:16:\"view TahunAjaran\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:148;a:3:{s:1:\"a\";i:149;s:1:\"b\";s:16:\"view TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:149;a:4:{s:1:\"a\";i:150;s:1:\"b\";s:18:\"create TahunAjaran\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:150;a:3:{s:1:\"a\";i:151;s:1:\"b\";s:18:\"create TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:151;a:3:{s:1:\"a\";i:152;s:1:\"b\";s:18:\"update TahunAjaran\";s:1:\"c\";s:3:\"web\";}i:152;a:3:{s:1:\"a\";i:153;s:1:\"b\";s:18:\"update TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:153;a:4:{s:1:\"a\";i:154;s:1:\"b\";s:18:\"delete TahunAjaran\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:154;a:3:{s:1:\"a\";i:155;s:1:\"b\";s:18:\"delete TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:155;a:3:{s:1:\"a\";i:156;s:1:\"b\";s:22:\"delete-any TahunAjaran\";s:1:\"c\";s:3:\"web\";}i:156;a:3:{s:1:\"a\";i:157;s:1:\"b\";s:22:\"delete-any TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:157;a:3:{s:1:\"a\";i:158;s:1:\"b\";s:21:\"replicate TahunAjaran\";s:1:\"c\";s:3:\"web\";}i:158;a:3:{s:1:\"a\";i:159;s:1:\"b\";s:21:\"replicate TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:159;a:3:{s:1:\"a\";i:160;s:1:\"b\";s:19:\"restore TahunAjaran\";s:1:\"c\";s:3:\"web\";}i:160;a:3:{s:1:\"a\";i:161;s:1:\"b\";s:19:\"restore TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:161;a:3:{s:1:\"a\";i:162;s:1:\"b\";s:23:\"restore-any TahunAjaran\";s:1:\"c\";s:3:\"web\";}i:162;a:3:{s:1:\"a\";i:163;s:1:\"b\";s:23:\"restore-any TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:163;a:3:{s:1:\"a\";i:164;s:1:\"b\";s:19:\"reorder TahunAjaran\";s:1:\"c\";s:3:\"web\";}i:164;a:3:{s:1:\"a\";i:165;s:1:\"b\";s:19:\"reorder TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:165;a:3:{s:1:\"a\";i:166;s:1:\"b\";s:24:\"force-delete TahunAjaran\";s:1:\"c\";s:3:\"web\";}i:166;a:3:{s:1:\"a\";i:167;s:1:\"b\";s:24:\"force-delete TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:167;a:3:{s:1:\"a\";i:168;s:1:\"b\";s:28:\"force-delete-any TahunAjaran\";s:1:\"c\";s:3:\"web\";}i:168;a:3:{s:1:\"a\";i:169;s:1:\"b\";s:28:\"force-delete-any TahunAjaran\";s:1:\"c\";s:3:\"api\";}i:169;a:4:{s:1:\"a\";i:170;s:1:\"b\";s:13:\"view-any User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:170;a:3:{s:1:\"a\";i:171;s:1:\"b\";s:13:\"view-any User\";s:1:\"c\";s:3:\"api\";}i:171;a:4:{s:1:\"a\";i:172;s:1:\"b\";s:9:\"view User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:172;a:3:{s:1:\"a\";i:173;s:1:\"b\";s:9:\"view User\";s:1:\"c\";s:3:\"api\";}i:173;a:4:{s:1:\"a\";i:174;s:1:\"b\";s:11:\"create User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:174;a:4:{s:1:\"a\";i:175;s:1:\"b\";s:11:\"create User\";s:1:\"c\";s:3:\"api\";s:1:\"r\";a:1:{i:0;i:1;}}i:175;a:4:{s:1:\"a\";i:176;s:1:\"b\";s:11:\"update User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:176;a:3:{s:1:\"a\";i:177;s:1:\"b\";s:11:\"update User\";s:1:\"c\";s:3:\"api\";}i:177;a:4:{s:1:\"a\";i:178;s:1:\"b\";s:11:\"delete User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:178;a:3:{s:1:\"a\";i:179;s:1:\"b\";s:11:\"delete User\";s:1:\"c\";s:3:\"api\";}i:179;a:4:{s:1:\"a\";i:180;s:1:\"b\";s:15:\"delete-any User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:180;a:3:{s:1:\"a\";i:181;s:1:\"b\";s:15:\"delete-any User\";s:1:\"c\";s:3:\"api\";}i:181;a:3:{s:1:\"a\";i:182;s:1:\"b\";s:14:\"replicate User\";s:1:\"c\";s:3:\"web\";}i:182;a:3:{s:1:\"a\";i:183;s:1:\"b\";s:14:\"replicate User\";s:1:\"c\";s:3:\"api\";}i:183;a:3:{s:1:\"a\";i:184;s:1:\"b\";s:12:\"restore User\";s:1:\"c\";s:3:\"web\";}i:184;a:3:{s:1:\"a\";i:185;s:1:\"b\";s:12:\"restore User\";s:1:\"c\";s:3:\"api\";}i:185;a:3:{s:1:\"a\";i:186;s:1:\"b\";s:16:\"restore-any User\";s:1:\"c\";s:3:\"web\";}i:186;a:3:{s:1:\"a\";i:187;s:1:\"b\";s:16:\"restore-any User\";s:1:\"c\";s:3:\"api\";}i:187;a:3:{s:1:\"a\";i:188;s:1:\"b\";s:12:\"reorder User\";s:1:\"c\";s:3:\"web\";}i:188;a:3:{s:1:\"a\";i:189;s:1:\"b\";s:12:\"reorder User\";s:1:\"c\";s:3:\"api\";}i:189;a:4:{s:1:\"a\";i:190;s:1:\"b\";s:17:\"force-delete User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:190;a:3:{s:1:\"a\";i:191;s:1:\"b\";s:17:\"force-delete User\";s:1:\"c\";s:3:\"api\";}i:191;a:4:{s:1:\"a\";i:192;s:1:\"b\";s:21:\"force-delete-any User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:192;a:3:{s:1:\"a\";i:193;s:1:\"b\";s:21:\"force-delete-any User\";s:1:\"c\";s:3:\"api\";}i:193;a:4:{s:1:\"a\";i:194;s:1:\"b\";s:15:\"view Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:194;a:4:{s:1:\"a\";i:195;s:1:\"b\";s:19:\"view-any Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:195;a:3:{s:1:\"a\";i:196;s:1:\"b\";s:19:\"view-any Permission\";s:1:\"c\";s:3:\"api\";}i:196;a:4:{s:1:\"a\";i:197;s:1:\"b\";s:17:\"create Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:197;a:3:{s:1:\"a\";i:198;s:1:\"b\";s:17:\"create Permission\";s:1:\"c\";s:3:\"api\";}i:198;a:4:{s:1:\"a\";i:199;s:1:\"b\";s:17:\"update Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:199;a:3:{s:1:\"a\";i:200;s:1:\"b\";s:17:\"update Permission\";s:1:\"c\";s:3:\"api\";}i:200;a:4:{s:1:\"a\";i:201;s:1:\"b\";s:17:\"delete Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:201;a:3:{s:1:\"a\";i:202;s:1:\"b\";s:17:\"delete Permission\";s:1:\"c\";s:3:\"api\";}i:202;a:4:{s:1:\"a\";i:203;s:1:\"b\";s:21:\"delete-any Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:203;a:3:{s:1:\"a\";i:204;s:1:\"b\";s:21:\"delete-any Permission\";s:1:\"c\";s:3:\"api\";}i:204;a:4:{s:1:\"a\";i:205;s:1:\"b\";s:23:\"force-delete Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:205;a:4:{s:1:\"a\";i:206;s:1:\"b\";s:27:\"force-delete-any Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:206;a:3:{s:1:\"a\";i:208;s:1:\"b\";s:23:\"force-delete Permission\";s:1:\"c\";s:3:\"api\";}i:207;a:3:{s:1:\"a\";i:209;s:1:\"b\";s:27:\"force-delete-any Permission\";s:1:\"c\";s:3:\"api\";}i:208;a:4:{s:1:\"a\";i:210;s:1:\"b\";s:18:\"reorder Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:209;a:3:{s:1:\"a\";i:211;s:1:\"b\";s:18:\"reorder Permission\";s:1:\"c\";s:3:\"api\";}i:210;a:4:{s:1:\"a\";i:212;s:1:\"b\";s:20:\"replicate Permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:211;a:3:{s:1:\"a\";i:213;s:1:\"b\";s:20:\"replicate Permission\";s:1:\"c\";s:3:\"api\";}i:212;a:4:{s:1:\"a\";i:214;s:1:\"b\";s:9:\"view Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:213;a:3:{s:1:\"a\";i:215;s:1:\"b\";s:9:\"view Role\";s:1:\"c\";s:3:\"api\";}i:214;a:4:{s:1:\"a\";i:216;s:1:\"b\";s:13:\"view-any Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:215;a:3:{s:1:\"a\";i:217;s:1:\"b\";s:13:\"view-any Role\";s:1:\"c\";s:3:\"api\";}i:216;a:4:{s:1:\"a\";i:218;s:1:\"b\";s:11:\"create Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:217;a:3:{s:1:\"a\";i:219;s:1:\"b\";s:11:\"create Role\";s:1:\"c\";s:3:\"api\";}i:218;a:4:{s:1:\"a\";i:220;s:1:\"b\";s:11:\"update Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:219;a:3:{s:1:\"a\";i:221;s:1:\"b\";s:11:\"update Role\";s:1:\"c\";s:3:\"api\";}i:220;a:4:{s:1:\"a\";i:222;s:1:\"b\";s:11:\"delete Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:221;a:3:{s:1:\"a\";i:223;s:1:\"b\";s:11:\"delete Role\";s:1:\"c\";s:3:\"api\";}i:222;a:4:{s:1:\"a\";i:224;s:1:\"b\";s:15:\"delete-any Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:223;a:3:{s:1:\"a\";i:225;s:1:\"b\";s:15:\"delete-any Role\";s:1:\"c\";s:3:\"api\";}i:224;a:4:{s:1:\"a\";i:226;s:1:\"b\";s:14:\"replicate Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:225;a:3:{s:1:\"a\";i:227;s:1:\"b\";s:14:\"replicate Role\";s:1:\"c\";s:3:\"api\";}i:226;a:4:{s:1:\"a\";i:228;s:1:\"b\";s:12:\"restore Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:227;a:3:{s:1:\"a\";i:229;s:1:\"b\";s:12:\"restore Role\";s:1:\"c\";s:3:\"api\";}i:228;a:4:{s:1:\"a\";i:230;s:1:\"b\";s:16:\"restore-any Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:229;a:3:{s:1:\"a\";i:231;s:1:\"b\";s:16:\"restore-any Role\";s:1:\"c\";s:3:\"api\";}i:230;a:4:{s:1:\"a\";i:232;s:1:\"b\";s:12:\"reorder Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:231;a:3:{s:1:\"a\";i:233;s:1:\"b\";s:12:\"reorder Role\";s:1:\"c\";s:3:\"api\";}i:232;a:4:{s:1:\"a\";i:234;s:1:\"b\";s:17:\"force-delete Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:233;a:3:{s:1:\"a\";i:235;s:1:\"b\";s:17:\"force-delete Role\";s:1:\"c\";s:3:\"api\";}i:234;a:4:{s:1:\"a\";i:236;s:1:\"b\";s:21:\"force-delete-any Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:235;a:3:{s:1:\"a\";i:237;s:1:\"b\";s:21:\"force-delete-any Role\";s:1:\"c\";s:3:\"api\";}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:5:\"dosen\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:5:\"Staff\";s:1:\"c\";s:3:\"web\";}}}', 1750426221);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author_name`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'rayy', 'admin@example.com', 'dasdadasdasd', '2025-06-06 01:14:36', '2025-06-06 01:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint UNSIGNED NOT NULL,
  `page_id` bigint UNSIGNED NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` json DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `published_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views_count` bigint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `page_id`, `sub_title`, `contents`, `is_active`, `published_at`, `created_at`, `updated_at`, `views_count`) VALUES
(1, 1, 'Misi', '[{\"data\": {\"columns\": [{\"blocks\": [{\"data\": {\"text\": \"Memiliki kompetensi dalam bidang sistem informasi terutama pada analisa bisnis proses perancangan dan pengembangan Sistem Informasi dan Teknologi Informasi\"}, \"type\": \"text\"}]}, {\"blocks\": [{\"data\": {\"text\": \"Menyelenggarakan pendidikan yang berkualitas untuk menghasilkan lulusan Program Studi Sistem Informasi yang mampu bekerjasama dalam tim, komunikator yang efektif serta memiliki keinginan pembelajaran sepanjang hidup yang berlandaskan etika dan moral.\"}, \"type\": \"text\"}]}, {\"blocks\": [{\"data\": {\"text\": \"Berperan aktif dalam kegiatan penelitian dan pengabdian masyarakat di bidang keilmuan sistem informasi yang memberikan kontribusi kepada masyarakat.\"}, \"type\": \"text\"}]}, {\"blocks\": [{\"data\": {\"text\": \"Berperan aktif dalam kemitraan dalam mendukung kegiatan tridarma dan memberikan layanan akademik dan non akademik baik pada tingkat nasional maupun internasional.\"}, \"type\": \"text\"}]}], \"column_count\": \"4\"}, \"type\": \"columns\"}]', 1, '2025-05-23 12:00:37', '2025-05-23 07:58:59', '2025-06-11 02:17:05', 1),
(2, 1, 'Visi', '[{\"data\": {\"text\": \"<p>Menjadi Program Studi Sistem Informasi unggul di Indonesia di bidang sistem informasi manufaktur dan analisis sistem pada tahun 2027</p>\"}, \"type\": \"text\"}]', 1, '2025-05-23 11:27:13', '2025-05-23 21:43:45', '2025-06-11 02:17:05', 1),
(6, 3, 'Sejarah Program Studi', '[{\"data\": {\"text\": \"<p>&nbsp; &nbsp; Program Studi Sistem Informasi merupakan salah satu program studi yang berada dalam naungan Fakultas Teknik Universitas Darma Persada. Program Studi Sistem Informasi diselenggarakan mulai pada tahun 2003, berdasarkan Surat Keputusan Direktur Jendral Pendidikan Tinggi Nomor : <strong>1178/D/T/2003</strong>, tanggal 10 Juni 2003. Sesuai dengan perjalanan waktu pada tahun 2010 memperoleh status terakreditasi dengan peringkat akreditasi C sebagaimana dinyatakan dalam Surat Keputusan Ketua BAN-PT Nomor : <strong>025/BAN-PT/Ak-XIII/SI/XI/2010</strong> dengan sertifikat akreditasi program studi sarjana berlaku 5 (lima) tahun, sejak tanggal 12 Nopember 2010 sampai dengan 12 Nopember 2015.<br>&nbsp; &nbsp; &nbsp;Pada Tahun 2016 dilakukan re-akreditasi dengan peringkat akreditasi B sebagaimana dinyatakan dalam Surat Keputusan Ketua BAN-PT Nomor : 0332/SK/BAN-PT/Akred/S/IV/2016 dengan sertifikat akreditasi program studi sarjana berlaku 5 (lima) tahun, sejak tanggal 28 April 2016 sampai dengan 28 April 2021. Pada tahun 2021 dilakukan re-akreditasi dengan peringkat akreditasi B sebagaimana dinyatakan dalam Keputusan BAN-PT No. 2547/SK/Ak-PPJ/S/IV/2021, tanggal 28 April 2021 Tentang akreditasi program studi Sistem Informasi pada program sarjana universitas Darma Persada, kota Jakarta Timur dengan sertifikat akreditasi program studi sarjana berlaku 5 (lima) tahun, sejak tanggal 29 April 2021 sampai dengan 29 April 2026.</p>\"}, \"type\": \"text\"}]', 1, '2025-05-26 15:45:23', '2025-05-26 01:45:42', '2025-06-11 01:56:00', 2),
(7, 7, 'Keunggulan', '[{\"data\": {\"text\": \"<p>Program Studi Sistem Informasi bertujuan menghasilkan sarjana yang mampu : meningkatkan kinerja suatu organisasi dalam hal produktivitas, kualitas, efektivitas, dan efisiensi, menerjemakan kebutuhan manajemen ke dalam aplikasi sistem informasi, dan mengelola Departemen Sistern Informasi suatu organisasi/perusahaan.</p>\"}, \"type\": \"text\"}]', 1, '2025-05-27 19:16:09', '2025-05-27 05:16:41', '2025-06-11 02:17:21', 1),
(8, 1, 'Tujuan', '[{\"data\": {\"text\": \"<ol><li>Menghasilkan lulusan yang mampu berkompetensi dalam bidang sistem informasi terutama pada analisa bisnis proses, perancangan sistem informasi dan teknologi informasi</li><li>Menghasilkan sistem pembelajaran kreatif, inovatif, berdaya saing, profesional dan tanggung jawab pada bidang Sistem Informasi.</li><li>Menjadi program studi yang berpotensi menghasilkan riset yang dapat mendukung kegiatan pengabdian kepada masyarakat di bidang sistem informasi.</li><li>Memperluas kemitraan untuk meningkatkan kuantitas dan kualitas kegiatan Tridharma Perguruan Tinggi baik akademik dan non akademik</li></ol>\"}, \"type\": \"text\"}]', 1, '2025-05-27 19:37:15', '2025-05-27 05:42:19', '2025-06-11 02:17:05', 1),
(9, 16, 'Kunjungan Industry PT. Nestle Karawang Factory', '[{\"data\": {\"src\": [\"images/contents/01JWABDDE96RCB6114G40KPGWT.jpg\", \"images/contents/01JWACF9QV0EEVJCPC8DP4V6JK.png\", \"images/contents/01JWACF9R3Y2A04K76DAV2DKJT.png\"]}, \"type\": \"image\"}, {\"data\": {\"text\": \"<p>&nbsp; &nbsp; &nbsp;Pada hari Rabu, 21 November 2021, mahasiswa Program Studi Sistem Informasi melakukan kunjungan industri ke <strong>PT Nestlé Indonesia, Karawang Factory</strong>, yang terletak di kawasan industri Karawang International Industrial City (KIIC), Jawa Barat. Kegiatan ini merupakan bagian dari program pembelajaran di luar kampus (praktik lapangan) yang bertujuan untuk memperluas wawasan mahasiswa mengenai implementasi teknologi informasi dalam dunia industri, khususnya di sektor manufaktur dan pengolahan makanan dan minuman.</p><p>&nbsp; &nbsp; &nbsp;Rombongan mahasiswa disambut dengan hangat oleh tim Corporate Affairs dan tim IT PT Nestlé Karawang. Acara diawali dengan sesi presentasi mengenai profil perusahaan, sejarah Nestlé di Indonesia, serta proses produksi yang dilakukan di pabrik Karawang. Mahasiswa juga diperkenalkan pada sistem otomasi dan digitalisasi yang diterapkan dalam lini produksi, termasuk penggunaan sistem Enterprise Resource Planning (ERP), manajemen rantai pasok berbasis IT, dan kontrol mutu berbantuan teknologi.</p><p>&nbsp; &nbsp; &nbsp;Salah satu poin menarik dari kunjungan ini adalah bagaimana PT Nestlé menerapkan prinsip Industri 4.0 dalam operasionalnya, seperti integrasi Internet of Things (IoT) untuk pemantauan mesin produksi secara real-time, serta pemanfaatan data analytics dalam pengambilan keputusan. Mahasiswa juga berkesempatan untuk melakukan tur ke area produksi dengan protokol keamanan dan kebersihan yang ketat, sehingga dapat melihat langsung bagaimana sistem informasi mendukung efisiensi dan produktivitas di lapangan.</p><p>&nbsp; &nbsp; &nbsp;Kegiatan ini memberikan pengalaman berharga bagi mahasiswa dalam memahami keterkaitan antara ilmu yang dipelajari di bangku kuliah dengan penerapannya di dunia industri nyata. Selain itu, kunjungan ini juga mendorong motivasi mahasiswa untuk terus mengembangkan kemampuan di bidang teknologi informasi, khususnya yang berkaitan dengan sistem industri dan manufaktur modern.</p><p>&nbsp; &nbsp; &nbsp;Dengan berakhirnya kunjungan ini, diharapkan mahasiswa memperoleh pemahaman yang lebih konkret mengenai peran strategis sistem informasi dalam mendukung proses bisnis perusahaan berskala global seperti Nestlé, serta memperkuat kesiapan mereka untuk menghadapi dunia kerja setelah lulus nanti.</p>\"}, \"type\": \"text\"}]', 1, '2025-05-28 09:24:57', '2025-05-27 19:26:47', '2025-06-11 02:10:24', 2),
(10, 16, 'Kunjungan Industri PT. Omron Manufacturing Of Indonesia', '[{\"data\": {\"src\": [\"images/contents/01JWAFVBMAQW5BAWP4ZV56FN8F.png\", \"images/contents/01JWAFVBMK4MFYK5P5F7CGA0F2.png\"]}, \"type\": \"image\"}, {\"data\": {\"text\": \"<p>&nbsp; &nbsp; &nbsp;Pada hari rabu, 22 Maret 2023, mahasiswa Program Studi Sistem Informasi melaksanakan kegiatan kunjungan industri ke <strong>PT. Omron Manufacturing of Indonesia</strong> yang berlokasi di Kawasan Industri EJIP, Cikarang, Bekasi, Jawa Barat. Kegiatan ini merupakan bagian dari agenda akademik yang bertujuan untuk memberikan wawasan langsung kepada mahasiswa mengenai penerapan sistem informasi dalam proses industri manufaktur berteknologi tinggi.</p><p>&nbsp; &nbsp; &nbsp;Rombongan mahasiswa disambut oleh tim Public Relations dan perwakilan dari Divisi IT PT Omron. Kegiatan dimulai dengan sesi pemaparan profil perusahaan, sejarah dan filosofi bisnis Omron, serta cakupan produk yang diproduksi, seperti komponen otomasi industri, sensor, dan kontroler. Mahasiswa juga diberi penjelasan mengenai proses produksi di pabrik, yang telah menerapkan prinsip <em>smart manufacturing</em> berbasis teknologi informasi dan otomasi.</p><p>&nbsp; &nbsp; &nbsp;Dalam kunjungan ini, mahasiswa diajak memahami bagaimana PT Omron mengintegrasikan <strong>sistem informasi manufaktur (Manufacturing Execution System / MES)</strong>, <strong>Enterprise Resource Planning (ERP)</strong>, serta <strong>Internet of Things (IoT)</strong> untuk meningkatkan efisiensi dan akurasi dalam proses produksi. Tak hanya itu, para mahasiswa juga dikenalkan pada sistem pemantauan produksi real-time dan data analytics yang digunakan untuk pengambilan keputusan operasional secara cepat dan tepat.</p><p>&nbsp; &nbsp; &nbsp;Mahasiswa kemudian berkesempatan untuk melihat langsung area produksi dengan pengawasan ketat sesuai standar keamanan industri. Mereka menyaksikan bagaimana teknologi dan sistem informasi mendukung operasional yang presisi, efisien, dan ramah lingkungan di PT Omron.</p><p>&nbsp; &nbsp; &nbsp;Kunjungan ini memberikan pengalaman langsung kepada mahasiswa untuk melihat bagaimana teori yang dipelajari di bangku kuliah, seperti sistem basis data, integrasi sistem, dan manajemen proyek TI, diimplementasikan dalam konteks industri global. Selain itu, kegiatan ini juga menjadi inspirasi dan motivasi bagi mahasiswa untuk terus mengasah kompetensi di bidang teknologi informasi, khususnya dalam dunia industri manufaktur dan otomasi.</p><p>&nbsp; &nbsp; &nbsp;Dengan selesainya kunjungan industri ini, diharapkan mahasiswa dapat membawa pulang pemahaman yang lebih mendalam mengenai peran strategis sistem informasi dalam menciptakan efisiensi, kualitas, dan daya saing industri di era transformasi digital.</p>\"}, \"type\": \"text\"}]', 1, '2025-05-28 10:41:00', '2025-05-27 20:44:19', '2025-06-11 02:10:24', 2),
(11, 16, 'Kunjungan Industri PT. Toyota Motor Manufacturing Indonesia ', '[{\"data\": {\"src\": [\"images/contents/01JWAHVTCJN6GPHH9WB811HD40.png\", \"images/contents/01JWAHVTCZB966BJRB52Z25J18.png\", \"images/contents/01JWAHVTDFYPKR1001SADDVPE5.png\"]}, \"type\": \"image\"}, {\"data\": {\"text\": \"<p>&nbsp; &nbsp; &nbsp;Pada hari Rabu, 28 Februari 2024, mahasiswa Program Studi Sistem Informasi melaksanakan kunjungan industri ke <strong>PT. Toyota Motor Manufacturing Indonesia (TMMIN)</strong> yang berlokasi di Karawang, Jawa Barat. Kegiatan ini merupakan bagian dari program akademik yang bertujuan untuk memperkenalkan mahasiswa pada implementasi teknologi informasi dalam industri otomotif skala global.</p><p>&nbsp; &nbsp; &nbsp;Rombongan mahasiswa disambut dengan hangat oleh tim Corporate Affairs dan Divisi Information Technology PT TMMIN. Acara diawali dengan pemaparan mengenai sejarah Toyota di Indonesia, struktur organisasi, serta lini bisnis utama yang mencakup produksi kendaraan dan komponen untuk kebutuhan domestik dan ekspor. Mahasiswa juga diberikan penjelasan mengenai filosofi produksi Toyota yang terkenal, yaitu <strong>Toyota Production System (TPS)</strong>, yang menekankan pada prinsip efisiensi, kualitas, dan continuous improvement (<em>kaizen</em>).</p><p>&nbsp; &nbsp; &nbsp;Salah satu fokus kunjungan adalah pemanfaatan <strong>teknologi informasi dan sistem digital</strong> dalam mendukung operasional pabrik. Mahasiswa diperkenalkan pada berbagai sistem seperti <strong>Manufacturing Execution System (MES)</strong>, <strong>Enterprise Resource Planning (ERP)</strong>, serta penerapan <strong>Internet of Things (IoT)</strong> untuk monitoring mesin dan proses produksi secara real-time. Selain itu, mahasiswa juga diperlihatkan bagaimana data analitik dan sistem informasi berperan dalam pengambilan keputusan, pemeliharaan prediktif, serta pengendalian kualitas produk.</p><p>&nbsp; &nbsp; &nbsp;Tur ke area produksi dilakukan dengan protokol keamanan dan keselamatan kerja yang ketat. Dalam sesi ini, mahasiswa dapat menyaksikan secara langsung bagaimana proses perakitan kendaraan dilakukan dengan tingkat presisi tinggi, didukung oleh sistem otomasi dan robotik yang terintegrasi dengan sistem informasi yang canggih.</p><p>&nbsp; &nbsp; &nbsp;Kunjungan ini memberikan wawasan nyata kepada mahasiswa mengenai keterkaitan antara bidang sistem informasi dan industri manufaktur otomotif. Selain memperluas pemahaman teoritis, kegiatan ini juga menjadi sarana bagi mahasiswa untuk mengenal lebih jauh dunia kerja profesional, serta tantangan dan peluang yang ada di era transformasi digital industri 4.0.</p><p>&nbsp; &nbsp; &nbsp;Dengan berakhirnya kunjungan ini, diharapkan mahasiswa dapat mengembangkan semangat untuk terus belajar dan berinovasi, serta lebih siap dalam menghadapi dunia kerja di bidang teknologi informasi yang terus berkembang pesat, khususnya dalam konteks industri skala global seperti PT Toyota Motor Manufacturing Indonesia.</p>\"}, \"type\": \"text\"}]', 1, '2025-05-28 11:15:29', '2025-05-27 21:19:31', '2025-06-11 02:10:24', 2),
(12, 8, 'Akreditasi', '[{\"data\": {\"text\": \"<p>&nbsp; &nbsp; &nbsp;Pada tahun 2021 dilakukan re-akreditasi dengan peringkat akreditasi B sebagaimana dinyatakan dalam Surat Keputusan Ketua Ban-PT Nomor : <strong>2547/SK/BAN-PT/Ak-PPJ/S/IV/2021</strong> dengan sertifikat akreditasi program studi sarjana berlaku 5 (lima) tahun, sejak tanggal 29 April 2021 sampai dengan tanggal 29 April 2026.</p>\"}, \"type\": \"text\"}, {\"data\": {\"src\": [\"images/contents/01JWFDETCX35THZBJMBQ7B07MM.jpg\"]}, \"type\": \"image\"}]', 1, '2025-05-30 08:37:24', '2025-05-29 18:38:43', '2025-06-11 02:17:25', 3),
(13, 10, 'Beasiswa Hafidz Qur\'an', '[{\"data\": {\"src\": [\"images/contents/01JWFEFYJM69FMSSV1SYP0HTYB.jpg\"]}, \"type\": \"image\"}]', 1, '2025-05-30 08:55:39', '2025-05-29 18:56:48', '2025-05-29 18:56:48', 0),
(14, 10, 'Beasiswa Yamaoka Foundation', '[{\"data\": {\"src\": [\"images/contents/01JWFEJ1JVJ3SSGG2MZ03SERW9.jpg\"]}, \"type\": \"image\"}]', 1, '2025-05-30 08:57:17', '2025-05-29 18:57:57', '2025-05-29 18:57:57', 0),
(15, 11, 'Program JENESYS', '[{\"data\": {\"text\": \"<p>&nbsp; &nbsp; &nbsp;Program JENESYS (Jaringan Pertukaran pelajar dan pemuda Jepang-Asia Timur) adalah proyek yang diajukan oleh pemerintah Jepang dari sudut pandang memberikan landasan yang kuat untuk solidaritas yang kuat di Asia melalui pertukaran pemuda berskala besar.</p>\"}, \"type\": \"text\"}]', 1, '2025-05-30 08:59:29', '2025-05-29 18:59:39', '2025-05-29 18:59:54', 0),
(16, 11, 'Sakura Science Program', '[{\"data\": {\"text\": \"<p>&nbsp; &nbsp; &nbsp;<em>Sakura Science Program</em> atau juga dikenal dengan nama <em>Sakura Program Exchange in Science</em> merupakan suatu program pertukaran pelajar dan mahasiswa dari beberapa negara berkembang ke Jepang dengan tujuan memperkenalkan dan memberikan pengalaman terkait perkembangan ilmu dan teknologi di Jepang.</p>\"}, \"type\": \"text\"}]', 1, '2025-05-30 09:10:58', '2025-05-29 19:11:06', '2025-05-29 19:11:56', 0),
(23, 2, 'Daftar Dosen', '[{\"data\": {\"model\": \"App\\\\Models\\\\Dosen\", \"columns\": [\"image\", \"nama\", \"jabatan\", \"sertifikasi_dosen\", \"bidang_pengajaran\"], \"filters\": []}, \"type\": \"table\"}]', 1, '2025-05-31 14:53:36', '2025-05-31 00:54:32', '2025-06-11 02:14:36', 1),
(24, 6, 'Kalender Akademik 2024/2025', '[{\"data\": {\"model\": \"App\\\\Models\\\\KalenderAkademik\", \"columns\": [\"kegiatan\", \"tgl_mulai\", \"tgl_selesai\", \"keterangan\"], \"filters\": []}, \"type\": \"table\"}]', 1, '2025-05-31 15:01:54', '2025-05-31 01:02:13', '2025-06-10 02:11:18', 1),
(25, 12, 'Prospek Karir', '[{\"data\": {\"text\": \"<p>Para lulusan dapat bekerja di berbagai instansi seperti System Analis, Project Manager, Database Analis, Supervisor Konsultan, Akademist Peneliti</p>\"}, \"type\": \"text\"}]', 1, '2025-06-01 10:10:22', '2025-05-31 20:10:33', '2025-05-31 20:10:49', 0),
(26, 18, 'Jadwal Kuliah', '[{\"data\": {\"text\": \"<p>Belum ada apa\\\"</p>\"}, \"type\": \"text\"}]', 1, '2025-06-01 10:14:57', '2025-05-31 20:15:13', '2025-05-31 20:15:30', 0),
(27, 19, 'Himpunan Mahasiswa', '[{\"data\": {\"src\": [\"images/contents/01JWMRE1SX3D3W1TS9BDHRQF68.jpg\"]}, \"type\": \"image\"}, {\"data\": {\"text\": \"<h3><strong>Sejarah Sistem Informasi</strong></h3><p><strong>HMSI adalah salah satu organisasi yang berada dibawah naungan Badan Eksekutif Mahasiswa Fakultas Teknik&nbsp; Universitas Darma Persada dirintis pada 8 Desember 2007. Sekretraiatan HMSI berada di Lantai 4 Fakultas Teknik.</strong></p>\"}, \"type\": \"text\"}]', 1, '2025-06-01 10:25:40', '2025-05-31 20:26:44', '2025-05-31 20:28:25', 0),
(28, 19, 'Struktur Organisasi HMSI', '[{\"data\": {\"src\": [\"images/contents/01JWMRT9RR4W25Y3V2PMQ0DSP8.png\"]}, \"type\": \"image\"}, {\"data\": {\"text\": \"<h2>Kegiatan HMSI</h2><h3>Kegiatan yang akan dijalankan</h3><ol><li>s</li><li>s</li><li>s</li></ol>\"}, \"type\": \"text\"}]', 1, '2025-06-01 10:31:12', '2025-05-31 20:33:25', '2025-05-31 20:36:14', 0),
(30, 5, 'Kalender Akademik 2023 / 2024', '[{\"data\": {\"model\": \"App\\\\Models\\\\KalenderAkademik\", \"columns\": [\"kegiatan\", \"tgl_mulai\", \"tgl_selesai\", \"keterangan\", \"semester\"], \"filters\": []}, \"type\": \"table\"}]', 1, '2025-06-01 11:48:30', '2025-05-31 21:49:02', '2025-06-11 02:14:43', 1),
(31, 25, 'Lowongan Kerja', '[{\"data\": {\"posts\": [\"1\"], \"category_id\": \"3\"}, \"type\": \"posts\"}]', 1, '2025-06-04 07:08:07', '2025-06-03 17:08:13', '2025-06-19 15:26:23', 2),
(32, 1, 'Strategi', '[{\"data\": {\"text\": \"<ol><li>Tercapainya kualitas lulusan yang mampu mengembangkan sistem informasi manufaktur berbasiskan teknologi informasi dalam dunia industri.</li><li>Tercapainya tepat waktu dan cepat diterima pada dunia kerja dengan karakter kreatif, inovatif, berdaya saing, profesional dan bertanggung jawab.</li><li>Meningkatnya hasil karya ilmiah di bidang sistem informasi baik tingkat nasional maupun internasional</li><li>Terciptanya kemitraan untuk meningkatkan kuantitas dan kualitas kegiatan Tridharma Perguruan Tinggi dan layanan yang berkualitas baik akademik dan non akademik.</li></ol>\"}, \"type\": \"text\"}]', 1, '2025-06-04 15:39:09', '2025-06-04 01:39:19', '2025-06-11 02:17:05', 1),
(33, 4, 'Kalender Akademik 2022 / 2023', '[{\"data\": {\"model\": \"App\\\\Models\\\\KalenderAkademik\", \"columns\": [\"kegiatan\", \"tgl_mulai\", \"tgl_selesai\", \"semester\", \"keterangan\"], \"filters\": []}, \"type\": \"table\"}]', 1, '2025-06-09 19:41:20', '2025-06-09 05:41:35', '2025-06-11 01:53:44', 4),
(35, 33, 'Data Skripsi', '[{\"data\": {\"limit\": \"5\", \"form_id\": \"40ecf8a2-7529-4054-a35a-581c7edd8861\"}, \"type\": \"form_submissions\"}]', 1, '2025-06-19 23:50:47', '2025-06-19 16:51:02', '2025-06-19 16:51:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikasi_dosen` enum('Belum Memiliki','Memiliki') COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_pengajaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `email`, `image`, `nama`, `jabatan`, `sertifikasi_dosen`, `bidang_pengajaran`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'Eka Yuni Astuty, S.Kom., M.Msi', 'Lektor', 'Memiliki', 'Manajemen SIstem Informasi', '2025-05-30 02:16:22', '2025-05-31 01:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint UNSIGNED NOT NULL,
  `form_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fields` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `form_id`, `title`, `slug`, `description`, `fields`, `password`, `is_public`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, '40ecf8a2-7529-4054-a35a-581c7edd8861', 'Pengumpulan Judul Skripsi Tahun Ajaran 2024 / 2025', 'pengumpulan-judul-skripsi-tahun-ajaran-2024-2025', 'sdfdsfsdf', '[{\"name\": \"nama\", \"type\": \"text\", \"label\": \"Nama Mahasiswa\", \"options\": {\"baf6ea91-104b-4667-b39c-0c5e7d33ebec\": {\"value\": null}}, \"required\": true}, {\"name\": \"judul_skripsi\", \"type\": \"text\", \"label\": \"Judul Skripsi\", \"options\": {\"fa2ea7ed-095f-4d28-a3c9-5e520f00f5ea\": {\"value\": null}}, \"required\": true}]', 'dasda', 1, '2025-06-19 21:47:30', '2025-06-20 21:48:44', '2025-06-19 07:51:47', '2025-06-19 15:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `form_submissions`
--

CREATE TABLE `form_submissions` (
  `id` bigint UNSIGNED NOT NULL,
  `form_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_submissions`
--

INSERT INTO `form_submissions` (`id`, `form_id`, `data`, `created_at`, `updated_at`) VALUES
(2, '40ecf8a2-7529-4054-a35a-581c7edd8861', '{\"nama\": \"Dhihya Rayyanda\", \"judul_skripsi\": \"Rancang Bangun Sistem Informasi Penagihan BPP\"}', '2025-06-19 15:17:20', '2025-06-19 15:17:20'),
(3, '40ecf8a2-7529-4054-a35a-581c7edd8861', '{\"nama\": \"Yafet Bram\", \"judul_skripsi\": \"Rancang Bangun Sistem Informasi Keuangan PT. APA\"}', '2025-06-19 15:23:49', '2025-06-19 15:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kalender_akademik`
--

CREATE TABLE `kalender_akademik` (
  `id` bigint UNSIGNED NOT NULL,
  `tahun_ajaran_id` bigint UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `semester` enum('Gasal','Genap') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kalender_akademik`
--

INSERT INTO `kalender_akademik` (`id`, `tahun_ajaran_id`, `slug`, `kegiatan`, `tgl_mulai`, `tgl_selesai`, `semester`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 1, 'kalender-akademik-2024-2025', 'Pengisian Jadwal Kuliah', '2024-07-01', '2024-09-01', 'Gasal', 'Pegnsisain', '2025-05-30 00:19:23', '2025-05-30 00:19:23'),
(3, 2, 'kalender-akademik-2023-2024', 'Jadwal Kuliah', '2023-07-01', '2023-09-25', 'Gasal', 'Pengisian Jadwal Kuliah ke SIAKAD online oleh Program Studi', '2025-05-30 00:20:25', '2025-06-04 19:46:25'),
(4, 1, 'kalender-akademik-2024-2025', 'dsdasdas', '2025-06-01', '2025-06-10', 'Gasal', 'sdasda', '2025-05-31 21:10:35', '2025-05-31 21:10:35'),
(5, 2, 'kalender-akademik-2023-2024', 'KRS', '2023-08-01', '2023-09-08', 'Gasal', 'Pengisian KRS Online Mahasiswa', '2025-06-04 19:47:24', '2025-06-04 19:47:24'),
(6, 2, 'kalender-akademik-2023-2024', 'Cuti', '2023-08-01', '2023-09-15', 'Gasal', 'Pengurusan Cuti Akademik', '2025-06-04 19:48:18', '2025-06-04 19:48:18'),
(7, 2, 'kalender-akademik-2023-2024', 'Proposal Abdimas', '2023-08-18', '2023-08-18', 'Gasal', 'Batas Akhir Pengajuan Proposal Penelitian & Abdimas', '2025-06-04 19:49:27', '2025-06-04 19:49:27'),
(8, 2, 'kalender-akademik-2023-2024', 'RPS', '2023-08-21', '2023-08-25', 'Gasal', 'Pengisian Rencana Pembelajaran Semester (RPS) ke SIAKAD Online oleh Program Studi', '2025-06-04 20:13:47', '2025-06-04 20:13:47'),
(9, 2, 'kalender-akademik-2023-2024', 'Registrasi', '2023-09-04', '2023-09-04', 'Gasal', 'Batas Akhir Registrasi Mahasiswa Baru', '2025-06-04 20:14:35', '2025-06-04 20:14:35'),
(10, 2, 'kalender-akademik-2023-2024', 'Orientasi Mahasiswa', '2023-09-04', '2023-09-07', 'Gasal', 'PKKMB', '2025-06-04 20:17:04', '2025-06-04 20:17:04'),
(11, 2, 'kalender-akademik-2023-2024', 'Pembayaran', '2023-09-07', '2023-09-07', 'Gasal', 'Batas Akhir Pembayaran BPP Pokok Ganjil 2023/2024', '2025-06-04 20:33:34', '2025-06-04 20:33:34'),
(12, 2, 'kalender-akademik-2023-2024', 'Perkuliahan', '2023-09-08', '2023-09-08', 'Gasal', 'Kuliah Perdana dan Pelantikan Mahasiswa Baru', '2025-06-04 20:34:49', '2025-06-04 20:34:49'),
(13, 2, 'kalender-akademik-2023-2024', 'KRS', '2023-09-11', '2023-09-15', 'Gasal', 'Perbaikan KRS', '2025-06-05 01:32:51', '2025-06-05 20:29:58'),
(14, 2, 'kalender-akademik-2023-2024', 'Perkuliahan', '2023-09-11', '2023-10-28', 'Gasal', 'Kuliah Pra UTS (7 Minggu)', '2025-06-05 01:34:03', '2025-06-05 20:31:18'),
(15, 2, 'kalender-akademik-2023-2024', 'Lain-lain', '2023-10-23', '2023-10-28', 'Gasal', 'Pencetakan Kartu Ujian Tengah Semester (UTS) oleh Mahasiswa', '2025-06-05 01:35:51', '2025-06-05 20:26:58'),
(16, 2, 'kalender-akademik-2023-2024', 'Pembayaran', '2023-10-24', '2023-10-24', 'Gasal', 'Batas Akhir Pelunasan SKS Ganjil 2023/2024', '2025-06-05 01:36:52', '2025-06-05 20:25:59'),
(17, 2, 'kalender-akademik-2023-2024', 'UTS', '2023-10-30', '2023-11-11', 'Gasal', 'Penyelenggaraan Ujian Tengah Semester / UTS (Terjadwal 2 Minggu)', '2025-06-05 01:37:50', '2025-06-05 20:31:49'),
(18, 2, 'kalender-akademik-2023-2024', 'Libur Akademik', '2023-11-06', '2023-11-11', 'Gasal', 'Minggu ke 2 UTS', '2025-06-05 01:42:08', '2025-06-05 20:32:05'),
(19, 2, 'kalender-akademik-2023-2024', 'Perkuliahan', '2023-11-13', '2024-01-08', 'Gasal', 'Kuliah Pra UAS (7 Minggu)', '2025-06-05 05:56:02', '2025-06-05 20:32:27'),
(20, 2, 'kalender-akademik-2023-2024', 'Libur Akademik', '2023-12-26', '2023-12-30', 'Gasal', 'Libur Perkuliahan bagi mahasiswa (Natal dan Tahun Baru 2024)', '2025-06-05 05:57:09', '2025-06-05 20:32:46'),
(21, 2, 'kalender-akademik-2023-2024', 'Libur Akademik', '2023-12-31', '2024-01-13', 'Gasal', 'Pekan Teduh Sebelum UAS', '2025-06-05 05:57:53', '2025-06-05 20:33:06'),
(22, 2, 'kalender-akademik-2023-2024', 'Lain-lain', '2024-01-09', '2024-01-13', 'Gasal', 'Kuliah Pengganti, Pekan Teduh dan Pencetakan Kartu Ujian Akhir Semester (UAS) oleh Mahasiswa', '2025-06-05 05:59:00', '2025-06-05 20:33:27'),
(23, 2, 'kalender-akademik-2023-2024', 'Nilai Akhir', '2024-01-15', '2024-02-03', 'Gasal', 'Pengisian Nilai Akhir oleh Dosen (DPNA)', '2025-06-05 05:59:39', '2025-06-05 20:34:00'),
(24, 2, 'kalender-akademik-2023-2024', 'UAS', '2024-01-15', '2024-01-27', 'Gasal', 'Penyelenggaraan Ujian Akhir Semester/UAS (Terjadwal 2 Minggu)', '2025-06-05 06:00:40', '2025-06-05 20:34:20'),
(25, 2, 'kalender-akademik-2023-2024', 'KHS', '2024-02-06', '2024-02-06', 'Gasal', 'Pengumuman KHS di SIAKAD (Sistem Akademik Online)', '2025-06-05 06:01:21', '2025-06-05 20:34:37'),
(26, 2, 'kalender-akademik-2023-2024', 'Laporan Abdimas', '2024-02-12', '2024-02-18', 'Gasal', 'Review Laporan Kemajuan (Monev I) Penelitian dan Pengabdian kepada Masyarakat', '2025-06-05 06:02:03', '2025-06-05 20:34:53'),
(27, 2, 'kalender-akademik-2023-2024', 'Sidang Skripsi', '2024-02-17', '2024-02-17', 'Gasal', 'Batas Akhir Sidang Skripsi Sarjana, Tesis Pascasarjana dan Batas Akhir Laporan Praktek Kerja Lapangan bagi Program D3 Ganjil 2023/2024', '2025-06-05 06:02:46', '2025-06-05 20:35:18'),
(28, 2, 'kalender-akademik-2023-2024', 'Dokumen', '2024-02-21', '2024-02-21', 'Gasal', 'Batas Akhir Penyerahan Dokumen Kelulusan', '2025-06-05 06:03:30', '2025-06-05 20:35:36'),
(29, 2, 'kalender-akademik-2023-2024', 'Jurnal', '2024-02-28', '2024-02-28', 'Gasal', 'Publikasi Jurnal Lokal Semester Ganjil 2023/2024', '2025-06-05 06:04:05', '2025-06-05 20:36:03'),
(30, 2, 'kalender-akademik-2023-2024', 'Jadwal Kuliah', '2024-01-02', '2024-02-01', 'Genap', 'Pengisian Jadwal Kuliah ke SIAKAD Online oleh Program Studi', '2025-06-05 19:31:14', '2025-06-05 19:33:25'),
(31, 2, 'kalender-akademik-2023-2024', 'RPS', '2024-01-15', '2024-01-27', 'Genap', 'Pengisian Rencana Pembelajaran Semester ( RPS ) ke SIAKAD Online oleh Program Studi', '2025-06-05 19:34:24', '2025-06-05 19:34:24'),
(32, 2, 'kalender-akademik-2023-2024', 'KRS', '2024-02-05', '2024-02-24', 'Genap', 'Pengisian Kartu Rencana Studi', '2025-06-05 19:35:10', '2025-06-05 19:35:10'),
(33, 2, 'kalender-akademik-2023-2024', 'Cuti', '2024-02-05', '2024-03-04', 'Genap', 'Pengurusan Cutri Akademik', '2025-06-05 19:36:38', '2025-06-05 19:36:38'),
(34, 2, 'kalender-akademik-2023-2024', 'KRS', '2024-02-26', '2024-03-02', 'Genap', 'Perbaikan KRS', '2025-06-05 19:40:44', '2025-06-05 19:40:44'),
(35, 2, 'kalender-akademik-2023-2024', 'Perkuliahan', '2024-02-26', '2024-04-20', 'Genap', 'Kuliah Pra UTS ( 7 Minggu )', '2025-06-05 19:41:58', '2025-06-05 19:41:58'),
(36, 2, 'kalender-akademik-2023-2024', 'Pembayaran', '2024-03-08', '2024-03-08', 'Genap', 'Batas Akhir Pembayaran BPP Pokok Genap 2023/2024', '2025-06-05 19:42:49', '2025-06-05 19:42:49'),
(37, 2, 'kalender-akademik-2023-2024', 'Libur Akademik', '2024-04-08', '2024-04-13', 'Genap', 'Libur Idul Fitri 1445 H', '2025-06-05 19:44:43', '2025-06-05 19:45:50'),
(38, 2, 'kalender-akademik-2023-2024', 'Pembayaran', '2024-04-12', '2024-04-12', 'Genap', 'Batas Akhir Pembayaran SKS', '2025-06-05 19:47:15', '2025-06-05 19:47:15'),
(39, 2, 'kalender-akademik-2023-2024', 'Libur Akademik', '2024-04-15', '2024-04-20', 'Genap', 'Pencetakan Kartu Ujian Tengah Semester ( UTS ) oleh Mahasiswa', '2025-06-05 19:48:47', '2025-06-05 19:48:47'),
(40, 2, 'kalender-akademik-2023-2024', 'UTS', '2024-04-22', '2024-05-04', 'Genap', 'Penyelenggaraan Ujian Tengah Semester / UTS ( Terjadwal 2 Minggu )', '2025-06-05 19:50:16', '2025-06-05 19:50:16'),
(41, 2, 'kalender-akademik-2023-2024', 'Libur Akademik', '2024-04-29', '2024-05-04', 'Genap', 'Minggu ke-2 UTS', '2025-06-05 19:52:48', '2025-06-05 19:52:48'),
(42, 2, 'kalender-akademik-2023-2024', 'Perkuliahan', '2024-05-06', '2024-06-22', 'Genap', 'Kuliah Pra UAS ( 7 Minggu )', '2025-06-05 19:54:14', '2025-06-05 19:54:14'),
(43, 2, 'kalender-akademik-2023-2024', 'Lain-lain', '2024-06-24', '2024-06-29', 'Genap', 'Kuliah Pengganti, Pekan Teduh dan Pencetakan Kartu Ujian Akhir Semester (UAS) oleh Mahasiswa', '2025-06-05 20:13:08', '2025-06-05 20:13:08'),
(44, 2, 'kalender-akademik-2023-2024', 'Jadwal Kuliah', '2024-07-01', '2024-07-26', 'Genap', 'Pengisian Jadwal Kuliah ke SIAKAD Online Program Studi', '2025-06-05 20:14:18', '2025-06-05 20:14:18'),
(45, 2, 'kalender-akademik-2023-2024', 'UAS', '2024-07-01', '2024-07-13', 'Genap', 'Penyelenggaraan Ujian Akhir Semester / UAS (Terjadwal 2 Minggu)', '2025-06-05 20:16:50', '2025-06-05 20:16:50'),
(46, 2, 'kalender-akademik-2023-2024', 'Nilai Akhir', '2024-07-01', '2024-07-20', 'Genap', 'Pengisian Nilai Akhir oleh Dosen ( DPNA )', '2025-06-05 20:17:49', '2025-06-05 20:17:49'),
(47, 2, 'kalender-akademik-2023-2024', 'KHS', '2024-07-22', '2024-07-22', 'Genap', 'Pengumuman KHS di SIAKAD ( Sistem Akademik Online )', '2025-06-05 20:18:50', '2025-06-05 20:18:50'),
(48, 2, 'kalender-akademik-2023-2024', 'Laporan Abdimas', '2024-07-29', '2024-08-04', 'Genap', 'Review Laporan Kemajuan (Monev II) Penelitian dan Pengabdian Kepada Masyarakat', '2025-06-05 20:19:42', '2025-06-05 20:19:42'),
(49, 2, 'kalender-akademik-2023-2024', 'Sidang Skripsi', '2024-08-03', '2024-08-03', 'Genap', 'Batas Akhir Sidang Skripsi Sarjana, Tesis Pascasarjana dan Batas Akhir Laporan Praktek Kerja Lapangan bagi Program D3 Genap 2023/2024', '2025-06-05 20:20:21', '2025-06-05 20:20:21'),
(50, 2, 'kalender-akademik-2023-2024', 'Dokumen', '2024-08-10', '2024-08-10', 'Genap', 'Batas Akhir Penyerahan Dokumen Kelulusan (untuk Persyaratan Ijazah)', '2025-06-05 20:21:16', '2025-06-05 20:21:16'),
(51, 2, 'kalender-akademik-2023-2024', 'Seminar Hasil', '2024-08-14', '2024-08-15', 'Genap', 'Pelaksanaan Seminar Hasil Penelitian dan Pengabdian kepada Masyarakat', '2025-06-05 20:21:54', '2025-06-05 20:21:54'),
(52, 2, 'kalender-akademik-2023-2024', 'Jurnal', '2024-08-17', '2024-08-17', 'Genap', 'Publikasi Jurnal Lokal Semester Genap 2023/2024', '2025-06-05 20:22:20', '2025-06-05 20:22:20'),
(53, 2, 'kalender-akademik-2023-2024', 'Wisuda', '2024-09-26', '2024-09-26', 'Genap', 'Penyelenggaraan Wisuda Lulusan Tahun Akademik 2023/2024', '2025-06-05 20:23:28', '2025-06-05 20:23:28'),
(54, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2022-07-01', '2022-09-01', 'Gasal', 'Pengisian Jadwal Kuliah ke SIAK Online oleh Program Studi', '2025-06-09 04:47:41', '2025-06-09 04:47:41'),
(55, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2022-08-08', '2022-10-08', 'Gasal', 'Pengurusan Cuti Akademik', '2025-06-09 05:44:00', '2025-06-09 05:44:00'),
(56, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2022-08-08', '2022-09-26', 'Gasal', 'Pengisian KRS Online Mahasiswa', '2025-06-09 05:55:53', '2025-06-09 05:55:53'),
(57, 3, 'kalender-akademik-2022-2023', 'Seminar Proposal', '2022-08-19', '2022-08-19', 'Gasal', 'Batas Akhir Pengajuan Proposal Penelitian & Abdimas', '2025-06-09 06:03:20', '2025-06-09 06:03:20'),
(58, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2022-09-05', '2022-09-17', 'Gasal', 'Pengisian Rencana Pembelajaran Semester (RPS) ke SIAKAD Online Oleh Program Studi', '2025-06-10 01:11:46', '2025-06-10 01:11:46'),
(59, 3, 'kalender-akademik-2022-2023', 'Penerimaan Mahasiswa Baru', '2022-09-14', '2022-09-21', 'Gasal', 'PKKMB', '2025-06-10 01:12:29', '2025-06-10 01:12:29'),
(60, 3, 'kalender-akademik-2022-2023', 'Penerimaan Mahasiswa Baru', '2022-09-20', '2022-09-20', 'Gasal', 'Batas Akhir Registrasi Mahasiswa Baru', '2025-06-10 01:13:15', '2025-06-10 01:13:15'),
(61, 3, 'kalender-akademik-2022-2023', 'Pembayaran', '2022-09-20', '2022-09-20', 'Gasal', 'Batas Akhir Pembayaran BPP Pokok Ganjil 2022/2023', '2025-06-10 01:14:39', '2025-06-10 01:14:39'),
(62, 3, 'kalender-akademik-2022-2023', 'Penerimaan Mahasiswa Baru', '2022-09-23', '2022-09-23', 'Gasal', 'Kuliah Perdana dan Pelantikan Mahasiswa Baru', '2025-06-10 01:15:24', '2025-06-10 01:15:24'),
(63, 3, 'kalender-akademik-2022-2023', 'Perkuliahan', '2022-09-26', '2022-11-12', 'Gasal', 'Kuliah Pra UTS ( 7 Minggu )', '2025-06-10 01:16:04', '2025-06-10 01:16:04'),
(64, 3, 'kalender-akademik-2022-2023', 'Perkuliahan', '2022-10-03', '2022-10-08', 'Gasal', 'Perbaikan KRS', '2025-06-10 01:17:03', '2025-06-10 01:17:03'),
(65, 3, 'kalender-akademik-2022-2023', 'Perkuliahan', '2022-11-07', '2022-11-12', 'Gasal', 'Pencetakan Kartu Ujian Tengah Semester ( UTS ) oleh Mahasiswa', '2025-06-10 01:17:53', '2025-06-10 01:17:53'),
(66, 3, 'kalender-akademik-2022-2023', 'Pembayaran', '2022-11-08', '2022-11-08', 'Gasal', 'Batas Akhir Pelunasan SKS Ganjil 2022/2023', '2025-06-10 01:18:37', '2025-06-10 01:18:37'),
(67, 3, 'kalender-akademik-2022-2023', 'Perkuliahan', '2022-11-14', '2022-11-26', 'Gasal', 'Penyelenggaraan UTS ( Terjadwal 2 Minggu )', '2025-06-10 01:26:11', '2025-06-10 01:26:11'),
(68, 3, 'kalender-akademik-2022-2023', 'Perkuliahan', '2022-11-28', '2023-01-14', 'Gasal', 'Kuliah Pra UAS ( 7 Minggu )', '2025-06-10 01:27:15', '2025-06-10 01:27:15'),
(69, 3, 'kalender-akademik-2022-2023', 'Libur Nasional', '2022-12-24', '2023-01-02', 'Gasal', 'Libur Natal Tahun 2022 dan Libur Tahun baru 2023', '2025-06-10 01:29:56', '2025-06-10 01:29:56'),
(70, 3, 'kalender-akademik-2022-2023', 'Perkuliahan', '2023-01-16', '2023-01-21', 'Gasal', 'Kuliah Pengganti dan Pencetakan Kartu Ujian Akhir Semester ( UAS ) oleh Mahasiswa', '2025-06-10 01:31:08', '2025-06-10 01:31:08'),
(71, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-01-23', '2023-02-11', 'Gasal', 'Pengisian Nilai Akhir oleh Dosen (DPNA)', '2025-06-10 01:31:51', '2025-06-10 01:31:51'),
(72, 3, 'kalender-akademik-2022-2023', 'Libur Nasional', '2023-01-23', '2023-01-23', 'Gasal', 'Tahun Baru Imlek', '2025-06-10 01:32:56', '2025-06-10 01:32:56'),
(73, 3, 'kalender-akademik-2022-2023', 'Perkuliahan', '2023-01-23', '2023-02-06', 'Gasal', 'Penyelenggaraan UAS (Terjadwal 2 Minggu)', '2025-06-10 01:33:30', '2025-06-10 01:33:30'),
(74, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-02-13', '2023-02-13', 'Gasal', 'Pengumuman KHS di SIAK (Sistem Akademik Online)', '2025-06-10 01:34:06', '2025-06-10 01:34:06'),
(75, 3, 'kalender-akademik-2022-2023', 'Libur Nasional', '2023-02-18', '2023-02-18', 'Gasal', 'Isra Mi\'raj', '2025-06-10 01:34:33', '2025-06-10 01:34:33'),
(76, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-02-25', '2023-02-25', 'Gasal', 'Batas Akhir Sidang Skripsi Sarjana, Tesis Pascasarjana dan Batas Akhir Laporan Praktek Kerja Lapangan bagi Program D3 Ganjil 2022/2023', '2025-06-10 01:35:39', '2025-06-10 01:35:39'),
(77, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-02-27', '2023-02-28', 'Gasal', 'Seminar Hasil Penelitian dan Pengabdian kepada Masyarakat', '2025-06-10 01:36:16', '2025-06-10 01:36:16'),
(78, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-03-02', '2023-03-02', 'Gasal', 'Batas Akhir Penyerahan Dokumen Kelulusan', '2025-06-10 01:36:47', '2025-06-10 01:36:47'),
(79, 3, 'kalender-akademik-2022-2023', 'Libur Nasional', '2023-03-22', '2023-03-22', 'Gasal', 'Hari Raya Nyepi', '2025-06-10 01:37:59', '2025-06-10 01:37:59'),
(80, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-02-03', '2023-03-02', 'Genap', 'Batas Akhir Pengajuan Proposal Penelitian dan Abdimas', '2025-06-10 01:40:30', '2025-06-10 01:40:30'),
(81, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-02-13', '2023-03-04', 'Genap', 'Pengisian KRS', '2025-06-10 01:40:53', '2025-06-10 01:40:53'),
(82, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-02-13', '2023-03-20', 'Genap', 'Pengurusan Cuti Akademik', '2025-06-10 01:41:17', '2025-06-10 01:41:17'),
(83, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-02-20', '2023-03-04', 'Genap', 'Pengisian Rencana Pembelajaran Semester (RPS) ke SIAKAD Online oleh Program Studi', '2025-06-10 01:42:06', '2025-06-10 01:42:06'),
(84, 3, 'kalender-akademik-2022-2023', 'Pembayaran', '2023-03-02', '2023-03-02', 'Genap', 'Batas Akhir Pembayaran BPP Pokok Genap 2022/2023', '2025-06-10 01:42:47', '2025-06-10 01:42:47'),
(85, 3, 'kalender-akademik-2022-2023', 'Perkuliahan', '2023-03-06', '2023-04-22', 'Genap', 'Kuliah Pra UTS (7 Minggu)', '2025-06-10 01:43:40', '2025-06-10 01:43:40'),
(86, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-03-11', '2023-03-20', 'Genap', 'Perbaikan KRS', '2025-06-10 01:44:15', '2025-06-10 01:44:15'),
(87, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-04-17', '2023-04-22', 'Genap', 'Pencetakan Kartu Ujian Tengah Semester (UTS) oleh Mahasiswa', '2025-06-10 01:54:04', '2025-06-10 01:54:04'),
(88, 3, 'kalender-akademik-2022-2023', 'Pembayaran', '2023-04-21', '2023-04-21', 'Genap', 'Batas Akhir Pembayaran SKS', '2025-06-10 01:55:43', '2025-06-10 01:55:43'),
(89, 3, 'kalender-akademik-2022-2023', 'Libur Akademik', '2023-04-24', '2023-05-01', 'Genap', 'Libur Sebelum UTS', '2025-06-10 01:56:39', '2025-06-10 01:56:39'),
(90, 3, 'kalender-akademik-2022-2023', 'Libur Nasional', '2023-04-24', '2023-04-29', 'Genap', 'Libur Idul Fitri 1441 H', '2025-06-10 01:57:26', '2025-06-10 01:57:26'),
(91, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-05-01', '2023-05-13', 'Genap', 'Penyelenggaraan Ujian Tengah Semester (Terjadwal 2 Minggu)', '2025-06-10 01:58:08', '2025-06-10 01:58:08'),
(92, 3, 'kalender-akademik-2022-2023', 'Libur Akademik', '2023-05-09', '2023-05-13', 'Genap', 'Minggu Kedua UTS', '2025-06-10 01:59:11', '2025-06-10 01:59:11'),
(93, 3, 'kalender-akademik-2022-2023', 'Perkuliahan', '2023-05-15', '2023-07-01', 'Genap', 'Kuliah Pra UAS (7 Minggu)', '2025-06-10 02:00:23', '2025-06-10 02:00:23'),
(94, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-06-26', '2023-07-01', 'Genap', 'Pencetakan Kartu Ujian Akhir Semester (UAS) oleh Mahasiswa', '2025-06-10 02:01:27', '2025-06-10 02:01:27'),
(95, 3, 'kalender-akademik-2022-2023', 'Perkuliahan', '2023-07-03', '2023-07-08', 'Genap', 'Kuliah Pengganti Pekan Teduh', '2025-06-10 02:04:54', '2025-06-10 02:04:54'),
(96, 3, 'kalender-akademik-2022-2023', 'Libur Akademik', '2023-07-03', '2023-07-08', 'Genap', 'Libur Sebelum UAS', '2025-06-10 02:05:30', '2025-06-10 02:05:30'),
(97, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-07-10', '2023-07-29', 'Genap', 'Pengisian Nilai Akhir oleh Dosen (DPNA)', '2025-06-10 02:06:14', '2025-06-10 02:06:14'),
(98, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-07-10', '2023-07-22', 'Genap', 'Penyelenggaraan Ujian Akhir Semester (Terjadwal 2 Minggu)', '2025-06-10 02:07:10', '2025-06-10 02:07:10'),
(99, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-07-31', '2023-07-31', 'Genap', 'Pengumuman KHS di SIAKAD', '2025-06-10 02:07:42', '2025-06-10 02:07:42'),
(100, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-08-10', '2023-08-11', 'Genap', 'Seminar Hasil Penelitian dan Pengabdian kepada Masyarakat', '2025-06-10 02:08:18', '2025-06-10 02:08:18'),
(101, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-08-16', '2023-08-16', 'Genap', 'Batas Akhir SIdang Skripsi, Tesis Pascasarjana dan Batas Akhir Laporan Praktek Kerja Lapangan bagi Program Studi D3 Genap 2022/2023', '2025-06-10 02:09:23', '2025-06-10 02:09:23'),
(102, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-08-21', '2023-08-21', 'Genap', 'Batas Akhir Penyerahan Dokumen Kelulusan', '2025-06-10 02:09:51', '2025-06-10 02:09:51'),
(103, 3, 'kalender-akademik-2022-2023', 'Lain-lain', '2023-10-25', '2023-10-25', 'Genap', 'Penyelenggaraan Wisuda Lulusan Tahun Akademik 2022/2023', '2025-06-10 02:10:30', '2025-06-10 02:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1),
(7, '2025_05_23_131954_create_pages_table', 2),
(8, '2025_05_23_132220_create_contents_table', 2),
(9, '2025_05_24_140140_create_notifications_table', 3),
(13, '2025_05_27_211557_create_post_categories_table', 4),
(14, '2025_05_27_211816_create_posts_table', 4),
(19, '2025_05_30_025117_create_tahun_ajarans_table', 5),
(20, '2025_05_30_025331_create_kalender_akademiks_table', 5),
(22, '2025_05_30_090245_create_dosens_table', 6),
(23, '2025_06_04_080422_create_permission_tables', 7),
(24, '2025_06_06_075336_create_comments_table', 8),
(25, '2025_06_09_033411_add_views_count_to_contents_table', 9),
(26, '2025_06_19_135048_create_forms_table', 10),
(27, '2025_06_19_135301_create_form_submissions_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Visi, Misi, Tujuan & Strategi', 'visi-misi-tujuan-strategi', '2025-05-23 21:28:53', '2025-05-23 07:29:00', '2025-05-23 07:29:00'),
(2, 'Daftar Dosen', 'daftar-dosen', '2025-05-24 13:53:47', '2025-05-23 23:53:52', '2025-05-23 23:53:52'),
(3, 'Sejarah Program Studi', 'sejarah-program-studi', '2025-05-24 21:02:51', '2025-05-24 07:02:55', '2025-05-24 07:02:55'),
(4, 'Kalender Akademik 2022 / 2023', 'kalender-akademik-2022-2023', '2025-05-26 10:58:28', '2025-05-25 20:58:32', '2025-05-25 21:01:25'),
(5, 'Kalender Akademik 2023-2024', 'kalender-akademik-2023-2024', '2025-05-26 11:00:33', '2025-05-25 21:00:37', '2025-05-25 21:00:37'),
(6, 'Kalender Akademik 2024 / 2025', 'kalender-akademik-2024-2025', '2025-05-26 11:00:52', '2025-05-25 21:00:56', '2025-05-25 21:00:56'),
(7, 'Keunggulan', 'keunggulan', '2025-05-26 15:57:11', '2025-05-26 01:57:17', '2025-05-26 01:57:17'),
(8, 'Akreditasi', 'akreditasi', '2025-05-26 15:57:24', '2025-05-26 01:57:27', '2025-05-26 01:57:27'),
(10, 'Beasiswa', 'beasiswa', '2025-05-26 15:57:51', '2025-05-26 01:57:54', '2025-05-26 01:57:54'),
(11, 'Belajar di Jepang', 'belajar-di-jepang', '2025-05-26 15:58:02', '2025-05-26 01:58:05', '2025-05-26 01:58:05'),
(12, 'Prospek Karir', 'prospek-karir', '2025-05-26 15:58:15', '2025-05-26 01:58:19', '2025-05-26 01:58:19'),
(15, 'Kalender Akademik 2025 / 2026', 'kalender-akademik-2025-2026', '2025-05-26 15:59:26', '2025-05-26 01:59:30', '2025-05-26 01:59:30'),
(16, 'Kunjungan Industri', 'kunjungan-industri', '2025-05-28 10:31:49', '2025-05-27 20:31:52', '2025-05-27 20:31:52'),
(17, 'Seminar', 'seminar', '2025-05-28 10:38:42', '2025-05-27 20:38:47', '2025-05-27 20:38:47'),
(18, 'Jadwal Kuliah', 'jadwal-kuliah', '2025-06-01 10:14:41', '2025-05-31 20:14:45', '2025-05-31 20:14:45'),
(19, 'HMSI', 'hmsi', '2025-06-01 10:16:33', '2025-05-31 20:18:33', '2025-05-31 20:18:33'),
(20, 'Mahasiswa Berprestasi', 'mahasiswa-berprestasi', '2025-06-01 10:42:20', '2025-05-31 20:42:24', '2025-05-31 20:42:24'),
(21, 'Magang', 'magang', '2025-06-01 10:44:33', '2025-05-31 20:44:36', '2025-05-31 20:44:36'),
(22, 'Daftar Tenaga Kependidikan', 'daftar-tenaga-kependidikan', '2025-06-01 10:45:03', '2025-05-31 20:45:07', '2025-05-31 20:45:07'),
(23, 'Daftar Laboran', 'daftar-laboran', '2025-06-01 10:45:21', '2025-05-31 20:45:25', '2025-05-31 20:45:25'),
(24, 'Ikatan Alumni Sistem Informasi', 'ikatan-alumni-sistem-informasi', '2025-06-01 10:46:01', '2025-05-31 20:46:04', '2025-05-31 20:46:04'),
(25, 'Lowongan Kerja', 'lowongan-kerja', '2025-06-01 10:46:19', '2025-05-31 20:46:23', '2025-05-31 20:46:23'),
(26, 'Alumni Berprestasi', 'alumni-berprestasi', '2025-06-01 10:46:34', '2025-05-31 20:46:46', '2025-05-31 20:46:46'),
(27, 'Tracer Studi Alumni', 'tracer-studi-alumni', '2025-06-01 10:53:41', '2025-05-31 20:53:44', '2025-05-31 20:53:44'),
(28, 'Kegiatan Alumni', 'kegiatan-alumni', '2025-06-01 10:53:54', '2025-05-31 20:53:57', '2025-05-31 20:53:57'),
(29, 'Distribusi Mata Kuliah Kurikulum KKNI 2017', 'distribusi-mata-kuliah-kurikulum-kkni-2017', '2025-06-01 10:54:38', '2025-05-31 20:54:40', '2025-05-31 20:54:40'),
(30, 'Distribusi Mata Kuliah Kurikulum OBE MBKM 2022', 'distribusi-mata-kuliah-kurikulum-obe-mbkm-2022', '2025-06-01 10:55:10', '2025-05-31 20:55:13', '2025-05-31 20:55:13'),
(31, 'Pengumuman', 'pengumuman', '2025-06-01 10:55:25', '2025-05-31 20:55:28', '2025-05-31 20:55:28'),
(32, 'Peraturan dan Informasi', 'peraturan-dan-informasi', '2025-06-01 10:55:43', '2025-05-31 20:55:45', '2025-05-31 20:55:45'),
(33, 'Skripsi', 'skripsi', '2025-06-01 10:55:58', '2025-05-31 20:56:02', '2025-05-31 20:56:02'),
(34, 'Kerja Praktik', 'kerja-praktik', '2025-06-01 10:56:07', '2025-05-31 20:56:10', '2025-05-31 20:56:10'),
(35, 'Fasilitas Akademik', 'fasilitas-akademik', '2025-06-01 10:56:20', '2025-05-31 20:56:30', '2025-05-31 20:56:30'),
(36, 'Fasilitas Non-Akademik', 'fasilitas-non-akademik', '2025-06-01 10:56:42', '2025-05-31 20:56:45', '2025-05-31 20:56:45'),
(37, 'Penelitian dan Pengabdian', 'penelitian-dan-pengabdian', '2025-06-01 10:57:03', '2025-05-31 20:57:05', '2025-05-31 20:57:05'),
(38, 'Publikasi Ilmiah', 'publikasi-ilmiah', '2025-06-01 10:57:19', '2025-05-31 20:57:23', '2025-05-31 20:57:23'),
(39, 'Kerjasama', 'kerjasama', '2025-06-01 10:57:31', '2025-05-31 20:57:34', '2025-05-31 20:57:34'),
(40, 'Penghargaan', 'penghargaan', '2025-06-01 10:57:40', '2025-05-31 20:57:44', '2025-05-31 20:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Add Pages', 'web', '2025-06-04 01:25:17', '2025-06-04 01:25:17'),
(2, 'view-any Content', 'web', '2025-06-04 05:53:19', '2025-06-04 05:53:19'),
(3, 'view-any Content', 'api', '2025-06-04 05:53:19', '2025-06-04 05:53:19'),
(4, 'view Content', 'web', '2025-06-04 05:53:19', '2025-06-04 05:53:19'),
(5, 'view Content', 'api', '2025-06-04 05:53:19', '2025-06-04 05:53:19'),
(6, 'create Content', 'web', '2025-06-04 05:53:19', '2025-06-04 05:53:19'),
(7, 'create Content', 'api', '2025-06-04 05:53:19', '2025-06-04 05:53:19'),
(8, 'update Content', 'web', '2025-06-04 05:53:19', '2025-06-04 05:53:19'),
(9, 'update Content', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(10, 'delete Content', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(11, 'delete Content', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(12, 'delete-any Content', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(13, 'delete-any Content', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(14, 'replicate Content', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(15, 'replicate Content', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(16, 'restore Content', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(17, 'restore Content', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(18, 'restore-any Content', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(19, 'restore-any Content', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(20, 'reorder Content', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(21, 'reorder Content', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(22, 'force-delete Content', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(23, 'force-delete Content', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(24, 'force-delete-any Content', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(25, 'force-delete-any Content', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(26, 'view-any Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(27, 'view-any Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(28, 'view Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(29, 'view Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(30, 'create Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(31, 'create Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(32, 'update Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(33, 'update Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(34, 'delete Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(35, 'delete Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(36, 'delete-any Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(37, 'delete-any Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(38, 'replicate Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(39, 'replicate Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(40, 'restore Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(41, 'restore Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(42, 'restore-any Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(43, 'restore-any Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(44, 'reorder Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(45, 'reorder Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(46, 'force-delete Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(47, 'force-delete Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(48, 'force-delete-any Dosen', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(49, 'force-delete-any Dosen', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(50, 'view-any KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(51, 'view-any KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(52, 'view KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(53, 'view KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(54, 'create KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(55, 'create KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(56, 'update KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(57, 'update KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(58, 'delete KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(59, 'delete KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(60, 'delete-any KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(61, 'delete-any KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(62, 'replicate KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(63, 'replicate KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(64, 'restore KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(65, 'restore KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(66, 'restore-any KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(67, 'restore-any KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(68, 'reorder KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(69, 'reorder KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(70, 'force-delete KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(71, 'force-delete KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(72, 'force-delete-any KalenderAkademik', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(73, 'force-delete-any KalenderAkademik', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(74, 'view-any Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(75, 'view-any Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(76, 'view Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(77, 'view Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(78, 'create Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(79, 'create Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(80, 'update Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(81, 'update Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(82, 'delete Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(83, 'delete Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(84, 'delete-any Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(85, 'delete-any Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(86, 'replicate Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(87, 'replicate Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(88, 'restore Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(89, 'restore Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(90, 'restore-any Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(91, 'restore-any Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(92, 'reorder Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(93, 'reorder Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(94, 'force-delete Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(95, 'force-delete Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(96, 'force-delete-any Page', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(97, 'force-delete-any Page', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(98, 'view-any Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(99, 'view-any Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(100, 'view Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(101, 'view Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(102, 'create Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(103, 'create Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(104, 'update Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(105, 'update Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(106, 'delete Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(107, 'delete Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(108, 'delete-any Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(109, 'delete-any Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(110, 'replicate Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(111, 'replicate Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(112, 'restore Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(113, 'restore Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(114, 'restore-any Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(115, 'restore-any Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(116, 'reorder Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(117, 'reorder Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(118, 'force-delete Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(119, 'force-delete Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(120, 'force-delete-any Post', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(121, 'force-delete-any Post', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(122, 'view-any PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(123, 'view-any PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(124, 'view PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(125, 'view PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(126, 'create PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(127, 'create PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(128, 'update PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(129, 'update PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(130, 'delete PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(131, 'delete PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(132, 'delete-any PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(133, 'delete-any PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(134, 'replicate PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(135, 'replicate PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(136, 'restore PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(137, 'restore PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(138, 'restore-any PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(139, 'restore-any PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(140, 'reorder PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(141, 'reorder PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(142, 'force-delete PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(143, 'force-delete PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(144, 'force-delete-any PostCategory', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(145, 'force-delete-any PostCategory', 'api', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(146, 'view-any TahunAjaran', 'web', '2025-06-04 05:53:20', '2025-06-04 05:53:20'),
(147, 'view-any TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(148, 'view TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(149, 'view TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(150, 'create TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(151, 'create TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(152, 'update TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(153, 'update TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(154, 'delete TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(155, 'delete TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(156, 'delete-any TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(157, 'delete-any TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(158, 'replicate TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(159, 'replicate TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(160, 'restore TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(161, 'restore TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(162, 'restore-any TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(163, 'restore-any TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(164, 'reorder TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(165, 'reorder TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(166, 'force-delete TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(167, 'force-delete TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(168, 'force-delete-any TahunAjaran', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(169, 'force-delete-any TahunAjaran', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(170, 'view-any User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(171, 'view-any User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(172, 'view User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(173, 'view User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(174, 'create User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(175, 'create User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(176, 'update User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(177, 'update User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(178, 'delete User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(179, 'delete User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(180, 'delete-any User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(181, 'delete-any User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(182, 'replicate User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(183, 'replicate User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(184, 'restore User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(185, 'restore User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(186, 'restore-any User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(187, 'restore-any User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(188, 'reorder User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(189, 'reorder User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(190, 'force-delete User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(191, 'force-delete User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(192, 'force-delete-any User', 'web', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(193, 'force-delete-any User', 'api', '2025-06-04 05:53:21', '2025-06-04 05:53:21'),
(194, 'view Permission', 'web', '2025-06-05 02:03:32', '2025-06-05 02:03:32'),
(195, 'view-any Permission', 'web', '2025-06-05 02:04:34', '2025-06-05 02:04:34'),
(196, 'view-any Permission', 'api', '2025-06-05 02:04:54', '2025-06-05 02:04:54'),
(197, 'create Permission', 'web', '2025-06-05 02:05:07', '2025-06-05 02:05:07'),
(198, 'create Permission', 'api', '2025-06-05 02:05:21', '2025-06-05 02:05:21'),
(199, 'update Permission', 'web', '2025-06-05 02:05:34', '2025-06-05 02:05:34'),
(200, 'update Permission', 'api', '2025-06-05 02:05:52', '2025-06-05 02:05:52'),
(201, 'delete Permission', 'web', '2025-06-05 02:06:06', '2025-06-05 02:06:06'),
(202, 'delete Permission', 'api', '2025-06-05 02:06:16', '2025-06-05 02:06:16'),
(203, 'delete-any Permission', 'web', '2025-06-05 02:06:36', '2025-06-05 02:06:36'),
(204, 'delete-any Permission', 'api', '2025-06-05 02:06:45', '2025-06-05 02:06:45'),
(205, 'force-delete Permission', 'web', '2025-06-05 02:12:39', '2025-06-05 02:12:39'),
(206, 'force-delete-any Permission', 'web', '2025-06-05 02:12:54', '2025-06-05 02:12:54'),
(208, 'force-delete Permission', 'api', '2025-06-05 02:14:33', '2025-06-05 02:14:33'),
(209, 'force-delete-any Permission', 'api', '2025-06-05 02:14:50', '2025-06-05 02:14:50'),
(210, 'reorder Permission', 'web', '2025-06-05 02:15:10', '2025-06-05 02:15:10'),
(211, 'reorder Permission', 'api', '2025-06-05 02:15:20', '2025-06-05 02:15:20'),
(212, 'replicate Permission', 'web', '2025-06-05 02:15:30', '2025-06-05 02:15:30'),
(213, 'replicate Permission', 'api', '2025-06-05 02:15:41', '2025-06-05 02:15:41'),
(214, 'view Role', 'web', '2025-06-05 02:19:27', '2025-06-05 02:19:27'),
(215, 'view Role', 'api', '2025-06-05 02:19:35', '2025-06-05 02:19:35'),
(216, 'view-any Role', 'web', '2025-06-05 02:19:44', '2025-06-05 02:19:44'),
(217, 'view-any Role', 'api', '2025-06-05 02:20:04', '2025-06-05 02:20:04'),
(218, 'create Role', 'web', '2025-06-05 02:20:14', '2025-06-05 02:20:14'),
(219, 'create Role', 'api', '2025-06-05 02:20:22', '2025-06-05 02:20:22'),
(220, 'update Role', 'web', '2025-06-05 02:20:33', '2025-06-05 02:20:33'),
(221, 'update Role', 'api', '2025-06-05 02:20:39', '2025-06-05 02:20:39'),
(222, 'delete Role', 'web', '2025-06-05 02:20:51', '2025-06-05 02:20:51'),
(223, 'delete Role', 'api', '2025-06-05 02:21:03', '2025-06-05 02:21:03'),
(224, 'delete-any Role', 'web', '2025-06-05 02:22:10', '2025-06-05 02:22:10'),
(225, 'delete-any Role', 'api', '2025-06-05 02:22:17', '2025-06-05 02:22:17'),
(226, 'replicate Role', 'web', '2025-06-05 02:22:32', '2025-06-05 02:22:32'),
(227, 'replicate Role', 'api', '2025-06-05 02:22:55', '2025-06-05 02:22:55'),
(228, 'restore Role', 'web', '2025-06-05 02:23:11', '2025-06-05 02:23:11'),
(229, 'restore Role', 'api', '2025-06-05 02:23:22', '2025-06-05 02:23:22'),
(230, 'restore-any Role', 'web', '2025-06-05 02:24:04', '2025-06-05 02:24:04'),
(231, 'restore-any Role', 'api', '2025-06-05 02:24:14', '2025-06-05 02:24:14'),
(232, 'reorder Role', 'web', '2025-06-05 02:24:24', '2025-06-05 02:24:24'),
(233, 'reorder Role', 'api', '2025-06-05 02:24:37', '2025-06-05 02:24:37'),
(234, 'force-delete Role', 'web', '2025-06-05 02:24:48', '2025-06-05 02:24:48'),
(235, 'force-delete Role', 'api', '2025-06-05 02:24:57', '2025-06-05 02:24:57'),
(236, 'force-delete-any Role', 'web', '2025-06-05 02:25:11', '2025-06-05 02:25:11'),
(237, 'force-delete-any Role', 'api', '2025-06-05 02:25:21', '2025-06-05 02:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` json DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` datetime NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `images`, `content`, `published_at`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 'Web Developer Internship', 'web-developer-internship', '[]', '<h3>Deskripsi pekerjaan</h3><p>Qualifications :<br>• Active university student or fresh graduate in Computer Science, Information Technology, or a related field.<br>• Basic understanding of HTML, CSS, JavaScript and responsive web design principles.<br>• Familiar with at least one web development framework or library such as React, Vue, Angular, Laravel, or Express.<br>• Experience with version control systems such as Git.</p><p><br></p>', '2025-06-04 06:45:53', 1, '2025-06-03 16:49:53', '2025-06-03 16:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `title`, `slug`, `url`, `created_at`, `updated_at`) VALUES
(1, 'HMSI', 'hmsi', NULL, '2025-05-27 14:39:58', '2025-05-27 14:39:58'),
(2, 'Kegiatan Mahasiswa', 'kegiatan-mahasiswa', NULL, '2025-05-27 19:12:26', '2025-05-27 19:12:26'),
(3, 'Lowongan Kerja', 'lowongan-kerja', NULL, '2025-06-03 16:44:15', '2025-06-03 16:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-06-04 01:26:04', '2025-06-04 01:26:04'),
(2, 'dosen', 'web', '2025-06-04 01:28:38', '2025-06-04 01:28:38'),
(3, 'Staff', 'web', '2025-06-04 06:11:18', '2025-06-04 06:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(4, 1),
(6, 1),
(8, 1),
(10, 1),
(20, 1),
(26, 1),
(28, 1),
(30, 1),
(32, 1),
(34, 1),
(40, 1),
(50, 1),
(52, 1),
(54, 1),
(56, 1),
(58, 1),
(66, 1),
(74, 1),
(76, 1),
(78, 1),
(82, 1),
(98, 1),
(100, 1),
(102, 1),
(104, 1),
(106, 1),
(108, 1),
(118, 1),
(122, 1),
(124, 1),
(126, 1),
(130, 1),
(146, 1),
(148, 1),
(150, 1),
(154, 1),
(170, 1),
(172, 1),
(174, 1),
(175, 1),
(176, 1),
(178, 1),
(180, 1),
(190, 1),
(192, 1),
(194, 1),
(195, 1),
(197, 1),
(199, 1),
(201, 1),
(203, 1),
(205, 1),
(206, 1),
(210, 1),
(212, 1),
(214, 1),
(216, 1),
(218, 1),
(220, 1),
(222, 1),
(224, 1),
(226, 1),
(228, 1),
(230, 1),
(232, 1),
(234, 1),
(236, 1),
(1, 2),
(2, 3),
(4, 3),
(6, 3),
(8, 3),
(10, 3),
(12, 3),
(26, 3),
(28, 3),
(30, 3),
(50, 3),
(52, 3),
(54, 3),
(56, 3),
(58, 3),
(60, 3),
(68, 3),
(74, 3),
(76, 3),
(78, 3),
(80, 3),
(82, 3),
(92, 3),
(98, 3),
(100, 3),
(102, 3),
(104, 3),
(106, 3),
(126, 3),
(130, 3),
(150, 3),
(154, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gqih11BlHJn0nyjbuBztiHA1LwlJ1sK4V3Qephnq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicTBDdkZxR2htRWsyTWtEOEV4SWtmVmhaeHlEdkczWU5Eb1UxR0hDcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly93ZWJzaS50ZXN0L2FkbWluL2xvZ2luIjt9fQ==', 1750354120),
('scUv908yLxbSp1U0caZhUoBiZjNeDwNjZpq1tyo3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidFg3VXdvNWV2OUhZVHNJRUFpTmRuMlFJWHl6ZW5wcTJxY1dyZnlVZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTc6Imh0dHA6Ly93ZWJzaS50ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750353111);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id` bigint UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id`, `tahun_ajaran`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '2024 / 2025', NULL, '2025-05-30 00:18:53', '2025-05-30 00:18:53'),
(2, '2023 / 2024', NULL, '2025-05-30 00:19:47', '2025-05-30 00:19:47'),
(3, '2022 / 2023', NULL, '2025-06-09 04:46:51', '2025-06-09 04:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eka Yuni Astuty', 'ekayuniastuty@yahoo.com', NULL, '$2y$12$sLZ0tHtzPSSkf7u.zgeApeDH7iCTyuhjgeIc2uiwQV.0zSkeVzVFm', 'admin', NULL, '2025-05-22 01:43:17', '2025-06-04 01:27:06'),
(2, 'Rayyanda', 'tafhimquran512@gmail.com', NULL, '$2y$12$ZO7kqrnh7gUmv4.RjLYi6eTq40fnfRmb95RbA/A1Hv90hcjFh9Xs2', 'admin', NULL, '2025-06-04 06:12:10', '2025-06-04 06:12:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_page_id_foreign` (`page_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forms_form_id_unique` (`form_id`);

--
-- Indexes for table `form_submissions`
--
ALTER TABLE `form_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_submissions_form_id_foreign` (`form_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kalender_akademik_tahun_ajaran_id_foreign` (`tahun_ajaran_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_submissions`
--
ALTER TABLE `form_submissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `form_submissions`
--
ALTER TABLE `form_submissions`
  ADD CONSTRAINT `form_submissions_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `forms` (`form_id`) ON DELETE CASCADE;

--
-- Constraints for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  ADD CONSTRAINT `kalender_akademik_tahun_ajaran_id_foreign` FOREIGN KEY (`tahun_ajaran_id`) REFERENCES `tahun_ajaran` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
