-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 04:23 PM
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
-- Database: `mdums`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL,
  `announcement_desc` varchar(500) NOT NULL,
  `announcement_title` varchar(40) NOT NULL,
  `announcement_date` date NOT NULL,
  `announcement_status` varchar(15) NOT NULL,
  `announcement_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `announcement_desc`, `announcement_title`, `announcement_date`, `announcement_status`, `announcement_img`) VALUES
(14, 'Jamuan di Masjid Darul Ulum...Terima kasih pihak pengurusan masjid sudi berurusan dengan Iman Catering', 'Jamuan di Masjid Darul Ulum', '2023-12-26', 'running', 'makantalam005.jpg'),
(15, 'Menanam sikap menyanjungi dan memuliakan al-Quran', 'Program Khatam AL-Quran', '2023-12-30', 'running', 'al-quran.jpg'),
(17, 'Hebahan untuk hari ini. Kuliah maghrib Ustaz Azhar Idrus (UAI) seperti yang tertera pada poster. Kehadiran dijemput semuanya.', 'Kuliah Maghrib Ustaz Azhar Idrus', '2023-12-31', 'running', 'kuliah.jpg'),
(19, 'Jika direnungkan kembali, begitu banyak nikmat dan anugerah yang telah dikurniakan kepada kita. Sesungguhnya Allah itu Maha Pemurah, Maha Sempurna daripada sebarang kekurangan.\r\n\r\nAdalah merupakan akhlak yang elok jika kita sebagai hambaNya mensyukuri segala nikmatnya ini. Banyak cara yang boleh kita lakukan untuk menzahirkan rasa syukur ini. Salah satunya adalah dengan mengadakan majlis kesyukuran dan memberi makan kepada orang ramai.', 'Majlis Kesyukuran', '2024-01-02', 'running', 'kesyukuran.png'),
(20, 'Islam di Malaysia dihidupkan secara bersama oleh pertubuhan-pertubuhan bernuansa Islam. Sebahagian besarnya didaftarkan kepada Pendaftar Pertubuhan (ROS) sebagai pertubuhan bukan kerajaan (NGO) manakala sebahagian kecilnya berdaftar sebagai sebuah parti politik. Terdapat juga institusi yang ditubuhkan oleh kerajaan di peringkat Persekutuan atau Negeri-negeri.', 'Kelab Islam Sedunia', '2024-01-03', 'running', 'pendidikan-islam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `Expense_id` int(10) NOT NULL,
  `Expense_Type` varchar(100) NOT NULL,
  `Expense_Amount` int(20) NOT NULL,
  `Expense_Date` date NOT NULL,
  `Expense_status` varchar(20) NOT NULL,
  `Expense_To` varchar(100) NOT NULL,
  `Expense_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`Expense_id`, `Expense_Type`, `Expense_Amount`, `Expense_Date`, `Expense_status`, `Expense_To`, `Expense_description`) VALUES
