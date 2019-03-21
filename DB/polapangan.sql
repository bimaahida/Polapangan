-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 01:59 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polapangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pangan_keluarga`
--

CREATE TABLE `detail_pangan_keluarga` (
  `id` int(11) NOT NULL,
  `urt` double DEFAULT NULL,
  `berat` double DEFAULT NULL,
  `asal` varchar(100) DEFAULT NULL,
  `rata_rata_berat` double DEFAULT NULL,
  `pangan_keluarga_id` int(11) NOT NULL,
  `pangan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_pangan_keluarga`
--

INSERT INTO `detail_pangan_keluarga` (`id`, `urt`, `berat`, `asal`, `rata_rata_berat`, `pangan_keluarga_id`, `pangan_id`) VALUES
(1, 1, 133.3333333, 'Beli', 133.3333333, 1, 1),
(2, 5, 250, 'Di Beri', 250, 2, 23),
(3, 3, 300, 'Pekarangan', 300, 3, 70),
(4, 2, 11.428571428, 'Beli', 11.428571428, 4, 16),
(5, 1, 100, 'Beli', 50, 5, 139),
(6, 6, 600, 'Pekarangan', 300, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pangan`
--

CREATE TABLE `jenis_pangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `bobot` double DEFAULT NULL,
  `skor_max` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_pangan`
--

INSERT INTO `jenis_pangan` (`id`, `nama`, `bobot`, `skor_max`) VALUES
(1, 'Padi - padian ', 0.5, 25),
(2, 'Umbi-umbian', 0.5, 2.5),
(3, 'Pangan Hewani', 2, 24),
(4, 'Minyak dan Lemak ', 0.5, 5),
(5, 'Buah/Biji Berminyak ', 0.5, 1),
(6, 'Kacang-kacangan ', 2, 10),
(7, 'Gula ', 0.5, 2.5),
(8, 'Sayur dan Buah ', 5, 30);

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(16) NOT NULL,
  `no_keluarga` varchar(16) DEFAULT NULL,
  `kepala_keluarga` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `provinsi` varchar(45) DEFAULT NULL,
  `kab` varchar(45) DEFAULT NULL,
  `kec` varchar(45) DEFAULT NULL,
  `desa` varchar(45) DEFAULT NULL,
  `rt` varchar(3) DEFAULT NULL,
  `rw` varchar(3) DEFAULT NULL,
  `kode_pos` varchar(5) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `penyuluh_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id`, `no_keluarga`, `kepala_keluarga`, `alamat`, `provinsi`, `kab`, `kec`, `desa`, `rt`, `rw`, `kode_pos`, `latitude`, `longitude`, `penyuluh_id`) VALUES
