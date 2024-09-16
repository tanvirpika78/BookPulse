-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 05:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `bookpic` varchar(25) NOT NULL,
  `bookname` varchar(25) NOT NULL,
  `bookdetail` varchar(110) NOT NULL,
  `bookauthor` varchar(25) NOT NULL,
  `bookpub` varchar(25) NOT NULL,
  `branch` varchar(110) NOT NULL,
  `bookprice` varchar(25) NOT NULL,
  `bookquantity` varchar(25) NOT NULL,
  `bookava` int(11) NOT NULL,
  `bookrent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `bookpic`, `bookname`, `bookdetail`, `bookauthor`, `bookpub`, `branch`, `bookprice`, `bookquantity`, `bookava`, `bookrent`) VALUES
(8, 'b1.png', 'আধুনিক পাশ্চাত্য দর্শন', 'দর্শন', 'Dr. Aminul Islam', 'মাওলা ব্রাদার্স', 'other', '400', '5', 2, 3),
(9, 'b2.png', 'যুক্তিবিদ্যার ভূমিকা', 'দর্শন', 'তাসমিনা জাহান', 'মেরিট ফেয়ার প্রকাশন', 'other', '450', '20', 20, 10),
(10, 'b3.jpeg', 'মুসলিম দর্শন পরিচিতি', 'দর্শন', 'Dr.M Abdul Hamid', 'মেরিট ফেয়ার প্রকাশন', 'other', '350', '8', 8, 10),
(11, 'b4.jpeg', 'Data Communications and N', 'CSE BOOK', 'Forouzan', 'Mcgraw Hill Education', 'other', '500', '6', 5, 11),
(12, '70.jpg', 'কপালকুণ্ডলা', 'Novel', 'বঙ্কিমচন্দ্র চট্টোপাধ্যায', 'ABC', 'other', '120', '130', 129, 1),
(13, 'h1 (3).jpg', 'The Lion King', 'Fiction', 'Unknown', 'ABC', 'other', '120', '110', 109, 10),
(14, 'h1 (4).jpg', 'Girl in Trouble', 'Novel', 'Stacy Claflin', 'ABC', 'other', '130', '110', 110, 0),
(15, 'h1 (6).jpg', ' C Programming', 'Learn About C Programming', 'Adam Dodson', 'ABC', 'other', '120', '110', 110, 0),
(16, 'h1 (8).jpg', 'Python Functions', 'Learn About Python Functions', 'Jon Tod', 'Hachette', 'other', '170', '120', 119, 1),
(17, 'b0.jpg', 'নেপোলিয়নের চিঠি', 'Fiction', 'সত্যজিৎ রায়', 'Boi Bitan', 'other', '200', '140', 140, 0),
(18, 'b9.jpg', 'হারিয়ে যাওয়া লেখা', 'Novel', 'প্রফুল্ল রায়', 'Boi Bitan', 'other', '230', '130', 130, 0),
(19, 'b11.jpg', 'সব আলো নিভে যাক আঁধারে', 'Novel', 'Unknown', 'Panjeri', 'other', '300', '120', 120, 0),
(20, 'h1 (1).jpg', 'Aladdin', 'Fiction', 'Stacy Claflin', 'Hachette', 'other', '200', '140', 137, 3),
(21, 'h1 (11).jpg', 'Sherlock Holmes', 'Thriller', 'Arthur Conan Doyle', 'HarperCollins', 'other', '370', '160', 160, 0),
(22, 'h1 (2).jpg', 'Peter Pan', 'Fiction', 'Unknown', 'Hachette', 'other', '200', '120', 120, 0),
(23, 'h1 (12).jpg', 'Harry Potter', 'Novel', 'J. K. Rowling', 'Macmillan', 'other', '300', '140', 140, 0),
(24, 'h1.jpg', 'Meena', 'Fiction', 'Unknown', 'Boi Bitan', 'other', '120', '200', 200, 0),
(25, 'h1 (9).jpg', 'Learn English', 'Learn about English', 'Unknown', 'XYZ', 'other', '120', '130', 130, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `number`, `email`, `message`) VALUES
(1, 'dip', '1', 'dip@gmail.com', 'hi'),
(2, 'dip1', '1', 'dip@gmail.com', 'd'),
(3, 'dip', '1', 'dip@gmail.com', 'hi'),
(4, 'dip', '1', 'dip@gmail.com', 'hi'),
(5, 'dip', '12', 'd@gmail.com', 'hi'),
(6, 'dip', '12', 'dip@gmail.com', 'done'),
(7, 'dip', '12', 'dip@gmail.com', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE `issuebook` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `issuename` varchar(25) NOT NULL,
  `issuebook` varchar(25) NOT NULL,
  `issuetype` varchar(25) NOT NULL,
  `issuedays` int(11) NOT NULL,
  `issuedate` varchar(25) NOT NULL,
  `issuereturn` varchar(25) NOT NULL,
  `fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`id`, `userid`, `issuename`, `issuebook`, `issuetype`, `issuedays`, `issuedate`, `issuereturn`, `fine`) VALUES
