-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 10:37 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`Name`, `Email`, `Username`, `Password`) VALUES
('Radhika Shinde', 'radhika@gmail.com', 'radhika', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tour_details`
--

CREATE TABLE `tour_details` (
  `place` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `t_start_date` varchar(255) NOT NULL,
  `t_end_date` varchar(255) NOT NULL,
  `t_cost` varchar(255) NOT NULL,
  `b_amount` varchar(255) NOT NULL,
  `b_last_date` varchar(255) NOT NULL,
  `o_cost` varchar(255) NOT NULL,
  `o_date_till` varchar(255) NOT NULL,
  `transport` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_details`
--

INSERT INTO `tour_details` (`place`, `duration`, `t_start_date`, `t_end_date`, `t_cost`, `b_amount`, `b_last_date`, `o_cost`, `o_date_till`, `transport`,'book tour) VALUES
('Australia', '7days', '2019-12-07', '2019-12-10', '10000', '700', '2019-12-06', '150', '2019-12-05', 'Flight','Book Now'),
('Haridwar', '5days', '2020-08-01', '2020-08-05', '5000', '3500', '2020-07-15', '800', '2020-07-01', 'Bus','Book Now'),
('Ayodhya', '7days', '2020-04-16', '2020-04-21', '4000', '1000', '2020-03-31', '300', '2020-03-01', 'Bus','Book Now'),
('Singapour', '5days', '2020-09-16', '2020-09-21', '10000', '1000', '2020-08-06', '400', '2020-07-30', 'Flight','Book Now'),
('Kolhapur', '3days', '2020-06-19', '2020-06-24', '2000', '1000', '2020-05-22', '500', '2020-04-28', 'Bus','Book Now'),
('Amritsar', '5days', '2020-11-11', '2020-11-14', '9000', '2000', '2020-11-26', '400', '2020-11-16', 'Train','Book Now'),
('Kedarnath', '3days', '2020-02-20', '2020-02-23', '8000', '1000', '2020-01-31', '300', '2020-01-15', 'Train',,'Book Now'),
('Varanasi', '5days', '2019-12-17', '2019-12-17', '4000', '4500', '2019-12-26', '1000', '2019-12-18', 'Train','Book Now'),
('Europe', '7days', '2020-12-09', '2020-12-12', '10000', '1000', '2020-11-30', '400', '2020-11-18', 'Flight','Book Now'),
('Pune', '5days', '2020-07-10', '2020-07-15', '7500', '2500', '2020-06-30', '400', '2020-06-10', 'Bus','Book Now'),
('Jaipur', '5days', '2020-03-11', '2020-03-16', '5500', '2000', '2020-02-19', '1000', '2020-02-01', 'Train','Book Now'),
('Karnatak', '3days', '2020-03-17', '2020-03-20', '7500', '1500', '2020-02-20', '500', '2020-01-31', 'Bus','Book Now'),
('Greece', '7days', '2019-12-10', '2019-12-17', '10000', '500', '2019-12-16', '100', '2019-12-04', 'Flight','Book Now'),
('Kokan', '3days', '2020-02-05', '2019-12-08', '7000', '1500', '2020-01-30', '500', '2020-01-14', 'Bus','Book Now'),
('Dubai', '5days', '2020-06-03', '2020-06-06', '10000', '1500', '2020-05-28', '500', '2020-05-15', 'Flight','Book Now'),
('Chennai', '3days', '2020-01-05', '2020-01-10', '5000', '2000', '2019-12-31', '500', '2019-12-25', 'Train','Book Now'),
(' England', '3days', '2020-09-08', '2020-09-11', '10000', '2000', '2020-08-13', '300', '2020-08-01', 'flight','Book Now'),
('Kerala', '3days', '2019-12-27', '2019-12-30', '6000', '1000', '2019-12-07', '500', '2019-12-06', 'Bus','Book Now'),
('Agra', '5days', '2020-04-15', '2020-04-20', '5000', '1500', '2020-03-18', '300', '2020-03-11', 'Bus','Book Now'),
('Sundarban', '5days', '2020-09-16', '2020-09-21', '7000', '2500', '2020-08-19', '1000', '2020-07-16', 'Bus','Book Now'),
('Thailand', '7days', '2020-04-01', '2020-04-09', '10000', '1000', '2020-03-20', '500', '2020-03-18', 'Flight','Book Now'),
('Humpi', '3days', '2020-05-12', '2020-05-15', '5500', '1000', '2020-04-17', '600', '2020-04-10', 'Bus','Book Now');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Username`, `Email`, `Phone`, `Password`) VALUES
('', '', '', '', ''),
('radhika shinde', 'radhika', 'radhika@gmail.com', '1234567890', '12345'),
('shravani mali', 'shravani', 'shravani@gmail.com', '01303712369', '12345'),
('shveti chandan', 'shveti', 'shveti@gmail.com', '01478963214', '12345'),
('neeta raskar', 'neeta', 'neeta@gmail.com', '01745236987', '12345'),
('anisha gaikwad', 'anisha', 'anisha@gmail.com', '1234567890', '12345'),
('tanuja narsale', 'tanuja', 'tanuja@gmail.com', '01478556932', '12345'),
('deepali gavhane', 'deepali', 'deepali@gmail.com', '01234567891', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour_details`
--
ALTER TABLE `tour_details`
  ADD PRIMARY KEY (`place`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
