-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 09:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garden_lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'ucsc@gmail.com', 'ucsc1234!@#$'),
(2, 'gardenlk@gmail.com', '1234'),
(4, 'admin@gmail.com', '$2y$10$eWcrUNH5wNVSgPH2G/Sjxu8OaEv/wd2/MJytCqZvjXZY3SQ65Cdl2');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'vimansa wickramasinghe', 'vwickramasinghe1998@gmail.com', 'hello'),
(3, 'hasanga Savindra', 'whasangasavindra@gmail.com', 'This is the second message'),
(10, 'thavindu ushan', 'thavinduushan@gmail.com', 'first message'),
(11, 'vimansa wickramasinghe', 'vwickramasinghe1998@gmail.com', 'this is a good site');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(10) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `FullName`, `Email`, `Password`) VALUES
(34, 'Vimansa Wickramasinghe', 'vwickramasinghe1998@gmail.com', '$2y$10$6X4P5Uc4kDRz4mZlc9PR2ulS6KiLgyYCUIxz4ZSIWVqZdvvqDRpUW'),
(22, 'sachinthya', 'sachi@mail.com', '$2y$10$LQFcNG.04LvLEB4Um.SjiOm/WGL7aycAC5fxZWl9G.NREZHdmYT1G'),
(35, 'sasani widanapathirana', 'sasanisamanga@gmail.com', '$2y$10$kuzE.U682dAwZHXEkl6t6Ok4uHKFJjYzcnlKyKfFpH5Oh8WH.T6TS'),
(36, 'sasani', 'sasa@gmail.com', '$2y$10$j/rlXCe3/W1OkL0aRHSd0eGWorUmaXb.5KkK0l.TgE08A1a0urHXm'),
(37, 'samanga', 'samanga@gmail.com', '$2y$10$O/UX8kdaGsuAaQYNFS7BU.iEu7EUNKEC40sMAbv8S2NZzV8UH4PCS');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Line1` varchar(255) NOT NULL,
  `Line2` varchar(255) NOT NULL,
  `City` varchar(100) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `ContactNo` int(50) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`id`, `user_id`, `FullName`, `Line1`, `Line2`, `City`, `PostalCode`, `ContactNo`, `status`) VALUES
(1, 22, 'Sachinthya Wicktamasinghe', 'No 15, Central Avenue,', 'Awariyawaththa', 'Matara', 81000, 717685987, ''),
(20, 32, 'vimansa', 'no 15', 'central avenue, awariyawaththa', 'matara', 81000, 116543234, ''),
(21, 33, 'vimansa', 'no 15', 'central avenue, awariyawaththa', 'matara', 81000, 713453432, ''),
(22, 34, 'vimansa', 'no 15', 'central avenue, awariyawaththa', 'matara', 81000, 712345678, ''),
(23, 37, 'sasani', 'janaraja mawatha', 'maddawatta', 'matara', 34600, 73456343, 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `deliveryID` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(10) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `phoneNo` varchar(255) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `gender` char(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `vehicel` varchar(200) NOT NULL,
  `vehicel_number` varchar(255) NOT NULL,
  `driverimg` longtext NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `fullname`, `phoneNo`, `nic`, `gender`, `address`, `email`, `vehicel`, `vehicel_number`, `driverimg`, `password`, `date`, `status`) VALUES
(6, 'vimansa wickramasinghe', '725630314', '985931607v', 'Female', '15\r\ncentral avenue, awariyawaththa', 'vwickramasinghe1998@gmail.com', 'Motor Bike', '0', 'dpimg.jpeg', '$2y$10$o9onM9jcRz7pWLmGa1i1mucNJRhPyD72t8XOw7R82eT.s61L0A96C', '2022-01-13 17:07:28', 'accept'),
(7, 'Hasanga wickramasinghe', '725630314', '875643107v', 'Male', '15\r\ncentral avenue, awariyawaththa', 'whasangasavindra@gmail.com', 'Motor Bike', '1234', 'dpimg1.jpeg', '$2y$10$AsJAPyS7.jgZrCNvYmIumuILY.mgchGmkDWyhbTkFyAF64/c4jxAy', '2022-01-13 17:07:28', 'accept'),
(8, 'Kamal Gunarathna', '725633456', '987465347v', 'male', '15\r\ncentral avenue, awariyawaththa, welegoda, Gampaha', 'kamal@gmail.com', 'Car', '0', 'dpimg2.jpeg', '$2y$10$kWJtLr0xUlktg5jiuqeOL.FB/6Ohh7YNLu9YzbvSdM9C7L4.I/nOS', '2022-01-13 17:07:28', 'accept'),
(9, 'kasun Samarakoon', '0712345678', '987465347v', 'male', '15\r\ncentral avenue, awariyawaththa', 'kasun@gmail.com', 'Three Wheeler', '1234er', 'dpimg3.jpeg', '$2y$10$i01RodRh8rb1jtm7l4xit.fz36POTlKt2zeQxAarjKUwYVAASNtsS', '2022-01-13 17:07:28', 'accept'),
(10, 'Thilina Wickramasinghe', '0776543234', '987465347v', 'male', '15\r\ncentral avenue, awariyawaththa', 'thilina@gmail.com', 'Car', 'hn2030', 'dpimg4.jpeg', '$2y$10$deN/d7HEz.BDIZWYmMGaOOJUTrCGuGgQUY0FvIux9YV6M32b1Rn/y', '2022-01-13 17:07:28', 'accept'),
(11, 'Sasani Wdanapathirana', '0717895618', '200051103364', 'Female', 'Janaraja Mawatha, Matara.', 'samanga@gmail.com', 'Car', 'AEE3459', '', 'samanga1234!@#$', '2022-03-21 16:41:59', 'pending'),
(12, 'sasani', '0785645567', '34567423v', 'female', 'Matarea', 'sasa@gmail.com', 'Car', 'AEE3459', '', 'Sama123!@#', '2022-03-23 00:56:17', 'pending'),
(13, 'Sasani Wdanapathirana', '0717895618', '200051103364', 'Male', 'matara', 'sasa123@gmail.com', 'Motor Bike', 'AEE3456', '', '$2y$10$7tApmRPC38wDZvVsZtCqTODkecN5vNgTsq26VQ3Udrob.nXu1SyF.', '2022-03-23 20:54:57', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `driver_rate`
--

CREATE TABLE `driver_rate` (
  `rate_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `starRate` int(11) NOT NULL,
  `feedback_msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_rate`
