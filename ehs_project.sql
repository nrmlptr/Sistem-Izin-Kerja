-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2023 pada 08.38
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehs_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `iks`
--

CREATE TABLE `iks` (
  `id_subcont` int(11) NOT NULL,
  `no_regis` varchar(255) NOT NULL,
  `tanggal_pengajuan` date NOT NULL DEFAULT current_timestamp(),
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `wkt_mulai` date NOT NULL,
  `wkt_selesai` date NOT NULL,
  `lokasi_pekerjaan` varchar(100) NOT NULL,
  `direktur_koordinat` varchar(255) NOT NULL,
  `pic_subcont` varchar(255) NOT NULL,
  `nohp_subcont` varchar(25) NOT NULL,
  `jml_picsubcont` varchar(255) NOT NULL,
  `namamp_subcont` varchar(255) NOT NULL,
  `pic_cbi` varchar(255) NOT NULL,
  `sie_pic_cbi` varchar(255) NOT NULL,
  `nohp_cbi` varchar(25) NOT NULL,
  `peralatan` varchar(255) NOT NULL,
  `apd_dipakai` varchar(255) NOT NULL,
  `apd_tambahan` varchar(255) NOT NULL,
  `jenis_pekerjaan` varchar(255) NOT NULL,
  `kategori_pekerjaan` varchar(255) NOT NULL,
  `syarat_wajib` varchar(255) DEFAULT NULL,
  `aktivitas_pekerjaan` varchar(255) NOT NULL,
  `aspek` varchar(255) NOT NULL,
  `dampak` varchar(255) NOT NULL,
  `standar_pengamanan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `validasi` varchar(255) NOT NULL,
  `status` enum('draft','checked','approved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iks`
--

INSERT INTO `iks` (`id_subcont`, `no_regis`, `tanggal_pengajuan`, `nama_perusahaan`, `alamat_perusahaan`, `wkt_mulai`, `wkt_selesai`, `lokasi_pekerjaan`, `direktur_koordinat`, `pic_subcont`, `nohp_subcont`, `jml_picsubcont`, `namamp_subcont`, `pic_cbi`, `sie_pic_cbi`, `nohp_cbi`, `peralatan`, `apd_dipakai`, `apd_tambahan`, `jenis_pekerjaan`, `kategori_pekerjaan`, `syarat_wajib`, `aktivitas_pekerjaan`, `aspek`, `dampak`, `standar_pengamanan`, `gambar`, `validasi`, `status`) VALUES
(1, '0102230001', '2023-02-01', 'PT SEJAHTERA MAKMUR', 'Cengkareng, Jakarta Barat', '2023-02-01', '2023-02-03', 'Area Office, Area Taman, Gedung A - Assembling', 'Pak Nanang', 'Ibu Widya ', '081219321415', '2', 'Wawan,Rayhan', 'Pa Mahfud', 'PPIC', '089754321267', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Saftey Shoes', 'Helmet, Safety Glass, Face Shield, Full Body Harness, Sarung Tangan', 'Perbaiki Listrik', 'umum, libatkan ruang terbatas', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja, Kategori Umum : Tidak Ada Syarat Wajib', '1. Persiapan Diri dan Alat, 2. Survey Lokasi dengan teliti, 3. Finishing and Cleaning Area, ', 'TERJEPIT, TERJEPIT, TERGELINCIR, TERJEPIT', 'PATAH TULANG, LUKA PADA TUBUH, KEMATIAN / FATALITY', 'APD Lengkap, APD Lengkap, APD Lengkap, ', 'logo-medis1.jpg', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja', 'approved'),
(2, '0102230002', '2023-02-01', 'cekcek', 'tes', '2023-02-02', '2023-02-03', 'Area Office, Area Taman', 'cek', 'cek', '231', '2', 'Winda, Raihan', 'cek', 'cek', '2313', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Saftey Shoes', 'Safety Glass, Safety Googles, Face Shield', 'cek', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'cek, cek, , ', 'TERKENA PERCIKAN CAIRAN KIMIA, JATUH DARI KETINGGIAN', 'KRAM PADA TANGAN / KAKI, PENCEMARAN LINGKUNGAN', 'cek, cek, , ', '', '', 'draft'),
(3, '0102230003', '2023-02-01', 'PT TES IKS FEBRUARI 1', 'Kebayoran Lama, Jakarta Selatan', '2023-02-01', '2023-02-03', 'Area Taman, Gedung A - Assembling, Gedung C - Formation', 'Pak Sugandi', 'Ibu Widya ', '12312412', '6', 'Rian, Gunawan, Dudi, Wirawan, Putra, Zaenal', 'Pa Mahfud', 'PPIC', '14214123123', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Saftey Shoes', 'Helmet, Safety Glass, Safety Googles', 'Kontraktor', 'libatkan ruang terbatas, libatkan listrik tegangan tinggi', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja, Min 2 Pekerja, PIC memiliki sertifikat Teknisi K3 Listrik, Area memiliki penerangan yang cukup, Area bebas genangan air, Lengkap dengan LOTO sesuai Standar', 'tesjsa1namamp, tesjsanammp2, tesjsanamamp3, tesjsanamamp4', 'TERSAYAT, JATUH DARI KETINGGIAN, TERKENA PERCIKAN LAS, LIMBAH B3 DAN NON B3', 'KERUSAKAN FASILITAS, PENCEMARAN LINGKUNGAN, LUKA PADA JARI / TANGAN, GANGGUAN PERNAFASAN', 'cek, cek2, cek3, cek4', 'dobi_harry_potter5.jpg', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja, Min 2 Pekerja, PIC memiliki sertifikat Teknisi K3 Listrik, Area memiliki penerangan yang cukup, Area bebas genangan air, Lengkap dengan LOTO sesuai Standar', 'approved'),
(4, '0102230004', '2023-02-01', 'PT AMERTA JAYA ABADI', 'Cilandak, Jakarta Utara', '2023-02-01', '2023-02-03', 'Gedung B - Lead Powder Pasting, Gedung C - Formation, Gedung D - Assembling', 'Pak Renaldi', 'Ibu Riani', '09182013920', '10', 'Nuramalia Putri, Nur Banni Syarifah, Adnan Faiz Al Haqqi, Dara Rizqi Khoerunnisa, Dea Nurdiah, Widya Eka Pujiyanti, Anggi Nuraini, Nadiyah Azzifah, Veny Heryanti, Zahra Faiza Arief', 'Pa Mahfud', 'PPIC', '08239234893248230', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Saftey Shoes', 'Helmet, Full Body Harness, Sarung Tangan', 'Perbaiki Listrik', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm, Min 2 Pekerja, PIC memiliki sertifikat Teknisi K3 Listrik, Area memiliki penerangan yang cukup', '1. Survey Lokasi, 2. Persiapan Peralatan dan Pekerja, 3. Action saat pengerjaan, 4. Finishing dan Cleaning Area', 'JATUH DARI KETINGGIAN, TERGELINCIR, JATUH DARI KETINGGIAN, TERGELINCIR, JATUH DARI KETINGGIAN, TERGELINCIR, JATUH DARI KETINGGIAN, TERGELINCIR', 'PATAH TULANG, KEMATIAN / FATALITY, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, KRAM PADA TANGAN / KAKI', 'APD Lengkap, APD Lengkap, APD Lengkap, APD Lengkap', '', '', 'draft');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_krywn` int(2) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nm_karyawan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_krywn`, `nik`, `nm_karyawan`, `alamat`, `created_at`, `update_at`) VALUES
(1, '2001', 'Nonik S', 'Karawang', '2023-01-06 07:46:04', NULL),
(2, '2002', 'Jerry S', 'Jakarta Bara', '2023-01-08 14:22:20', NULL),
(3, '5001', 'Wawan Kurniawan', 'Teluk Jambe Timur', '2023-01-30 06:09:16', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `akses` int(3) NOT NULL COMMENT '1pic,2ehs,3sec',
  `id_pengguna` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `upass`, `akses`, `id_pengguna`, `created_at`, `update_at`) VALUES
(1, 'nonik', '123123', 1, 1, '2023-01-06 07:41:53', '2023-01-06 07:46:32'),
(2, 'Jerry', '2122', 2, 2, '2023-01-06 07:41:53', '2023-01-09 06:07:47'),
(3, 'wawan', '9999', 3, 3, '2023-01-30 06:09:36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `iks`
--
ALTER TABLE `iks`
  ADD PRIMARY KEY (`id_subcont`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_krywn`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `iks`
--
ALTER TABLE `iks`
  MODIFY `id_subcont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_krywn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `constraint_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `karyawan` (`id_krywn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
