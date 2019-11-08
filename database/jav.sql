-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 10:48 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jav`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal`, `judul`, `keterangan`, `foto`, `fk_desawisata`) VALUES
(1, '2019-02-01', 'Upacara skaten', 'akan diadakn upacara sekaten yang jatuh pada taggal 1 Frebruari 2019', 'images.jpg', 1),
(2, '2019-01-31', 'Reog Ponorogo', 'Desa sambi akan merayakan ulang tahunnya. dan akan menampilkan Reog yang asli dari ponorogo Jawa timur', 'sejumlah-penari-menampilkan-kesenian-terkenal-reog-ponorogo1499925621.jpg', 2),
(3, '2019-01-18', 'Tari Lesung', 'akan diadakan tari lesung untuk memperingati hari panen di desa wisata tanjung', 'Bendrong_Lesung01.jpg', 3),
(4, '2019-02-03', 'Sepeda santai', 'Bersepeda santai di desa wisata tembi. dapatkan doorprice menarik 1 sepeda motor, 1kulkas, 1 tv  turut juga dihadiri oleh bupati bantul', 'wisata-sepeda-di-bali.jpg', 1),
(5, '2019-01-30', 'Upaacara adat', 'akan diadakan upacara adat', '105435_labuhanmerapi1.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `konten`, `author`, `tanggal`, `foto`, `fk_desawisata`) VALUES
(1, 'Peresmian Desa Wisata Tembi', 'Desawisata Tembi Telah diresmikan Oleh Gubernur DIY', 'Bagus Pogar', '2019-01-17', 'logocoding.png', 1),
(2, 'Desa wisata sambi dikunjungi gub', 'desa wisata sambi dikunjungi gubernur diy. gubernur Diy  ingin  tahu proses jalannya desa wisata tersebut', '', '2019-01-17', 'Rambu_stop.jpg', 2),
(3, 'Peresmian Desa Wisata Tanjung', 'peresmian desawisata tanjung', 'Bagus Pogar', '2019-03-05', 'Rambu_stop1.jpg', 3),
(5, 'Banyak Wahana baru di desa tanju', 'Desa wisata Tanjung berlokasi kurang lebih 5 KM dari Monumen Jogja Kembali (Monjali) atau tepatnya berada di Desa Dono Harjo, Kecamatan Ngaglik, Kabupaten Sleman. Desa wisata Tanjung diresmikan pada tahun 2001, dan sejak saat itu banyak wisatawan lokal maupun mancanegara yang datang ke desa ini terutama pada musim libur sekolah.\r\n\r\nSelain memiliki potensi wisata alam pedesaan, Desa Tanjung juga menawarkan wisata kesenian tradisional, budaya, dan kerajinan atau home industri. Satu lagi yang merupakan ciri khas Desa Tunjung adalah adanya rumah Joglo bersejarah yang diberi nama Joglo Tanjung. Konon rumah Joglo yang kini berumur lebih dari 200 tahun ini dulunya milik lurah desa setempat.\r\n\r\nJoglo Tanjung mengalami 2 kali renovasi. Meski lantai tanah rumah Joglo kini telah direnovasi menjadi lantai keramik, namun secara keseluruhan bagian dan ornament-ornament kuno yang ada masih terjaga dengan baik. Beberapa bagian rumah Joglo antara lain pendopo, pringgitan, ndalem longkangan, pawon, dan garasi kereta dan kandang kuda yang saat ini berubah menjadi tempat penyimpanan gamelan.\r\n\r\nDesa Tanjung memiliki areal persawahan yang cukup luas yang juga menjadi potensi wisata desa ini. Pengunjung dapat belajar dan turun langsung ke sawah untuk belajar bagaimana mengolah tanah, menanam, memanen, sampai hasil panen tersebut tersaji di meja makan.\r\n\r\nPotensi kesenian di Desa Tanjung diantaranya Jathilan, Sholawatan, Karawitan, Tari Angguk Putri, dan Tari Klasik. Untuk potensi kerajinan atau home industry yang bisa diikuti oleh pengunjung antara lain pembuatan mainan anak, proses memasak makanan tradisional, dan pembuatan batik. Sedangkan untuk upacara adat yang biasa diselenggerakan di desa antara lain Mantenan, Sunatan, Kenduri, dan Wiwid.\r\n\r\nAkses menuju Desa Tanjung sangat mudah. Pengunjung bisa ambil rute Monjali ke utara. Sampai di KM 11, ambil kiri atau ke arah Jalan Magelang, sekitar 950 meter akan menemukan Desa Tanjung.', 'Aldhan Biuzar', '2019-01-30', 'bola.jpg', 3),
(6, 'Peresmian', 'Peresmian desawisata', 'Bagus Pogar', '2019-01-31', 'logocoding1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_page`
--

CREATE TABLE `config_page` (
  `id` int(11) NOT NULL,
  `fk_desawisata` int(11) NOT NULL,
  `template` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdomain` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_wa` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sosial_facebook` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sosial_instagram` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sosial_twitter` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config_page`
--

INSERT INTO `config_page` (`id`, `fk_desawisata`, `template`, `subdomain`, `short_about`, `telp`, `telp_wa`, `email`, `sosial_facebook`, `sosial_instagram`, `sosial_twitter`, `logo_img`, `banner_img`) VALUES
(1, 1, 'template2', 'tembi2233', '1', '3', '1', '1', '1', '1', '1', 'Madao_Smoking1.png', 'one-piece-hd-wallpapers_53749122.jpg'),
(4, 2, '', '', '', '', '', '', '', '', '', '', ''),
(6, 3, 'template3', 'tanjung', '', '087815316315', '', 'aldansorry@gmail.com', '', '', '', '', 'bola.jpg'),
(7, 4, 'template2', 'SumberMaron', 'Atraksi yang sangat favorit di Sumber Maron terletak di river tubing ini. Di tempat ini para pengunjung dimanjakan dengan mengapung menggunakan ban mengikuti aliran sungai berdua maupun sendirian.', '087866677777', '087866677777', 'maron5@gmail.com', 'aa', 'sss', 'ssss', 'sumber-maron-malang-2019.jpg', '2018-05-06sumber-maron.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `desawisata`
--

CREATE TABLE `desawisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `_lat` double NOT NULL,
  `_long` double NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desawisata`
--

INSERT INTO `desawisata` (`id`, `nama`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `deskripsi`, `_lat`, `_long`, `foto`) VALUES
(1, 'Desa wisata Tembi', 'Jalan Parangtritis km 8,5, Tembi, Timbulharjo, Sewon, Mriyan, Timbulharjo, Sewon, Bantul, Daerah Ist', 'Tembi', 'Timbulharjo', 'Bantul', 'Desa wisata ini sangat terkenal di malang menjadi salah satu destinasi para pengunjung', -7.84435, 110.34329, ''),
(2, 'Desa wisata Sambi', 'Jl. Kaliurang KM. 19.2, Dusun Sambi, Desa Pakembinangun, Kec. Pakem, Purwodadi, Pakembinangun, Slema', 'Pakembinangun', 'Pakem', 'Sleman', 'Desa Wisata Sambi adalah merupakan desa alami asli Jogja, yang terletak di jalan Kaliurang Km. 19,2 padukuhan Sambi desa Pakembinangun Kec. Pakem Kabupaten Sleman DIY. Desa Wisata Sambi memiliki beragam potensi wisata yang menarik untuk dikunjungi oleh wisatawan. Desa wisata yang berada cukup dekat dengan Gunung Merapi ini, menghadirkan panorama alam yang sangat indah untuk dinikmati sehingga dapat memberikan kesegaran dan ketentraman hati, panorama alam pesawahan dan pepohonan yang rindang serta kejernihan airnya juga rumah-rumah adat seperti joglo, limasan, simon, dengan halaman yang luas, bisa dipakai media bermain sambil menikmati sejuknya udara serta suasana desa alami asli Jogja.', -7.774297, 110.375128, ''),
(3, 'Desa Wisata Tanjung', ' Tanjung, Donoharjo, Ngaglik, Ponason, Donoharjo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yog', 'Donoharjo', 'Sleman', 'Sleman', 'Desa wisata dengan wahana membajak sawah & melakukan aktivitas pedesaan.', -7.84435, 110.34329, ''),
(4, 'Sumber Maron', 'Jl. Raya Gondang Legi, Krajan Dua, Gondanglegi Kulon, Kec. Gondanglegi, Malang, Jawa Timur 65174', 'Krajan Dua', 'Gondang Legi', 'Malang', 'Atraksi yang sangat favorit di Sumber Maron terletak di river tubing ini. Di tempat ini para pengunjung dimanjakan dengan mengapung menggunakan ban mengikuti aliran sungai berdua maupun sendirian.', 4, -4, '2018-05-06sumber-maron.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nourut` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `foto`, `nourut`, `ukuran`, `fk_desawisata`) VALUES
(1, 'Pengunjung belajar batik di desa tembi', 'desa-wisata-tembi_20180919_125221.jpg', '1', '2', 1),
(3, 'Wisata memandangi persawahan', 'download_(1).jpg', '3', '3', 3),
(4, 'Pengunjung belajar bercocok tanam ', 'tanjung.jpg', '4', '4', 3),
(5, 'Sepeda santai', 'wisata_sepeda_onthel_di_pedesaan_borobudur.jpg', '5', '4', 1),
(6, 'Wisatawan sedang membajak sawah', 'download_(2).jpg', '1', '2', 2),
(7, 'Belajar menanam Padi', '574388_620.jpg', '2', '3', 2),
(8, 'Rafting', '0800031karo-rafting780x390.JPG', '4', '3', 2),
(9, 'Peternakan Desa Sambi', '09122016014949.jpg', '5', '3', 2),
(10, 'Bercocok Tanam', '574388_6201.jpg', '3', '3', 1),
(11, 'Lesung', 'Bendrong_Lesung01.jpg', '3', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `no` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `fk_penginapan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `no`, `kategori`, `foto`, `fasilitas`, `status`, `fk_penginapan`) VALUES
(1, '1', '2', '', '2 bed, kamar mandi dalam, tv, kulkas, almari, meja, kolam renang ,AC', 'Ada', 1),
(2, '2', '1', 'IMG_7965.jpg', 'Bed 3, Km dalam, tv, kipas angin', 'Ada', 1),
(3, '3', '2', 'business-sambiresortspa-hotel-sleman8733_l.jpg', 'ac tv kamarmandi kolam renang, pemandian Air panas, SPA, pijat refleksi', 'Ada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `keterangan`, `foto`, `fk_desawisata`) VALUES
(1, 'Wisata Alam', 'Wisata Alam', 'air-terjun-sri-gethuk.jpg', 1),
(2, 'Petualangan', 'Outbond di desa wisata Sambi dikhususkan di Ledok Sambi yang dekat dengan lokasi Kali Kuning. Fasilitas yang terdapat di Ledok Sambi ini antara lain arena outbond dengan fasilitas flying fox, meniti tali dan lain-lain.', 'IMG-20120322-WA0001-732946.jpg', 2),
(3, 'Pertanian', 'Lahan pertanian yang membentang di desa wisata Sambi merupakan objek yang menarik. Wisatawan dapat mempraktekan secara langsung kegiatan-kegiatan pertanian seperti menanam padi, membajak sawah dan belajar budidaya jamur.', 'download_(2).jpg', 2),
(7, 'Wisata Alam', 'Di wisata ini kita dapat mempelajari tentang alam ', 'aaa2.png', 3),
(13, 'Edukasi', 'Kita bisa belajar sambil bermain', 'bola7.jpg', 3),
(14, 'Arung Jeram', 'Mengarungi sungai dengan keseruan', 'stadium.jpg', 3),
(15, 'Peternakan', 'Peternakan di desa wisata Sambi berupa peternakan sapi perah. Wisatawan dapat mempraktekan cara memerah susu sapi secara tradisional. Wisatawan juga dapat belajar membudidayakan sapi perah. Wisatawan juga dapat menangkap ikan tanpa bantuan alat di sawah.', '09122016014949.jpg', 2),
(16, 'Panorama', 'Panorama desa yang sejuk, asri dan nyaman menjadi daya tarik tersendiri bagi desa wisata Sambi. Wisatawan dapat berjalan menyusuri desa (tracking) dengan dipandu olah pemandu setempat. Tracking dapat dilakukan sesuai permintaan wisatawan', 'sambi_panorama.jpg', 2),
(17, 'Pertanian', 'Pertanian', '574388_620.jpg', 1),
(18, 'Kesenian', 'Kesenian', 'belajar-gamelan-desa-wisata-tembi.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editedby` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama`, `datecreated`, `createdby`, `editedby`) VALUES
(1, 'Super Admin', '2019-01-14 08:55:41', NULL, NULL),
(2, 'Admin', '2019-01-14 08:55:49', NULL, NULL),
(3, 'Operator', '2019-01-14 08:55:58', NULL, NULL),
(4, 'Admin Desawisata', '2019-01-14 09:11:01', NULL, NULL),
(5, 'Operator Kamar', '2019-01-14 09:13:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id`, `nama`, `keterangan`, `alamat`, `foto`, `fk_desawisata`) VALUES
(1, 'Hotel Tembi', 'Hotel sambi dengan fasilitas bintang 4', 'Desa Wisata Sambi', 'Hotel_sambi.JPG', 1),
(2, 'Tembi House', 'Tembi House', 'Desa Wisata Tembi', 'desa-wisata-tembi-e1506527257772.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `domisili` enum('lokal','regional','internasional') COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` enum('anak','remaja','dewasa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `tanggal`, `domisili`, `umur`, `jeniskelamin`, `fk_desawisata`) VALUES
(1, '2010-01-24 09:20:31', 'lokal', 'anak', 'L', 1),
(2, '2019-01-24 09:28:55', 'lokal', 'anak', 'L', 1),
(3, '2019-01-24 09:35:11', 'lokal', 'anak', 'L', 1),
(4, '2019-01-24 09:35:18', 'regional', 'remaja', 'L', 1),
(5, '2019-01-24 09:35:26', 'internasional', 'dewasa', 'L', 1),
(6, '2019-01-24 09:39:00', 'internasional', 'dewasa', 'L', 1),
(7, '2019-01-24 09:39:06', 'lokal', 'anak', 'L', 1),
(8, '2019-01-24 09:39:10', 'regional', 'dewasa', 'L', 1),
(9, '2019-01-24 09:39:16', 'internasional', 'dewasa', 'L', 1),
(10, '2019-01-24 09:39:21', 'lokal', 'dewasa', 'L', 1),
(11, '2019-01-24 09:42:40', 'regional', 'anak', 'L', 1),
(12, '2019-01-24 09:44:49', 'regional', 'anak', 'L', 1),
(13, '2019-01-24 09:45:16', 'regional', 'remaja', 'P', 1),
(14, '2019-01-24 09:45:31', 'regional', 'anak', 'P', 1),
(15, '2019-01-24 09:45:40', 'regional', 'anak', 'L', 1),
(16, '2019-01-24 09:46:44', 'lokal', 'anak', 'P', 1),
(17, '2019-01-24 09:47:00', 'regional', 'remaja', 'L', 1),
(18, '2019-01-24 09:47:07', 'regional', 'remaja', 'L', 1),
(19, '2019-01-24 09:47:09', 'regional', 'dewasa', 'L', 1),
(20, '2019-01-24 09:48:25', 'regional', 'remaja', 'L', 1),
(21, '2019-01-24 09:48:34', 'regional', 'dewasa', 'L', 1),
(22, '2019-01-24 09:48:41', 'regional', 'remaja', 'L', 1),
(23, '2019-01-24 09:48:45', 'regional', 'remaja', 'L', 1),
(24, '2019-02-24 09:48:49', 'regional', 'anak', 'L', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telp` int(14) NOT NULL,
  `rating` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL,
  `datecraeted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `nama`, `email`, `telp`, `rating`, `keterangan`, `foto`, `fk_desawisata`, `datecraeted`) VALUES
(1, 'Bagus Pogar', 'baguspogar@gmail.com', 2147483647, 1, 'desanya sangat bagus', '1.jpg', 1, '2019-01-24 13:58:07'),
(2, 'Budi hariyanto', 'budihariyanto@gmail.', 2147483647, 4, 'Pemandangannya susasana desanya sangat indah wajib untuk di kunjungi', 'dw_sambi_(1)_(Copy).jpg', 2, '2019-01-24 13:58:07'),
(3, 'Yahya Hartanto', 'yahya89720837', 2147483647, 5, 'Desawisata Tanjung cocok untuk beredukasi bagi keluarga , bagaimana caranya bercocok tanam', '86d27-desa-tanjung.jpg', 3, '2019-01-24 13:58:07'),
(4, 'a', 'b@c.d', 0, 3, 'f', '', 1, '2019-01-25 10:39:00'),
(5, 'aldhan', 'aldansorry@gmail.com', 89992298, 3, 'Asri ramah', '', 1, '2019-01-31 09:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `nama`, `alamat`, `keterangan`, `jenis`, `foto`, `fk_desawisata`) VALUES
(1, 'Jendela Jogja', 'Jalan Gedong Kuning A No.161, Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198', 'Toko Oleh oleh khas jogja', 'Sovenir', '1145527JENDELA-JOGJA-5780x390.jpg', 1),
(2, 'Wong batik', 'Jl. HOS Cokroaminoto No.149, Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55244', 'Pusat oleh oleh jogja dan merchandise khas jogja', 'Sovenir', 'download.jpg', 2),
(3, 'Jogja Souvenir', 'Suryatmajan, Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55213', 'Toko Souvenir Terlengkap di Yogyakarta', 'Sovenir', 'souvenir.jpg', 3),
(5, 'Bakso Mangkok', 'Desa sambi Yogyakrta', 'Bakso mangkok yang sangat viral ', 'Oleh - oleh', 'p057q4df1.jpg', 2),
(6, 'Mie Lethek Mbah Mendes', 'Jalan Margo Utomo No.22, Gowongan,', 'Lethek atau letek berarti kotor. Namun nama itu disematkan bukan karena mie-nya kotor, melainkan warnanya yang hitam pekat. Variannya beragam, ada yang rebus, goreng, serta dicampur dengan nasi goreng. Aroma olahan bumbu menyeruak begitu bawang putih, kemiri, merica, dan garam mulai ditumis. Masakan makin lezat dengan tambahan suwir daging ayam jago kampung.', 'Oleh - oleh', '6aa4db55-1430-4fdc-b83f-2ad97fd33b78.jpg', 1),
(7, 'Ingkung Mbah Kentol', 'Desa Wisata Tembi', 'Jalan-jalan ke Kabupaten Bantul? Jangan lupa mencicipi Ingkung Ayam di warung Mbah Kentol. Makanan ini berupa ayam kampung utuh yang diikat dan dimasukkan dalam kreneng (anyaman bambu), kemudian dimasak menggunakan bumbu rempah. Konon, cara memasak ini memiliki filosofi tersendiri, yaitu memupuk rasa persatuan dan saling membantu antara warga satu dengan yang lain. Penasaran dengan kuliner yang disajikan bersama lalapan ini, kan?', 'Oleh - oleh', 'Ingkung-Mbah-Kentol.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL,
  `ket_status` varchar(64) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_level` int(11) NOT NULL,
  `fk_desawisata` int(11) DEFAULT NULL,
  `fk_penginapan` int(11) DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(32) DEFAULT NULL,
  `editedby` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `telp`, `email`, `username`, `password`, `status`, `ket_status`, `foto`, `fk_level`, `fk_desawisata`, `fk_penginapan`, `datecreated`, `createdby`, `editedby`) VALUES
(1, 'superadmin', 'superadmin', 'superadmin', 'superadmin', '1', 'c4ca4238a0b923820dcc509a6f75849b', 1, 'superadmin', 'superadmin.png', 1, NULL, NULL, '2019-01-14 09:16:22', NULL, NULL),
(2, 'desa1', 'desa1', '0000', 'desa1', 'desa123', '3cf9be6f2f317279cc0a8207a77bd0db', 1, NULL, 'logoaldansorry2.png', 4, 1, NULL, '2019-01-22 09:29:01', NULL, NULL),
(6, '1', '1', '1', '1', '111111', '96e79218965eb72c92a549dd5a330112', 1, NULL, 'aaa.png', 1, 1, NULL, '2019-01-29 09:11:46', NULL, NULL),
(7, 'Tanjung', 'Tanjung', '0757557557557', 'bagus.pogar@gmail.co', '123456', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, 'bola.jpg', 2, 3, NULL, '2019-01-30 11:27:07', NULL, NULL),
(8, 'aldhan', 'Lumajang', '089911919', 'aldansorry@gmail.com', 'aldhan123', '9573deb4cce6dc87332fe330eda3ecac', 1, NULL, 'aaa1.png', 2, 1, NULL, '2019-01-31 09:06:54', NULL, NULL),
(9, 'Sumber Maron', 'Jl. Raya Gondang Legi, Krajan Dua, Gondanglegi Kul', '087866677777', 'maron5@gmail.com', 'sumermaron', 'e4e132640b4c06dccd0e22d58ea93154', 1, NULL, 'tempat-wisata-sumber-maron-malang-Wahyu-Pratomo.jpg', 4, 4, NULL, '2019-11-08 16:45:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(20) NOT NULL,
  `jamkunjung` varchar(32) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL,
  `fk_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `keterangan`, `harga`, `jamkunjung`, `foto`, `fk_desawisata`, `fk_kategori`) VALUES
(1, 'Wisata alam Arum jeram', 'Arum jeram', 10000000, '10:00 - 20:00', '0800031karo-rafting780x390.JPG', 1, 1),
(2, 'Outboound', 'Outbond di desa wisata Sambi dikhususkan di Ledok Sambi yang dekat dengan lokasi Kali Kuning. Fasilitas yang terdapat di Ledok Sambi ini antara lain arena outbond dengan fasilitas flying fox, meniti tali dan lain-lain.', 250000, '08.00-17.00', 'DSC0019022.jpg', 2, 2),
(3, 'Bercocok Tananm', 'Wisata Persawahan untuk bercocok tanam. merupkana salah satu wisata edukasi di desa wisata tanjung', 20000, '08.00', '574388_620.jpg', 3, 3),
(4, 'Air tejun', 'Air tejun', 300000, '08.00-17.00', 'Wisata_Air_Terjun_di_Jogja.jpg', 3, 1),
(5, 'Kolam renang Desa Tembi', 'Salah satu wisata di Desa wisata tembi, yaitu  kolam renang desa tembi', 10000, '09.00-19.00', 'Kolam-Renang-Tembi-Jogja.jpg', 1, 1),
(6, 'Rumah Budaya Desa Wisata tembi', 'Salah satu wisata di desa tembi', 15000, '09.00-19.00', 'images_(1).jpg', 1, 3),
(7, 'Tanam PADI-TK & PlygroupMinimal 30 orang', 'Beragam permainanTangkap ikan atau flying foxMakan & snack 1 kaliFasilitator', 65000, '08.00-17.00', '574388_6201.jpg', 2, 3),
(8, 'Perah susu sapi', 'Bisa belajar memerah susu. mengehtahui bagaimana perawatan sapi perah. guide', 30000, '08.00-17.00', '09122016014949.jpg', 2, 15),
(9, 'View Sambi', 'Panorama desa yang sejuk, asri dan nyaman menjadi daya tarik tersendiri bagi desa wisata Sambi. Wisatawan dapat berjalan menyusuri desa (tracking) dengan dipandu olah pemandu setempat. Tracking dapat dilakukan sesuai permintaan wisatawan.', 200000, '08.00-17.00', 'Sambiiii.jpg', 2, 16),
(10, 'Gamelan', 'Desa wisata Tembi Terdapat Gamelan', 30000, '08.00-17.00', 'belajar-gamelan-desa-wisata-tembi.jpg', 1, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisatas` (`fk_desawisata`);

--
-- Indexes for table `config_page`
--
ALTER TABLE `config_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subdomain` (`subdomain`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `desawisata`
--
ALTER TABLE `desawisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_penginapan` (`fk_penginapan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_levle` (`fk_level`),
  ADD KEY `fk_desa_wisata` (`fk_desawisata`),
  ADD KEY `fk_penginapan` (`fk_penginapan`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`),
  ADD KEY `fk_kategori` (`fk_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `config_page`
--
ALTER TABLE `config_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `desawisata`
--
ALTER TABLE `desawisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Constraints for table `config_page`
--
ALTER TABLE `config_page`
  ADD CONSTRAINT `config_page_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`fk_penginapan`) REFERENCES `penginapan` (`id`);

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Constraints for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD CONSTRAINT `penginapan_ibfk_2` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Constraints for table `toko`
--
ALTER TABLE `toko`
  ADD CONSTRAINT `toko_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_level`) REFERENCES `level` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`fk_penginapan`) REFERENCES `penginapan` (`id`);

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`),
  ADD CONSTRAINT `wisata_ibfk_2` FOREIGN KEY (`fk_kategori`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
