-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 08:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_mgt_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'bhaskar', '123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `booking_date` date NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `h_id` int(20) NOT NULL,
  `h_name` varchar(200) NOT NULL,
  `r_id` int(10) NOT NULL,
  `r_no` varchar(20) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_id`, `c_email`, `c_name`, `booking_date`, `check_in`, `check_out`, `h_id`, `h_name`, `r_id`, `r_no`, `payment`) VALUES
(38, 3, 'demo@gmail.com', 'demo ', '2020-06-20', '2020-06-20', '2020-06-22', 19, 'ITC Maurya', 79, '107', 'COD'),
(42, 1, 'bhaskar@gmail.com', 'fdsf', '2020-06-21', '2020-06-21', '2020-06-23', 19, 'ITC Maurya', 75, '101', 'COD'),
(43, 1, 'bhaskar@gmail.com', 'asdfgf', '2020-06-21', '2020-06-21', '2020-06-23', 14, 'The Oberoi Rajvilas', 35, '101', 'COD'),
(44, 5, 'harikant@gmail.com', 'harikant from up', '2020-06-22', '2020-06-22', '2020-06-24', 15, 'Rambhag Palace', 46, '101', 'COD'),
(45, 9, 'bharat@gmail.com', 'vimal kumar sharma ', '2020-06-22', '2020-06-22', '2020-06-24', 16, 'The Lalit ', 56, '102', 'COD'),
(46, 1, 'bhaskar@gmail.com', 'hfjk', '2020-06-22', '2020-06-22', '2020-06-24', 14, 'The Oberoi Rajvilas', 36, '102', 'COD'),
(48, 10, 'priya@gmail.com', 'bhSKr', '2020-06-22', '2020-06-23', '2020-06-25', 14, 'The Oberoi Rajvilas', 37, '103', 'COD'),
(49, 10, 'priya@gmail.com', 'dsfasdf', '2020-06-23', '2020-06-23', '2020-06-25', 19, 'ITC Maurya', 78, '105', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(10) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_fathers_name` varchar(50) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_email`, `c_name`, `c_fathers_name`, `contact_no`, `address`, `password`, `confirm_pass`) VALUES
(1, 'bhaskar@gmail.com', 'Bhaskar Vashistha', 'vimal', '1234567890', '84/204', 'bhaskar@@', ''),
(2, 'a@gmail.com', 'a', 'abc', '123', 'assd', 'aaa', ''),
(3, 'demo@gmail.com', 'demo', 'demo__', '2147483647', 'asdfghjklwertyuio', 'demo', ''),
(4, 'demo@gmail.com', 'demo', 'demo__', '2147483647', 'asdfghjklwertyuio', 'demo', ''),
(5, 'harikant@gmail.com', 'harikant gupta', 'abcd', '2147483647', 'Uttar Pradesh', '123', ''),
(6, 'Prashant@gmail.com', 'prashant kumar ', 'mr .father ', '2147483647', 'india ', '123', ''),
(7, 'xyz@gmail.com', 'xyz', 'qwer', '2147483647', 'dfghjk', '123', ''),
(8, 'xyz@gmail.com', 'xyz', 'qwer', '9876543210', 'dfghjk', '123', ''),
(9, 'bharat@gmail.com', 'bharat', 'dxfgyhuj', '987654310', 'drftgyhuj', '123', ''),
(10, 'priya@gmail.com', 'Priya Tiwari', 'Vimal Kumar Sharma ', '9876543210', 'D-27 Indra Colony Niwai ', 'priya', 'priya');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `h_id` int(20) NOT NULL,
  `c_id` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `star` int(5) NOT NULL,
  `summary` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `r_id`, `h_id`, `c_id`, `booking_id`, `star`, `summary`, `date`, `status`) VALUES
(8, 46, 15, 5, 44, 3, '        good product ...', '2020-06-22', 1),
(9, 56, 16, 9, 45, 4, '        fehfjehakfhasdkfbjaehfbwehfksnfjksajkhfshfkhjgh', '2020-06-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `h_id` int(20) NOT NULL,
  `h_name` varchar(200) NOT NULL,
  `h_country` varchar(50) NOT NULL,
  `h_state` varchar(50) NOT NULL,
  `h_city` varchar(50) NOT NULL,
  `h_street` varchar(50) NOT NULL,
  `h_pincode` int(10) NOT NULL,
  `h_contact_no` varchar(13) NOT NULL,
  `h_email` varchar(50) NOT NULL,
  `h_owner_name` varchar(50) NOT NULL,
  `h_rating` varchar(10) NOT NULL,
  `h_facilities` varchar(100) NOT NULL,
  `h_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`h_id`, `h_name`, `h_country`, `h_state`, `h_city`, `h_street`, `h_pincode`, `h_contact_no`, `h_email`, `h_owner_name`, `h_rating`, `h_facilities`, `h_image`) VALUES
