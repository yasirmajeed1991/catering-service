-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220918.6792b17e72
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 03:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `user_name`, `email`, `password`, `mobileno`) VALUES
(6, 'admin', 'test@test.com', 'admin', '0000000000'),
(8, 'admin12', 'admin12@test.com', 'admin12', '000000000');

-- --------------------------------------------------------

--
-- Table structure for table `bartanitemlist`
--

CREATE TABLE `bartanitemlist` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `gujrati` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bartanitemlist`
--

INSERT INTO `bartanitemlist` (`id`, `item`, `gujrati`) VALUES
(1, '23eeee', 'ભારતીય બ્રેડ'),
(2, 'fasdfa', 'લાઈવ કાઉન્ટર'),
(3, 'fadfasfasfsafs', 'ભારતીય બ્રેડ'),
(4, 'fasdfa', 'દાળ ચોખા'),
(5, 'Item1333', 'વધારાનું કાઉન્ટર'),
(6, 'asd', 'વધારાનું કાઉન્ટર');

-- --------------------------------------------------------

--
-- Table structure for table `bartanlists`
--

CREATE TABLE `bartanlists` (
  `id` int(11) NOT NULL,
  `generatedid` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bartanlists`
--

INSERT INTO `bartanlists` (`id`, `generatedid`, `item`, `item_id`, `quantity`) VALUES
(5, '88432460', 'ભારતીય બ્રેડ', '1', '45'),
(6, '88432460', 'લાઈવ કાઉન્ટર', '2', '1250'),
(7, '88432460', 'ભારતીય બ્રેડ', '3', '1250'),
(8, '88432460', 'દાળ ચોખા', '4', '45'),
(9, '88432460', 'વધારાનું કાઉન્ટર', '5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `gujrati` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `gujrati`) VALUES
(1, 'WELCOE DRINK', 'પીણું સ્વાગત છે'),
(2, 'SALAD', 'સલાડ'),
(3, 'FARASAN', 'ફરસાણ'),
(4, 'MOVING STARTER', 'મૂવિંગ સ્ટાર્ટર'),
(5, 'SWEET', 'સ્વીટ'),
(6, 'DAL RICE', 'દાળ ચોખા'),
(7, 'SOUP', 'સૂપ'),
(8, 'SABJI', 'શાક'),
(9, 'OTHER', 'અન્ય'),
(10, 'LIVE COUNTER', 'લાઈવ કાઉન્ટર'),
(11, 'INDIAN BREAD', 'ભારતીય બ્રેડ'),
(12, 'EXTRA COUNTER', 'વધારાનું કાઉન્ટર');

-- --------------------------------------------------------

--
-- Table structure for table `kiranaitemlist`
--

CREATE TABLE `kiranaitemlist` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `gujrati` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kiranaitemlist`
--

INSERT INTO `kiranaitemlist` (`id`, `item`, `gujrati`) VALUES
(2, 'Item1333a', 'લાઈવ કાઉન્ટર'),
(3, 'fasd12', 'મૂવિંગ સ્ટાર્ટર'),
(4, 'fasdfa', 'ભારતીય બ્રેડ'),
(5, 'Item1', 'લાઈવ કાઉન્ટર'),
(6, 'fasd12sss', 'મૂવિંગ સ્ટાર્ટર'),
(8, 'Item1', 'ભારતીય બ્રેડ');

-- --------------------------------------------------------

--
-- Table structure for table `kiranalists`
--

CREATE TABLE `kiranalists` (
  `id` int(11) NOT NULL,
  `generatedid` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `kg` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kiranalists`
--

INSERT INTO `kiranalists` (`id`, `generatedid`, `item`, `item_id`, `kg`, `gram`) VALUES
(175, '18069370', 'લાઈવ કાઉન્ટર', '2', '45', ''),
(176, '18069370', 'મૂવિંગ સ્ટાર્ટર', '3', '45', ''),
(177, '18069370', 'ભારતીય બ્રેડ', '4', '45', ''),
(178, '18069370', 'મૂવિંગ સ્ટાર્ટર', '6', '1250', '1250'),
(179, '18069370', 'ભારતીય બ્રેડ', '8', '', '1250');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `functionvenue` varchar(255) NOT NULL,
  `functiondate` varchar(255) NOT NULL,
  `extracharges` varchar(255) NOT NULL,
  `pro` varchar(255) NOT NULL,
  `boys` varchar(255) NOT NULL,
  `decoration` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `noperson` varchar(255) NOT NULL,
  `advance` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `name`, `date`, `address`, `mobile`, `time`, `functionvenue`, `functiondate`, `extracharges`, `pro`, `boys`, `decoration`, `rate`, `noperson`, `advance`, `item`) VALUES
