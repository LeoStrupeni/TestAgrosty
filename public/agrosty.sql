-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2020 a las 03:01:01
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agrosty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `body` text NOT NULL,
  `fromName` varchar(255) NOT NULL,
  `FromEmail` varchar(255) NOT NULL,
  `toEmail` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `spanScore` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `message`
--

INSERT INTO `message` (`id`, `subjectid`, `body`, `fromName`, `FromEmail`, `toEmail`, `date`, `spanScore`) VALUES
(1, 1, 'viagra\r\noferta\r\ncontactanos', 'asda', 'leonardo.strupeni@gmail.com', 'ss@aa.com', '2020-08-28', 1.16667),
(2, 1, 'viagra\r\noferta\r\ncontactanos', 'asda', 'leonardo.strupeni@gmail.com', 'ss@aa.com', '2020-08-28', 1.16667),
(3, 1, 'viagra\r\noferta\r\ncontactanos', 'asda', 'leonardo.strupeni@gmail.com', 'ss@aa.com', '2020-08-28', 1.16667),
(4, 1, 'viagra\r\noferta\r\ncontactanos', 'asda', 'leonardo.strupeni@gmail.com', 'ss@aa.com', '2020-08-28', 1.16667),
(5, 1, 'viagra\r\noferta\r\ncontactanos', 'asda', 'leonardo.strupeni@gmail.com', 'ss@aa.com', '2020-08-28', 1.16667),
(6, 1, 'viagra\r\noferta\r\ncontactanos', 'asda', 'leonardo.strupeni@gmail.com', 'ss@aa.com', '2020-08-28', 1.16667),
(7, 2, 'PROBANDO OTROA', 'Leonardo Strupeni', 'leonardo.strupeni@gmail.com', 'Prueba@test.com', '2020-08-28', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subjects`
--

INSERT INTO `subjects` (`id`, `desc`) VALUES
(1, 'Reclamo'),
(2, 'Solicitud'),
(3, 'Queja');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_subjectid` (`subjectid`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_subjectid` FOREIGN KEY (`subjectid`) REFERENCES `subjects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
