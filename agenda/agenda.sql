-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2022 a las 11:02:44
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
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulas`
--

CREATE TABLE `formulas` (
  `numreg` int(10) NOT NULL,
  `cedusu` varchar(10) NOT NULL,
  `medicamento` varchar(200) NOT NULL,
  `dosis` varchar(100) NOT NULL,
  `fecexp` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulas`
--

INSERT INTO `formulas` (`numreg`, `cedusu`, `medicamento`, `dosis`, `fecexp`, `hora`, `estado`) VALUES
(1, '101', 'Ibuprofeno', '400mg', '2023-12-12', '10:00:00', 'Pendiente'),
(2, '101', 'Aspirina', '100mg', '2023-12-12', '14:00:00', 'Pendiente'),
(3, '101', 'Acetaminofen', '400mg', '2023-12-12', '14:00:00', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedusu` varchar(10) NOT NULL,
  `nomusu` varchar(100) NOT NULL,
  `genusu` varchar(1) NOT NULL,
  `fecnac` date NOT NULL,
  `epicrisis` text NOT NULL,
  `telusu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedusu`, `nomusu`, `genusu`, `fecnac`, `epicrisis`, `telusu`) VALUES
('101', 'Justo Eliecer Estrada', 'M', '1910-04-29', 'Hipertensión Arterial', '7219012'),
('200', 'Marta Caicedo', 'F', '1942-04-29', 'Diabetes Mellitus', '721202'),
('300', 'Jorge Mora', 'M', '1935-04-29', 'Hipertensión Arterial', '7215555'),
('400', 'Maria de los Angeles Paz', 'F', '1943-12-28', 'Hipertiroidismo', '7233242');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulas`
--
ALTER TABLE `formulas`
  ADD PRIMARY KEY (`numreg`),
  ADD KEY `rel_usuarios_formulas` (`cedusu`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulas`
--
ALTER TABLE `formulas`
  MODIFY `numreg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `formulas`
--
ALTER TABLE `formulas`
  ADD CONSTRAINT `rel_usuarios_formulas` FOREIGN KEY (`cedusu`) REFERENCES `usuarios` (`cedusu`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
