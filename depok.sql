-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2021 pada 16.31
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `depok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart_tempat`
--

CREATE TABLE `cart_tempat` (
  `id_carttempat` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kuliner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `nama_kuliner` varchar(250) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jumlah_kursi` int(50) NOT NULL,
  `harga_booking` int(50) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `nama_kuliner`, `foto`, `jam`, `lokasi`, `jumlah_kursi`, `harga_booking`, `desc`) VALUES
(2, 'rumah makan padang', '13899322985ff587ad0bf9e.jpeg', '08.00 - 17.00 ', 'depok', 20, 20000, 'gadsgsdfasdf'),
(4, 'warung pasta', '7059603345ff5875e06ca9.jpg', '08.00 - 22.00 ', 'margonda', 25, 50000, 'tempat makanan pasta yang banyak di gemari masyarakat depok'),
(5, 'fasdfas', '513975925606b04bf549cb.jpg', 'fasdfafasdf', 'fsadfa', 20, 50000, 'asdfasdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_pesanan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `buktipembayaran` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_pesanan`, `id_user`, `tanggal`, `total_harga`, `buktipembayaran`, `status`) VALUES
(1, 'new ticket', 3, '2021-04-05', '40000', '1617377082606b1e3ce0e68.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_detail`
--

CREATE TABLE `pesanan_detail` (
  `id_pesdet` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `jumlah_tiket` int(50) NOT NULL,
  `id_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan_detail`
--

INSERT INTO `pesanan_detail` (`id_pesdet`, `id_tiket`, `jumlah_tiket`, `id_pesanan`) VALUES
(1, 6, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_tempat`
--

CREATE TABLE `pesanan_tempat` (
  `id_pesanan` int(11) NOT NULL,
  `nama_pesanan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `buktipembayaran` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pestemp_detail`
--

CREATE TABLE `pestemp_detail` (
  `id_pesdet` int(11) NOT NULL,
  `id_kuliner` int(11) NOT NULL,
  `jumlah_booking` int(50) NOT NULL,
  `id_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kuliner` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `id_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `harga`, `jumlah`, `id_wisata`) VALUES
(6, 20000, 20, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `ulasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_pesanan`, `id_wisata`, `id_user`, `tanggal`, `ulasan`) VALUES
(1, 1, 13, 3, '05-04-2021', 'fadfasdfasdfd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `foto`, `level`) VALUES
(1, 'admin', 'wisata', 'admin wisata', '', 1),
(2, 'admin', 'kuliner', 'admin kuliner', '', 2),
(3, 'hazri', 'hazri', 'hazri', '', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `foto`, `jam`, `lokasi`, `desc`) VALUES
(13, 'arung jeram', '1342069419606b07d927988.jpg', '08.00 - 17.00', 'depok city', 'kalempong ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_tiket` (`id_tiket`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `cart_tempat`
--
ALTER TABLE `cart_tempat`
  ADD PRIMARY KEY (`id_carttempat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kuliner` (`id_kuliner`);

--
-- Indeks untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD PRIMARY KEY (`id_pesdet`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_tiket` (`id_tiket`);

--
-- Indeks untuk tabel `pesanan_tempat`
--
ALTER TABLE `pesanan_tempat`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pestemp_detail`
--
ALTER TABLE `pestemp_detail`
  ADD PRIMARY KEY (`id_pesdet`),
  ADD KEY `id_kuliner` (`id_kuliner`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kuliner` (`id_kuliner`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_pesdet` (`id_wisata`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `cart_tempat`
--
ALTER TABLE `cart_tempat`
  MODIFY `id_carttempat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  MODIFY `id_pesdet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan_tempat`
--
ALTER TABLE `pesanan_tempat`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pestemp_detail`
--
ALTER TABLE `pestemp_detail`
  MODIFY `id_pesdet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`);

--
-- Ketidakleluasaan untuk tabel `cart_tempat`
--
ALTER TABLE `cart_tempat`
  ADD CONSTRAINT `cart_tempat_ibfk_1` FOREIGN KEY (`id_kuliner`) REFERENCES `kuliner` (`id_kuliner`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_tempat_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD CONSTRAINT `pesanan_detail_ibfk_2` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`),
  ADD CONSTRAINT `pesanan_detail_ibfk_3` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan_tempat`
--
ALTER TABLE `pesanan_tempat`
  ADD CONSTRAINT `pesanan_tempat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pestemp_detail`
--
ALTER TABLE `pestemp_detail`
  ADD CONSTRAINT `pestemp_detail_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan_tempat` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pestemp_detail_ibfk_2` FOREIGN KEY (`id_kuliner`) REFERENCES `kuliner` (`id_kuliner`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ulasan_ibfk_2` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
