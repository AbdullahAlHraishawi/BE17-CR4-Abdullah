-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 04:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be17_cr4_abdullah_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  `isbn_code` varchar(50) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `author_first_name` varchar(20) NOT NULL,
  `author_last_name` varchar(20) NOT NULL,
  `publisher_name` varchar(20) NOT NULL,
  `publisher_address` varchar(100) DEFAULT NULL,
  `publischer_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `title`, `image`, `isbn_code`, `description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publischer_date`) VALUES
(1, 'The Hobbit', 'https://m.media-amazon.com/images/I/413V3sIKSJL._AC_SY780_.jpg', '9781234562', 'The Hobbit, or There and Back Again is a children\'s fantasy novel by English author J. R. R. Tolkien. It was published in 1937 to wide critical acclaim, being nominated for the Carnegie Medal and awarded a prize from the New York Herald Tribune for best juvenile fiction.', 'Book', 'John', 'Tolkien', 'George Allen & Unwin', 'Crows Nest, New South Wales, Australia', '1937-09-21'),
(2, 'The Alchemist', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1466865681l/25076674._SY475_.jpg', '1654368435', 'The Alchemist is a novel by Brazilian author Paulo Coelho which was first published in 1988. Originally written in Portuguese, it became a widely translated international bestseller.', 'Book', 'Paulo', 'Coelho', 'HarperTorch', '195 Broadway\r\nNew York City, New York, U.S.', '1993-04-25'),
(3, 'The Little Prince', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRVT-WqHTqYSdnNZC3scEcz-Jm4x2-u9ng9ZfaT0YD0VM5ToBkZ', '2117613571', 'The Little Prince is a novella by French aristocrat, writer, and military aviator Antoine de Saint-Exupéry.', 'CD', 'Antoine', 'de Saint-Exupéry', '	Reynal & Hitchcock ', 'New York City', '1943-04-01'),
(4, 'The Lord of the Rings', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRtGi_7IbevVXH_GbtwVAAV7vGP2gFCYwJow34QIiyeX18s69-i', '9511327612', 'The Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien. Set in Middle-earth, intended to be Earth at some time in the distant past, the story began as a sequel to Tolkien\'s 1937 children\'s book The Hobbit, but eventually developed into a much larger work.', 'Book', 'John', 'Tolkien', 'Allen & Unwin', 'Crows Nest, New South Wales, Australia', '1954-07-29'),
(5, 'The Da Vinci Code', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRuQdFS2wDCS9I3i2eOBfF42N1yoQwiZPlP43CjTqTTofmYRox-', '2780385512', 'The Da Vinci Code is a 2003 mystery thriller novel by Dan Brown. It is Brown\'s second novel to include the character Robert Langdon: the first was his 2000 novel Angels & Demons.', 'DVD', 'Don', 'Brown', 'Doubleday', 'New York City', '2003-04-01'),
(6, 'A Tale of Two Cities', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTujmz8xb8jJE0TDVROIblVFImld41zUCiQFRgQibdxt5Oz0Nae', '1780486406', 'A Tale of Two Cities is an historical novel published in 1859 by Charles Dickens, set in London and Paris before and during the French Revolution.', 'Book', 'Charles', 'Dickens', 'Chapman & Hall', 'United Kingdom', '1859-04-21'),
(7, 'The Catcher in the Rye', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsavbB1JB41qvpgD9oAiaXitJu69oinUy_JolRsSZKpMuihryK', '2080140237', 'The Catcher in the Rye is an American novel by J. D. Salinger that was partially published in serial form from 1945–46 before being novelized in 1951. Originally intended for adults, it is often read by adolescents for its themes of angst and alienation, and as a critique of superficiality in societ', 'Book', 'Jerome', 'Salinger', 'Little, Brown and Co', 'Boston, Massachusetts', '1951-07-16'),
(8, 'You Can Heal Your Life', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQOp8MEZbg5YEu9DdPbpSI0YAq2JEb4h09IvSLJnzGVU8CTa9NV', '9781401955', 'You Can Heal Your Life is a 1984 self-help and new thought book by Louise Hay. It was the second book by the author, after Heal Your Body which she wrote at age 60.', 'CD', 'Louise', 'Hay', 'Hay House', 'Carlsbad, California', '1984-01-01'),
(9, 'Harry Potter', 'https://embroidnew.com/media/catalog/product/h/a/harru_potter_logo_machine_embroidery_design.jpg', '9780062821', 'Harry Potter is a series of seven fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry.', 'DVD', 'Joanne', 'Rowling', 'Bloomsbury Publishin', 'London, England', '1997-08-26'),
(10, 'Harry Potter and the Philosopher’s Stone', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRkWXbfQrO5oTm1I5izjeRTbQD-vKPnybT24S2kFw2eH8LyyCo5', '9780062828', '\r\nThe Bridges of Madison County\r\nGenres: Novel, Fiction, Romance novel\r\n\r\nWonder\r\nGenres: Novel, Fiction, Children\'s literature\r\n\r\nHarry Potter and the Philosopher’s Stone\r\nGenres: Novel, Children\'s literature, Fantasy Fiction, High fantasy\r\nHarry Potter and the Philosopher’s Stone\r\nimage of Harry P', 'DVD', 'Joanne', 'Rowling', 'Bloomsbury', 'London, England', '1997-06-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
