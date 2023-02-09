-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 10.11
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

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `subcont_id`, `judul`) VALUES
(7, 2, 'Melibatkan_ketinggian8.jpg'),
(8, 2, 'melibatkan_panas2.jpg'),
(9, 3, 'listrik_trgangan.jpg'),
(10, 3, 'melibatkan_ruang_terbatas8.jpg'),
(11, 4, 'Melibatkan_ketinggian9.jpg'),
(12, 9, 'melibatkan_panas3.jpg'),
(13, 9, 'pengelasan.jpg'),
(14, 10, 'umum.jpeg'),
(15, 10, 'melibatkan_ruang_terbatas9.jpg'),
(16, 5, 'umum1.jpeg'),
(17, 5, 'melibatkan_panas4.jpg'),
(18, 5, 'pengelasan1.jpg'),
(19, 11, 'melibatkan_panas5.jpg'),
(20, 11, 'pengelasan2.jpg');

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
  `status` enum('draft','checked','approved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iks`
--

INSERT INTO `iks` (`id_subcont`, `no_regis`, `tanggal_pengajuan`, `nama_perusahaan`, `alamat_perusahaan`, `wkt_mulai`, `wkt_selesai`, `lokasi_pekerjaan`, `direktur_koordinat`, `pic_subcont`, `nohp_subcont`, `jml_picsubcont`, `namamp_subcont`, `pic_cbi`, `sie_pic_cbi`, `nohp_cbi`, `peralatan`, `apd_dipakai`, `apd_tambahan`, `jenis_pekerjaan`, `kategori_pekerjaan`, `syarat_wajib`, `aktivitas_pekerjaan`, `aspek`, `dampak`, `standar_pengamanan`, `validasi`, `require_ehs`, `status`) VALUES
(2, '0102230002', '2023-02-01', 'cekcek', 'tes', '2023-02-02', '2023-02-03', 'Area Office, Area Taman', 'cek', 'cek', '231', '2', 'Winda, Raihan', 'cek', 'cek', '2313', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Saftey Shoes', 'Safety Glass, Safety Googles, Face Shield', 'cek', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'cek, cek, , ', 'TERKENA PERCIKAN CAIRAN KIMIA, JATUH DARI KETINGGIAN', 'KRAM PADA TANGAN / KAKI, PENCEMARAN LINGKUNGAN', 'cek, cek, , ', 'Tidak Ada Syarat Wajib', '', 'checked'),
(3, '0102230003', '2023-02-01', 'PT TES IKS FEBRUARI 1', 'Kebayoran Lama, Jakarta Selatan', '2023-02-01', '2023-02-03', 'Area Taman, Gedung A - Assembling, Gedung C - Formation', 'Pak Sugandi', 'Ibu Widya ', '12312412', '6', 'Rian, Gunawan, Dudi, Wirawan, Putra, Zaenal', 'Pa Mahfud', 'PPIC', '14214123123', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Saftey Shoes', 'Helmet, Safety Glass, Safety Googles', 'Kontraktor', 'libatkan ruang terbatas, libatkan listrik tegangan tinggi', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja, Min 2 Pekerja, PIC memiliki sertifikat Teknisi K3 Listrik, Area memiliki penerangan yang cukup, Area bebas genangan air, Lengkap dengan LOTO sesuai Standar', 'tesjsa1namamp, tesjsanammp2, tesjsanamamp3, tesjsanamamp4', 'TERSAYAT, JATUH DARI KETINGGIAN, TERKENA PERCIKAN LAS, LIMBAH B3 DAN NON B3', 'KERUSAKAN FASILITAS, PENCEMARAN LINGKUNGAN, LUKA PADA JARI / TANGAN, GANGGUAN PERNAFASAN', 'cek, cek2, cek3, cek4', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja, Min 2 Pekerja, PIC memiliki sertifikat Teknisi K3 Listrik, Area memiliki penerangan yang cukup, Area bebas genangan air, Lengkap dengan LOTO sesuai Standar', 'briefing', 'approved'),
(4, '0102230004', '2023-02-01', 'PT AMERTA JAYA ABADI', 'Cilandak, Jakarta Utara', '2023-02-01', '2023-02-03', 'Gedung B - Lead Powder Pasting, Gedung C - Formation, Gedung D - Assembling', 'Pak Renaldi', 'Ibu Riani', '09182013920', '10', 'Nuramalia Putri, Nur Banni Syarifah, Adnan Faiz Al Haqqi, Dara Rizqi Khoerunnisa, Dea Nurdiah, Widya Eka Pujiyanti, Anggi Nuraini, Nadiyah Azzifah, Veny Heryanti, Zahra Faiza Arief', 'Pa Mahfud', 'PPIC', '08239234893248230', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Saftey Shoes', 'Helmet, Full Body Harness, Sarung Tangan', 'Perbaiki Listrik', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm, Min 2 Pekerja, PIC memiliki sertifikat Teknisi K3 Listrik, Area memiliki penerangan yang cukup', '1. Survey Lokasi, 2. Persiapan Peralatan dan Pekerja, 3. Action saat pengerjaan, 4. Finishing dan Cleaning Area', 'JATUH DARI KETINGGIAN, TERGELINCIR, JATUH DARI KETINGGIAN, TERGELINCIR, JATUH DARI KETINGGIAN, TERGELINCIR, JATUH DARI KETINGGIAN, TERGELINCIR', 'PATAH TULANG, KEMATIAN / FATALITY, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, KRAM PADA TANGAN / KAKI', 'APD Lengkap, APD Lengkap, APD Lengkap, APD Lengkap', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'briefing', 'approved'),
(5, '0202230001', '2023-02-02', 'PT SERAYU AGUNG', 'Kuningan, Jawa Barat', '2023-02-02', '2023-02-10', 'Gedung A - Assembling, Gedung D - Assembling, Gedung G - Assembling', 'Purnawirawan', 'Gilang Bangun Prakarsa', '098192384921', '15', 'Raihan Setiawan, Dirgantara, Widodo Saputra, Panji Permana, Ruli Walidain, Putra Agung Perkasa, Fiki Nur Sabani, Ade Rahman, Wahyu Nur Firmansyah, Rionaldi, Rico Adisti, Rey Kosasih, Rizaldi, Ilham Ramadhan, Yusup Salim', 'Nita W', 'MIS', '0891291913129', 'Bor Listrik, Tang, Obeng, Gergaji listrik, Paku beton', 'Mask/Respirator and Saftey Shoes', 'Helmet, Face Shield, Earplug, Earmuff, Full Body Harness, Sarung Tangan, APAR', 'Maintenance', 'libatkan panas', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', '1. Survey Lokasi, 2. Persiapan diri dan alat, , ', 'TERKENA PERCIKAN LAS, GETARAN MEKANIS ALAT', 'LUKA PADA TUBUH, LUKA PADA JARI / TANGAN', 'apd lengkap, apd lengkap, , ', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', 'nobriefing', 'checked'),
(6, '0202230002', '2023-02-02', 'PT HARITANU KAMIS', 'Pekanbaru, Riau.', '2023-02-02', '2023-02-10', 'Area Office, Area Taman', 'Tarja Wirawan', 'Puri fadillah ', '09812983129', '4', 'Riska Fitriyani, Muhammad Ibrahim, Lutfi Istada Anwar, Dian Fatimah Hartoyo', 'Dedi Mulyawan', 'MAINTENANCE', '09329042390', 'Obeng Bunga, Paku, Bor Listrik, Palu', 'Mask/Respirator and Saftey Shoes', 'Helmet, Face Shield, Full Body Harness, Sarung Lengan, Sarung Tangan', 'Maintenance', 'libatkan ruang terbatas', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja', '1. Persiapan area, 2. Persiapan alat (oksigen terutama), 3. Action, 4. Finishing dan Cleaning Area', 'TERJEPIT, TERPAPAR UAP, GETARAN MEKANIS ALAT, TERJEPIT', 'PATAH TULANG, KRAM PADA TANGAN / KAKI, LUKA PADA TUBUH, KEMATIAN / FATALITY', 'APD Lengkap, APD Lengkap., APD Lengkap., APD Lengkap', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja', 'nobriefing', 'draft'),
(7, '0702230001', '2023-02-07', 'PT TES BRIEFING', 'JAKARTA UTARA', '2023-02-07', '2023-02-09', 'Area Office, Area Taman', 'Darmadi', 'Kinoy', '092182391232', '6', 'Rizal, Rey , Pikri, Albi, Daffa, Juan', 'Nonik', 'EHS', '093248203', 'Bor Listrik, Tang, Obeng, Gergaji listrik, Paku beton', 'Mask/Respirator and Saftey Shoes', 'Face Shield, Earplug', 'Pre Instalasi', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', '1.Persiapan Diri , 2. Persiapan Alat, 3. Mulai pekerjaan, 4. Cleaning Area', 'JATUH DARI KETINGGIAN, JATUH DARI KETINGGIAN, JATUH DARI KETINGGIAN, JATUH DARI KETINGGIAN', 'PATAH TULANG, LUKA PADA TUBUH, KEMATIAN / FATALITY, KRAM PADA TANGAN / KAKI', 'APD Lengkap, APD Lengkap, APD Lengkap, APD Lengkap', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'nobriefing', 'draft'),
(8, '0702230002', '2023-02-07', 'testes', 'cek', '2023-02-08', '2023-02-10', ' Gedung E - Punchgrid, Gedung F - Formation', 'tes', 'cel', '23423', '2', 'cek, tes', 'cek', 'cek', '3423', 'cek', 'Mask/Respirator and Saftey Shoes', 'Helmet', 'cekeck', 'libatkan ruang terbatas, libatkan ketinggian', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja, Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'cek123, tes123, , ', 'JATUH DARI KETINGGIAN, TERSENGAT LISTRIK', 'PENCEMARAN LINGKUNGAN, KEMATIAN / FATALITY', 'cek, tes, , ', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja, Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'nobriefing', 'draft'),
(9, '0702230003', '2023-02-07', 'PT IKS HASIL BRIEFING', 'BOGOR', '2022-03-22', '2022-03-30', 'Gedung A - Charging, Gedung B - Grid Casting', 'Gita Widianti', 'Ratna Diana', '210391283', '2', 'Martin, Jeffry', 'Pa Saeful', 'PPIC', '2352352', 'Bor Listrik, Tang, Obeng, Gergaji listrik, Paku beton', 'Mask/Respirator and Saftey Shoes', 'Face Shield, Full Body Harness, Sarung Tangan, APRON', 'Maintenance', 'libatkan panas', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', '1.cekbriefing, 2.cekbrief, 3.cekbrief, 4.cekbrief', 'TERPAPAR UAP, GETARAN MEKANIS ALAT, TERKENA PERCIKAN LAS, TERPAPAR UAP', 'KEMATIAN / FATALITY, LUKA PADA JARI / TANGAN, LUKA PADA TUBUH, LUKA BAKAR', 'tes, tes2, tes3, tes4', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', 'briefing', 'approved'),
(10, '0802230001', '2023-02-08', 'PT MAKMUR JAYA', 'Cililitan,Jakarta Pusat', '2023-02-09', '2023-02-23', 'Gedung A - Assembling, Gedung D - Assembling, Gedung G - Assembling', 'Fahri Permana', 'Gunawan', '098812837219', '5', 'Reza Yuda Fadillah, Alfhin Agustian Pardede, Rafli Al Huda, Angga Hidayat, Ario Putra Siam Purnomo', 'Nita W', 'MIS', '09218390127', 'Komputer,Fiber Optic Cabel, Crump Tool', 'Mask/Respirator and Saftey Shoes', 'Helmet, Safety Googles, Face Shield, Sarung Tangan', 'Maintenance', 'umum, libatkan ruang terbatas', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja, Kategori Umum : Tidak Ada Syarat Wajib', '1.Crosscheck Area, 2. Persiapan Diri dan Alat, 3. Action Maintenance, ', 'TERSENGAT LISTRIK, GETARAN MEKANIS ALAT, TERSENGAT LISTRIK', 'KEMATIAN / FATALITY, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN', 'APD Lengkap, APD Lengkap, APD Lengkap, ', 'Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja', 'briefing', 'approved'),
(11, '0802230002', '2023-02-08', 'CV BERKAH MANDIRI MAHKOTA', 'CIKARANG,BEKASI', '2023-02-04', '2023-02-06', 'Gedung B - Grid Casting', 'MARSIN', 'MARSIN', '09821921029', '2', 'MARSIN, ANTO', 'AHMAD FADILLAH, ANGGA', 'PPIC', '4352345324', 'GERINDA TANGAN, MC.LAS', 'Mask/Respirator and Saftey Shoes', 'Safety Glass, Face Shield', 'INSTALASI', 'libatkan panas', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', '1.Pembuatan Sekat (Gerinda Plat, Pengelasan), 2. Instalasi Sekat, , ', 'GETARAN MEKANIS ALAT, TERSAYAT, KEBAKARAN, TERJEPIT', 'KEMATIAN / FATALITY, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, KRAM PADA TANGAN / KAKI, KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA JARI / TANGAN', 'Hot Permitt, Penggunaan APD Lengkap, Penggunaan APD, , ', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', '', 'approved');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `iks`
--
ALTER TABLE `iks`
  MODIFY `id_subcont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `constraint_gambar` FOREIGN KEY (`subcont_id`) REFERENCES `iks` (`id_subcont`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `constraint_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `karyawan` (`id_krywn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
