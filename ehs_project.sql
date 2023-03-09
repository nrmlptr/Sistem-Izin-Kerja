-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2023 pada 10.30
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
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `subcont_id` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `validasi` varchar(255) NOT NULL,
  `require_ehs` enum('briefing','nobriefing') NOT NULL,
  `status` enum('draft','checked','approved','rejected') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_krywn` int(2) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nm_karyawan` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `seksi` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_krywn`, `nik`, `nm_karyawan`, `divisi`, `department`, `seksi`, `bagian`, `created_at`, `update_at`) VALUES
(1, '2819', 'Nonik Sahaya Citra Purnamasari', 'PLANT SERVICE', 'EHS', 'Environment', 'Kasubsie', '2023-01-06 07:46:04', '2023-03-08 08:52:49'),
(2, '1617', 'Ahmad Zaelani', 'Plant Service', 'EHS', 'Health & Safety', 'Kasie', '2023-01-08 14:22:20', '2023-03-08 07:48:51'),
(3, '496', 'Rusli', 'Administrasi', 'GA, IR & CSR', 'Security', 'Karu Security', '2023-01-30 06:09:16', '2023-03-08 07:54:27'),
(4, '1625', 'Sugiyanto', 'Karawang', '', '', '', '2023-03-07 07:18:52', '2023-03-08 07:53:08'),
(5, '2012', 'Dedi R', 'PLANT SERVICE', 'EHS', 'Health & Safety', 'Kasubsie', '2023-03-07 07:18:52', '2023-03-08 08:51:15'),
(6, '3913', 'Ihan Pratama', '', '', '', '', '2023-03-08 07:39:23', '2023-03-08 07:55:40'),
(7, '412', 'Mulazim', 'Plant', 'Production 1', 'Pasting & Formation', 'Kasie', '2023-03-08 07:39:23', NULL),
(8, '485', 'Nyono', 'Administration', 'Procurement', 'Component', 'Kasie', '2023-03-08 07:39:23', NULL),
(9, '517', 'Mujiono', 'Administration', 'GA, IR & CSR', 'GA & Security', 'Kasie', '2023-03-08 07:39:23', NULL),
(10, '563', 'Suubi', 'Plant', 'PPIC', 'Inv Control Finished Goods & Delivery', 'Kasie', '2023-03-08 07:39:23', NULL),
(11, '1095', 'Ciptadi Nugroho', 'Plant', 'PPIC', 'Production Planning Control & Inv', 'Kasie', '2023-03-08 07:39:23', NULL),
(12, '1257', 'Rendi Widi Nugroho', 'Fin, Acc, Mark & MIS', 'Marketing', 'Marketing', 'Kasie', '2023-03-08 07:39:23', NULL),
(13, '1361', 'Agnes Retroning Astuti', 'Fin, Acc, Mark & MIS', 'Fin, Acc & Risk MGT Cont', 'Finance, Treasury & Costing', 'Kasie', '2023-03-08 07:39:23', NULL),
(14, '1391', 'Etika Ayu Mindia Putri', 'Administration', 'HRD', 'Recruitment & Compensation Benefit', 'Kasie', '2023-03-08 07:48:02', NULL),
(15, '1618', 'Arif Aprianto', 'Engineering', 'Quality Assurance', 'Quality Assurance', 'Kasie', '2023-03-08 07:48:02', NULL),
(16, '1697', 'Evei Adi Kurniawan', 'Plant Service', 'Maintenance', 'Tooling-1 Plate Process', 'Kasie', '2023-03-08 07:48:02', NULL),
(17, '1815', 'Novian Andrika', 'Plant', 'Supervisor shift 2 & shift 3', 'Supervisor Shift 2', 'Kasie', '2023-03-08 07:48:02', NULL),
(18, '1971', 'Ahmad Syafiq', 'Engineering', 'Product Engineering', 'Product Deployment', 'Kasie', '2023-03-08 07:48:02', NULL),
(19, '2331', 'Pradipta Fajar Yuniarto', 'Engineering', 'Process Engineering', 'Process Eng MCB IB & Wet Charging', 'Kasie', '2023-03-08 07:48:02', NULL),
(20, '2346', 'Latif Usman', 'Plant Service', 'Maintenance', 'Tooling-2 Assembling', 'Kasie', '2023-03-08 07:48:02', NULL),
(21, '2526', 'Kautzar Rizka Igaputra', 'Plant', 'PPIC', 'Warehouse Material & Comp', 'Kasie', '2023-03-08 07:48:02', NULL),
(22, '2593', 'Cipto Tigor Pribadi Nainggolan', 'Engineering', 'Process Engineering', 'Process End Lead Powder Pasting & Formation', 'Kasie', '2023-03-08 08:21:24', NULL),
(23, '2644', 'Ersha Nuranjarsari', 'Administration', 'HRD', 'People Development', 'Kasie', '2023-03-08 08:21:24', NULL),
(24, '', 'Indri Afriyanti', 'X', 'Industrial System', 'Industrial System Development', 'Kasie', '2023-03-08 08:21:24', NULL),
(25, '2862', 'Sucipto Hening', 'Plant Service', 'Maintenance', 'Maintenancae-2 Assembling', 'Kasie', '2023-03-08 08:21:24', NULL),
(26, '2863', 'Fahrizal Fitra Utama', 'x', 'Industrial System', 'Industrial System Development', 'Kasie', '2023-03-08 08:21:24', NULL),
(27, '2939', 'Diyan Luqman Nur Fatoni B ', 'Engineering', 'Quality Assurance', 'Incoming Part, PDC & Claim Handling', 'Kasie', '2023-03-08 08:21:24', NULL),
(28, '3012', 'Akhmad Mardhani', 'Plant', 'Production 2', 'Assembling A, MCB & Industrial Batt', 'Kasie', '2023-03-08 08:21:24', NULL),
(29, '3014', 'Polin Hasintongan S', 'Plant', 'Production 1', 'Grid Casting, Punching & MLR', 'Kasie', '2023-03-08 08:21:24', NULL),
(30, '3305', 'Ari Mustakim', 'Engineering', 'Product Engineering', 'Produk Development', 'Kasie', '2023-03-08 08:28:56', NULL),
(31, '3446', 'Agatha Anggun Vidyanita', 'Administration', 'Procurement', 'Non Component', 'Kasie', '2023-03-08 08:28:56', NULL),
(32, '3476', 'Saut Jumadi Situmorang', 'Plant Service', 'Maintenance', 'Utility, Workshop & Sparepart management', 'Kasie', '2023-03-08 08:28:56', NULL),
(33, '3477', 'Kresna Bayu Aji', 'Plant Service', 'Maintenance', 'Maintenance-1 Plate Process', 'Kasie', '2023-03-08 08:28:56', NULL),
(34, '3584', 'Rinta Setyo Nugroho', 'Fin,Acc,Mark & MIS', 'MIS', 'System & Development', 'Kasie', '2023-03-08 08:28:56', NULL),
(35, '3651', 'Bagus Purnomo', 'Engineering', 'Process Engineering', 'Process Engineering Assembling', 'Kasie', '2023-03-08 08:28:56', NULL),
(36, '3658', 'Rahmadian Pratama', 'Engineering', 'Qualiy Assurance', 'Production Quality Control', 'Kasie', '2023-03-08 08:28:56', NULL),
(37, '3659', 'Ryandhanu Aldy Yudistira', 'Engineering', 'Process Enginering', 'Process Engineering Punching & Casting', 'Kasie', '2023-03-08 08:28:56', NULL),
(38, '3688', 'KHANIFATTURRAHMAH', 'FIN, ACC, MARK & MIS', 'FIN, ACC  & RISK MGT CONT', 'PLANNING & COST CONTROL', 'KASIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '3764', 'KIRANA DYAH UTARI KUSUMAPUTRI', 'ADMINISTRATION', 'PROCUREMENT', 'VENDOR DEVELOPMENT', 'KASIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '461', 'YUSUF SLAMET PELITA', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING A, MCB & INDUSTRIAL BATT', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '481', 'NARSO', 'PLANT', 'PPIC', 'WAREHOUSE MATERIAL & COMP', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '510', 'PARWADI', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING G ', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '523', 'NUR ALI', 'PLANT SERVICE', 'MAINTENANCE', 'TOOLING-1 PLATE PROCESS', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '524', 'EDI SUWITO', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING G', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '546', 'MUSLIM', 'PLANT', 'PRODUCTION 1', 'GRID CASTING, PUNCHING & MLR', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '551', 'MUSBIKHIN', 'PLANT', 'PRODUCTION 1', 'GRID CASTING, PUNCHING & MLR', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '559', 'PUJIONO (B)', 'ENGINEERING', 'QUALITY ASSURANCE', 'PRODUCTION QUALITY CONTROL', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '569', 'LASONO', 'PLANT', 'PPIC ', 'INV CONTROL FINISHED GOODS & DELIVERY', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '584', 'YANTO', 'PLANT', 'PRODUCTION 1', 'PASTING ', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '639', 'MASRURI', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING G ', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, '645', 'ADE SURYANA', 'PLANT', 'PRODUCTION 1', 'PASTING ', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '676', 'AGUS SUROTO', 'PLANT', 'PRODUCTION 1', 'FORMATION', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '692', 'A.RIFAI', 'ADMINISTRATION', 'GA, IR & CSR', 'GA ', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '698', 'IIM ARWISMAN', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING A, MCB & INDUSTRIAL BATT', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, '715', 'JOKO SUKO PIRENO', 'FIN, ACC, MARK & MIS', 'MARKETING', 'MARKETING', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, '1030', 'DUDY MULYANTO', 'ENGINEERING', 'QUALITY ASSURANCE', 'PRODUCTION QUALITY CONTROL', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '1139', 'FAHMI', 'FIN, ACC, MARK & MIS', 'FIN, ACC  & RISK MGT CONT', 'GEN ACCOUNTING & TAX', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, '2185', 'YUDA AJI PRASETYO', 'PLANT', 'PPIC ', 'INV CONTROL FINISHED GOODS & DELIVERY', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, '2441', 'WAHYU ADHANTA', 'PLANT', 'PRODUCTION 1', 'PASTING ', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, '2523', 'APRILIANTO CANDRA NUGROHO', 'PLANT SERVICE', 'MAINTENANCE', 'UTILITY, WORKSHOP & SPARE PART MANAGEMENT', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, '2524', 'BAYU SURYADI', 'PLANT SERVICE', 'MAINTENANCE', 'MAINTENANCE-2 ASSEMBLING', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, '2535', 'DIKA PRATAMA', 'PLANT', 'PRODUCTION 2', 'CHARGING', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '2846', 'RIZKY TOYIBAH', 'PLANT SERVICE', 'MAINTENANCE', 'UTILITY, WORKSHOP & SPARE PART MANAGEMENT', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, '3368', 'FREDY SEPTIAN', 'PLANT SERVICE', 'MAINTENANCE', 'MAINTENANCE-1 PLATE PROCESS', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '3384', 'ANDRIANA', 'PLANT SERVICE', 'MAINTENANCE', 'TOOLING-1 PLATE PROCESS', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, '3479', 'WAHYU NUR FAUZIA', 'PLANT SERVICE', 'MAINTENANCE', 'TOOLING-2 ASSEMBLING', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, '3693', 'IKRAR SATRIA HARTAWAN', 'PLANT SERVICE', 'MAINTENANCE', 'TOOLING-1 PLATE PROCESS', 'KASUBSIE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, '3062', 'DWITA KHAENDY PUTRI ', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, '1514', 'DIDIK RUSDIKA', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, '2186', 'CHRISMAWAN BAYUAJI ', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, '2872', 'IMAN ARI WIBOWO ', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, '2517', 'MUHTAR INDRA PRABOWO', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, '4171', 'MUHAMMAD FARRAZ ABRAR', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, '1637', 'AHMAD FADILAH', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_log`
--

