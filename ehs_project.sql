-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2023 pada 11.25
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
(1, 2, 'IMG_1258.JPG'),
(2, 3, 'FORMATION_3.jpeg'),
(3, 4, 'PASTING_4.jpeg'),
(4, 5, 'Melibatkan_ketinggian1.jpg'),
(5, 6, 'melibatkan_panas.jpg'),
(6, 9, 'image.jpg'),
(7, 10, '16803149998501153643755445204630.jpg'),
(8, 11, 'WhatsApp_Image_2023-04-01_at_1_53_55_PM.jpeg'),
(9, 12, 'WhatsApp_Image_2023-04-01_at_1_53_55_PM1.jpeg'),
(10, 13, 'WhatsApp_Image_2023-04-03_at_14_16_32.jpeg'),
(11, 15, '20230406_090501.jpg'),
(12, 14, '93585AFC-7CBD-4BDB-9680-3F132D916F9C.jpeg'),
(13, 20, '16811087471918367905862971737769.jpg'),
(14, 18, 'umum.jpeg'),
(15, 21, 'PXL_20230412_024133755.jpg'),
(16, 32, 'closing_accident_020119.jpg'),
(17, 30, 'umum1.jpeg'),
(18, 29, 'Melibatkan_ketinggian2.jpg'),
(19, 33, 'Untitled.jpg'),
(20, 38, '1681521841960232287468755251542.jpg'),
(21, 41, 'IMG_20230415_135849.jpg'),
(22, 42, '20230418_092754.jpg'),
(23, 43, 'Screenshot_2023-04-19-14-47-29-188_com_whatsapp.jpg'),
(24, 46, '16831827414803087631017462128190.jpg'),
(25, 44, '16832531931161997132244880071529.jpg'),
(26, 45, 'WhatsApp_Image_2023-05-05_at_09_21_23.jpeg'),
(27, 47, 'IMG-20230504-WA0066.jpg');

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

--
-- Dumping data untuk tabel `iks`
--

