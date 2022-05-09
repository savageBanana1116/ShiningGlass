-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 06:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit3047`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artworks`
--

CREATE TABLE `artworks` (
  `id` int(11) NOT NULL,
  `price` float NOT NULL,
  `weight` float NOT NULL,
  `size` varchar(32) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'No image',
  `name` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artworks`
--

INSERT INTO `artworks` (`id`, `price`, `weight`, `size`, `descriptions`, `create_date`, `order_id`, `image`, `name`, `image2`, `image3`, `image4`, `image5`) VALUES
(35, 400, 5, '20', 'Along with the Water Dance sculpture, Sam created another piece as he felt so inspired by the waves and really wanted to encapsulate their beauty as well as their power.', '2022-04-12 13:43:43', NULL, 'artwork-img/Wave scuplture.jpg', 'Wave', NULL, NULL, NULL, NULL),
(37, 1000, 20, '30', 'This Free Flowing sculpture was created by Sam Smith in August 2021. This piece encapsulates the free flowing creativeness that he feels when he is creating his artwork. This piece is a one of a kind and something that Sam is proud that he can display.', '2022-04-13 20:11:08', NULL, 'artwork-img/Free Flowing Sculpture.jpg', 'Free Flowing', NULL, NULL, NULL, NULL),
(45, 900, 15, '40', 'This piece was inspired by Sam\'s time living along the beaches of Noosa. During his time there he would often appreciate how the waves would interact with each other and crash together. Almost dancing with each other.', '2022-04-13 22:56:00', NULL, 'artwork-img/Water Dance sculpture.jpg', 'Water Dance', NULL, NULL, NULL, NULL),
(57, 56, 123, '1111', 'dsa', '2022-05-09 23:25:06', NULL, 'artwork-img/car.jpg', 'High Priority', 'artwork-img/lady.png', 'artwork-img/panda.jfif', 'artwork-img/tiger.jpeg', 'artwork-img/tree-736885__480.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artworks_categories`
--

CREATE TABLE `artworks_categories` (
  `id` int(11) NOT NULL,
  `artwork_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artworks_categories`
--

INSERT INTO `artworks_categories` (`id`, `artwork_id`, `category_id`) VALUES
(12, 57, 6);

-- --------------------------------------------------------

--
-- Table structure for table `artwork_images`
--

CREATE TABLE `artwork_images` (
  `file_name` varchar(255) NOT NULL,
  `artwork_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`name`, `description`, `create_date`, `id`) VALUES
('cat 1', 'cat 1 description', '2022-05-06 21:32:28', 6),
('cat 2', 'cat 2 description', '2022-05-06 21:29:55', 7),
('cat 3', 'cat 23 description', '2022-05-06 21:30:04', 8);

-- --------------------------------------------------------

--
-- Table structure for table `category_images`
--

CREATE TABLE `category_images` (
  `file_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `Heading` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customer_id` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` int(32) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `country` int(32) NOT NULL,
  `order_time` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `artworks_categories`
--
ALTER TABLE `artworks_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artwork_id` (`artwork_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `artwork_images`
--
ALTER TABLE `artwork_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artwork_id` (`artwork_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_images`
--
ALTER TABLE `category_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artworks`
--
ALTER TABLE `artworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `artworks_categories`
--
ALTER TABLE `artworks_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `artwork_images`
--
ALTER TABLE `artwork_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category_images`
--
ALTER TABLE `category_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artworks`
--
ALTER TABLE `artworks`
  ADD CONSTRAINT `artworks_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artworks_categories`
--
ALTER TABLE `artworks_categories`
  ADD CONSTRAINT `artworks_categories_ibfk_1` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artworks_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artwork_images`
--
ALTER TABLE `artwork_images`
  ADD CONSTRAINT `artwork_images_ibfk_1` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category_images`
--
ALTER TABLE `category_images`
  ADD CONSTRAINT `category_images_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
