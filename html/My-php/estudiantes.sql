-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2023 a las 00:05:58
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `Id_Estudiante` int(11) NOT NULL,
  `Nombre` varchar(59) NOT NULL,
  `Ha1` decimal(5,2) UNSIGNED ZEROFILL NOT NULL,
  `Ha2` decimal(5,2) UNSIGNED ZEROFILL NOT NULL,
  `Ha3` decimal(5,2) UNSIGNED ZEROFILL NOT NULL,
  `Ha4` decimal(5,2) UNSIGNED ZEROFILL NOT NULL,
  `Exa` decimal(5,2) UNSIGNED ZEROFILL NOT NULL,
  `Pro` decimal(5,2) UNSIGNED ZEROFILL NOT NULL,
  `Par` decimal(5,2) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`Id_Estudiante`, `Nombre`, `Ha1`, `Ha2`, `Ha3`, `Ha4`, `Exa`, `Pro`, `Par`) VALUES
(2323, 'Fernando 1', '020.00', '020.00', '020.00', '020.00', '020.00', '020.00', '020.00'),
(222222, 'Fernando 1', '020.00', '020.00', '020.00', '020.00', '020.00', '020.00', '020.00'),
(22222211, 'Fernando 1', '020.00', '020.00', '020.00', '020.00', '020.00', '020.00', '020.00'),
(75894652, 'Fernando', '020.00', '020.00', '020.00', '020.00', '020.00', '020.00', '020.00'),
(123415678, 'Diego', '020.00', '020.00', '020.00', '020.00', '020.00', '020.00', '020.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`Id_Estudiante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `Id_Estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123415679;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
