-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 01:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be15_cr12_mount_everest_sanjakostantinovic`
--
CREATE DATABASE IF NOT EXISTS `be15_cr12_mount_everest_sanjakostantinovic` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `be15_cr12_mount_everest_sanjakostantinovic`;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `latitude` decimal(11,8) DEFAULT NULL,
  `longitude` decimal(10,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `name`, `price`, `description`, `picture`, `latitude`, `longitude`) VALUES
(1, 'Paris', 200, 'Paris is a city unlike any other. It is overflowing with culture, history, and beauty. And while people travel to Paris to see the Louvre, climb the Eiffel Tower, or see Notre-Dame, the real magic is found in the streets. ', '6246bbec71911.jpg', '48.86644928', '2.33466767'),
(3, 'Budapest', 111, 'The modern-day Budapest results from the amalgamation of two historic cities lying right opposite each other over the Danube river. Buda is the western (left) bank side, with the high hill atop which the Buda castle sits. Pest is the relatively flat easte', 'budapest.jpg', '47.47994412', '19.05611400'),
(5, 'Belgrade', 130, 'Though it may come as a surprise to some, Belgrade has a plethora of places to visit. The Belgrade Fortress, one of the most important historical monuments in Serbia, sits on the best location in town: overlooking the confluence of both rivers. Everyone i', '624787ea7ba1b.jpg', '44.80710879', '20.44179027'),
(6, 'London', 110, 'London\'s iconic skyline is an eclectic combination of instantly recognisable landmarks, from the historic Tower of London to the ultra-modern skyscrapers of The Shard and 20 Fenchurch. A walk through the Square Mile immerses you in the original Roman sett', '624788e81819d.jpg', '51.48214906', '-0.08240144'),
(7, 'Moscow', 220, 'The city is home to several UNESCO World Heritage Sites, and is well known for its display of Russian architecture, particularly its historic Red Square, and buildings such as the Saint Basil\'s Cathedral and the Moscow Kremlin.', '62478bf1186b5.jpg', '55.69082028', '37.62437561'),
(8, 'Bratislava', 50, 'In the Old Town you can’t miss the main square – Hlavne Namestie – including the courtyard of the old town hall (Stara Radnica) as well as the national theatre and St. Martin’s Cathedral.', '62478f0c384fb.jpg', '48.16089258', '17.10492290'),
(9, 'Prague', 80, 'Prague is known for its diverse architecture and museums, along with its abundant and cheap nightlife, and extensive shopping options. It is also famous for its hearty food and cheap beer, along with its well maintained UNESCO World Heritage city Centre.', '6247914b18238.jpg', '50.07255534', '14.45460513'),
(10, 'Madrid', 215, 'Madrid is home to a collection of the world\'s best art galleries, and the three most famous are handily located close to each other in a triangle.', '624792e727f78.jpg', '40.41121125', '-3.70357885'),
(11, 'Zurich', 220, 'So mach attractions, such as the old town, Swiss National Museum, Fraumunster Church, and Bahnhofstrasse, and includes a scenic ferry ride across Lake Zurich', '6247940974780.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