(14, 'The Oberoi Rajvilas', 'India', 'Rajasthan', 'Jaipur', 'Mansarovar', 302020, '2147483647', 'oberoi@gmail.com', 'Raj Oberoi', '7 star', 'Indoor Pool, Gym ,Spa', 'i1.jpg'),
(15, 'Rambhag Palace', 'India', 'Rajasthan', 'jaipur', 'Vaishali Nagar', 302019, '2147483647', 'rambhag@gmail.com', 'Maharaj Kumar', '5 star', 'Indoor Pool, Gym ,Spa,Parking', 'i2.jpg'),
(16, 'The Lalit ', 'India', 'Rajasthan', 'Jaipur', 'Sastri Nagar', 302018, '2147483647', 'lalit@gmail.com', 'lalit sharma', '3 Star', 'Indoor Pool, Gym ,Spa,Parking', 'i3.jpg'),
(17, 'Jaipur Marriott Hotel', 'India', 'Rajasthan', 'Jaipur', 'C-scheme', 302029, '2147483647', 'marriott@gmail.com', 'Bhaskar Vashistha', '7 star', 'Indoor Pool, Gym ,Spa,Parking', 'i4.jpg'),
(18, 'Courtyard by Marriott', 'India', 'Rajasthan', 'Jaipur', 'Mansarovar', 302012, '1234567890', 'courtyard@gmail.com', 'Sashi ', '7 star', 'Indoor Pool, Gym ,Spa,Parking,Pick-up and drop', 'i6.jpg'),
(19, 'ITC Maurya', 'India', 'Rajasthan', 'Jaipur', 'Mansarovar', 302011, '2147483647', 'oberoi@gmail.com', 'Harikant Gupta', '7 star', 'Indoor Pool, Gym ,Spa,Parking,Pick-up and drop', 'i7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `h_id` int(20) NOT NULL,
  `r_id` int(10) NOT NULL,
  `r_no` varchar(20) NOT NULL,
  `r_type` varchar(200) NOT NULL,
  `r_charge` int(10) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`h_id`, `r_id`, `r_no`, `r_type`, `r_charge`, `check_in`, `check_out`, `status`, `image_1`, `image_2`, `image_3`) VALUES
