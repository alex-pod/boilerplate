-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2017 at 01:11 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `boilerplate`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(64) NOT NULL,
  `company` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password_hash`, `auth_key`, `name`, `role`, `company`, `position`, `email`, `phone`) VALUES
(1, 'alex', '$2y$13$bZgjk6lJ2EmydkhW4.FojetPBbwp2ZpQk0nnfBzoZBUCXESIYehmy', '1OCpY4DdK4_cZb2fzEab00ZWI4Th3PXZ', 'Александр', 'admin', 'Google', 'Software Engineer', 'ap@gmail.com', '0501234567'),
(17, 'demo', '$2y$13$amgzr9Ep.4byK7lqa3/PIer0yGtm8cmyq6e92Xg5/R7LS8IADGwqC', 'RYoL53piSSVam6GhjPTZ8vM5ZgXWTT_6', 'askjdfh@sdf.sf', 'user', '', '', '', ''),
(18, 'new', '$2y$13$mLl9OkwdqrAKMnTVySYB/OvJicKjHeLkJkhdbLBGeUsaMKALHlK.2', 'KskWUrtPGeKOX6JZa89re2WSI9a0ZqrE', 'sdfsfsdf', 'user', 'Моя компани ltd', 'Нащальника', 'ad@am.d', '1231312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;