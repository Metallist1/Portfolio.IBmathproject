-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2018 at 08:03 PM
-- Server version: 5.5.60
-- PHP Version: 5.5.38-1~dotdeb+7.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mathprogram`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `questions` varchar(170) NOT NULL,
  `answers` varchar(170) NOT NULL DEFAULT '0',
  `level` int(5) NOT NULL DEFAULT '0',
  `points` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questions`, `answers`, `level`, `points`) VALUES
(1, '2+2', '4', 1, 5),
(2, '5+6', '11', 1, 5),
(3, '3+8', '11', 1, 5),
(4, '90+60+30+10 ', '190', 2, 10),
(5, '5 x 9 ', '54', 2, 10),
(6, '4 + 7 - 5 - 5', '3', 2, 10),
(7, '30 + 80', '110', 2, 10),
(8, '8+9', '17', 1, 5),
(9, '63*2', '126', 3, 15),
(10, '18*4', '72', 3, 15),
(11, '11*7', '77', 3, 15),
(12, '12*1', '12', 3, 15),
(13, '13*3', '39', 3, 15),
(14, '14*5', '70', 3, 15),
(15, '10*6', '60', 3, 15),
(16, '15*4', '60', 3, 15),
(17, '47*3', '141', 3, 15),
(18, '23*4', '92', 3, 15),
(19, '14*3', '42', 3, 15),
(20, '30*2', '60', 3, 15),
(21, '77*3', '231', 3, 15),
(22, '60*8', '480', 3, 15),
(23, '0,2+0,09', '0,29', 4, 20),
(24, '0,16+1,8', '1,96', 4, 20),
(25, '1,6+1,6', '3,2', 4, 20),
(26, '0,11+1,3', '1,41', 4, 20),
(27, '48446-42029', '6417', 4, 20),
(28, '74765-26591', '48174', 4, 20),
(29, '1015-100', '915', 4, 20),
(30, '4926-700', '4226', 4, 20),
(31, '10+30+30+70', '140', 4, 20),
(32, '50+60+20+90', '220', 4, 20),
(33, '7-2', '5', 1, 5),
(34, '19-7', '12', 1, 5),
(35, '16-6', '10', 1, 5),
(36, '13-0', '13', 1, 5),
(37, '4-1', '3', 1, 5),
(38, '1-1', '0', 1, 5),
(39, '271-50', '221', 2, 10),
(40, '791-20', '771', 2, 10),
(41, '3*3', '9', 2, 10),
(42, '5*3', '15', 2, 10),
(43, '7*2', '14', 2, 10),
(44, '4*3', '12', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(17) NOT NULL,
  `password` varchar(128) NOT NULL,
  `Questions_Answered_1` int(17) NOT NULL DEFAULT '0',
  `Questions_Answered_2` int(17) NOT NULL DEFAULT '0',
  `Questions_Answered_3` int(17) NOT NULL DEFAULT '0',
  `Questions_Answered_4` int(17) NOT NULL DEFAULT '0',
  `Points_gained` int(17) NOT NULL DEFAULT '0',
  `Timeplayed` int(128) NOT NULL DEFAULT '0',
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Questions_Answered_4` (`Questions_Answered_4`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Questions_Answered_1`, `Questions_Answered_2`, `Questions_Answered_3`, `Questions_Answered_4`, `Points_gained`, `Timeplayed`, `Admin`) VALUES
(1, 'Nedas', '0bebfddd07435352bb6713c797d91924c50275e846bdc1e84009aba062accc5b', 0, 0, 0, 0, 0, 0, 0),
(2, '1525251Nedas', '0cf7ce9c28733c93004f99cf9eaeaf00b599a848ef00a51bb23597eae18a5e30', 0, 0, 0, 0, 0, 0, 0),
(3, 'kkkkkkkkkkkk', 'a5a2346f01ef81945c74488a8c12c7ad802d892a0e8f2fea04e6c6f632ecf71b', 0, 0, 0, 0, 0, 0, 0),
(4, 'Adomas', '544096d88dc10e8897c13e018ef1e4c1da3530e3aac2e2ae6ea8194c74889429', 0, 0, 0, 0, 0, 0, 0),
(5, 'Ileiks', '9cc7a3104401ad29be97bf175d9f994e6a242451516dacad0433da970bafa823', 0, 0, 0, 0, 0, 0, 0),
(6, 'Nedas13', 'dcf80454f8cd260d6c8101b2bcfb83f89bc5b65f5f122303722bbf293eba4b44', 0, 0, 0, 0, 0, 0, 0),
(7, 'Test', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 11, 0, 0, 0, 93, 56, 0),
(8, 'Nedasssas', '2c95d9efc9f77c1a7405e7a6d007a7177056ddec7059bcd3ab827050e6d6d00f', 0, 0, 0, 3, 120, 18, 0),
(9, 'Janny15', '10175d63531b7a4aa752bb133b09b29f745ec36b7d3a66fc95c48c89e677e698', 4, 0, 0, 0, 172, 14, 0),
(10, 'Kentukas', 'dcf80454f8cd260d6c8101b2bcfb83f89bc5b65f5f122303722bbf293eba4b44', 0, 0, 0, 0, 0, 0, 0),
(11, 'Matas', '8f051fd3767bb4dfc81270f746ced752d8c22b6bc79df16583eb68a36224e321', 0, 0, 0, 0, 834, 26, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
