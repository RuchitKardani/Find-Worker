-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 12:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findworker`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `service_taker_title` varchar(255) DEFAULT NULL,
  `service_taker_content` text DEFAULT NULL,
  `service_taker_image` varchar(255) DEFAULT NULL,
  `provider_title` varchar(255) DEFAULT NULL,
  `provider_content` text DEFAULT NULL,
  `provider_image` varchar(255) DEFAULT NULL,
  `mission_content` text DEFAULT NULL,
  `vision_content` text DEFAULT NULL,
  `history_content` text DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `service_taker_title`, `service_taker_content`, `service_taker_image`, `provider_title`, `provider_content`, `provider_image`, `mission_content`, `vision_content`, `history_content`, `last_updated`) VALUES
(1, 'SERVICE TAKER SIDE', 'Here the service taker can be book your worker on this website formate.\r\n\r\nThe service taker plays a crucial role in requesting and scheduling services. They have the ability to interact with a calendar interface to select specific dates and request services on those dates. When they click on a date, a pop-up allows them to choose between various options, such as marking a date as \"Busy\" or \"Available.\" This system prevents double booking on the same date and ensures efficient scheduling for the service taker.', '1.jpg', 'SERVICE PROVIDER SIDE\r\n', 'The service provider\'s role involves managing their availability and responding to service requests. When a service taker requests a date, the service provider can view their calendar, which displays booked, active, and busy dates using different colors for easy identification. The service provider can accept or decline service requests based on their availability. The system simplifies communication and scheduling between service takers and providers, creating a streamlined experience for both parties.\r\n\r\nEFFICIENT SCHEDULE MANAGEMENT:\r\nService providers can efficiently manage their schedules, ensuring they make the most of their available time.', '1.jpg', 'Our project is driven by a clear and ambitious mission - to simplify the process of service scheduling and delivery, making it effortless for service takers to find the right service providers and for service providers to efficiently manage their schedules. We aim to revolutionize the way people access services by providing a user-friendly platform that fosters transparent communication and ensures service availability.', 'Our vision is to create a world where scheduling services is hassle-free and efficient. We envision a platform that connects service takers and service providers seamlessly, reducing scheduling conflicts and enhancing the overall experience for both parties. We aspire to be a trusted hub for service-related interactions, where users can easily find and book the services they need.', 'Our journey began with a simple idea - to bridge the gap between service takers and providers by developing a digital platform that streamlines the scheduling process. Over the years, we\'ve evolved and grown, driven by our commitment to improving the way services are accessed and delivered. Today, we stand as a testament to our dedication, with a robust system that benefits countless users in efficiently managing their service-related needs.', '2023-10-16 03:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `image`) VALUES
(1, 'harmesh', '1212', '1.jpg'),
(6, 'ruchit', '1212', 'ruchit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `service_provider_id` int(11) NOT NULL,
  `service_taker_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('pending','confirmed','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `service_provider_id`, `service_taker_id`, `date`, `status`) VALUES
(6, 1, 1, '2023-10-17', 'pending'),
(7, 1, 16, '2023-10-09', 'pending'),
(9, 6, 1, '2023-10-10', 'rejected'),
(10, 1, 1, '2023-10-10', 'rejected'),
(13, 3, 2, '2023-10-17', 'rejected'),
(14, 3, 2, '2023-10-31', 'confirmed'),
(15, 3, 1, '2023-10-24', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `servicetype` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `servicetype`, `description`) VALUES
(13, '13.jpg', 'Agriculture', 'BOOKS FARM WORKER IN YOUR NEAR BY AREA '),
(14, '14.jpg', 'Mistri', 'BOOKS MISTRI WORK SPECIALIST'),
(15, '15.jpg', 'Construction', 'BOOKS CONSTRUCTORE LABOR '),
(16, '16.jpg', 'Plumber', 'FIND YOUR HOME PLUMBERING WORKS'),
(17, '17.jpg', 'Painter', 'BOOKS  PAINTER  AT YOUR WORKPLACE'),
(18, '18.jpg', 'Electrician', 'FIND ELECTRICIAN FOR PLACEWORK'),
(19, '19.jpg', 'Driver', 'BOOKS OR HIRE A DRIVER FOR PERSONAL TRIP'),
(20, '20.jpg', 'Tiles & Marbels', 'FIND A TILES FITTING WORKER.'),
(21, '21.jpg', 'Pest-Control', 'CLEANING WORKER FOR YOUR WORKING AREA'),
(22, '22.webp', 'All-Rounder', 'BOOKS ALL ROUNDER FOR YOUR ALL WORK ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  `city` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `servicetype` varchar(25) NOT NULL,
  `description` varchar(50) NOT NULL,
  `experience` int(2) NOT NULL,
  `language` varchar(25) NOT NULL,
  `educationlevel` varchar(25) NOT NULL,
  `rupeecharge` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `city`, `image`, `servicetype`, `description`, `experience`, `language`, `educationlevel`, `rupeecharge`) VALUES
(1, 'harmesh', 'devdhariya', 'harmeshdevdhariya04@gmail.com', '1212', 7863018932, 'M', 'Junagadh', 'dvarkesh.jpg', 'Agriculture', 'i am harmesh devdhariya agriculture specialist ', 5, 'Hindi,English,Gujarati', 'technical-training', 500),
(2, 'ruchit', 'kardani', 'ruchit@gmail.com', '2004', 9510461351, 'M', 'Ahmedabad', '2.jpg', 'agriculture', 'i am ruchit kardani specialist in agriculture work', 4, 'Hindi,English,Gujarati', 'primary schools completio', 400),
(3, 'vijay', 'ghodadra', 'vijay@gmail.com', '1212', 9510461351, 'M', 'Ahmedabad', '3.jpg', 'agriculture', 'vijay ghodadra specialist of farming work ', 4, 'Hindi,English,Gujarati', 'primary schools completio', 400),
(4, 'vaja', 'hashmukhraj', 'vaja@gmail.com', '1212', 1234567899, 'M', 'Junagadh', 'yagnik.jpg', 'agriculture', 'this is vaja hashmukh', 8, 'Hindi,English,Gujarati', 'bachelors-degree', 400),
(5, 'jayesh', 'malam', 'malam@gmail.com', '1212', 9510461351, 'M', 'Ahmedabad', '5.jpg', 'agriculture', 'this is malam jayesh i have a speciality in plumbe', 4, 'Hindi,English,Gujarati', 'primary schools completio', 600),
(6, 'jaydeep', 'sagalka', 'jaydip@gmail.com', '1212', 6351149602, 'M', 'Junagadh', '6.jpg', 'agriculture', 'this is jaydeep sagalka specialist in agri farming', 5, 'Hindi,English,Gujarati', 'primary schools completio', 500),
(7, 'jatin ', 'solanki', 'jatin@gmail.com', '1212', 123456789, 'M', 'Surat', '7.jpg', 'agriculture', 'this is jatin solanki specialist in actifarming', 5, 'Hindi,English,Gujarati', 'primary schools completio', 500);

-- --------------------------------------------------------

--
-- Table structure for table `servicetaker`
--

CREATE TABLE `servicetaker` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `gender` enum('M','F','O') NOT NULL,
  `city` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicetaker`
--

INSERT INTO `servicetaker` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `city`, `image`) VALUES
(1, 'harmesh', 'devdhariya', 'harmeshdevdhariya04@gmail.com', '1212', 7863018932, 'M', 'Amreli', 'harmesh.jpg'),
(2, 'ruchit', 'kardani', 'ruchitkardani@gmail.com', '2004', 9510461351, 'M', 'Ahmedabad', '2.jpg'),
(3, 'vijay', 'ghodadra', 'vijay@gmail.com', '1212', 9510461351, 'M', 'Ahmedabad', '3.jpg'),
(4, 'vaja ', 'hashmukhraj', 'vaja@gmail.com', '2004', 1234567899, 'M', 'Surat', 'hashmukh.jpg'),
(16, 'jalpa', 'devdhariya', 'jalpa@gmail.com', '1212', 1234567849, 'F', 'Ahmedabad', '16.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_provider_id` (`service_provider_id`),
  ADD KEY `service_taker_id` (`service_taker_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicetaker`
--
ALTER TABLE `servicetaker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `servicetaker`
--
ALTER TABLE `servicetaker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`service_provider_id`) REFERENCES `serviceprovider` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`service_taker_id`) REFERENCES `servicetaker` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
