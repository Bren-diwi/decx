-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-12-2021 a las 04:46:25
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `decx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldislikes`
--

DROP TABLE IF EXISTS `tbldislikes`;
CREATE TABLE IF NOT EXISTS `tbldislikes` (
  `dislikID` int(11) NOT NULL AUTO_INCREMENT,
  `dislikCorreo` varchar(50) COLLATE utf8_bin NOT NULL,
  `dislikFoto` int(11) NOT NULL,
  `dislikFechaHora` datetime NOT NULL,
  PRIMARY KEY (`dislikID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfoto`
--

DROP TABLE IF EXISTS `tblfoto`;
CREATE TABLE IF NOT EXISTS `tblfoto` (
  `fotID` int(11) NOT NULL AUTO_INCREMENT,
  `fotCorreo` varchar(50) COLLATE utf8_bin NOT NULL,
  `fotDescripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  `fotArchivo` varchar(100) COLLATE utf8_bin NOT NULL,
  `fotFechaHora` datetime NOT NULL,
  PRIMARY KEY (`fotID`),
  KEY `fotCorreo` (`fotCorreo`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tblfoto`
--

INSERT INTO `tblfoto` (`fotID`, `fotCorreo`, `fotDescripcion`, `fotArchivo`, `fotFechaHora`) VALUES
(25, 'prueba1@gmail.com', 'prueba1', '2021-12-15 04-43-07.jpg', '2021-12-14 22:43:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbllikes`
--

DROP TABLE IF EXISTS `tbllikes`;
CREATE TABLE IF NOT EXISTS `tbllikes` (
  `likID` int(11) NOT NULL AUTO_INCREMENT,
  `likCorreo` varchar(50) COLLATE utf8_bin NOT NULL,
  `likFoto` int(11) NOT NULL,
  `likFechaHora` datetime NOT NULL,
  PRIMARY KEY (`likID`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbllikes`
--

INSERT INTO `tbllikes` (`likID`, `likCorreo`, `likFoto`, `likFechaHora`) VALUES
(35, 'prueba1@gmail.com', 25, '2021-12-15 04:44:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmensajes`
--

DROP TABLE IF EXISTS `tblmensajes`;
CREATE TABLE IF NOT EXISTS `tblmensajes` (
  `menID` int(11) NOT NULL AUTO_INCREMENT,
  `menPara` varchar(50) COLLATE utf8_bin NOT NULL,
  `menDe` varchar(50) COLLATE utf8_bin NOT NULL,
  `menAsunto` varchar(50) COLLATE utf8_bin NOT NULL,
  `menMensaje` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`menID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tblmensajes`
--

INSERT INTO `tblmensajes` (`menID`, `menPara`, `menDe`, `menAsunto`, `menMensaje`) VALUES
(6, 'prueba1@gmail.com', 'prueba1@gmail.com', 'Prueba1', ' hola\r\n\r\nes un placer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

DROP TABLE IF EXISTS `tblusuario`;
CREATE TABLE IF NOT EXISTS `tblusuario` (
  `usuCorreo` varchar(60) COLLATE utf8_bin NOT NULL,
  `usuNombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `usuContrasena` text COLLATE utf8_bin NOT NULL,
  `usuFecha` date NOT NULL,
  PRIMARY KEY (`usuCorreo`),
  KEY `NDX_Nombre` (`usuNombre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`usuCorreo`, `usuNombre`, `usuContrasena`, `usuFecha`) VALUES
('prueba1@gmail.com', 'MauXP00', '$2y$10$SDK3MzVRiFYRWaLcEbKnpuh9Pcj6FQ4gLTtc0wwVvm05o3YOIRaPS', '2021-07-22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