INSERT INTO `iks` (`id_subcont`, `no_regis`, `tanggal_pengajuan`, `nama_perusahaan`, `alamat_perusahaan`, `wkt_mulai`, `wkt_selesai`, `lokasi_pekerjaan`, `direktur_koordinat`, `pic_subcont`, `nohp_subcont`, `jml_picsubcont`, `namamp_subcont`, `pic_cbi`, `sie_pic_cbi`, `nohp_cbi`, `peralatan`, `apd_dipakai`, `apd_tambahan`, `jenis_pekerjaan`, `kategori_pekerjaan`, `syarat_wajib`, `aktivitas_pekerjaan`, `aspek`, `dampak`, `standar_pengamanan`, `validasi`, `require_ehs`, `status`) VALUES
(2, '2003230002', '2023-03-20', 'PT Nonik Sahaya Citra ', 'Karawang Timur', '2023-03-20', '2023-03-24', 'Area Office, Area Taman', 'Ihan Pratama ', 'Sabda Gesang ', '34354543534', '5', 'Indri Afriyanti , bambang , Agung, Guruh Putra, Putra agung p', 'Bayu Suhardi', 'Maintenance', '2534534', 'Cangkul ', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, Full Body Harness, Sarung Tangan, APRON', 'Maintenance Mesin', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'Tes1, Tes2, , ', 'JATUH DARI KETINGGIAN, TERGELINCIR', 'KEMATIAN / FATALITY, PATAH TULANG', 'APD Lengkap, Safety Induction, , ', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'briefing', 'approved'),
(3, '2403230001', '2023-03-24', 'PT Maju Karya Bersama ', 'Ciputat', '2023-03-24', '2023-03-24', 'Area Office', 'Dadan Setiawan ', 'Benyamin ', '8123456789', '2', 'Charlie, Denovan ', 'Mujiono ', 'GA ', '8123456789', 'Tangga ', 'Mask/Respirator and Safety Shoes', 'Helmet', 'sipil ', 'umum, libatkan panas, libatkan ruang terbatas, libatkan listrik tegangan tinggi, libatkan ketinggian', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL, Min 2 Pekerja, Wajib pastikan oksigen tersedia, atur waktu maksimal kerja, Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm, Min 2 Pek', 'preparation , , , ', 'TERSENGAT LISTRIK', 'LUKA BAKAR', 'pemakaian safety shoes , , , ', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL, Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja, Min 2 Pekerja, PIC memiliki sertifikat Teknisi K3 Listrik, Area memiliki p', '', 'rejected'),
(4, '2403230002', '2023-03-24', 'PT Mujiono ', 'Bantargebang ', '2023-03-24', '2023-03-24', 'Area Office', 'Marsin', 'Eddy ', '812435647', '2', 'Romli , Nur ', 'Dwi ', 'GA ', '812345678', 'EMBER ', 'Mask/Respirator and Safety Shoes', 'Helmet', 'Sipil, cleaning', 'umum, libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm, Kategori Umum : Tidak Ada Syarat Wajib', 'preparation, , , ', 'TERGELINCIR', 'LUKA PADA JARI / TANGAN', 'bawa alat standar , , , ', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL, Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', '', 'approved'),
(5, '2803230001', '2023-03-28', 'PT BANGUN PERSADA', 'Griya Indah', '2023-03-28', '2023-03-28', 'Area Office', 'Nonik', 'Sahaya', '90234893', '2', 'Abdul, Gofar', 'Pak Dwi', 'GA', '8982302', 'Ember,Majun, Compresor,Steam', 'Mask/Respirator and Safety Shoes', 'Helmet', 'Sipil', 'umum, libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm, Kategori Umum : Tidak Ada Syarat Wajib', 'Preparation, , , ', 'TERGELINCIR', 'LUKA PADA TUBUH', '5R Area, , , ', 'Wajib tersedia APAR, Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', '', 'rejected'),
(6, '2803230002', '2023-03-28', 'PT AMERTA JAYA ABADI S', 'Jakarta Timur', '2023-03-28', '2023-03-31', 'Area Office, Area Taman', 'Wawan Gunawan', 'Rita Nurjanah', '1,92381E+11', '2', 'Riki Ananta, Putra Rudiana', 'Bayu Suryadi', 'Maintenance', '12931238012', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, APRON', 'Pengelasan Maintenance', 'libatkan panas', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', 'Persiapan APD, Persiapan Lokasi, Persiapan pekerja, ', 'TERKENA PERCIKAN LAS, TERSENGAT LISTRIK, GETARAN MEKANIS ALAT', 'LUKA PADA TUBUH, KEMATIAN / FATALITY, LUKA PADA JARI / TANGAN', 'APD Lengkap, Safety Induction, APD Lengkap, ', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', 'briefing', 'approved'),
(7, '2903230001', '2023-03-29', 'PT. Tuntas', 'Bekasi', '2023-03-29', '2023-04-07', 'Gedung C - Formation', 'Agus', 'Zaelani', '98344556', '3', 'Azis, Azis, Azis', 'Saut', 'Warehouse', '821332534', 'Mesin las, Gerinda potong, tool box', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, Face Shield', 'Perbaikan mesin', 'libatkan panas', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', 'Pengelasan, , , ', 'TERSENGAT LISTRIK, TERKENA PERCIKAN LAS, KEBAKARAN', 'LUKA PADA MATA, KERUSAKAN FASILITAS', 'Penyediaan APAR, memakai kecamata safety saat pengelasan, , , ', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', '', 'checked'),
(8, '3003230001', '2023-03-30', 'PT GMT', 'Jakarta ', '2023-03-29', '2023-04-03', 'Gedung G - Assembling,  Warehouse Komponen,  Warehouse Finishgood', 'Bp. Zulham', 'Bapak Ilwan', '87814160001', '4', 'Asep, Ari, Andi, Bagja', 'Dwi Purwanto ', 'General Affair ', '81617541121', 'Mesin bor tangan, ', 'Mask/Respirator and Safety Shoes', 'Helmet, Full Body Harness', 'Perbaikan atap', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'Pengecekan baut roofing & pelapisan aquaproof/ sealant, , , ', 'JATUH DARI KETINGGIAN, TERSENGAT LISTRIK, TERGELINCIR', 'KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA BAKAR', 'Gunakan APD dengan baik dan benar , , , ', '', '', 'draft'),
(9, '3003230002', '2023-03-30', 'Gemilang reksa buana', 'Cilengsi bogor', '2023-03-30', '2023-04-30', 'Maintenance', 'Anwar', 'Gagan', '82297810902', '2', 'Gagan, Gagan', 'Pak april', 'Mpm', '85727753122', 'Mesin las belender kunci kunci analiser tang amper gas LPG setim pakum', 'Mask/Respirator and Safety Shoes', 'Helmet, Sarung Tangan', 'Serpis umum', 'umum', NULL, 'Servis chiller, , , ', 'TERSENGAT LISTRIK', 'KEMATIAN / FATALITY', 'Pake apd, , , ', 'Tidak Ada Syarat Wajib', '', 'approved'),
(10, '104230001', '2023-04-01', 'Berkah Mandiri Mahkota', 'Mahkota Indah GB 07No 18 Rt 08/01 Mangun jaya  Tambun Bekasi', '2023-04-01', '2023-04-15', 'Gedung A - Charging', 'Marsin', 'Marsin', '81211837437', '3', 'Anto , Basuki, Girman', 'Mardani', 'Wet battery', '83898826507', 'Mesin bor tangan,mesin gerinda tangan,kabel rol', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass', 'Pasang cover', 'umum', NULL, 'Pasang cover, , , ', 'TERSENGAT LISTRIK', 'LUKA PADA JARI / TANGAN', 'Pakai APD, , , ', 'Tidak Ada Syarat Wajib', '', 'approved'),
(11, '104230002', '2023-04-01', 'PT. NFU', 'Kawasan industri manis\nJl. Manis II no 1 \nCurug Tangerang', '2023-04-02', '2023-04-02', 'Gedung E - Lead Powder Pasting', 'Agus', 'Agus', '89661695233', '5', 'Safrudin, Iman, M. Ali Bahri, Suadi, Fahrurozi', 'Ibu Nonik', 'EHS', '85728466966', 'Cangkul, sarung tangan karet, sarung tangan kain, sabun colek', 'Mask/Respirator and Safety Shoes', 'Sarung Tangan', 'Pengerukan lumpur timah', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'Pengurasan air pada kolom pasta scrap, Pengerukan pasta scrap, Penempatan pasta pada can scrap, ', 'TERKENA PERCIKAN CAIRAN KIMIA, TERKENA PERCIKAN CAIRAN KIMIA, TERJEPIT, TERGELINCIR, TERKENA PERCIKAN CAIRAN KIMIA', 'LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, GANGGUAN PERNAFASAN, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, GANGGUAN PERNAFASAN, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, GANGGUAN PERNAFASAN', 'Memakai helm\nMemakai sepatu safety\nMemakai sarung tangan, Memakai helm\nMemakai sepatu safety\nMemakai sarung tangan, Memakai helm\nMemakai sepatu safety\nMemakai sarung tangan, ', 'Tidak Ada Syarat Wajib', '', 'approved'),
(12, '104230002', '2023-04-01', 'PT NFU', 'Jl manis II no 1 Ds Kadu Curug Tangerang Banten', '2023-04-02', '2023-04-02', 'Gedung E - Lead Powder Pasting', 'Agus', 'Aan may', '89661695233', '6', 'Aan may, Suadi, M alibahri, Safrudin, Iman, Fahrurozi', 'Ibu nonik', 'Ibu nonik', '85728166966', 'Sarung tangan karet, sarung tangan kain, sabun colek, masker', 'Mask/Respirator and Safety Shoes', 'Helmet', 'Umum', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'Pengurasan lumpur PT CBI, , , ', 'TERPAPAR UAP', 'LUKA PADA TUBUH, LUKA PADA JARI / TANGAN', 'Memakai sepatu sefety, sarung tangan, helm, , , ', 'Tidak Ada Syarat Wajib', '', 'approved'),
(13, '304230001', '2023-04-03', 'PT GMT', 'Jakarta ', '2023-04-03', '2023-04-10', 'Gedung A - Assembling, Gedung A - Charging, Gedung B - Grid Casting, Gedung B - Lead Powder Pasting,', 'Bp. Zulham', 'Bapak Ilwan', '8780001', '4', 'Asep, Ari , Bagja , Andi', 'Dwi Purwanto ', 'General Affair ', '81617541121', 'Mesin bor tangan', 'Mask/Respirator and Safety Shoes', 'Helmet, Full Body Harness, Sarung Tangan', 'Perbaikan atap / cek kebocoran ', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'Pengecekan baut roofing , , , ', 'JATUH DARI KETINGGIAN, TERSENGAT LISTRIK, TERGELINCIR', 'KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, LUKA BAKAR', 'Gunakan APD dengan baik dan benar , , , ', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm, Min 2 Pekerja, PIC memiliki sertifikat Teknisi K3 Listrik, Area memiliki penerangan yang cukup', '', 'approved'),
(14, '604230001', '2023-04-06', 'Berkah Mandiri Mahkota', 'Mahkota Indah GB 07/18 Rt 08/01 Mangunjaya Tambun Selatan Bekasi', '2023-04-07', '2023-04-23', 'Gedung B - Lead Powder Pasting, Gedung E - Lead Powder Pasting', 'Marsin', 'Marsin', '81211837437', '3', 'Anto, Yudi, Basuki', 'Kresna Bayu Aji', 'Maintenace', '81296453252', 'Bor tangan,grenda tangan ,kabel rol,las,Apar', 'Mask/Respirator and Safety Shoes', 'Sarung Tangan', 'Repair dinding curing chember', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'Bongkar dinding, Pengelasan, , ', 'TERJEPIT, TERSENGAT LISTRIK, TERKENA PERCIKAN LAS', 'LUKA PADA JARI / TANGAN, LUKA PADA TUBUH', 'sesuai sop, sesuai sop, , ', 'Tidak Ada Syarat Wajib', '', 'approved'),
(15, '604230001', '2023-04-06', 'PT Hikaru Wira Wijaya', 'Perum Buana Taman Sari Blok A No.75 Kp. Marga Sari, Karawang Timur, Jawa Barat', '2023-04-07', '2023-05-07', 'Gedung F - Formation', 'Ariyanto', 'Anda Supriyatna', '83861598340', '4', 'Egi, Nadi, Dadan, Ipan', 'Cipto Tigor Pribadi', 'Process Eng Plate Process', '8997489197', 'Mesin gerinda, mesin bor, tool box', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, Full Body Harness, Sarung Tangan', 'Instalasi pipa dan relokasi pompa', 'umum, libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm, Kategori Umum : Tidak Ada Syarat Wajib', 'Instalasi pipa cooling, Relokasi pompa, , ', 'JATUH DARI KETINGGIAN, TERJEPIT, TERGELINCIR, TERKENA PERCIKAN CAIRAN KIMIA, TERSAYAT, LIMBAH B3 DAN NON B3, TERJEPIT, TERGELINCIR, TERSAYAT', 'PENCEMARAN LINGKUNGAN, KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, KERUSAKAN FASILITAS, KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, KERUSAKAN FASILITAS', 'menggunakan body harness, pastikan saat di ketinggian ada yg mengawasi dari bawah, sampah B3 tidak tercampur dengan non B3, menggunakan sarung tangan dan kacamata saat pemotongan pipa, menggunakan sarung tangan dan safety shoes, selalu koordinasi, pastika', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', '', 'approved'),
(16, '604230002', '2023-04-06', 'pt tes', 'tes', '2023-04-06', '2023-04-07', 'Area Office', 'tes', 'tes', '20', '1', 'r', 'ret', 'tes', '350', 'tes', 'Mask/Respirator and Safety Shoes', 'Helmet', 'tes', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'tes, , , ', 'JATUH DARI KETINGGIAN', 'PENCEMARAN LINGKUNGAN', 'tes, , , ', '', '', 'draft'),
(18, '604230004', '2023-04-06', 'PT Miranda ', 'Karawang ', '2023-04-06', '2023-04-06', 'Area Taman', 'Tarmono ', 'Uus ', '812345678', '1', 'Andika ', 'Yuda Aji ', 'ppic ', '812345678', 'cangkul ', 'Mask/Respirator and Safety Shoes', 'Helmet', 'Sipil ', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'preparation , , , ', 'JATUH DARI KETINGGIAN', 'PENCEMARAN LINGKUNGAN', 'sop, , , ', 'Tidak Ada Syarat Wajib', '', 'checked'),
(20, '1004230001', '2023-04-10', 'Sinergi mekatrotama Indonesia', 'Vmg 3', '2023-04-10', '2023-04-10', 'All Area Pabrik', 'Ibu wayan', 'Pak agun', '81282240352', '3', 'Rizal, Andri, Agun', 'Pak ihan', 'Ehs', '85155482080', 'Kit,thicknes', 'Mask/Respirator and Safety Shoes', 'Helmet, Sarung Tangan', 'Sertifikasi peralatan k3', 'umum', NULL, 'Pengecekan alarm, Pengecekan bejana tekan, , ', 'KEBAKARAN, TERGELINCIR', 'LUKA BAKAR, LUKA PADA TUBUH', 'Helm safety,sepatu safety, Helm safety, sepatu safety, , ', 'Tidak Ada Syarat Wajib', '', 'approved'),
(21, '1204230001', '2023-04-12', 'PT NFU', 'Jl manis II no.1 desa Kadu\nCurug Tangerang', '2023-04-16', '2023-04-16', 'Gedung E - Lead Powder Pasting', 'Agus', 'Seno aji', '81904766806', '6', 'Seno aji, Ahyar, Arie, Januji, Ilham, Fahmi', 'Ibu nonik', 'Ibu nonik', '85728466966', 'Sarung tangan karet, sarung tangan kain, sabun colek, masker', 'Mask/Respirator and Safety Shoes', 'Sarung Tangan', 'Umum', 'umum', NULL, 'Pengerukan lumpur timah PT cbi, , , ', 'TERPAPAR UAP', 'LUKA PADA TUBUH, LUKA PADA JARI / TANGAN', 'Sepatu safety,masker, sarung tangan,helm, , , ', 'Tidak Ada Syarat Wajib', '', 'approved'),
(22, '1204230002', '2023-04-12', 'PT Percobaan 1 ', 'KGV 2 Blok 1 Karawang', '2023-04-13', '2023-04-13', 'Area Office', 'Sanjaya ', 'Noah ', '812345678', '2', 'Eko sunaryo, Jajang Rohman ', 'Pradipta Fajar ', 'Engineering ', '812456789', 'tangga ', 'Mask/Respirator and Safety Shoes', 'Helmet', 'Sipil ', 'umum, libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm, Kategori Umum : Tidak Ada Syarat Wajib', 'preparation , , , ', 'JATUH DARI KETINGGIAN', 'LUKA PADA TUBUH', 'cek kondisi tangga, , , ', '', '', 'draft'),
(23, '1304230001', '2023-04-13', 'PT Percobaan 2', 'KGV 2 Blok 2 Karawang', '2023-04-13', '2023-04-14', 'Area Office, Area Taman', 'Pak Nanang', 'Ibu Widya ', '325432', '2', 'Winda, Riki', 'Ihan Pratama', 'EHS', '235235', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, APRON', 'Pengelasan Mesin', 'libatkan panas', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', 'Persiapan Diri, Persiapan Area Kerja, , ', 'TERKENA PERCIKAN LAS, TERSENGAT LISTRIK', 'LUKA PADA TUBUH, KEMATIAN / FATALITY', 'APD Lengkap, Safety Induction, , ', '', '', 'draft'),
(24, '1304230002', '2023-04-13', 'PT Percobaan 3', 'KGV 2 Blok 3 Karawang', '2023-04-16', '2023-04-21', 'Gedung A - Assembling, Gedung B - Lead Powder Pasting', 'Rahman Hidayat', 'Teuku Umar', '83409127', '1', 'Piki Sabani', 'Arif Aprianto', 'Maintenance', '25235252', 'Ember,Majun, Compresor,Steam', 'Mask/Respirator and Safety Shoes', 'Helmet, Face Shield, Full Body Harness, Sarung Tangan', 'Cleaning AC', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'Persiapan Diri, Persiapan Area Kerja, Perencanaan Kerja, Finishing dan Cleaning Area', 'JATUH DARI KETINGGIAN, TERGELINCIR, GETARAN MEKANIS ALAT, JATUH DARI KETINGGIAN', 'KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA PADA TUBUH', 'APD Lengkap, Safety Induction, APD Lengkap, APD Lengkap', '', '', 'draft'),
(25, '1304230003', '2023-04-13', 'PT Percobaan 4', 'KGV 2 Blok 4 Karawang', '2023-04-13', '2023-04-17', 'Gedung B - Lead Powder Pasting, Gedung E - Lead Powder Pasting', 'Rudiana', 'Wawan Irawan', '263453453', '3', 'Raihan Dermawan, Alfhin Agustian, Reza Yuda', 'Fahrizal Utama', 'PPIC', '3252352', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Safety Shoes', 'Safety Glass, Face Shield, Earplug, Earmuff, Sarung Tangan', 'Perbaiki Tangki', 'libatkan ruang terbatas', 'Min 2 Pekerja, Wajib pastikan oksigen tersedia, atur waktu maksimal kerja', 'Persiapan Diri, Persiapan Area Kerja, , ', 'TERJEPIT, TERKENA PERCIKAN CAIRAN KIMIA', 'KEMATIAN / FATALITY, LUKA PADA TUBUH', 'APD Lengkap, Safety Induction, , ', '', '', 'draft'),
(26, '1304230004', '2023-04-13', 'PT percobaan 5', 'KGV 2 Blok 5 Karawang', '2023-04-14', '2023-04-16', 'Area Office, Area Taman', 'Ehsan ', 'Fizi', '463464564', '2', 'Titan Maulana, Kiki Saputra', 'Bagus Mudjihariadi', 'maintenance', '2534533', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass', 'Umum', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'Persiapan Diri, , , ', 'TERPAPAR UAP', 'KEMATIAN / FATALITY', 'APD Lengkap, , , ', '', '', 'draft'),
(27, '1304230005', '2023-04-13', 'PT Percobaan 6', 'KGV 2 Blok 6 Karawang', '2023-04-13', '2023-04-18', 'Area Taman, Gedung A - Assembling', 'Yuliadi', 'Tara Budiman', '45345632', '4', 'Agus, Faishal, Rangga, Fahrul', 'Rahmadian Pratama', 'GA', '34534534', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, Earplug, Earmuff, Sarung Tangan', 'Perbaiki Listrik', 'libatkan listrik tegangan tinggi', 'Min 2 Pekerja, PIC memiliki sertifikat Teknisi K3 Listrik, Area memiliki penerangan yang cukup, Area bebas genangan air, Lengkap dengan LOTO sesuai Standar', 'Persiapan Diri, Persiapan Area Kelistrikan Kerja, Perencanaan Kerja, Finishing dan Cleaning Area', 'TERSENGAT LISTRIK, GETARAN MEKANIS ALAT, TERPAPAR UAP, TERSENGAT LISTRIK', 'KEMATIAN / FATALITY, LUKA PADA TUBUH, GANGGUAN PERNAFASAN, LUKA PADA TUBUH', 'APD lengkap, Safety Induction, APD Lengkap, APD Lengkap', 'Min 2 Pekerja, PIC memiliki sertifikat Teknisi K3 Listrik, Area memiliki penerangan yang cukup, Area bebas genangan air, Lengkap dengan LOTO sesuai Standar', '', 'checked'),
(28, '1304230006', '2023-04-13', 'PT Percobaan 7', 'KGV 2 Blok 7 Karawang', '2023-04-14', '2023-04-17', 'Area Taman, Gedung A - Assembling', 'Pirman', 'Irgi Saputra', '23523847329', '1', 'Wira Maulana', 'Ryandanu Aldy Y', 'Tooling 1', '4543643634', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Safety Shoes', 'Helmet, APRON', 'Pengelasan Maintenance', 'umum, libatkan panas', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL, Kategori Umum : Tidak Ada Syarat Wajib', 'Persiapan Diri, Persiapan Area Kerja, , ', 'TERKENA PERCIKAN LAS, GETARAN MEKANIS ALAT', 'KEMATIAN / FATALITY, LUKA PADA TUBUH', 'Safety Induction, APD Lengkap, , ', '', '', 'draft'),
(29, '1304230007', '2023-04-13', 'PT Percobaan 8', 'KGV 2 Blok 8 Karawang', '2023-04-14', '2023-04-19', 'Gedung D - Workshop', 'Yuda', 'Yuda', '23452384', '5', 'Ivan, Rifky, Raihan, Zidan, Lutfhi', 'Rifai', 'GA', '2465352', 'Ember,Majun, Compresor,Steam', 'Mask/Respirator and Safety Shoes', 'Safety Glass, Full Body Harness, Sarung Tangan', 'Cleaning AC', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'Persiapan Diri, Persiapan Area, , ', 'JATUH DARI KETINGGIAN, TERGELINCIR', 'KEMATIAN / FATALITY, PATAH TULANG', 'APD Lengkap, Safety Induction, , ', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', '', 'checked'),
(30, '1304230008', '2023-04-13', 'PT percobaan 9', 'KGV 2 Blok 9 Karawang', '2023-04-19', '2023-04-21', 'ehs', 'Dani Firmansah', 'Dani Firmansah', '36346', '2', 'Haikal, Feri ', 'Ahmad Fadilah', 'Tooling 2', '4353456346', 'Sekop, Ember, Vacum ', 'Mask/Respirator and Safety Shoes', 'Face Shield, Sarung Tangan', 'Cleaning Bak', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'Persiapan Diri, Persiapan Area Kerja, Persiapan Kerja, Cleaning Area', 'TERGELINCIR, TERKENA PERCIKAN CAIRAN KIMIA, TERPAPAR UAP, LIMBAH B3 DAN NON B3', 'PENCEMARAN LINGKUNGAN, KERUSAKAN FASILITAS, GANGGUAN PERNAFASAN, PENCEMARAN LINGKUNGAN', 'APD Lengkap, APD Lengkap, APD Lengkap, APD Lengkap', 'Tidak Ada Syarat Wajib', '', 'checked'),
(31, '1304230009', '2023-04-13', 'PT Percobaan 10', 'KGV 2 Blok 10 Karawang', '2023-04-13', '2023-04-20', 'Gedung A - Charging, Gedung B - Grid Casting', 'Irawan', 'Irawan', '2452352', '1', 'Arif Hidayat', 'Pujiono', 'QC', '2332542352', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Safety Shoes', 'Safety Glass, Face Shield', 'Umum', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'Persiapan Diri, Perencanaan kerja, Finishing & Cleaning Area, ', 'TERPAPAR UAP, LIMBAH B3 DAN NON B3, TERPAPAR UAP', 'GANGGUAN PERNAFASAN, PENCEMARAN LINGKUNGAN, KEMATIAN / FATALITY', 'APD Lengkap, APD Lengkap, APD Lengkap, ', 'Tidak Ada Syarat Wajib', '', 'draft'),
(32, '1304230010', '2023-04-13', 'PT Percobaan 11', 'KGV 2 Blok 11 Karawang', '2023-04-13', '2023-04-20', ' Warehouse Komponen,  Warehouse Finishgood', 'Kemal', 'Zidan', '4534633', '2', 'Rangga, Riyan Hidayat', 'Nur Ali', 'Maintenace', '245435345', 'Ember,Majun, Compresor,Steam', 'Mask/Respirator and Safety Shoes', 'Helmet, Full Body Harness, Sarung Tangan', 'Cleaning AC', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'Persiapan Diri, Persiapan Area Kerja, Perencanaan Kerja, CLeaning Area', 'JATUH DARI KETINGGIAN, TERGELINCIR, GETARAN MEKANIS ALAT, TERSENGAT LISTRIK', 'KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN', 'APD Lengkap, Safety Induction, APD Lengkap, APD Lengkap', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', '', 'checked'),
(33, '1304230011', '2023-04-13', 'PT. Percobaan 12', 'KGV 2 Blok 12 Karawang', '2023-04-13', '2023-04-20', 'Gedung B - Grid Casting, Gedung B - Lead Powder Pasting,  Gedung E - Punchgrid', 'Angga', 'Fadillah', '1234567890', '10', 'a, b, c, d, e, f, g, h, i, j', 'Ryandanu', 'Ryandanu', '1234567890', 'Las, Gerinda', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, Safety Googles, Face Shield, Earplug, Full Body Harness, Sarung Lengan, Sarung Tangan', 'Modifikasi Conveyor', 'umum, libatkan panas, libatkan ruang terbatas, libatkan listrik tegangan tinggi, libatkan ketinggian', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL, Min 2 Pekerja, Wajib pastikan oksigen tersedia, atur waktu maksimal kerja, Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm, Min 2 Pek', 'Potong pelat dengan gerinda, Las sambungan pelat, Finishing dengan cat, ', 'JATUH DARI KETINGGIAN, GETARAN MEKANIS ALAT, TERSAYAT, TERKENA PERCIKAN LAS, GETARAN MEKANIS ALAT, TERPAPAR UAP, KEBAKARAN, TERKENA PERCIKAN CAIRAN KIMIA, LIMBAH B3 DAN NON B3', 'KEMATIAN / FATALITY, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, LUKA PADA MATA, GANGGUAN PENDENGARAN, KEMATIAN / FATALITY, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, LUKA PADA MATA, LUKA BAKAR, GANGGUAN PERNAFASAN, PENCEMARAN LINGKUNGAN', 'Pakai APD di tangan dan muka, Pakai APD di tangan dan muka, Pakai APD di tangan dan muka, ', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL, Min 2 Pekerja, Wajib pastikan oksigen tersediaa, atur waktu maksimal kerja, Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm, Min 2 Pe', '', 'checked'),
(34, '1304230012', '2023-04-13', 'PT Percobaan 12', 'KGV 2 Blok 11 Karawang', '2023-04-13', '2023-04-20', 'Gedung G - Assembling,  Warehouse Komponen', 'Dani ', 'Dani', '2353245', '2', 'Wawan, Raihan', 'Rifai', 'GA', '4354634564', 'Palu,Tang,Bor Listrik, Paku beton, Gergaji Mesin', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, Sarung Tangan, APRON', 'Pengelasan Maintenance', 'libatkan panas', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', 'Persiapan Diri, Persiapan Area Kerja, Start and Finishing Area, Cleaning Area', 'TERKENA PERCIKAN LAS, TERSENGAT LISTRIK, TERSENGAT LISTRIK, GETARAN MEKANIS ALAT', 'LUKA PADA TUBUH, KEMATIAN / FATALITY, LUKA PADA JARI / TANGAN, LUKA BAKAR', 'APD Lengkap, Safety Induction, APD Lengkap, APD Lengkap', '', '', 'draft'),
(35, '1304230013', '2023-04-13', 'PT Percobaan 14', 'KGV 2 Blok 14 Karawang', '2023-04-13', '2023-04-20', 'Gedung G - Assembling,  Warehouse Komponen', 'Gunawan', 'Gunawan', '3253453', '1', 'Rahmadi', 'Ahmad Fadilah', 'Tooling 1', '23422', 'Ember,Majun, Compresor,Steam', 'Mask/Respirator and Safety Shoes', 'Safety Glass, Full Body Harness', 'Cleaning AC', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'Persiapan Diri, Persiaapan area kerja, , ', 'JATUH DARI KETINGGIAN, TERGELINCIR', 'KEMATIAN / FATALITY, PATAH TULANG', 'APD Lengkap, Safety Induction, , ', '', '', 'draft'),
(37, '1304230015', '2023-04-13', 'PT. Electromech ', 'Jl. Jati raya Cikarang ', '2023-04-13', '2023-04-13', 'Gedung F - Formation', 'Hanif Muttaqin ', 'Iwan', '85718213755', '1', 'Iwan', 'Bpk Prapto ', 'Utility ', '81314612923', 'Tool set, full body Harnes', 'Mask/Respirator and Safety Shoes', 'Helmet, Full Body Harness, Sarung Tangan', 'Perbaikan crane', 'libatkan ketinggian', 'cek body harness dan helm', 'Pengecekan power conductor , Setting alimit cross travel , , ', 'JATUH DARI KETINGGIAN, TERSENGAT LISTRIK, JATUH DARI KETINGGIAN, TERJEPIT, TERGELINCIR', 'KEMATIAN / FATALITY, PATAH TULANG, KEMATIAN / FATALITY, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN', 'Matikan power dari panel utama\n\nGunakan body Harnes yang masih layak pakai, Gunakan body Harnes\nPekerjaan dilakukan oleh ahli, , ', '', '', 'draft'),
(38, '1504230001', '2023-04-15', 'Pt sinergi mekatrotama indonesia', 'Bekasi', '2023-04-15', '2023-04-15', 'All Area Pabrik', 'Aris triyono', 'Firman', '83892473104', '5', 'Aris, Firman, Agun, Rizal, Andri', 'Ihan', 'Ehs', '85155482080', 'Meteran manul,jangka sorong,tiknes,hardes', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Googles, Sarung Tangan', 'Riksa uji perlatan', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'Riksa uji cranr, Pengijian fire alarm system, , ', 'JATUH DARI KETINGGIAN, TERSENGAT LISTRIK', 'PATAH TULANG, LUKA PADA JARI / TANGAN', 'Jaga jarak aman, Memakai sarung tangan anti listrik, , ', 'Tidak Ada Syarat Wajib', '', 'approved'),
(41, '1704230001', '2023-04-17', 'PT. Nito', 'TB Simatupang', '2023-04-17', '2023-04-24', 'Gedung F - Formation', 'Pak Totok', 'Lina', '82246786994', '4', 'Dani, Totok, Hendra, Zaenudin', 'Kresna Bayu', 'Maintenance', '81296453252', 'Kunci pas dan toolbox', 'Mask/Respirator and Safety Shoes', 'Helmet', 'Perbaikan kompressor', 'umum', NULL, 'Buka cover komoressor, Bongkar solenoid dan manifold, Pembersihan area kompressor, ', 'TERSENGAT LISTRIK, TERJEPIT, TERJEPIT, LIMBAH B3 DAN NON B3', 'LUKA PADA TUBUH, KRAM PADA TANGAN / KAKI, LUKA PADA JARI / TANGAN, PENCEMARAN LINGKUNGAN', 'Pemakaian sarung tangan, Penggunaan sarung tangan dan memastikan mesin dalam keadaan OFF, Oli bekas dibuang ke TPS CBI, ', '', '', 'approved'),
(42, '1904230001', '2023-04-19', 'CV Berkah Mandiri Mahkota', 'Mahkota Indah Gb 7 No.18 RT 08/RW 01 Mangunjaya, Tambun, Bekasi', '2023-04-28', '2023-05-26', 'Gedung F - Formation', 'Marsin', 'Marsin', '81211837437', '2', 'Anto, Basuki', 'Cipto Tigor Pribadi', 'Process Eng Plate Process', '8997489197', 'mesin gerinda, las, bor, kabel roll, tool box', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, Safety Googles, Face Shield, Full Body Harness, Sarung Lengan, Sarung Tangan', 'Modifikasi ducting mesin IGO', 'libatkan panas, libatkan ketinggian', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL, Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'Pemasangan elbow ducting, Pemotongan ducting, Proses sambung ducting dan pasang chimney cap, ', 'TERJEPIT, TERGELINCIR, JATUH DARI KETINGGIAN, GETARAN MEKANIS ALAT, TERSAYAT, JATUH DARI KETINGGIAN, TERKENA PERCIKAN LAS, TERSAYAT, KEBAKARAN', 'LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, KRAM PADA TANGAN / KAKI, KERUSAKAN FASILITAS, KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, LUKA PADA MATA, KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA BAKAR, KERUSAKAN ', 'Menggunakan sarung tangan saat aktivitas dan pastikan area kering terlebih dahulu, Wajib menggunakan body harness, pengawasan minimal 2 orang, pastikan scaffolding sesuai standar, Wajib menyediakan APAR, cover area yang berpotensi terbakar, pakai APD pros', '', '', 'approved'),
(43, '1904230002', '2023-04-19', 'CV.Berkah Mandiri Mahkota', 'Mahkota Indah GB 07/18 Rt 08/01 Mangunjaya Tambun Bekasi', '2023-04-27', '2023-05-28', 'Gedung A - Charging', 'Marsin', 'Marsin', '81211837437', '4', 'Anto , Basuki, Firman, Yudi', 'Bagus', 'Eng', '85369020225', 'Gerida tangan ,bor tangan,mesin amplaskabel rol', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, Safety Googles, Full Body Harness, Sarung Lengan, Sarung Tangan', 'Repair duscollector wet battery gd A', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', 'Pengecatan, , , ', 'JATUH DARI KETINGGIAN, TERJEPIT, TERGELINCIR', 'PATAH TULANG, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN', 'salfoding di pasang di tempat yg rata,pakai sefty body, , , ', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', '', 'approved'),
(44, '305230001', '2023-05-03', 'PT NFU', 'Kawasan Industri Manis. Jl Manis II No.1. Kadu, kec Curug, Kab Tangerang Banten', '2023-05-07', '2023-05-07', 'Gedung E - Lead Powder Pasting', 'Agus', 'Seno A', '81904766806', '6', 'Seno A, M Rusli, Aep, A Muis, Suadi, Fahrulrozi', 'Ibu Nonik', 'Ibu Nonik', '85728466966', 'sepatu safety, masker, sarung tangan karet,helm', 'Mask/Respirator and Safety Shoes', 'Helmet, Sarung Tangan', 'umum', 'umum', NULL, 'pengerukan lumpur timah cbi, kolam penampung pasta scrap, , , ', 'TERPAPAR UAP, TERKENA PERCIKAN CAIRAN KIMIA', 'LUKA PADA JARI / TANGAN, LUKA PADA MATA, GANGGUAN PERNAFASAN', 'memakai sepatu safety,masker,sarung tangan,dan memakai helm, , , ', 'Tidak Ada Syarat Wajib', '', 'approved'),
(45, '405230001', '2023-05-04', 'PT.SINAR SUKSES MEGATAMA', 'Perum Mutiara Nirwana Blok C1 No.8, Kondang Jaya\nKarawang Timur 41371- Jawa Barat Indonesia', '2023-05-06', '2023-05-21', 'Gedung G - Assembling', 'Nurul Anwar', 'Mudayatna', '85719056027', '2', 'Karmawan, Suherlan', 'Hendi setiawan', 'Engineering', '82317063336', 'Mesin Gurinda Tangan, Mesin Bor Tangan, Kabel Power', 'Mask/Respirator and Safety Shoes', 'Helmet, Safety Glass, Full Body Harness, Sarung Tangan', 'Relayout Conveyor', 'libatkan panas', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL', 'Persiapan APD, Persiapan Lokasi, Persiapan Pekerja, ', 'TERKENA PERCIKAN LAS, JATUH DARI KETINGGIAN, TERSENGAT LISTRIK, JATUH DARI KETINGGIAN, TERSENGAT LISTRIK, TERJEPIT, TERGELINCIR, GETARAN MEKANIS ALAT', 'LUKA PADA TUBUH, KEMATIAN / FATALITY, PATAH TULANG, KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN', 'APD Lengkap, Safety Induction, APD Lengkap, ', 'Wajib tersedia APAR, Wajib proteksi area kerja, Bebas Area bahan mudah terbakar, Lindungi dengan TERPAL, Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', '', 'checked'),
(46, '405230002', '2023-05-04', 'PT Spektris Metalab ', 'Jl tanah Abang I No 12 D \nJakarta pusat ', '2023-05-04', '2023-05-05', 'Area Office', 'Puji ', 'Asep Darmawan ', '8159038908', '1', 'Asep Darmawan ', 'Ibu Wiwin ', 'Quality ', '85642352835', 'Tools box ', 'Mask/Respirator and Safety Shoes', 'Helmet', 'Maintenance Spectrometer ', 'umum', 'Kategori Umum : Tidak Ada Syarat Wajib', 'Maintenance Spectrometer , , , ', 'LIMBAH B3 DAN NON B3, LIMBAH B3 DAN NON B3, LIMBAH B3 DAN NON B3, LIMBAH B3 DAN NON B3', 'PENCEMARAN LINGKUNGAN, PENCEMARAN LINGKUNGAN, PENCEMARAN LINGKUNGAN, PENCEMARAN LINGKUNGAN', 'Bersihkan area kerja setelah selesai bekerja, , , ', 'Tidak Ada Syarat Wajib', '', 'approved'),
(47, '505230001', '2023-05-05', 'PT. Kito Indonesia', 'Kawasan Industri Delta Silicon 5 Jl. Kenari Raya Plot G2 - 10A Cikarang Pusat , Kabupaten Bekasi - Jawa Barat', '2023-05-05', '2023-05-05', 'Gedung C - Formation, Gedung F - Formation', 'Lulita Putrinda', 'Moh. Lawijaya', '81234548690', '3', 'Deri Tadarus, Tauvik Hidayat, Moh. Lawijaya', 'Krisna', 'Maintenance', '6,2813E+12', 'Tool Box, Safety Body Harnest', 'Mask/Respirator and Safety Shoes', 'Helmet, Full Body Harness, Sarung Tangan', 'Pengecekan Load Chain', 'libatkan ketinggian', 'Min 2 Pekerja, cek scaffolding/tangga, cek body harness dan helm', '- Menyiapkan Alat Ketinggian, - Pengecekan Load Chain, - Pemotongan Load Chain, ', 'JATUH DARI KETINGGIAN, TERJEPIT, JATUH DARI KETINGGIAN, TERJEPIT, JATUH DARI KETINGGIAN, TERSENGAT LISTRIK, TERJEPIT, TERKENA PERCIKAN LAS', 'KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, KEMATIAN / FATALITY, PATAH TULANG, LUKA PADA TUBUH, LUKA PADA JARI / TANGAN, LUKA PADA MATA', 'Gunakan APD, Gunakan APD, Gunakan APD, ', 'Min 2 Pekerja, cek body harness dan helm', '', 'approved');

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
(1, '496', 'RUSLI', 'ADMINISTRATION', 'GA, IR & CSR', 'SECURITY', 'KARU SECURITY', '2023-05-05 06:56:13', NULL),
(2, '412', 'MULAZIM', 'PLANT', 'PRODUCTION 1', 'PASTING & FORMATION', 'KASIE', '2023-05-05 06:56:13', NULL),
(3, '485', 'NYONO', 'ADMINISTRATION', 'PROCUREMENT', 'COMPONENT', 'KASIE', '2023-05-05 06:56:13', NULL),
(4, '517', 'MUJIONO', 'ADMINISTRATION', 'GA, IR & CSR', 'GA & SECURITY', 'KASIE', '2023-05-05 06:56:13', NULL),
(5, '563', 'SUUBI', 'PLANT', 'PPIC ', 'INV CONTROL FINISHED GOODS & DELIVERY', 'KASIE', '2023-05-05 06:56:13', NULL),
(6, '1095', 'CIPTADI NUGROHO', 'PLANT', 'PPIC ', 'PRODUCTION PLANNING CONTROL & INV CONTROL WIP', 'KASIE', '2023-05-05 06:56:13', NULL),
(7, '1257', 'RENDI WIDI NUGROHO', 'FIN, ACC, MARK & MIS', 'MARKETING', 'MARKETING', 'KASIE', '2023-05-05 06:56:13', NULL),
(8, '1361', 'AGNES RETNONING ASTUTI', 'FIN, ACC, MARK & MIS', 'FIN, ACC  & RISK MGT CONT', 'FINANCE, TREASURY & COSTING', 'KASIE', '2023-05-05 06:56:13', NULL),
(9, '1391', 'ETIKA AYU MINDIAPUTRI', 'ADMINISTRATION', 'HRD', 'RECRUITMENT & COMPENSATION BENEFIT', 'KASIE', '2023-05-05 06:56:13', NULL),
(10, '1617', 'AHMAD ZAELANI', 'PLANT SERVICE', 'EHS ', 'HEALTH & SAFETY', 'KASIE', '2023-05-05 06:56:13', NULL),
(11, '1618', 'ARIF APRIANTO', 'ENGINEERING', 'QUALITY ASSURANCE', 'QUALITY ASSURANCE', 'KASIE', '2023-05-05 06:56:13', NULL),
(12, '1697', 'EVEI ADI KURNIAWAN', 'PLANT SERVICE', 'MAINTENANCE', 'TOOLING-1 PLATE PROCESS', 'KASIE', '2023-05-05 06:56:13', NULL),
(13, '1815', 'NOVIAN ANDRIKA', 'PLANT', 'SUPERVISOR SHIFT 2 & SHIFT 3', 'SUPERVISOR SHIFT 2 ', 'KASIE', '2023-05-05 06:56:13', NULL),
(14, '1971', 'AHMAD SYAFIQ', 'ENGINEERING', 'PRODUCT ENGINEERING', 'PRODUCT DEPLOYMENT', 'KASIE', '2023-05-05 06:56:13', NULL),
(15, '2331', 'PRADIPTA FAJAR YUNIARTO', 'ENGINEERING', 'PROCESS ENGINEERING', 'PROCESS ENG MCB IB & WET CHARGING', 'KASIE', '2023-05-05 06:56:13', NULL),
(16, '2346', 'LATIF USMAN', 'PLANT SERVICE', 'MAINTENANCE', 'TOOLING-2 ASSEMBLING', 'KASIE', '2023-05-05 06:56:13', NULL),
(17, '2526', 'KAUTZAR RIZKA IGAPUTRA', 'PLANT', 'PPIC', 'WAREHOUSE MATERIAL & COMP', 'KASIE', '2023-05-05 06:56:13', NULL),
(18, '2593', 'CIPTO TIGOR PRIBADI NAINGGOLAN', 'ENGINEERING', 'PROCESS ENGINEERING', 'PROCESS ENG LEAD POWDER PASTING & FORMATION', 'KASIE', '2023-05-05 06:56:13', NULL),
(19, '2644', 'ERSHA NURANJARSARI', 'ADMINISTRATION', 'HRD', 'PEOPLE DEVELOPMENT', 'KASIE', '2023-05-05 06:56:13', NULL),
(20, '2649', 'INDRI AFRIYANTI', 'X', 'INDUSTRIAL SYSTEM DEVELOPMENT', 'INDUSTRIAL SYSTEM DEVELOPMENT', 'KASIE', '2023-05-05 06:56:13', NULL),
(21, '2862', 'SUCIPTO HENING', 'PLANT SERVICE', 'MAINTENANCE', 'MAINTENANCE-2 ASSEMBLING', 'KASIE', '2023-05-05 06:56:13', NULL),
(22, '2863', 'FAHRIZAL FITRA UTAMA', 'X', 'INDUSTRIAL SYSTEM DEVELOPMENT', 'INDUSTRIAL SYSTEM DEVELOPMENT', 'KASIE', '2023-05-05 06:56:13', NULL),
(23, '2939', 'DIYAN LUQMAN NUR FATONI B', 'ENGINEERING', 'QUALITY ASSURANCE', 'INCOMING PART, PDC & CLAIM HANDLING', 'KASIE', '2023-05-05 06:56:13', NULL),
(24, '3012', 'AKHMAD MARDHANI', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING A, MCB & INDUSTRIAL BATT', 'KASIE', '2023-05-05 06:56:13', NULL),
(25, '3014', 'POLIN HASINTONGAN SIMANULLANG', 'PLANT', 'PRODUCTION 1', 'GRID CASTING, PUNCHING & MLR', 'KASIE', '2023-05-05 06:56:13', NULL),
(26, '3305', 'ARI MUSTAKIM', 'ENGINEERING', 'PRODUCT ENGINEERING', 'PRODUCT DEVELOPMENT', 'KASIE', '2023-05-05 06:56:13', NULL),
(27, '3446', 'AGATHA ANGGUN VIDYANITA', 'ADMINISTRATION', 'PROCUREMENT', 'NON COMPONENT', 'KASIE', '2023-05-05 06:56:13', NULL),
(28, '3476', 'SAUT JUMADI SITUMORANG', 'PLANT SERVICE', 'MAINTENANCE', 'UTILITY, WORKSHOP & SPARE PART MANAGEMENT', 'KASIE', '2023-05-05 06:56:13', NULL),
(29, '3477', 'KRESNA BAYU AJI', 'PLANT SERVICE', 'MAINTENANCE', 'MAINTENANCE-1 PLATE PROCESS', 'KASIE', '2023-05-05 06:56:13', NULL),
(30, '3584', 'RINTA SETYO NUGROHO', 'FIN, ACC, MARK & MIS', 'MIS', 'SYSTEM & DEVELOPMENT', 'KASIE', '2023-05-05 06:56:13', NULL),
(31, '3651', 'BAGUS PURNOMO', 'ENGINEERING', 'PROCESS ENGINEERING', 'PROCESS ENG ASSEMBLING', 'KASIE', '2023-05-05 06:56:13', NULL),
(32, '3658', 'RAHMADIAN PRATAMA', 'ENGINEERING', 'QUALITY ASSURANCE', 'PRODUCTION QUALITY CONTROL', 'KASIE', '2023-05-05 06:56:13', NULL),
(33, '3659', 'RYANDANU ALDY YUDHISTIRA', 'ENGINEERING', 'PROCESS ENGINEERING', 'PROCESS ENG PUNCHING & CASTING', 'KASIE', '2023-05-05 06:56:13', NULL),
(34, '3688', 'KHANIFATTURRAHMAH', 'FIN, ACC, MARK & MIS', 'FIN, ACC  & RISK MGT CONT', 'PLANNING & COST CONTROL', 'KASIE', '2023-05-05 06:56:13', NULL),
(35, '3764', 'KIRANA DYAH UTARI KUSUMA PUTRI', 'ADMINISTRATION', 'PROCUREMENT', 'VENDOR DEVELOPMENT', 'KASIE', '2023-05-05 06:56:13', NULL),
(36, '461', 'YUSUF SLAMET PELITA', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING A, MCB & INDUSTRIAL BATT', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(37, '481', 'NARSO', 'PLANT', 'PPIC', 'WAREHOUSE MATERIAL & COMP', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(38, '510', 'PARWADI', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING G ', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(39, '523', 'NUR ALI', 'PLANT SERVICE', 'MAINTENANCE', 'TOOLING-1 PLATE PROCESS', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(40, '524', 'EDI SUWITO', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING G', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(41, '546', 'MUSLIM', 'PLANT', 'PRODUCTION 1', 'GRID CASTING, PUNCHING & MLR', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(42, '551', 'MUSBIKHIN', 'PLANT', 'PRODUCTION 1', 'GRID CASTING, PUNCHING & MLR', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(43, '559', 'PUJIONO (B)', 'ENGINEERING', 'QUALITY ASSURANCE', 'PRODUCTION QUALITY CONTROL', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(44, '569', 'LASONO', 'PLANT', 'PPIC ', 'INV CONTROL FINISHED GOODS & DELIVERY', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(45, '584', 'YANTO', 'PLANT', 'PRODUCTION 1', 'PASTING ', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(46, '639', 'MASRURI', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING G ', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(47, '645', 'ADE SURYANA', 'PLANT', 'PRODUCTION 1', 'PASTING ', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(48, '676', 'AGUS SUROTO', 'PLANT', 'PRODUCTION 1', 'FORMATION', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(49, '692', 'A.RIFAI', 'ADMINISTRATION', 'GA, IR & CSR', 'GA ', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(50, '698', 'IIM ARWISMAN', 'PLANT', 'PRODUCTION 2', 'ASSEMBLING A, MCB & INDUSTRIAL BATT', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(51, '715', 'JOKO SUKO PIRENO', 'FIN, ACC, MARK & MIS', 'MARKETING', 'MARKETING', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(52, '731', 'DEDI RUHIMAT', 'PLANT SERVICE', 'EHS ', 'HEALTH & SAFETY', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(53, '1030', 'DUDY MULYANTO', 'ENGINEERING', 'QUALITY ASSURANCE', 'PRODUCTION QUALITY CONTROL', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(54, '1139', 'FAHMI', 'FIN, ACC, MARK & MIS', 'FIN, ACC  & RISK MGT CONT', 'GEN ACCOUNTING & TAX', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(55, '2185', 'YUDA AJI PRASETYO', 'PLANT', 'PPIC ', 'INV CONTROL FINISHED GOODS & DELIVERY', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(56, '2441', 'WAHYU ADHANTA', 'PLANT', 'PRODUCTION 1', 'PASTING ', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(57, '2523', 'APRILIANTO CANDRA NUGROHO', 'PLANT SERVICE', 'MAINTENANCE', 'UTILITY, WORKSHOP & SPARE PART MANAGEMENT', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(58, '2524', 'BAYU SURYADI', 'PLANT SERVICE', 'MAINTENANCE', 'MAINTENANCE-2 ASSEMBLING', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(59, '2535', 'DIKA PRATAMA', 'PLANT', 'PRODUCTION 2', 'CHARGING', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(60, '2819', 'NONIK SAHAYA CITRA PURNAMASARI', 'PLANT SERVICE', 'EHS ', 'ENVIRONMENT', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(61, '2846', 'RIZKY TOYIBAH', 'PLANT SERVICE', 'MAINTENANCE', 'UTILITY, WORKSHOP & SPARE PART MANAGEMENT', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(62, '3368', 'FREDY SEPTIAN', 'PLANT SERVICE', 'MAINTENANCE', 'MAINTENANCE-1 PLATE PROCESS', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(63, '3384', 'ANDRIANA', 'PLANT SERVICE', 'MAINTENANCE', 'TOOLING-1 PLATE PROCESS', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(64, '3479', 'WAHYU NUR FAUZIA', 'PLANT SERVICE', 'MAINTENANCE', 'TOOLING-2 ASSEMBLING', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(65, '3693', 'IKRAR SATRIA HARTAWAN', 'PLANT SERVICE', 'MAINTENANCE', 'TOOLING-1 PLATE PROCESS', 'KASUBSIE', '2023-05-05 06:56:13', NULL),
(66, '3062', 'DWITA KHAENDY PUTRI ', 'ADMINISTRATION', 'PROCUREMENT', 'NON COMPONENT', 'NON COMPONENT', '2023-05-05 06:56:13', NULL),
(67, '1514', 'DIDIK RUSDIKA', 'ADMINISTRATION', 'PROCUREMENT', 'NON COMPONENT', 'NON COMPONENT', '2023-05-05 06:56:13', NULL),
(68, '2186', 'CHRISMAWAN BAYUAJI ', 'ADMINISTRATION', 'PROCUREMENT', 'NON COMPONENT', 'NON COMPONENT', '2023-05-05 06:56:13', NULL),
(69, '2872', 'IMAN ARI WIBOWO ', 'ENGINEERING', 'PROCESS ENGINEERING', 'PROCESS ENG ASSEMBLING', 'PROCESS ENG ASSEMBLING', '2023-05-05 06:56:13', NULL),
(70, '2517', 'MUHTAR INDRA PRABOWO', 'ENGINEERING', 'PROCESS ENGINEERING', 'PROCESS ENG MCB IB & WET CHARGING', 'PROCESS ENG MCB IB & WET CHARGING', '2023-05-05 06:56:13', NULL),
(71, '4171', 'MUHAMMAD FARRAZ ABRAR', 'ENGINEERING', 'PROCESS ENGINEERING', 'PROCESS ENG ASSEMBLING', 'STAFF 4UP', '2023-05-05 06:56:13', NULL),
(72, '1637', 'AHMAD FADILAH', 'ENGINEERING', 'PROCESS ENGINEERING', 'PROCESS ENG PUNCHING & CASTING', 'PROCESS ENG PUNCHING & CASTING', '2023-05-05 06:56:13', NULL),
(73, '1625', 'SUGIYANTO ', 'PLANT SERVICE', 'EHS ', 'X', 'KADEPT', '2023-05-05 06:56:13', NULL),
(74, '3913', 'IHAN PRATAMA ', 'PLANT SERVICE', 'EHS ', 'ENVIRONMENT', 'ADMIN EHS', '2023-05-05 06:56:13', NULL),
(75, '486', 'SUPRAPTO ', 'PLANT SERVICE', 'MAINTENANCE', 'UTILITY, WORKSHOP & SPARE PART MANAGEMENT', 'UTILITY', '2023-05-05 06:56:13', NULL),
(76, '3515', 'YOGI ', 'ENGINEERING', 'QUALITY ASSURANCE', 'INCOMING PART, PDC & CLAIM HANDLING', 'INCOMING PART, PDC & CLAIM HANDLING', '2023-05-05 06:56:13', NULL),
(77, '2364', 'WIWIN AYU ', 'ENGINEERING', 'PRODUCT ENGINEERING', 'QUALITY ASSURANCE', 'EXPERT TESTING', '2023-05-05 06:56:13', NULL),
(78, '2859', 'SINGGIH M', 'PLANT SERVICE', 'MAINTENANCE', 'UTILITY, WORKSHOP & SPARE PART MANAGEMENT', 'UTILITY', '2023-05-05 06:56:13', NULL),
(79, '3657', 'RIDWAN ABDUL N ', 'PLANT SERVICE', 'MAINTENANCE', 'PPM, IOT & MACHINE LEARNING', 'PPM PLATE PROCESS', '2023-05-05 06:56:13', NULL),
(80, '4062', 'BAGAS ', 'PLANT SERVICE', 'MAINTENANCE', 'MAINTENANCE-2 ASSEMBLING', 'TOOLING-2 ASSEMBLING', '2023-05-05 06:56:13', NULL),
(81, '4111', 'M RIDWAN ARIFIN ', 'PLANT SERVICE', 'MAINTENANCE', 'MAINTENANCE-2 ASSEMBLING', 'MAINTENANCE-2 ASSEMBLING', '2023-05-05 06:56:13', NULL),
(82, '3403', 'MUTHIA DWINTA', 'PLANT SERVICE', 'MAINTENANCE', 'UTILITY, WORKSHOP & SPARE PART MANAGEMENT', 'SPAREPART MANAGEMENT', '2023-05-05 06:56:13', NULL);

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

--
-- Dumping data untuk tabel `tabel_log`
--

INSERT INTO `tabel_log` (`log_id`, `subcont_id`, `log_time`, `log_user`, `log_tipe`, `log_desc`) VALUES
(1, 2, '0000-00-00 00:00:00', 'BSU2524', 2, 'PIC Project by '),
(2, 2, '0000-00-00 00:00:00', 'NSC2819', 3, '|| PIC EHS by '),
(3, 3, '0000-00-00 00:00:00', 'MJO517', 2, 'PIC Project by '),
(4, 3, '0000-00-00 00:00:00', 'NSC2819', 4, '|| PIC EHS by '),
(5, 4, '0000-00-00 00:00:00', 'MJO517', 2, 'PIC Project by '),
(6, 4, '0000-00-00 00:00:00', 'NSC2819', 3, '|| PIC EHS by '),
(7, 5, '0000-00-00 00:00:00', 'MJO517', 2, 'PIC Project by '),
(8, 5, '0000-00-00 00:00:00', 'NSC2819', 4, '|| PIC EHS by '),
(9, 6, '0000-00-00 00:00:00', 'BSU2524', 2, 'PIC Project by '),
(10, 6, '0000-00-00 00:00:00', 'NSC2819', 3, '|| PIC EHS by '),
(11, 7, '0000-00-00 00:00:00', 'SJS3476', 2, 'PIC Project by '),
(12, 9, '0000-00-00 00:00:00', 'ACN2523', 2, 'PIC Project by '),
(13, 9, '0000-00-00 00:00:00', 'nsc2819', 3, '|| PIC EHS by '),
(14, 10, '0000-00-00 00:00:00', 'Dpr2535', 2, 'PIC Project by '),
(15, 10, '0000-00-00 00:00:00', 'AZAE1617', 3, '|| PIC EHS by '),
(16, 11, '0000-00-00 00:00:00', 'IPR3913', 2, 'PIC Project by '),
(17, 11, '0000-00-00 00:00:00', 'AZAE1617', 3, '|| PIC EHS by '),
(18, 12, '0000-00-00 00:00:00', 'IPR3913', 2, 'PIC Project by '),
(19, 12, '0000-00-00 00:00:00', 'AZAE1617', 3, '|| PIC EHS by '),
(20, 13, '0000-00-00 00:00:00', 'MJO517', 2, 'PIC Project by '),
(21, 13, '0000-00-00 00:00:00', 'AZAE1617', 3, '|| PIC EHS by '),
(22, 15, '0000-00-00 00:00:00', 'CTP2593', 2, 'PIC Project by '),
(23, 15, '0000-00-00 00:00:00', 'AZAE1617', 3, '|| PIC EHS by '),
(24, 14, '0000-00-00 00:00:00', 'ACN2523', 2, 'PIC Project by '),
(25, 14, '0000-00-00 00:00:00', 'nsc2819', 3, '|| PIC EHS by '),
(26, 20, '0000-00-00 00:00:00', 'ipr3913', 2, 'PIC Project by '),
(27, 20, '0000-00-00 00:00:00', 'NSC2819', 3, '|| PIC EHS by '),
(28, 18, '0000-00-00 00:00:00', 'IPR3913', 2, 'PIC Project by '),
(29, 21, '0000-00-00 00:00:00', 'ipr3913', 2, 'PIC Project by '),
(30, 21, '0000-00-00 00:00:00', 'nsc2819', 3, '|| PIC EHS by '),
(31, 32, '0000-00-00 00:00:00', 'EAK1697', 2, 'PIC Project by '),
(32, 30, '0000-00-00 00:00:00', 'KBA3477', 2, 'PIC Project by '),
(33, 29, '0000-00-00 00:00:00', 'DRU1514', 2, 'PIC Project by '),
(34, 33, '0000-00-00 00:00:00', 'ray3659', 2, 'PIC Project by '),
(35, 38, '0000-00-00 00:00:00', 'ipr3913', 2, 'PIC Project by '),
(36, 38, '0000-00-00 00:00:00', 'AZAE1617', 3, '|| PIC EHS by '),
(37, 27, '0000-00-00 00:00:00', 'RPR3658', 2, 'PIC Project by '),
(38, 41, '0000-00-00 00:00:00', 'KBA3477', 2, 'PIC Project by '),
(39, 41, '0000-00-00 00:00:00', 'AZAE1617', 3, '|| PIC EHS by '),
(40, 42, '0000-00-00 00:00:00', 'CTP2593', 2, 'PIC Project by '),
(41, 42, '0000-00-00 00:00:00', 'AZAE1617', 3, '|| PIC EHS by '),
(42, 43, '0000-00-00 00:00:00', 'BPU3651', 2, 'PIC Project by '),
(43, 43, '0000-00-00 00:00:00', 'AZAE1617', 3, '|| PIC EHS by '),
(44, 46, '0000-00-00 00:00:00', 'RPR3658', 2, 'PIC Project by '),
(45, 46, '0000-00-00 00:00:00', 'nsc2819', 3, '|| PIC EHS by '),
(46, 44, '0000-00-00 00:00:00', 'ipr3913', 2, 'PIC Project by '),
(47, 45, '0000-00-00 00:00:00', 'bpu3651', 2, 'PIC Project by '),
(48, 47, '0000-00-00 00:00:00', 'KBA3477', 2, 'PIC Project by '),
(49, 47, '0000-00-00 00:00:00', 'AZAE1617', 3, '|| PIC EHS by '),
(50, 44, '0000-00-00 00:00:00', 'NSC2819', 3, '|| PIC EHS by ');

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
(1, 'RSL496', '9999', 3, 1, '2023-05-05 07:02:45', NULL),
(2, 'MUL0412', '12345', 1, 2, '2023-05-05 07:02:45', NULL),
(3, 'NYN485', '12345', 1, 3, '2023-05-05 07:02:45', NULL),
(4, 'MJO517', '12345', 1, 4, '2023-05-05 07:02:45', NULL),
(5, 'SUU563', '12345', 1, 5, '2023-05-05 07:02:45', NULL),
(6, 'CNU1095', '12345', 1, 6, '2023-05-05 07:02:45', NULL),
(7, 'RWN1257', '12345', 1, 7, '2023-05-05 07:02:45', NULL),
(8, 'ARA1361', '12345', 1, 8, '2023-05-05 07:02:45', NULL),
(9, 'EAM1391', '12345', 1, 9, '2023-05-05 07:02:45', NULL),
(10, 'AZAE1617', '2122', 2, 10, '2023-05-05 07:02:45', NULL),
(11, 'AAP1618', '12345', 1, 11, '2023-05-05 07:02:45', NULL),
(12, 'EAK1697', '12345', 1, 12, '2023-05-05 07:02:45', NULL),
(13, 'NAN1815', '12345', 1, 13, '2023-05-05 07:02:45', NULL),
(14, 'ASY1971', '12345', 1, 14, '2023-05-05 07:02:45', NULL),
(15, 'PFY2331', '12345', 1, 15, '2023-05-05 07:02:45', NULL),
(16, 'LUS2346', '12345', 1, 16, '2023-05-05 07:02:45', NULL),
(17, 'KRI2526', '12345', 1, 17, '2023-05-05 07:02:45', NULL),
(18, 'CTP2593', '12345', 1, 18, '2023-05-05 07:02:45', NULL),
(19, 'ENU2644', '12345', 1, 19, '2023-05-05 07:02:45', NULL),
(20, 'IAF2649', '12345', 1, 20, '2023-05-05 07:02:45', NULL),
(21, 'SHE2862', '12345', 1, 21, '2023-05-05 07:02:45', NULL),
(22, 'FFU2863', '12345', 1, 22, '2023-05-05 07:02:45', NULL),
(23, 'DLN2939', '12345', 1, 23, '2023-05-05 07:02:45', NULL),
(24, 'AMA3012', '12345', 1, 24, '2023-05-05 07:02:45', NULL),
(25, 'PHS3014', '12345', 1, 25, '2023-05-05 07:02:45', NULL),
(26, 'AMU3305', '12345', 1, 26, '2023-05-05 07:02:45', NULL),
(27, 'AAV3346', '12345', 1, 27, '2023-05-05 07:02:45', NULL),
(28, 'SJS3476', '12345', 1, 28, '2023-05-05 07:02:45', NULL),
(29, 'KBA3477', '12345', 1, 29, '2023-05-05 07:02:45', NULL),
(30, 'RSN3584', '12345', 1, 30, '2023-05-05 07:02:45', NULL),
(31, 'BPU3651', '12345', 1, 31, '2023-05-05 07:02:45', NULL),
(32, 'RPR3658', '12345', 1, 32, '2023-05-05 07:02:45', NULL),
(33, 'RAY3659', '12345', 1, 33, '2023-05-05 07:02:45', NULL),
(34, 'KHA3688', '12345', 1, 34, '2023-05-05 07:02:45', NULL),
(35, 'KDU3764', '12345', 1, 35, '2023-05-05 07:02:45', NULL),
(36, 'YSP0461', '12345', 1, 36, '2023-05-05 07:02:45', NULL),
(37, 'NRS0481', '12345', 1, 37, '2023-05-05 07:02:45', NULL),
(38, 'PWD0510', '12345', 1, 38, '2023-05-05 07:02:45', NULL),
(39, 'NAL0523', '12345', 1, 39, '2023-05-05 07:02:45', NULL),
(40, 'ESU0524', '12345', 1, 40, '2023-05-05 07:02:45', NULL),
(41, 'MUS0546', '12345', 1, 41, '2023-05-05 07:02:45', NULL),
(42, 'MUS0551', '12345', 1, 42, '2023-05-05 07:02:45', NULL),
(43, 'PJO0559', '12345', 1, 43, '2023-05-05 07:02:45', NULL),
(44, 'LSN0569', '12345', 1, 44, '2023-05-05 07:02:45', NULL),
(45, 'YNT0584', '12345', 1, 45, '2023-05-05 07:02:45', NULL),
(46, 'MSR0639', '12345', 1, 46, '2023-05-05 07:02:45', NULL),
(47, 'ASU645', '12345', 1, 47, '2023-05-05 07:02:45', NULL),
(48, 'ASU676', '12345', 1, 48, '2023-05-05 07:02:45', NULL),
(49, 'ARI692', '12345', 1, 49, '2023-05-05 07:02:45', NULL),
(50, 'IIM0698', '12345', 1, 50, '2023-05-05 07:02:45', NULL),
(51, 'JSP0715', '12345', 1, 51, '2023-05-05 07:02:45', NULL),
(52, 'DRU0731', 'cek22', 2, 52, '2023-05-05 07:02:45', NULL),
(53, 'DMU1030', '12345', 1, 53, '2023-05-05 07:02:45', NULL),
(54, 'FAH1139', '12345', 1, 54, '2023-05-05 07:02:45', NULL),
(55, 'YAP2185', '12345', 1, 55, '2023-05-05 07:02:45', NULL),
(56, 'WAD2441', '12345', 1, 56, '2023-05-05 07:02:45', NULL),
(57, 'ACN2523', '12345', 1, 57, '2023-05-05 07:02:45', NULL),
(58, 'BSU2524', '12345', 1, 58, '2023-05-05 07:02:45', NULL),
(59, 'DPR2535', '12345', 1, 59, '2023-05-05 07:02:45', NULL),
(60, 'NSC2819', '123123', 2, 60, '2023-05-05 07:02:45', NULL),
(61, 'RTO2846', '12345', 1, 61, '2023-05-05 07:02:45', NULL),
(62, 'FSE3368', '12345', 1, 62, '2023-05-05 07:02:45', NULL),
(63, 'ADR3384', '12345', 1, 63, '2023-05-05 07:02:45', NULL),
(64, 'WNF3479', '12345', 1, 64, '2023-05-05 07:02:45', NULL),
(65, 'ISH3693', '12345', 1, 65, '2023-05-05 07:02:45', NULL),
(66, 'DKP3062', '12345', 1, 66, '2023-05-05 07:02:45', NULL),
(67, 'DRU1514', '12345', 1, 67, '2023-05-05 07:02:45', NULL),
(68, 'CBA2186', '12345', 1, 68, '2023-05-05 07:02:45', NULL),
(69, 'IAW2872', '12345', 1, 69, '2023-05-05 07:02:45', NULL),
(70, 'MIP3517', '12345', 1, 70, '2023-05-05 07:02:45', NULL),
(71, 'MFA4171', '12345', 1, 71, '2023-05-05 07:02:45', NULL),
(72, 'AFA1637', '12345', 1, 72, '2023-05-05 07:02:45', NULL),
(73, 'SGY1625', 'cek33', 2, 73, '2023-05-05 07:02:45', NULL),
(74, 'IPR3913', '12345', 1, 74, '2023-05-05 07:02:45', NULL),
(75, 'SRP0486', '12345', 1, 75, '2023-05-05 07:02:45', NULL),
(76, 'YG3515', '12345', 1, 76, '2023-05-05 07:02:45', NULL),
(77, 'WWA2364', '12345', 1, 77, '2023-05-05 07:02:45', NULL),
(78, 'SGM2859', '12345', 1, 78, '2023-05-05 07:02:45', NULL),
(79, 'RAN3657', '12345', 1, 79, '2023-05-05 07:02:45', NULL),
(80, 'BMH4062', '12345', 1, 80, '2023-05-05 07:02:45', NULL),
(81, 'MRN4111', '12345', 1, 81, '2023-05-05 07:02:45', NULL),
(82, 'MTD3403', '12345', 1, 82, '2023-05-05 07:02:45', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `iks`
--
ALTER TABLE `iks`
  MODIFY `id_subcont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_krywn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

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
