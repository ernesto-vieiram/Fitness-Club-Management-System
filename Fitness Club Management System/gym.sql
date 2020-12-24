-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2020 a las 10:47:26
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `CourseDay` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `CourseHour` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `TrainerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`CourseID`, `CourseName`, `CourseDay`, `CourseHour`, `TrainerID`) VALUES
(4, 'TRX', 'WEDNESDAY', '16:00', 7),
(7, 'PILATES', 'THURSDAY', '12:00', 5),
(8, 'BOYDPUMP', 'FRIDAY', '15:00', 2),
(9, 'KARATE', 'FRIDAY', '17:00', 3),
(10, 'JUDO', 'MONDAY', '13:00', 2),
(12, 'BODYCOMBAT', 'THURSDAY', '11:00', 5),
(13, 'BODYCOMBAT', 'THURSDAY', '11:00', 5),
(14, 'BODYCOMBAT', 'THURSDAY', '11:00', 2),
(15, 'ATTACK', 'FRIDAY', '9:00', 1),
(16, 'ATTACK', 'FRIDAY', '9:00', 1),
(23, 'JUDO', 'SATURDAY', '13:00', 5),
(24, 'SWIM', 'MONDAY', '21:00', 3),
(35, 'Stretching', 'WEDNESDAY', '18:00', 3),
(36, 'Body Balance', 'TUESDAY', '8:00', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `memberscourses`
--

CREATE TABLE `memberscourses` (
  `MemberID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `MemberName` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `memberscourses`
--

INSERT INTO `memberscourses` (`MemberID`, `CourseID`, `MemberName`) VALUES
(20, 8, 'Jenses'),
(21, 7, 'dani'),
(21, 13, 'dani');

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
(13, 'USER', 'USER', 'user@gmail.com', '$2y$10$x8OBChS.pBL2H9VwjZT8yuZPdw20Y0FeYJ1YmOAjfkK5FzDfGWPu2', 123457000, 0),
(15, 'Ernesto', 'Vieira', 'ernesto@gmail.com', '$2y$10$iPHCYZzoHJ1d7TkoqdcFJeDji5yTjIpzD7GeRm7MKyoJQDJ25gFpW', 0, 0),
(19, 'Marc', 'veve', 'm@m.com', 'Marc', 0, 0),
(20, 'Jenses', 'deeev', 'j@j.com', '$2y$10$/WzcYSOsXEWzTqBQm/F5AuQn9ziH4hIhafOlX9MkjVIWcme6nG8Ne', 0, 2),
(21, 'dani', 'dew', 'd@d.com', '$2y$10$E8GMh1lwsTrONMK8uKrjfO6l4EDiCE/xcfIyj0ETBQ1.yfw5fUftG', 0, 0),
(22, 'Pablo', 'desw', 'p@p.com', '$2y$10$OnL1Rvwk08PW7megKgJ8Fu2R1sVqO0qpbAXgSFoFEHQqFwXO.YCo6', 46745, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indices de la tabla `memberscourses`
--
ALTER TABLE `memberscourses`
  ADD PRIMARY KEY (`MemberID`,`CourseID`),
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
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `memberscourses`
--
ALTER TABLE `memberscourses`
  ADD CONSTRAINT `MembersCourses_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `users` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `MembersCourses_ibfk_2` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
