-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 06:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_info`
--

CREATE TABLE `tbl_book_info` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `book_copyright` varchar(50) NOT NULL,
  `edition_num` int(20) NOT NULL,
  `page_num` int(20) NOT NULL,
  `num_copies` int(20) NOT NULL,
  `library_name` varchar(100) NOT NULL,
  `shelf_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book_info`
--

INSERT INTO `tbl_book_info` (`id`, `subject`, `title`, `author_name`, `publisher_name`, `ISBN`, `book_copyright`, `edition_num`, `page_num`, `num_copies`, `library_name`, `shelf_no`) VALUES
(8, 'jgjuafld;k', 'ahjfkhbfjbd', ' vgsavchdsvalhfgsh', 'avfdyiihfvua', '$59076-679889', 'gogpuudg', 2010, 304, 58, 'hjkishf', 11),
(9, 'English', 'Advanced english grammar', ' Hossain', 'Pj', '$563979209038', 'author', 2010, 301, 30, 'bnjvbjl', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_borrow_book`
--

CREATE TABLE `tbl_borrow_book` (
  `id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `crnt_date` date NOT NULL,
  `rtrn_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_borrow_book`
--

INSERT INTO `tbl_borrow_book` (`id`, `mem_id`, `book_id`, `crnt_date`, `rtrn_date`) VALUES
(1, 569907, 8, '2020-10-10', '0000-00-00'),
(2, 456789, 9, '2020-10-06', '0000-00-00'),
(3, 456789, 8, '2020-10-10', '2020-10-22'),
(4, 569907, 8, '2020-10-10', '2020-10-22'),
(5, 569907, 8, '2020-10-10', '2020-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_member`
--

CREATE TABLE `tbl_new_member` (
  `id` int(11) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `confirm_pass` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `major` varchar(10) NOT NULL,
  `expired` date NOT NULL,
  `mem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_new_member`
--

INSERT INTO `tbl_new_member` (`id`, `pass`, `confirm_pass`, `name`, `email`, `major`, `expired`, `mem_id`) VALUES
(1, '0', '0', 'raihan', 'stephen@gmail.com', 'c7', '2020-10-21', 456789),
(2, 'fg567', 'fg567', 'renam', 'yfyf@gmail.com', 'c4', '2020-10-27', 569907);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `email` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`id`, `name`, `address`, `street`, `city`, `contact_no`, `age`, `email`) VALUES
(1, 'israt', 'chandgaon,Chittagong', ' Arkaan road', 'chandgaon', '+016445567297', 20, 'israt23@gmail.com'),
(5, 'fhfs', 'gfyhuk', ' jjhj', 'guk', '+77568', 29, 'israt@gmail.com'),
(20, 'Runa', 'Chawkbazar,Chandgaon,Chittagong', ' Arkan road', 'Chandgaon', '+0154324252561', 23, 'runa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return_book`
--

CREATE TABLE `tbl_return_book` (
  `id` int(11) NOT NULL,
  `mem_id` int(8) NOT NULL,
  `book_id` int(8) NOT NULL,
  `fineday` date NOT NULL,
  `fine_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_return_book`
--

INSERT INTO `tbl_return_book` (`id`, `mem_id`, `book_id`, `fineday`, `fine_amount`) VALUES
(1, 569907, 8, '0000-00-00', 120),
(2, 569907, 8, '2020-10-01', 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book_info`
--
ALTER TABLE `tbl_book_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_borrow_book`
--
ALTER TABLE `tbl_borrow_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_new_member`
--
ALTER TABLE `tbl_new_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_return_book`
--
ALTER TABLE `tbl_return_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book_info`
--
ALTER TABLE `tbl_book_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_borrow_book`
--
ALTER TABLE `tbl_borrow_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_new_member`
--
ALTER TABLE `tbl_new_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_return_book`
--
ALTER TABLE `tbl_return_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
