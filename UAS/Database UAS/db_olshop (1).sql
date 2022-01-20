-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 04:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `ID_Customer` int(11) NOT NULL,
  `Nama_Customer` varchar(100) NOT NULL,
  `Alamat_Customer` text NOT NULL,
  `NoHP_Customer` varchar(20) NOT NULL,
  `Email_Customer` varchar(50) NOT NULL,
  `Sumber_Customer` varchar(20) NOT NULL,
  `Sumber_Customer_2` varchar(20) NOT NULL,
  `Sumber_Customer_3` varchar(20) NOT NULL,
  `Saran_Customer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`ID_Customer`, `Nama_Customer`, `Alamat_Customer`, `NoHP_Customer`, `Email_Customer`, `Sumber_Customer`, `Sumber_Customer_2`, `Sumber_Customer_3`, `Saran_Customer`) VALUES
(8, 'Muhammad Ihsan Maulana', 'Jalan elang', '0851778899', 'ihsan.maulana@gmail.com', 'Teman/Saudara', 'Sosial Media', '', 'Produknya kurang banyak'),
(9, 'Agung', 'kwamkilama', '0851778899', 'agung@mail.com', '', '', 'Iklan', 'tolong jual makanan'),
(10, 'Jabbaar', 'Timika', '0851778899', 'agung@mail.com', 'Teman/Saudara', 'Sosial Media', 'Iklan', 'Jangan lupa makan');

-- --------------------------------------------------------

--
-- Table structure for table `masterbarang`
--

CREATE TABLE `masterbarang` (
  `ID_Barang` int(11) NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Pic_Barang` varchar(100) NOT NULL,
  `Desc_Barang` text NOT NULL,
  `Harga_Barang` int(11) NOT NULL,
  `Harga_Barang_Promo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masterbarang`
--

