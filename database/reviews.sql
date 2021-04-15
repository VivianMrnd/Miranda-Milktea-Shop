-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 14, 2021 at 08:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

DROP TABLE IF EXISTS `tbl_review`;
CREATE TABLE IF NOT EXISTS `tbl_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(255) COLLATE utf8_bin NOT NULL,
  `feedbacks` varchar(500) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'reject',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`id`, `names`, `feedbacks`, `date`, `status`) VALUES
(29, 'Via Miranda', 'The service is good!', '2021-04-15 02:51:30', 'approve'),
(30, 'Reese Nicole', 'ill be back soon\r\n', '2021-04-15 02:51:31', 'approve'),
(31, 'Felipe', 'hey! the taste is good', '2021-04-15 02:51:32', 'approve'),
(32, 'kurt Dedios', 'Hi, service is good hope to be back again', '2021-04-15 02:51:33', 'approve'),
(33, 'Neil Lacsamana', 'Thank you for this, be back again', '2021-04-15 02:51:33', 'approve'),
(37, 'Ruel', 'My Favorite is oreo cheesecake!!!', '2021-04-15 02:51:34', 'approve'),
(35, 'Lovely Manuel', 'Loving this, unique taste', '2021-04-15 02:51:34', 'approve'),
(36, 'Dexter', 'Best kokoa mixed eva!!', '2021-04-15 02:41:49', 'reject'),
(38, 'Vincent Paul', 'The best of the best!!!', '2021-04-15 02:51:35', 'approve'),
(39, 'Vergel', 'Very nice taste, really like sweets!', '2021-04-15 02:51:36', 'approve'),
(40, 'Danica', 'Ate ang sarap po, balik po kami :)))', '2021-04-15 02:51:36', 'approve'),
(41, 'kiara', 'Balik kami dyan, da best for friendsss sarap!', '2021-04-15 02:51:37', 'approve'),
(42, 'Ben Alturo', 'Hoy! ang sarap salamat po!', '2021-04-15 02:45:40', 'reject'),
(43, 'Guillermo', 'Service is good, taste is good !!', '2021-04-15 02:51:38', 'approve'),
(44, 'Richard', 'sweetness mixed is not bad', '2021-04-15 02:47:26', 'reject'),
(45, 'tony', 'hi, will come again, its good here!!', '2021-04-15 02:51:39', 'approve'),
(46, 'tina', 'thanks for the service, the taste is really good!', '2021-04-15 02:48:47', 'reject'),
(47, 'patricia', 'best taste, its good for me', '2021-04-15 02:49:03', 'reject'),
(48, 'Harry', 'hala ang sarp dito hahaha next time ulit :)', '2021-04-15 02:53:34', 'reject'),
(49, 'Roque', 'Its good be back again soon', '2021-04-15 02:53:50', 'reject'),
(50, 'villa', 'hoy anak proud ako ang sarap dito', '2021-04-15 02:54:07', 'reject'),
(52, 'Rico Yan', 'thanks for this love it', '2021-04-15 02:55:41', 'reject'),
(53, 'Tan yi', 'new fave!! best flavor oreo cheesecake', '2021-04-15 02:56:10', 'reject');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
