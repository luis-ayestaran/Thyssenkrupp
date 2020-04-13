-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2020 at 03:59 AM
-- Server version: 8.0.13
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluacion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadenanumero`
--

CREATE TABLE `cadenanumero` (
  `id_pregunta` int(11) NOT NULL,
  `num` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `resp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `cadenanumero`
--

INSERT INTO `cadenanumero` (`id_pregunta`, `num`, `resp`) VALUES
(1, 'Noventa mil trescientos veinticuatro: ', 90324),
(2, 'Un millón doscientos sesenta y cinco', 1000265),
(3, 'Trescientos mil setecientos: ', 300700),
(4, 'Dos mil millones:', 2000000000);

-- --------------------------------------------------------

--
-- Table structure for table `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id_evaluacion` int(11) NOT NULL,
  `fecha` timestamp NOT NULL,
  `resultado` double NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `evaluacion`
--

INSERT INTO `evaluacion` (`id_evaluacion`, `fecha`, `resultado`, `id_usuario`) VALUES
(157, '2020-04-13 02:19:56', 0, 77),
(158, '2020-04-13 03:57:32', 0, 77);

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `path` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `path`) VALUES
(1, 'style/images/fracc1.png'),
(2, 'style/images/fracc2.png'),
(3, 'style/images/fracc3.gif'),
(4, 'style/images/fracc4.png'),
(5, 'style/images/fracc5.png'),
(6, 'style/images/graf1.png'),
(7, 'style/images/graf2.png'),
(8, 'style/images/graf3.png');

-- --------------------------------------------------------

--
-- Table structure for table `numerocadena`
--