(12, 1, 'pika', 'আধুনিক পাশ্চাত্য দর্শন', 'student', 7, '26/01/2024', '02/02/2024', 0),
(13, 1, 'pika', 'আধুনিক পাশ্চাত্য দর্শন', 'student', 5, '26/01/2024', '31/01/2024', 0),
(18, 2, 'dip', 'আধুনিক পাশ্চাত্য দর্শন', 'teacher', 1, '18/06/2024', '19/06/2024', 0),
(20, 2, 'dip', 'Aladdin', 'teacher', 0, '18/06/2024', '18/06/2024', 0),
(21, 2, 'dip', 'Aladdin', 'teacher', 21, '18/06/2024', '09/07/2024', 0),
(22, 2, 'dip', 'The Lion King', 'teacher', 1, '18/06/2024', '19/06/2024', 0),
(24, 2, 'dip', 'কপালকুণ্ডলা', 'teacher', 1, '18/06/2024', '19/06/2024', 0),
(25, 2, 'dip', 'Python Functions', 'teacher', 1, '18/06/2024', '19/06/2024', 0),
(26, 2, 'dip', 'Aladdin', 'teacher', 21, '18/06/2024', '09/07/2024', 0),
(27, 1, 'pika', 'Data Communications and N', 'student', 0, '18/06/2024', '18/06/2024', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `id` int(50) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `genre` int(50) NOT NULL,
  `description` text NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recommendations`
--

INSERT INTO `recommendations` (`id`, `bookname`, `author`, `genre`, `description`, `userid`) VALUES
(1, 'Oliver twist', 'jon dew', 0, 'I want this book.', 0),
(2, 'xrsf', 'dff', 0, 'ggggggggggggggggggggggggg', 0),
(3, 'lost ', 'dff', 0, 'ddddddddddddddddddddddddddddddddddddddddd', 2),
(4, 'vvvvvvvv', 'dg', 0, 'ghee', 2),
(5, 'n', 'n', 0, 'nnnnnnnnnnnnnnnnnnnn', 2),
(6, 'কপালকুণ্ডলা', 'jon dew', 0, 'hhhhhhhhhhhhhhhhhhhh', 2);

-- --------------------------------------------------------

--
-- Table structure for table `requestbook`
--

CREATE TABLE `requestbook` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `usertype` varchar(25) NOT NULL,
  `bookname` varchar(25) NOT NULL,
  `issuedays` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requestbook`
--

INSERT INTO `requestbook` (`id`, `userid`, `bookid`, `username`, `usertype`, `bookname`, `issuedays`) VALUES
(13, 2, 22, 'dip', 'teacher', 'Peter Pan', '21'),
(16, 2, 21, 'dip', 'teacher', 'Sherlock Holmes', '21');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `date` date NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `email`, `pass`, `name`, `rating`, `message`, `date`, `img`) VALUES
(25, 'dip@gmail.com', '123', 'dip', '1', 'it ia ver good website.i enjoy it.many books are available.i am happy.', '2024-06-17', ''),
(26, 'dip@gmail.com', '123', 'dip', '1', 'it ia ver good website.i enjoy it.many books are available.i am happy.', '2024-06-17', ''),
(28, 'dip@gmail.com', '123', 'dip', '1', 'hi admin', '2024-06-17', ''),
(30, 'dip@gmail.com', '123', 'dip', '5', 'helllo', '2024-06-18', ''),
(31, 'dip@gmail.com', '123', 'dip', '1', '12', '2024-06-18', ''),
(33, 'dip@gmail.com', '123', 'dip', '5', '“The service quality is consistently outstanding, exceeding my expectations every time.” “I was completely impressed with their professionalism and  service.”', '2024-06-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `email`, `pass`, `type`) VALUES
(1, 'pika', 'pika@gmail.com', '123', 'student'),
(2, 'dip', 'dip@gmail.com', '123', 'teacher'),
(6, 'Swastika', 's@gmail.com', '123', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pk_fk` (`userid`);

--
-- Indexes for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pk_fk_book` (`bookid`),
  ADD KEY `pk_fk_users` (`userid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `requestbook`
--
ALTER TABLE `requestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD CONSTRAINT `pk_fk` FOREIGN KEY (`userid`) REFERENCES `userdata` (`id`);

--
-- Constraints for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD CONSTRAINT `pk_fk_users` FOREIGN KEY (`userid`) REFERENCES `userdata` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
