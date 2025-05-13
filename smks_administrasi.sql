-- --------------------------------------------------------
-- Database: `smks_administrasi`
-- --------------------------------------------------------

DROP DATABASE IF EXISTS smks_administrasi;
CREATE DATABASE smks_administrasi;
USE smks_administrasi;

-- ------------------------
-- Table: admin
-- ------------------------
CREATE TABLE `admin` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL
);

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- ------------------------
-- Table: siswa
-- ------------------------
CREATE TABLE `siswa` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nama` VARCHAR(100) NOT NULL,
  `nis` VARCHAR(20) NOT NULL UNIQUE,
  `kelas` VARCHAR(10) NOT NULL
);

-- ------------------------
-- Table: guru
-- ------------------------
CREATE TABLE `guru` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nama` VARCHAR(100) NOT NULL,
  `nip` VARCHAR(20) NOT NULL UNIQUE,
  `mapel` VARCHAR(50) NOT NULL
);

-- ------------------------
-- Table: jadwal
-- ------------------------
CREATE TABLE `jadwal` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `hari` VARCHAR(10) NOT NULL,
  `jam` VARCHAR(10) NOT NULL,
  `mapel` VARCHAR(50) NOT NULL,
  `kelas` VARCHAR(10) NOT NULL
);

-- ------------------------
-- Table: nilai
-- ------------------------
CREATE TABLE `nilai` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nis` VARCHAR(20) NOT NULL,
  `mapel` VARCHAR(50) NOT NULL,
  `nilai` INT NOT NULL
);
