-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 08:37 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product-sale-task`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(30) NOT NULL,
  `product_description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `product_status` int(11) NOT NULL,
  `products_available` int(11) NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_category`, `product_name`, `product_price`, `product_description`, `image`, `product_status`, `products_available`, `date_modified`) VALUES
(1, 'Clothes', 'sweater', '1000', 'This is a good sweater brought in from germany', 'product1.jpg', 1, 1, '2018-02-13 14:04:41'),
(2, 'Clothes', 'hoodie', '1500', 'This hoodie is hand stitched using the sheep from canada', 'product2.jpg', 1, 1, '2018-02-13 14:05:41'),
(3, 'Clothes', 'Trousers', '1500', 'This is a good turkey product323', 'product3.jpg', 1, 1, '2018-02-13 14:06:13'),
(4, 'Clothes', 'shirt', '1200', 'This is a good turkey product323', 'product4.jpg', 1, 1, '2018-02-13 14:06:13'),
(5, 'Bags', 'backpack', '2500', 'This is a military grade backpack used in all conditions by everyone', 'product5.jpg', 1, 1, '2018-02-13 14:08:44'),
(6, 'Bags', 'lunch bag', '300', 'Used by everyone to cary lunch and snacks', 'product6.jpg', 1, 1, '2018-02-13 14:08:44'),
(7, 'Bags', 'handbag', '800', 'Women love this bag and it\'s a perfect match for everything', 'product7.jpg', 1, 1, '2018-02-13 14:08:44'),
(8, 'Accessories', 'earings', '500', 'Women love to wear them and they are perfect match for everything', 'product8.jpg', 1, 1, '2018-02-13 14:10:22'),
(9, 'Accessories', 'shoes', '2500', 'they are used everywhere by all the people', 'product9.jpg', 1, 1, '2018-02-13 14:10:22'),
(10, 'Accessories', 'sandals', '200', 'they are used everywhere by all the people', 'product10.jpg', 1, 1, '2018-02-13 14:10:22'),
(11, 'Accessories', 'ear studs', '700', 'Worn by everybody in all function', 'product11.jpg', 1, 1, '2018-02-13 14:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`user_id`, `email`, `password`, `date_registered`) VALUES
(1, 'admin@gmail.com', 'admin', '2018-02-13 15:07:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
