-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 07:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iDiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `category_url` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `category_url`, `date_created`) VALUES
(1, 'Python', 'Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Its high-level built in data structures, combined with dynamic typing and dynamic binding, make it very attractive for Rapid Application Development, as well as for use as a scripting or glue language to connect existing components together.', 'https://www.python.org/', '2022-01-24 12:56:24'),
(2, 'JavaScript', 'JavaScript, often abbreviated JS, is a “high-level, single-threaded, garbage-collected, interpreted (or just-in-time compiled), prototype-based, multi-paradigm, dynamic language with a non-blocking event loop” programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS.\n', 'https://developer.mozilla.org/en-US/docs/Web/JavaScript', '2022-01-24 12:57:08'),
(3, 'C++', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or C with Classes. The language has expanded significantly over time, and modern C++ now has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation.', 'https://isocpp.org/', '2022-01-24 19:42:41'),
(4, 'Flutter', 'Flutter is an open source framework by Google for building beautiful, natively compiled, multi-platform applications from a single codebase.', 'https://flutter.dev/', '2022-01-24 23:38:20'),
(5, 'Linux', 'Linux kernel is a free and open-source, monolithic, modular, multitasking, Unix-like operating system kernel. ', 'https://www.linux.org/', '2022-01-24 23:39:37'),
(6, 'RUST', 'Rust is a multi-paradigm, general-purpose programming language designed for performance and safety, especially safe concurrency.', 'https://www.rust-lang.org/', '2022-01-24 23:40:07'),
(7, 'Java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let programmers write once, run anywhere (WORA).', 'https://www.java.com/en/', '2022-01-24 23:41:25'),
(8, 'Microsoft Windows', 'Microsoft Windows, commonly referred to as Windows, is a group of several proprietary graphical operating system families, all of which are developed and marketed by Microsoft. ', 'https://www.microsoft.com/en-in/windows', '2022-01-24 23:42:28'),
(9, 'macOS', 'macOS is a proprietary graphical operating system developed and marketed by Apple Inc. since 2001. It is the primary operating system for Apple\'s Mac computers.', 'https://www.apple.com/in/macos', '2022-01-24 23:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'hi', 1, 1, '2022-03-20 19:52:42'),
(2, 'suoer', 2, 2, '2022-03-20 19:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(15) NOT NULL,
  `thread_title` text NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(15) NOT NULL,
  `thread_user_id` int(15) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1, 'hello', 'hi', 1, 1, '2022-03-21 00:43:05'),
(2, 'hello', 'hi', 1, 0, '2022-03-21 00:43:21'),
(3, 'js', '', 2, 2, '2022-03-21 00:45:10'),
(4, 'so2', '', 1, 0, '2022-03-21 00:53:59'),
(5, 'so2', '', 1, 0, '2022-03-21 00:54:21'),
(6, 'Unable to install Mojave', 'Not on my MacBook Pro 2012', 9, 0, '2022-03-21 01:31:15'),
(7, 'Unable to add Flutter SDK to path.', 'I am not able to do my work', 4, 0, '2022-03-21 15:49:51'),
(8, 'Unable to add Flutter SDK to path.', 'I am not able to do my work', 4, 0, '2022-03-21 15:50:02'),
(9, 'hi', '', 4, 0, '2022-03-21 15:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `userName` varchar(25) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `userName`, `userEmail`, `userPass`, `timestamp`) VALUES
(1, 'masterofcosmos', 'hello@masterofcosmos.com', '$2y$10$95V8G9LC1Z8WsPulcWbJBeqmPc5gozo1dFtmIOZJ.oQWN7suqwM/.', '2022-03-21 00:17:38'),
(2, 'xxx', 'sex@xxx.xom', '$2y$10$jT7dSiQoJZTiZo8YwaX8nuuIMQ9Otpitp/bhVkskP5cba4XGlCb1C', '2022-03-21 00:25:44'),
(3, 'tony', 'ironman@stark.com', '$2y$10$7Lg0j9WZzTeVCmYJ3xQPweKdAuTnB.Eq717xH0wktQ8waEPy34Vmq', '2022-03-21 00:26:07'),
(4, 'hello', 'hi@someone.com', '$2y$10$hs2ELduO2wcgc1CgqVLO1uGeV8kB1r2GsOea5aByyIi2mhMhVhrzy', '2022-03-21 00:38:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
