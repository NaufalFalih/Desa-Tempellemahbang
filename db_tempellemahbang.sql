-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 08:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tempellemahbang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `isi`, `tanggal`, `foto`, `id_user`, `id_kategori`) VALUES
(4, 'Potensi Wisata Desa Tempellemahbang di Waduk Selo Parang', 'Cuaca cerah mengitari alam desa Tempellemahbang, Kecamatan Jepon, Kabupaten Blora, Jawa Tengah. Rindang pepohonan menghembuskan hawa segar di kawasan Waduk Selo Parang di wilayah desa setempat. Waduk yang mengandalkan air hujan itu, beberapa tahun lalu telah dimanfaatkan oleh petani desa Tempellemahbang untuk irigasi pertanian.\r\n\r\nDi sekitar lokasi waduk itu pula, kerap didatangi pemuda dan orang dewasa untuk menikmati pemandangan dari atas bukit, yang dikenal dengan nama bukit cinta. Seiring dengan program inovasi desa, Pemerintah Desa Tempellemahbang akhirnya mengambil inisiatif dan berbenah menjadikan lokasi waduk Selo Parang sebagai destinasi wisata desa', '2022-01-13', 'waduk5.jpg', 5, 1),
(5, 'Pemuda Kebanggaan Indonesia', 'Rektor Udinus Edi Noersasongko mengaku bangga kepada mahasiswanya karena mampu membawa Timnas Indonesia melaju hingga babak final. Pihaknya akan memberikan laptop atas prestasinya dan menunjang perkuliahannya. “Kami bangga sekali untuk prestasi dari mahasiswa asal Prodi S-1 Manajemen Udinus. Kami selalu mendukung karir Pratama Arhan di kancah persepakbolaan Tanah Air,” jelas Edi di Semarang, Selasa (4/1/2022). Tak hanya itu, sebagai bentuk apresiasi, Udinus juga memberikan beasiswa full kuliah gratis hingga jenjang S-2 kepada Arhan.', '2022-01-04', 'pratama.jpg', 5, 1),
(6, 'Manusia NFT', 'Ghozali Everyday menjadi pembicaraan warganet karena berhasil meraup dana miliaran rupiah dari menjual foto selfie dari 2017 hingga 2021 dalam bentuk Non-Fungiable Tokken (NFT) dalam platform OpenSea.\r\n\r\nMeski obyek wisata baru, Seloparang telah menyediakan 6 wahana unggulan untuk memanjakan pengunjungnya. Ada enam wahana unggulan yang kita miliki, diantaranya ada Waduk Seloparang, Flying Fox, Bukit Seloparang, Seloparang Resto, Pulau Pelangi, dan Sepeda Angkasa.', '2022-02-04', 'ghozali.jpg', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `nama`, `kategori`, `foto`) VALUES
(1, 'Waduk 1', 'waduk', 'waduk4.jpg'),
(2, 'Waduk 2', 'waduk', 'waduk5.jpg'),
(3, 'Waduk 3', 'waduk', 'waduk6.jpg'),
(4, 'Budaya dan Kerajinan 1', 'buker', 'budaya.jpg'),
(5, 'Budaya dan Kerajinan 2', 'buker', 'kerajinan.jpg'),
(6, 'Budaya dan Kerajinan 3', 'buker', 'kerajinan2.jpg'),
(7, 'Bukit 1', 'bkt', 'bukit.JPG'),
(8, 'Bukit 2', 'bkt', 'bukit2.jpg'),
(9, 'Bukit 3', 'bkt', 'bukit5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Waduk'),
(2, 'Flying Fox');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `komentar` text NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `nama`, `email`, `komentar`, `id_berita`) VALUES
(1, 'Meny', 'meny.kun9@gmail.com', 'Wahh keren', 4),
(9, 'Budi Setyawan', 'budi565@gmail.com', 'Seru bangettts', 6),
(10, 'Elon', 'Elon_Musk@gmail.com', 'Nice Bangets', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(128) NOT NULL,
  `nama_paket` varchar(128) NOT NULL,
  `bukti_transfer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id_pemesanan`, `nama_pemesan`, `nama_paket`, `bukti_transfer`) VALUES
(1, 'I GEDE', 'A(2), B(3), C(1)', 'transfer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Meny', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Budi', 'budi123', '9c5fa085ce256c7c598f6710584ab25d'),
(5, 'Kevin', 'Vinzky', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vkegiatan`
--

CREATE TABLE `tbl_vkegiatan` (
  `id_vkegiatan` int(11) NOT NULL,
  `link_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vkegiatan`
--

INSERT INTO `tbl_vkegiatan` (`id_vkegiatan`, `link_video`) VALUES
(2, 'https://www.youtube.com/embed/W9zD0DWDoY4'),
(3, 'https://www.youtube.com/embed/y2dbCIisI8I'),
(7, 'https://www.youtube.com/embed/RjC4T8m8g5Q'),
(8, 'https://www.youtube.com/embed/OsWuAcamIlU'),
(9, 'https://www.youtube.com/embed/G5JMaPuEsM4'),
(10, 'https://www.youtube.com/embed/MP-q8VAAbWA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_vkegiatan`
--
ALTER TABLE `tbl_vkegiatan`
  ADD PRIMARY KEY (`id_vkegiatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_vkegiatan`
--
ALTER TABLE `tbl_vkegiatan`
  MODIFY `id_vkegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
