-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2015 at 04:58 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klarity`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(1000) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `post_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'This is great news. Most companies allocate engineering resources to more than one technology at a time.  There is nothing wrong with Mazda doing so. should it even not work out, lessons learned from making the rotary more efficient could be applied to their Skyactiv line. ', 1, 2, '2015-09-21 02:46:27', NULL, NULL),
(2, 'The Tuscon was a nice riding CUV, but it''s not "luxury" enough to take on the Germans. HOWEVER - if Hyundai could built a real powerplant to take on the Jeep SRT and Nissan GT-R, they would shed their a lot of prejudice towards their brand.', 1, 3, '2015-09-22 00:52:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE IF NOT EXISTS `labels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`id`, `label`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'D.I.Y', '2015-09-21 02:35:44', NULL, NULL),
(2, 'Fashion', '2015-09-21 02:35:44', NULL, NULL),
(3, 'Car', '2015-09-21 02:36:38', NULL, NULL),
(4, 'Theme', '2015-09-21 02:36:38', NULL, NULL),
(5, 'Web Design', '2015-09-21 02:36:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `label_post`
--

CREATE TABLE IF NOT EXISTS `label_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `label_id` (`label_id`,`post_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `label_post`
--

INSERT INTO `label_post` (`id`, `label_id`, `post_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, '2015-09-21 02:45:59', NULL, NULL),
(2, 3, 2, '2015-09-22 01:19:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `photo`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(1, 'Mazda still has a team working on rotary engines', 'The flame still burns within Mazda to stage a rotary engine revival. Before you start getting excited, it''s way too soon to start saving money for the fabled, next-gen RX-7 or RX-8. Still, company boss Masamichi Kogai confirmed to Autocar that the Japanese automaker has an engineering team dedicated', '', '2015-09-21 02:44:24', NULL, NULL, 1),
(2, 'Hyundai cranks the Tucson to 700 hp for SEMA', 'The annual SEMA Show doesn''t kick off in Las Vegas until Nov. 3, but Hyundai is getting an early start by teasing another collaboration with the talented tuners at Bisimoto Engineering. Following up on their high-performance takes on the Sonata, Genesis Coupe, and Elantra GT of past years, the attention turns to the Tucson. Now that the crossover packs over 700 horsepower, Bisimoto prefers to describe it as a "Brute Ute."\n', '', '2015-09-22 00:48:28', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `avatar` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `remember_token` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `role`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Peter', 'Smith', 'peter.smith@gmail.com', 'peter.smith', 0, '', '1', '', '2015-09-21 02:29:07', NULL, NULL),
(2, 'Paul', 'Jones', 'paul.jones@gmail.com', 'paul.jones', 0, '', '1', '', '2015-09-21 02:29:07', NULL, NULL),
(3, 'Mary\r\n', 'Stevens\r\n', 'mary.stevens@gmail.com', 'mary.stevens', 0, '', '1', '', '2015-09-21 02:33:59', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `label_post`
--
ALTER TABLE `label_post`
  ADD CONSTRAINT `label_post_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `label_post_ibfk_2` FOREIGN KEY (`label_id`) REFERENCES `labels` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
