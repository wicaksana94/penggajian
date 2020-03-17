-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


;

-- Dumping structure for table penggajian.aturan_gaji
CREATE TABLE IF NOT EXISTS `aturan_gaji` (
  `id_aturan_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` int(11) DEFAULT NULL,
  `masa_kerja` int(11) DEFAULT NULL,
  `insentif` int(11) DEFAULT NULL,
  `bonus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_aturan_gaji`),
  KEY `jabatan` (`jabatan`),
  CONSTRAINT `FK_aturan_gaji_jabatan` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table penggajian.aturan_gaji: ~4 rows (approximately)
/*!40000 ALTER TABLE `aturan_gaji` DISABLE KEYS */;
INSERT INTO `aturan_gaji` (`id_aturan_gaji`, `jabatan`, `masa_kerja`, `insentif`, `bonus`) VALUES
	(2, 1, 1, 100000, 100000),
	(4, 2, 1, 41241, 50000),
	(5, 3, 15, 14000000, 200000),
	(6, 3, 3, 4232130, 13440000);
/*!40000 ALTER TABLE `aturan_gaji` ENABLE KEYS */;

-- Dumping structure for table penggajian.gaji
CREATE TABLE IF NOT EXISTS `gaji` (
  `id_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penggajian` varchar(50) DEFAULT NULL,
  `nip_karyawan` varchar(50) DEFAULT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `tgl_penerimaan` date DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table penggajian.gaji: ~3 rows (approximately)
/*!40000 ALTER TABLE `gaji` DISABLE KEYS */;
INSERT INTO `gaji` (`id_gaji`, `kode_penggajian`, `nip_karyawan`, `nama_karyawan`, `tgl_penerimaan`, `nominal`) VALUES
	(4, 'PJ-432', '543554222234', 'Aming Luluk', '2020-03-17', 23095562),
	(5, 'PJ-444', '4324523523', 'Michael Adamia', '2020-03-17', 2491241),
	(13, 'PJ-432', '4324523523', 'Michael Adamia', '2020-03-18', 2491241);
/*!40000 ALTER TABLE `gaji` ENABLE KEYS */;

-- Dumping structure for table penggajian.jabatan
CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(15) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `standar_gaji` int(11) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table penggajian.jabatan: ~3 rows (approximately)
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` (`id_jabatan`, `kode`, `jabatan`, `standar_gaji`, `keterangan`) VALUES
	(1, 'MKT', 'Marketing', 2000000, 'as'),
	(2, 'AKTN', 'Akuntan', 2400000, ''),
	(3, 'RDG', 'Manajer', 5423432, 'de');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;

-- Dumping structure for table penggajian.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatan` int(11) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT '-',
  `tgl_lahir` date DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text,
  `masa_kerja` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`),
  KEY `FK_karyawan_jabatan` (`id_jabatan`),
  CONSTRAINT `FK_karyawan_jabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table penggajian.karyawan: ~7 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` (`id_karyawan`, `id_jabatan`, `nip`, `nama`, `jenis_kelamin`, `tgl_lahir`, `telp`, `email`, `alamat`, `masa_kerja`) VALUES
	(1, 1, '534543534533', 'Amin Suganda', 'L', '1992-12-09', '08123432989232', 'tamkar231@gmail.com', 'Jalan Kenanga no.12 Semarang', 1),
	(2, 2, '4324523523', 'Michael Adamia', 'L', '1993-02-02', '08123432989321', 'michael@gmail.com', 'Jalan Merak no.22 Salatiga', 1),
	(3, 3, '534543534533', 'Miranda Lestarie', 'P', '1993-11-11', '08123432989232', 'miranda@gmail.com', 'Jalan Mekar no.33 Bekasi', 2),
	(14, 1, '4234324242342', 'Arya Wicaksana', 'L', '1992-03-17', '085642918987', 'wicaksana94@gmail.com', 'Jalan Mawar no.42', 3),
	(15, 3, '543554222234', 'Aming Luluk', 'L', '1991-12-21', '08123432989232', 'aming@gmail.com', 'Jalan Rusa no.33 Jakarta Barat', 3),
	(17, NULL, '4234324242342', 'Arya Wicaksana', 'L', '2020-03-17', '085642918987', 'wicaksana94@gmail.com', 'Jalan Mawar no.42', 3),
	(18, NULL, '4234324242342', 'Arya Wicaksana', NULL, '2020-03-17', '085642918987', 'wicaksana94@gmail.com', 'Jalan Mawar no.42', 5);
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
