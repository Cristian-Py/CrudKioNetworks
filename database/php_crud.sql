-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-06-2021 a las 10:21:55
-- Versión del servidor: 8.0.25-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_alumno`
--

CREATE TABLE `t_alumno` (
  `id` int NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `paterno` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `materno` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `t_alumno`
--

INSERT INTO `t_alumno` (`id`, `nombre`, `paterno`, `materno`) VALUES
(1, 'cristian', 'Ortega', 'Velazquez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_alumno`
--
ALTER TABLE `t_alumno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_alumno`
--
ALTER TABLE `t_alumno`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
