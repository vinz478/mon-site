-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 06, 2018 at 10:39 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: mon-site
--

-- --------------------------------------------------------

--
-- Table structure for table eventcomments
--

CREATE TABLE eventcomments (
  id int(11) NOT NULL,
  event_id int(11) NOT NULL,
  user_id int(11) NOT NULL,
  content text NOT NULL,
  published_at datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table events
--

CREATE TABLE events (
  id int(11) NOT NULL,
  title varchar(255) NOT NULL,
  description text NOT NULL,
  start_at datetime NOT NULL,
  end_at datetime NOT NULL,
  address varchar(255) NOT NULL,
  city varchar(60) NOT NULL,
  phone bigint(10) DEFAULT NULL,
  zip_code int(5) NOT NULL,
  created_at datetime NOT NULL,
  updated_at datetime NOT NULL,
  url text,
  user_id int(11) NOT NULL,
  published_at datetime NOT NULL,
  commentId int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE users (
  id int(11) NOT NULL,
  username varchar(40) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  created_at date NOT NULL,
  updated_at datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table eventcomments
--
ALTER TABLE eventcomments
  ADD PRIMARY KEY (id);

--
-- Indexes for table events
--
ALTER TABLE events
  ADD PRIMARY KEY (id);

--
-- Indexes for table users
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table eventcomments
--
ALTER TABLE eventcomments
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table events
--
ALTER TABLE events
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table users
--
ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;