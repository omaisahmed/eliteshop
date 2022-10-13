-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 01:34 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eliteshoppy`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `pcategory` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pprice` varchar(50) NOT NULL,
  `dprice` varchar(50) NOT NULL,
  `pdescription` varchar(50) NOT NULL,
  `pimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pcode`, `pcategory`, `pname`, `pprice`, `dprice`, `pdescription`, `pimage`) VALUES
(1, 'C-0001', 'mens', 'Formal Blue Shirt', '600', '650', 'Formal Blue Shirt', 'images/logo.JPG'),
(2, 'C-00010', 'womens', 'Sleeveless Solid Blue Top', '1200', '1250', 'Sleeveless Solid Blue Top', 'images/w2.jpg'),
(3, 'C-00011', 'womens', 'Skinny Jeans', '1200', '1250', 'Skinny Jeans', 'images/w3.jpg'),
(4, 'C-00012', 'womens', 'Black Basic Shorts', '900', '950', 'Black Basic Shorts', 'images/w4.jpg'),
(5, 'C-00013', 'womens', 'Pink Track Pants', '950', '1000', 'Pink Track Pants', 'images/w5.jpg'),
(6, 'C-00014', 'womens', 'Analog Watch', '1500', '1550', 'Analog Watch', 'images/w6.jpg'),
(7, 'C-00015', 'womens', 'Ankle Length Socks', '350', '400', 'Ankle Length Socks', 'images/w7.jpg'),
(8, 'C-00016', 'womens', 'Reebok Women\'s Tights', '400', '450', 'Reebok Women\'s Tights', 'images/w8.jpg'),
(9, 'C-00017', 'bags', 'Laptop Messenger Bag', '1800', '1900', 'Laptop Messenger Bag', 'images/b1.jpg'),
(10, 'C-00018', 'bags', 'Puma Backpack', '2000', '2100', 'Puma Backpack', 'images/b2.jpg'),
(11, 'C-00019', 'bags', 'Laptop Backpack', '1800', '2000', 'Laptop Backpack', 'images/b3.jpg'),
(12, 'C-0002', 'mens', 'Gabi Full Sleeve Sweatshirt', '500', '550', 'Gabi Full Sleeve Sweatshirt', 'images/m2.jpg'),
(13, 'C-00020', 'bags', 'Travel Duffel Bag', '2200', '2400', 'Travel Duffel Bag', 'images/b4.jpg'),
(14, 'C-00021', 'bags', 'Hand-held Bag', '2500', '2700', 'Hand-held Bag', 'images/b5.jpg'),
(15, 'C-00022', 'bags', 'Butterflies Bag', '2800', '3000', 'Butterflies Bag', 'images/b6.jpg'),
(16, 'C-00023', 'bags', 'Costa Swiss Bag', '3000', '3300', 'Costa Swiss Bag', 'images/b7.jpg'),
(17, 'C-00024', 'bags', 'Noble Designs Bag', '2800', '3000', 'Noble Designs Bag', 'images/b8.jpg'),
(18, 'C-00025', 'footwear', 'Running Shoes', '3000', '3500', 'Running Shoes', 'images/s1.jpg'),
(19, 'C-00026', 'footwear', 'Shoetopia Lace Up', '2500', '2800', 'Shoetopia Lace Up', 'images/s2.jpg'),
(20, 'C-00027', 'footwear', 'Steemo Casuals(Black)', '2800', '3000', 'Steemo Casuals(Black)', 'images/s3.jpg'),
(21, 'C-00028', 'footwear', 'Benetton Flip Flops', '2500', '2800', 'Benetton Flip Flops', 'images/s4.jpg'),
(22, 'C-00029', 'footwear', 'Moonwalk Bellies', '2000', '2200', 'Moonwalk Bellies', 'images/s5.jpg'),
(23, 'C-0003', 'mens', 'Dark Blue Track Pants', '450', '500', 'Dark Blue Track Pants', 'images/m3.jpg'),
(24, 'C-00030', 'footwear', 'Aero Canvas Loafers', '2700', '2900', 'Aero Canvas Loafers', 'images/s6.jpg'),
(25, 'C-00031', 'footwear', 'Sparx Sporty Canvas Shoes', '3500', '3800', 'Sparx Sporty Canvas Shoes', 'images/s7.jpg'),
(26, 'C-00032', 'footwear', 'Women BLACK Heels', '3200', '3500', 'Women BLACK Heels', 'images/s8.jpg'),
(27, '', 'tshirt', 'tshirt', '600', '650', 'tshirt', 'images/00.jpg'),
(28, 'C-0004', 'mens', 'Round Neck Black T-Shirt', '400', '450', 'Round Neck Black T-Shirt', 'images/m4.jpg'),
(29, 'C-0005', 'mens', 'Men\'s Black Jeans', '500', '550', 'Men\'s Black Jeans', 'images/m5.jpg'),
(30, 'C-0006', 'mens', 'Reversible Belt', '300', '350', 'Reversible Belt', 'images/m6.jpg'),
(31, 'C-0007', 'mens', 'Analog Watch', '700', '750', 'Analog Watch', 'images/m7.jpg'),
(32, 'C-0008', 'mens', 'Party Men\'s Blazer', 'Rs.650', 'Rs.700', 'Party Men\'s Blazer', 'images/m8.jpg'),
(33, 'C-0009', 'womens', 'A-line Black Skirt', 'Rs.1000', 'Rs.1050', 'A-line Black Skirt', 'images/w1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
