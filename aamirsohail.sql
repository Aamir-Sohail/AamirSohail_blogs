-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 08:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sizybabe`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `desp` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `title_url` varchar(225) NOT NULL,
  `datee` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `tag`, `desp`, `img`, `title_url`, `datee`) VALUES
(1, 'Hello World I hacked you ', 'Hacking', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis tempor metus, facilisis auctor elit condimentum et. Phasellus elementum ultricies libero nec interdum. Mauris ligula libero, blandit auctor hendrerit at, rhoncus nec arcu. Pellentesque dignissim facilisis leo, sed iaculis ante fringilla in. Cras erat libero, ultricies vel dui ac, semper interdum dolor. Pellentesque laoreet, velit id viverra laoreet, sapien eros rhoncus nibh, at accumsan dolor elit ut enim. Etiam convallis velit at felis ornare dignissim. Nam euismod leo ac justo congue, vitae sollicitudin sapien pretium. Duis maximus sapien velit, sit amet placerat velit commodo ut. Morbi sed rhoncus arcu, sit amet euismod ante. Pellentesque risus urna, lacinia et elementum a, suscipit et velit. Pellentesque accumsan massa ut sapien semper, nec tempor augue cursus. Quisque quis neque id arcu aliquet luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vitae eleifend justo.\r\n\r\nNunc tempus hendrerit lacus, sit amet porttitor odio imperdiet a. Sed iaculis orci non ultricies ornare. Suspendisse placerat dapibus ornare. Maecenas quis metus consequat, rhoncus ex sit amet, tempus nunc. Nunc tristique leo et sollicitudin mattis. Maecenas suscipit ex at urna laoreet lobortis. Curabitur sit amet felis a tortor suscipit sodales. Nullam dapibus tellus turpis, id dignissim dolor tempus ac. Duis laoreet commodo blandit. Sed eleifend nisl ac viverra bibendum. Sed porttitor gravida enim, a convallis purus. Cras nisl turpis, suscipit ac dignissim sit amet, tempor in augue. Phasellus at condimentum felis. In hac habitasse platea dictumst. Aenean luctus faucibus viverra. Integer ornare malesuada dignissim.\r\n\r\nFusce pulvinar tempor tellus, sed porttitor ex scelerisque ornare. Donec euismod congue arcu, vitae ultrices lorem ultricies a. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ut vulputate sem, id volutpat lacus. Cras eget dapibus nulla. Donec a mauris et odio tempor lacinia et sit amet lacus. Quisque dictum fringilla pulvinar. Maecenas tincidunt sapien felis, eget vestibulum tortor finibus lacinia. Nunc quis volutpat tortor. Aliquam molestie, ligula eget venenatis mattis, lectus elit egestas urna, vitae vulputate mi ante sed ligula. Donec mattis a eros et pretium. Donec mauris orci, varius sit amet dictum quis, eleifend eu quam. Proin finibus eleifend lectus. Donec euismod libero ante.\r\n\r\nQuisque feugiat a tellus nec scelerisque. Suspendisse sem lacus, maximus sed mauris ac, tincidunt aliquet mauris. Aenean ut laoreet tortor. Sed ut erat id ligula vestibulum scelerisque. Suspendisse aliquam diam ut sollicitudin fermentum. Cras vel magna lectus. Praesent pharetra massa dolor, vel congue neque eleifend eu.\r\n\r\nInteger ut lobortis risus. Ut eget iaculis lectus. Maecenas consectetur neque sit amet risus pretium lacinia. Nulla facilisi. Nulla volutpat hendrerit ullamcorper. Suspendisse eget vehicula magna. Quisque sed ornare libero. Proin elit nulla, aliquet ac cursus ut, lobortis id nisl. Ut in elit sem. Pellentesque convallis est magna, et consectetur lacus mollis sed. Donec at tortor at turpis molestie consequat vel eu lacus. Integer ipsum odio, blandit id sollicitudin quis, efficitur a turpis. Nulla tempor mollis rutrum. Curabitur et enim nec lectus efficitur malesuada. Mauris pellentesque dolor vitae eros blandit, dignissim blandit felis ultricies.', '../uploads/img_605480f8563e3.png', 'Hello_World_I_hacked_you_24f765470c139dbae673721a3db026bf', '0000-00-00 00:00:00.000000'),
(4, 'Hi we are making it you', 'Work', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis tempor metus, facilisis auctor elit condimentum et. Phasellus elementum ultricies libero nec interdum. Mauris ligula libero, blandit auctor hendrerit at, rhoncus nec arcu. Pellentesque dignissim facilisis leo, sed iaculis ante fringilla in. Cras erat libero, ultricies vel dui ac, semper interdum dolor. Pellentesque laoreet, velit id viverra laoreet, sapien eros rhoncus nibh, at accumsan dolor elit ut enim. Etiam convallis velit at felis ornare dignissim. Nam euismod leo ac justo congue, vitae sollicitudin sapien pretium. Duis maximus sapien velit, sit amet placerat velit commodo ut. Morbi sed rhoncus arcu, sit amet euismod ante. Pellentesque risus urna, lacinia et elementum a, suscipit et velit. Pellentesque accumsan massa ut sapien semper, nec tempor augue cursus. Quisque quis neque id arcu aliquet luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vitae eleifend justo.\r\n\r\nNunc tempus hendrerit lacus, sit amet porttitor odio imperdiet a. Sed iaculis orci non ultricies ornare. Suspendisse placerat dapibus ornare. Maecenas quis metus consequat, rhoncus ex sit amet, tempus nunc. Nunc tristique leo et sollicitudin mattis. Maecenas suscipit ex at urna laoreet lobortis. Curabitur sit amet felis a tortor suscipit sodales. Nullam dapibus tellus turpis, id dignissim dolor tempus ac. Duis laoreet commodo blandit. Sed eleifend nisl ac viverra bibendum. Sed porttitor gravida enim, a convallis purus. Cras nisl turpis, suscipit ac dignissim sit amet, tempor in augue. Phasellus at condimentum felis. In hac habitasse platea dictumst. Aenean luctus faucibus viverra. Integer ornare malesuada dignissim.\r\n\r\nFusce pulvinar tempor tellus, sed porttitor ex scelerisque ornare. Donec euismod congue arcu, vitae ultrices lorem ultricies a. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ut vulputate sem, id volutpat lacus. Cras eget dapibus nulla. Donec a mauris et odio tempor lacinia et sit amet lacus. Quisque dictum fringilla pulvinar. Maecenas tincidunt sapien felis, eget vestibulum tortor finibus lacinia. Nunc quis volutpat tortor. Aliquam molestie, ligula eget venenatis mattis, lectus elit egestas urna, vitae vulputate mi ante sed ligula. Donec mattis a eros et pretium. Donec mauris orci, varius sit amet dictum quis, eleifend eu quam. Proin finibus eleifend lectus. Donec euismod libero ante.\r\n\r\nQuisque feugiat a tellus nec scelerisque. Suspendisse sem lacus, maximus sed mauris ac, tincidunt aliquet mauris. Aenean ut laoreet tortor. Sed ut erat id ligula vestibulum scelerisque. Suspendisse aliquam diam ut sollicitudin fermentum. Cras vel magna lectus. Praesent pharetra massa dolor, vel congue neque eleifend eu.\r\n\r\nInteger ut lobortis risus. Ut eget iaculis lectus. Maecenas consectetur neque sit amet risus pretium lacinia. Nulla facilisi. Nulla volutpat hendrerit ullamcorper. Suspendisse eget vehicula magna. Quisque sed ornare libero. Proin elit nulla, aliquet ac cursus ut, lobortis id nisl. Ut in elit sem. Pellentesque convallis est magna, et consectetur lacus mollis sed. Donec at tortor at turpis molestie consequat vel eu lacus. Integer ipsum odio, blandit id sollicitudin quis, efficitur a turpis. Nulla tempor mollis rutrum. Curabitur et enim nec lectus efficitur malesuada. Mauris pellentesque dolor vitae eros blandit, dignissim blandit felis ultricies.', '../uploads/img_60582cfdb8d0e.jpg', 'Hi_we_are_making_it_848e6492044ac125d27586f1be6cd507', '2021-03-22 05:37:01.757664'),
(5, 'Class started you', 'class', ' Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class ', '../uploads/img_60582d923a7ec.jpg', 'Class_started_d40febebba7300ce02a87ab6163a2cfb', '2021-03-22 05:39:30.241404'),
(6, 'Saifullah is Here', 'Hacker', 'Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class Hi Class ', '../uploads/img_60582dae651b4.jpg', 'Saifullah_is_Here_325d59db7ab3d367a0ad459c32ea400f', '2021-03-22 05:39:58.415937');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(33, 'mazhar', 'i.am.arhamkhan25@gmail.com', 'Arham Khan', 'Hshshshshs');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `datee` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `tag`, `img`, `datee`) VALUES
(2, 'Hello World I hacked you', 'Hack101123', '../uploads/img_60582d923a7ec.jpg', '2021-03-19 12:18:00.608879'),
(3, 'Basit kar kawa', 'Study', '../uploads/img_60583b782480a.png', '2021-03-22 06:38:48.150395');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `namee` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `datee` int(4) NOT NULL DEFAULT 19
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namee`, `email`, `password`, `datee`) VALUES
(1, 'Sizybabe', 'sizybabe@gmail.com', 'd17134dcdec7797725937273f2a1aebd', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
