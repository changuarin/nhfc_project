-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 04:07 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newhorizon`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` enum('GTLIC','NHFC') NOT NULL,
  `interest` decimal(10,4) NOT NULL,
  `other_charges` decimal(10,4) NOT NULL,
  `processing_fee` decimal(10,4) NOT NULL,
  `collection_fee` decimal(10,4) NOT NULL,
  `office_in_charge` varchar(255) NOT NULL,
  `address` tinytext NOT NULL,
  `mobile_no` varchar(11) DEFAULT NULL,
  `telephone_no` varchar(12) NOT NULL,
  `fax_no` varchar(12) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `company`, `interest`, `other_charges`, `processing_fee`, `collection_fee`, `office_in_charge`, `address`, `mobile_no`, `telephone_no`, `fax_no`, `status`) VALUES
(1, 'Alabang', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Tina Polido', '2/F, Villiamante Bldg., National Rd., Alabang, Muntinlupa City', '09192575829', '850-0748', '12-112', 'active'),
(2, 'Alaminos', 'NHFC', '0.0000', '10.0000', '10.0000', '10.0000', 'Celedonio Gemino', 'Rm. 203 Naty Miranda Bldg.,  Quezon Avenue, Alaminos City', '654-1085', '(075)-654-10', '654-1085', 'active'),
(3, 'Baguio', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Marlyne Bugne', 'Rm. 308, GP Shopping Arcade, Mabini Street, Baguio City', '', '(074)-443-96', '', 'active'),
(4, 'Balagtas', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Jay Macabatas', '2/F, Q & R Bldg., 532 Wawa, Balagtas, Bulacan', '', '769-1349', '', 'active'),
(5, 'Bangued', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Juliet Daria', 'Unit 7, Villamor Townhouse,  cor. Partelo and Peñarrubia Street, Bangued, Abra', '', '(074)-752-75', '', 'active'),
(6, 'Bontoc', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Melowin Lumines', '1st Floor Commercial Center, Poblacion Bontoc, Mountain Province', '', '(074)-602-11', '', 'active'),
(7, 'Candon', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Araceli Domingo', '2/F De Guia Bldg., San Juan,Candon City, Ilocos Sur', '', '(077)-674-07', '', 'active'),
(8, 'Dagupan', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Cynthia Daroya', '2/F, Aquino Bldg., No. 1 Burgos Street,Dagupan City, Pangasinan', '', '(075)-522-54', '', 'active'),
(9, 'La Union', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Maribel Valdez', '2/F, Nera Bldg., Quezon Avenue,San Fernando City, La Union', '', '(072)-888-20', '', 'active'),
(10, 'Lagawe', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Brenda Ponchugan', '#55 J.P. RIZAL AVE. Poblacion East,Lagawe, Ifugao', '', '(072)-382-20', '', 'active'),
(11, 'Legazpi', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Meriam Moral', 'Rm 204 Rañola Bldg., Oro Site,Legazpi City', '', '(052)-480-84', '', 'active'),
(12, 'Naga', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Vilma Revidad', '2/F, Prieto Bldg., Panganiban Drive,Naga City', '', '(054)-472-84', '', 'active'),
(13, 'Novaliches', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Vanessa Beldia', '936 Bonifacio Bldg., Quirino Hi-way, Novaliches, Quezon City', '', '939-9203', '', 'active'),
(14, 'Roxas', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Noel De Guzman', '2nd floor, Arca Building Bantug, Roxas, Isabela', '', '(078)-642-79', '', 'active'),
(15, 'San Pablo', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Pablo Aldrin Colocar', '2/F Lina Bldg. JP Rizal Avenue, Cor. A. Mabini St.Brgy. V-B San Pablo City, Laguna', '', '(049)-561-30', '', 'active'),
(16, 'Santiago', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Milagros Bautista', 'RM. # 209 2/F Heritage Commercial Complex, National Hi-way Malvar, Santiago City, Isabela', '', '(078)-682-00', '', 'active'),
(17, 'Tabuk', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Rolend Arana ', '#32 Mayangao St. Dagupan Centro, Tabuk Kalinga', '09175104296', '', '', 'active'),
(18, 'Solano', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Marina Allego', '2nd floor, Land Bank Galima Bldg, National Hi-way, Solano, Nueva Vizcaya', '', '(078)-326-6', '', 'active'),
(19, 'Divisoria', 'GTLIC', '0.0000', '0.0000', '0.0000', '0.0000', 'Ferdie Fajardo', '919 dldc bldg. juan luna st. Tondo Manila', '', '742-29-80', '', 'active'),
(20, 'Zambales', 'GTLIC', '0.0000', '0.0000', '0.0000', '0.0000', 'Joanne Rabina', '# 259 D Nat''l. Road, South Poblacion, Sta. Cruz, Zambales', '', '(047)-602-19', '', 'active'),
(21, 'Bambang', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Maritess Alnas', '2/F Lubong Bldg. Brgy. Banggot, Bambang, Nueva Vizcaya', '', '(078)-362-00', '', 'active'),
(22, 'Batangas', 'GTLIC', '0.0000', '0.0000', '0.0000', '0.0000', 'Zarina Mendoza', '2/F Room 201 Dela Cruz Building 1, Rizal Avenue, Batangas City', '', '(043)-723-63', '', 'active'),
(23, 'Baclaran', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Arthur Nicolas', '# 314 2/F NHFC Bldg., Quirino Ave., Baclaran, Parañaque City', '', '552-25-52', '', 'active'),
(24, 'Vigan', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Mylene Cabarlo', 'Plaza Maestro Annex PM 202, Vigan City, Ilocos Sur', '', '(077)-623-06', '', 'active'),
(25, 'San Juan', 'NHFC', '0.0000', '0.0000', '0.0000', '0.0000', 'Analiza Ramos', '606 Pinaglabanan st , San juan City Manila', '', '5505-723', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `group` enum('new','old') NOT NULL,
  `payment_source_id` int(11) NOT NULL,
  `gsis_sss_no` varchar(10) NOT NULL,
  `pension_type_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `civil_status` enum('Married','Single','Separated','Widow') NOT NULL,
  `address` text NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `telephone_no` varchar(11) NOT NULL,
  `bank_acct_no` varchar(255) NOT NULL,
  `bank_branch` varchar(255) NOT NULL,
  `pension_amount` decimal(10,2) NOT NULL,
  `withdrawal_day` int(2) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `res_cert_no` varchar(255) NOT NULL,
  `res_cert_place` varchar(255) NOT NULL,
  `res_cert_date` date NOT NULL,
  `in_trust_for` varchar(255) NOT NULL,
  `disability` varchar(255) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `sub_agent_id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `is_active` enum('Active','Inactive') NOT NULL,
  `is_problem_acount` int(11) NOT NULL,
  `is_arrears` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `branch_id`, `type_id`, `group`, `payment_source_id`, `gsis_sss_no`, `pension_type_id`, `first_name`, `middle_name`, `last_name`, `birthdate`, `gender`, `civil_status`, `address`, `mobile_no`, `telephone_no`, `bank_acct_no`, `bank_branch`, `pension_amount`, `withdrawal_day`, `payment_type_id`, `res_cert_no`, `res_cert_place`, `res_cert_date`, `in_trust_for`, `disability`, `agent_id`, `sub_agent_id`, `picture`, `is_active`, `is_problem_acount`, `is_arrears`) VALUES
(6, 25, 0, 'new', 1, '', 1, 'Adolff', 'Nazi', 'Hitler', '1969-12-22', 'Male', 'Single', 'San Juan City', '09175104296', '123-7894', '', 'PNB SAN JUAN', '17500.55', 25, 1, '10234232232', '', '0000-00-00', '', '', 0, 0, '129958-004-C9B8B89D1.jpg', 'Active', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'accounting'),
(3, 'collection'),
(4, 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `payment_source`
--

CREATE TABLE IF NOT EXISTS `payment_source` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_source`
--

INSERT INTO `payment_source` (`id`, `name`) VALUES
(1, 'SSS'),
(2, 'GSIS'),
(3, 'PVAO'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE IF NOT EXISTS `payment_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_type`
--

INSERT INTO `payment_type` (`id`, `name`) VALUES
(1, 'ATM'),
(2, 'PB'),
(3, 'CASH'),
(4, 'CHECK'),
(5, 'SALARY DEDUCTION');

-- --------------------------------------------------------

--
-- Table structure for table `pension_type`
--

CREATE TABLE IF NOT EXISTS `pension_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pension_type`
--

INSERT INTO `pension_type` (`id`, `name`) VALUES
(1, 'Client Pension'),
(2, 'Client Salary'),
(3, 'Client Others'),
(4, 'Accom Employee'),
(5, 'Accom Agent');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` enum('admin','accounting','collection','sales') DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `access`, `status`) VALUES
(1, 'Christian', 'Ramos', 'Guarin', 'nhfc_chan', 'b877d761eac325cf01e2579e9434cd7c', 'admin', 'active'),
(8, 'Mark', 'C', 'Ramos', 'nhfc_mark', 'd2f0e963198965722fd22e9ab414efbc', 'admin', 'active'),
(10, 'ASDF', 'qwerty', 'asdfghjk', 'nhfc_davis', 'b3f7935258c6088e828159e7908658b7', 'accounting', 'active'),
(11, 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 'nhfc_sales', 'a53362ceb9976ca637fe73bf45bd3a2c', 'accounting', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_source`
--
ALTER TABLE `payment_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pension_type`
--
ALTER TABLE `pension_type`
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
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payment_source`
--
ALTER TABLE `payment_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pension_type`
--
ALTER TABLE `pension_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
