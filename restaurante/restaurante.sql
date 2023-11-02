-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-03-2022 a las 07:38:27
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cedcli` int(10) NOT NULL,
  `nomcli` varchar(50) NOT NULL,
  `telcli` varchar(10) NOT NULL,
  `platos` int(10) NOT NULL DEFAULT 0,
  `precio` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cedcli`, `nomcli`, `telcli`, `platos`, `precio`) VALUES
(100, 'Marcos Caicedo', '3122019130', 20, 5000),
(200, 'Jose Paz', '3122019312', 10, 4800),
(300, 'Velinta Martinez', '3112020102', 5, 6000),
(400, 'Ana Puchana', '3002018042', 5, 7000),
(980, 'Carlos  Benavides', '3162011433', 10, 4500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiquetera`
--

CREATE TABLE `tiquetera` (
  `cedcli` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiquetera`
--

INSERT INTO `tiquetera` (`cedcli`, `fecha`, `cantidad`) VALUES
(100, '2022-02-10', 1),
(100, '2022-02-11', 1),
(100, '2022-02-12', 2),
(200, '2022-03-22', 1),
(200, '2022-03-24', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cedcli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
