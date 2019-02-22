-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2019 at 01:35 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiw`
--

-- --------------------------------------------------------

--
-- Table structure for table `mymovies`
--

CREATE TABLE `mymovies` (
  `id_movie` int(255) NOT NULL,
  `imdb` varchar(8) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `imgurl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mymovies`
--

INSERT INTO `mymovies` (`id_movie`, `imdb`, `title`, `description`, `imgurl`) VALUES
(1, '0944947', 'Game of Thrones', 'Nine noble families fight for control over the mythical lands of Westeros, while an ancient enemy returns after being dormant for thousands of years.', 'https://www.meliuz.com.br/blog/wp-content/uploads/2014/07/game_of_thrones.jpg'),
(2, '0903747', 'Breaking Bad', 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family\'s future. ', 'https://www.jornalnopalco.com.br/wp-content/uploads/2018/11/Breaking-Bad.jpg'),
(3, '2085059', 'Black Mirror ', 'An anthology series exploring a twisted, high-tech world where humanity\'s greatest innovations and darkest instincts collide. ', 'https://m.media-amazon.com/images/M/MV5BNTEwYzNiMGUtNzRlYS00MTMzLTliNzgtOGUxZGZiNThlNWYwXkEyXkFqcGdeQXVyMjYwNDA2MDE@._V1_UX182_CR0,0,182,268_AL_.jpg'),
(4, '0108778', 'Friends  ', 'Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan. ', 'https://m.media-amazon.com/images/M/MV5BNDVkYjU0MzctMWRmZi00NTkxLTgwZWEtOWVhYjZlYjllYmU4XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_UY268_CR0,0,182,268_AL_.jpg'),
(5, '2306299', 'Vikings', 'Vikings transports us to the brutal and mysterious world of Ragnar Lothbrok, a Viking warrior and farmer who yearns to explore - and raid - the distant shores across the ocean. ', 'https://m.media-amazon.com/images/M/MV5BNDYyNzk1NzYwOF5BMl5BanBnXkFtZTgwMTQ0Nzc4MzI@._V1_UY268_CR8,0,182,268_AL_.jpg'),
(6, '2707408', 'Narcos ', 'A chronicled look at the criminal exploits of Colombian drug lord Pablo Escobar, as well as the many other drug kingpins who plagued the country through the years. ', 'https://m.media-amazon.com/images/M/MV5BNmU5ZGQyZDUtMmU3OC00ZTZkLTk4YzItYzg5NDNkMmJlZjMwXkEyXkFqcGdeQXVyNjU2ODM5MjU@._V1_UX182_CR0,0,182,268_AL_.jpg'),
(7, '0934814', 'Chuck', 'When a twenty-something computer geek inadvertently downloads critical government secrets into his brain, the C.I.A. and the N.S.A. assign two agents to protect him and exploit such knowledge, turning his life upside down. ', 'https://m.media-amazon.com/images/M/MV5BMTM0ODIwNjI3NF5BMl5BanBnXkFtZTcwODU2ODUzMw@@._V1_UY268_CR9,0,182,268_AL_.jpg'),
(8, '0455275', 'Prison Break', 'Due to a political conspiracy, an innocent man is sent to death row and his only hope is his brother, who makes it his mission to deliberately get himself sent to the same prison in order to break the both of them out, from the inside. ', 'https://m.media-amazon.com/images/M/MV5BMTg3NTkwNzAxOF5BMl5BanBnXkFtZTcwMjM1NjI5MQ@@._V1_UY268_CR0,0,182,268_AL_.jpg'),
(9, '2193021', 'Arrow ', 'Spoiled billionaire playboy Oliver Queen is missing and presumed dead when his yacht is lost at sea. He returns five years later a changed man, determined to clean up the city as a hooded vigilante armed with a bow. ', 'https://m.media-amazon.com/images/M/MV5BMTU5MjU5NjUyOV5BMl5BanBnXkFtZTgwMDY1ODIyNjM@._V1_UY268_CR16,0,182,268_AL_.jpg'),
(10, '3322312', 'Daredevil  ', 'A blind lawyer by day, vigilante by night. Matt Murdock fights the crime of New York as Daredevil. ', 'https://m.media-amazon.com/images/M/MV5BODcwOTg2MDE3NF5BMl5BanBnXkFtZTgwNTUyNTY1NjM@._V1_UX182_CR0,0,182,268_AL_.jpg'),
(11, '4158110', 'Mr. Robot ', 'Elliot, a brilliant but highly unstable young cyber-security engineer and vigilante hacker, becomes a key figure in a complex game of global dominance when he and his shadowy allies try to take down the corrupt corporation he works for. ', 'https://m.media-amazon.com/images/M/MV5BMTYzMDE2MzI4MF5BMl5BanBnXkFtZTgwNTkxODgxOTE@._V1_UX182_CR0,0,182,268_AL_.jpg'),
(12, '1253863', '300: Rise of an Empire', 'Greek general Themistokles leads the charge against invading Persian forces led by mortal-turned-god Xerxes and Artemisia, vengeful commander of the Persian navy. ', 'https://m.media-amazon.com/images/M/MV5BMTEwNTU2MjAwMDdeQTJeQWpwZ15BbWU3MDk2Njc2Njk@._V1_UX182_CR0,0,182,268_AL_.jpg'),
(13, '0448157', 'Hancock', 'Hancock is a superhero whose ill considered behavior regularly causes damage in the millions. He changes when the person he saves helps him improve his public image. ', 'https://m.media-amazon.com/images/M/MV5BMTgyMzc4ODU3NV5BMl5BanBnXkFtZTcwNjk5Mzc1MQ@@._V1_UX182_CR0,0,182,268_AL_.jpg'),
(15, '2741602', 'The Blacklist', 'A new FBI profiler, Elizabeth Keen, has her entire life uprooted when a mysterious criminal, Raymond Reddington, who has eluded capture for decades, turns himself in and insists on speaking only to her. ', 'https://m.media-amazon.com/images/M/MV5BMGYyZDFjOGMtNDE2Zi00ODg3LWJiZjktMWFiYjUwOTVmNjBkXkEyXkFqcGdeQXVyNjMxNzcwOTI@._V1_UX182_CR0,0,182,268_AL_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mymovies`
--
ALTER TABLE `mymovies`
  ADD PRIMARY KEY (`id_movie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mymovies`
--
ALTER TABLE `mymovies`
  MODIFY `id_movie` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
