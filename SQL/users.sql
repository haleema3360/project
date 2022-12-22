-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 05:02 AM
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
('NW-FP-0001', 'E22Fd', 'PD', 'standard', 700, 'AAL'),
('NW-FP-0002', 'E15Fx', 'CD', 'Custom', 1300, 'IFT');

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
('NW-MA-001', 'Push-to-connect', 'Spare', 'Vacuum', 'Production'),
('NW-MA-002', 'Leading Screw brush', 'Spare', 'Hydraulic Press', 'Production');

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
('NW-PR-0001', 'Sealing Cords', 30, 'm', 'order fulfillment');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `quantity`, `unit`, `status`) VALUES
('NW-PR-0002', 'PU Tube 4mm', 100, 'm', 'manufacturing'),
('NW-PR-001', 'Sealing Cords', 30, 'm', 'ordered');

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
('NW-RM-0001', 'CF3KTW', 'Direct', 75, 'm', '2022-12-07'),
('NW-RM-0002', '2W Tube', 'Indirect', 100, 'pcs', '2022-12-15');

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
('NW-MG-0006', 'mgr21', '1991-12-11', 'M', 'Manager', 2147483647, 'Yelahanka, Bangalore');

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
(26, 'admin', '123', '2022-11-15 08:03:36');

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
('PD-0001', 'CF Temp', 1, ' 10:15', 'name', 6, '13:25', 'name'),
('PD-0002', 'PF', 2, ' 14:22', 'name', 5, '04:30', 'name');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finished_goods`
--
ALTER TABLE `finished_goods`
  ADD PRIMARY KEY (`product_id`);

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
