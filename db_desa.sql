-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2026 pada 15.52
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `kategori`, `tanggal`, `gambar`) VALUES
(11, 'Gagal Panen Terjadi pada 2 Tahun Terakhir', 'Sudah lebih 2 tahun terjadi gagal panen pada sawah yang di miliki warga yang ada di desa rarongkeu', 'Kegiatan Desa', '2026-08-12', 'Ilustrasi-Pekerja-IT-oleh-Bing-AI.jpg'),
(17, 'Kemeriahan Lomba 17 Agustus di Desa Rarongkeu', 'Tahun ini kita merayakan hari kemerdekaan bersama masyarakat di desa rarongkeu dengan mengadakan lomba untuk mempererat ikata silaturahmi masyarakat di desa', 'Kegiatan Desa', '2026-08-23', 'Untitled2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `kategori`, `deskripsi`, `gambar`) VALUES
(6, 'perunggu 33x', 'Pemuda & Olahraga', '', 'slide3.jpg'),
(7, 'KEMARAU YANG TERJADI DI 2 TAHUN TERAKHIR', 'Gotong Royong', '', 'WhatsApp_Image_2026-07-24_at_18_54_48.jpeg'),
(8, 'Khamenei: Kerja Sama dengan AS Mustahil Selama Masih Dukung Israel', 'PERTANIAN', '', 'Screenshot_2024-12-12_121455.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perangkat_desa`
--

CREATE TABLE `perangkat_desa` (
  `id_perangkat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tugas` text DEFAULT NULL,
  `level` enum('kepala','sekben','dusun') NOT NULL COMMENT 'kepala=Kepala Desa, sekben=Sekretaris/Bendahara, dusun=Dusun',
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perangkat_desa`
--

INSERT INTO `perangkat_desa` (`id_perangkat`, `nama`, `jabatan`, `tugas`, `level`, `foto`) VALUES
(5, 'ANDI BASO', 'Kepala Desa', 'Menyelenggarakan pemerintahan desa, melaksanakan pembangunan, pembinaan kemasyarakatan, dan pemberdayaan masyarakat desa', 'kepala', 'pak_desa.jpg'),
(12, 'AMIRUDDIN', 'Kepala Dusun III', 'Mengoordinasikan kegiatan kemasyarakatan, menjaga ketertiban, serta menjadi penghubung antara warga Dusun 3', 'kepala', 'profil.jpeg'),
(13, 'AHMAD TENRIANGKA', 'Sekretaris Desa', 'Mengoordinasikan urusan administrasi kesekretariatan, perencanaan keuangan, pengelolaan aset, serta pelayanan administrasi umum desa.', 'kepala', 'profil1.jpeg'),
(14, 'NUR CAHAYA', 'Kepala Urusan Keuangan', 'Mengelola administrasi keuangan desa, pembukuan APBDes, urusan surat-menyurat, arsip, serta perlengkapan inventaris kantor desa.', 'kepala', 'profil2.jpeg'),
(15, 'SYOLLI', 'Kepala Dusun II', 'Mengawasi kegiatan sosial kemasyarakatan, kebersihan lingkungan, serta penyampaian informasi program pemerintah di Dusun 2.', 'kepala', 'profil3.jpeg'),
(16, 'MAKMUR', 'Kepala Dusun I', 'Menyelenggarakan ketenteraman dan ketertiban umum, penataan wilayah, serta menjembatani pelayanan warga di Dusun 1.', 'kepala', 'profil4.jpeg'),
(17, 'ANDI JUSNI', 'Kepala Urusan Umum', 'Mengelola urusan surat-menyurat, kearsipan, perlengkapan, dan inventaris kantor desa.', 'kepala', 'profil5.jpeg'),
(18, 'SYAMSINAR', 'Kepala Seksi Pemerintahan', 'Melaksanakan manajemen kependudukan, penataan wilayah, dan urusan ketenteraman serta ketertiban umum.', 'kepala', 'profil6.jpeg'),
(19, 'IRWAN', 'Kepala Seksi Kesejahteraan', 'Melaksanakan pembangunan sarana prasarana desa serta pembinaan di bidang sosial, pendidikan, dan kesehatan.', 'kepala', 'profil7.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `potensi`
--

CREATE TABLE `potensi` (
  `id` int(11) NOT NULL,
  `nama_potensi` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `potensi`
--

INSERT INTO `potensi` (`id`, `nama_potensi`, `kategori`, `deskripsi`, `foto`) VALUES
(4, 'Perkebunan Sayuran', 'Pertanian', 'Luas Lahan', 'Screenshot_2026-01-20_1832363.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `perangkat_desa`
--
ALTER TABLE `perangkat_desa`
  ADD PRIMARY KEY (`id_perangkat`);

--
-- Indeks untuk tabel `potensi`
--
ALTER TABLE `potensi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `perangkat_desa`
--
ALTER TABLE `perangkat_desa`
  MODIFY `id_perangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `potensi`
--
ALTER TABLE `potensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
