-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2022 at 03:35 PM
-- Server version: 5.7.38
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u22s1018_fit3047`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `text`) VALUES
(1, 'Who is Sam Smith? (Public Information)', 'Sam Smith is a 41 year old artist from Melbourne who specialises in Glass Sculptures. Sam loves to draw upon his past experiences and bring them to life through his artwork.'),
(2, 'What is Shining Glass?', 'Established in 2018, Sam Smith wanted to share his artworks and vision with the world. Starting from selling out of his own garage, he has built Shining Glass from the ground up, owning his own glass artwork store in Melbourne CBD.'),
(3, 'Achievements/Recommendations', '- Freemantle Glass-Making Award 2020 - Clemenger Contemporary Art Award 2021'),
(4, 'The Company and its Owner', '');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `image`) VALUES
(2, 'Sam Smith', 'artist-img/Sam Smith.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artworks`
--

INSERT INTO `artworks` (`id`, `price`, `weight`, `size`, `descriptions`, `create_date`, `order_id`, `image`, `name`, `image2`, `image3`, `image4`, `image5`) VALUES
(56, 250, 12, '12', 'This piece showcases Sam\'s love for the Christmas holiday and he wanted to share the joy that he finds when he is decorating his tree every December.', '2022-05-18 21:53:31', NULL, 'artwork-img/christmas1.png', 'Christmas Tree', 'artwork-img/christmas2.png', 'artwork-img/christmas3.png', 'artwork-img/', 'artwork-img/'),
(57, 300, 23, '25', 'This is a piece dedicated to Sam Smith\'s favourite childhood character, Mr Krabs.', '2022-05-18 21:54:28', NULL, 'artwork-img/crab1.png', 'Mr Krabs', 'artwork-img/crab2.png', 'artwork-img/', 'artwork-img/', 'artwork-img/'),
(58, 340, 24, '23', 'This is a creation from Sam about one of his favourite animals. He wanted to showcase the beauty that is the lobster and how more people should appreciate it\'s amazing features.', '2022-05-18 21:55:51', NULL, 'artwork-img/lobster1.png', 'Lobster Friend', 'artwork-img/lobster2.png', 'artwork-img/lobster3.png', 'artwork-img/lobster4.png', 'artwork-img/lobster5.png'),
(59, 500, 5, '300', 'This piece is an amazing addition to your home! This piece created by Sam when he first decided to experiment with acrylics and he really wants to share this piece with his fans.', '2022-05-18 22:00:50', NULL, 'artwork-img/Acrylic.png', 'Acrylic Wall Piece', 'artwork-img/acrylic2.png', 'artwork-img/Acrylic3.png', 'artwork-img/acrylic4.png', 'artwork-img/');

-- --------------------------------------------------------

--
-- Table structure for table `artworks_categories`
--

CREATE TABLE `artworks_categories` (
  `id` int(11) NOT NULL,
  `artwork_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artworks_categories`
--

INSERT INTO `artworks_categories` (`id`, `artwork_id`, `category_id`) VALUES
(11, 56, 8),
(12, 57, 10),
(13, 58, 9),
(14, 59, 13);

-- --------------------------------------------------------

--
-- Table structure for table `artwork_images`
--

CREATE TABLE `artwork_images` (
  `file_name` varchar(255) NOT NULL,
  `artwork_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`name`, `description`, `create_date`, `id`) VALUES
('The Christmas Specials', 'A series of glass artworks created by Sam that reflect his favourite holiday season of the year, Christmas.', '2022-04-28 07:27:59', 8),
('Animals Are Us', 'Sam\'s exploration of refined organic forms, using animals as a source of inspiration.', '2022-04-30 07:28:13', 9),
('TV Nostalgia', 'Sam\'s personal exploration of nostalgia through a series of his favourite childhood TV characters', '2022-05-10 07:28:34', 10),
('Acrylics', 'All different types of acrylic\'s made by Sam Smith and how he likes to display them throughout his home and place of work', '2022-05-18 21:59:53', 13);

-- --------------------------------------------------------

--
-- Table structure for table `category_images`
--

CREATE TABLE `category_images` (
  `file_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`first_name`, `last_name`, `email`, `phone`, `id`) VALUES
('JOhn', 'Doe', 'john@email.com', 41234566, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_sent` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `full_name`, `email`, `body`, `created`, `email_sent`) VALUES
(3, 'John Doe', 'johndoe@gmail.com', 'Hello! I am interested in purchasing this Christmas tree, would I be able to pick it up in store?', '2022-05-12 13:44:55', 1),
(4, 'Jessica Jones', 'JJ123@gmail.com', 'I would like to purchase this lobster, how do I organise payment?', '2022-05-12 13:45:25', 1),
(5, 'Samuel L Jackson', 'Sammy@gmail.com', 'Hello, I would like to purchase this amazing piece', '2022-05-12 13:45:56', 1),
(25, 'Ruby', 'ruby001@gmail.com', 'Hi ', '2022-05-18 23:33:17', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(17, 'admin@gmail.com', '$2y$10$mcDvkHtvrbwobEKbsjZmUOJpKzWHXvLtdWSJpLb2s2SxnA5k0so6u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
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
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artworks`
--
ALTER TABLE `artworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `artworks_categories`
--
ALTER TABLE `artworks_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `artwork_images`
--
ALTER TABLE `artwork_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category_images`
--
ALTER TABLE `category_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
