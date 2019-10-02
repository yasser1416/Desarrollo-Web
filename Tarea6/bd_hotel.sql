-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-10-2012 a las 09:43:47
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id_reservas` smallint(6) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `tipohabitacion` varchar(50) NOT NULL,
  `dias` int(11) NOT NULL,
  PRIMARY KEY (`id_reservas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitacion`
--

CREATE TABLE IF NOT EXISTS `tipohabitacion` (
  `id_tipohabitacion` smallint(6) NOT NULL AUTO_INCREMENT,
  `habitacion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipohabitacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tipohabitacion`
--

INSERT INTO `tipohabitacion` (`id_tipohabitacion`, `habitacion`) VALUES
(1, 'Simple');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `login` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `Nivel` int(11) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`login`, `contraseña`, `nombres`, `apellidos`, `email`, `sexo`, `Nivel`) VALUES
('admSergio', 'drago', 'sergio omar', 'sandy cordova', 'sergiosandy.realnetwork@gmail.com', 'masculino', 0),
('fernando', 'network', 'fernando', 'lopez', 'fernan@hotmail.com', 'masculino', 1),
('sadasd', 'sadasd', 'asda', 'sadasd', 'asdasd', 'femenino', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
