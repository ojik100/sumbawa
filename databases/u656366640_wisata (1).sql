-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 25 Agu 2021 pada 14.54
-- Versi server: 10.4.15-MariaDB-cll-lve
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u656366640_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin2021', 'labuhanburung2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `gambar`, `deskripsi`, `created_at`) VALUES
(24, 'Pulau saringi', 'IMG-20210823-WA0010.jpg', 'Mantap', '2021-08-23 17:56:16'),
(25, 'Takat Belanda', 'WhatsApp_Image_2021-08-16_at_20_52_32.jpeg', 'tes', '2021-08-24 00:00:50'),
(26, 'Takat Belanda', 'WhatsApp_Image_2021-08-23_at_13_16_21_(1).jpeg', 'ss', '2021-08-24 12:07:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`id`, `judul`, `gambar`, `created_at`) VALUES
(26, 'Pacuan Kuda', 'jaran.jpg', '2021-08-18 10:18:47'),
(27, 'Takat Belanda', 'WhatsApp_Image_2021-08-16_at_20_52_37.jpeg', '2021-08-18 10:19:08'),
(28, 'Pulau Saringi', 'WhatsApp_Image_2021-08-16_at_20_51_40_(1).jpeg', '2021-08-18 10:19:32'),
(29, 'Takat Belanda', 'WhatsApp_Image_2021-08-16_at_20_52_34_(1).jpeg', '2021-08-18 10:20:00'),
(30, 'Takat Belanda', 'WhatsApp_Image_2021-08-16_at_20_52_34.jpeg', '2021-08-18 10:20:23'),
(31, 'Takat Belanda', 'WhatsApp_Image_2021-08-16_at_20_52_33.jpeg', '2021-08-18 10:20:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `created_at`) VALUES
(5, 'Wisata Budaya', '2021-08-23 16:39:31'),
(7, 'Agro Wisata', '2021-08-23 16:18:50'),
(8, 'Wisata Olahraga', '2021-08-23 16:19:08'),
(9, 'Wisata Kuliner', '2021-08-23 16:19:22'),
(10, 'Wisata Bahari', '2021-08-23 16:39:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `subject`, `pesan`, `status`, `created_at`) VALUES
(1, 'okok', 'ok@gmail.com', 'okokokok', 'OKOKOKOKO', 'Proses', '2021-08-18 17:32:25'),
(3, 'irwan', 'irwan@gmail.com', 'PENTING', 'keren nih', 'Proses', '2021-08-18 17:36:54'),
(4, 'toni', 'rozi.050920@gmail.com', 'penting sekali', 'pesan saya', 'Proses', '2021-08-21 14:35:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `deskripsi`, `created_at`) VALUES
(4, 'MOH.FAHRURROZI', 'Waw keren pulau seringinya mantap dan sangat luar biasa', '2021-08-17 08:43:43'),
(5, 'Irpan', 'Keren banget pulau sengi ini', '2021-08-17 08:44:02'),
(6, 'sodikin', 'keren banget wisata yang ada di labuhan burung ', '2021-08-17 08:44:53'),
(7, 'Toni', 'sangat merekomendasikan', '2021-08-18 04:49:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vidio`
--

CREATE TABLE `vidio` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `vidio` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vidio`
--

INSERT INTO `vidio` (`id`, `judul`, `vidio`, `created_at`) VALUES
(6, 'Pulau saringi', 'VID-20210816-WA0032.mp4', '2021-08-23 17:28:30'),
(7, 'Pulau saringi', 'VID-20210816-WA0031.mp4', '2021-08-23 17:30:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `gambar1` text NOT NULL,
  `gambar2` text NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `id_kategori`, `nama_wisata`, `alamat`, `no_wa`, `gambar`, `gambar1`, `gambar2`, `deskripsi`, `created_at`) VALUES
(12, 0, 'Pulau Saringi', 'Labuhan Burung ', '+62 859-6709-6985', 'WhatsApp_Image_2021-08-16_at_20_51_40_(1)2.jpeg', 'WhatsApp_Image_2021-08-16_at_20_52_32_(1).jpeg', 'WhatsApp_Image_2021-08-16_at_20_51_41.jpeg', 'Keberadaan Pulau Saringi yang berada di depan Desa Labuhan Burung yang dapat di tempuh selama 1 jam dengan boat nelayan, Pulau Saringi adalah salah satu objective wisata alam yang sangat menakjubkan dengan kejernihan air laut yang memikiki beberapa Warna.\r\n\r\nDi Pulau Saringi ini masyarakat dapat memungut dan mencari kerang.\r\n\r\nAda juga dua Pulau Pasir yang mereka sebut Gussung dimana pada saat air laut surut, masyarakat desa biasa pergi mencari Siput, kepiting, kerang dll dan mereka sebut Kegiatan ini \" Bakalili \"\r\n\r\nPulau pasir yang terdekat hanya berjarak 7 menit perjalanan dengan boat nelayan. Dan Pulau pasir yang kedua dapat di tempuh dalam waktu 20 menit dengan boat.\r\n\r\nDi kedua pulau pasir ini anda akan dapat melihat Biota laut yang eksotik, seperti Bulu Babi, Bintang Laut, kerang, dll.', '2021-08-18 10:22:30'),
(13, 4, 'Takat Belanda', 'Labuhan Burung, Sumbawa, Nusa Tenggara Barat', '+6285967096985', 'WhatsApp_Image_2021-08-16_at_20_52_35.jpeg', 'WhatsApp_Image_2021-08-16_at_20_52_33.jpeg', 'WhatsApp_Image_2021-08-16_at_20_52_37.jpeg', 'Takat Belanda +', '2021-08-17 12:49:20'),
(14, 0, 'Pacuan Kuda', 'Desa Labuhan Burung, Kab.SUmbawa, Nusa Tenggara Barat', '+6285967096985', 'jaran.jpg', 'sejumlah-joki-cilik-memacu-kuda-mereka-saat-gelaran-_121112164443-144.jpg', 'pacuan-kuda.jpeg', 'Maen Jaran atau pacuan kuda merupakan permainan yang sangat digemari oleh penduduk Kabupaten Sumbawa, khususnya warga desa Labuhan Burung.  Selain menjadi atraksi hiburan, juga menjadi ajang meningkatkan harga jual kuda, karena kuda yang biasanya menjadi pemenang harga jualnya tinggi. Harganya bisa mencapai ratusan juta rupiah.', '2021-08-17 13:01:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