--

INSERT INTO `driver_rate` (`rate_id`, `order_id`, `driver_id`, `starRate`, `feedback_msg`) VALUES
(1, 0, 0, 3, ''),
(2, 0, 0, 2, 'comment'),
(3, 0, 0, 3, 'bvgc'),
(4, 0, 0, 0, ''),
(5, 0, 0, 0, ''),
(6, 0, 0, 0, ''),
(7, 0, 0, 0, ''),
(8, 0, 0, 0, ''),
(9, 0, 0, 0, ''),
(10, 0, 0, 0, ''),
(11, 0, 0, 0, ''),
(12, 0, 0, 0, ''),
(13, 0, 0, 0, ''),
(14, 0, 0, 0, ''),
(15, 0, 0, 0, ''),
(16, 0, 0, 0, ''),
(17, 407, 0, 0, ''),
(18, 407, 0, 0, ''),
(19, 407, 0, 0, ''),
(20, 407, 0, 0, ''),
(21, 407, 0, 0, ''),
(22, 407, 0, 0, ''),
(23, 407, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `user_id`, `topic`, `body`, `created_at`) VALUES
(10, 2, 'Anthurium plant leaves get brown...', 'I recently bought a Anthurium 2 weeks ago and it’s now developing small brown spots with a yellow halo. i’ve read a bunch of articles but i’m still unsure if it’s due to fungus, bacterial infection, sunburn or overwatering. i’ve only watered it once since getting it and plan to repot it since i see roots at the drainage hole (not growing through it but blocks it almost). i’m a new plant mom n so far i’ve only kept my peace lily alive :( i love the monsters so much and don’t want it to die! anyways thank you so much in advance!\r\ni have NW facing windows so i currently have it right in front of my window, and use an led grow light at night for about 12 hours. i’m about to buy an air humidifier but i have been misting it every other day, and put it in the bathroom after i shower twice a week.\r\n1. what could the brown spots come from?\r\n2. should i cut off the damaged leaves? if so, where should i cut it?\r\n3. should i separate the plants in case one or two are infected?', '2021-10-31 11:04:49'),
(11, 2, 'Rose plant has leaf curling disease...?', 'I recently bought a Anthurium 2 weeks ago and it’s now developing small brown spots with a yellow halo. i’ve read a bunch of articles but i’m still unsure if it’s due to fungus, bacterial infection, sunburn or overwatering. i’ve only watered it once since getting it and plan to repot it since i see roots at the drainage hole (not growing through it but blocks it almost). i’m a new plant mom n so far i’ve only kept my peace lily alive :( i love the monsters so much and don’t want it to die! anyways thank you so much in advance!', '2021-10-31 11:05:46'),
(12, 2, 'Mango plant is 6 years old but no fruits', 'When it comes to finding good flower plants, it takes a lot of time and effort because we have to travel by ourselves to plant houses. And it is very difficult to find plants for reasonable prices. Because of covid 19 situation most of the customers don&#39;t like to visit plant houses. Most of the plant houses use social media like facebook and instagram to promote and sell their plants, but these solutions have their drawbacks. Also For plant lovers, using the common ecommerce sites is a burden for buying and selling online plants.', '2021-10-31 12:42:02'),
(13, 2, 'Mango plants have small fruits', 'here is the description', '2021-11-01 11:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`id`, `email`, `password`) VALUES
(1, 'moderator@gmail.com', 'moderator1234!@#$'),
(2, 'tharinda@gmail.com', '$2y$10$JSBk6QuUQ2ROD.SuY9RZiOe6WIVrferB6IDuu9.m7LMHCxM0WCMU6');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `itemID` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_status` varchar(100) NOT NULL DEFAULT 'To Be Received'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`itemID`, `order_id`, `itemName`, `plant_id`, `seller_id`, `quantity`, `order_status`) VALUES
(1, 407, 'White Rose', 18, 2, 1, 'To Be Received'),
(2, 407, 'Money Plant ', 14, 4, 1, 'To Be Received'),
(5, 412, 'Money Plant', 14, 4, 2, 'To Be Received'),
(6, 412, 'CeeSee Plant', 20, 2, 3, 'To Be Received'),
(7, 412, 'Grass Plant ', 15, 4, 2, 'To Be Received'),
(8, 413, 'White Rose', 18, 2, 1, 'To Be Received'),
(9, 413, 'Gerberas Plant', 17, 2, 1, 'To Be Received');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `total` double NOT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'success',
  `order_status` varchar(255) NOT NULL DEFAULT 'toReceive',
  `createdOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cus_id`, `total`, `payment_status`, `order_status`, `createdOn`) VALUES
(407, 22, 1130, 'success', 'completed', '2022-03-22 13:23:45'),
(412, 22, 3400, 'success', 'toReceive', '2022-03-22 23:38:53'),
(413, 22, 830, 'success', 'toReceive', '2022-03-23 16:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `plant_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `orderlevel` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `img1` longtext CHARACTER SET utf8 NOT NULL,
  `img2` longtext CHARACTER SET utf8 NOT NULL,
  `img3` longtext CHARACTER SET utf8 NOT NULL,
  `img4` longtext CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`plant_id`, `seller_id`, `pname`, `price`, `quantity`, `category`, `orderlevel`, `description`, `img1`, `img2`, `img3`, `img4`, `date`) VALUES
