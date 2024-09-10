-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-10-2023 a las 13:18:48
-- Versión del servidor: 5.1.53
-- Versión de PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE IF NOT EXISTS `pelicula` (
  `Id_P` varchar(8) NOT NULL,
  `titulo` text NOT NULL,
  `director` text NOT NULL,
  `genero` text NOT NULL,
  `duracion` varchar(6) NOT NULL,
  PRIMARY KEY (`Id_P`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`Id_P`, `titulo`, `director`, `genero`, `duracion`) VALUES
('70A71B72', 'El camino del agua', 'James Cameron', 'ficcion', '128'),
('72A73B74', 'Pesadilla en la calle elm', 'Wes craven', 'terror', '160');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_usuario`
--

CREATE TABLE IF NOT EXISTS `pelicula_usuario` (
  `Id_U` varchar(8) NOT NULL,
  `Id_P` varchar(8) NOT NULL,
  PRIMARY KEY (`Id_U`,`Id_P`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `pelicula_usuario`
--

INSERT INTO `pelicula_usuario` (`Id_U`, `Id_P`) VALUES
('12A13B14', '70A71B72'),
('15A16B17', '72A73B74');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_U` varchar(8) NOT NULL,
  `Apellido` text NOT NULL,
  `Nombre` text NOT NULL,
  `edad` int(3) NOT NULL,
  PRIMARY KEY (`Id_U`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_U`, `Apellido`, `Nombre`, `edad`) VALUES
('12A13B14', 'Lara', 'Antonella', 17),
('15A16B17', 'Puentes', 'Mateo', 17),
('18A19B20', 'Lambrecht', 'Tomas', 18),
('21A22B23', 'Gozalez', 'Leila', 19);
