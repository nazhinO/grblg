-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 04:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(11, 'asd', 'asd', 'asd'),
(12, 'asd', 'asd', 'asd'),
(13, 'asd', 'asd', '$2y$10$JIRMfilrYV8c2HTzMo5.5.OZlMjhOxZ7V'),
(14, 'asd', 'asd', 'f10e2821bbbea527ea02200352313bc059445190'),
(15, 'a', 'a', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(16, 'a', 'a', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(17, 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(18, 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(19, 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(20, 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(21, 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(22, 'z', 'asdsadasdsa', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
