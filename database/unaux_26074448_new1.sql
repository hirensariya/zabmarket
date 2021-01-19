-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql101.unaux.com
-- Generation Time: Jan 19, 2021 at 05:10 AM
-- Server version: 5.6.21-69.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unaux_26074448_new1`
--

-- --------------------------------------------------------

--
-- Table structure for table `limited`
--

CREATE TABLE `limited` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `limited`
--

INSERT INTO `limited` (`id`, `image`, `name`, `cat`, `dis`) VALUES
(1, 'image/34.png', 'Mouse', 'Electronics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(2, 'image/30.png', 'Keybord', 'Electronics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(3, 'image/21.png', 'Printing Paper', 'Paper', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(4, 'image/54.png', 'Ram', 'Electronics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(5, 'image/25.png', 'Core i3 Processor', 'Electronics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(6, 'image/02.png', 'Laptop', 'Electronics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias. ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `name`, `cat`, `dis`) VALUES
(8, 'image/01.png', 'Mouse', 'Electronics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(9, 'image/02.png', 'Laptop', 'Electronics\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(10, 'image/04.png', 'Camera', 'Electronics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(11, 'image/13.png', 'Passport Cover', 'Cover', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(12, 'image/14.png', 'Passport Cover', 'Cover', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(13, 'image/06.png', 'Printer', 'Electronics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.'),
(14, 'image/29.png', 'Keybord', 'Electronics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `limited`
--
ALTER TABLE `limited`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `limited`
--
ALTER TABLE `limited`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
