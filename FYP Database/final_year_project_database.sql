-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 07:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_year_project_database`
--
CREATE DATABASE IF NOT EXISTS `final_year_project_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `final_year_project_database`;

-- --------------------------------------------------------

--
-- Table structure for table `add to cart`
--

CREATE TABLE `add to cart` (
  `Id` int(255) NOT NULL,
  `Buyer Name` varchar(255) NOT NULL,
  `Product Title` varchar(255) NOT NULL,
  `Product Description` varchar(255) NOT NULL,
  `Product Quantity` varchar(255) NOT NULL,
  `Product Price` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `Product Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add to cart`
--

INSERT INTO `add to cart` (`Id`, `Buyer Name`, `Product Title`, `Product Description`, `Product Quantity`, `Product Price`, `Total`, `Product Picture`) VALUES
(1, 'Muhammad Zahid', 'Dell Laptop', 'core i 5 3rd Generation', '2', '3000', '6000', 'Add Laptops/Dell Laptop 7.jpg'),
(2, 'Muhammad Zahid', 'Apple laptop ', 'core i 5 3rd Generation', '23', '3000', '69000', 'Add Laptops/Apple Laptop 1.jpg'),
(3, 'Muhammad Zahid', 'DSLR', 'DSLR 7720', '12', '4000', '48000', 'Add Cameras/Canon 1.jpg'),
(4, 'Muhammad Zahid', 'HP laptop', 'HP laptop core i 5', '8', '3000', '24000', 'Add Laptops/hp laptop 1.jpg'),
(5, 'Muhammad Zahid', 'core i 5 ', 'Gamming Pc', '12', '4000', '48000', 'Add Computers/Tower 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buyers table`
--

CREATE TABLE `buyers table` (
  `Id` int(255) NOT NULL,
  `Buyer_Name` varchar(255) NOT NULL,
  `Buyer_Email` varchar(255) NOT NULL,
  `Buyer_Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm_Password` varchar(255) NOT NULL,
  `Buyer_Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyers table`
--

INSERT INTO `buyers table` (`Id`, `Buyer_Name`, `Buyer_Email`, `Buyer_Phone`, `Password`, `Confirm_Password`, `Buyer_Image`) VALUES
(1, 'Muhammad Zahid', 'zahidkhattakcs@gmail.com', '03348854074', '$2y$10$FbZEiusRbqNMfuD2FrhLJus2ARn/JUuVeBBo4wNTEniOGlWZPvvW.', '$2y$10$nO8k4SD4d5j1yFU.WZi0UuSc5csX2yiaAGXWLJhSACwjhEnzXjcni', 'Buyer Images/mypic.JPG'),
(2, 'Huzaifa Khan', 'huzaifa@gmail.com', '3456497998', '$2y$10$QN4n1GlMCM9Ho4L3qBO.xuiTalKuka.nAKQI0Euer3HN65v0OpUcu', '$2y$10$M5bny54aZEVHfPK5Fs0t5OJYbgHHOBrsCTGjkBn/9QnbW5yjccoMu', 'Buyer Images/DSC_0762.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `cameras table`
--

CREATE TABLE `cameras table` (
  `Id` int(255) NOT NULL,
  `Camera Title` varchar(255) NOT NULL,
  `Camera Description` varchar(255) NOT NULL,
  `Camera Quantity` int(255) NOT NULL,
  `Camera Price` int(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cameras table`
--

INSERT INTO `cameras table` (`Id`, `Camera Title`, `Camera Description`, `Camera Quantity`, `Camera Price`, `Picture 1`, `Picture 2`, `Picture 3`) VALUES
(1, 'DSLR', 'DSLR 7720', 6, 9000, 'Add Cameras/Canon 1.jpg', 'Add Cameras/Canon 2.jpg', 'Add Cameras/Canon 3.jpg'),
(2, 'Drone Camera ', 'Drone Camera with original charger', 4, 4000, 'Add Cameras/Drone 2.jpg', 'Add Cameras/Drone 6.jpg', 'Add Cameras/Drone 7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `headphones table`
--

CREATE TABLE `headphones table` (
  `Id` int(255) NOT NULL,
  `Headphone Title` varchar(255) NOT NULL,
  `Headphone Description` varchar(255) NOT NULL,
  `Headphone Quantity` varchar(255) NOT NULL,
  `Headphone Price` varchar(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `headphones table`
--

INSERT INTO `headphones table` (`Id`, `Headphone Title`, `Headphone Description`, `Headphone Quantity`, `Headphone Price`, `Picture 1`, `Picture 2`, `Picture 3`) VALUES
(1, 'Bludieo', 'Bludieo orignal company Headphones', '3', '3000', 'Add Headphones/Bluedio Headphones 1.jpg', 'Add Headphones/Bluedio Headphones 2.jpg', 'Add Headphones/Bluedio Headphones 4.jpg'),
(2, 'Bose Headphone', 'bose', '2', '200', 'Add Headphones/Bose Headphone 1.jpg', 'Add Headphones/Bose Headphone 2.jpg', 'Add Headphones/Bose Headphone 5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laptops table`
--

CREATE TABLE `laptops table` (
  `Id` int(255) NOT NULL,
  `Laptop Title` varchar(255) NOT NULL,
  `Laptop Description` varchar(255) NOT NULL,
  `Laptop_Quantity` varchar(255) NOT NULL,
  `Laptop_Price` int(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptops table`
--

INSERT INTO `laptops table` (`Id`, `Laptop Title`, `Laptop Description`, `Laptop_Quantity`, `Laptop_Price`, `Picture 1`, `Picture 2`, `Picture 3`) VALUES
(1, 'Apple laptop ', 'core i 5 3rd Generation', '5', 5000, 'Add Laptops/Apple Laptop 1.jpg', 'Add Laptops/Apple Laptop 2.jpg', 'Add Laptops/Apple Laptop 3.jpg'),
(2, 'HP laptop', 'HP laptop core i 5', '0', 5000, 'Add Laptops/hp laptop 1.jpg', 'Add Laptops/hp laptop 4.jpg', 'Add Laptops/hp laptop 6.jpg'),
(3, 'Dell Laptop', 'core i 5 3rd Generation', '3', 3000, 'Add Laptops/Dell Laptop 7.jpg', 'Add Laptops/Dell Laptop 4.jpg', 'Add Laptops/Dell Laptop 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laptop stands table`
--

CREATE TABLE `laptop stands table` (
  `Id` int(255) NOT NULL,
  `Laptop Stand Title` varchar(255) NOT NULL,
  `Laptop Stand Description` varchar(255) NOT NULL,
  `Laptop Stand Quantity` int(255) NOT NULL,
  `Laptop Stand Price` int(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop stands table`
--

INSERT INTO `laptop stands table` (`Id`, `Laptop Stand Title`, `Laptop Stand Description`, `Laptop Stand Quantity`, `Laptop Stand Price`, `Picture 1`, `Picture 2`, `Picture 3`) VALUES
(1, 'normal laptop stand', 'normal laptop stand for sell', 1, 10000, 'Add Laptop Stands/Normal Stand 1.jpg', 'Add Laptop Stands/Normal Stand 2.jpg', 'Add Laptop Stands/Normal Stand 3.jpg'),
(2, 'Brand Stand', 'Brand stand made in china', 6, 6000, 'Add Laptop Stands/Brand Stand 1.jpg', 'Add Laptop Stands/Brand Stand 3.jpg', 'Add Laptop Stands/Brand Stand 4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `monitors table`
--

CREATE TABLE `monitors table` (
  `Id` int(255) NOT NULL,
  `Monitor Title` varchar(255) NOT NULL,
  `Monitor Description` varchar(255) NOT NULL,
  `Monitor Quantity` int(255) NOT NULL,
  `Monitor Price` int(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monitors table`
--

INSERT INTO `monitors table` (`Id`, `Monitor Title`, `Monitor Description`, `Monitor Quantity`, `Monitor Price`, `Picture 1`, `Picture 2`, `Picture 3`) VALUES
(1, 'Dell LCD', 'Dell LCD 12 inches', 2, 2000, 'Add Monitors/Dell LCD 5.jpg', 'Add Monitors/Dell LCD 4.jpg', 'Add Monitors/Dell LCD 3.jpg'),
(2, 'LG LCD', 'LG original LCD 17 inches', 3, 3000, 'Add Monitors/LG LCD 3.jpg', 'Add Monitors/LG LCD 1.jpg', 'Add Monitors/LG LCD 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(255) NOT NULL,
  `Buyer Name` varchar(255) NOT NULL,
  `Buyer_Image` varchar(255) NOT NULL,
  `Product Name` varchar(255) NOT NULL,
  `Product Description` varchar(255) NOT NULL,
  `Product Quantity` varchar(255) NOT NULL,
  `Product Price` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `Product Pic 1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `Buyer Name`, `Buyer_Image`, `Product Name`, `Product Description`, `Product Quantity`, `Product Price`, `Total`, `Product Pic 1`) VALUES
(1, 'Muhammad Zahid', 'Buyer Images/mypic.JPG', 'DSLR', 'DSLR 7720', '3', '4000', '12000', 'Add Cameras/Canon 1.jpg'),
(2, 'Muhammad Zahid', 'Buyer Images/mypic.JPG', 'HP laptop', 'HP laptop core i 5', '2', '3000', '6000', 'Add Laptops/hp laptop 1.jpg'),
(3, 'Muhammad Zahid', 'Buyer Images/mypic.JPG', 'HP laptop', 'HP laptop core i 5', '3', '3000', '9000', 'Add Laptops/hp laptop 1.jpg'),
(4, 'Muhammad Zahid', 'Buyer Images/mypic.JPG', 'pentium 4', '8 GB Ram 320GB HDD', '1', '4000', '4000', 'Add Computers/Desktop 3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `personal computers table`
--

CREATE TABLE `personal computers table` (
  `Id` int(255) NOT NULL,
  `Computer Title` varchar(255) NOT NULL,
  `Computer Description` varchar(255) NOT NULL,
  `Computer Quantity` int(255) NOT NULL,
  `Computer Price` int(255) NOT NULL,
  `Picture 1` varchar(255) NOT NULL,
  `Picture 2` varchar(255) NOT NULL,
  `Picture 3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal computers table`
--

INSERT INTO `personal computers table` (`Id`, `Computer Title`, `Computer Description`, `Computer Quantity`, `Computer Price`, `Picture 1`, `Picture 2`, `Picture 3`) VALUES
(1, 'pentium 4', '8 GB Ram 320GB HDD', 2, 3000, 'Add Computers/Desktop 3.jpg', 'Add Computers/Desktop 2.jpg', 'Add Computers/Desktop 1.jpeg'),
(2, 'core i 5 ', 'Gamming Pc', 4, 4000, 'Add Computers/Tower 2.jpg', 'Add Computers/Tower 3.jpg', 'Add Computers/Tower 4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller_table`
--

CREATE TABLE `seller_table` (
  `Id` int(255) NOT NULL,
  `Seller_Name` varchar(255) NOT NULL,
  `Seller_Email` varchar(255) NOT NULL,
  `Seller_Phone` varchar(255) NOT NULL,
  `Seller_Picture` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_table`
--

INSERT INTO `seller_table` (`Id`, `Seller_Name`, `Seller_Email`, `Seller_Phone`, `Seller_Picture`, `Password`, `Confirm_Password`) VALUES
(1, 'Muhammad Zahid', 'zahidkhattakcs@gmail.com', '03348854074', 'Seller Images/zahid pic.JPG', '$2a$12$JflDR8fkF0/5Ufm/I2/rpup.kvjlWow7akvPlXI0llMvVT1rLjx8W', '$2a$12$JflDR8fkF0/5Ufm/I2/rpup.kvjlWow7akvPlXI0llMvVT1rLjx8W'),
(2, 'Bilal Ahmad', 'bilal@gmail.com', '99887', 'Buyer/bilal.jpg', '$2a$12$D.MZ0gW1Ws5Dd9NCmy8PReGKN2M0lq3fJvuEiz9mDzJrEXwrzlHo2', '$2a$12$D.MZ0gW1Ws5Dd9NCmy8PReGKN2M0lq3fJvuEiz9mDzJrEXwrzlHo2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add to cart`
--
ALTER TABLE `add to cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `buyers table`
--
ALTER TABLE `buyers table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cameras table`
--
ALTER TABLE `cameras table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `headphones table`
--
ALTER TABLE `headphones table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `laptops table`
--
ALTER TABLE `laptops table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `laptop stands table`
--
ALTER TABLE `laptop stands table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `monitors table`
--
ALTER TABLE `monitors table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `personal computers table`
--
ALTER TABLE `personal computers table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `seller_table`
--
ALTER TABLE `seller_table`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add to cart`
--
ALTER TABLE `add to cart`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buyers table`
--
ALTER TABLE `buyers table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cameras table`
--
ALTER TABLE `cameras table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headphones table`
--
ALTER TABLE `headphones table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laptops table`
--
ALTER TABLE `laptops table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laptop stands table`
--
ALTER TABLE `laptop stands table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `monitors table`
--
ALTER TABLE `monitors table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal computers table`
--
ALTER TABLE `personal computers table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller_table`
--
ALTER TABLE `seller_table`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `php`
--
CREATE DATABASE IF NOT EXISTS `php` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php`;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `Id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`Id`, `image`) VALUES
(2, 'images/_DSC1063.JPG'),
(3, 'images/_DSC1109.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'Final year project database system', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"phpmyadmin\",\"signup_and_login\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"final_year_project_database\",\"table\":\"seller_table\"},{\"db\":\"final_year_project_database\",\"table\":\"seller table\"},{\"db\":\"final_year_project_database\",\"table\":\"buyers table\"},{\"db\":\"final_year_project_database\",\"table\":\"personal computers table\"},{\"db\":\"final_year_project_database\",\"table\":\"Buyers table\"},{\"db\":\"final_year_project_database\",\"table\":\"laptop stands table\"},{\"db\":\"final_year_project_database\",\"table\":\"Personal Computers table\"},{\"db\":\"final_year_project_database\",\"table\":\"Laptop Stands Table\"},{\"db\":\"final_year_project_database\",\"table\":\"monitors table\"},{\"db\":\"final_year_project_database\",\"table\":\"Monitors Table\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'signup_and_login', 'registration', '{\"CREATE_TIME\":\"2024-05-03 11:51:14\",\"col_order\":[0,1,2,3,4,5],\"col_visib\":[1,1,1,1,1,1],\"sorted_col\":\"`registration`.`Pictures` DESC\"}', '2024-05-08 13:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-07-09 15:43:02', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":225}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