(8, 2, 'Snake plant', '550', 10, 'potted', 10, 'Snake plant is easy to maintain', 'cplant1.jpg', 'cplant2.jpg', 'cplant3.jpg', 'cplant4.jpg', '2021-11-24 23:19:43'),
(9, 2, 'Rose Plant', '700', 10, 'outdoor', 10, 'Small size, light rose, small cute flowers. Easy Maintainance.', 'p13.jpg', 'p13-2.jpg', 'p13-3.jpg', 'p13-4.jpg', '2021-11-26 01:29:55'),
(10, 2, 'Dracaena Plant', '1000.00', 10, 'indoor', 9, 'Dracaena Coffee Air Purifier Indoor Plant with Self Watering Pot', 'p66.jpg', 'p66-4.jpg', 'p66-3.jpg', 'p66-2.jpg', '2021-11-26 01:45:57'),
(11, 2, 'Money Plant', '950.00', 10, 'indoor', 5, 'Money plant Golden most commonly referred to as Devil&#39;s ivy or pothos plant is easy to tend and can adapt to different environments.', 'p59.jpeg', 'p59-2.jpeg', 'p59-3.jpeg', 'p59-4.jpeg', '2021-11-26 01:49:28'),
(12, 2, 'Jade mini plant', '600.00', 5, 'table', 5, 'Best plant for indoor planting with light green leaves.', 'p53.jpg', 'p53-2.jpg', 'p53-3.jpg', 'p53-4.jpg', '2021-11-26 02:00:38'),
(13, 2, 'anthurium', '450.00', 10, 'outdoor', 10, 'Small plant with red flowers.', 'p10.jpg', 'p10-2.jpg', 'p10-3.jpg', 'p10-4.jpg', '2021-11-26 15:39:55'),
(14, 2, 'Gerberas', '500.00', 10, 'indoor', 10, 'Gerbaras with pink small flowers', 'p12.jpg', 'p12-2.jpg', 'p12-4.jpg', 'p12.jpg', '2021-11-26 16:01:15'),
(15, 2, 'Grass Plant', '850.00', 5, 'table', 5, 'Medium size plant without flowers', 'p62.jpg', 'p62-2.jpg', 'p62-3.jpg', 'p62-4.jpg', '2021-11-26 16:03:12'),
(16, 2, 'Cee Plant', '740.00', 5, 'potted', 5, 'Plant with flesh dark green leaves. Easy to maintain.', 'p61.jpeg', 'p61-2.jpeg', 'p61-3.jpeg', 'p61-4.jpeg', '2021-11-26 18:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `plantrate`
--

CREATE TABLE `plantrate` (
  `rate_id` int(11) NOT NULL,
  `starRate` varchar(255) NOT NULL,
  `feedback_msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `plant_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `ShopName` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `orderlevel` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `img1` longtext NOT NULL,
  `img2` longtext NOT NULL,
  `img3` longtext NOT NULL,
  `img4` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`plant_id`, `seller_id`, `ShopName`, `pname`, `price`, `quantity`, `category`, `orderlevel`, `description`, `img1`, `img2`, `img3`, `img4`, `date`, `status`) VALUES
(1, 2, 'PlantMe', 'Areca Palm', '760.00', 5, 'indoor', 5, 'Air Purifier Natural Live Plant', 'p69.jpg', 'p69-3.jpg', 'p69-4.jpg', 'p69-2.jpg', '2021-11-27 00:03:46', 'accept'),
(2, 2, 'PlantMe', 'Sansevieria Green', '690.00', 10, 'table', 5, 'Air Purifier Snake Plant with Self Watering Pot', 'p70.jpg', 'p70-2.jpg', 'p70-3.jpg', 'p70-4.jpg', '2021-11-27 00:10:59', 'accept'),
(3, 2, 'PlantMe', 'Peace Lily Plant', '500.00', 3, 'indoor', 5, 'It has dark glossy green, oblong, lanceolate leaves which bears long-lasting pure white, large, unusual looking flowers (spathes). With ability to grow in low light , this flowering beauty is one of the easiest indoor plant suitable in living room, balcony, or bedroom', 'p71.jpg', 'p71-2.jpg', 'p71-3.jpg', 'p71-4.jpg', '2021-11-27 15:42:02', 'accept'),
(4, 2, 'PlantMe', 'Rose flower', '670.00', 7, 'potted', 5, 'A rose is a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears. It is avialable in Red or pink.', 'p13.jpg', 'p13-2.jpg', 'p13-3.jpg', 'p13-4.jpg', '2021-11-27 15:44:40', 'accept'),
(5, 2, 'PlantMe', 'Anthurium plants', '450.00', 6, 'outdoor', 5, 'Anthuriums are relatively easy to grow, have attractive foliage and under the proper maintenance, you can get nice big flowers.', 'p10-3.jpg', 'p10.jpg', 'p10-2.jpg', 'p10-4.jpg', '2021-11-27 16:03:08', 'accept'),
(7, 2, 'PlantMe', 'Xzora Plant', '120.00', 5, 'outdoor', 3, 'Easy to maintain and no fertilizer required. can survive in any condition.', 'p48.jpg', 'p48-2.jpg', 'p48-3.jpg', 'p48-4.jpg', '2021-11-28 17:15:59', 'accept'),
(8, 2, 'PlantMe Shop', 'Orange-Roses', '550.00', 7, 'house', 4, 'Orange color rose flowers. Medium-size flowers. Medium Size potted plant.', 'p13-2.jpg', 'p13-4.jpg', 'p13.jpg', 'p13-3.jpg', '2021-11-28 18:14:14', 'accept'),
(9, 2, 'PlantMe Shop', 'Anthurium Plant', '450.00', 7, 'outdoor', 4, 'These exotic houseplants have glossy heart-shaped leaves with a beautiful bloom that comes in a large array of colors. They can bloom all year-long ...', 'p10.jpg', 'p10-2.jpg', 'p10-3.jpg', 'p10-5.jpg', '2021-12-08 00:30:50', 'accept'),
(10, 2, 'PlantMe Shop', 'Broken Heart Plant', '700.00', 10, 'table', 2, 'Buy Broken Heart Plant Online at best prices only at Ugaoo.com, India&#39;s leading online shop for agriculture supplies and garden tools. Delivery ...', 'p64.jpg', 'p64-2.jpg', 'p64-3.jpg', 'p64-4.jpg', '2021-12-08 00:42:04', 'accept'),
(11, 2, 'PlantMe Shop', 'Aglaoneema Pink Plant', '550.00', 5, 'table', 3, 'Aglaonema is one of the most used plant for interior landscape.\r\nAglaonema can be maintain to lower light and best suitable for home and office environment.\r\nPerfect for any room or office decor.', 'p68.jpg', 'p68-2.jpg', 'p68-3.jpg', 'p68-4.jpg', '2021-12-08 15:50:11', 'pending'),
(12, 2, 'PlantMe Shop', 'Money Plant', '630.00', 6, 'indoor', 3, 'Money Plant N joy is the most popular garden plant in Sri Lanka. It is also called devil&#39;s vine because it&#39;s impossible to kill. This is a indoor plant wich needs less maintenance', 'p58-2.jpeg', 'p58.jpeg', 'p58-3.jpeg', 'p58-4.jpeg', '2021-12-08 15:53:35', 'accept'),
(13, 4, 'Cactus Shop', 'rose plant', '350.00', 10, 'outdoor', 4, 'Small size, light rose, small cute flowers. Easy Maintainance.', 'p13-3.jpg', 'p13.jpg', 'p13-4.jpg', 'p13-2.jpg', '2021-12-09 20:25:36', 'accept'),
(14, 4, 'Cactus Shop', 'Money Plant', '800.00', 5, 'indoor', 2, 'Money plant Golden most commonly referred to as Devil&#39;s ivy or pothos plant is easy to tend and can adapt to different environments.', 'p59.jpeg', 'p59-2.jpeg', 'p59-3.jpeg', 'p59-4.jpeg', '2021-12-09 20:27:27', 'accept'),
(15, 4, 'Cactus Shop', 'Grass Plant', '450.00', 5, 'table', 0, 'Medium size plant without flowers', 'p66.jpg', 'p66-2.jpg', 'p66-4.jpg', 'p66-3.jpg', '2021-12-09 20:29:03', 'accept'),
(16, 4, 'Cactus Shop', 'Anthurium Plant', '350.00', 10, 'outdoor', 3, 'Anthuriums are relatively easy to grow, have attractive foliage and under the proper maintenance, you can get nice big flowers.', 'p10-3.jpg', 'p10-2.jpg', 'p10.jpg', 'p10-4.jpg', '2021-12-09 20:31:14', 'accept'),
(17, 2, 'PlantMe Shop', 'gebera', '460.00', 13, 'house', 5, 'Gerbera contains naturally occurring coumarin derivatives. Gerbera is a tender perennial plant. It is attractive to bees, butterflies, and birds, but resistant ..', 'p12.jpg', 'p12-2.jpg', 'p12-4.jpg', 'p12-3.jpg', '2022-01-11 17:12:44', 'accept'),
(18, 2, '', 'gebera', '430', 15, 'outdoor', 10, 'gebera plant', 'p12-3.jpg', 'p12-2.jpg', 'p12-4.jpg', 'p12.jpg', '2022-03-23 23:31:35', 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `LikeDislike` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `order_id`, `plant_id`, `LikeDislike`) VALUES
(1, 0, 0, ''),
(2, 0, 0, 'dislike');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(100) NOT NULL,
  `businessName` varchar(250) NOT NULL,
  `brNo` varchar(250) NOT NULL,
  `businessAddress` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `ownerName` varchar(250) NOT NULL,
  `contactNo` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `shopimg` longtext NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `businessName`, `brNo`, `businessAddress`, `city`, `ownerName`, `contactNo`, `email`, `shopimg`, `password`) VALUES
