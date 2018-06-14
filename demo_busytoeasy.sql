-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2018 at 10:51 AM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_busytoeasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievers`
--

CREATE TABLE `achievers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `achievers_thoughts` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievers`
--

INSERT INTO `achievers` (`id`, `name`, `achievers_thoughts`, `image`, `date_added`) VALUES
(13, 'SAVYASACHI CHAUDHARY (IRS-IT)', 'I want to thank Pavan sir for helping me in Indian polity and public administration. He is my Lakshmi Kant or DD Basu of Indian Polity. Because of him only I was able to understand majority of articles of Indian constitution.', '1519189250.jpg', '2018-02-21 10:30:50'),
(14, 'ALPANA DUBEY', 'Hello Sir Thanks for your kind wishes.I would also like to express my gratitude towards you for all your guidance on Psychology which has helped me clear my optional in the first attempt. You have explained the complex Psychological concepts very clear and concise manner making it much simpler for the students to grasp and retain the same.Thanks once again for your kind support and guidance.', '1519189297.jpg', '2018-02-21 10:31:37'),
(15, 'HARSHINI', 'Hi sagar sir, Thank you for extending your unconditional support to clear the coveted civil services examination. I thank the Shiksha IAS Academy for guiding me through this wonderful path. You have made an Aspirants dream come true.', '1519189366.jpg', '2018-02-21 10:32:46'),
(16, 'SITARANJIT (RANK 13 IN MANIPUR PSC)', 'I did General Studies and Public administration from Pavan sir. I received a qualitative guidance; especially Sir interaction over Telegram/WhatsApp was phenomenal. The exhaustive coverage of current issues, regular answer writing played\' a major role in my success. I owe my success in Manipur PSC exam to Mr Pavan sir, now Director of Shiksha IAS Academy. &ndash; Sitaranjit (Rank 13 in Manipur PSC)', '1519189516.jpg', '2018-02-21 10:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `be_category`
--

CREATE TABLE `be_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL DEFAULT '0',
  `slug` varchar(255) NOT NULL,
  `similar` varchar(255) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `be_category`
--

INSERT INTO `be_category` (`id`, `title`, `parent`, `slug`, `similar`, `status`, `date_added`, `date_modified`) VALUES
(1, 'Beauty & Health', '0', 'beauty-health', '', 'y', '2018-05-07 12:42:56', '2018-05-07 12:48:00'),
(2, 'Home Repairs & Services', '0', 'home-repairs-services', '', 'y', '2018-05-07 12:43:21', '2018-05-07 12:52:48'),
(3, 'Personal & More', '0', 'personal-and-more', '', 'y', '2018-05-07 12:43:59', '2018-05-07 12:56:10'),
(4, 'Home Design & Construction', '0', 'home-design-construction', '', 'y', '2018-05-07 12:44:22', '2018-05-07 12:56:13'),
(5, 'Wedding and Events', '0', 'wedding-and-event-services', '', 'y', '2018-05-07 12:44:42', '2018-05-07 12:56:22'),
(6, 'Business', '0', 'business', '', 'y', '2018-05-07 12:46:19', '2018-05-07 12:56:25'),
(7, 'Yoga Trainer at Home', '1', 'yoga-trainer-at-home', '', 'y', '2018-05-07 12:46:19', '2018-05-07 12:56:25'),
(8, 'Fitness Trainer at Home', '1', 'fitness-trainer-at-home', '', 'y', '2018-05-07 12:46:19', '2018-05-07 12:56:25'),
(9, 'Dietician', '1', 'dietician', '', 'y', '2018-05-07 12:46:19', '2018-05-07 12:56:25'),
(10, 'Physiotherapy at Home', '1', 'physiotherapy-at-home', '', 'y', '2018-05-07 12:46:19', '2018-06-13 13:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `be_city`
--

CREATE TABLE `be_city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `be_city`
--

INSERT INTO `be_city` (`id`, `name`, `slug`, `status`, `date_added`, `date_modified`) VALUES
(1, 'Bangalore', 'bangalore', 'y', '2018-05-07 12:56:53', '2018-05-07 13:00:31'),
(2, 'Mumbai', 'mumbai', 'y', '2018-05-07 12:57:02', '2018-05-07 13:00:38'),
(3, 'Chennai', 'chennai', 'y', '2018-05-07 12:57:11', '2018-05-07 13:01:33'),
(4, 'Delhi', 'delhi', 'y', '2018-05-07 12:57:23', '2018-05-07 13:01:39'),
(5, 'Hydrabad', 'hydrabad', 'y', '2018-05-07 12:57:35', '2018-05-07 13:01:48'),
(6, 'Pune', 'pune', 'y', '2018-05-07 12:57:54', '2018-05-07 13:01:53'),
(7, 'Kolkata', 'kolkata', 'y', '2018-05-07 12:58:01', '2018-05-07 13:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `slug`, `country_id`, `state_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bangalore', 'bangalore', 1, 1, 1, '2015-08-07', '2015-08-07 09:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'India', 'india', 1, '2015-08-07', '2015-08-07 09:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `questions` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `flat_no` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time NOT NULL,
  `allocated_to` varchar(255) NOT NULL,
  `status` set('Completed','Pending','Progress','Cancelled','Declined','Not Allocated','') NOT NULL DEFAULT 'Not Allocated',
  `ip_address` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `cat_id`, `questions`, `address`, `flat_no`, `landmark`, `mobile`, `email`, `order_date`, `order_time`, `allocated_to`, `status`, `ip_address`, `date_added`, `date_modified`) VALUES
