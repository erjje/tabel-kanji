-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2025 at 09:34 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kanji`
--

-- --------------------------------------------------------

--
-- Table structure for table `huruf`
--

CREATE TABLE `huruf` (
  `id` int NOT NULL,
  `kanji` varchar(60) NOT NULL,
  `kunyomi` varchar(60) NOT NULL,
  `onyomi` varchar(60) NOT NULL,
  `word` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `huruf`
--

INSERT INTO `huruf` (`id`, `kanji`, `kunyomi`, `onyomi`, `word`) VALUES
(1, '室', 'むろ', 'シツ', '図書室(perpustakaan)'),
(2, '綺麗い', 'きれいい', 'きれいい', '君の顔は綺麗いですね'),
(23, '可愛い', 'かわいい', 'カワイイ', '今日も可愛いですね'),
(24, '山', 'やま', 'ざん，せん', '富士山'),
(25, '車', 'くるま', 'せん', '君の車いいですね'),
(26, '愛', 'あい', 'アイ', '愛された人'),
(27, '恋愛', 'れんあい', 'レンアイ', '恋愛人はありますか？'),
(28, '恋', 'こい', 'コイ', '恋は何？？'),
(29, '勉強', 'べんきょう', 'べんきょう', '今日は勉強はがんばります。'),
(30, '食べ物', 'たべもの', '食べもの', 'この食べ物は美味しいですね。');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `huruf`
--
ALTER TABLE `huruf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `huruf`
--
ALTER TABLE `huruf`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