INSERT INTO `masterbarang` (`ID_Barang`, `Nama_Barang`, `Pic_Barang`, `Desc_Barang`, `Harga_Barang`, `Harga_Barang_Promo`) VALUES
(1, 'Yonex Voltrix Z-Force II', 'Liningwindstorm78.jpg', 'Flex Ekstra Kaku.Bingkai HM Graphite / Sound Filter / NANOMETRIC / Tungsten.\r\nPoros HM Graphite / NANOMETRIC / EX-HMG.\r\nPanjangnya 10 mm lebih panjang.Berat Ukuran Pegangan 4U (Ave.83g) G4, 5 / 3U (Ave.88g) G4, 5.Warna Hitam / Hitam.Direkomendasikan: BG66 ULTIMAX, Pemukul Keras: BG66 FORCE\r\nSaran Merangkai 4U: 20 - 27 lbs, 3U: 20 - 28 lbs', 2300000, 2000000),
(2, 'Yonex Astrox88 D', 'Astrox88D.jpg', 'Medium.Bingkai HM Graphite / VOLUME CUT RESIN / Tungsten.Poros HM Graphite / NANOMESH NEO.Panjangnya 10 mm lebih panjang.Berat Ukuran Pegangan 4U (Ave.83g) G5, 6 / 3U (Ave.88g) G4, 5, 6.Warna Unta Emas.Saran Merangkai 4U: 20 - 28 lbs, 3U: 21 - 29 lbs.', 1700000, 1500000),
(3, 'Li-ning Windstrom 78', 'Liningwindstorm78.jpg', 'Bahan: Grafit Karbon Penuh.\r\nBerat / Pegangan: 5U (78 g) / G5.\r\nFleksibilitas: Fleksibel.\r\nTitik Keseimbangan: 296 mm.\r\nKetegangan yang Direkomendasikan: 30Lbs.\r\nBahkan Seimbang Raket.\r\nKetegangan Maks: 30 lbs.', 1000000, 750000),
(4, 'Li-ning aeronaut 9000', 'Aeronaut9000.jpg', 'Warna: Biru / Hijau Tanggal Rilis: Musim Panas 2019 Bingkai: Carbon Fiber Grip: Polyurethane + non woven Berat: 84g Panjang Grip: 210mm Ukuran Grip: S1 Balance Point: 314mm Tech: NANOALLOY; SISTEM AERO TEC-BEAM; BINGKAI OPTIMUM DINAMIS; SUDUT TORSI STABILISASI; TB NANO, SISTEM AIRSTEAM II', 2180000, 1900000),
(5, 'Li-ning tectonic 7', 'images.png', 'Even Balance, 35lbs, \r\nBahan: Grafit Karbon Penuh.\r\nBerat / Pegangan: 5U (78 g) / G5.\r\nFleksibilitas: Fleksibel.\r\nTitik Keseimbangan: 296 mm.', 1600000, 1300000),
(6, 'Yonex Aerus3', 'Aerus3.jpg', 'Warna Merah, Biru.Serat Sintetis Bagian Atas.Midsole Resin Sintetis.Sol luar karet.\r\nMaterial POWER CUSHION +, POWER CUSHION, Double Raschel Mesh, Durable Skin Light, Power Graphite Sheet, Tough GuardTM III, Feather Bounce Foam, Hyper msLITE', 1600000, 1400000),
(7, 'Yonex SHB 88', 'shb 88.jpg', 'Warna Putih / Biru, Merah Terang.Kulit Sintetis Bagian Atas, Serat Sintetis.Resin Sintetis Midsole.Karet Outsole.Material POWER CUSHION +, POWER CUSHION, Double Raschel Mesh, Toughbrid Light, Power Graphite Sheet, Tough GuardTM III', 1600000, 1400000),
(8, 'Yonex 65R', '65s.jpg', 'Warna Putih / Oranye, Hitam / Biru, Oranye Karang.Kulit Sintetis Bagian Atas, Serat Sintetis.Resin Sintetis Midsole.Karet Outsole.Bahan POWER CUSHION, Double Raschel Mesh', 1400000, 1100000),
(9, 'Victor S82 B', 's82 B.jpg', 'Ukuran 255mm - 295mm.Sol luar.Karet VSR\r\nMidsole.Ringan EVA ＋ ENERGYMAX 3.0 ＋ TPU ＋ Carbon Power ＋ EVA Padat.Atas V-Tough PU ＋ Double Mesh + PU Leather', 2500000, 2300000),
(10, 'Yonex Eclipson X', 'eclipson.jpg', 'Warna Putih / Hitam, Biru /Oranye,Turquoise / Kuning.Kulit Tahan Lama. Bagian AtasKaret Outsole.Material POWER CUSHION +, POWER CUSHION, Kulit Tahan Lama, Toughbrid Light, Power Graphite Sheet', 1200000, 1000000),
(11, 'Aerosensa50', 'Aerosena50.jpg', 'Shuttlecock YONEX AEROSENSA adalah shuttlecock resmi untuk turnamen internasional . Teknologi yang direkayasa secara tepat di setiap shuttlecock bulu YONEX yang ringan diperiksa dan diuji secara ekstensif untuk menjamin kinerja yang konsisten. YONEX Feather Shuttlecock diproduksi secara presisi untuk memastikan performa kecepatan, jarak, dan stabilitas yang tepat.\r\n', 500000, 450000),
(12, 'League5', 'laeague5.jpg', 'Shuttlecock League5 adalah shuttlecock resmi untuk turnamen internasional setelah Yonex . Teknologi yang dibuat secara tepat di setiap shuttlecock yang ringan diperiksa dan diuji secara ekstensif untuk menjamin kinerja yang konsisten.  Shuttlecock ini diproduksi secara presisi untuk memastikan performa kecepatan, jarak, dan stabilitas yang tepat.\r\n', 500000, 470000),
(13, 'Aerosensa40', 'aerosena40.jpg', 'Shuttlecock YONEX AEROSENSA adalah shuttlecock resmi untuk turnamen internasional . Teknologi yang direkayasa secara tepat di setiap shuttlecock bulu YONEX yang ringan diperiksa dan diuji secara ekstensif untuk menjamin kinerja yang konsisten. YONEX Feather Shuttlecock diproduksi secara presisi untuk memastikan performa kecepatan, jarak, dan stabilitas yang tepat.\r\n', 400000, 350000),
(14, 'Aerosensa30', 'aerosena30.jpg', 'Shuttlecock YONEX AEROSENSA adalah shuttlecock resmi untuk turnamen internasional . Teknologi yang direkayasa secara tepat di setiap shuttlecock bulu YONEX yang ringan diperiksa dan diuji secara ekstensif untuk menjamin kinerja yang konsisten. YONEX Feather Shuttlecock diproduksi secara presisi untuk memastikan performa kecepatan, jarak, dan stabilitas yang tepat.\r\n', 300000, 250000),
(15, 'Indocock', 'indocock.jpg', 'Shuttlecock ini adalah hasil karya anak bangsa dan produksi dalam negeri tetapi memiliki kualitas Internasional. INDOCOCK ini memiliki bulu yang terbuat dari bulu Angsa Pilihan (bulu import) dengan keunggulan tersendiri didalam ruangan', 120000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pemesanan`
--

CREATE TABLE `transaksi_pemesanan` (
  `ID_Pesan` int(11) NOT NULL,
  `ID_Barang` int(11) NOT NULL,
  `Qty_Barang` int(11) NOT NULL,
  `Nama_Pesan` varchar(100) NOT NULL,
  `Alamat_Pesan` text NOT NULL,
  `KodePos_Pesan` varchar(50) NOT NULL,
  `NoHP_Pesan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_pemesanan`
--

INSERT INTO `transaksi_pemesanan` (`ID_Pesan`, `ID_Barang`, `Qty_Barang`, `Nama_Pesan`, `Alamat_Pesan`, `KodePos_Pesan`, `NoHP_Pesan`) VALUES
(35, 1, 1, 'Muhammad Ihsan Maulana', 'Jalan Yos.Sudarso', '999910', '081224485353'),
(36, 2, 1, 'Muhammad Ihsan Maulana', 'Jalan Yos.Sudarso', '999910', '081224485353'),
(37, 7, 1, 'Muhammad Ihsan Maulana', 'Jalan Yos.Sudarso', '999910', '081224485353'),
(38, 11, 1, 'Agung', 'Jalan Kalimutu', '012222', '0851778899'),
(39, 13, 1, 'Jabbaar', 'Kwamkilama', '12345', '081224485353'),
(40, 7, 1, 'Muhammad Ihsan Maulana', 'Jalan kartini', '999910', '081224485353');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`ID_Customer`);

--
-- Indexes for table `masterbarang`
--
ALTER TABLE `masterbarang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- Indexes for table `transaksi_pemesanan`
--
ALTER TABLE `transaksi_pemesanan`
  ADD PRIMARY KEY (`ID_Pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `ID_Customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `masterbarang`
--
ALTER TABLE `masterbarang`
  MODIFY `ID_Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaksi_pemesanan`
--
ALTER TABLE `transaksi_pemesanan`
  MODIFY `ID_Pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
