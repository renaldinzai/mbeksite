-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Apr 2018 pada 09.55
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbeksite`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `allproduk`
--

CREATE TABLE `allproduk` (
  `id_allproduk` int(11) NOT NULL,
  `id_prd` int(2) NOT NULL,
  `id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_prd` varchar(30) NOT NULL,
  `kategori_prd` varchar(30) NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `gambar_prd` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `allproduk`
--

INSERT INTO `allproduk` (`id_allproduk`, `id_prd`, `id`, `username`, `nama_prd`, `kategori_prd`, `harga`, `stok`, `deskripsi`, `gambar_prd`, `status`) VALUES
(34, 29, 43, 'budi', 'Kambing Boer', 'Kambing', 2500000, 6, 'Kambing terbaik di zamannya', 'kambing-boer17.jpg', ''),
(35, 30, 43, 'budi', 'kambing etawa', 'Kambing', 2000000, 1, 'kambingnya bagus', 'kambing_etawa16.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `belanja`
--

CREATE TABLE `belanja` (
  `id_belanja` int(2) NOT NULL,
  `userid` int(2) NOT NULL,
  `id_prd` int(2) NOT NULL,
  `id` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_prd` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `subtotal` int(50) NOT NULL,
  `gambar_prd` varchar(60) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(2) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `konten` varchar(1000) NOT NULL,
  `gambar_info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_info`, `judul`, `konten`, `gambar_info`) VALUES
(7, 'Jenis Kambing Unggulan Yang Baik untuk Diternak', 'Usaha ternak kambing adalah salah satu usaha yang sangat menjanjikan ini tidak terlepas dari banyaknya permintaan kambing di indonesia terutama pada hari raya idul adha.Hal ini menyebabkan banyaknya peternak kambing di indonesia mulai dari yang sekala kecil bahkan ada yang ternak secara modern.Ini menjadi inspirasi saya untuk menulis artikel tentang jenis kambing unggulan yang banyak di ternak untuk membantu teman-teman menentukan jenis kambing apa yang akan di pelihara.\r\n\r\nPemilihan jenis kambing yang akan kita ternak menjadi salah satu kunci kesuksesan dalam usaha ternak kambing,berikut jenis-jenis kambing unggulan.\r\n\r\n1. Kambing Kacang\r\n\r\nKambing jenis ini adalah salah satu kambing unggul yang pertama kali di kembangkan di indonesia,memiliki daya reproduksi yang sangat bagus,dan juga memiliki daya adaptasi yang tinggi,kambing ini merupakan jenis kambing pedaging.\r\n\r\nCiri-ciri:\r\nMemiliki tubuh yang relatif kecil kepala ringan dan kecil,telinganya tegak bulunya pendek dan halus,warna ', 'kambing-boer15.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `investasikambing`
--

CREATE TABLE `investasikambing` (
  `id_invKambing` int(2) NOT NULL,
  `id` int(2) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `banyak` int(30) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `investasikandang`
--

CREATE TABLE `investasikandang` (
  `id_invKandang` int(2) NOT NULL,
  `id` int(11) NOT NULL,
  `alamaternak` varchar(100) NOT NULL,
  `jumlahternak` int(30) NOT NULL,
  `durasi` int(30) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `investasikandang`
--

INSERT INTO `investasikandang` (`id_invKandang`, `id`, `alamaternak`, `jumlahternak`, `durasi`, `status`) VALUES
(4, 44, 'Jalan Batunegoro No. 53', 5, 3, 'Diproses'),
(5, 43, 'asfasasa', 2, 3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_prd` int(2) NOT NULL,
  `id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_prd` varchar(30) NOT NULL,
  `kategori_prd` varchar(30) NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `gambar_prd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_prd`, `id`, `username`, `nama_prd`, `kategori_prd`, `harga`, `stok`, `deskripsi`, `gambar_prd`) VALUES
(29, 43, 'budi', 'Kambing Boer', 'Kambing', 2500000, 6, 'Kambing terbaik di zamannya', 'kambing-boer17.jpg'),
(30, 43, 'budi', 'kambing etawa', 'Kambing', 2000000, 1, 'kambingnya bagus', 'kambing_etawa16.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `qurban`
--

CREATE TABLE `qurban` (
  `id_qurban` int(2) NOT NULL,
  `id` int(2) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nomor_hp` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tanggalahir` date NOT NULL,
  `jeniskel` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `norek` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `nomor_hp`, `password`, `tanggalahir`, `jeniskel`, `alamat`, `norek`) VALUES
(43, 'Budianto', 'Budi', 'budi@gmail.com', '081234567890', '12345', '2017-11-11', 'Laki-laki', 'Jln. Galunggung No. 23', '14-223-540'),
(44, '', 'cindy', 'cindy@gmail.com', '', '123', '0000-00-00', '', '', ''),
(45, '', 'andi', 'andi@gmail.com', '', '1e48c4420b7073bc11916c6c1de226bb', '0000-00-00', '', '', ''),
(46, '', 'roi', 'roi@gmail.com', '', 'c20ad4d76fe97759aa27a0c99bff6710', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `allproduk`
--
ALTER TABLE `allproduk`
  ADD PRIMARY KEY (`id_allproduk`),
  ADD KEY `id_prd` (`id_prd`),
  ADD KEY `id_prd_2` (`id_prd`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `belanja`
--
ALTER TABLE `belanja`
  ADD PRIMARY KEY (`id_belanja`),
  ADD KEY `id_prd` (`id_prd`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `investasikambing`
--
ALTER TABLE `investasikambing`
  ADD PRIMARY KEY (`id_invKambing`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `investasikandang`
--
ALTER TABLE `investasikandang`
  ADD PRIMARY KEY (`id_invKandang`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_prd`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `qurban`
--
ALTER TABLE `qurban`
  ADD PRIMARY KEY (`id_qurban`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `allproduk`
--
ALTER TABLE `allproduk`
  MODIFY `id_allproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `belanja`
--
ALTER TABLE `belanja`
  MODIFY `id_belanja` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `investasikambing`
--
ALTER TABLE `investasikambing`
  MODIFY `id_invKambing` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `investasikandang`
--
ALTER TABLE `investasikandang`
  MODIFY `id_invKandang` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_prd` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `qurban`
--
ALTER TABLE `qurban`
  MODIFY `id_qurban` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `allproduk`
--
ALTER TABLE `allproduk`
  ADD CONSTRAINT `allproduk_ibfk_1` FOREIGN KEY (`id_prd`) REFERENCES `produk` (`id_prd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `belanja`
--
ALTER TABLE `belanja`
  ADD CONSTRAINT `belanja_ibfk_1` FOREIGN KEY (`id_prd`) REFERENCES `allproduk` (`id_prd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `belanja_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `investasikambing`
--
ALTER TABLE `investasikambing`
  ADD CONSTRAINT `investasikambing_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `investasikandang`
--
ALTER TABLE `investasikandang`
  ADD CONSTRAINT `investasikandang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `qurban`
--
ALTER TABLE `qurban`
  ADD CONSTRAINT `qurban_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
