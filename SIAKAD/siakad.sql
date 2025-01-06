-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 02:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `idDosen` varchar(100) NOT NULL,
  `namaDosen` varchar(100) NOT NULL,
  `jkDosen` varchar(100) NOT NULL,
  `tmplDosen` varchar(250) NOT NULL,
  `tgllhrDosen` date NOT NULL,
  `telpDosen` varchar(255) NOT NULL,
  `alamatDosen` varchar(100) NOT NULL,
  `idUsername` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`idDosen`, `namaDosen`, `jkDosen`, `tmplDosen`, `tgllhrDosen`, `telpDosen`, `alamatDosen`, `idUsername`) VALUES
('01', 'Ahmad Khasim, S.H', 'laki-laki', 'Kediri', '2024-03-13', '087654312 ', 'Jl.Bunga Mekar No.14  ', '001'),
('02', 'Silvia Rahmawati, S.Kom', 'laki-laki', 'Bogor', '2024-03-15', '0865327115 ', 'Jl.Pahlawan kita No.17 ', '002'),
('03', 'Sholikin Fatkhur Rohman ,S.Psi .,M.Kom', 'laki-laki', 'Jakarta', '2024-03-19', '0877743561973 ', 'Jl.SukaMaju No.18 ', '003');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `idKrs` varchar(100) NOT NULL,
  `idMhs` varchar(100) NOT NULL,
  `idMatkul` varchar(100) NOT NULL,
  `nilaiUts` decimal(20,0) NOT NULL,
  `nilaiUas` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`idKrs`, `idMhs`, `idMatkul`, `nilaiUts`, `nilaiUas`) VALUES
('123456', '002', '02', '84', '92'),
('1234567', '003', '03', '88', '97'),
('12345678', '003', '03', '91', '95');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `idMhs` varchar(100) NOT NULL,
  `namaMhs` varchar(100) NOT NULL,
  `jkMhs` varchar(100) NOT NULL,
  `tmplMhs` varchar(250) NOT NULL,
  `tgllhrMhs` date NOT NULL,
  `alamatMhs` varchar(255) NOT NULL,
  `telpMhs` varchar(100) NOT NULL,
  `idUsername` varchar(100) DEFAULT NULL,
  `idProdi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`idMhs`, `namaMhs`, `jkMhs`, `tmplMhs`, `tgllhrMhs`, `alamatMhs`, `telpMhs`, `idUsername`, `idProdi`) VALUES
('001', 'Andrean Dika', 'laki-laki', 'Yogyakarta', '2024-03-20', 'Jl.Malioboro No.2', ' 086536613', '001', '01'),
('002', 'Reni Sulistiana', 'perempuan', 'Solo', '2024-03-30', 'Jl.Sukacita No 19', ' 09864665', '002', '02'),
('003', 'Arman Maulana', 'laki-laki', 'Sumatra Selatan', '2024-03-27', 'Jl.Padangluas No.11', ' 0874223', '003', '03');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `idMatkul` varchar(100) NOT NULL,
  `namaMatkul` varchar(100) NOT NULL,
  `idDosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`idMatkul`, `namaMatkul`, `idDosen`) VALUES
('01', 'Pengantar Ilmu Hukum', '01'),
('02', 'Kalkulus', '02'),
('03', 'Psikologi Sosial', '03');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `idProdi` varchar(100) NOT NULL,
  `namaProdi` varchar(100) DEFAULT NULL,
  `alamatProdi` varchar(255) DEFAULT NULL,
  `noTelp` varchar(100) DEFAULT NULL,
  `idDosen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`idProdi`, `namaProdi`, `alamatProdi`, `noTelp`, `idDosen`) VALUES
('01', 'Hukum', 'kediri', '08531337282', '01'),
('02', 'Teknik Informatika', 'Bogor', '0865535252', '02'),
('03', 'Psikologi', 'Jakarta', '087753671', '03');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `idUsername` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`idUsername`, `username`, `password`) VALUES
('', '', ''),
('001', 'Brian001', '12345'),
('002', 'Albert002', '12345'),
('003', 'Agung003', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`idDosen`),
  ADD KEY `idUsername` (`idUsername`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`idKrs`),
  ADD KEY `krs_ibfk_1` (`idMhs`),
  ADD KEY `krs_ibfk_2` (`idMatkul`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`idMhs`),
  ADD KEY `mahasiswa_ibfk_1` (`idUsername`),
  ADD KEY `mahasiswa_ibfk_2` (`idProdi`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`idMatkul`),
  ADD KEY `matkul_ibfk_1` (`idDosen`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`idProdi`),
  ADD KEY `prodi_ibfk_1` (`idDosen`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`idUsername`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`idUsername`) REFERENCES `username` (`idUsername`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`idMhs`) REFERENCES `mahasiswa` (`idMhs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`idMATKUL`) REFERENCES `matkul` (`idMatkul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`idUsername`) REFERENCES `username` (`idUsername`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`idProdi`) REFERENCES `prodi` (`idProdi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `matkul_ibfk_1` FOREIGN KEY (`idDosen`) REFERENCES `dosen` (`idDosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`idDosen`) REFERENCES `dosen` (`idDosen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