(14, 35, '101', 'Luxury Room', 1999, '2020-06-21', '2020-06-23', 'B', 'r1.jpg', 'r1.jpg', 'r1.jpg'),
(14, 36, '102', 'Luxury Room', 1299, '2020-06-22', '2020-06-24', 'B', 'r4.jpg', 'services.jpg', 'services.jpg'),
(14, 37, '103', 'Luxury Room', 1500, '2020-06-23', '2020-06-25', 'B', 'services.jpg', '3.jpg', '3.jpg'),
(14, 38, '104', 'Deluxe Room', 2999, '0000-00-00', '0000-00-00', 'V', '3.jpg', 'g2.jpg', 'g2.jpg'),
(14, 39, '105', 'Deluxe Room', 5000, '0000-00-00', '0000-00-00', 'V', 'g2.jpg', 'g4.jpg', 'g4.jpg'),
(14, 40, '106', 'Deluxe Room', 6999, '0000-00-00', '0000-00-00', 'V', 'g4.jpg', 'g6.jpg', 'g6.jpg'),
(14, 41, '107', 'Deluxe Room', 7999, '0000-00-00', '0000-00-00', 'V', 'g6.jpg', 'r4.jpg', 'r4.jpg'),
(14, 42, '108', 'Single Room', 1100, '0000-00-00', '0000-00-00', 'V', 'g4.jpg', 'g2.jpg', 'g2.jpg'),
(14, 43, '109', 'Single Room', 999, '0000-00-00', '0000-00-00', 'V', 'r4.jpg', '3.jpg', '3.jpg'),
(14, 44, '110', 'Double Room', 2300, '0000-00-00', '0000-00-00', 'V', 'g2.jpg', 'r1.jpg', 'r1.jpg'),
(14, 45, '111', 'Double Room', 2500, '0000-00-00', '0000-00-00', 'V', 'g2.jpg', '3.jpg', '3.jpg'),
(15, 46, '101', 'Luxury Room', 1299, '0000-00-00', '0000-00-00', 'V', '3.jpg', 'g6.jpg', 'g6.jpg'),
(15, 47, '102', 'Luxury Room', 1499, '0000-00-00', '0000-00-00', 'V', 'g2.jpg', 'r1.jpg', 'r1.jpg'),
(15, 49, '103', 'Deluxe Room', 5999, '0000-00-00', '0000-00-00', 'V', 'g2.jpg', 'g4.jpg', 'g4.jpg'),
(15, 50, '104', 'Deluxe Room', 4999, '0000-00-00', '0000-00-00', 'V', 'g6.jpg', 'r4.jpg', 'r4.jpg'),
(15, 51, '105', 'Single Room', 1299, '0000-00-00', '0000-00-00', 'V', 'g4.jpg', 'services.jpg', 'services.jpg'),
(15, 52, '106', 'Single Room', 1100, '0000-00-00', '0000-00-00', 'V', 'r1.jpg', 'r4.jpg', 'r4.jpg'),
(15, 53, '107', 'Double Room', 2100, '0000-00-00', '0000-00-00', 'V', 'r4.jpg', 'r1.jpg', 'r1.jpg'),
(15, 54, '108', 'Double Room', 3200, '0000-00-00', '0000-00-00', 'V', 'services.jpg', 'r4.jpg', 'g2.jpg'),
(16, 55, '101', 'Luxury Room', 5999, '0000-00-00', '0000-00-00', 'V', 'services.jpg', 'r4.jpg', 'r4.jpg'),
(16, 56, '102', 'Luxury Room', 3299, '2020-06-22', '2020-06-24', 'B', 'r4.jpg', 'i13.jpg', 'i13.jpg'),
(16, 57, '103', 'Deluxe Room', 4500, '0000-00-00', '0000-00-00', 'V', 'services.jpg', 'g2.jpg', 'g2.jpg'),
(16, 58, '104', 'Deluxe Room', 1599, '0000-00-00', '0000-00-00', 'V', 'r4.jpg', 'a1.jpg', 'g2.jpg'),
(16, 59, '105', 'Single Room', 1299, '0000-00-00', '0000-00-00', 'V', 'r4.jpg', 'g2.jpg', 'a1.jpg'),
(16, 60, '106', 'Double Room', 1999, '0000-00-00', '0000-00-00', 'V', 'g2.jpg', 'r1.jpg', 'r4.jpg'),
(17, 61, '101', 'Luxury Room', 1299, '0000-00-00', '0000-00-00', 'V', 'a1.jpg', 'r4.jpg', 'r1.jpg'),
(17, 62, '102', 'Luxury Room', 2999, '0000-00-00', '0000-00-00', 'V', 'r1.jpg', 'i13.jpg', 'services.jpg'),
(17, 63, '103', 'Deluxe Room', 3299, '0000-00-00', '0000-00-00', 'V', 'r4.jpg', 'services.jpg', 'i13.jpg'),
(17, 64, '104', 'Deluxe Room', 2399, '0000-00-00', '0000-00-00', 'V', 'services.jpg', 'r1.jpg', 'i13.jpg'),
(17, 65, '105', 'Single Room', 1100, '0000-00-00', '0000-00-00', 'V', 'r1.jpg', 'i13.jpg', 'r1.jpg'),
(17, 66, '106', 'Single Room', 999, '0000-00-00', '0000-00-00', 'V', 'services.jpg', '3.jpg', 'r1.jpg'),
(17, 67, '107', 'Double Room', 1999, '0000-00-00', '0000-00-00', 'V', 'i13.jpg', 'r1.jpg', '3.jpg'),
(18, 68, '101', 'Luxury Room', 1999, '0000-00-00', '0000-00-00', 'V', 'r1.jpg', 'services.jpg', '3.jpg'),
(18, 69, '102', 'Luxury Room', 1999, '0000-00-00', '0000-00-00', 'V', '3.jpg', 'services.jpg', 'r1.jpg'),
(18, 70, '103', 'Deluxe Room', 2999, '0000-00-00', '0000-00-00', 'V', 'r1.jpg', 'services.jpg', '3.jpg'),
(18, 71, '105', 'Deluxe Room', 9999, '0000-00-00', '0000-00-00', 'V', 'r4.jpg', 'r1.jpg', 'services.jpg'),
(18, 72, '106', 'Single Room', 999, '0000-00-00', '0000-00-00', 'V', 'r1.jpg', '3.jpg', 'g8.jpg'),
(18, 73, '108', 'Single Room', 1999, '0000-00-00', '0000-00-00', 'V', 'services.jpg', 'g8.jpg', '3.jpg'),
(18, 74, '109', 'Double Room', 1999, '0000-00-00', '0000-00-00', 'V', 'g8.jpg', 'g4.jpg', '3.jpg'),
(19, 75, '101', 'Luxury Room', 9999, '2020-06-21', '2020-06-23', 'B', 'g2.jpg', '3.jpg', 'g4.jpg'),
(19, 76, '102', 'Deluxe Room', 5999, '0000-00-00', '0000-00-00', 'V', 'r1.jpg', 'g8.jpg', '3.jpg'),
(19, 77, '103', 'Single Room', 1100, '0000-00-00', '0000-00-00', 'V', 'r1.jpg', '3.jpg', 'g8.jpg'),
(19, 78, '105', 'Luxury Room', 1899, '2020-06-23', '2020-06-25', 'B', '3.jpg', 'g8.jpg', 'g4.jpg'),
(19, 79, '107', 'Deluxe Room', 1399, '2020-06-20', '2020-06-22', 'B', 'a1.jpg', '3.jpg', 'g8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `r_id` (`r_id`,`h_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `h_id` (`h_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `h_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hotels` (`h_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`r_id`) REFERENCES `rooms` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hotels` (`h_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_3` FOREIGN KEY (`r_id`) REFERENCES `rooms` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_4` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hotels` (`h_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
