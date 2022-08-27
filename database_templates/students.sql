-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2022 a las 03:51:38
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
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `email` varchar(40) NOT NULL,
  `account_pass` varchar(250) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`email`, `account_pass`, `creation_date`, `update_date`) VALUES
('ali.ruizr@gmail.com', '$2y$10$a9QoZQuUTvwJLxWhDEl28.rx/iOIZU/LFGJ7d4rByjsosLofhLBI2', '2022-08-17 23:07:44', NULL),
('jamilpulley@gmail.com', '$2y$10$HG90ydFf1LOka7aqC47xpOchqg92HNeuGXvvTqS1B7Hn2Dz9f1hka', '2022-08-17 15:04:13', NULL),
('jennifercali86@gmail.com', '$2y$10$15/65fIUzmd72Vqc7pDv9Onl1xOtAGdNDnzF2MglifljjhgJ5OTQe', '2022-08-17 19:52:32', NULL),
('jsdianacastro13@gmail.com', '$2y$10$yKeVc4AOIZylMePQY1eiDO/0rzOeyq.e2hp6YMc2/tX6ssr6wvoR.', '2022-08-17 15:35:17', NULL),
('opticakapvision@gmail.com', '$2y$10$LZmp9viw10hAGt5F9lCoXe5icVlyC5qs081wVgAqJfe6ESipz90Pa', '2022-08-23 20:48:13', NULL),
('segundo.saavedrac@ug.edu.ec', '$2y$10$NgHroTUDcT8xm2DGKXusbeqvpsG/yDpxTrBkNY74sJmJte/lC/1l.', '2022-08-16 19:16:35', '2022-08-26 17:37:38'),
('test@gmail.com', '$2y$10$WxZXBAT143Dr4BDq.XjiFu.I93ueC4AloE1V8UgxncA1XzytDUSxK', '2022-08-17 15:41:15', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
