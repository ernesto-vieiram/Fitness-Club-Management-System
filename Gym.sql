-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-01-2020 a las 09:44:43
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `COURSES`
--

CREATE TABLE `COURSES` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `CourseDay` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `CourseHour` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `TrainerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `COURSES`
--

INSERT INTO `COURSES` (`CourseID`, `CourseName`, `CourseDay`, `CourseHour`, `TrainerID`) VALUES
(2, 'ZUMBA', 'TUESDAY', '8:00', 5),
(3, 'BODY COMBAT', 'MONDAY', '17:00', 6),
(4, 'TRX', 'WEDNESDAY', '16:00', 7),
(7, 'PILATES', 'THURSDAY', '12:00', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MembersCourses`
--

CREATE TABLE `MembersCourses` (
  `MemberID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `MemberName` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `MembersCourses`
--

INSERT INTO `MembersCourses` (`MemberID`, `CourseID`, `MemberName`) VALUES
(13, 2, 'USER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Surname` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Email` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Password` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Telefon` float NOT NULL,
  `Rool` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `Name`, `Surname`, `Email`, `Password`, `Telefon`, `Rool`) VALUES
(2, 'a', 'a', 'a@a.com', '$2y$10$Yr3HdRLXRxjgZvbpQ7frvOdi.Y8UNpkbyskJJ9WZlaOoJisHWerYe', 555, 0),
(12, 'ADMIN', 'ADMIN', 'admin@gmail.com', '$2y$10$rAvd8WE60KRK1JluOaHpd.fwiB2wKz101NY1IzsKzDW/AI4QFn5bO', 123457000, 2),
(13, 'USER', 'USER', 'user@gmail.com', '$2y$10$x8OBChS.pBL2H9VwjZT8yuZPdw20Y0FeYJ1YmOAjfkK5FzDfGWPu2', 123457000, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `COURSES`
--
ALTER TABLE `COURSES`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indices de la tabla `MembersCourses`
--
ALTER TABLE `MembersCourses`
  ADD PRIMARY KEY (`MemberID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `COURSES`
--
ALTER TABLE `COURSES`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `MembersCourses`
--
ALTER TABLE `MembersCourses`
  ADD CONSTRAINT `MembersCourses_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `MembersCourses_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `COURSES` (`CourseID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
