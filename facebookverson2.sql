-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 02:53 PM
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
(30, 'Cute', '2022-03-22 10:22:04', 102, 34);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id_friend` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id_friend`, `user_id`, `friend_id`) VALUES
(45, 35, 34),
(46, 34, 35),
(47, 35, 36),
(48, 36, 35),
(49, 34, 36),
(50, 36, 34);

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
(434, 1, 102, 34),
(435, 1, 103, 35);

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
(102, NULL, 'hi', 'IMG-62394019b47133.72229510.png', '2022-03-22 10:18:49', 35),
(103, NULL, 'Don\'t think alots', 'IMG-623940c6baef82.35545935.jpg', '2022-03-22 10:21:42', 34);

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
  `password` varchar(200) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `cover` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `phone`, `email`, `country`, `date_of_birth`, `gender`, `password`, `create_date`, `profile`, `cover`) VALUES
(34, 'Avy', 'IU', '0889708156', 'avy@gmail.com', 'Cambodia', '2003-04-05', 'F', '$2y$10$y54OK98QYNukUvGasWEbAOwJvb3h0uVT83s0Ry9L0dACxfp.FF2Re', '2022-03-22', 'IMG-62393ed669e074.23807450.png', NULL),
(35, 'Theavy', 'PK', '0964743586', 'AvyGaming2003@gmail.com', 'Argentina', '2022-03-09', 'F', '$2y$10$GHSSEXEDDk61J0Ay0JIQrekj8Ri8SzswF35dSn0c0SPUXmLTCZTZG', '2022-03-22', 'IMG-6239409d3eb873.37073656.jpg', NULL),
(36, 'vy', 'lovely', '0889708156', 'vylonely123@gmail.com', 'China', '2003-04-05', 'F', '$2y$10$Ogr/ekTM1gE511l/.NbJUeo/F1k1Dpn6mgfA0Lbgse.sJJNsGK5Ny', '2022-03-22', 'IMG-6239d1b09283e2.77106713.jpg', 'IMG-6239d194c0d6a8.31347029.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `users_comments`
-- (See below for the actual view)
--
CREATE TABLE `users_comments` (
`username` varchar(101)
,`profile` varchar(50)
,`user_id` int(11)
,`comment_id` int(11)
,`comment` varchar(225)
,`comment_date` datetime
,`post_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `users_post`
-- (See below for the actual view)
--
CREATE TABLE `users_post` (
`post_id` int(11)
,`title` varchar(50)
,`post_description` varchar(225)
,`image` varchar(225)
,`post_date` datetime
,`user_id` int(11)
,`username` varchar(101)
,`phone` varchar(10)
,`email` varchar(200)
,`country` varchar(50)
,`date_of_birth` date
,`gender` char(1)
,`password` varchar(200)
,`profile` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `users_comments`
--
DROP TABLE IF EXISTS `users_comments`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users_comments`  AS SELECT concat(`users`.`first_name`,' ',`users`.`last_name`) AS `username`, `users`.`profile` AS `profile`, `users`.`user_id` AS `user_id`, `comments`.`comment_id` AS `comment_id`, `comments`.`comment` AS `comment`, `comments`.`comment_date` AS `comment_date`, `comments`.`post_id` AS `post_id` FROM (`users` join `comments` on(`comments`.`user_id` = `users`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `users_post`
--
DROP TABLE IF EXISTS `users_post`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users_post`  AS SELECT `posts`.`post_id` AS `post_id`, `posts`.`title` AS `title`, `posts`.`post_description` AS `post_description`, `posts`.`image` AS `image`, `posts`.`post_date` AS `post_date`, `users`.`user_id` AS `user_id`, concat(`users`.`first_name`,' ',`users`.`last_name`) AS `username`, `users`.`phone` AS `phone`, `users`.`email` AS `email`, `users`.`country` AS `country`, `users`.`date_of_birth` AS `date_of_birth`, `users`.`gender` AS `gender`, `users`.`password` AS `password`, `users`.`profile` AS `profile` FROM (`posts` left join `users` on(`users`.`user_id` = `posts`.`user_id`)) ;

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
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id_friend`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `friend_id` (`friend_id`);

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
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id_friend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`friend_id`) REFERENCES `users` (`user_id`);

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
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