(7, 'Bajet UPSR 2012', 5000, '2023-12-26', 'accepted', 'Masjid Darul Ulum', 'Derma kepada pelajar cemerlang UPSR'),
(8, 'tax', 1000, '2023-12-28', 'accepted', 'JKR', 'Bayar cukai tanah'),
(9, 'tax', 500, '2023-12-30', 'accepted', 'Malek Canopy Sdn. Bhd', 'Bayar Kanopi Hari Raya Qorban'),
(10, 'Utility', 500, '2023-12-30', 'accepted', 'Arman Toilet Supplier Sdn.bhd', 'Mangkuk Tandas Baharu'),
(11, 'Rent', 600, '2023-12-31', 'accepted', 'Pembekal Meja 1 Malaysia', 'Sewa Meja Bulat untuk Hari Raya'),
(12, 'Tax', 200, '2024-01-02', 'accepted', 'LHDNM', 'Bayar Cukai Tahunan'),
(13, 'Rent', 400, '2024-01-02', 'accepted', 'Ali Sejadah Sdn.Bhd', 'Bayar Sewa Sejadah'),
(15, 'Rent', 1000, '2024-01-08', 'accepted', 'JKR', 'Derma ikhlas dari pihak kampung'),
(16, 'Rent', 1000, '2024-01-08', 'accepted', 'JKR', 'Bayar Cukai Tanah 2024');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `Income_id` int(10) NOT NULL,
  `Income_Type` varchar(100) NOT NULL,
  `Income_Amount` int(20) NOT NULL,
  `Income_Date` date NOT NULL,
  `Income_From` varchar(30) NOT NULL,
  `Income_Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`Income_id`, `Income_Type`, `Income_Amount`, `Income_Date`, `Income_From`, `Income_Description`) VALUES
(3, 'Tabung Derma', 200, '2023-12-24', 'Unimas', 'Derma ikhlas dari Taib Mahmud'),
(5, 'Derma', 1000, '2023-12-24', 'Taib Mahmud', 'Derma ikhlas dari pihak kampung'),
(7, 'accepted', 2000, '2024-01-10', 'Taman Desa Ilmu', 'Derma ikhlas dari pihak kampung'),
(8, 'accepted', 2000, '2024-01-10', 'YB Robeah', 'Derma ikhlas 2024'),
(9, 'accepted', 5000, '2024-01-01', 'Taib Mahmud', 'Derma Dari Taib Mahmud');

-- --------------------------------------------------------

--
-- Table structure for table `permanentresident`
--

CREATE TABLE `permanentresident` (
  `application_id` int(255) NOT NULL,
  `application_name` varchar(50) NOT NULL,
  `application_status` varchar(20) NOT NULL,
  `application_age` int(3) NOT NULL,
  `application_religion` varchar(40) NOT NULL,
  `application_marital` varchar(10) NOT NULL,
  `application_address` varchar(100) NOT NULL,
  `application_phonenumber` varchar(30) NOT NULL,
  `application_email` varchar(50) NOT NULL,
  `application_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permanentresident`
--

INSERT INTO `permanentresident` (`application_id`, `application_name`, `application_status`, `application_age`, `application_religion`, `application_marital`, `application_address`, `application_phonenumber`, `application_email`, `application_date`) VALUES
(1, 'Ali bin Salleh', 'accepted', 43, 'islam', 'married', 'S/L 51, Taman Cahya, Kota Samarahan, Kuching, Samarahan', '012-8298374', 'ali@gmail.com', '2023-12-24'),
(2, 'Kasim Selamat', 'accepted', 35, 'islam', 'married', 'S/L 51, Taman Cahya, Kota Samarahan, Kuching, Samarahan', '012-2635454', 'Abu@gmail.com', '2023-12-25'),
(6, 'Ahmad Tariq', 'rejected', 27, 'islam', 'married', 'S/L 51, Taman Cahaya Damai, Desa Ilmu Samarahan, Sarawak', '013-4563746', 'Tariq123@gmail.com', '2023-12-30'),
(8, 'Ahmad Albab', 'accepted', 32, 'islam', 'single', 'S/L51(6110),LORONG CAHAYA DAMAI 7B3D,TAMAN CAHYA PUTRI,BANDAR BARU SAMARIANG', '019-2763845', 'albab@gmail.com', '2024-01-03'),
(10, 'Bakar bin Buang', 'pending', 30, 'islam', 'single', 'S/L51(6110),LORONG DESA ILMU SAMARAHAN, SARAWAK', '013-7564856', 'Bakar@gmail.com', '2024-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_username`, `user_password`, `user_role`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'admin2', '123', 'treasurer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`Expense_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`Income_id`);

--
-- Indexes for table `permanentresident`
--
ALTER TABLE `permanentresident`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `Expense_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `Income_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permanentresident`
--
ALTER TABLE `permanentresident`
  MODIFY `application_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
