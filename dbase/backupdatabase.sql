-- PHP MySQL Dump
--
-- Host: 
-- Generated: Sun, 27 Jul 2025 06:29:00 -0500
-- PHP Version: 8.2.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";;;;;_lifetechend;;;;;

--
-- Database: ``
--

-- ------------------------------------------------------------

--
-- Table structure for table `tb_book`
--

CREATE TABLE IF NOT EXISTS `tb_book` (
  `lt_id` bigint(15) DEFAULT NULL,
  `lt_table_status` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;;;;_lifetechend;;;;;