CREATE TABLE `numerocadena` (
  `id_pregunta` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `resp` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `numerocadena`
--

INSERT INTO `numerocadena` (`id_pregunta`, `num`, `resp`) VALUES
(1, 5724372, 'cinco millones setecientos veinticuatro mil trescientos setenta y dos'),
(2, 963754034, 'novecientos sesenta y tres millones setecientos cincuenta y cuatro treinta y cuatro '),
(3, 120005, 'ciento veinte mil cinco'),
(4, 2060309609, 'dos billones sesenta millones trescientos nueve mil seiscientos nueve'),
(5, 53050, 'cincuenta y tres mil cincuenta');

-- --------------------------------------------------------

--
-- Table structure for table `numfraccion`
--

CREATE TABLE `numfraccion` (
  `numerador` int(11) NOT NULL,
  `denominador` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `numfraccion`
--

INSERT INTO `numfraccion` (`numerador`, `denominador`, `id_pregunta`, `id_imagen`) VALUES
(2, 5, 1, 1),
(3, 4, 2, 2),
(2, 6, 3, 3),
(3, 8, 4, 4),
(2, 9, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `opmatematicas`
--

CREATE TABLE `opmatematicas` (
  `num1` double NOT NULL,
  `num2` double NOT NULL,
  `operador` varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `res` double NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_imagen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `opmatematicas`
--

INSERT INTO `opmatematicas` (`num1`, `num2`, `operador`, `res`, `id_pregunta`, `id_imagen`) VALUES
(15871, 19270, '+', 35141, 1, NULL),
(3478, 12311, '+', 15789, 2, 1),
(14414, 3785, '+', 18199, 3, 1),
(7706, 8102, '+', 15808, 4, 1),
(13050, 446, '+', 13496, 5, 1),
(14348, 10260, '+', 24608, 6, 1),
(2327, 5358, '+', 7685, 7, 1),
(5759, 14288, '+', 20047, 8, 1),
(13618, 12219, '+', 25837, 9, 1),
(1728, 4932, '+', 6660, 10, 1),
(16275, 5494, '-', 10781, 11, 1),
(16977, 12483, '-', 4494, 12, 1),
(17833, 6456, '-', 11377, 13, 1),
(18721, 17000, '-', 1721, 14, 1),
(8892, 848, '-', 8044, 15, 1),
(11460, 10379, '-', 1081, 16, 1),
(15581, 8064, '-', 7517, 17, 1),
(11437, 6453, '-', 4984, 18, 1),
(16586, 3356, '-', 13230, 19, 1),
(11746, 10515, '-', 1231, 20, 1),
(18, 37, 'x', 666, 21, 1),
(28, 100, 'x', 2800, 22, 1),
(62, 33, 'x', 2046, 23, 1),
(54, 74, 'x', 3996, 24, 1),
(14, 83, 'x', 1162, 25, 1),
(20, 77, 'x', 1540, 26, 1),
(76, 47, 'x', 3572, 27, 1),
(84, 52, 'x', 4368, 28, 1),
(59, 92, 'x', 5428, 29, 1),
(67, 43, 'x', 2881, 30, 1),
(1728, 64, '/', 27, 31, 1),
(2352, 28, '/', 84, 32, 1),
(2820, 30, '/', 94, 33, 1),
(1850, 50, '/', 37, 34, 1),
(4000, 40, '/', 100, 35, 1),
(2584, 38, '/', 68, 36, 1),
(5040, 90, '/', 56, 37, 1),
(2610, 58, '/', 45, 38, 1),
(280, 7, '%', 19.6, 39, 1),
(450, 15, '%', 67.5, 40, 1),
(500, 50, '%', 250, 41, 1),
(900, 10, '%', 90, 42, 1),
(1000, 25, '%', 250, 43, 1),
(200, 20, '%', 40, 44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `problema`
--

CREATE TABLE `problema` (
  `id_pregunta` int(11) NOT NULL,
  `enunciado` varchar(3000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `res` double NOT NULL,
  `id_imagen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `problema`
--

INSERT INTO `problema` (`id_pregunta`, `enunciado`, `res`, `id_imagen`) VALUES
(1, 'En un partido de Futbol Champions se han vendido un total de 1200 entradas, de las cuales 525 se han vendido a 5 euros cada una, 490 entradas a 6 euros cada una y el resto a 7 euros cada una. ¿Cuál ha sido el total recaudado en dicho partido?', 6845, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resp_cadenanumero`
--

CREATE TABLE `resp_cadenanumero` (
  `id_respuesta` bigint(20) NOT NULL,
  `respUsuario` bigint(20) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `resp_cadenanumero`
--

INSERT INTO `resp_cadenanumero` (`id_respuesta`, `respUsuario`, `id_pregunta`, `id_evaluacion`) VALUES
(617, 9, 4, 157),
(618, 9, 3, 157),
(619, 9, 2, 157),
(620, 9, 1, 157),
(621, 0, 4, 158),
(622, 0, 3, 158),
(623, 0, 2, 158),
(624, 0, 1, 158);

-- --------------------------------------------------------

--
-- Table structure for table `resp_numerocadena`
--

CREATE TABLE `resp_numerocadena` (
  `id_respuesta` bigint(20) NOT NULL,
  `respUsuario` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `resp_numerocadena`
--

INSERT INTO `resp_numerocadena` (`id_respuesta`, `respUsuario`, `id_pregunta`, `id_evaluacion`) VALUES
(771, '9', 5, 157),
(772, '9', 4, 157),
(773, '9', 3, 157),
(774, '9', 2, 157),
(775, '9', 1, 157),
(776, '0', 5, 158),
(777, '0', 4, 158),
(778, '0', 3, 158),
(779, '0', 2, 158),
(780, '0', 1, 158);

-- --------------------------------------------------------

--
-- Table structure for table `resp_numfraccion`
--

CREATE TABLE `resp_numfraccion` (
  `id_respuesta` bigint(20) NOT NULL,
  `numerador` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `denominador` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `resp_numfraccion`
--

INSERT INTO `resp_numfraccion` (`id_respuesta`, `numerador`, `id_pregunta`, `denominador`, `id_evaluacion`) VALUES
(771, 9, 1, 9, 157),
(772, 9, 2, 9, 157),
(773, 9, 3, 9, 157),
(774, 9, 4, 9, 157),
(775, 9, 5, 9, 157),
(776, 0, 1, 0, 158),
(777, 0, 2, 0, 158),
(778, 0, 3, 0, 158),
(779, 0, 4, 0, 158),
(780, 0, 5, 0, 158);

-- --------------------------------------------------------

--
-- Table structure for table `resp_opmatematicas`
--

CREATE TABLE `resp_opmatematicas` (
  `id_respuesta` bigint(20) NOT NULL,
  `resultado` double NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `resp_opmatematicas`
--

INSERT INTO `resp_opmatematicas` (`id_respuesta`, `resultado`, `id_pregunta`, `id_evaluacion`) VALUES
(6835, 9, 1, 157),
(6836, 9, 2, 157),
(6837, 9, 3, 157),
(6838, 9, 4, 157),
(6839, 9, 5, 157),
(6840, 9, 6, 157),
(6841, 9, 7, 157),
(6842, 9, 8, 157),
(6843, 9, 9, 157),
(6844, 9, 10, 157),
(6845, 9, 11, 157),
(6846, 9, 12, 157),
(6847, 9, 13, 157),
(6848, 9, 14, 157),
(6849, 9, 15, 157),
(6850, 9, 16, 157),
(6851, 9, 17, 157),
(6852, 9, 18, 157),
(6853, 9, 19, 157),
(6854, 9, 20, 157),
(6855, 9, 21, 157),
(6856, 9, 22, 157),
(6857, 9, 23, 157),
(6858, 9, 24, 157),
(6859, 9, 25, 157),
(6860, 9, 26, 157),
(6861, 9, 27, 157),
(6862, 9, 28, 157),
(6863, 9, 29, 157),
(6864, 9, 30, 157),
(6865, 9, 31, 157),
(6866, 9, 32, 157),
(6867, 9, 33, 157),
(6868, 9, 34, 157),
(6869, 9, 35, 157),
(6870, 9, 36, 157),
(6871, 9, 37, 157),
(6872, 9, 38, 157),
(6873, 9, 39, 157),
(6874, 9, 40, 157),
(6875, 9, 41, 157),
(6876, 9, 42, 157),
(6877, 9, 43, 157),
(6878, 9, 44, 157),
(6879, 0, 1, 158),
(6880, 0, 2, 158),
(6881, 0, 3, 158),
(6882, 0, 4, 158),
(6883, 0, 5, 158),
(6884, 0, 6, 158),
(6885, 0, 7, 158),
(6886, 0, 8, 158),
(6887, 0, 9, 158),
(6888, 0, 10, 158),
(6889, 0, 11, 158),
(6890, 0, 12, 158),
(6891, 0, 13, 158),
(6892, 0, 14, 158),
(6893, 0, 15, 158),
(6894, 0, 16, 158),
(6895, 0, 17, 158),
(6896, 0, 18, 158),
(6897, 0, 19, 158),
(6898, 0, 20, 158),
(6899, 0, 21, 158),
(6900, 0, 22, 158),
(6901, 0, 23, 158),
(6902, 0, 24, 158),
(6903, 0, 25, 158),
(6904, 0, 26, 158),
(6905, 0, 27, 158),
(6906, 0, 28, 158),
(6907, 0, 29, 158),
(6908, 0, 30, 158),
(6909, 0, 31, 158),
(6910, 0, 32, 158),
(6911, 0, 33, 158),
(6912, 0, 34, 158),
(6913, 0, 35, 158),
(6914, 0, 36, 158),
(6915, 0, 37, 158),
(6916, 0, 38, 158),
(6917, 0, 39, 158),
(6918, 0, 40, 158),
(6919, 0, 41, 158),
(6920, 0, 42, 158),
(6921, 0, 43, 158),
(6922, 0, 44, 158);

-- --------------------------------------------------------

--
-- Table structure for table `resp_problema`
--

CREATE TABLE `resp_problema` (
  `id_respuesta` bigint(20) NOT NULL,
  `respuesta` double NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `resp_problema`
--

INSERT INTO `resp_problema` (`id_respuesta`, `respuesta`, `id_pregunta`, `id_evaluacion`) VALUES
(155, 9, 1, 157),
(156, 0, 1, 158);

-- --------------------------------------------------------

--
-- Table structure for table `resp_valorposicion`
--

CREATE TABLE `resp_valorposicion` (
  `id_respuesta` bigint(20) NOT NULL,
  `respuesta` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `resp_valorposicion`
--

INSERT INTO `resp_valorposicion` (`id_respuesta`, `respuesta`, `id_pregunta`, `id_evaluacion`) VALUES
(801, '9', 1, 157),
(802, '9', 2, 157),
(803, '9', 3, 157),
(804, '9', 4, 157),
(805, '9', 5, 157),
(806, '9', 6, 157),
(807, '9', 7, 157),
(808, '9', 8, 157),
(809, '0', 1, 158),
(810, '0', 2, 158),
(811, '0', 3, 158),
(812, '0', 4, 158),
(813, '0', 5, 158),
(814, '0', 6, 158),
(815, '0', 7, 158),
(816, '0', 8, 158);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ubicRef` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `puesto` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `area` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `numTel` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`nombre`, `direccion`, `ubicRef`, `puesto`, `area`, `numTel`, `id_usuario`) VALUES
('LUIS', 'PUEBLA, PUEBLA', 'PUEBLA', 'GERENCIA', '244', '2441234567', 77);

-- --------------------------------------------------------

--
-- Table structure for table `valorposicion`
--

CREATE TABLE `valorposicion` (
  `id_pregunta` int(11) NOT NULL,
  `resp` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `preguntas` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_imagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `valorposicion`
--

INSERT INTO `valorposicion` (`id_pregunta`, `resp`, `preguntas`, `id_imagen`) VALUES
(1, 'tres', '¿Cuál es la cifra de las centenas de millar?: ', 1),
(2, 'siete', '¿Cuál es la cifra de las decenas de millón?: ', 1),
(3, 'nueve', '¿Cuál es la cifra de las unidades?: ', 1),
(4, 'cuatro', '¿Cuál es la cifra de la unidad de millón?: ', 1),
(5, 'cero', '¿Cuál es  la cifra de la decena de millar?: ', 1),
(6, 'barras', NULL, 6),
(7, 'pastel', NULL, 7),
(8, 'lineas', NULL, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadenanumero`
--
ALTER TABLE `cadenanumero`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indexes for table `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id_evaluacion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indexes for table `numerocadena`
--
ALTER TABLE `numerocadena`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indexes for table `numfraccion`
--
ALTER TABLE `numfraccion`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_imagen` (`id_imagen`);

--
-- Indexes for table `opmatematicas`
--
ALTER TABLE `opmatematicas`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_imagen` (`id_imagen`);

--
-- Indexes for table `problema`
--
ALTER TABLE `problema`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_imagen` (`id_imagen`);

--
-- Indexes for table `resp_cadenanumero`
--
ALTER TABLE `resp_cadenanumero`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_evaluacion` (`id_evaluacion`);

--
-- Indexes for table `resp_numerocadena`
--
ALTER TABLE `resp_numerocadena`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_evaluacion` (`id_evaluacion`);

--
-- Indexes for table `resp_numfraccion`
--
ALTER TABLE `resp_numfraccion`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_evaluacion` (`id_evaluacion`);

--
-- Indexes for table `resp_opmatematicas`
--
ALTER TABLE `resp_opmatematicas`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_evaluacion` (`id_evaluacion`);

--
-- Indexes for table `resp_problema`
--
ALTER TABLE `resp_problema`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_evaluacion` (`id_evaluacion`);

--
-- Indexes for table `resp_valorposicion`
--
ALTER TABLE `resp_valorposicion`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_evaluacion` (`id_evaluacion`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `valorposicion`
--
ALTER TABLE `valorposicion`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_imagen` (`id_imagen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `id_evaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `resp_cadenanumero`
--
ALTER TABLE `resp_cadenanumero`
  MODIFY `id_respuesta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=625;

--
-- AUTO_INCREMENT for table `resp_numerocadena`
--
ALTER TABLE `resp_numerocadena`
  MODIFY `id_respuesta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=781;

--
-- AUTO_INCREMENT for table `resp_numfraccion`
--
ALTER TABLE `resp_numfraccion`
  MODIFY `id_respuesta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=781;

--
-- AUTO_INCREMENT for table `resp_opmatematicas`
--
ALTER TABLE `resp_opmatematicas`
  MODIFY `id_respuesta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6923;

--
-- AUTO_INCREMENT for table `resp_problema`
--
ALTER TABLE `resp_problema`
  MODIFY `id_respuesta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `resp_valorposicion`
--
ALTER TABLE `resp_valorposicion`
  MODIFY `id_respuesta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=817;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `evaluacion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `numfraccion`
--
ALTER TABLE `numfraccion`
  ADD CONSTRAINT `numfraccion_ibfk_2` FOREIGN KEY (`id_imagen`) REFERENCES `imagen` (`id_imagen`);

--
-- Constraints for table `opmatematicas`
--
ALTER TABLE `opmatematicas`
  ADD CONSTRAINT `opmatematicas_ibfk_2` FOREIGN KEY (`id_imagen`) REFERENCES `imagen` (`id_imagen`);

--
-- Constraints for table `problema`
--
ALTER TABLE `problema`
  ADD CONSTRAINT `problema_ibfk_2` FOREIGN KEY (`id_imagen`) REFERENCES `imagen` (`id_imagen`);

--
-- Constraints for table `resp_cadenanumero`
--
ALTER TABLE `resp_cadenanumero`
  ADD CONSTRAINT `resp_cadenanumero_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `cadenanumero` (`id_pregunta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `resp_cadenanumero_ibfk_2` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluacion` (`id_evaluacion`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `resp_numerocadena`
--
ALTER TABLE `resp_numerocadena`
  ADD CONSTRAINT `resp_numerocadena_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `numerocadena` (`id_pregunta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `resp_numerocadena_ibfk_2` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluacion` (`id_evaluacion`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `resp_numfraccion`
--
ALTER TABLE `resp_numfraccion`
  ADD CONSTRAINT `resp_numfraccion_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `numfraccion` (`id_pregunta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `resp_numfraccion_ibfk_2` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluacion` (`id_evaluacion`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `resp_opmatematicas`
--
ALTER TABLE `resp_opmatematicas`
  ADD CONSTRAINT `resp_opmatematicas_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `opmatematicas` (`id_pregunta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `resp_opmatematicas_ibfk_3` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluacion` (`id_evaluacion`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `resp_problema`
--
ALTER TABLE `resp_problema`
  ADD CONSTRAINT `resp_problema_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `problema` (`id_pregunta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `resp_problema_ibfk_2` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluacion` (`id_evaluacion`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `resp_valorposicion`
--
ALTER TABLE `resp_valorposicion`
  ADD CONSTRAINT `resp_valorposicion_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `valorposicion` (`id_pregunta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `resp_valorposicion_ibfk_2` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluacion` (`id_evaluacion`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `valorposicion`
--
ALTER TABLE `valorposicion`
  ADD CONSTRAINT `valorposicion_ibfk_2` FOREIGN KEY (`id_imagen`) REFERENCES `imagen` (`id_imagen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