(1, '35111002', 'Nugroho ', 'Jalan Kahuripan, Klojen, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '07', '11', '65111', -7.9765519, 112.6315705, 8),
(2, '35111003', 'Ello ', 'Jalan Bromo, Oro-oro Dowo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '19', '21', '65111', -7.9750298, 112.6272141, 8),
(3, '35112002', 'Damar ', 'Jalan Lamongan, Oro-oro Dowo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '12', '04', '65112', -7.9709715, 112.6242207, 8),
(4, '35112003', 'Fauzi ', 'Jalan Welirang I, Oro-oro Dowo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '11', '09', '65112', -7.9732904, 112.6257514, 8),
(5, '35112004', 'Martono ', 'Jalan Batok, Oro-oro Dowo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '12', '09', '65112', -7.9729225, 112.6268522, 8),
(6, '35113002', 'Guntur', 'Jalan Malabar, Oro-oro Dowo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '10', '14', '65113', -7.9689939, 112.6267212, 8),
(7, '35113003', 'Alif', 'Jalan Buring, Oro-oro Dowo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '11', '13', '65113', -7.9710954, 112.6260349, 8),
(8, '35115002', 'Oni', 'Jl. Dr. Cipto, Rampal Celaket, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '10', '20', '65115', -7.967943, 112.6347868, 8),
(9, '35115003', 'Sofyan ', 'Jl. Thamrin, Klojen, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '12', '07', '65115', -7.9718929, 112.6354092, 8),
(10, '45116002', 'Hendra ', 'Jalan Thamrin No.4, Klojen, Malang City, East Java, Indonesia', 'Kota Malang', 'Klojen', 'Klojen', '3', '3', '5', '65116', -7.972995, 112.634753, 8),
(11, '35116003', 'Dadang', 'Jl. Kartini, Klojen, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '12', '13', '65116', -7.970131, 112.6353333, 8),
(12, '35117002', 'Ibnu ', 'Jl. Cokroaminoto, Klojen, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '07', '14', '65117', -7.9707394, 112.6364366, 8),
(13, '35117003', 'Cipto ', 'Jalan Husni Tamrin, Klojen, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '10', '13', '65117', -7.9718929, 112.6354092, 8),
(14, '35117004', 'Mardja ', 'Jalan Dr. Wahidin, Rampal Celaket, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '11', '09', '65117', -7.9681215, 112.6362348, 8),
(15, '35118002', 'Narji ', 'Jl. Diponegoro, Klojen, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '02', '04', '65118', -7.9694707, 112.6338232, 8),
(16, '35118003', 'Kartono ', 'Jl. Setiabudi, Klojen, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '03', '04', '65118', -7.9729266, 112.6377643, 8),
(17, '35118004', 'Masto ', 'Jl. Kartini, Klojen, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '11', '07', '65118', -7.970131, 112.6353333, 8),
(18, '35119002', 'Harto ', 'Jl. Doktor Sutomo, Klojen, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', '11', '02', '65119', -7.9714986, 112.6355399, 8),
(19, '35119003', 'Parto ', 'Jl. Panglima Sudirman, Kesatrian, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '14', '15', '65119', -7.9740938, 112.6385249, 8),
(20, '35121002', 'Jonas ', 'Jl. Ciliwung II, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '01', '02', '65121', -7.9523351, 112.6445975, 9),
(21, '35122002', 'Coldi ', 'Jl. Ciliwung Gg. 1, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '01', '03', '65122', -7.952304, 112.6423315, 9),
(22, '35122003', 'Martanto ', 'Jl. Ciliwung I, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '10', '11', '35122', -7.95154, 112.6426681, 9),
(23, '35122004', 'Mardi ', 'Jl. Karya Timur, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '03', '06', '65122', -7.9505241, 112.6412003, 9),
(24, '35122005', 'Michael ', 'Jl. Karya Timur Glintung 4, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '05', '06', '65122', -7.9477936, 112.6442636, 9),
(25, '35123002', 'Hartono', 'Jalan Letjend S. Parman Gang II, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '06', '08', '65123', -7.9477652, 112.6392912, 9),
(26, '35123003', 'Dodik ', 'Jalan Letjend S. Parman Gang II, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '01', '08', '65123', -7.9477652, 112.6392912, 9),
(27, '35124002', 'Saptio', 'Jalan Ciliwung II B, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '09', '02', '65124', -7.9520198, 112.6454321, 9),
(28, '35124003', 'Dedy ', 'Jalan Karya Timur Glintung 4, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '06', '08', '35124', -7.9477936, 112.6442636, 9),
(29, '35125002', 'Haidar ', 'Jl. Cisadane, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '04', '06', '35125', -7.9543233, 112.6419901, 9),
(30, '35125003', 'Himawan ', 'Jl. Cisadea, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '03', '03', '65125', -7.9555969, 112.6435343, 9),
(31, '35126002', 'Mananta', 'Jl. Marmer, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '05', '08', '65126', -7.9560616, 112.6448332, 9),
(32, '35126003', 'Indra ', 'Jl. Batubara, Purwantoro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '12', '03', '65126', -7.9512826, 112.6517024, 9),
(33, '35127002', 'Supri ', 'Jalan Plaosan Timur, Purwodadi, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '06', '03', '65127', -7.9410764, 112.6514871, 9),
(34, '35127003', 'Glenn ', 'Jl. Plaosan Tim. Gg. 7, Pandanwangi, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '03', '20', '65127', -7.942251, 112.6517819, 9),
(35, '35127004', 'Frank ', 'Jalan Plaosan Timur, Purwodadi, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', '03', '09', '65127', -7.9410764, 112.6514871, 9),
(36, '35132002', 'Wendy ', 'Jalan Danau Bratan, Sawojajar, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '03', '03', '65132', -7.9757864, 112.6620909, 10),
(37, '35132003', 'Fany ', 'Jl. Danau Tempe II, Sawojajar, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '12', '06', '65132', -7.9732897, 112.6616972, 10),
(38, '35133002', 'Nani', 'Jl. Danau Toba, Lesanpuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '12', '08', '65133', -7.9798834, 112.6582078, 10),
(39, '35134002', 'Beni ', 'Jalan Danau Tigi, Lesanpuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '06', '09', '65134', -7.9743606, 112.6644781, 10),
(40, '35135002', 'Ricky ', 'Jalan Danau Ranau, Sawojajar, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '05', '03', '65135', -7.9785223, 112.6577996, 10),
(41, '35135003', 'Roni ', 'Jalan Danau Ranau VIII, Sawojajar, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '02', '12', '65135', -7.9784795, 112.6586486, 10),
(42, '35136002', 'Idha ', 'Jalan Danau Bratan, Sawojajar, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '12', '15', '65136', -7.9757864, 112.6620909, 10),
(43, '35136003', 'Afeo ', 'Jalan Danau Bratan Timur, Madyopuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '12', '16', '65136', -7.9763769, 112.6676535, 10),
(44, '35136004', 'Awin ', 'Jalan Danau Belayan V, Lesanpuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '06', '12', '65137', -7.9761279, 112.6642372, 10),
(45, '35137002', 'Piranto ', 'Jalan Danau Belayan VII, Lesanpuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '13', '06', '65137', -7.9752439, 112.6647319, 10),
(46, '35137003', 'Sapta ', 'Jalan Danau Jonge, Madyopuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '02', '06', '65137', -7.9744229, 112.6697642, 10),
(47, '35137004', 'Tarno ', 'Jalan Danau Jonge I, Madyopuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '06', '03', '65137', -7.9726052, 112.6711636, 10),
(48, '35138002', 'Hardi ', 'Jalan Panial Terusan, Madyopuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '06', '08', '65138', -7.9750231, 112.6691223, 10),
(49, '35139002', 'Hadam ', 'Jalan Danau Sentani Timur, Madyopuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '06', '07', '65139', -7.9798212, 112.6648471, 10),
(50, '35139003', 'Fandi ', 'Jalan Selat Karimata, Lesanpuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '05', '12', '65139', -7.9799372, 112.659211, 10),
(51, '35139004', 'Nico ', 'Jalan Selat Bali, Lesanpuro, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', '16', '05', '65139', -7.9814548, 112.6573373, 10),
(52, '35141002', 'Martono ', 'Jalan Kembang Kertas, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '05', '03', '65141', -7.942376, 112.6169947, 11),
(53, '35141003', 'Gandha ', 'Jalan Kembang Kertas, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '06', '03', '65141', -7.942376, 112.6169947, 11),
(54, '35141004', 'Hammam ', 'Jalan Kembang Turi, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '05', '09', '65141', -7.9428787, 112.6150234, 11),
(55, '35142002', 'Marvin ', 'Jalan Bunga Coklat, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '06', '09', '65142', -7.944563, 112.6195123, 11),
(56, '35142003', 'Geri ', 'Jalan Bunga Coklat, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '05', '09', '65142', -7.944563, 112.6195123, 11),
(57, '35143002', 'Dista ', 'Jalan Bunga Lely, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '07', '01', '65143', -7.9542213, 112.6262678, 11),
(58, '35143003', 'Feri ', 'Jalan Bunga Lely, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '05', '01', '65143', -7.9542213, 112.6262678, 11),
(59, '35144002', 'Nujud ', 'Jalan Pisang Kipas, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '02', '03', '65144', -7.941663, 112.6149853, 11),
(60, '35144003', 'Fahardi ', 'Jl. Pisang Kipas, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '02', '03', '65144', -7.941663, 112.6149853, 11),
(61, '35144004', 'Tanjung ', 'Jalan Pisang Kipas, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '02', '03', '65144', -7.941663, 112.6149853, 11),
(62, '35144005', 'Juniar ', 'Jalan Pisang Kipas, Jatimulyo, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '02', '03', '65144', -7.941663, 112.6149853, 11),
(63, '35145002', 'Putra ', 'Jalan Bunga Mawar, Lowokwaru, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', '06', '05', '65145', -7.9589175, 112.6327616, 11),
(64, '35146002', 'Junet ', 'Jalan Bandulan Baru, Bandulan, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '04', '09', '65146', -7.9878823, 112.6067798, 12),
(65, '35146003', 'Bambang ', 'Jalan Bandulan Barat, Bandulan, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '05', '06', '65146', -7.9790591, 112.5975642, 12),
(66, '35147002', 'Martin ', 'Jl. Mega Mendung, Pisang Candi, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '08', '12', '65147', -7.9702162, 112.6077189, 12),
(67, '35147003', 'Tithan ', 'Jl. Leuser, Pisang Candi, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '05', '13', '65147', -7.9678097, 112.609768, 12),
(68, '35147004', 'Fauzan ', 'Jalan Leuser, Pisang Candi, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '05', '13', '65147', -7.9678097, 112.609768, 12),
(69, '35148002', 'Tandu ', 'Jl. Raya Kepuh, Kebonsari, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '05', '18', '65148', -8.0140318, 112.6203894, 12),
(70, '35148003', 'Prima ', 'Jl. Raya Kepuh, Kebonsari, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '05', '13', '65148', -8.0140318, 112.6203894, 12),
(71, '35148004', 'Dimas ', 'Jl. Raya Kepuh, Kebonsari, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '06', '06', '65148', -8.0140318, 112.6203894, 12),
(72, '35148005', 'Rudy ', 'Jalan Raya Kepuh, Kebonsari, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '05', '13', '65148', -8.0140318, 112.6203894, 12),
(74, '35149002', 'Yayan ', 'Jl.S.Supriadi, Kebonsari, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '05', '15', '65149', -8.0183035, 112.6197934, 12),
(75, '35149003', 'Jaka ', 'Jalan S. Supriadi IX, Sukun, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '04', '15', '65149', -7.996073, 112.6206454, 12),
(76, '35149004', 'Mantidi ', 'Jalan S. Supriadi IX, Sukun, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '05', '15', '65149', -7.996073, 112.6206454, 12),
(77, '35149005', 'Celvin ', 'Jalan S. Supriadi IX, Sukun, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '02', '06', '65149', -7.996073, 112.6206454, 12),
(78, '35149006', 'Herry ', 'Jl.S.Supriadi, Kebonsari, Malang City, East Java, Indonesia', 'Indonesia', 'Jawa Timur', 'Kota Malang', 'Sukun', '05', '14', '65149', -8.0183035, 112.6197934, 12);

-- --------------------------------------------------------

--
-- Table structure for table `pangan`
--

CREATE TABLE `pangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `takaran` varchar(45) DEFAULT NULL,
  `urt` double DEFAULT NULL,
  `gram` double DEFAULT NULL,
  `kalori` double DEFAULT NULL,
  `lemak` double DEFAULT NULL,
  `karbohidrat` double DEFAULT NULL,
  `protein` double DEFAULT NULL,
  `jenis_pangan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pangan`
--

INSERT INTO `pangan` (`id`, `nama`, `takaran`, `urt`, `gram`, `kalori`, `lemak`, `karbohidrat`, `protein`, `jenis_pangan_id`) VALUES
(1, 'nasi', 'gelas', 1, 133.3333333, 233.3333333, 0, 53.33333333, 5.333333333, 1),
(2, 'nasi jagung', 'Gelas', 1, 133.3333333, 233.3333333, 0, 53.33333333, 5.333333333, 1),
(3, 'Singkong', 'Potong', 1, 100, 175, 0, 40, 4, 2),
(4, 'Beras Singkong', 'Gelas', 1, 50, 175, 0, 40, 4, 2),
(5, 'tiwul', 'Gelas', 1, 100, 350, 0, 80, 8, 2),
(6, 'Tiwul Kukus', 'Gelas', 1, 100, 175, 0, 40, 4, 2),
(7, 'Kentang', 'Biji Sedang', 1, 100, 87.5, 0, 20, 2, 2),
(8, 'Talas', 'Biji Sedang', 1, 200, 175, 0, 40, 4, 2),
(9, 'Ubi jalar', 'Biji Sedang', 1, 150, 175, 0, 40, 4, 2),
(10, 'Mie bendo / singkong', 'Piring Sedang', 1, 50, 175, 0, 40, 4, 2),
(11, 'Beras aruk', 'Gelas', 1, 150, 525, 0, 120, 12, 1),
(12, 'Hotong', 'Gelas', 1, 150, 525, 0, 120, 12, 1),
(13, 'Jali', 'Gelas', 1, 180, 525, 0, 120, 12, 1),
(14, 'jewawut', 'Gelas', 1, 100, 350, 0, 80, 8, 1),
(15, 'Meisena', 'Sendok Makan', 1, 5, 21.875, 0, 0.5, 5, 2),
(16, 'Tepung sagu', 'Sendok Makan', 1, 5.714285714, 25, 0, 0.571428571, 5.714285714, 2),
(17, 'Tepung singkong', 'Sendok Makan', 1, 6.25, 21.875, 0, 0.5, 5, 2),
(18, 'daging', 'Potong Sedang', 1, 50, 95, 6, 0, 4, 3),
(19, 'Babat', 'Potong Sedang', 1, 30, 47.5, 3, 0, 2, 3),
(20, 'Bakso daging(kecil)', 'Biji Kecil', 1, 5, 4.75, 0.3, 0, 0.2, 3),
(21, 'Bakso daging(Sedang)', 'Biji Sedang', 1, 10, 9.5, 0.6, 0, 0.4, 3),
(22, 'Daging Ayam', 'Potong Sedang', 1, 50, 95, 6, 0, 4, 3),
(23, 'Daging sapi', 'Potong Sedang', 1, 50, 95, 6, 0, 4, 3),
(24, 'Hati sapi', 'Potong Sedang', 1, 50, 95, 6, 0, 4, 3),
(25, 'Ikan asin', 'Potong Kecil', 1, 25, 95, 6, 0, 4, 3),
(26, 'Dadih sapi', 'Potong Sedang', 1, 12.5, 47.5, 3, 0, 2, 3),
(27, 'Usus Sapi', 'Bulatan', 1, 25, 31.6666666666667, 2, 0, 1.33333333333333, 3),
(28, 'Ikan segar', 'Potong Sedang', 1, 50, 95, 6, 0, 4, 3),
(29, 'Ikan teri', 'Sendok Makan', 1, 12.5, 47.5, 3, 0, 2, 3),
(30, 'Daging Burger', 'Buah Sedang', 1, 29.25, 23.75, 1.5, 0, 1, 3),
(31, 'keju', 'Potong Sedang', 1, 30, 95, 6, 0, 4, 3),
(32, 'telur ayam', 'Butir', 1, 30, 47.5, 3, 0, 2, 3),
(33, 'telur ayam negri', 'Butir', 1, 60, 95, 6, 0, 4, 3),
(34, 'telur bebek', 'Butir', 1, 60, 95, 6, 0, 4, 3),
(35, 'telur puyuh', 'Butir', 1, 12, 19, 1.2, 0, 0.8, 3),
(36, 'Udang basah', 'Gelas', 1, 200, 380, 24, 0, 16, 3),
(37, 'Rolade', 'Buah Sedang', 1, 40, 19, 1.2, 0, 0.8, 3),
(38, 'Sosis ayam', 'Buah Sedang', 1, 27.6666666666667, 31.6666666666667, 2, 0, 1.33333333333333, 3),
(39, 'Nugget ayam', 'Buah Sedang', 1, 16.6, 19, 1.2, 0, 0.8, 3),
(40, 'Bakso Udang', 'Buah Sedang', 1, 11.6666666666667, 6.33333333333333, 0.4, 0, 0.266666666666667, 3),
(41, 'Abon sapi', 'Sendok Makan', 1, 20.8333333333333, 31.6666666666667, 2, 0, 1.33333333333333, 3),
(42, 'tempe', 'Potong', 1, 25, 40, 1.5, 4, 3, 5),
(43, 'Kacan hijau', 'Sendok Makan', 1, 10, 32, 1.2, 3.2, 2.4, 6),
(44, 'Kacang kedele', 'Sendok Makan', 1, 10, 32, 1.2, 3.2, 2.4, 6),
(45, 'Kacang merah', 'Sendok Makan', 1, 10, 32, 1.2, 3.2, 2.4, 6),
(46, 'Oncom', 'Sendok Makan', 1, 25, 40, 1.5, 4, 3, 5),
(47, 'Kacang tanah', 'Sendok Makan', 1, 10, 40, 1.5, 4, 3, 6),
(48, 'Keju kc tanah', 'Sendok Makan', 1, 10, 40, 1.5, 4, 3, 6),
(49, 'Kacang tolo', 'Sendok Makan', 1, 10, 32, 1.2, 3.2, 2.4, 6),
(50, 'Tahu', 'Biji Besar', 1, 100, 80, 3, 8, 6, 5),
(51, 'Baligo', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(52, 'Labu air', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(53, 'Daun koro', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(54, 'Daun labu siam', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(55, 'Daun waluh', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(56, 'Daun lobak', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(57, 'Jamur segar', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(58, 'seledri', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(59, 'taoge', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(60, 'Kembang kol', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(61, 'Daun kacang panjang', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(62, 'Oyong', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(63, 'Kangkung', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(64, 'Ketimun', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(65, 'Tomat', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(66, 'Kecipir', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(67, 'Tebu terubuk', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(68, 'Cabe hijau besar', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(69, 'Daun bawang', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(70, 'Lobak', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(71, 'Kol', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(72, 'Pepaya muda', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(73, 'Petsai', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(74, 'Sawi', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(75, 'selada', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(76, 'terong', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(77, 'Bayam', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(78, 'Biet ', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(79, 'Buncis', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(80, 'Daun beluntas', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(81, 'Daun ubi jalar', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(82, 'Daun leunca', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(83, 'Daun pepaya', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(84, 'daun lompong', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(85, 'daun mengkokan', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(86, 'daun melinjo', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(87, 'daun pakis ', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(88, 'daun singkong', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(89, 'jagung muda', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(90, 'jagung pisang', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(91, 'genjer', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(92, 'kacang panjang', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(93, 'kacang kapri', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(94, 'kangkung', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(95, 'katuk ', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(96, 'kucai', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(97, 'wortel', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(98, 'Labu siam', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(99, 'labu waluh', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(100, 'nangka muda', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(101, 'pare', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(102, 'takokak', 'Ikat', 1, 100, 50, 0, 10, 3, 8),
(103, 'pisang ambon', 'Potong sedang', 1, 50, 40, 0, 10, 0, 8),
(104, 'alpukat', 'Buah Besar', 1, 100, 80, 0, 20, 0, 8),
(105, 'anggur', 'Biji', 1, 7.5, 4, 0, 1, 0, 8),
(106, 'apel', 'Buah sedang', 1, 150, 80, 0, 20, 0, 8),
(107, 'Belimbing', 'Buah Besar', 1, 125, 40, 0, 10, 0, 8),
(108, 'Duku', 'Buah', 1, 5, 2.66666666666667, 0, 0.666666666666667, 0, 8),
(109, 'Jambu air', 'Buah Besar', 1, 50, 20, 0, 5, 0, 8),
(110, 'Jambu biji', 'Buah Besar', 1, 100, 40, 0, 10, 0, 8),
(111, 'Jambu bol', 'Buah sedang', 1, 300, 160, 0, 40, 0, 8),
(112, 'Jeruk manis', 'Buah Besar', 1, 50, 20, 0, 5, 0, 8),
(113, 'Kedondong', 'Buah Besar', 1, 100, 40, 0, 10, 0, 8),
(114, 'Kemang', 'Buah Besar', 1, 100, 40, 0, 10, 0, 8),
(115, 'sawo', 'Buah sedang', 1, 50, 40, 0, 10, 0, 8),
(116, 'Mangga', 'buah besar', 1, 100, 80, 0, 20, 0, 8),
(117, 'Melon', 'Potong besar', 1, 150, 40, 0, 10, 0, 8),
(118, 'Nangka masak', 'Biji', 1, 16.6666666666667, 13.3333333333333, 0, 3.33333333333333, 0, 8),
(119, 'Nanas', 'Buah Besar', 1, 150, 80, 0, 20, 0, 8),
(120, 'Pepaya', 'Potong sedang', 1, 100, 40, 0, 10, 0, 8),
(121, 'pisang raja sereh', 'Buah sedang', 1, 25, 20, 0, 5, 0, 8),
(122, 'rambutan', 'Buah', 1, 9.375, 5, 0, 1.25, 0, 8),
(123, 'salak', 'Buah besar', 1, 75, 40, 0, 10, 0, 8),
(124, 'semangka', 'Potong Besar', 1, 150, 40, 0, 10, 0, 8),
(125, 'sirsak', 'Gelas', 1, 150, 80, 0, 20, 0, 8),
(126, 'Susu sapi', 'Gelas', 1, 200, 139, 7, 9, 7, 7),
(127, 'susu kambing', 'Gelas', 1, 600, 556, 28, 36, 28, 7),
(128, 'Susu kental tak manis', 'Gelas', 1, 200, 278, 14, 18, 14, 7),
(129, 'susu kerbau', 'Gelas', 1, 200, 278, 14, 18, 14, 7),
(130, 'Yogurt', 'Gelas', 1, 200, 139, 7, 9, 7, 7),
(131, 'Tepung sari dele', 'Sendok Makan', 1, 6.25, 34.75, 1.75, 2.25, 1.75, 7),
(132, 'tepung susu skim', 'Sendok Makan', 1, 5, 34.75, 1.75, 2.25, 1.75, 7),
(133, 'tepung susu whole', 'Sendok Makan', 1, 5, 27.8, 1.4, 1.8, 1.4, 7),
(134, 'Minyak goreng', 'Sendok Makan', 1, 10, 90, 10, 0, 0, 4),
(135, 'Minyak kelapa', 'Sendok Makan', 1, 10, 90, 10, 0, 0, 4),
(136, 'Margarin', 'Sendok Makan', 1, 10, 90, 10, 0, 0, 4),
(137, 'Kelapa', 'Potong Kecil', 1, 30, 45, 5, 0, 0, 4),
(138, 'Kelapa parut', 'Sendok Makan', 1, 6, 9, 1, 0, 0, 4),
(139, 'santan', 'Gelas', 1, 100, 90, 10, 0, 0, 4),
(140, 'Minyak ikan', 'Sendok Makan', 1, 10, 90, 10, 0, 0, 4),
(141, 'Lemak babi', 'Potong Kecil', 1, 5, 45, 5, 0, 0, 4),
(142, 'Lemak sapi', 'Potong Kecil', 1, 5, 45, 5, 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pangan_keluarga`
--

CREATE TABLE `pangan_keluarga` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `keterangan` varchar(45) DEFAULT NULL,
  `jumlah_pemakan` int(11) DEFAULT NULL,
  `keluarga_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pangan_keluarga`
--

INSERT INTO `pangan_keluarga` (`id`, `nama`, `tgl`, `keterangan`, `jumlah_pemakan`, `keluarga_id`) VALUES
(1, 'Nasi Goreng', '2018-11-06', 'Makan Malam', 1, 1),
(2, 'Sate', '2015-06-10', 'Makan Siang', 1, 1),
(3, 'Sayur Asem', '2016-06-08', 'Makan Siang', 1, 1),
(4, 'Indomie', '2017-08-30', 'Makan Malam', 1, 1),
(5, 'Kolak', '2015-11-08', 'Makan Pagi', 2, 19);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nama`) VALUES
(1, 'admin'),
(2, 'Penyuluh'),
(3, 'Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `id` int(11) NOT NULL,
  `sayur` int(11) DEFAULT NULL,
  `buah` int(11) DEFAULT NULL,
  `umbi` int(11) DEFAULT NULL,
  `hewani` int(11) DEFAULT NULL,
  `kacang` int(11) DEFAULT NULL,
  `keluarga_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(16) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `password`, `tempat_lahir`, `tgl_lahir`, `jk`, `agama`, `pendidikan`, `pekerjaan`, `status_id`) VALUES
(7, '000001', 'Admin', '04fc711301f3c784d66955d98d399afb', 'Malang', '1997-07-17', 'Pria', 'Islam', 'STRATA I', 'Mahasiswa', 1),
(8, '111001', 'Penyuluh Klojen', '62a8f236810c77450fafcdff6ad5fd26', 'Malang', '1985-03-07', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Wirausahawan', 2),
(9, '121001', 'Penyuluh Blimbing', '0c16a452e5bde229af3d920e917badc3', 'Malang', '1978-04-29', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 2),
(10, '132001', 'Penyuluh Kedungkandang', '3dad34506aea9bb540bec56199074544', 'Malang', '1980-08-22', 'Pria', 'Islam', 'STRATA II', 'PNS', 2),
(11, '141001', 'Penyuluh Lowokwaru', '2026dd4c3e6bbc6de46a98432db3a929', 'Malang', '1984-12-12', 'Pria', 'Islam', 'STRATA I', 'Dosen', 2),
(12, '146001', 'Penyuluh Sukun', '1d421a367dd5d80a89ef493be24648fc', 'Malang', '1982-01-23', 'Pria', 'Islam', 'STRATA I', 'Guru SD', 2),
(13, '111002', 'Nugroho', '9ad267ac24e716563a3c4aed24672c90', 'Malang', '1987-12-21', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Sopir', 3),
(14, '111003', 'Mitha', '19196fbe2dd30db625660d39695b5f89', 'Surabaya', '1988-03-12', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Penjahit', 3),
(15, '111004', 'Hani', '37e214369f96f471972a99005a0a9da8', 'Yogyakarta', '1990-11-19', 'Wanita', 'Katolik', 'STRATA II', 'Guru', 3),
(16, '111005', 'Kiko', '4505e49e34c36a794dd48f0eb3b1043e', 'Batu', '1983-10-10', 'Wanita', 'Kristen Protestan', 'STRATA I', 'Pilot', 3),
(17, '111006', 'Ello', '2f74830307a811c0bc3c2c9d87d6f693', 'Jakarta', '1989-05-12', 'Pria', 'Hindu', 'DIPLOMA I / II', 'PNS', 3),
(18, '112002', 'Damar', '9884bfb6c4e8914720829708e508f822', 'Malang', '1990-04-15', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Dosen', 3),
(19, '112003', 'Fauzi', 'ea6adcc9ed86160b149f25dc48df35c0', 'Surabaya', '1985-08-10', 'Pria', 'Islam', 'STRATA I', 'Teller', 3),
(20, '112004', 'Martono', NULL, 'Madura', '1979-02-12', 'Pria', 'Katolik', 'SLTA / SEDERAJAT', 'Petani', 3),
(21, '112005', 'Rara', 'dda9baeb44c41abd8db8bc37f0176e63', 'Malang', '1990-02-19', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'Guru', 3),
(22, '112006', 'Martha', '12ad8522b6920b6a30abf0c133b659b1', 'Jombang', '1989-06-22', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 3),
(23, '113002', 'Guntur', NULL, 'Surabaya', '1980-06-13', 'Pria', 'Islam', 'SLTP/SEDERAJAT', 'Wirausahawan', 3),
(24, '113003', 'Aurel', '28caa8632f42f7faae63fd1d67677b09', 'Mojokerto', '1990-03-07', 'Wanita', 'Islam', 'SLTP/SEDERAJAT', 'Penjahit', 3),
(25, '113004', 'Alif', 'de3bb0c91ec200a56c1ffdf8eb10af41', 'Malang', '1980-12-09', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Guru', 3),
(26, '115002', 'Ani', '65ed85850863255a21d445daad12d1e0', 'Trenggalek', '1980-04-02', 'Wanita', 'Islam', 'STRATA I', 'Koki', 3),
(27, '115003', 'Oni', 'cfc5df08069b9c663595e96954186dad', 'Malang', '1994-07-08', 'Pria', 'Islam', 'STRATA I', 'Mahasiswa', 3),
(28, '115004', 'Sofyan', NULL, 'Banyuwangi', '1979-08-12', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Dosen', 3),
(29, '116002', 'Hendra', '50c3c653e43f4bad1256d02a0556b76e', 'Malang', '1990-06-10', 'Pria', 'Islam', 'STRATA II', 'Dosen', 3),
(30, '116003', 'Indri', 'da0d874840bf6d5d2a6ef3e80b335474', 'Banyuwangi', '1989-03-20', 'Wanita', 'Katolik', 'DIPLOMA I / II', 'Bogor', 3),
(31, '116004', 'Dadang', 'a4602e8951facc960cc991bce99fda9a', 'Jakarta', '1991-08-09', 'Pria', 'Buddha', 'STRATA I', 'Tentara', 3),
(32, '117002', 'Ibnu', '31437638722bf235fe549ba612469705', 'Malang', '1984-02-07', 'Pria', 'Islam', 'STRATA II', 'Satpam', 3),
(33, '117003', 'Sinta', 'e83182b9fdab4eac2e0dbc3bb42fe551', 'Lamongan', '1989-11-19', 'Wanita', 'Islam', 'DIPLOMA I / II', 'Wirausahawan', 3),
(34, '117004', 'Cipto', 'a3e371ee4c4370d5b57ecd1da73f97fa', 'Magelang', '1970-12-08', 'Pria', 'Islam', 'STRATA II', 'PNS', 3),
(35, '117005', 'Mardja', '5d7b2eeabb6b33e9aba9ae2dcc177301', 'Malang', '1988-07-26', 'Pria', 'Kong Hu Cu', 'SLTP/SEDERAJAT', 'Tentara', 3),
(36, '118002', 'Narji', '0c64004685e61f0d97edc8c33b4dea76', 'Mojokerto', '1990-02-19', 'Pria', 'Islam', 'STRATA I', 'Penjahit', 3),
(37, '118003', 'Nirmala', 'cc74a65f2b390c885d2fcacbcb79e454', 'Jakarta', '1992-03-18', 'Wanita', 'Katolik', 'STRATA II', 'Guru', 3),
(38, '118004', 'Kartono', '78274c6aebb88fe9d84c1e08d66833e4', 'Yogyakarta', '1970-02-01', 'Pria', 'Islam', 'SLTP/SEDERAJAT', 'Petani', 3),
(39, '118005', 'Masto', '3ebf8cd33a4a39844264dba4ca4289c1', 'Malang', '1987-08-19', 'Pria', 'Hindu', 'STRATA II', 'PNS', 3),
(40, '119002', 'Tono', '2b88c1c9536414bc2c9e43d902eadcd0', 'Malang', '1981-08-07', 'Pria', 'Katolik', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(41, '119003', 'Yanti', '989898011b16bf4a03f0175dc897898c', 'Surabaya', '1987-03-29', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'Guru', 3),
(42, '119004', 'Harto', 'e20db7fc7bb182998e2c4d2f2a0a27cd', 'Malang', '1985-06-09', 'Pria', 'Islam', 'BELUM TAMAT SD/SEDERAJAT', 'Petani', 3),
(43, '119005', 'Parto', 'ae07822252537d684eeec3f2d4ba9adb', 'Jakarta', '1992-07-27', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Wirausahawan', 3),
(44, '121002', 'Marlina', '807674f237526e2531633e6b57f94046', 'Malang', '1989-12-08', 'Wanita', 'Islam', 'DIPLOMA I / II', 'PNS', 3),
(45, '121003', 'Pina', 'c85fe06b7f6e1c28c57403b6773088f9', 'Depok', '1980-02-10', 'Wanita', 'Buddha', 'TAMAT SD / SEDERAJAT', 'Guru', 3),
(46, '121004', 'Mirta', '7dee0c3da7e822ae55f5c3451941284c', 'Malang', '1990-09-19', 'Wanita', 'Katolik', 'STRATA II', 'Dosen', 3),
(47, '121005', 'Jonas', '197a954058f7e333448ad0ad259041c2', 'Jakarta', '1992-12-08', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Guru', 3),
(48, '122002', 'Coldi', '610f8155c562b6cdc2ba60235808532f', 'Surabaya', '1979-11-19', 'Pria', 'Kong Hu Cu', 'STRATA III', 'Professor', 3),
(49, '122003', 'Martanto', 'bedcf73aaa1c1c28379577758f0c1514', 'Yogyakarta', '1980-05-07', 'Pria', 'Katolik', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(50, '122004', 'Mardi', 'dc4c7c69ed2bd1931bc0b6096b051515', 'Malang', '1981-02-07', 'Pria', 'Islam', 'TAMAT SD / SEDERAJAT', 'Petani', 3),
(51, '122005', 'Michael', 'fff2f65cec10f79ad9d6563dd7e2aafe', 'Jakarta', '1990-11-07', 'Pria', 'Islam', 'STRATA I', 'Guru', 3),
(52, '123002', 'Hartono', 'bbc23ed229f45f4a0bf869441f3578b9', 'Malang', '1989-12-08', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 3),
(53, '123003', 'Dodik', 'f3e22d3287391e82d6f6b017887359fd', 'Malang', '1990-02-18', 'Pria', 'Islam', 'DIPLOMA I / II', 'Polisi', 3),
(54, '123004', 'Dinar', '3e8d19b1246637afc543e201b1059b77', 'Surabaya', '1992-02-19', 'Wanita', 'Hindu', 'STRATA II', 'Dosen', 3),
(55, '123005', 'Rini', '8616a99c38252281690dcdb90006e261', 'Malang', '1989-03-12', 'Wanita', 'Katolik', 'STRATA I', 'Arsitek', 3),
(56, '124002', 'Mirna', 'bb8eb84a2de22b8a72508d576d052ae9', 'Madura', '1989-04-12', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(57, '124003', 'Saptio', 'bf6dba1ce0a53ec28c2d73733bfb6707', 'Yogyakarta', '1989-11-29', 'Pria', 'Islam', 'SLTP/SEDERAJAT', 'Supir', 3),
(58, '124004', 'Dedy', '2f15938295f6ed2cc7b423c3b92a66f9', 'Malang', '1980-07-03', 'Pria', 'Islam', 'STRATA III', 'Dosen', 3),
(59, '124005', 'Manda', '31a99b0ae77e2d60374a103d9ae2c18c', 'Surabaya', '1988-09-07', 'Wanita', 'Islam', 'TAMAT SD / SEDERAJAT', 'Penjahit', 3),
(60, '125002', 'Karina', '850f41e2e3d9546c758301a03bf933e2', 'Batu', '1989-07-02', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(61, '125003', 'Gebby', 'e5bd16ec4f64be5c9202f0240df14c0b', 'Malang', '1982-04-06', 'Wanita', 'Kong Hu Cu', 'STRATA I', 'Dosen', 3),
(62, '125004', 'Haidar', '3d46dd586399b3475c6ee4567df85453', 'Sidoarjo', '1992-08-21', 'Pria', 'Islam', 'DIPLOMA I / II', 'PNS', 3),
(63, '125005', 'Himawan', 'ee7d0a95c98df729c5ab7c93d1df3aa9', 'Yogyakarta', '1989-04-08', 'Pria', 'Islam', 'STRATA II', 'Wirausahawan', 3),
(64, '126002', 'Lia', '1fe606bf06df42bf9f625ab9bb971d52', 'Balikpapan', '1990-04-07', 'Wanita', 'Kristen Protestan', 'DIPLOMA I / II', 'Polisi', 3),
(65, '126003', 'Mananta', 'ca7bcdc182c48b6a632b735d37ba5a44', 'Malang', '1987-07-01', 'Pria', 'Katolik', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 3),
(66, '126004', 'Indra', '947d46d259a76b699c92bec662e28d8f', 'Magelang', '1984-08-12', 'Pria', 'Islam', 'DIPLOMA I / II', 'Koki', 3),
(67, '126005', 'Aurina', '9533483adeb35e12ac9c6ad30ab5ce45', 'Sidoarjo', '1991-08-04', 'Wanita', 'Buddha', 'DIPLOMA I / II', 'Wirausahawan', 3),
(68, '127002', 'Supri', '89786da7103bd33cfc279a307afcf3cb', 'Malang', '1988-04-08', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 3),
(69, '127003', 'Glenn', '970f71ac90be02ba17f2085ef0086391', 'Palu', '1990-07-04', 'Pria', 'Buddha', 'DIPLOMA I / II', 'Polisi', 3),
(70, '127004', 'Frank', '0e671d3fc3d37c7e956765f06026171b', 'Surabaya', '1987-02-10', 'Pria', 'Hindu', 'DIPLOMA I / II', 'Polisi', 3),
(71, '127005', 'Santi', '6e0b28198982e776117a416982cbad51', 'Malang', '1983-12-04', 'Wanita', 'Islam', 'STRATA I', 'Dosen', 3),
(72, '132002', 'Rani', '6e07f7433509e48f69876e8cbbbb7786', 'Malang', '1990-03-08', 'Wanita', 'Islam', 'STRATA I', 'Wirausahawan', 3),
(73, '132003', 'Raras', 'bc65b34177e61e0c448bacfb9b863141', 'Jakarta', '1982-03-29', 'Wanita', 'Buddha', 'SLTA / SEDERAJAT', 'Penjahit', 3),
(74, '132004', 'Wendy', '0ee610271275b2d6eff13dce55c9466c', 'Tangerang', '1979-12-08', 'Pria', 'Islam', 'STRATA III', 'PNS', 3),
(75, '132005', 'Fany', '3ff396ad35ad5af64cf96a05e9e8d91b', 'Jombang', '1990-12-26', 'Pria', 'Katolik', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Guru', 3),
(76, '133002', 'Nani', 'e3c0ff73bf8afb47f34752acf00a9c0e', 'Malang', '1980-02-01', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(77, '133003', 'Hanna', '42ecf12411b5b8e910c45048f5aba5fe', 'Malang', '1987-12-26', 'Wanita', 'Kristen Protestan', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 3),
(78, '133004', 'Risa', 'ca2b9d06d1810346ada3021b1bb8636d', 'Malang', '1981-03-12', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Teller', 3),
(79, '133005', 'Ratna', '38c94eca8918290cf3f3cc3c9c4e9de2', 'Surabaya', '1992-12-31', 'Wanita', 'Islam', 'STRATA II', 'Mahas', 3),
(80, '134002', 'Beni', '54f0c98806faba064096176f780069fc', 'Mojokerto', '1980-07-13', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(81, '134003', 'Raline', '4d3fbc6acb1b2b88d14782761d1715f3', 'Jakarta', '1987-08-04', 'Wanita', 'Buddha', 'STRATA II', 'Koki', 3),
(82, '134004', 'Tio', '885ee3c6a4e627438edf1d068940857d', 'Sidoarjo', '1990-09-29', 'Pria', 'Islam', 'STRATA I', 'PNS', 3),
(83, '134005', 'Ali', '52c14983141f13c2b985cc89e437f096', 'Makassar', '1992-10-31', 'Pria', 'Islam', 'DIPLOMA I / II', 'Polisi', 3),
(84, '135002', 'Dyah', '2984db7e143316fb81837a1585a0dd8e', 'Magelang', '1983-09-04', 'Wanita', 'Islam', 'STRATA II', 'Wirausahawan', 3),
(85, '135003', 'Regista', 'bf3b0f0c168c96d2f878b4a2bb2cb4f8', 'Mojokerto', '1989-12-04', 'Wanita', 'Islam', 'DIPLOMA I / II', 'PNS', 3),
(86, '135004', 'Ricky', '3716359a8b6501594ad637ed58efaa42', 'Malang', '1990-12-31', 'Pria', 'Hindu', 'STRATA I', 'Polisi', 3),
(87, '135005', 'Roni', '5497a0f4058d523c955929ca6a14200a', 'Malang', '1985-04-08', 'Pria', 'Kristen Protestan', 'STRATA II', 'Guru', 3),
(88, '136002', 'Elok', 'b53f3fe96b5031425282d9cb5d209508', 'Surabaya', '1977-02-20', 'Wanita', 'Islam', 'STRATA III', 'Dosen', 3),
(89, '136003', 'Idha', '3546261566921fd867a64bc4260fac0c', 'Malang', '1987-04-21', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 3),
(90, '136004', 'Afeo', 'cfe2a5c74c89ec8dd226a5aa24048563', 'Jakarta', '1989-08-31', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(91, '136005', 'Awin', 'dc1167c2e7e7c43e963203b54f6dd3d3', 'Jakarta', '1989-01-04', 'Pria', 'Buddha', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 3),
(92, '137002', 'Piranto', 'b18ada80aa42846bdf8d3785e2480ff1', 'Malang', '1978-01-31', 'Pria', 'Buddha', 'SLTA / SEDERAJAT', 'Guru', 3),
(93, '137003', 'Sapta', '8a41e7a525b2475efb31151d047328ba', 'Malang', '1989-07-09', 'Pria', 'Kristen Protestan', 'STRATA I', 'Pilot', 3),
(94, '137004', 'Ranto', '054d5e8e530b70eb11d9eda77a0abc65', 'Yogyakarta', '1987-09-04', 'Pria', 'Islam', 'STRATA II', 'Dosen', 3),
(95, '137005', 'Tarno', '98f354ba712f224cde788388aa909fe8', 'Surabaya', '1989-01-04', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(96, '138002', 'Martha', '895e388e4953622882b87796ec1128d5', 'Jakarta', '1990-12-04', 'Wanita', 'Kristen Protestan', 'STRATA I', 'Guru', 3),
(97, '138003', 'Aurellia', '18a16d7e6782a94b14b9c06b6f2a499b', 'Sidoarjo', '1990-08-04', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Pramugari', 3),
(98, '138004', 'Hardi', '42fef8db5f64c6e80f2f720ab76bf603', 'Malang', '1980-10-04', 'Pria', 'Hindu', 'STRATA II', 'PNS', 3),
(99, '138005', 'Titha', '498726f0ce401dec046932a7bc75c790', 'Malang', '1992-08-31', 'Wanita', 'Islam', 'STRATA I', 'Guru', 3),
(100, '139002', 'Hadam', '4563552f6ccfc2de827a18a9f38148cd', 'Sidoarjo', '1982-09-04', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Wirausahawan', 3),
(101, '139003', 'Fandi', '7522fa860a582c1e6e339ccf6befcad7', 'Malang', '1990-04-09', 'Pria', 'Islam', 'TAMAT SD / SEDERAJAT', 'Petani', 3),
(102, '139004', 'Gendha', '7fc10715e15e12a6de961e35b88344e8', 'Yogyakarta', '1986-10-09', 'Wanita', 'Kong Hu Cu', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(103, '139005', 'Nico', 'a44f1358fee4a5e26c82485156196648', 'Malang', '1980-08-04', 'Pria', 'Kristen Protestan', 'STRATA II', 'Dosen', 3),
(104, '141002', 'Martono', 'e4cca6676486b7bfa6287b6a1b98065a', 'Malang', '1985-04-08', 'Pria', 'Islam', 'SLTP/SEDERAJAT', 'Petani', 3),
(105, '141003', 'Gandha', '1fbe3cf71c4d600494d38ada44658ca4', 'Mojokerto', '1980-10-28', 'Pria', 'Buddha', 'STRATA I', 'Dosen', 3),
(106, '141004', 'Nolan', '0fd044c19e22a3eb5eed99fe7bbb7bf5', 'Jakarta', '1991-12-09', 'Wanita', 'Buddha', 'DIPLOMA I / II', 'Polisi', 3),
(107, '141005', 'Hammam', '6f810c98d58784c586f4b942f7d67256', 'Bogor', '1983-03-12', 'Pria', 'Islam', 'TAMAT SD / SEDERAJAT', 'Wirausahawan', 3),
(108, '142002', 'Nirma', '2fc805ffcfbf923f1cab383da2747081', 'Bangka', '1980-01-04', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'Penjahit', 3),
(109, '142003', 'Marvin', '3ad156d9857c3a252a359e0dc5ac95c9', 'Surabaya', '1979-08-04', 'Pria', 'Hindu', 'DIPLOMA I / II', 'Penyanyi', 3),
(110, '142004', 'Geri', 'a061f2a93b1d3c6d52f2a33813d9872f', 'Malang', '1980-10-31', 'Pria', 'Islam', 'STRATA III', 'Dosen', 3),
(111, '142005', 'Gista', '2e8ba6bb059e515e3be6cadc2473bebf', 'Surabaya', '1987-09-04', 'Wanita', 'Kristen Protestan', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(112, '143002', 'Dista', 'ac985a9db5faeb44c94a334430ccc241', 'Jakarta', '1988-03-09', 'Pria', 'Katolik', 'SLTP/SEDERAJAT', 'Petani', 3),
(113, '143003', 'Feri', '9dd59f125e06c214b2d9be8791f98249', 'Magelang', '1990-08-04', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 3),
(114, '143004', 'Magista', 'fcb8bb07b25da880460a20f445bf8b2a', 'Yogyakarta', '1989-08-04', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'Wirausahawan', 3),
(115, '143005', 'Dora', '1e8d639098eabbfa5a35b2f115bad364', 'Jakarta', '1987-08-05', 'Wanita', 'Kristen Protestan', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 3),
(116, '144002', 'Nujud', 'ecdab78d856c5330e075cf70c9591e81', 'Pasuruan', '1990-02-10', 'Pria', 'Islam', 'STRATA I', 'Mahasiswa', 3),
(117, '144003', 'Fahardi', '1d9a38d8205d6879291e40d940880009', 'Batu', '1985-01-29', 'Pria', 'Islam', 'STRATA II', 'Wirausahawan', 3),
(118, '144004', 'Tanjung', '053f01e255f6693d1645fab72fb81501', 'Surabaya', '1978-04-06', 'Pria', 'Kristen Protestan', 'STRATA III', 'Dosen', 3),
(119, '144005', 'Juniar', 'cfc16ea01cf8634336bd30a63fb81148', 'Mojokerto', '1989-12-27', 'Pria', 'Kong Hu Cu', 'STRATA II', 'Dose', 3),
(120, '145002', 'Diba', 'eb1ce9a9e7bc70eb83b4a6be0b6eb634', 'Trenggalek', '1990-10-31', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Mahasiswa', 3),
(121, '145003', 'Jandi', '0f9b0358637409603d7dca713d5abb2e', 'Malang', '1989-02-28', 'Wanita', 'Hindu', 'STRATA I', 'Guru', 3),
(122, '145004', 'Putra', '32f09fa38a2917c715ca0019e1fd3acb', 'Malang', '1984-04-09', 'Pria', 'Islam', 'STRATA I', 'PNS', 3),
(123, '145005', 'Putri', 'cc479b3cf9c2f57c49d1d581c20bd57e', 'Jombang', '1982-09-20', 'Wanita', 'Kristen Protestan', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Penjahit', 3),
(124, '146002', 'Ariana', '00bc498c7ae65ca1e1cc4957283dbfa7', 'Jakarta', '1992-04-28', 'Wanita', 'Islam', 'STRATA I', 'Mahasiswa', 3),
(125, '146003', 'Indrawati', '70f6a3df292f54da5145ef5f04521053', 'Surabaya', '1987-01-31', 'Wanita', 'Islam', 'STRATA II', 'Dosen', 3),
(126, '146004', 'Junet', 'a81e8458959721461e2e4e1f2e8c90aa', 'Malang', '1989-01-31', 'Pria', 'Katolik', 'STRATA I', 'Guru', 3),
(127, '146005', 'Jessica', 'cf7c4191486a2d4dea84ef425c390a89', 'Bogor', '1985-09-12', 'Wanita', 'Katolik', 'STRATA II', 'Dosen', 3),
(128, '146006', 'Bambang', '75ba734a9c918a19000283f1f92fb3a7', 'Malang', '1980-11-25', 'Pria', 'Islam', 'DIPLOMA I / II', 'Polisi', 3),
(129, '147002', 'Martin', '8a271340c64c34cc8e175113cee50178', 'Batu', '1982-06-07', 'Pria', 'Buddha', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Wirausahawan', 3),
(130, '147003', 'Tithan', '2720a5a68d93c81033704613e28e1a5f', 'Banyuwangi', '1990-10-28', 'Pria', 'Kristen Protestan', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(131, '147004', 'Intan', '3b307ace402edf90bc1d5fecc811f81c', 'Malang', '1990-08-12', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Penyanyi', 3),
(132, '147005', 'Fauzan', 'd9d3b0bd3e3f055e441b9075a71ea5d7', 'Malang', '1979-10-31', 'Pria', 'Kristen Protestan', 'SLTP/SEDERAJAT', 'Peta', 3),
(133, '147006', 'Rima', 'f0e622c39b003066491a2a7ff8f6f56e', 'Jombang', '1989-02-14', 'Wanita', 'Kristen Protestan', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Wirausahawan', 3),
(134, '148002', 'Tandu', '1e3dabd005c2c689d9b5b5d2d2396dcd', 'Malang', '1980-04-26', 'Pria', 'Kristen Protestan', 'STRATA II', 'Dosen', 3),
(135, '148003', 'Prima', 'd85b43969b8fdeca6308d14d21574858', 'Magelang', '1987-09-04', 'Pria', 'Islam', 'STRATA II', 'Dosen', 3),
(136, '148004', 'Dimas', '1238713a1587ca980f63eaf6270292f9', 'Malang', '1989-04-08', 'Pria', 'Islam', 'STRATA II', 'Guru', 3),
(137, '148005', 'Rudy', '4a31c1f31ad92e71f6ebc5dd51a30d4f', 'Sidoarjo', '1990-10-31', 'Pria', 'Islam', 'DIPLOMA I / II', 'Polisi', 3),
(138, '148006', 'Naratika', '9c9f7290cce668ad1cb399e8c2124115', 'Malang', '1986-08-09', 'Wanita', 'Hindu', 'STRATA I', 'Guru', 3),
(139, '149002', 'Yayan', 'd2be5ff8323289224743d914ad17163d', 'Malang', '1970-10-31', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Polisi', 3),
(140, '149003', 'Jaka', '93a7b0f26e7e305c02c5d5ecd927edc2', 'Jakarta', '1978-10-09', 'Pria', 'Islam', 'STRATA III', 'Dosen', 3),
(141, '149004', 'Mantidi', '56a21b68ee81c2911a21b94c03b3926e', 'Surabaya', '1982-07-04', 'Pria', 'Buddha', 'STRATA II', 'Dosen', 3),
(142, '149005', 'Celvin', '2a5fdc5dd34fa29ea4a95b27eb8cef52', 'Jakarta', '1990-12-04', 'Pria', 'Kristen Protestan', 'STRATA II', 'Guru', 3),
(143, '149006', 'Herry', '1b0c3f59343117e9731dab34c00ca7f4', 'Malang', '1989-04-12', 'Pria', 'Kristen Protestan', 'STRATA I', 'Wirausahawan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_keluarga`
--

CREATE TABLE `user_keluarga` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `keluarga_id` int(11) NOT NULL,
  `hubungan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_keluarga`
--

INSERT INTO `user_keluarga` (`id`, `user_id`, `keluarga_id`, `hubungan`) VALUES
(2, 41, 19, 'Istri'),
(3, 43, 18, 'Anak'),
(4, 41, 18, 'Anak'),
(5, 37, 17, 'Istri'),
(6, 36, 17, 'Anak'),
(7, 39, 16, 'Anak'),
(8, 37, 16, 'Anak'),
(9, 34, 14, 'Anak'),
(10, 33, 13, 'Istri'),
(11, 32, 13, 'Anak'),
(12, 30, 10, 'Istri'),
(13, 27, 9, 'Anak'),
(14, 24, 7, 'Istri'),
(15, 23, 7, 'Anak'),
(16, 21, 5, 'Istri'),
(17, 22, 5, 'Anak'),
(18, 18, 4, 'Anak'),
(19, 14, 2, 'Istri'),
(20, 15, 2, 'Anak'),
(21, 16, 1, 'Anak'),
(22, 44, 20, 'Istri'),
(23, 45, 20, 'Anak'),
(24, 46, 20, 'Anak'),
(25, 49, 21, 'Anak'),
(26, 51, 23, 'Anak'),
(27, 54, 25, 'Istri'),
(28, 55, 26, 'Istri'),
(29, 59, 28, 'Istri'),
(30, 56, 27, 'Istri'),
(31, 60, 29, 'Anak'),
(32, 61, 30, 'Istri'),
(33, 64, 32, 'Istri'),
(34, 67, 32, 'Anak'),
(35, 71, 33, 'Istri'),
(36, 70, 34, 'Anak'),
(37, 72, 36, 'Anak'),
(38, 73, 37, 'Istri'),
(39, 74, 37, 'Anak'),
(40, 77, 38, 'Istri'),
(41, 78, 38, 'Anak'),
(42, 81, 39, 'Istri'),
(43, 84, 40, 'Anak'),
(44, 85, 40, 'Anak'),
(45, 88, 42, 'Istri'),
(46, 91, 43, 'Anak'),
(47, 93, 45, 'Anak'),
(48, 95, 45, 'Anak'),
(49, 97, 48, 'Istri'),
(50, 22, 48, 'Anak'),
(51, 99, 48, 'Anak'),
(52, 101, 49, 'Anak'),
(53, 120, 63, 'Istri'),
(54, 121, 63, 'Anak'),
(55, 123, 63, 'Anak'),
(56, 119, 61, 'Anak'),
(57, 114, 58, 'Istri'),
(58, 115, 57, 'Istri'),
(59, 109, 56, 'Anak'),
(60, 106, 54, 'Istri'),
(61, 106, 53, 'Anak'),
(62, 142, 74, 'Anak'),
(63, 143, 74, 'Anak'),
(64, 137, 69, 'Anak'),
(65, 138, 70, 'Istri'),
(66, 133, 67, 'Istri'),
(67, 129, 68, 'Anak'),
(68, 131, 68, 'Anak'),
(69, 124, 64, 'Anak'),
(70, 125, 64, 'Istri'),
(71, 127, 65, 'Istri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pangan_keluarga`
--
ALTER TABLE `detail_pangan_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_pangan_keluarga_pangan_keluarga1_idx` (`pangan_keluarga_id`),
  ADD KEY `fk_detail_pangan_keluarga_pangan1_idx1` (`pangan_id`);

--
-- Indexes for table `jenis_pangan`
--
ALTER TABLE `jenis_pangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangan`
--
ALTER TABLE `pangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pangan_jenis_pangan1_idx` (`jenis_pangan_id`);

--
-- Indexes for table `pangan_keluarga`
--
ALTER TABLE `pangan_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pangan_keluarga_keluarga1_idx` (`keluarga_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_survei_keluarga1_idx` (`keluarga_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_status1_idx` (`status_id`);

--
-- Indexes for table `user_keluarga`
--
ALTER TABLE `user_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_keluarga_user1_idx` (`user_id`),
  ADD KEY `fk_user_keluarga_keluarga1_idx` (`keluarga_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pangan_keluarga`
--
ALTER TABLE `detail_pangan_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis_pangan`
--
ALTER TABLE `jenis_pangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `pangan`
--
ALTER TABLE `pangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `pangan_keluarga`
--
ALTER TABLE `pangan_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `user_keluarga`
--
ALTER TABLE `user_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pangan_keluarga`
--
ALTER TABLE `detail_pangan_keluarga`
  ADD CONSTRAINT `fk_detail_pangan_keluarga_pangan1` FOREIGN KEY (`pangan_id`) REFERENCES `pangan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_pangan_keluarga_pangan_keluarga1` FOREIGN KEY (`pangan_keluarga_id`) REFERENCES `pangan_keluarga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pangan`
--
ALTER TABLE `pangan`
  ADD CONSTRAINT `fk_pangan_jenis_pangan1` FOREIGN KEY (`jenis_pangan_id`) REFERENCES `jenis_pangan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pangan_keluarga`
--
ALTER TABLE `pangan_keluarga`
  ADD CONSTRAINT `fk_pangan_keluarga_keluarga1` FOREIGN KEY (`keluarga_id`) REFERENCES `keluarga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `survei`
--
ALTER TABLE `survei`
  ADD CONSTRAINT `fk_survei_keluarga1` FOREIGN KEY (`keluarga_id`) REFERENCES `keluarga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_keluarga`
--
ALTER TABLE `user_keluarga`
  ADD CONSTRAINT `fk_user_keluarga_keluarga1` FOREIGN KEY (`keluarga_id`) REFERENCES `keluarga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_keluarga_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