(22, 'test', '2022-09-23', 'test', '23333333', '18:21', 'fasdf', '2022-09-23', '0', '0', '0', '0', '2', '250', '12', '[\"59\"]'),
(23, 'test', '2022-09-23', 'test', '23333333', '18:21', 'fasdf', '2022-09-23', '0', '0', '0', '0', '9', '250', '12', '[\"59\",\"60\",\"61\"]');

-- --------------------------------------------------------

--
-- Table structure for table `sabjiitemlist`
--

CREATE TABLE `sabjiitemlist` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `gujrati` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sabjiitemlist`
--

INSERT INTO `sabjiitemlist` (`id`, `item`, `gujrati`) VALUES
(17, 'palak11', 'લાઈવ કાઉન્ટર'),
(22, 'Item1', 'વધારાનું કાઉન્ટર'),
(23, 'asd', 'ભારતીય બ્રેડ'),
(24, 'Item12', 'ભારતીય બ્રેડ'),
(25, 'Item1333', 'જીરા ચોખા'),
(26, 'asd23', 'વધારાનું કાઉન્ટર'),
(27, 'Item1423', 'વધારાનું કાઉન્ટર'),
(28, 'fasd1223', 'વધારાનું કાઉન્ટર'),
(29, 'Item123232', 'મૂવિંગ સ્ટાર્ટર'),
(30, 'fasdfa', 'ભારતીય બ્રેડ');

-- --------------------------------------------------------

--
-- Table structure for table `sabjilists`
--

CREATE TABLE `sabjilists` (
  `id` int(11) NOT NULL,
  `generatedid` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `kg` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sabjilists`
--

INSERT INTO `sabjilists` (`id`, `generatedid`, `item`, `item_id`, `kg`, `gram`) VALUES
(187, '58283602', 'લાઈવ કાઉન્ટર', '17', '45', ''),
(188, '58283602', 'વધારાનું કાઉન્ટર', '22', '45', ''),
(189, '58283602', 'ભારતીય બ્રેડ', '23', '1250', ''),
(190, '58283602', 'ભારતીય બ્રેડ', '24', '1250', ''),
(191, '58283602', 'જીરા ચોખા', '25', '45', ''),
(192, '58283602', 'વધારાનું કાઉન્ટર', '26', '', '45'),
(193, '58283602', 'વધારાનું કાઉન્ટર', '27', '', '1250'),
(194, '58283602', 'વધારાનું કાઉન્ટર', '28', '', '45'),
(195, '58283602', 'મૂવિંગ સ્ટાર્ટર', '29', '', '45');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `gujrati` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `cat_id`, `item`, `gujrati`, `price`) VALUES
(53, 60, 'Veg. Sizzler', '', 0),
(54, 60, 'Veg. Krispy', '', 0),
(55, 61, 'Palak Methi Paratha', '', 0),
(56, 61, 'Fulka Roti', '', 0),
(59, 6, 'fadfasfasfsafs', 'fadfasfasfsafs', 2),
(60, 6, 'fasdfa', 'fasdfa', 3),
(61, 6, 'Item1333', 'fasdfa', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `bartanitemlist`
--
ALTER TABLE `bartanitemlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bartanlists`
--
ALTER TABLE `bartanlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kiranaitemlist`
--
ALTER TABLE `kiranaitemlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kiranalists`
--
ALTER TABLE `kiranalists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sabjiitemlist`
--
ALTER TABLE `sabjiitemlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sabjilists`
--
ALTER TABLE `sabjilists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bartanitemlist`
--
ALTER TABLE `bartanitemlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bartanlists`
--
ALTER TABLE `bartanlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `kiranaitemlist`
--
ALTER TABLE `kiranaitemlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kiranalists`
--
ALTER TABLE `kiranalists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sabjiitemlist`
--
ALTER TABLE `sabjiitemlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sabjilists`
--
ALTER TABLE `sabjilists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
