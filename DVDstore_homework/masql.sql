-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 06:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masql`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `actor_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `awards_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`actor_id`, `first_name`, `last_name`, `birth_date`, `nationality`, `awards_count`) VALUES
(901, 'Chris', 'Evans', '1981-06-13', 'USA', 5),
(902, 'Scarlett', 'Johansson', '1984-11-22', 'USA', 8),
(903, 'Robert', 'Downey', '1965-04-04', 'USA', 10),
(904, 'Chris', 'Hemsworth', '1983-08-11', 'Australia', 7),
(905, 'Mark', 'Ruffalo', '1967-11-22', 'USA', 4);

-- --------------------------------------------------------

--
-- Table structure for table `actor_movie`
--

CREATE TABLE `actor_movie` (
  `actor_movie_id` int(11) NOT NULL,
  `actor_id` int(11) DEFAULT NULL,
  `dvd_id` int(11) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor_movie`
--

INSERT INTO `actor_movie` (`actor_movie_id`, `actor_id`, `dvd_id`, `role`) VALUES
(1, 901, 401, 'Lead Role'),
(2, 902, 402, 'Supporting Role'),
(3, 903, 403, 'Lead Role'),
(4, 904, 404, 'Supporting Role'),
(5, 905, 405, 'Lead Role');

-- --------------------------------------------------------

--
-- Table structure for table `dvds`
--

CREATE TABLE `dvds` (
  `dvd_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `genre` varchar(50) NOT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvds`
--

INSERT INTO `dvds` (`dvd_id`, `title`, `genre`, `price`) VALUES
(401, 'Action Movie 1', 'Action', 15.99),
(402, 'Drama Movie 1', 'Drama', 12.50),
(403, 'Comedy Movie 1', 'Comedy', 10.75),
(404, 'Horror Movie 1', 'Horror', 16.00),
(405, 'Sci-Fi Movie 1', 'Sci-Fi', 18.50),
(408, 'It blah', 'Horror', 10.99),
(409, 'Perfect pitch', 'Comedy', 13.99);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `first_name`, `last_name`, `email`, `phone_number`) VALUES
(301, 'John', 'Doe', 'john@example.com', '0123456789'),
(302, 'Jane', 'Smith', 'jane@example.com', '0987654321'),
(303, 'Tom', 'Brown', 'tom@example.com', '0112233445'),
(304, 'Lisa', 'White', 'lisa@example.com', '0223344556'),
(305, 'Mark', 'Taylor', 'mark@example.com', '0334455667'),
(310, 'rrrrr', 'xbxfb', 'ppppfgdfdppe@gmail.com', '259612526'),
(311, 'test2', 'test', 'tess@gmail.com', '420278274');

-- --------------------------------------------------------

--
-- Table structure for table `movie_purchases`
--

CREATE TABLE `movie_purchases` (
  `purchase_id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `dvd_id` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_purchases`
--

INSERT INTO `movie_purchases` (`purchase_id`, `member_id`, `dvd_id`, `purchase_date`, `price`) VALUES
(1, 301, 401, '2024-06-15', 15.99),
(2, 302, 402, '2024-07-20', 12.50),
(3, 303, 403, '2024-08-10', 10.75),
(4, 304, 404, '2024-09-05', 16.00),
(5, 305, 405, '2024-09-15', 18.50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`actor_id`);

--
-- Indexes for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD PRIMARY KEY (`actor_movie_id`),
  ADD KEY `actor_id` (`actor_id`),
  ADD KEY `dvd_id` (`dvd_id`);

--
-- Indexes for table `dvds`
--
ALTER TABLE `dvds`
  ADD PRIMARY KEY (`dvd_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `movie_purchases`
--
ALTER TABLE `movie_purchases`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `dvd_id` (`dvd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `actor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=906;

--
-- AUTO_INCREMENT for table `actor_movie`
--
ALTER TABLE `actor_movie`
  MODIFY `actor_movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dvds`
--
ALTER TABLE `dvds`
  MODIFY `dvd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `movie_purchases`
--
ALTER TABLE `movie_purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD CONSTRAINT `actor_movie_ibfk_1` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`actor_id`),
  ADD CONSTRAINT `actor_movie_ibfk_2` FOREIGN KEY (`dvd_id`) REFERENCES `dvds` (`dvd_id`);

--
-- Constraints for table `movie_purchases`
--
ALTER TABLE `movie_purchases`
  ADD CONSTRAINT `movie_purchases_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`),
  ADD CONSTRAINT `movie_purchases_ibfk_2` FOREIGN KEY (`dvd_id`) REFERENCES `dvds` (`dvd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
