-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 12:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(4, 'APPETIZERS'),
(5, 'MAINS'),
(6, 'DESSERTS'),
(7, 'BEVERAGES');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`) VALUES
(14, 4, 'Cheesy Fries', 90, 'upload/fries_1686339250.jpg'),
(15, 4, 'Garlic Bread', 80, 'upload/garlic bread_1686339289.jpg'),
(16, 4, 'Crispy Chicken Fingers', 115, 'upload/chickenfingers_1686339281.jpg'),
(17, 4, 'Calamares', 110, 'upload/calamares_1686339242.webp'),
(18, 4, 'Chicken Caesar Salad', 120, 'upload/ceasarsalad_1686339259.jpg'),
(19, 4, 'Kani Salad', 120, 'upload/kanisalad_1686339299.jpeg'),
(20, 4, 'Spring Rolls', 110, 'upload/springrolls_1686339329.jpg'),
(21, 4, 'Soup of the Day', 120, 'upload/soup_1686339320.jpg'),
(22, 4, 'Cream of Mushroom Soup', 100, 'upload/mushroomsoup_1686339270.jpg'),
(23, 4, 'Nachos', 80, 'upload/nachos_1686339314.jpg'),
(24, 4, 'Mozzarella Sticks', 90, 'upload/mozzarelasticks_1686339307.jpg'),
(25, 4, 'Beef Quesadillas', 85, 'upload/beef_1686339233.jpg'),
(26, 5, 'Bacon Cheeseburger', 150, 'upload/bacon_1686340070.jpeg'),
(27, 5, 'Vegan Burger ', 90, 'upload/cream-of-mushoom-soup_thecozyapron_1.jpg'),
(28, 5, 'Cordon Bleu', 120, 'upload/cordon_1686340130.jpg'),
(29, 5, 'Ribs with Barbeque Sauce', 120, 'upload/ribs_1686340253.jpg'),
(30, 5, 'Chicken Sandwich', 125, 'upload/chicksand_1686340081.jpg'),
(31, 5, 'Tuna Sandwich', 100, 'upload/tuna_1686340269.webp'),
(32, 5, 'Clubhouse Sandwich', 100, 'upload/clubhouse_1686340123.jpg'),
(33, 5, 'Aglio Olio Pasta', 110, 'upload/aglio_1686340057.jpg'),
(34, 5, 'Creamy Carbonara', 130, 'upload/carbonara_1686340137.jpg'),
(35, 5, 'Spaghetti with Meatballs', 125, 'upload/spagetti_1686340261.png'),
(36, 5, 'Pizza Margherita', 200, 'upload/margherita_1686340246.jpg'),
(39, 6, 'Glazed Donut', 80, 'upload/glazed_1686340762.jpg'),
(40, 6, 'Chocolate Donut', 90, 'upload/choco_1686340739.jpg'),
(41, 6, 'New York Cheesecake', 120, 'upload/ny_1686340789.jpg'),
(42, 6, 'Blueberry Cheesecake', 130, 'upload/bb_1686340713.jpg'),
(43, 6, 'Cinnamon Bun', 100, 'upload/cinnamon_1686340752.jpg'),
(44, 6, 'Brownie', 110, 'upload/brownie_1686340723.jpg'),
(45, 6, 'Banoffee Pie', 120, 'upload/banoffee_1686340705.jpg'),
(46, 6, 'Carrot Cake', 100, 'upload/carrot_1686340730.jpg'),
(47, 6, 'Sinful Chocolate Cake', 80, 'upload/sinful_1686340817.webp'),
(48, 6, 'Tiramisu', 90, 'upload/tiramisu_1686340829.jpg'),
(49, 6, 'Leche Flan', 85, 'upload/leche_1686340771.jpg'),
(52, 7, 'Salted Caramel Latte', 120, 'upload/salted caramel_1686341278.webp'),
(53, 7, 'Spanish Latte', 120, 'upload/spanish_1686341269.webp'),
(54, 7, 'White Chocolate Mocha', 125, 'upload/white_1686341252.jpg'),
(55, 7, 'Matcha Latte', 130, 'upload/matcha latte_1686341294.webp'),
(56, 7, 'Chocolate Frappucino', 100, 'upload/chocofrap_1686341327.jpg'),
(57, 7, 'Strawberry Frappucino', 110, 'upload/strawb_1686341261.png'),
(58, 7, 'Matcha Frappucino', 130, 'upload/matcha drap_1686341302.jpg'),
(59, 7, 'Peach Soda', 110, 'upload/peach_1686341287.jpg'),
(60, 7, 'Lime Soda', 110, 'upload/lime_1686341316.jpg'),
(61, 7, 'Blueberry Soda', 120, 'upload/bsoda_1686341247.jpg'),
(68, 6, 'Oatmeal Cookies', 80, 'upload/oatmeal_1686340799.jpg'),
(69, 5, 'Hawaiian Pizza', 220, 'upload/hawaiian_1686340165.webp');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseid` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `pdid` int(11) NOT NULL,
  `purchaseid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`pdid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
