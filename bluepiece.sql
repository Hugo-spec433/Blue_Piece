-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 04:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluepiece`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id` int(11) NOT NULL,
  `resultado` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idPaciente` int(11) DEFAULT NULL,
  `riesgo` varchar(100) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluacion`
--

INSERT INTO `evaluacion` (`id`, `resultado`, `idUsuario`, `idPaciente`, `riesgo`, `fecha`) VALUES
(1, 0, NULL, NULL, 'Bajo', '2021-05-17'),
(35, 14, NULL, NULL, 'Alto', '2021-05-26'),
(37, 14, 9, 4, 'Alto', '2021-05-26'),
(38, 15, 9, 4, 'Alto', '2021-05-26'),
(39, 13, 9, 23, 'Alto', '2021-05-26'),
(40, 12, 9, 4, 'Alto', '2021-05-26'),
(41, 15, 9, 4, 'Alto', '2021-05-26'),
(42, 14, 9, 23, 'Alto', '2021-05-26'),
(43, 12, 9, 26, 'Alto', '2021-05-26'),
(44, 13, 9, 27, 'Alto', '2021-05-27'),
(45, 13, 9, 27, 'Alto', '2021-05-27'),
(46, 12, 9, 27, 'Alto', '2021-05-27'),
(47, 16, 9, 4, 'Alto', '2021-05-27'),
(48, 12, 9, 27, 'Alto', '2021-05-27'),
(49, 13, 9, 28, 'Alto', '2021-05-27'),
(50, 14, 9, 4, 'Alto', '2021-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `edad` varchar(30) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `ciudad` varchar(150) DEFAULT NULL,
  `estado` varchar(150) NOT NULL,
  `pais` varchar(150) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`id`, `nombre`, `apellido`, `edad`, `sexo`, `direccion`, `ciudad`, `estado`, `pais`, `telefono`) VALUES
(4, 'Juanito', 'Escarcha', '16 meses', 'Masculino', 'Calle # Colonia', 'Ensenada', 'Baja California', 'Mexico', '646111111111'),
(23, 'Alice', 'Wonderland', '14 meses', 'Femenino', '', '', 'Baja California', 'Mexico', ''),
(25, 'Juanita', 'Escutia', '4 meses', 'Femenino', '', '', 'Mexico', 'Mexico', ''),
(26, 'Juana', 'De Arco', '2 años', 'Femenino', '', '', 'Mexico', 'Mexico', '');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_paciente`
--

CREATE TABLE `tutor_paciente` (
  `id` int(11) NOT NULL,
  `idTutor` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_paciente`
--

INSERT INTO `tutor_paciente` (`id`, `idTutor`, `idPaciente`) VALUES
(1, 9, 4),
(2, 9, 23),
(4, 11, 25),
(5, 9, 26);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `email` varchar(130) NOT NULL,
  `contraseña` varchar(40) NOT NULL,
  `ciudad` varchar(150) DEFAULT NULL,
  `estado` varchar(150) DEFAULT NULL,
  `pais` varchar(150) DEFAULT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `contraseña`, `ciudad`, `estado`, `pais`, `direccion`, `telefono`, `tipo`) VALUES
(9, 'Carlo', 'Vega', 'vega.carlo@uabc.edu.mx', 'asdf', 'Mexico', 'México', 'México', 'Calle # Colonia', '646111', 'Tutor'),
(11, 'Juan', 'Escutia', 'juan@escutia', 'asdf', 'Mexico', 'Mexico', 'Mexico', 'Calle Niños Héroes', '111111112', 'Especialista');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_paciente`
--
ALTER TABLE `tutor_paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tutor_paciente`
--
ALTER TABLE `tutor_paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
