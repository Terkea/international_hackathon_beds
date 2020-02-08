-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2020 at 02:33 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `potential_universities`
--

CREATE TABLE `potential_universities` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scenarious`
--

CREATE TABLE `scenarious` (
  `id` int(11) NOT NULL,
  `difficulty_level` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `university_id`, `first_name`, `last_name`, `email`, `course`, `year`, `dob`, `password`, `registered_at`) VALUES
(37, 13, 'Marian', 'Terchila', 'terkeabt@gmail.com', 'Computer Science and software engineering', '2', '09/08/1997', 'bc2a60b9317f3f8624df7d17942a1a0b6f60c824409f137c003b0445f32b1b0f683cf0a633f0bcb4136332b6fdbff396a83fc9142613643c4926819d91310409sAQ9J2WIqsJO14ajkY7XCBuivF7t8Om0bTq/XSECc2w=', '2020-02-06 22:22:56'),
(38, 13, 'Vadim', 'Stasiev', 'vadim444@hotmail.com', 'Computer Science and Software Engineering', '1', '03/21/1998', 'b2a0e2618c81a4ae84a70c046c53d32ac49f92ba481793608bfd2ea18ad60d54c1710bfbdcc5ea040a4c125487a4129f1ecef8ed2df9b00b74cf6b48ef4f06434ZaiEAYVluLfRryARmbE9JwMFiznciXNcpqfi7iEayc=', '2020-02-07 03:27:44'),
(39, 13, 'Jubeen', 'Amatya', 'jubeennp@gmail.com', 'information technology', '2019', '04/05/1999', 'bf01260455e3fe7c780535e4115c8cf71b1d16afdc09974e7741143dfe6a0e678918708ca3075a2bdce69e8af9761ec343ec08650083462664469c642dd7ef0ecByA06BBSJRCfrPSc8Zeg2CNspcGX4KhsQgU/VBq13g=', '2020-02-07 04:16:34'),
(40, 13, 'Vadim', 'Stasiev', 'vadim4544@hotmail.com', 'Computer Science and Software Engineering', '1', '03/21/1998', '72a5e361815b87cc44ccedc7b80547bab60d125c32996af2d6b58ca7bb80ede2a5a0b323691fd56c0ff2b26c95dae9fc0058de3447ea6d644145fb44298dcbe8iT04LDVOWTfJ63Bf7jGPZMOjFGv1uJ4xk1rdEJ+pUY0=', '2020-02-07 07:07:00'),
(41, 13, 'dasdasdas', 'dasdas', 'test@test.com', '1231', '321', '02/12/2020', '7e5c7695e3069e679d449f19733ba8c64ed9a8009c0565b2b3e23cf82c701f281305ca709cff710d432d3da112d67304b0c57d4ba480a04e0bff5d54ac211d96ljqV98w7EdUL2ftI5AOCOLXMopIMztGNAOYWnUs00W0=', '2020-02-07 08:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `university_id` int(11) NOT NULL,
  `team_leader` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `university_id`, `team_leader`) VALUES
(11, 'test', 13, 37);

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`id`, `student_id`, `team_id`) VALUES
(3, 37, 11);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_first_name` varchar(255) NOT NULL,
  `contact_last_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`, `contact_first_name`, `contact_last_name`, `contact_email`) VALUES
(13, 'University of Bedfordshire', 'marian', 'terchila', 'terkeabt@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `potential_universities`
--
ALTER TABLE `potential_universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scenarious`
--
ALTER TABLE `scenarious`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `university_id` (`university_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `university_id` (`university_id`),
  ADD KEY `team_leader` (`team_leader`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `potential_universities`
--
ALTER TABLE `potential_universities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scenarious`
--
ALTER TABLE `scenarious`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `team_ibfk_2` FOREIGN KEY (`team_leader`) REFERENCES `student` (`id`);

--
-- Constraints for table `team_member`
--
ALTER TABLE `team_member`
  ADD CONSTRAINT `team_member_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `team_member_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
