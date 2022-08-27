-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2022 a las 03:52:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnofor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `student_email` varchar(40) NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `visits`
--

INSERT INTO `visits` (`id`, `student_email`, `visit_date`) VALUES
(1, 'segundo.saavedrac@ug.edu.ec', '2022-08-16 19:16:35'),
(2, 'jamilpulley@gmail.com', '2022-08-17 15:04:13'),
(3, 'jsdianacastro13@gmail.com', '2022-08-17 15:35:17'),
(4, 'test@gmail.com', '2022-08-17 15:41:15'),
(5, 'jennifercali86@gmail.com', '2022-08-17 19:52:32'),
(6, 'test@gmail.com', '2022-08-17 20:12:01'),
(7, 'test@gmail.com', '2022-08-17 20:12:20'),
(8, 'ali.ruizr@gmail.com', '2022-08-17 23:07:44'),
(9, 'jsdianacastro13@gmail.com', '2022-08-18 13:37:02'),
(10, 'test@gmail.com', '2022-08-20 08:07:04'),
(11, 'jsdianacastro13@gmail.com', '2022-08-20 14:01:19'),
(12, 'jennifercali86@gmail.com', '2022-08-20 14:04:16'),
(13, 'jennifercali86@gmail.com', '2022-08-20 15:07:22'),
(14, 'segundo.saavedrac@ug.edu.ec', '2022-08-20 19:45:43'),
(15, 'jennifercali86@gmail.com', '2022-08-22 16:17:30'),
(16, 'jsdianacastro13@gmail.com', '2022-08-23 20:29:38'),
(17, 'opticakapvision@gmail.com', '2022-08-23 20:48:13'),
(18, 'jsdianacastro13@gmail.com', '2022-08-24 14:28:00'),
(19, 'jennifercali86@gmail.com', '2022-08-24 15:42:45'),
(20, 'segundo.saavedrac@ug.edu.ec', '2022-08-24 16:12:20'),
(21, 'jennifercali86@gmail.com', '2022-08-24 16:22:12'),
(22, 'jsdianacastro13@gmail.com', '2022-08-26 05:19:35'),
(23, 'jsdianacastro13@gmail.com', '2022-08-26 15:19:43'),
(24, 'jennifercali86@gmail.com', '2022-08-26 21:31:25'),
(25, 'segundo.saavedrac@ug.edu.ec', '2022-08-26 22:37:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_estudiante` (`student_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `visits`
--
ALTER TABLE `visits`
  ADD CONSTRAINT `visits_ibfk_1` FOREIGN KEY (`student_email`) REFERENCES `students` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
