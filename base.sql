-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 23:01:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `base`
--

CREATE TABLE `base` (
  `id` int(100) NOT NULL,
  `NoCedula` int(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `NoTelefono` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fechaDeConsulta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `base`
--

INSERT INTO `base` (`id`, `NoCedula`, `nombre`, `apellido`, `NoTelefono`, `email`, `fechaDeConsulta`) VALUES
(3, 21457, 'jose', 'heredia', 2147483647, 'joseheredia@gmail.com', '2023-05-30'),
(4, 802412, 'carlos', 'castaño', 2147483647, 'carloscastano@gmail.com', '2023-05-28'),
(5, 802412, 'carlos', 'castaño', 2147483647, 'carloscastano@gmail.com', '2023-05-28'),
(6, 2147483647, 'anita', 'del barrio', 2147483647, 'anitassuperlindita@gmail.com', '2023-05-28'),
(7, 12121212, 'luisa', 'gambino', 2147483647, 'carlaroj@gmail.com', '2023-05-29'),
(8, 12121212, 'luisa', 'gambino', 2147483647, 'carlaroj@gmail.com', '2023-05-29'),
(9, 25847154, 'andre', 'lopez', 2147483647, 'andreporras@gmail.com', '2023-05-27'),
(10, 654878154, 'rafael', 'moreno', 2147483647, 'rafaelsalas@gmail.com', '2023-05-27'),
(11, 25847112, 'maria', 'gambino', 2147483647, 'maria@gmail.com', '2023-05-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `base`
--
ALTER TABLE `base`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