(1, 1, 2, '{}', 'HSR LAyout, 7th Sector, Bangalore - 560100', 'G-202, SRK Silicana Apartment', 'Near Icon School of excellence', '9092310791', 'rjkumar856@gmail.com', '2018-04-11', '06:24:26', '1', 'Not Allocated', '', '2018-06-11 09:42:47', '2018-06-11 11:03:30'),
(2, 1, 1, '{}', 'HSR LAyout, 7th Sector, Bangalore - 560100', 'G-202, SRK Silicana Apartment', 'Near Icon School of excellence', '9092310791', 'rjkumar856@gmail.com', '2018-05-01', '06:24:26', '1', 'Progress', '', '2018-06-11 09:42:47', '2018-06-11 11:06:41'),
(3, 1, 3, '{}', 'HSR LAyout, 7th Sector, Bangalore - 560100', 'G-202, SRK Silicana Apartment', 'Near Icon School of excellence', '9092310791', 'rjkumar856@gmail.com', '2018-07-11', '06:24:26', '1', 'Completed', '', '2018-06-11 09:42:47', '2018-06-11 11:03:36'),
(4, 1, 4, '{}', 'HSR LAyout, 7th Sector, Bangalore - 560100', 'G-202, SRK Silicana Apartment', 'Near Icon School of excellence', '9092310791', 'rjkumar856@gmail.com', '2018-08-15', '06:24:26', '1', 'Pending', '', '2018-06-11 09:42:47', '2018-06-11 11:03:41'),
(5, 1, 5, '{}', 'HSR LAyout, 7th Sector, Bangalore - 560100', 'G-202, SRK Silicana Apartment', 'Near Icon School of excellence', '9092310791', 'rjkumar856@gmail.com', '2018-06-13', '06:24:26', '1', 'Cancelled', '', '2018-06-11 09:42:47', '2018-06-11 10:48:45'),
(6, 1, 6, '{}', 'HSR LAyout, 7th Sector, Bangalore - 560100', 'G-202, SRK Silicana Apartment', 'Near Icon School of excellence', '9092310791', 'rjkumar856@gmail.com', '2018-06-13', '06:24:26', '1', 'Declined', '', '2018-06-11 09:42:47', '2018-06-11 10:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `slug`, `country_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Karnataka', 'karnataka', 1, 1, '2015-08-07', '2015-08-07 09:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_customers`
--

CREATE TABLE `tbl_admin_customers` (
  `id` int(20) NOT NULL,
  `cusFname` varchar(255) NOT NULL,
  `cusLname` varchar(255) NOT NULL,
  `cusEmail` varchar(255) NOT NULL,
  `cusPassword` varchar(255) NOT NULL,
  `cusStatus` set('Y','N') NOT NULL DEFAULT 'Y',
  `cusPhone` varchar(20) NOT NULL,
  `cusDob` varchar(20) NOT NULL DEFAULT '',
  `cusAddress1` text,
  `cusAddress2` text,
  `cusCity` varchar(255) NOT NULL DEFAULT '',
  `cusState` varchar(255) NOT NULL DEFAULT '',
  `cusCountry` varchar(255) NOT NULL DEFAULT 'India',
  `cusPincode` varchar(20) NOT NULL DEFAULT '',
  `cusCode` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '',
  `cusCreatedtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_customers`
--

INSERT INTO `tbl_admin_customers` (`id`, `cusFname`, `cusLname`, `cusEmail`, `cusPassword`, `cusStatus`, `cusPhone`, `cusDob`, `cusAddress1`, `cusAddress2`, `cusCity`, `cusState`, `cusCountry`, `cusPincode`, `cusCode`, `role`, `cusCreatedtime`, `date_modified`) VALUES
(1, 'Janani', 'Divya', 'jananidivya55@gmail.com', '7eb4ccb1fa0665f521df63305b6acf66', 'Y', '', '', 'BOmmanahalli', NULL, '1', '1', 'India', '', '55f92040550d9579a65966c3ae916825', '1', '2017-11-30 07:17:21', '2018-02-01 07:13:41'),
(3, 'Rajakumar', '', 'rjkumar856@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '9092310791', '', 'HSR Layout', NULL, 'Bangalore', 'Karnataka', 'India', '', 'a5fe7d97f020c27df0ece4bd40108c73', '1', '2017-12-12 12:32:56', '2018-02-01 07:13:41'),
(4, 'Niranjan', '', 'rayapatiniranjan@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '9916563377', '', 'HSR Layout', NULL, 'Bangalore', 'Karnataka', 'India', '', 'a5fe7d97f020c27df0ece4bd40108c73', '1', '2017-12-12 12:32:56', '2018-02-01 07:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userid` varchar(250) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` set('Y','N','') NOT NULL DEFAULT 'N',
  `role` set('normal','paid','') NOT NULL DEFAULT 'normal',
  `ip` varchar(40) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `full_name`, `email`, `password`, `phone`, `city`, `address`, `status`, `role`, `ip`, `created_at`, `updated_at`) VALUES
(1, 'rjkumar856@gmail.com', 'Rajkumar', 'rjkumar856@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9092310791', 'Bangalore', 'Electronics City Phase 1, Electronic City, Bengaluru, Karnataka 560100, India', 'Y', 'normal', '106.51.38.74', '2018-06-09 08:46:53', '2018-06-13 10:35:42'),
(2, 'rajakumar@uriahsolution.com', 'Rajkumar', 'rajakumar@uriahsolution.com', '25d55ad283aa400af464c76d713c07ad', '9092310792', 'Bangalore', 'Bommanahalli, HSR Layout, HSR Layout', 'N', 'normal', '180.151.35.7', '2018-06-09 08:47:24', '2018-06-09 10:19:41'),
(3, 'admin@admin.com', 'Rajkumar', 'admin@admin.com', '25d55ad283aa400af464c76d713c07ad', '9092310793', 'Bangalore', 'Bommanahalli, HSR Layout, HSR Layout', 'N', 'normal', '180.151.35.7', '2018-06-09 08:49:15', '2018-06-11 05:44:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievers`
--
ALTER TABLE `achievers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `be_category`
--
ALTER TABLE `be_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `be_city`
--
ALTER TABLE `be_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`,`state_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `country_id_2` (`country_id`);

--
-- Indexes for table `tbl_admin_customers`
--
ALTER TABLE `tbl_admin_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievers`
--
ALTER TABLE `achievers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `be_category`
--
ALTER TABLE `be_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `be_city`
--
ALTER TABLE `be_city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin_customers`
--
ALTER TABLE `tbl_admin_customers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
