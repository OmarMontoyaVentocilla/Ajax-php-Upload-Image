

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `formularioliv`
--
CREATE DATABASE  formularioliv;

USE formularioliv;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminliv`
--

CREATE TABLE IF NOT EXISTS `adminliv` (
  `idadminliv` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  PRIMARY KEY (`idadminliv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formliv`
--

CREATE TABLE IF NOT EXISTS `formliv` (
  `idformContacto` int(11) NOT NULL AUTO_INCREMENT,
  `datosContacto` varchar(70) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `especialidad` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `archivo` varchar(45) NOT NULL,
  `mensaje` varchar(45) NOT NULL,
  `adminliv` int(11) NOT NULL,
  PRIMARY KEY (`idformContacto`,`adminliv`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_formliv_adminliv_idx` (`adminliv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `formliv`
--
ALTER TABLE `formliv`
  ADD CONSTRAINT `fk_formliv_adminliv` FOREIGN KEY (`adminliv`) REFERENCES `adminliv` (`idadminliv`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
