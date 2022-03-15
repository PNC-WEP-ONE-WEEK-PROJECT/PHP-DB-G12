-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 09:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebookverson2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(225) DEFAULT NULL,
  `comment_date` datetime DEFAULT current_timestamp(),
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `comment_date`, `post_id`, `user_id`) VALUES
(1, 'Happy birthday teacher!!!!', '2022-03-15 15:15:06', 1, 2),
(2, 'Happy birthday teacher. I wish you all the best!!!', '2022-03-15 15:15:06', 1, 3),
(3, 'Thanks for you advice', '2022-03-15 15:16:46', 3, 1),
(4, 'That\'s seems fantastic!!!', '2022-03-15 15:16:46', 5, 2),
(5, 'Congratulations!!!!', '2022-03-15 15:18:00', 2, 3),
(6, 'What happen my friend?', '2022-03-15 15:18:00', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `like_status` int(1) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `like_status`, `post_id`, `user_id`) VALUES
(1, 1, 1, 3),
(2, 1, 5, 2),
(3, 1, 1, 2),
(4, 1, 2, 3),
(5, 1, 4, 1),
(6, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `post_description` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `post_date` datetime DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `post_description`, `image`, `post_date`, `user_id`) VALUES
(1, ' Birthday', 'Happy Birthday to me. I wish myself all the best!!!!', 'images/teacher.jpg', '2022-03-15 14:43:31', 1),
(2, 'Wedding', 'Today is your happy day. I hope you are happy with your new family and love each other for a very long time.', 'images/cute_girl.jpg', '2022-03-15 14:43:31', 2),
(3, 'Experience', 'I want to share some experience that you need to continue to catch your dream no matter what happens.', NULL, '2022-03-15 14:55:07', 2),
(4, 'Feelings', 'Today I am very sad. :(', NULL, '2022-03-15 14:55:07', 3),
(5, 'Party', 'The party last night was very awesome and I like it very much.', 'images/party/jpg', '2022-03-15 15:10:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `phone`, `email`, `country`, `date_of_birth`, `gender`, `password`, `create_date`, `profile`) VALUES
(1, 'Rady', 'Y', '087354273', 'rady.y@gmail.com', 'Cambodia', '1997-03-07', 'M', 'I@am@the@best', '2022-03-15', 'images/teacher.jpg'),
(2, 'Mengyi', 'Yoeng', '0343263312', 'mengyi34@gmail.com', 'Cambodia', '2002-03-18', 'M', '!@#$1234', '2022-03-16', 'images/Mengyi.jpg'),
(3, 'Nga', 'Hoeun', '068539796', 'ngah333@gmail.com', 'Camodia', '2001-03-04', 'M', 'ngaPKT555', '2022-01-11', 'images/Nga.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
