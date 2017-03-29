-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-03-2016 a las 20:36:15
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `curso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `tipodocumento` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `documento` int(20) NOT NULL,
  `nombres` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `primerApellido` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `segundoApellido` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `celular` int(20) NOT NULL,
  `edad` int(10) NOT NULL,
  `estrato` int(10) NOT NULL,
  `correo` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contrasenia` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`tipodocumento`, `documento`, `nombres`, `primerApellido`, `segundoApellido`, `celular`, `edad`, `estrato`, `correo`, `telefono`, `direccion`, `usuario`, `contrasenia`) VALUES
('CC', 1056957561, 'Juan Manuel', 'Ruiz', 'Ruiz', 2147483647, 18, 2, 'jumaru-97@hotmail.com', 663838, 'calle 196', 'JuanMa', 'juan12');
