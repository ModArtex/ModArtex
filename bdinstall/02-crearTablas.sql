-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2016 a las 03:24:38
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `modartex`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_CambiarEstadoFicha` (IN `_codigo` INT, IN `_estado` INT(1))  NO SQL
UPDATE fichas SET estado = _estado WHERE codigo = _codigo$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `codigo` int(11) NOT NULL,
  `referencia` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `stock_min` int(11) NOT NULL,
  `fecha_reg` date NOT NULL,
  `valor_produccion` double NOT NULL,
  `valor_producto` double NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`codigo`, `referencia`, `color`, `stock_min`, `fecha_reg`, `valor_produccion`, `valor_producto`, `estado`) VALUES
(1, 201, 'Azulito', 123, '2016-06-20', 3900, 5000, 0),
(2, 202, 'Azul', 100, '0000-00-00', 3500, 4200, 0),
(3, 203, 'Blanco', 180, '2016-06-09', 2100, 3200, 0),
(4, 204, 'Verde Olivo', 500, '2016-06-06', 2500, 3000, 0),
(5, 205, 'Blanco polar', 140, '2016-06-06', 3400, 2000, 0),
(19, 206, 'Verdesito', 200, '2016-06-13', 2000, 1258, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `codigo` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `cliente` varchar(30) NOT NULL,
  `valor_total` double NOT NULL,
  `fecha_entrega` date NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`codigo`, `fecha_registro`, `cliente`, `valor_total`, `fecha_entrega`, `estado`) VALUES
(1, '2016-06-05', 'Juan', 180000, '2016-07-06', 'Habilitado'),
(2, '2016-06-06', 'Johan', 300000, '2016-07-10', 'Habilitado'),
(3, '2016-06-06', 'Juan', 250000, '2016-06-06', 'Habilitado'),
(4, '2016-06-06', 'Jorge', 200000, '2016-07-06', 'Habilitado'),
(5, '2016-06-06', 'Jorge', 300000, '2016-07-06', 'Habilitado'),
(6, '2016-06-06', 'Johan', 200000, '2016-07-06', 'Habilitado'),
(7, '2016-06-06', 'Juan', 300000, '2016-08-06', 'Habilitado'),
(8, '2016-06-06', 'Jorge', 500000, '2016-08-06', 'Habilitado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
