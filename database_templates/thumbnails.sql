-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2022 a las 03:51:48
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
-- Estructura de tabla para la tabla `thumbnails`
--

CREATE TABLE `thumbnails` (
  `id` int(11) NOT NULL,
  `intro_video` varchar(100) NOT NULL,
  `image_src` varchar(100) NOT NULL,
  `video_src` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `excerpt` text NOT NULL,
  `tag` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `thumbnails`
--

INSERT INTO `thumbnails` (`id`, `intro_video`, `image_src`, `video_src`, `title`, `theme`, `creation_date`, `excerpt`, `tag`) VALUES
(1, 'https://www.youtube.com/embed/FYegJky6_7Q?autoplay=true', '/img/unidades/matematicas1.jpg', 'https://www.youtube.com/embed/IHblqjW8RY8', 'Propiedades de los números reales y medidas de tendencia central y dispersión.', 'Potenciación con exponentes enteros. Propiedades', '2022-08-17 03:16:13', 'La potencia de exponente natural de un número entero positivo, es igual a multiplicar dicho número por...', 'Unidad#1'),
(2, 'https://www.youtube.com/embed/FYegJky6_7Q?autoplay=true', '/img/unidades/matematicas2.jpg', 'https://www.youtube.com/embed/AHST5m31L3o', 'Vectores geométricos en el plano y funciones reales', 'Operaciones con vectores en el plano', '2022-08-17 03:16:31', 'Un vector es un segmento orientado. No es más que un trazo de recta, en el que...', 'Unidad#2'),
(3, 'https://www.youtube.com/embed/FYegJky6_7Q?autoplay=true', '/img/unidades/matematicas3.jpg', 'https://www.youtube.com/embed/TSn3RRXSqTg', 'Función cuadrática y el espacio vectorial en R2', 'Sistemas de dos ecuaciones con dos incógnitas en forma analítica', '2022-08-17 03:17:43', 'Un sistema lineal de ecuaciones, o sistema de ecuaciones lineales o, incluso, por brevedad, sistema de ecuaciones, es un conjunto de...', 'Unidad#3'),
(4, 'https://www.youtube.com/embed/FYegJky6_7Q?autoplay=true', '/img/unidades/matematicas4.jpg', 'https://www.youtube.com/embed/7bzhgwe9mvo', 'Rectas en R2 y derivada de la función cuadrática', 'Ecuación Vectorial de la Recta', '2022-08-17 03:17:55', 'Recordemos que la definición matemática de una recta es un conjunto de puntos consecutivos que...', 'Unidad#4'),
(5, 'https://www.youtube.com/embed/FYegJky6_7Q?autoplay=true', '/img/unidades/matematicas5.jpg', 'https://www.youtube.com/embed/M63XSEGvwxc', 'Polinomios reales con coeficientes en R y distacia de un punto a una recta', 'Multiplicación con polinomios', '2022-08-17 03:18:08', 'Las propiedades del producto de números reales, así como la potenciación de números reales con exponentes naturales nos da...', 'Unidad#5'),
(6, 'https://www.youtube.com/embed/FYegJky6_7Q?autoplay=true', '/img/unidades/matematicas6.jpg', 'https://www.youtube.com/embed/hIuBi3DwdO0', 'División de polinomios reales con coeficientes en R. Probabilidad', 'División de polinomios. Teorema del residuo', '2022-08-17 03:18:20', 'La división de polinomios se encuentra entre una gran cantidad de operaciones algebraicas, y entre ellas podemos...', 'Unidad#6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `thumbnails`
--
ALTER TABLE `thumbnails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `thumbnails`
--
ALTER TABLE `thumbnails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
