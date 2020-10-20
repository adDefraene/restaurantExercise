-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2020 at 02:38 PM
-- Server version: 5.7.19
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_poo`
--
CREATE DATABASE IF NOT EXISTS `restaurant_poo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `restaurant_poo`;

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

DROP TABLE IF EXISTS `dishes`;
CREATE TABLE IF NOT EXISTS `dishes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dish` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `dish`, `image`, `price`, `description`) VALUES
(1, 'La classica', 'pizza4.jpg', '8.95', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt obcaecati nesciunt fugiat minus culpa veniam et ratione earum, eum omnis est quod! Magni, labore! Aliquam culpa praesentium unde temporibus quas id possimus ipsam iusto.'),
(2, 'Quiche pizza', 'pizza3.jpg', '11.95', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt obcaecati nesciunt fugiat minus culpa veniam et ratione earum, eum omnis est quod! Magni, labore! Aliquam culpa praesentium unde temporibus quas id possimus ipsam iusto.'),
(3, 'La Napoletana', 'Pizza2.jpg', '10.95', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt obcaecati nesciunt fugiat minus culpa veniam et ratione earum, eum omnis est quod! Magni, labore! Aliquam culpa praesentium unde temporibus quas id possimus ipsam iusto.'),
(4, 'Alpina\'s descent', 'pizza1.jpg', '13.95', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt obcaecati nesciunt fugiat minus culpa veniam et ratione earum, eum omnis est quod! Magni, labore! Aliquam culpa praesentium unde temporibus quas id possimus ipsam iusto.'),
(5, 'Sea\'s tresures', 'scampis.jpg', '14.95', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt obcaecati nesciunt fugiat minus culpa veniam et ratione earum, eum omnis est quod! Magni, labore! Aliquam culpa praesentium unde temporibus quas id possimus ipsam iusto.'),
(6, 'Chef\'s lasagna', 'lasagna.jpg', '12.95', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt obcaecati nesciunt fugiat minus culpa veniam et ratione earum, eum omnis est quod! Magni, labore! Aliquam culpa praesentium unde temporibus quas id possimus ipsam iusto.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `order_date` date NOT NULL,
  `order_hour` time NOT NULL,
  `id_dish` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `order_date`, `order_hour`, `id_dish`) VALUES
(1, 'Jean', '0479201999', '2020-10-21', '20:30:00', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