CREATE TABLE `tabel_log` (
  `log_id` int(11) NOT NULL,
  `subcont_id` int(11) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `log_user` varchar(255) NOT NULL,
  `log_tipe` int(11) NOT NULL,
  `log_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'NSC2819', '123123', 2, 1, '2023-01-06 07:41:53', '2023-03-08 09:09:57'),
(2, 'AZAE1617', '2122', 2, 2, '2023-01-06 07:41:53', '2023-03-08 09:08:21'),
(3, 'RSL496', '9999', 3, 3, '2023-01-30 06:09:36', '2023-03-08 09:08:49'),
(4, 'DRU731', 'cek22', 2, 5, '2023-03-07 07:19:39', '2023-03-08 09:10:03'),
(5, 'SGY1625', 'cek33', 2, 4, '2023-03-07 07:19:39', '2023-03-08 09:09:18'),
(6, 'MLZ0412', '12345', 1, 7, '2023-03-08 09:05:43', NULL),
(7, 'NYN485', '12345', 1, 8, '2023-03-08 09:05:43', NULL),
(8, 'MJO517', '12345', 1, 9, '2023-03-08 09:05:43', NULL),
(9, 'SUU563', '12345', 1, 10, '2023-03-08 09:05:43', NULL),
(10, 'CNU1095', '12345', 1, 11, '2023-03-08 09:05:43', NULL),
(11, 'RWN1257', '12345', 1, 12, '2023-03-08 09:05:43', NULL),
(12, 'ARA1361', '12345', 1, 13, '2023-03-08 09:05:43', NULL),
(13, 'EAM1391', '12345', 1, 14, '2023-03-08 09:05:43', NULL),
(14, 'AAP1618', '12345', 1, 15, '2023-03-08 09:05:43', NULL),
(15, 'EAK1697', '12345', 1, 16, '2023-03-08 09:05:43', NULL),
(16, 'NAN1815', '12345', 1, 17, '2023-03-08 09:05:43', NULL),
(17, 'ASY1971', '12345', 1, 18, '2023-03-08 09:05:43', NULL),
(18, 'PFY2331', '12345', 1, 19, '2023-03-08 09:05:43', NULL),
(19, 'LUS2346', '12345', 1, 20, '2023-03-08 09:05:43', NULL),
(20, 'KRI2526', '12345', 1, 21, '2023-03-08 09:05:43', NULL),
(21, 'CTP2593', '12345', 1, 22, '2023-03-08 09:05:43', NULL),
(22, 'ENU2644', '12345', 1, 23, '2023-03-08 09:05:43', NULL),
(23, 'IAF2649', '12345', 1, 24, '2023-03-08 09:05:43', NULL),
(24, 'SHE2862', '12345', 1, 25, '2023-03-08 09:05:43', NULL),
(25, 'FFU2863', '12345', 1, 26, '2023-03-08 09:05:43', NULL),
(26, 'DLN2939', '12345', 1, 27, '2023-03-08 09:05:43', NULL),
(27, 'AMA3012', '12345', 1, 28, '2023-03-08 09:05:43', NULL),
(28, 'PHS3014', '12345', 1, 29, '2023-03-08 09:05:43', NULL),
(29, 'AMU3305', '12345', 1, 30, '2023-03-08 09:05:43', NULL),
(30, 'AAV3346', '12345', 1, 31, '2023-03-08 09:05:43', NULL),
(31, 'SJS3476', '12345', 1, 32, '2023-03-08 09:05:43', NULL),
(32, 'KBA3477', '12345', 1, 33, '2023-03-08 09:05:43', NULL),
(33, 'RSN3584', '12345', 1, 34, '2023-03-08 09:05:43', NULL),
(34, 'BPU3651', '12345', 1, 35, '2023-03-08 09:05:43', NULL),
(35, 'RPR3658', '12345', 1, 36, '2023-03-08 09:05:43', NULL),
(36, 'RAY3659', '12345', 1, 37, '2023-03-08 09:05:43', NULL),
(37, 'KHA3688', '12345', 1, 38, '2023-03-08 09:05:43', NULL),
(38, 'KDU3764', '12345', 1, 39, '2023-03-08 09:05:43', NULL),
(39, 'YSP0461', '12345', 1, 40, '2023-03-08 09:05:43', NULL),
(40, 'NRS0481', '12345', 1, 41, '2023-03-08 09:05:43', NULL),
(41, 'PWD0510', '12345', 1, 42, '2023-03-08 09:05:43', NULL),
(42, 'NAL0523', '12345', 1, 43, '2023-03-08 09:05:43', NULL),
(43, 'ESU0524', '12345', 1, 44, '2023-03-08 09:05:43', NULL),
(44, 'MUS0546', '12345', 1, 45, '2023-03-08 09:05:43', NULL),
(45, 'MUS0551', '12345', 1, 46, '2023-03-08 09:05:43', NULL),
(46, 'PJO0559', '12345', 1, 47, '2023-03-08 09:05:43', NULL),
(47, 'LSN0569', '12345', 1, 48, '2023-03-08 09:05:43', NULL),
(48, 'YNT0584', '12345', 1, 49, '2023-03-08 09:05:43', NULL),
(49, 'MSR0639', '12345', 1, 50, '2023-03-08 09:05:43', NULL),
(50, 'ASU645', '12345', 1, 51, '2023-03-08 09:05:43', NULL),
(51, 'ASU676', '12345', 1, 52, '2023-03-08 09:05:43', NULL),
(52, 'ARI692', '12345', 1, 53, '2023-03-08 09:05:43', NULL),
(53, 'IIM0698', '12345', 1, 54, '2023-03-08 09:05:43', NULL),
(54, 'JSP0715', '12345', 1, 55, '2023-03-08 09:05:43', NULL),
(55, 'DMU1030', '12345', 1, 57, '2023-03-08 09:05:43', NULL),
(56, 'FAH1139', '12345', 1, 58, '2023-03-08 09:05:43', NULL),
(57, 'YAP2185', '12345', 1, 59, '2023-03-08 09:05:43', NULL),
(58, 'WAD2441', '12345', 1, 60, '2023-03-08 09:05:43', NULL),
(59, 'ACN2523', '12345', 1, 61, '2023-03-08 09:05:43', NULL),
(60, 'BSU2524', '12345', 1, 62, '2023-03-08 09:05:43', NULL),
(61, 'DPR2535', '12345', 1, 63, '2023-03-08 09:05:43', NULL),
(62, 'RTO2846', '12345', 1, 65, '2023-03-08 09:05:43', NULL),
(63, 'FSE3368', '12345', 1, 66, '2023-03-08 09:05:43', NULL),
(64, 'ADR3384', '12345', 1, 67, '2023-03-08 09:05:43', NULL),
(65, 'WNF3479', '12345', 1, 68, '2023-03-08 09:05:43', NULL),
(66, 'ISH3693', '12345', 1, 69, '2023-03-08 09:05:43', NULL),
(67, 'DKP3062', '12345', 1, 70, '2023-03-08 09:05:43', NULL),
(68, 'DRU1514', '12345', 1, 71, '2023-03-08 09:05:43', NULL),
(69, 'CBA2186', '12345', 1, 72, '2023-03-08 09:05:43', NULL),
(70, 'IAW2872', '12345', 1, 73, '2023-03-08 09:05:43', NULL),
(71, 'MIP2517', '12345', 1, 74, '2023-03-08 09:05:43', NULL),
(72, 'MFA4171', '12345', 1, 75, '2023-03-08 09:05:43', NULL),
(73, 'AFA1637', '12345', 1, 76, '2023-03-08 09:05:43', NULL),
(74, 'IPR3913', '12345', 1, 6, '2023-03-08 09:05:43', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_gambar` (`subcont_id`);

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
-- Indeks untuk tabel `tabel_log`
--
ALTER TABLE `tabel_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `constraint_subcont` (`subcont_id`);

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
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iks`
--
ALTER TABLE `iks`
  MODIFY `id_subcont` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_krywn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `constraint_gambar` FOREIGN KEY (`subcont_id`) REFERENCES `iks` (`id_subcont`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_log`
--
ALTER TABLE `tabel_log`
  ADD CONSTRAINT `constraint_subcont` FOREIGN KEY (`subcont_id`) REFERENCES `iks` (`id_subcont`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `constraint_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `karyawan` (`id_krywn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
