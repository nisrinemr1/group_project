/* This is what we have to use for our project. We just have to use the name of our table in the model pages. (like sentences for sentences page on model, or user page on the model.) */

-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 18, 2021 at 11:27 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `plantchi`
--

-- --------------------------------------------------------

--
-- Table structure for table `sentences`
--

CREATE TABLE `sentences` (
  `sentence_id` int(11) NOT NULL,
  `sentence` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentences`
--

INSERT INTO `sentences` (`sentence_id`, `sentence`) VALUES
(1, 'Do it properly -_-'),
(2, 'C\'mon...'),
(3, 'What should I do with you'),
(4, 'Don\'t play stupid'),
(5, 'It is what it is'),
(6, 'With all due respect, do you use your eyes?'),
(7, 'Just sayin\', I died.'),
(8, 'IOLOOOO \r\n(I Only Live Once)'),
(9, 'You know right? ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sentences`
--
ALTER TABLE `sentences`
  ADD PRIMARY KEY (`sentence_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sentences`
--
ALTER TABLE `sentences`
  MODIFY `sentence_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;