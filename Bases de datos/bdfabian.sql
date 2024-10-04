-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2024 a las 19:57:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdfabian`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catastro`
--

CREATE TABLE `catastro` (
  `id` int(11) NOT NULL,
  `distrito` varchar(150) DEFAULT NULL,
  `zona` varchar(150) DEFAULT NULL,
  `superficie` float DEFAULT NULL,
  `xi` float DEFAULT NULL,
  `yi` float DEFAULT NULL,
  `xf` float DEFAULT NULL,
  `yf` float DEFAULT NULL,
  `ci` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catastro`
--

INSERT INTO `catastro` (`id`, `distrito`, `zona`, `superficie`, `xi`, `yi`, `xf`, `yf`, `ci`) VALUES
(1001, 'Distrito 1', 'Zona A', 150.5, 30.5, 50000, 29.8, 45.8, 12345678),
(1002, 'Distrito 4', 'Zona D', 250.9, 90.5, 100.6, 95.5, 105.8, 44332211),
(1005, 'Distrito 9', 'Zona I', 195, 190.9, 200.2, 195.5, 205.8, 88776655),
(2005, 'Distrito 2', 'Zona B', 200, 50, 60, 55, 65, 87654321),
(2006, 'Distrito 5', 'Zona E', 180.3, 110.8, 120.9, 115.7, 125.6, 55667788),
(2011, 'Distrito 8', 'Zona H', 275.1, 170.6, 180.7, 175.8, 185.9, 99887766),
(3002, 'Distrito 3', 'Zona C', 175.8, 70.3, 80.4, 75.6, 85.7, 11223344),
(3009, 'Distrito 6', 'Zona F', 300.2, 130.1, 140.2, 135.3, 145.4, 33445566),
(3020, 'Distrito 7', 'Zona G', 225.4, 150.3, 160.5, 155.7, 165.8, 22334455);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ci` int(11) NOT NULL,
  `apellido` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `rol` char(1) DEFAULT NULL,
  `usuario` varchar(10) NOT NULL,
  `contrasenia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ci`, `apellido`, `nombre`, `rol`, `usuario`, `contrasenia`) VALUES
(10101010, 'Lobo', 'Fabian', 'A', 'admin', 'admin'),
(11223344, 'Perez', 'Carlos', 'U', 'user1', '123456'),
(12345678, 'Gonzalez', 'Juan', 'U', 'user2', '123456'),
(22334455, 'Fernandez', 'Luis', 'U', 'user3', '123456'),
(33445566, 'Ramirez', 'Sofia', 'U', 'user4', '123456'),
(44332211, 'Lopez', 'Maria', 'U', 'user5', '123456'),
(55667788, 'Garcia', 'Lucia', 'U', 'user6', '123456'),
(87654321, 'Martinez', 'Ana', 'U', 'user7', '123456'),
(88776655, 'Castro', 'Pablo', 'U', 'user8', '123456'),
(99887766, 'Diaz', 'Laura', 'U', 'user9', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catastro`
--
ALTER TABLE `catastro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
