-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2021 at 06:40 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_car`
--

DROP TABLE IF EXISTS `add_car`;
CREATE TABLE IF NOT EXISTS `add_car` (
  `Vehicle_Model` varchar(100) NOT NULL,
  `Vehicle_Number` int(100) NOT NULL,
  `Seating_Capacity` int(20) NOT NULL,
  `Rent_Per_Day` int(100) NOT NULL,
  PRIMARY KEY (`Vehicle_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_car`
--

INSERT INTO `add_car` (`Vehicle_Model`, `Vehicle_Number`, `Seating_Capacity`, `Rent_Per_Day`) VALUES
('Nexa', 3456, 3, 20),
('Maruti', 9018, 7, 100),
('Nissan', 761829, 8, 200);

-- --------------------------------------------------------

--
-- Table structure for table `booked_car`
--

DROP TABLE IF EXISTS `booked_car`;
CREATE TABLE IF NOT EXISTS `booked_car` (
  `Name` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Start_date` date NOT NULL,
  `Days` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_car`
--

INSERT INTO `booked_car` (`Name`, `Email_id`, `Start_date`, `Days`) VALUES
('Pooja', 'mna@gmail.com', '2021-10-16', 3),
('Rekha', 'rekha@gmail.com', '2021-10-14', 2);

-- --------------------------------------------------------

--
-- Table structure for table `car_agency`
--

DROP TABLE IF EXISTS `car_agency`;
CREATE TABLE IF NOT EXISTS `car_agency` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_agency`
--

INSERT INTO `car_agency` (`ID`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'test@123');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

DROP TABLE IF EXISTS `user_register`;
CREATE TABLE IF NOT EXISTS `user_register` (
  `Name` varchar(100) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`Name`, `Email_ID`, `Password`, `Address`, `Mobile_no`) VALUES
('abc', 'abc@mail.com', 'abc123', 'xyz', 2147483647),
('Pooja', 'poojaphogat75@gmai.com', 'Pooja@1229', 'Dwraka sector 13 new delhi', 234455882),
('Sonu', 'sonu@gmai.com', '', 'Haryana', 987059432),
('Rekha', 'rekha@gmail.com', 'you@198', 'Delhi', 987653453);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
