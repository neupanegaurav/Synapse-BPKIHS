-- Synapse-BPKIHS Database Schema
-- Reconstructed from CRUD analysis of the project source code.

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `register`
--
-- This table is used by `includes/insertdata.php` to store participant registrations.
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `event` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `voucher_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- This table is used by `administrator/index.php` for admin authentication.
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Default Admin User
-- Username: admin
-- Password: admin (MD5: 21232f297a57a5a743894a0e4a801fc3)
--

INSERT INTO `user` (`username`, `password`) VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3');
