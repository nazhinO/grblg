-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2021 at 06:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

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
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `ID` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `date_published` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ID`, `article_title`, `article_content`, `date_published`, `user_ID`) VALUES
(11, 'article number 1', '<p>asr</p>', '2021-09-20 03:19:41', 21),
(12, '123', '<p>1231231</p>', '2021-09-20 03:48:10', 21),
(13, 'proper trial', '<h2>Sed quia nesciunt qui qui minus quia et. Ab laudantium consequuntur soluta placeat rerum. Dolore dolores molestias ipsam animi error.</h2><p>Occaecati ut quo labore omnis veritatis veniam itaque architecto. Est ipsa enim consequatur omnis sunt. Eos eius deserunt <i>molestiae </i>sit laudantium at quisquam rerum.</p><p>Perspiciatis minus rerum voluptas iure sit corporis. Accusantium fugiat porro non blanditiis deserunt facilis. Velit ut eveniet sunt earum autem iure maxime. Qui numquam qui ut suscipit maiores enim iure cupiditate.</p><p>Saepe dolore aliquid est qui. Dolores quasi veritatis quia rerum ut asperiores aut. Eaque voluptate qui autem ea dignissimos et ut. Hic sunt <strong>consequatur</strong> voluptatem et dolore a atque. Laudantium ipsa ut consequatur ipsum consequuntur voluptatem et. Amet veniam dolor illo exercitationem.</p><p>Sint <strong>excepturi</strong> odio magni quibusdam adipisci. Quibusdam et velit harum voluptas ipsa facere. Optio asperiores et est soluta ipsa et officia sunt.</p>', '2021-09-20 04:25:39', 21);

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
(21, 'Jan Angelo Naz', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(22, 'z', 'asdsadasdsa', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `articleAuthor` (`user_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `articleAuthor` FOREIGN KEY (`user_ID`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
