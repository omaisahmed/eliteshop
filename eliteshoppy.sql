-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 05:27 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `adminpassword`) VALUES
('omais', '123'),
('ali', '123');

-- --------------------------------------------------------

--
-- Table structure for table `popularproducts`
--

CREATE TABLE `popularproducts` (
  `pcode` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popularproducts`
--

INSERT INTO `popularproducts` (`pcode`, `id`) VALUES
('C-0001', 1),
('C-00010', 10),
('C-0002', 2),
('C-0003', 3),
('C-0004', 4),
('C-0005', 5),
('C-0006', 6),
('C-0007', 7),
('C-0008', 8),
('C-0009', 9);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
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

INSERT INTO `products` (`pcode`, `pcategory`, `pname`, `pprice`, `dprice`, `pdescription`, `pimage`) VALUES
('C-0001', 'mens', 'Formal Blue Shirt', '600', '650', 'Formal Blue Shirt', 'images/m1.jpg'),
('C-00010', 'womens', 'Sleeveless Solid Blue Top', '1200', '1250', 'Sleeveless Solid Blue Top', 'images/w2.jpg'),
('C-00011', 'womens', 'Skinny Jeans', '1200', '1250', 'Skinny Jeans', 'images/w3.jpg'),
('C-00012', 'womens', 'Black Basic Shorts', '900', '950', 'Black Basic Shorts', 'images/w4.jpg'),
('C-00013', 'womens', 'Pink Track Pants', '950', '1000', 'Pink Track Pants', 'images/w5.jpg'),
('C-00014', 'womens', 'Analog Watch', '1500', '1550', 'Analog Watch', 'images/w6.jpg'),
('C-00015', 'womens', 'Ankle Length Socks', '350', '400', 'Ankle Length Socks', 'images/w7.jpg'),
('C-00016', 'womens', 'Reebok Women\'s Tights', '400', '450', 'Reebok Women\'s Tights', 'images/w8.jpg'),
('C-00017', 'bags', 'Laptop Messenger Bag', '1800', '1900', 'Laptop Messenger Bag', 'images/b1.jpg'),
('C-00018', 'bags', 'Puma Backpack', '2000', '2100', 'Puma Backpack', 'images/b2.jpg'),
('C-00019', 'bags', 'Laptop Backpack', '1800', '2000', 'Laptop Backpack', 'images/b3.jpg'),
('C-0002', 'mens', 'Gabi Full Sleeve Sweatshirt', '500', '550', 'Gabi Full Sleeve Sweatshirt', 'images/m2.jpg'),
('C-00020', 'bags', 'Travel Duffel Bag', '2200', '2400', 'Travel Duffel Bag', 'images/b4.jpg'),
('C-00021', 'bags', 'Hand-held Bag', '2500', '2700', 'Hand-held Bag', 'images/b5.jpg'),
('C-00022', 'bags', 'Butterflies Bag', '2800', '3000', 'Butterflies Bag', 'images/b6.jpg'),
('C-00023', 'bags', 'Costa Swiss Bag', '3000', '3300', 'Costa Swiss Bag', 'images/b7.jpg'),
('C-00024', 'bags', 'Noble Designs Bag', '2800', '3000', 'Noble Designs Bag', 'images/b8.jpg'),
('C-00025', 'footwear', 'Running Shoes', '3000', '3500', 'Running Shoes', 'images/s1.jpg'),
('C-00026', 'footwear', 'Shoetopia Lace Up', '2500', '2800', 'Shoetopia Lace Up', 'images/s2.jpg'),
('C-00027', 'footwear', 'Steemo Casuals(Black)', '2800', '3000', 'Steemo Casuals(Black)', 'images/s3.jpg'),
('C-00028', 'footwear', 'Benetton Flip Flops', '2500', '2800', 'Benetton Flip Flops', 'images/s4.jpg'),
('C-00029', 'footwear', 'Moonwalk Bellies', '2000', '2200', 'Moonwalk Bellies', 'images/s5.jpg'),
('C-0003', 'mens', 'Dark Blue Track Pants', '450', '500', 'Dark Blue Track Pants', 'images/m3.jpg'),
('C-00030', 'footwear', 'Aero Canvas Loafers', '2700', '2900', 'Aero Canvas Loafers', 'images/s6.jpg'),
('C-00031', 'footwear', 'Sparx Sporty Canvas Shoes', '3500', '3800', 'Sparx Sporty Canvas Shoes', 'images/s7.jpg'),
('C-00032', 'footwear', 'Women BLACK Heels', '3200', '3500', 'Women BLACK Heels', 'images/s8.jpg'),
('C-0004', 'mens', 'Round Neck Black T-Shirt', '400', '450', 'Round Neck Black T-Shirt', 'images/m4.jpg'),
('C-0005', 'mens', 'Men\'s Black Jeans', '500', '550', 'Men\'s Black Jeans', 'images/m5.jpg'),
('C-0006', 'mens', 'Reversible Belt', '300', '350', 'Reversible Belt', 'images/m6.jpg'),
('C-0007', 'mens', 'Analog Watch', '700', '750', 'Analog Watch', 'images/m7.jpg'),
('C-0008', 'mens', 'Party Men\'s Blazer', 'Rs.650', 'Rs.700', 'Party Men\'s Blazer', 'images/m8.jpg'),
('C-0009', 'womens', 'A-line Black Skirt', 'Rs.1000', 'Rs.1050', 'A-line Black Skirt', 'images/w1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`, `confirmpassword`) VALUES
('omais', 'decentomais90@gmail.com', '03152230228', '122'),
('omais', 'decentomais90@gmail.com', '123', '123'),
('omais', 'decentomais90@gmail.com', '123', '123'),
('sd', 'decentomais500@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `popularproducts`
--
ALTER TABLE `popularproducts`
  ADD PRIMARY KEY (`pcode`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pcode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
