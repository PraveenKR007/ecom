-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 01:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brands_id` int(11) NOT NULL,
  `brands_title` text NOT NULL,
  `brands_image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brands_id`, `brands_title`, `brands_image`) VALUES
(5, 'Adidas', './brandImage/Adidas.JPG'),
(6, 'puma', './brandImage/puma.png'),
(8, 'HP', './brandImage/HP.png'),
(10, 'Intex', './brandImage/Intex.png'),
(11, 'Metronaut ', './brandImage/Metronaut_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_prod_id` int(11) NOT NULL,
  `cart_ip_add` varchar(64) NOT NULL,
  `cart_qty` int(11) NOT NULL,
  `cart_session` int(11) NOT NULL,
  `cart_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_prod_id`, `cart_ip_add`, `cart_qty`, `cart_session`, `cart_user`) VALUES
(5, 13, '::1', 3, 2017, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_title` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_title`) VALUES
(2, 'jeans'),
(4, 'jacket'),
(6, 'shoes'),
(7, 'shocks'),
(8, 'shoes'),
(9, 'boot'),
(10, 'bag'),
(11, 'Television (T.V)'),
(12, 'shirt Denim'),
(13, 'shirt cottan'),
(14, 'shirt (Half sleves)');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `otp` text NOT NULL,
  `created_at` date NOT NULL,
  `is_expired` int(1) NOT NULL,
  `r_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(256) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `product_type`) VALUES
(10, 13, 11, 'Metronaut Men Striped Casual White Shirt', 899, '<pre>\r\nFabric: Cotton\r\nSlim Fit, Full Sleeve\r\nCollar Type: Slim\r\nPattern: Striped\r\nSet of 1\r\n</pre>', './productImage/Metronaut_Men_Striped_Casual_White_Shirt.jpeg', 'Fabric: Cotton Slim Fit, Full Sleeve Collar Type: Slim Pattern: Striped Set of 1', 3),
(13, 6, 5, 'addidas shoe1', 1200, 'sss', './productImage/addidas_shoe1.jpeg', 'sss', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `product_type_id` int(11) NOT NULL,
  `product_type_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type_id`, `product_type_title`) VALUES
(1, 'kids_female'),
(2, 'kids_male'),
(3, 'men'),
(4, 'women'),
(5, 'electronics_Mobile'),
(6, 'electronic_Laptop'),
(7, 'electronic_TV');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_f_name` varchar(256) NOT NULL,
  `user_l_name` varchar(256) NOT NULL,
  `user_email` text NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_image` varchar(256) NOT NULL DEFAULT 'user/upload/img.png',
  `user_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_f_name`, `user_l_name`, `user_email`, `user_mobile`, `user_image`, `user_pass`) VALUES
(37, 'Md khalid', 'raza', 'mdkhalidrazakhan@gmail.com', '9835555982', 'user/upload/img.png', '5ec86c64a4884d551cd6a55356482127');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_login_id` int(11) NOT NULL,
  `user_login_password` text NOT NULL,
  `user_login_ref` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_reg_temp`
--

CREATE TABLE `user_reg_temp` (
  `user_reg_temp_id` int(11) NOT NULL,
  `user_reg_temp_f_name` varchar(256) NOT NULL,
  `user_reg_temp_l_name` varchar(256) NOT NULL,
  `user_reg_temp_email` varchar(256) NOT NULL,
  `user_reg_temp_mobile` varchar(11) NOT NULL,
  `user_reg_temp_password` text NOT NULL,
  `user_reg_temp_ip_add` varchar(256) NOT NULL,
  `user_reg_temp_date` date NOT NULL,
  `user_reg_temp_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_reg_temp_mobile_otp` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg_temp`
--

INSERT INTO `user_reg_temp` (`user_reg_temp_id`, `user_reg_temp_f_name`, `user_reg_temp_l_name`, `user_reg_temp_email`, `user_reg_temp_mobile`, `user_reg_temp_password`, `user_reg_temp_ip_add`, `user_reg_temp_date`, `user_reg_temp_time`, `user_reg_temp_mobile_otp`) VALUES
(37, 'Md khalid', 'raza', 'mdkhalidrazakhan@gmail.com', '9835555982', '5ec86c64a4884d551cd6a55356482127', '::1', '2017-08-04', '2017-08-04 02:49:25', '27477');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brands_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_login_id`),
  ADD KEY `user_login_ref` (`user_login_ref`);

--
-- Indexes for table `user_reg_temp`
--
ALTER TABLE `user_reg_temp`
  ADD PRIMARY KEY (`user_reg_temp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brands_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_login_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_reg_temp`
--
ALTER TABLE `user_reg_temp`
  MODIFY `user_reg_temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `otp`
--
ALTER TABLE `otp`
  ADD CONSTRAINT `otp_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `user_reg_temp` (`user_reg_temp_id`);

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `user_login_ibfk_1` FOREIGN KEY (`user_login_ref`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
