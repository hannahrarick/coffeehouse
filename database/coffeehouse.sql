-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2020 at 03:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffeehouse`
--

CREATE TABLE `coffeehouse` (
  `id` int(11) NOT NULL,
  `name` varchar(140) NOT NULL,
  `city` varchar(140) NOT NULL,
  `preference` varchar(140) NOT NULL,
  `best` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coffeehouse`
--

INSERT INTO `coffeehouse` (`id`, `name`, `city`, `preference`, `best`) VALUES
(1, 'CYM', 'Gainesville', 'Iced Almond Joy Latte', 'studying and hanging out with friends! '),
(6, 'The Alchemist', 'Wilton Mannors', 'Iced Coffee', 'hanging out and taking photos'),
(7, 'Ella Cafe', 'Plantation', 'Rosemary Iced Latte', 'meeting friends'),
(8, 'Panther Coffee', 'Wynwood, Miami', 'Iced Vanilla Latte', 'A quick cup of joe, but the seating outside is nice too! '),
(9, 'Warsaw Coffee', 'Fort Lauderdale', 'Iced Honey Coffee', 'It also has a nice restaurant with good food to meet friends at '),
(10, 'Pasion Del Cielo', 'Coral Gables', 'Hawaiin Coffee', 'Trying coffee beans from around the world! '),
(11, 'C&i', 'Fort Lauderdale', 'Any drink is delicious! ', 'studying, hanging out and even photography! They are located on old train tracks. '),
(12, 'Brew Urban Cafe', 'Fort Lauderdale', 'V60 Pour Over', 'Studying and trying new coffee types'),
(13, 'Kookaburra', 'St. Augustine', 'Hot Aussie (vanilla & cream)', 'Meeting people'),
(14, 'Bay Island Coffee', 'Gainesville', 'Iced Toffee Nut Coffee', 'A quick on the go coffee! ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coffeehouse`
--
ALTER TABLE `coffeehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coffeehouse`
--
ALTER TABLE `coffeehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
