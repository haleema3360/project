-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 07:43 AM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `finished_goods`
--

CREATE TABLE `finished_goods` (
  `product_id` varchar(10) NOT NULL,
  `product` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `client` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finished_goods`
--

INSERT INTO `finished_goods` (`product_id`, `product`, `division`, `type`, `quantity`, `client`) VALUES
('NW-FG-0001', 'CFSheet 500x500x9', 'CD', 'Standard', 30, ' IFT'),
('NW-FP-0001', 'E22Fd', 'PD', 'Custom ', 20000, 'HI'),
('NW-FP-0002', 'E15Fx', 'CD', 'Custom', 1300, 'IFT'),
('NW-FP-005 ', 'NWIFMW', 'CD', 'Custom ', 450, ' IFT'),
('NW-FP-006 ', ' ASLG', 'CD', 'Custom', 500, '  AAL'),
('NW-FP-007', 'AX Motor 2Kw', ' PD', 'Standard', 240, 'RTL'),
('NW-FP-010 ', 'CFSheet 500x500x1', ' PD', 'Custom ', 500, ' IFT');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `sno` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`sno`, `username`, `password`, `date`) VALUES
(1, 'mgr001', '123', '2023-01-08 12:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `mro`
--

CREATE TABLE `mro` (
  `part_no` varchar(10) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `machine` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mro`
--

INSERT INTO `mro` (`part_no`, `part_name`, `type`, `machine`, `department`) VALUES
('NW-MA-001', 'Push-to-connect', 'Spare', 'Vacuum', 'Testing'),
('NW-MA-0010', 'Leading Screw brush', 'Direct', 'machine', ' Motor Testing  Lab'),
('NW-MA-002', 'Leading Screw brush', 'Spare', 'Hydraulic Press', 'Production'),
('NW-MA-003 ', 'SHL216PV ', 'Oil Maintenance', 'Compressor', 'Production'),
('NW-MA-004 ', ' Fuse', 'Spare', ' Dynamometer', ' Motor Testing  Lab'),
('NW-MA-005 ', 'Cartriges', 'Spare', ' SPM ', 'Composite Lab');

-- --------------------------------------------------------

--
-- Table structure for table `porders`
--

CREATE TABLE `porders` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `porders`
--

INSERT INTO `porders` (`product_id`, `product_name`, `quantity`, `unit`, `status`) VALUES
('NW-PO-0005', 'AX motor 2Kw', 20, 'pcs', 'manufacturing'),
('NW-PO-0006', 'E22F', 40, 'pcs', 'procurement'),
('NW-PR-0001', 'Sealing Cords', 30, 'm', 'order fulfillment'),
('NW-PR-0002', 'ASLG', 200, 'pcs', 'order fulfillment'),
('NW-PR-0003', 'ASLK', 10, 'pcs', 'ordered'),
('NW-PR-0004', 'CFSheet 500x500x1', 500, 'pcs', 'transportation'),
('NW-PR-0007', 'E18Fx', 534, 'pcs', 'warehousing');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `quantity`, `unit`) VALUES
('NW-PR-0002', 'PU Tube 4mm', 100, 'm'),
('NW-PR-0003', 'ASLK', 65, 'pcs'),
('NW-PR-0004', 'E18FX', 40, 'pcs'),
('NW-PR-0005', 'AX motor 2Kw', 200, 'pcs'),
('NW-PR-0007', 'E22Fd', 200, 'pcs'),
('NW-PR-0008', 'NWIFMW', 450, 'pcs'),
('NW-PR-001', 'Sealing Cords', 30, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `ordered_from` varchar(50) NOT NULL,
  `ordered_on` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`product_id`, `product_name`, `quantity`, `unit`, `ordered_from`, `ordered_on`, `status`) VALUES
