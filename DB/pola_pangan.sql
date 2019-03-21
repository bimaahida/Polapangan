-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2019 at 08:03 PM
-- Server version: 5.5.60
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pola_pangan`
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
(148645, 1, 0, 'Beli', 0, 49548, 113),
(148646, 5, 0, 'Diberi', 0, 49548, 47),
(148647, 3, 0, 'Diberi', 0, 49548, 64),
(148648, 1, 100, 'Diberi', 25, 49549, 93),
(148649, 1, 50, 'Diberi', 12.5, 49549, 103),
(148650, 5, 750, 'Beli', 187.5, 49549, 119),
(148651, 1, 100, 'Diberi', 50, 49550, 92),
(148652, 1, 50, 'Beli', 25, 49550, 22),
(148653, 2, 60, 'Beli', 30, 49550, 31),
(148654, 1, 100, 'Pekarangan', 50, 49551, 3),
(148655, 1, 100, 'Pekarangan', 50, 49551, 54),
(148656, 1, 100, 'Beli', 50, 49551, 5),
(148657, 3, 300, 'Pekarangan', 150, 49552, 80),
(148658, 5, 500, 'Diberi', 250, 49552, 6),
(148659, 1, 100, 'Pekarangan', 50, 49552, 93),
(148660, 3, 300, 'Beli', 75, 49553, 76),
(148661, 4, 400, 'Diberi', 100, 49553, 93),
(148662, 1, 150, 'Pekarangan', 37.5, 49553, 124),
(148663, 4, 1200, 'Pekarangan', 1200, 49554, 111),
(148664, 5, 125, 'Beli', 125, 49554, 42),
(148665, 2, 25, 'Diberi', 25, 49554, 26),
(148666, 2, 100, 'Beli', 33.333333333333, 49555, 22),
(148667, 5, 750, 'Pekarangan', 250, 49555, 9),
(148668, 2, 200, 'Pekarangan', 66.666666666667, 49555, 76),
(148669, 3, 18.75, 'Pekarangan', 18.75, 49556, 17),
(148670, 5, 500, 'Pekarangan', 500, 49556, 98),
(148671, 1, 100, 'Pekarangan', 100, 49556, 14),
(148672, 5, 62.5, 'Pekarangan', 62.5, 49557, 29),
(148673, 1, 12.5, 'Pekarangan', 12.5, 49557, 26),
(148674, 5, 50, 'Pekarangan', 50, 49557, 44),
(148675, 2, 24, 'Pekarangan', 8, 49558, 35),
(148676, 2, 200, 'Pekarangan', 66.666666666667, 49558, 120),
(148677, 4, 20, 'Pekarangan', 6.6666666666667, 49558, 133),
(148678, 2, 100, 'Diberi', 50, 49559, 24),
(148679, 3, 450, 'Pekarangan', 225, 49559, 9),
(148680, 1, 100, 'Pekarangan', 50, 49559, 95),
(148681, 1, 10, 'Pekarangan', 3.3333333333333, 49560, 134),
(148682, 2, 200, 'Diberi', 66.666666666667, 49560, 72),
(148683, 3, 300, 'Pekarangan', 100, 49560, 76),
(148684, 1, 5, 'Beli', 1.6666666666667, 49561, 141),
(148685, 5, 62.5, 'Pekarangan', 20.833333333333, 49561, 29),
(148686, 1, 25, 'Diberi', 8.3333333333333, 49561, 46),
(148687, 1, 7.5, 'Pekarangan', 7.5, 49562, 105),
(148688, 1, 100, 'Pekarangan', 100, 49562, 96),
(148689, 5, 500, 'Diberi', 500, 49562, 74),
(148690, 5, 750, 'Diberi', 250, 49563, 117),
(148691, 5, 104.16666666667, 'Pekarangan', 34.722222222222, 49563, 41),
(148692, 3, 300, 'Pekarangan', 100, 49563, 55),
(148693, 4, 400, 'Diberi', 133.33333333333, 49564, 102),
(148694, 5, 750, 'Diberi', 250, 49564, 119),
(148695, 3, 300, 'Beli', 100, 49564, 97),
(148696, 5, 500, 'Pekarangan', 500, 49565, 89),
(148697, 3, 300, 'Diberi', 300, 49565, 83),
(148698, 5, 500, 'Pekarangan', 500, 49565, 67),
(148699, 5, 500, 'Diberi', 125, 49566, 67),
(148700, 5, 500, 'Pekarangan', 125, 49566, 99),
(148701, 1, 10, 'Beli', 2.5, 49566, 140),
(148702, 2, 200, 'Beli', 100, 49567, 74),
(148703, 2, 12.5, 'Beli', 6.25, 49567, 17),
(148704, 3, 83, 'Beli', 41.5, 49567, 38),
(148705, 1, 150, 'Beli', 75, 49568, 117),
(148706, 2, 100, 'Pekarangan', 50, 49568, 18),
(148707, 5, 500, 'Beli', 250, 49568, 78),
(148708, 2, 25, 'Diberi', 8.3333333333333, 49569, 26),
(148709, 3, 300, 'Beli', 100, 49569, 94),
(148710, 2, 600, 'Diberi', 200, 49569, 111),
(148711, 4, 400, 'Diberi', 133.33333333333, 49570, 53),
(148712, 4, 400, 'Diberi', 133.33333333333, 49570, 53),
(148713, 2, 100, 'Diberi', 33.333333333333, 49570, 22),
(148714, 3, 300, 'Pekarangan', 100, 49571, 78),
(148715, 4, 24, 'Diberi', 8, 49571, 138),
(148716, 4, 600, 'Beli', 200, 49571, 117),
(148717, 5, 25, 'Pekarangan', 8.3333333333333, 49572, 142),
(148718, 3, 300, 'Diberi', 100, 49572, 104),
(148719, 4, 400, 'Beli', 133.33333333333, 49572, 88),
(148720, 5, 50, 'Pekarangan', 50, 49573, 49),
(148721, 3, 300, 'Pekarangan', 300, 49573, 101),
(148722, 4, 40, 'Beli', 40, 49573, 48),
(148723, 2, 18.75, 'Pekarangan', 6.25, 49574, 122),
(148724, 5, 250, 'Pekarangan', 83.333333333333, 49574, 4),
(148725, 5, 1000, 'Diberi', 333.33333333333, 49574, 130),
(148726, 1, 100, 'Pekarangan', 100, 49575, 75),
(148727, 4, 400, 'Beli', 400, 49575, 96),
(148728, 5, 104.16666666667, 'Pekarangan', 104.16666666667, 49575, 41),
(148729, 3, 300, 'Pekarangan', 100, 49576, 61),
(148730, 4, 200, 'Beli', 66.666666666667, 49576, 10),
(148731, 3, 300, 'Beli', 100, 49576, 3),
(148732, 4, 400, 'Beli', 133.33333333333, 49577, 58),
(148733, 5, 500, 'Pekarangan', 166.66666666667, 49577, 100),
(148734, 4, 400, 'Beli', 133.33333333333, 49577, 74),
(148735, 5, 500, 'Diberi', 125, 49578, 82),
(148736, 3, 300, 'Beli', 75, 49578, 52),
(148737, 3, 15, 'Beli', 3.75, 49578, 132),
(148738, 5, 50, 'Pekarangan', 12.5, 49579, 140),
(148739, 4, 200, 'Pekarangan', 50, 49579, 112),
(148740, 5, 500, 'Diberi', 125, 49579, 57),
(148741, 5, 500, 'Beli', 250, 49580, 58),
(148742, 1, 100, 'Beli', 50, 49580, 58),
(148743, 1, 100, 'Diberi', 50, 49580, 93),
(148744, 5, 500, 'Pekarangan', 250, 49581, 56),
(148745, 1, 100, 'Beli', 50, 49581, 98),
(148746, 4, 400, 'Diberi', 200, 49581, 58),
(148747, 5, 300, 'Beli', 100, 49582, 33),
(148748, 3, 300, 'Pekarangan', 100, 49582, 64),
(148749, 3, 90, 'Pekarangan', 30, 49582, 19),
(148750, 4, 40, 'Beli', 40, 49583, 49),
(148751, 3, 300, 'Diberi', 300, 49583, 63),
(148752, 5, 500, 'Beli', 500, 49583, 97),
(148753, 4, 100, 'Diberi', 50, 49584, 46),
(148754, 3, 15, 'Diberi', 7.5, 49584, 132),
(148755, 5, 250, 'Pekarangan', 125, 49584, 18),
(148756, 5, 31.25, 'Beli', 31.25, 49585, 17),
(148757, 5, 500, 'Beli', 500, 49585, 81),
(148758, 4, 400, 'Diberi', 400, 49585, 63),
(148759, 1, 150, 'Pekarangan', 75, 49586, 11),
(148760, 1, 60, 'Diberi', 30, 49586, 33),
(148761, 4, 2400, 'Pekarangan', 1200, 49586, 127),
(148762, 3, 30, 'Pekarangan', 7.5, 49587, 43),
(148763, 3, 30, 'Pekarangan', 7.5, 49587, 44),
(148764, 4, 25, 'Beli', 6.25, 49587, 131),
(148765, 4, 400, 'Beli', 200, 49588, 52),
(148766, 5, 125, 'Diberi', 62.5, 49588, 27),
(148767, 5, 250, 'Diberi', 125, 49588, 10),
(148768, 2, 20, 'Pekarangan', 6.6666666666667, 49589, 49),
(148769, 4, 1200, 'Beli', 400, 49589, 111),
(148770, 2, 20, 'Pekarangan', 6.6666666666667, 49589, 136),
(148771, 5, 750, 'Diberi', 187.5, 49590, 125),
(148772, 5, 50, 'Diberi', 12.5, 49590, 49),
(148773, 4, 40, 'Beli', 10, 49590, 134),
(148774, 1, 100, 'Pekarangan', 100, 49591, 71),
(148775, 4, 400, 'Beli', 400, 49591, 53),
(148776, 4, 400, 'Pekarangan', 400, 49591, 14),
(148777, 3, 90, 'Diberi', 90, 49592, 31),
(148778, 5, 250, 'Beli', 250, 49592, 10),
(148779, 5, 125, 'Beli', 125, 49592, 27),
(148780, 4, 400, 'Pekarangan', 400, 49593, 6),
(148781, 5, 125, 'Diberi', 125, 49593, 27),
(148782, 1, 50, 'Beli', 50, 49593, 103),
(148783, 4, 600, 'Diberi', 300, 49594, 106),
(148784, 3, 37.5, 'Diberi', 18.75, 49594, 29),
(148785, 3, 75, 'Beli', 37.5, 49594, 46),
(148786, 3, 30, 'Diberi', 10, 49595, 140),
(148787, 1, 125, 'Pekarangan', 41.666666666667, 49595, 107),
(148788, 4, 200, 'Diberi', 66.666666666667, 49595, 115),
(148789, 1, 16.666666666667, 'Diberi', 8.3333333333333, 49596, 118),
(148790, 1, 100, 'Beli', 50, 49596, 56),
(148791, 3, 28.125, 'Beli', 14.0625, 49596, 122),
(148792, 3, 300, 'Beli', 150, 49597, 113),
(148793, 3, 300, 'Diberi', 150, 49597, 84),
(148794, 1, 25, 'Pekarangan', 12.5, 49597, 121),
(148795, 1, 5, 'Beli', 1.6666666666667, 49598, 15),
(148796, 5, 83.333333333333, 'Beli', 27.777777777778, 49598, 118),
(148797, 5, 1000, 'Beli', 333.33333333333, 49598, 130),
(148798, 3, 399.9999999, 'Beli', 133.3333333, 49599, 1),
(148799, 3, 150, 'Pekarangan', 50, 49599, 112),
(148800, 3, 15, 'Beli', 5, 49599, 20),
(148801, 5, 750, 'Beli', 375, 49600, 119),
(148802, 2, 250, 'Diberi', 125, 49600, 107),
(148803, 4, 120, 'Pekarangan', 60, 49600, 19),
(148804, 5, 750, 'Pekarangan', 187.5, 49601, 119),
(148805, 2, 200, 'Beli', 50, 49601, 94),
(148806, 5, 50, 'Diberi', 12.5, 49601, 44),
(148807, 3, 450, 'Pekarangan', 150, 49602, 119),
(148808, 5, 500, 'Pekarangan', 166.66666666667, 49602, 64),
(148809, 1, 5, 'Beli', 1.6666666666667, 49602, 141),
(148810, 2, 20, 'Pekarangan', 6.6666666666667, 49603, 135),
(148811, 5, 1000, 'Pekarangan', 333.33333333333, 49603, 36),
(148812, 2, 200, 'Pekarangan', 66.666666666667, 49603, 104),
(148813, 2, 200, 'Diberi', 66.666666666667, 49604, 82),
(148814, 5, 500, 'Diberi', 166.66666666667, 49604, 114),
(148815, 4, 400, 'Beli', 133.33333333333, 49604, 51),
(148816, 1, 10, 'Beli', 10, 49605, 48),
(148817, 3, 300, 'Pekarangan', 300, 49605, 95),
(148818, 2, 200, 'Diberi', 200, 49605, 53),
(148819, 4, 400, 'Diberi', 200, 49606, 71),
(148820, 4, 400, 'Beli', 200, 49606, 67),
(148821, 2, 300, 'Pekarangan', 150, 49606, 119),
(148822, 3, 300, 'Beli', 150, 49607, 6),
(148823, 1, 100, 'Diberi', 50, 49607, 77),
(148824, 4, 100, 'Beli', 50, 49607, 25),
(148825, 4, 100, 'Pekarangan', 25, 49608, 46),
(148826, 4, 600, 'Pekarangan', 150, 49608, 11),
(148827, 4, 400, 'Pekarangan', 100, 49608, 69),
(148828, 2, 200, 'Diberi', 100, 49609, 57),
(148829, 2, 20, 'Beli', 10, 49609, 135),
(148830, 3, 30, 'Diberi', 15, 49609, 136),
(148831, 5, 500, 'Diberi', 125, 49610, 89),
(148832, 4, 400, 'Pekarangan', 100, 49610, 69),
(148833, 2, 20, 'Pekarangan', 5, 49610, 48),
(148834, 4, 24, 'Diberi', 8, 49611, 138),
(148835, 3, 300, 'Pekarangan', 100, 49611, 79),
(148836, 2, 200, 'Pekarangan', 66.666666666667, 49611, 87),
(148837, 3, 18.75, 'Pekarangan', 4.6875, 49612, 131),
(148838, 4, 400, 'Diberi', 100, 49612, 85),
(148839, 5, 500, 'Diberi', 125, 49612, 87),
(148840, 4, 400, 'Beli', 100, 49613, 110),
(148841, 3, 30, 'Diberi', 7.5, 49613, 135),
(148842, 1, 25, 'Diberi', 6.25, 49613, 42),
(148843, 2, 12.5, 'Diberi', 4.1666666666667, 49614, 131),
(148844, 3, 450, 'Pekarangan', 150, 49614, 11),
(148845, 5, 750, 'Diberi', 250, 49614, 106),
(148846, 1, 100, 'Beli', 33.333333333333, 49615, 96),
(148847, 5, 25, 'Diberi', 8.3333333333333, 49615, 142),
(148848, 3, 300, 'Beli', 100, 49615, 98),
(148849, 3, 300, 'Beli', 100, 49616, 63),
(148850, 5, 500, 'Beli', 166.66666666667, 49616, 114),
(148851, 4, 400, 'Pekarangan', 133.33333333333, 49616, 52),
(148852, 5, 500, 'Diberi', 166.66666666667, 49617, 65),
(148853, 4, 400, 'Diberi', 133.33333333333, 49617, 52),
(148854, 4, 40, 'Beli', 13.333333333333, 49617, 49),
(148855, 3, 300, 'Beli', 300, 49618, 50),
(148856, 2, 100, 'Pekarangan', 100, 49618, 24),
(148857, 4, 800, 'Beli', 800, 49618, 130),
(148858, 5, 500, 'Beli', 166.66666666667, 49619, 96),
(148859, 3, 300, 'Beli', 100, 49619, 79),
(148860, 3, 300, 'Beli', 100, 49619, 3),
(148861, 3, 300, 'Pekarangan', 75, 49620, 113),
(148862, 4, 100, 'Diberi', 25, 49620, 121),
(148863, 3, 30, 'Pekarangan', 7.5, 49620, 136),
(148864, 3, 600, 'Pekarangan', 600, 49621, 36),
(148865, 5, 25, 'Diberi', 25, 49621, 20),
(148866, 2, 25, 'Diberi', 25, 49621, 26),
(148867, 1, 100, 'Pekarangan', 25, 49622, 95),
(148868, 3, 300, 'Beli', 75, 49622, 88),
(148869, 4, 400, 'Beli', 100, 49622, 83),
(148870, 2, 400, 'Diberi', 400, 49623, 126),
(148871, 3, 375, 'Diberi', 375, 49623, 107),
(148872, 5, 83, 'Beli', 83, 49623, 39),
(148873, 2, 200, 'Beli', 100, 49624, 56),
(148874, 2, 200, 'Pekarangan', 100, 49624, 88),
(148875, 3, 90, 'Diberi', 45, 49624, 137),
(148876, 1, 27.666666666667, 'Beli', 13.833333333333, 49625, 38),
(148877, 4, 400, 'Beli', 200, 49625, 59),
(148878, 5, 500, 'Beli', 250, 49625, 78),
(148879, 2, 100, 'Pekarangan', 100, 49626, 115),
(148880, 2, 11.428571428, 'Beli', 11.428571428, 49626, 16),
(148881, 4, 20, 'Beli', 20, 49626, 133),
(148882, 2, 100, 'Diberi', 100, 49627, 18),
(148883, 2, 200, 'Diberi', 200, 49627, 81),
(148884, 3, 300, 'Beli', 300, 49627, 5),
(148885, 1, 100, 'Beli', 100, 49628, 64),
(148886, 2, 10, 'Beli', 10, 49628, 133),
(148887, 4, 400, 'Diberi', 400, 49628, 85),
(148888, 3, 150, 'Pekarangan', 150, 49629, 24),
(148889, 1, 100, 'Pekarangan', 100, 49629, 87),
(148890, 4, 20, 'Beli', 20, 49629, 20),
(148891, 3, 30, 'Pekarangan', 15, 49630, 45),
(148892, 4, 800, 'Beli', 400, 49630, 36),
(148893, 1, 10, 'Diberi', 5, 49630, 43),
(148894, 5, 1000, 'Diberi', 333.33333333333, 49631, 129),
(148895, 4, 400, 'Pekarangan', 133.33333333333, 49631, 69),
(148896, 5, 500, 'Pekarangan', 166.66666666667, 49631, 88),
(148897, 5, 750, 'Beli', 187.5, 49632, 9),
(148898, 1, 100, 'Diberi', 25, 49632, 7),
(148899, 1, 100, 'Diberi', 25, 49632, 90),
(148900, 5, 1000, 'Beli', 500, 49633, 36),
(148901, 4, 400, 'Diberi', 200, 49633, 3),
(148902, 3, 300, 'Pekarangan', 150, 49633, 52),
(148903, 4, 37.5, 'Pekarangan', 9.375, 49634, 122),
(148904, 1, 200, 'Pekarangan', 50, 49634, 126),
(148905, 3, 450, 'Diberi', 112.5, 49634, 124),
(148906, 1, 9.375, 'Pekarangan', 2.34375, 49635, 122),
(148907, 3, 30, 'Pekarangan', 7.5, 49635, 43),
(148908, 5, 625, 'Pekarangan', 156.25, 49635, 107),
(148909, 1, 10, 'Beli', 3.3333333333333, 49636, 136),
(148910, 1, 50, 'Diberi', 16.666666666667, 49636, 24),
(148911, 3, 300, 'Pekarangan', 100, 49636, 73),
(148912, 3, 300, 'Pekarangan', 300, 49637, 73),
(148913, 5, 750, 'Pekarangan', 750, 49637, 119),
(148914, 5, 25, 'Pekarangan', 25, 49637, 108),
(148915, 5, 62.5, 'Pekarangan', 62.5, 49638, 26),
(148916, 2, 55.333333333333, 'Beli', 55.333333333333, 49638, 38),
(148917, 4, 400, 'Pekarangan', 400, 49638, 51),
(148918, 4, 400, 'Diberi', 100, 49639, 63),
(148919, 3, 30, 'Pekarangan', 7.5, 49639, 21),
(148920, 1, 100, 'Pekarangan', 25, 49639, 120),
(148921, 4, 400, 'Diberi', 133.33333333333, 49640, 83),
(148922, 5, 500, 'Beli', 166.66666666667, 49640, 65),
(148923, 2, 200, 'Diberi', 66.666666666667, 49640, 90),
(148924, 1, 12, 'Pekarangan', 12, 49641, 35),
(148925, 4, 400, 'Beli', 400, 49641, 116),
(148926, 3, 15, 'Beli', 15, 49641, 108),
(148927, 4, 400, 'Beli', 133.33333333333, 49642, 116),
(148928, 5, 104.16666666667, 'Beli', 34.722222222222, 49642, 41),
(148929, 2, 50, 'Pekarangan', 16.666666666667, 49642, 25),
(148930, 5, 300, 'Pekarangan', 300, 49643, 33),
(148931, 1, 100, 'Beli', 100, 49643, 81),
(148932, 1, 133.3333333, 'Pekarangan', 133.3333333, 49643, 1),
(148933, 4, 400, 'Diberi', 200, 49644, 57),
(148934, 2, 50, 'Beli', 25, 49644, 42),
(148935, 5, 250, 'Beli', 125, 49644, 4),
(148936, 1, 50, 'Diberi', 12.5, 49645, 109),
(148937, 2, 10, 'Pekarangan', 2.5, 49645, 133),
(148938, 5, 500, 'Beli', 125, 49645, 14),
(148939, 2, 250, 'Pekarangan', 125, 49646, 107),
(148940, 1, 100, 'Diberi', 50, 49646, 57),
(148941, 5, 500, 'Diberi', 250, 49646, 139),
(148942, 3, 300, 'Diberi', 100, 49647, 86),
(148943, 1, 100, 'Beli', 33.333333333333, 49647, 65),
(148944, 1, 50, 'Pekarangan', 16.666666666667, 49647, 115),
(148945, 5, 37.5, 'Diberi', 12.5, 49648, 105),
(148946, 1, 150, 'Diberi', 50, 49648, 11),
(148947, 2, 80, 'Pekarangan', 26.666666666667, 49648, 37),
(148948, 2, 20, 'Beli', 6.6666666666667, 49649, 48),
(148949, 1, 100, 'Beli', 33.333333333333, 49649, 6),
(148950, 5, 500, 'Diberi', 166.66666666667, 49649, 139),
(148951, 2, 200, 'Diberi', 100, 49650, 104),
(148952, 5, 500, 'Diberi', 250, 49650, 92),
(148953, 2, 200, 'Pekarangan', 100, 49650, 86),
(148954, 5, 25, 'Beli', 12.5, 49651, 133),
(148955, 3, 450, 'Pekarangan', 225, 49651, 9),
(148956, 2, 200, 'Pekarangan', 100, 49651, 65),
(148957, 2, 200, 'Diberi', 200, 49652, 6),
(148958, 4, 66.666666666667, 'Pekarangan', 66.666666666667, 49652, 118),
(148959, 4, 400, 'Diberi', 400, 49652, 53),
(148960, 2, 200, 'Pekarangan', 50, 49653, 51),
(148961, 3, 225, 'Diberi', 56.25, 49653, 123),
(148962, 4, 20, 'Diberi', 5, 49653, 141),
(148963, 3, 15, 'Diberi', 5, 49654, 141),
(148964, 3, 300, 'Beli', 100, 49654, 87),
(148965, 4, 600, 'Pekarangan', 200, 49654, 124),
(148966, 4, 400, 'Beli', 400, 49655, 88),
(148967, 3, 150, 'Diberi', 150, 49655, 115),
(148968, 2, 300, 'Diberi', 300, 49655, 124),
(148969, 3, 300, 'Diberi', 300, 49656, 99),
(148970, 4, 400, 'Diberi', 400, 49656, 53),
(148971, 3, 150, 'Diberi', 150, 49656, 109),
(148972, 5, 500, 'Pekarangan', 500, 49657, 114),
(148973, 2, 200, 'Pekarangan', 200, 49657, 61),
(148974, 1, 150, 'Diberi', 150, 49657, 106),
(148975, 5, 50, 'Diberi', 16.666666666667, 49658, 21),
(148976, 4, 400, 'Pekarangan', 133.33333333333, 49658, 57),
(148977, 1, 100, 'Diberi', 33.333333333333, 49658, 65),
(148978, 4, 40, 'Pekarangan', 10, 49659, 45),
(148979, 5, 500, 'Pekarangan', 125, 49659, 50),
(148980, 1, 100, 'Diberi', 25, 49659, 104),
(148981, 3, 300, 'Beli', 300, 49660, 77),
(148982, 4, 20, 'Beli', 20, 49660, 142),
(148983, 1, 25, 'Diberi', 25, 49660, 25),
(148984, 4, 400, 'Pekarangan', 200, 49661, 65),
(148985, 2, 20, 'Pekarangan', 10, 49661, 47),
(148986, 5, 37.5, 'Pekarangan', 18.75, 49661, 105),
(148987, 5, 250, 'Beli', 125, 49662, 103),
(148988, 2, 60, 'Beli', 30, 49662, 32),
(148989, 4, 400, 'Diberi', 200, 49662, 66),
(148990, 4, 400, 'Beli', 133.33333333333, 49663, 62),
(148991, 1, 40, 'Pekarangan', 13.333333333333, 49663, 37),
(148992, 1, 9.375, 'Beli', 3.125, 49663, 122),
(148993, 3, 300, 'Beli', 75, 49664, 97),
(148994, 2, 100, 'Beli', 25, 49664, 24),
(148995, 2, 200, 'Diberi', 50, 49664, 70),
(148996, 1, 100, 'Diberi', 25, 49665, 71),
(148997, 3, 300, 'Pekarangan', 75, 49665, 97),
(148998, 1, 100, 'Beli', 25, 49665, 51),
(148999, 5, 300, 'Beli', 100, 49666, 34),
(149000, 4, 400, 'Pekarangan', 133.33333333333, 49666, 14),
(149001, 5, 58.333333333333, 'Pekarangan', 19.444444444444, 49666, 40),
(149002, 2, 60, 'Diberi', 15, 49667, 137),
(149003, 3, 30, 'Diberi', 7.5, 49667, 134),
(149004, 2, 60, 'Pekarangan', 15, 49667, 31),
(149005, 2, 200, 'Beli', 200, 49668, 58),
(149006, 5, 500, 'Pekarangan', 500, 49668, 68),
(149007, 4, 200, 'Beli', 200, 49668, 112),
(149008, 3, 300, 'Beli', 75, 49669, 104),
(149009, 2, 18.75, 'Pekarangan', 4.6875, 49669, 122),
(149010, 4, 400, 'Diberi', 100, 49669, 92),
(149011, 1, 100, 'Diberi', 33.333333333333, 49670, 50),
(149012, 3, 399.9999999, 'Pekarangan', 133.3333333, 49670, 2),
(149013, 2, 60, 'Pekarangan', 20, 49670, 31),
(149014, 3, 18, 'Diberi', 9, 49671, 138),
(149015, 1, 10, 'Pekarangan', 5, 49671, 43),
(149016, 2, 200, 'Pekarangan', 100, 49671, 116),
(149017, 3, 150, 'Pekarangan', 37.5, 49672, 18),
(149018, 4, 800, 'Beli', 200, 49672, 130),
(149019, 5, 1000, 'Beli', 250, 49672, 126),
(149020, 5, 31.25, 'Pekarangan', 10.416666666667, 49673, 131),
(149021, 4, 40, 'Beli', 13.333333333333, 49673, 48),
(149022, 1, 100, 'Beli', 33.333333333333, 49673, 73),
(149025, 0, 0, 'Beli', 0, 49675, 133),
(149026, 0, 0, 'Beli', 0, 49675, 142),
(149028, 0, 0, 'Beli', 0, 49675, 1),
(149029, 0, 0, 'Beli', 0, 49675, 50),
(149030, 0, 0, 'Beli', 0, 49675, 49),
(149031, 0, 0, 'Beli', 0, 49675, 41),
(149032, 0, 0, 'Beli', 0, 49675, 17),
(149033, 0, 0, 'Beli', 0, 49675, 91),
(149034, 0, 0, 'Beli', 0, 49676, 142),
(149035, 0, 0, 'Beli', 0, 49676, 1),
(149036, 0, 0, 'Beli', 0, 49676, 17),
(149037, 0, 0, 'Beli', 0, 49676, 47),
(149038, 0, 0, 'Beli', 0, 49676, 135),
(149039, 0, 0, 'Beli', 0, 49676, 50),
(149040, 0, 0, 'Beli', 0, 49676, 133),
(149041, 0, 0, 'Beli', 0, 49677, 142),
(149042, 0, 0, 'Beli', 0, 49677, 133),
(149043, 0, 0, 'Beli', 0, 49677, 1),
(149044, 0, 0, 'Beli', 0, 49677, 3),
(149045, 0, 0, 'Beli', 0, 49677, 18),
(149046, 0, 0, 'Beli', 0, 49677, 140),
(149047, 0, 0, 'Beli', 0, 49677, 49),
(149048, 0, 0, 'Beli', 0, 49677, 50),
(149049, 1, 100, 'Beli', 50, 49568, 50),
(149050, 1, 25, 'Beli', 8.3333333333333, 49647, 42),
(149051, 1, 25, 'Beli', 25, 49678, 42);

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
(1, 'Padi - Padian', 0.5, 25),
(2, 'Umbi - Umbian', 0.5, 2.5),
(3, 'Pangan Hewani', 2, 24),
(4, 'Minyak dan Lemak', 0.5, 5),
(5, 'Buah/Biji Berminyak', 0.5, 1),
(6, 'Kacang-kacangan', 2, 10),
(7, 'Gula', 0.5, 2.5),
(8, 'Sayur dan Buah', 5, 30);

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
(1, '3507122331980001', 'SABAR ', 'Jl. Babatan No.52, Arjowinangun, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', 'Arjowinangun', '3', '6', '65132', -8.0370128, 112.6331047, 16),
(2, '3507122331980002', 'HERI PURWANTO', 'Jl. Kapri, Bumiayu, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'kedungkandang', 'Kedungkandang', '02', '02', '65126', -8.0174395, 112.6334047, 16),
(3, '3507122331980003', 'JONO', 'Jl. Kol Sugiono Gg. 7, Mergosono, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Kedungkandang', 'Kedungkandang', '9', '2', '65155', -7.9967953, 112.6344535, 16),
(4, '3507122331980004', 'DANI', 'Jalan Ki Ageng Gribig Gang 2, Madyopuro, Kota Malang, Jawa Timur', 'JAWA TIMUR', 'KOTA MALANG', 'KEDUNGKANDANG', 'MADYOPURO', '4', '4', '65139', -7.9809989, 112.6664179, 16),
(5, '3507122331980005', 'BAMBANG', 'Jl. KH.Malik DLM Gg. 5, Buring, Kota Malang, Jawa Timur', 'Jawa Timur', 'Malang', 'KEDUNGKANDANG', 'buring', '5', '8', '65136', -8.0013526, 112.6490852, 16),
(6, '1507133441980001', 'BRILIAN ', 'Jl. Tenaga Baru No.4, Blimbing, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', 'Blimbing', '6', '7', '65126', -7.9462888, 112.6480568, 12),
(7, '1507133441980002', 'NIZAR FAJAR ', 'Jalan Tenaga Baru 2 No.3, Blimbing, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', 'Blimbing', '5', '5', '65126', -7.9480055, 112.6487094, 12),
(8, '1507133441980003', 'SUGIMAN ', 'Jl. Ikan Piranha No.20, Purwodadi, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', 'Purwodadi', '2', '5', '65125', -7.9361518, 112.6441473, 12),
(9, '1507133441980004', 'HASIM ', 'Jl. Cakalang No.218, Polowijen, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', 'Polowijen', '6', '8', '65126', -7.9285085, 112.6413409, 12),
(10, '1507133441980005', 'NARSO ', 'Jl. Satria Bar. No.514, Balearjosari, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Blimbing', 'Balearjosari', '9', '4', '65126', -7.9222329, 112.646105, 12),
(11, '2167886544330001', 'JAMIN', 'Jl. Kaliurang Bar. Gg. 6, Samaan, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', 'Klojen', '6', '7', '65112', -7.9604827, 112.6284613, 14),
(12, '2167886544330002', 'DARMEN ', 'Jl. Brigjen Slamet Riadi Gg. 10, Oro-oro Dowo, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', 'Klojen', '6', '9', '65119', -7.9670934, 112.6294115, 14),
(13, '2167886544330003', 'SUTRISNO ', 'Jl. M H Thamrin Gg. 2, Klojen, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', 'Klojen', '9', '3', '65111', -7.9727455, 112.6345899, 14),
(14, '2167886544330004', 'BERO NUGROHO ', 'Jl. M H Thamrin Gg. I, Klojen, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', 'Klojen', '9', '6', '65111', -7.9727681, 112.6349355, 14),
(15, '2167886544330005', 'RAMENTO TOBING ', 'Jalan Semeru Gang 1, Kauman, Malang City, East Java, Indonesia', 'Jawa Timur', 'Kota Malang', 'Klojen', 'Klojen', '6', '8', '65119', -7.9766185, 112.6286038, 14),
(16, '2167976884330001', 'NANANG ', 'Gg. 14 A, Bandulan, Kota Malang, Jawa Timur, Indonesia', 'Jawa timur', 'Kota malang', 'Sukun', 'Sukun', '04', '9', '65146', NULL, NULL, 15),
(17, '2167976884330002', 'DENI ', 'Jl. Bandulan Gg. 8, Bandulan, Kota Malang, Jawa Timur, Indonesia', 'Jawa Timur', 'Kota malang', 'Sukun', 'sukun', '04', '9', '65146', -7.980495, 112.6071731, 15),
(18, '2167976884330003', 'ALDO ', 'Jl. Bandulan Gg. 1, Bandulan, Kota Malang, Jawa Timur, Indonesia', 'Jawa timur', 'Kota malang', 'Sukun', 'Sukun', '7', '1', '65146', -7.9848851, 112.6095307, 15),
(19, '2167976884330004', 'SANDY ', 'Jl. Bandulan Baru, Bandulan, Kota Malang, Jawa Timur, Indonesia', 'Jawa timur', 'Kota malang', 'Sukun', 'Sukun', '3', '8', '65146', -7.9878823, 112.6067798, 15),
(20, '2167976884330005', 'SYAHRUL ', 'Jalan Bandulan Barat, Bandulan, Kota Malang, Jawa Timur, Indonesia', 'Jawa Timur', 'Kota malang', 'Sukun', 'Sukun', '7', '4', '65146', -7.9790591, 112.5975642, 15),
(21, '5167978844330016', 'INDRA ', 'Jalan Candi Panggung Barat No.28 A, Mojolangu, Kota Malang, Jawa Timur, Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', 'Mojolangu', '8', '9', '65142', -7.9350631, 112.6167338, 99),
(22, '5167978844330002', 'SUJONO ', 'Jalan Candi Panggung Barat No.27 A, Mojolangu, Kota Malang, Jawa Timur, Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', 'Mojolangu', '7', '6', '65142', -7.9350605, 112.6165424, 99),
(23, '5167978844330003', 'ILYAS ', 'Jalan Candi Panggung Barat No.12 A, Mojolangu, Kota Malang, Jawa Timur, Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', 'Mojolangu', '7', '9', '65142', -7.9350605, 112.6165424, 99),
(24, '5167978844330004', 'ANDI ', 'Jalan Akordion Timur No.9, Tunggulwulung, Kota Malang, Jawa Timur, Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', 'Tunggulwulung', '6', '8', '65143', -7.9350605, 112.6165424, 99),
(25, '5167978844330006', 'ISOM ', 'Jalan Akordion No.47, Tunggulwulung, Kota Malang, Jawa Timur, Indonesia', 'Jawa Timur', 'Kota Malang', 'Kecamatan Lowokwaru', 'Tunggulwulung', '3', '2', '65143', -7.9292188, 112.6146329, 99);

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
(1, 'Nasi', 'gelas', 1, 133.3333333, 233.3333333, 0, 53.33333333, 5.333333333, 1),
(2, 'Nasi Jagung', 'Gelas', 1, 133.3333333, 233.3333333, 0, 53.33333333, 5.333333333, 1),
(3, 'Singkong', 'Potong', 1, 100, 175, 0, 40, 4, 2),
(4, 'Beras Singkong', 'Gelas', 1, 50, 175, 0, 40, 4, 2),
(5, 'Tiwul', 'Gelas', 1, 100, 350, 0, 80, 8, 2),
(6, 'Tiwul Kukus', 'Gelas', 1, 100, 175, 0, 40, 4, 2),
(7, 'Kentang', 'Biji Sedang', 1, 100, 87.5, 0, 20, 2, 2),
(8, 'Talas', 'Biji Sedang', 1, 200, 175, 0, 40, 4, 2),
(9, 'Ubi jalar', 'Biji Sedang', 1, 150, 175, 0, 40, 4, 2),
(10, 'Mie bendo / singkong', 'Piring Sedang', 1, 50, 175, 0, 40, 4, 2),
(11, 'Beras aruk', 'Gelas', 1, 150, 525, 0, 120, 12, 1),
(12, 'Hotong', 'Gelas', 1, 150, 525, 0, 120, 12, 1),
(13, 'Jali', 'Gelas', 1, 180, 525, 0, 120, 12, 1),
(14, 'Jewawut', 'Gelas', 1, 100, 350, 0, 80, 8, 1),
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
(93, 'kacang kapri', 'Ikat', 1, 100, 50, 0, 10, 3, 6),
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
(49548, 'Goropa woku blanga', '2016-05-17', 'Makan Malam', 3, 23),
(49549, ' Sambal raja', '2014-08-23', 'Makan Siang', 4, 20),
(49550, 'Goropa woku blanga', '2016-10-26', 'Makan Malam', 2, 9),
(49551, 'Gado gado', '2015-08-09', 'Makan Pagi', 2, 8),
(49552, 'Rujak cingur', '2018-12-29', 'Makan Pagi', 2, 4),
(49553, 'Nasi goreng piritan', '2015-11-11', 'Makan Siang', 4, 16),
(49554, 'Bihun kari', '2014-06-07', 'Makan Siang', 1, 25),
(49555, 'Gado gado', '2015-04-24', 'Makan Siang', 3, 20),
(49556, ' Sambal raja', '2017-12-14', 'Makan Malam', 1, 23),
(49557, 'Arsik ikan mas', '2017-05-07', 'Makan Malam', 1, 13),
(49558, 'Kwetiau kerang', '2017-09-20', 'Makan Malam', 3, 21),
(49559, 'Ikan kuah asam', '2015-05-31', 'Makan Pagi', 2, 19),
(49560, 'Gado gado', '2017-04-28', 'Makan Malam', 3, 11),
(49561, 'Gurame kencong', '2014-08-23', 'Makan Malam', 3, 4),
(49562, 'Sop ikan', '2018-03-11', 'Makan Malam', 1, 19),
(49563, ' Sambal raja', '2017-12-09', 'Makan Pagi', 3, 15),
(49564, 'Soto Medan', '2017-07-18', 'Makan Pagi', 3, 12),
(49565, 'Nasi uduk', '2018-05-11', 'Makan Pagi', 1, 6),
(49566, 'Goropa woku blanga', '2016-11-24', 'Makan Siang', 4, 2),
(49567, 'Gado gado', '2016-04-16', 'Makan Malam', 2, 24),
(49568, 'Soto Medan', '2014-11-20', 'Makan Pagi', 2, 5),
(49569, 'Ayam lodho', '2018-07-20', 'Makan Siang', 3, 13),
(49570, 'Soto betawi', '2014-09-17', 'Makan Pagi', 3, 8),
(49571, 'Anyang', '2015-11-19', 'Makan Siang', 3, 9),
(49572, 'Binte biluhuta', '2016-03-26', 'Makan Pagi', 3, 5),
(49573, 'Gurame pesmol', '2017-08-02', 'Makan Siang', 1, 4),
(49574, 'Mie aceh', '2015-11-13', 'Makan Siang', 3, 20),
(49575, 'Gudeg mangar', '2014-12-20', 'Makan Pagi', 1, 15),
(49576, 'Bihun kari', '2016-02-14', 'Makan Pagi', 3, 14),
(49577, 'Ayam tangkap', '2017-08-23', 'Makan Malam', 3, 6),
(49578, 'Ikan asam pedas', '2016-12-21', 'Makan Malam', 4, 19),
(49579, 'Ikan tombur', '2014-11-07', 'Makan Siang', 4, 6),
(49580, 'Ikan tombur', '2014-06-01', 'Makan Pagi', 2, 15),
(49581, 'Ikan kuah asam', '2016-01-16', 'Makan Malam', 2, 25),
(49582, 'Lawar kenus', '2016-01-18', 'Makan Malam', 3, 2),
(49583, ' Sambal raja', '2016-11-08', 'Makan Pagi', 1, 1),
(49584, 'Gado gado', '2014-06-08', 'Makan Pagi', 2, 1),
(49585, ' Nasi ulam', '2014-08-14', 'Makan Siang', 1, 16),
(49586, 'Bebek betutu', '2015-10-15', 'Makan Malam', 2, 12),
(49587, 'Goropa woku blanga', '2014-09-03', 'Makan Pagi', 4, 21),
(49588, 'Ayam plecingan', '2015-09-04', 'Makan Malam', 2, 18),
(49589, 'Lontong opor', '2015-01-02', 'Makan Pagi', 3, 11),
(49590, 'Mangut', '2015-10-16', 'Makan Siang', 4, 2),
(49591, 'Sop ikan', '2015-02-03', 'Makan Siang', 1, 15),
(49592, 'Soto Medan', '2017-06-26', 'Makan Pagi', 1, 11),
(49593, 'Bebek betutu', '2014-03-13', 'Makan Siang', 1, 6),
(49594, 'Gudeg mangar', '2018-01-25', 'Makan Siang', 2, 22),
(49595, 'Gurame pecak', '2016-03-25', 'Makan Siang', 3, 1),
(49596, 'Nasi guri', '2016-01-18', 'Makan Pagi', 2, 24),
(49597, ' Nasi ulam', '2017-06-17', 'Makan Siang', 2, 3),
(49598, 'Sate bandeng', '2014-04-19', 'Makan Siang', 3, 16),
(49599, 'Bihun kari', '2016-12-31', 'Makan Pagi', 3, 3),
(49600, 'Nasi ganduk', '2014-07-01', 'Makan Malam', 2, 11),
(49601, 'Nasi kuning', '2018-07-28', 'Makan Malam', 4, 1),
(49602, 'Gabus pucung', '2016-01-18', 'Makan Malam', 3, 11),
(49603, 'Anyang', '2014-10-15', 'Makan Malam', 3, 4),
(49604, ' Nasi ulam', '2016-01-03', 'Makan Malam', 3, 25),
(49605, 'Rujak cingur', '2017-05-21', 'Makan Siang', 1, 8),
(49606, 'Karee kameng', '2015-02-11', 'Makan Siang', 2, 21),
(49607, 'Gulai ikan salai', '2016-09-28', 'Makan Siang', 2, 5),
(49608, 'Kwetiau kerang', '2014-06-13', 'Makan Malam', 4, 15),
(49609, 'Anyang', '2016-12-12', 'Makan Siang', 2, 20),
(49610, 'Srombotan', '2014-07-29', 'Makan Pagi', 4, 8),
(49611, 'Gurame kencong', '2016-04-22', 'Makan Pagi', 3, 4),
(49612, 'Gulai kepala ikan', '2018-10-15', 'Makan Pagi', 4, 16),
(49613, 'Gurame pecak', '2015-03-15', 'Makan Pagi', 4, 2),
(49614, ' Nasi ulam', '2016-02-20', 'Makan Siang', 3, 15),
(49615, 'Sate bandeng', '2014-01-27', 'Makan Pagi', 3, 7),
(49616, 'Bihun kari', '2014-05-23', 'Makan Pagi', 3, 9),
(49617, 'Ayam plecingan', '2014-01-17', 'Makan Malam', 3, 20),
(49618, 'Gabus pucung', '2017-04-09', 'Makan Siang', 1, 7),
(49619, 'Nasi kuning', '2018-10-30', 'Makan Pagi', 3, 21),
(49620, 'Rujak cingur', '2015-09-24', 'Makan Siang', 4, 14),
(49621, ' Nasi ulam', '2015-02-15', 'Makan Malam', 1, 8),
(49622, 'Nasi ganduk', '2017-08-21', 'Makan Siang', 4, 14),
(49623, 'Sate bandeng', '2017-01-28', 'Makan Siang', 1, 17),
(49624, 'Sogili woku daun', '2016-07-02', 'Makan Pagi', 2, 1),
(49625, 'Ayam plecingan', '2016-07-07', 'Makan Pagi', 2, 2),
(49626, 'Tinutuan', '2014-07-08', 'Makan Siang', 1, 22),
(49627, 'Keumamah', '2018-08-18', 'Makan Siang', 1, 22),
(49628, 'Mangut', '2014-02-21', 'Makan Pagi', 1, 1),
(49629, 'Bihun kari', '2017-01-12', 'Makan Pagi', 1, 5),
(49630, 'Sop ikan', '2017-11-26', 'Makan Malam', 2, 4),
(49631, 'Mangut', '2016-10-17', 'Makan Malam', 3, 17),
(49632, 'Binte biluhuta', '2017-03-19', 'Makan Malam', 4, 23),
(49633, 'Sangu tutug oncom', '2016-11-09', 'Makan Malam', 2, 9),
(49634, 'Ikan asam pedas', '2015-05-08', 'Makan Siang', 4, 4),
(49635, 'Gurame kencong', '2016-04-19', 'Makan Pagi', 4, 22),
(49636, 'Nasi goreng piritan', '2017-11-13', 'Makan Siang', 3, 7),
(49637, 'Bebek betutu', '2018-07-31', 'Makan Pagi', 1, 7),
(49638, 'Lontong opor', '2017-11-08', 'Makan Pagi', 1, 19),
(49639, 'Tinutuan', '2014-07-21', 'Makan Pagi', 4, 10),
(49640, 'Rujak cingur', '2016-03-23', 'Makan Siang', 3, 25),
(49641, 'Sie itek', '2016-06-09', 'Makan Malam', 1, 11),
(49642, 'Gudeg mangar', '2016-12-22', 'Makan Pagi', 3, 18),
(49643, 'Bihun kari', '2018-02-22', 'Makan Siang', 1, 4),
(49644, 'Ikan tombur', '2015-07-22', 'Makan Siang', 2, 7),
(49645, 'Arsik ikan mas', '2017-01-13', 'Makan Malam', 4, 24),
(49646, 'Sogili woku daun', '2018-06-30', 'Makan Siang', 2, 4),
(49647, 'Gurame kencong', '2016-01-01', 'Makan Siang', 3, 1),
(49648, 'Srombotan', '2014-06-25', 'Makan Malam', 3, 20),
(49649, 'Bebek betutu', '2018-07-28', 'Makan Pagi', 3, 24),
(49650, 'Tinutuan', '2015-05-19', 'Makan Pagi', 2, 2),
(49651, 'Gurame pesmol', '2017-04-09', 'Makan Siang', 2, 3),
(49652, 'Goropa woku blanga', '2017-11-14', 'Makan Pagi', 1, 12),
(49653, 'Bebek betutu', '2017-07-20', 'Makan Pagi', 4, 13),
(49654, 'Arsik ikan mas', '2015-06-02', 'Makan Siang', 3, 25),
(49655, 'Mie aceh', '2015-09-17', 'Makan Malam', 1, 22),
(49656, 'Ayam tangkap', '2018-05-28', 'Makan Malam', 1, 14),
(49657, 'Nasi guri', '2018-02-20', 'Makan Siang', 1, 25),
(49658, 'Ayam tangkap', '2017-06-16', 'Makan Pagi', 3, 10),
(49659, 'Nasi ganduk', '2017-02-13', 'Makan Siang', 4, 13),
(49660, 'Soto Medan', '2017-02-11', 'Makan Malam', 1, 13),
(49661, 'Mie aceh', '2016-05-03', 'Makan Siang', 2, 10),
(49662, 'Gurame kencong', '2016-10-29', 'Makan Siang', 2, 13),
(49663, 'Nasi ganduk', '2018-03-22', 'Makan Siang', 3, 5),
(49664, 'Keumamah', '2017-04-24', 'Makan Malam', 4, 22),
(49665, 'Rujak cingur', '2016-12-03', 'Makan Pagi', 4, 5),
(49666, 'Sangu tutug oncom', '2016-10-14', 'Makan Siang', 3, 17),
(49667, 'Sogili woku daun', '2015-03-05', 'Makan Siang', 4, 7),
(49668, 'Mangut', '2017-07-29', 'Makan Pagi', 1, 10),
(49669, 'Gulai ikan salai', '2017-07-02', 'Makan Malam', 4, 10),
(49670, 'Ayam plecingan', '2018-02-03', 'Makan Siang', 3, 13),
(49671, 'Lawar kenus', '2014-12-01', 'Makan Malam', 2, 19),
(49672, 'Sate bandeng', '2017-06-12', 'Makan Malam', 4, 2),
(49673, 'Bihun kari', '2016-04-06', 'Makan Siang', 3, 19),
(49674, 'Soto Medan', '2017-03-31', 'Makan Pagi', 4, 3),
(49675, 'Dummy', '2018-07-01', 'Makan Pagi', 1, 6),
(49676, 'Dummy', '2018-07-01', 'Makan Pagi', 1, 11),
(49677, 'Dummy', '2018-07-01', 'Makan Pagi', 1, 16),
(49678, 'Dummy', '2018-07-01', 'Makan Pagi', 1, 5);

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
(2, 'penyuluh'),
(3, 'masarakat');

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
(4, '123', 'admin', '4297f44b13955235245b2497399d7a93', 'Jakarta', '1997-02-12', 'Pria', 'Islam', 'TAMAT SD / SEDERAJAT', 'admin', 1),
(12, '0167976544336836', 'Penyuluh 1', '5a10f5121e5aab7e26bb9d6e63a44c9c', 'Malang', '1997-02-12', 'Pria', 'Islam', 'DIPLOMA I / II', 'Guru', 2),
(14, '0167976544336835', 'Penyuluh 2', '6350220aef37e40db09135df141c2cfe', 'Jakarta', '1985-02-12', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'Dosen', 2),
(15, '0167976544336837', 'Penyuluh 3', 'eb8108c627f05b3f4d44a682511d9b6f', 'Malang', '1995-05-23', 'Wanita', 'Kristen Protestan', 'STRATA II', 'Wartawan', 2),
(16, '0167976544336838', 'Penyuluh 4', '5d963968056d6666175ecad45d9d626f', 'Jember', '1995-02-15', 'Pria', 'Hindu', 'STRATA III', 'Wirausaha', 2),
(17, '0167976544336839', 'Penyuluh 5', NULL, 'Batu', '1994-01-01', 'Pria', 'Islam', 'TIDAK / BELUM SEKOLAH', 'Guru', 2),
(18, '2167976544330001', 'JAMIN', NULL, 'MALANG', '1967-12-12', 'Pria', 'Islam', 'DIPLOMA I / II', 'GURU', 3),
(19, '2167976544330002', 'SULATINI', NULL, 'MALANG', '1969-12-21', 'Wanita', 'Islam', 'TIDAK / BELUM SEKOLAH', 'PNS', 3),
(20, '1507122441980002', 'NIZAR FAJAR', NULL, 'MALANG', '1980-12-06', 'Pria', 'Islam', 'TAMAT SD / SEDERAJAT', 'PETANI', 3),
(21, '2167976544330003', 'DARMEN', NULL, 'MALANG', '1956-04-07', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'SATPAM', 3),
(22, '1507122441980001', 'BRILIAN', NULL, 'PASURUAN', '1970-01-01', 'Pria', 'Islam', 'DIPLOMA I / II', 'GURU', 3),
(23, '2167976544330004', 'PONIMAN', 'd61ad1a40eaceb09633585c5647cc950', 'MALANG', '1998-05-09', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'MAHASISWA', 3),
(24, '1507122441980003', 'SUGIMAN', NULL, 'MALANG', '1974-01-02', 'Pria', 'Islam', 'SLTP/SEDERAJAT', 'WIRAUSAHA', 3),
(25, '2167976544330005', 'IMAM MUHAIMIN', 'ab4c9e82e35c63be3cacbe69825cab09', 'MALANG', '1996-11-02', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'MAHASISWA', 3),
(26, '2167976544330006', 'SUPARNI', NULL, 'MALANG', '1969-02-04', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'PNS', 3),
(27, '1507122441980004', 'HASIM', NULL, 'TULUNGAGUNG', '1985-02-02', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'KARYAWAN', 3),
(28, '2167976544330007', 'HARIYADI', '773f02ed1c8dd204acf0ab13902684ba', 'MALANG', '1987-04-06', 'Pria', 'Islam', 'STRATA II', 'WIRASWASTA', 3),
(29, '1507122441980005', 'NARSO', 'ac0b452737483bf9d93677ffb408867d', 'MALANG', '1965-12-02', 'Pria', 'Katolik', 'SLTA / SEDERAJAT', 'PILOT', 3),
(31, '1507122441980006', 'WONDO', 'd4edb396a51cfc3a30b605efb759e3d0', 'MOJOKERTO', '1976-12-06', 'Pria', 'Islam', 'STRATA II', 'GURU', 3),
(32, '2167976544330008', 'HERI PURWANTO', 'b86afe328891a7176b625bcbcd3910b1', 'MALANG', '1999-12-03', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'SISWA', 3),
(33, '2167976544330009', 'AGUS RIYANTO', 'd141b9dd014667e3e33171b5c898dbf5', 'MALANG', '1998-03-06', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'SISWA', 3),
(34, '1507122441980007', 'MANALU', '7011f1c4c820321058469800707434af', 'PASURUAN', '1976-02-08', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'KA', 3),
(35, '1507122441980008', 'CITRO WIYONO', 'e5a09e1457b8ed8a6d0918aecbbe85d9', 'SIDOARJO', '1988-12-04', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'PENGUSAHA', 3),
(36, '2167976544330010', 'DWI SUKANI', NULL, 'MALANG', '1972-12-17', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'SISWA', 3),
(37, '2167976544330011', 'RAMENTO TOBING', NULL, 'MALANG', '1980-12-14', 'Pria', 'Islam', 'STRATA II', 'DOSEN', 3),
(38, '1507122441980009', 'DEDEN SETIYAWAN', '3dfaa0862342cae34f45bd7172cc5dc1', 'MALNG', '1976-12-11', 'Pria', 'Islam', 'DIPLOMA I / II', 'KARYAWAN', 3),
(39, '1507122441980011', 'JAMRONI', NULL, 'MALAN', '1966-09-03', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'KA', 3),
(40, '2167976544330012', 'SUTRISNO', 'c7309e09b39d3651648a23dfc383533d', 'MALANG', '1967-08-13', 'Pria', 'Islam', 'BELUM TAMAT SD/SEDERAJAT', 'TUKANG LAS / PANDAI BESI', 3),
(41, '2167976544330013', 'BERO NUGROHO', NULL, 'MALANG', '1970-04-03', 'Pria', 'Islam', 'TIDAK / BELUM SEKOLAH', 'KARYAWAN BUMN', 3),
(42, '2167976544330014', 'SULASI', 'aa52d951db8a25358dc3e2eee1d3154c', 'MALANG', '1987-03-12', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'PEDAGANG', 3),
(43, '1507122441980011', 'SUMIRAH', '91f6143813170970b7b8840344a3e6eb', 'PASURUAN', '1987-03-23', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'TUKANG LISTRIK', 3),
(44, '2167976544330015', 'SULAMI', '79bb1bf3353ef5390c63249b0afedfc4', 'MALANG', '1987-02-04', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PERAWAT', 3),
(45, '1507122441980012', 'SUKIMIN', '6276d6116d5b07bdfbbc012e8677b436', 'MOJOKERTO', '1977-12-12', 'Pria', 'Islam', 'TAMAT SD / SEDERAJAT', 'PETANI', 3),
(46, '1507122441980013', 'DIAN', NULL, 'PASURUAN', '1980-12-12', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 3),
(47, '1507122441980014', 'DIANA', 'a3c8e9606628c41eee337ff87217f946', 'NGANJUK', '1987-02-02', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'KARYAWAN SWASTA', 3),
(48, '4167976544330001', 'DWI CAHYA', 'c62f5536fa90e2262b94ace229159f14', 'PADANG', '1989-01-01', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'APOTEKER', 3),
(49, '1507122441980015', 'DINA', '38ba0c8508401889b3b0d6ab504966d2', 'PASURUAN', '1977-01-11', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'IBU RUMAH TANGGA', 3),
(50, '4167976544330002', 'MUHAMMAD EKA DWI', '2feb71e071a5c56e86c7a4ccd6763aae', 'MALANG', '1998-03-17', 'Pria', 'Islam', 'TAMAT SD / SEDERAJAT', 'SISWA', 3),
(51, '1507122441980016', 'DENOK', NULL, 'PASURUAN', '1976-03-03', 'Wanita', 'Islam', 'STRATA II', 'GURU', 3),
(52, '4167976544330003', 'DIAN PRAMUNI', '79583924cd957855929d4610dc6cb44d', 'MALANG', '1986-06-17', 'Wanita', 'Islam', 'DIPLOMA I / II', 'BIDAN', 3),
(53, '1507122441980017', 'NOVY', NULL, 'MADIUN', '1977-12-02', 'Wanita', 'Katolik', 'TIDAK / BELUM SEKOLAH', 'PERAWAT', 3),
(54, '4167976544330004', 'SITI NUR', 'f1eca7e24e1725deda5c797801e3acba', 'SURABAYA', '1986-03-04', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'PENATA RIAS', 3),
(55, '1507122441980018', 'REZA', 'b8ff14628b5d1a10e0c3f6d74acde382', 'MALANG', '2002-02-16', 'Pria', 'Islam', 'SLTP/SEDERAJAT', 'PELAJAR', 3),
(56, '4167976544330005', 'FITRI IKA', 'd4041382c7598dc92f037c29817b00bb', 'GRESIK', '1999-07-28', 'Wanita', 'Islam', 'STRATA II', 'ANGGOTA DPD', 3),
(57, '4167976544330006', 'SARI WAHYU', 'a41d95e5f111842ad3a79c8e25731ab0', 'SURAKARTA', '1994-05-18', 'Wanita', 'Islam', 'SLTP/SEDERAJAT', 'PERANCANG BUSANA', 3),
(58, '1507122441980019', 'ANTON', NULL, 'PASURUAN', '2005-05-17', 'Pria', 'Islam', 'SLTP/SEDERAJAT', 'PELAJAR', 3),
(59, '4167976544330007', 'INDAH EKA', '199af3d1e060e6ec23077ed15177e47f', 'MADURA', '1995-07-06', 'Wanita', 'Islam', 'SLTP/SEDERAJAT', 'SISWA', 3),
(60, '1507122441980020', 'AUDRY', '75b3cae237d6c713a0250c62b7d93839', 'MALANG', '1998-06-18', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'MAHASISWA', 3),
(61, '1507122441980021', 'FEBRI', '39b20ed06d0c19a31e674c5cf8be5952', 'MALANG', '2014-12-25', 'Pria', 'Islam', 'TIDAK / BELUM SEKOLAH', 'BELUM BEKERJA', 3),
(62, '1507122441980022', 'FAUZAN', 'd13b44cb4fb26828d4637e17cdcc5ffc', 'MALANG', '2000-06-14', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'MAHASISWA', 3),
(63, '3507122441980001', 'SABAR', 'ec2718efe40f8adead0cb3dbbd571c52', 'MALANG', '1970-05-23', 'Pria', 'Islam', 'STRATA II', 'DOKTER', 3),
(64, '3507122441980002', 'HERI HARYONO', '381dada9e943ee1b509ed76b4626df84', 'PASURUAN', '1965-09-22', 'Pria', 'Islam', 'TAMAT SD / SEDERAJAT', 'PETANI', 3),
(65, '3507122441980003', 'JONO', '5156d6cbedf5bd245845c52abd81927c', 'MALANG', '1969-07-23', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'PEDAGANG', 3),
(66, '3507122441980004', 'DANI', 'b225727d9c24c5ddd4f7a0da56a4063a', 'MALANG', '1970-10-03', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'NELAYAN', 3),
(67, '3507122441980005', 'BAMBANG', '46282e8462bbca094c6eca6b057f47c0', 'PASURUAN', '1962-05-05', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'KARYAWAN BUMN', 3),
(68, '3507122441980006', 'NURAINI', '73eba7a846592724e08a6d8fc26babc5', 'NGAWI', '1973-02-04', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'IBU RUMAH TANGGA', 3),
(69, '3507122441980007', 'NUR KHASANA', '382d262549fb1f2175b689ee953ee40a', 'MALANG', '1975-11-23', 'Wanita', 'Islam', 'STRATA II', 'GURU', 3),
(70, '3507122441980008', 'NUR FAIDAH', '71570cf3e60d1b4060660dcb187059ff', 'SURABAYA', '1977-02-17', 'Wanita', 'Islam', 'SLTP/SEDERAJAT', 'PEDAGANG', 3),
(71, '3507122441980009', 'NUR LAILI', 'db5a7853ce9d7e2a3b665b46db603351', 'SIDOARJO', '1970-07-25', 'Wanita', 'Islam', 'TAMAT SD / SEDERAJAT', 'PETANI', 3),
(72, '3507122441980010', 'NUR CAHYANI', '63fea43a9401465577168a55d3e1c0b2', 'PASURUAN', '1969-12-13', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'WIRAUSAHA', 3),
(73, '3507122441980011', 'LUTFI', '9817628d58c15c2b62b4911c967b4f69', 'LUMAJANG', '1998-01-23', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'MAHASISWA', 3),
(74, '3507122441980012', 'LEO', '08e70b2548cdbb66d0caa9eaf58e50c2', 'MALANG', '1997-03-24', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'MAHASISWA', 3),
(75, '3507122441980015', 'BAGUS', NULL, 'MALANG', '1996-06-14', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'MAHASISWA', 3),
(76, '3507122441980013', 'DYAH', NULL, 'MALANG', '1995-05-12', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'KARYAWAN SWASTA', 3),
(77, '3507122441980014', 'SANTI', 'cad20c7b99efce86d68d3b83bda80e15', 'MALANG', '1998-02-16', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'MAHASISWA', 3),
(78, '2167976544330021', 'SHILA', NULL, 'GRESIK', '1996-06-15', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'PNS', 3),
(79, '2167976544330022', 'NIARA', 'a2c395e4b959839a826581a6bdb26abd', 'PASURUAN', '1972-11-03', 'Wanita', 'Islam', 'SLTP/SEDERAJAT', 'PETANI', 3),
(80, '2167976544330023', 'KAENA', '8b1767ab0a999034c8af8bad49e00404', 'TULUNGAGUNG', '1970-12-09', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'NELAYAN', 3),
(81, '416797654433007', 'SOCHIB', '2b98a93150ccafe9b9d6ee1864376fe3', 'MADIUN', '1970-12-04', 'Pria', 'Islam', 'STRATA II', 'DOKTER', 3),
(82, '4167976544330008', 'SITI AMINAH', '69fd109ac3e7be5b77ca0cbf3fa223b3', 'PASURUAN', '1973-11-04', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PENGUSAHA', 3),
(83, '4167976544330009', 'ALIANDO', 'b92fe35595e76daed073751326be0de2', 'PASURUAN', '1999-06-06', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'MAHASISWA', 3),
(84, '2167976744330001', 'NANANG', '4744959c16cf10d430bd952496899c69', 'PACITAN', '1963-07-14', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'KARYAWAN BUMN', 3),
(85, '2167976744330002', 'DEWI', '6b067b6b24f917bddcc6ccd2480aa1f3', 'Madura', '1967-07-10', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 3),
(86, '2167976744330003', 'AJENG', '1ff134e9eaad9ad2fa68dcbabe922604', 'MALANG', '1999-10-10', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'BELUM BEKERJA', 3),
(87, '2167976744330004', 'DENI', 'b0204960c7dec59bdb9df8c616680c77', 'MALANG', '1970-11-14', 'Pria', 'Katolik', 'DIPLOMA I / II', 'TUKANG LISTRIK', 3),
(88, '2167976744330005', 'SANDRA', 'c09c1f11428d56792526535e24220c11', 'MALANG', '1972-05-23', 'Wanita', 'Katolik', 'DIPLOMA I / II', 'WIRAUSAHA', 3),
(89, '2167976744330006', 'DADANG', '8b4babcc73bd294b2fa4b0859088a1fb', 'MALANG', '2007-03-20', 'Pria', 'Islam', 'TAMAT SD / SEDERAJAT', 'BELUM BEKERJA', 3),
(90, '2167976744330007', 'ALDO', '695b158bf24b001645174d27c2cd6c56', 'MALANG', '1973-01-23', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'KARYAWAN BUMN', 3),
(91, '2167976744330008', 'ENNY', 'f1ff7691a39ba970bdeb07c0d6c7decc', 'MALANG', '1976-10-17', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 3),
(92, '2167976744330009', 'TORA', 'e75a0eb39597ca1928c57ea7b5eb8970', 'MALANG', '2005-07-11', 'Pria', 'Islam', 'TAMAT SD / SEDERAJAT', 'BELUM BEKERJA', 3),
(93, '2167976744330010', 'SANDY', '096b3c3c8802eb4a3480fdea0780988f', 'MALANG', '1980-07-26', 'Pria', 'Hindu', 'SLTA / SEDERAJAT', 'KARYAWAN SWASTA', 3),
(94, '2167976744330011', 'SELY', '90c09cc5a42063a9b6cb7a09cc154bcb', 'MALANG', '1982-07-19', 'Wanita', 'Hindu', 'DIPLOMA I / II', 'MENGURUS RUMAH TANGGA', 3),
(95, '2167976744330012', 'SAMMY', '337d0d4f39249b8141fb5f36e988b70e', 'MALANG', '2011-06-03', 'Pria', 'Islam', 'BELUM TAMAT SD/SEDERAJAT', 'BELUM BEKERJA', 3),
(96, '2167976744330013', 'SYAHRUL', '2dc8aa3982342dff79df3156c47c9326', 'Madura', '1975-04-26', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 3),
(97, '2167976744330014', 'DINDA', '284ea49ca0dcdfdd95dc448550315057', 'Madura', '1978-07-12', 'Wanita', 'Islam', 'DIPLOMA I / II', 'GURU', 3),
(98, '2167976744330015', 'YOGA', 'baaea35130b98fce7dfb8b380e5cd232', 'MALANG', '2000-05-31', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'BELUM BEKERJA', 3),
(99, '0167976544336839', 'LOWOKWARU', '0b087cd32eb76bb6c45f8d9212e46685', 'MALANG', '1994-07-17', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'PNS', 2),
(100, '5167976744330007', 'INDRA', '18ab83940df11cff893bc5a44fea629f', 'PACITAN', '1960-04-16', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'PETANI', 3),
(101, '5167976744330001', 'MEME', 'a3b30c47259370f53cbd4ff64d9bd8a0', 'MALANG', '1965-11-16', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 3),
(102, '5167976744330002', 'SHILA', '146e5c1810246bb0e85140d4700b9500', 'MALANG', '1997-05-23', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'MAHASISWA', 3),
(103, '5167976744330003', 'SUJONO', 'ddbd732f3e74ee4c870d645fd5b4b5f6', 'MALANG', '1987-12-06', 'Pria', 'Islam', 'SLTA / SEDERAJAT', 'NELAYAN', 3),
(104, '5167976744330004', 'NINIK', '26ca2310473cbb70a03290f9d755b564', 'MALANG', '1990-08-23', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 3),
(105, '5167976744330005', 'DEBY', '62ab4b926281c26bb9914bdf465bd834', 'MALANG', '2007-06-19', 'Pria', 'Islam', 'BELUM TAMAT SD/SEDERAJAT', 'BELUM BEKERJA', 3),
(106, '5167976744330006', 'ILYAS', 'c75254ecd73ec9f5304536a831507033', 'Madura', '1985-09-14', 'Pria', 'Islam', 'STRATA II', 'GURU', 3),
(107, '5167976744330008', 'DENOK', '54972e723a821038df155a14494a9294', 'MALANG', '1987-07-26', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'GURU', 3),
(108, '5167976744330009', 'FENDI', 'dc4a431a172792f322f4046496544978', 'MALANG', '2002-07-18', 'Pria', 'Islam', 'SLTP/SEDERAJAT', 'BELUM BEKERJA', 3),
(109, '5167976744330010', 'ANDI', '71137fca52977befd3caec2bd36d811e', 'MALANG', '1974-04-18', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'KARYAWAN BUMN', 3),
(110, '5167976744330011', 'ISMI', '6248dc8c4fdc071f18bc8ad72fad0a7b', 'MALANG', '1978-04-11', 'Wanita', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'GURU', 3),
(111, '5167976744330012', 'YAFI', '8ed215ed8e77c07f8d1134aff801e62c', 'MALANG', '2014-03-13', 'Pria', 'Islam', 'TIDAK / BELUM SEKOLAH', 'BELUM BEKERJA', 3),
(112, '5167976744330013', 'ISOM', '428797159e8fa21576749a30dc3679b5', 'MALANG', '1964-04-24', 'Pria', 'Islam', 'AKADEMI/ DIPLOMA III/S. MUDA', 'KARYAWAN SWASTA', 3),
(113, '5167976744330014', 'BUBU', 'dcc359d309f271fa7eb7d50d329bf433', 'MALANG', '1967-04-26', 'Wanita', 'Islam', 'SLTA / SEDERAJAT', 'MENGURUS RUMAH TANGGA', 3),
(114, '5167976744330015', 'KEKE', 'ccb558d978f06dde0783d985678c202b', 'PACITAN', '2018-10-27', 'Wanita', 'Islam', 'DIPLOMA I / II', 'KARYAWAN SWASTA', 3),
(115, '5167976744330016', 'SISIL', '8c2ed7b1449a04639ceef05dc2952318', 'PACITAN', '2007-06-02', 'Wanita', 'Islam', 'TAMAT SD / SEDERAJAT', 'BELUM BEKERJA', 3);

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
(7, 68, 1, 'Istri'),
(8, 73, 1, 'Anak'),
(9, 69, 2, 'Istri'),
(10, 74, 2, 'Anak'),
(11, 70, 3, 'Istri'),
(12, 75, 3, 'Anak'),
(13, 71, 4, 'Istri'),
(14, 76, 4, 'Anak'),
(15, 72, 5, 'Istri'),
(16, 77, 5, 'Anak'),
(17, 46, 6, 'Istri'),
(18, 55, 6, 'Anak'),
(19, 47, 7, 'Istri'),
(20, 58, 7, 'Anak'),
(21, 60, 8, 'Anak'),
(22, 49, 8, 'Istri'),
(23, 51, 9, 'Istri'),
(24, 61, 9, 'Anak'),
(25, 53, 10, 'Istri'),
(26, 62, 10, 'Anak'),
(27, 23, 11, 'Anak'),
(28, 28, 12, 'Anak'),
(29, 32, 13, 'Anak'),
(30, 33, 14, 'Anak'),
(31, 78, 15, 'Anak'),
(32, 19, 11, 'Istri'),
(33, 26, 12, 'Istri'),
(34, 36, 13, 'Istri'),
(35, 42, 14, 'Istri'),
(36, 79, 15, 'Istri'),
(37, 97, 20, 'Istri'),
(38, 98, 20, 'Anak'),
(39, 95, 19, 'Anak'),
(40, 94, 19, 'Istri'),
(41, 91, 18, 'Istri'),
(42, 92, 18, 'Anak'),
(43, 88, 17, 'Istri'),
(44, 89, 17, 'Anak'),
(45, 85, 16, 'Istri'),
(46, 86, 16, 'Anak'),
(47, 113, 25, 'Istri'),
(48, 115, 25, 'Anak'),
(49, 110, 24, 'Istri'),
(50, 111, 24, 'Anak'),
(51, 51, 23, 'Istri'),
(52, 108, 23, 'Anak'),
(53, 105, 22, 'Anak'),
(54, 104, 22, 'Istri'),
(55, 78, 21, 'Anak'),
(56, 101, 21, 'Istri');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149052;

--
-- AUTO_INCREMENT for table `jenis_pangan`
--
ALTER TABLE `jenis_pangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pangan`
--
ALTER TABLE `pangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `pangan_keluarga`
--
ALTER TABLE `pangan_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49679;

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
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `user_keluarga`
--
ALTER TABLE `user_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pangan_keluarga`
--
ALTER TABLE `detail_pangan_keluarga`
  ADD CONSTRAINT `fk_detail_pangan_keluarga_pangan1` FOREIGN KEY (`pangan_id`) REFERENCES `pangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_pangan_keluarga_pangan_keluarga1` FOREIGN KEY (`pangan_keluarga_id`) REFERENCES `pangan_keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pangan`
--
ALTER TABLE `pangan`
  ADD CONSTRAINT `fk_pangan_jenis_pangan1` FOREIGN KEY (`jenis_pangan_id`) REFERENCES `jenis_pangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pangan_keluarga`
--
ALTER TABLE `pangan_keluarga`
  ADD CONSTRAINT `fk_pangan_keluarga_keluarga1` FOREIGN KEY (`keluarga_id`) REFERENCES `keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `survei`
--
ALTER TABLE `survei`
  ADD CONSTRAINT `fk_survei_keluarga1` FOREIGN KEY (`keluarga_id`) REFERENCES `keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_keluarga`
--
ALTER TABLE `user_keluarga`
  ADD CONSTRAINT `fk_user_keluarga_keluarga1` FOREIGN KEY (`keluarga_id`) REFERENCES `keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_keluarga_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