(2, 'PlantMe Shop', '2345', '15, central Avenue, awariyawaththa, matara', 'Matara', 'Hasanga', '0772345677', 'whasangasavindra@gmail.com', '', '$2y$10$ClY3AvSs67lRZdGYu1BI7OO39OQhsjmWp1r9LabexOaJLu6Hd1a26'),
(4, 'Cactus Shop', '34567', 'no16', 'Maddawaththa, Matara', 'Thilina wickramasinghe', '0725896451', 'thilina@gmail.com', '', '$2y$10$Mg8wt8xRKAx6gd2IcxGZ5ekzZusF6yByilkGYHCSSUpPTYDWHnxfq'),
(5, 'TreeShop', '1234567', 'No 14,Rassandeniya,Matara', 'Matara', 'K.widanapathirana', '0718138172', 'keerthi@gmail.com', 'dpimg3.jpeg', '$2y$10$FpeyOTWDPHDpm3sGjKU1buETkX1ydZu41cbjyTLo0GcFZIgf.leti'),
(6, 'Flower Spot', '234567', 'No 23,Maddawatta,Matara', 'Matara', 'L.S.Kumudini', '0785645456', 'kumudini@gmail.com', 'shop2.png', '$2y$10$fp7bRzvlBpobSGS9hbikjuCoL8gBPT09.QNFxspfldhf6ceJqDU82');

-- --------------------------------------------------------

--
-- Table structure for table `shop_rate`
--

CREATE TABLE `shop_rate` (
  `rate_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `heartRate` int(11) NOT NULL,
  `feedback_msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_rate`
--

INSERT INTO `shop_rate` (`rate_id`, `order_id`, `seller_id`, `heartRate`, `feedback_msg`) VALUES
(0, 0, 0, 3, ''),
(0, 0, 0, 4, 'comment'),
(0, 0, 0, 2, 'bvgc'),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 0, ''),
(0, 407, 2, 0, ''),
(0, 407, 2, 0, ''),
(0, 407, 2, 0, ''),
(0, 407, 2, 0, ''),
(0, 407, 2, 0, ''),
(0, 407, 2, 0, ''),
(0, 407, 2, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`deliveryID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `driver_rate`
--
ALTER TABLE `driver_rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`plant_id`);

--
-- Indexes for table `plantrate`
--
ALTER TABLE `plantrate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`plant_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD UNIQUE KEY `rating_id` (`rating_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `driver_rate`
--
ALTER TABLE `driver_rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `plant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `plantrate`
--
ALTER TABLE `plantrate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `plant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