('NS123', 'wings', 2, 'pcs', 'name', '0000-00-00', 'ordered'),
('NW-PO-0001', 'ESL', 40, 'pcs', 'name', '2022-12-14', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `username`, `dob`, `gender`, `designation`, `phone`, `address`) VALUES
('NW-AD-0001', 'Admin', 'admin', '06/18/2000', 'M', 'admin', 981748364, 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `raw_materials`
--

CREATE TABLE `raw_materials` (
  `sku_id` varchar(10) NOT NULL,
  `material` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `units` varchar(10) NOT NULL,
  `received_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raw_materials`
--

INSERT INTO `raw_materials` (`sku_id`, `material`, `type`, `quantity`, `units`, `received_date`) VALUES
('NW-RM-0001', 'CF3KTW', 'Indirect', 75, 'm', '2022-12-07'),
('NW-RM-0002', '2W Tube', 'Indirect', 100, 'pcs', '2022-12-15'),
('NW-RM-0006', 'HM ResMat', ' Direct', 60, 'l', '2022-12-07'),
('NW-RM-0007', ' CF3KTW', 'Direct', 75, 'm', '2023-01-01'),
('NW-RM-0009', 'Db Foam 6mm', 'Direct', 60, 'mm', '2022-06-14'),
('NW-RM-0010', 'Sealing Cords ', 'Indirect', 30, 'm', '2022-10-05'),
('NW-RM-077', ' CF3KTWWW', 'Direct', 75, 'mm', '2023-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `dob`, `gender`, `designation`, `phone`, `address`) VALUES
('NW-AD-0001', 'admin', '2000-06-18', 'M', 'admin', 987654321, 'RT nagar, Bangalore'),
('NW-MG-0006', 'mgr06', '1985-06-14', 'M', 'Manager', 2147483647, 'Yelahanka'),
('NW-WK-0001', 'wk001', '1998-02-13', 'F', 'Worker', 876579076, 'Jp Nagar 6th phase'),
('NW-MG-0001', 'mgr001', '1976-08-19', 'M', 'Manager', 2147483647, 'Jayanagar 3rd block'),
('NW-MG-0002', 'mgr002', '1988-11-16', 'F', 'Manager', 2147483647, 'Kengeri'),
('NW-WK-0005', 'wk005', '1990-09-06', 'M', 'Worker', 2147483647, 'East End'),
('NW-WK-0007', 'wk007', '1994-08-30', 'F', 'Worker', 2147483647, 'RBI Layout');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(23) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `password`, `date`) VALUES
(34, 'sadiya', '123', '2023-01-02 21:54:11'),
(35, 'mgr001', '123', '2023-01-04 10:19:35'),
(36, 'admin', '123', '2023-01-06 21:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `wip`
--

CREATE TABLE `wip` (
  `batch_id` varchar(10) NOT NULL,
  `component` varchar(50) NOT NULL,
  `workstation_from` int(5) NOT NULL,
  `time_deposited` varchar(10) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `workstation_to` int(5) NOT NULL,
  `time_picked` varchar(10) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wip`
--

INSERT INTO `wip` (`batch_id`, `component`, `workstation_from`, `time_deposited`, `sender`, `workstation_to`, `time_picked`, `receiver`) VALUES
('PD-0001', 'CF Temp', 1111, '01:26', 'name', 6, '13:25', 'name'),
('PD-0002', 'PF', 2, ' 14:22', 'name', 5, '04:30', 'name'),
('PD-0003', 'Cut PUF', 2, ' 08:24', 'name', 3, '09:40', 'name'),
('PD-00088', 'Sket Balsa hn', 6, ' 19:32', 'name', 3, '19:28', 'name');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finished_goods`
--
ALTER TABLE `finished_goods`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `mro`
--
ALTER TABLE `mro`
  ADD PRIMARY KEY (`part_no`);

--
-- Indexes for table `porders`
--
ALTER TABLE `porders`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `raw_materials`
--
ALTER TABLE `raw_materials`
  ADD PRIMARY KEY (`sku_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `wip`
--
ALTER TABLE `wip`
  ADD PRIMARY KEY (`batch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
