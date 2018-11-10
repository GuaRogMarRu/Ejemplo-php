-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2018 a las 23:10:33
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbdd_gr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_va`
--

CREATE TABLE `admin_va` (
  `id_usuario` int(30) NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `admin_va`
--

INSERT INTO `admin_va` (`id_usuario`, `usuario`, `contrasena`) VALUES
(1, 'rogelio', '12345'),
(3, 'dos', '1010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(30) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `materia` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `nombre`, `materia`) VALUES
(1, 'PPPPP', 'Español'),
(2, 'MM', 'Matemáticas'),
(3, 'LLL', 'Ciencias Naturales'),
(4, 'NNNN', 'Geografía'),
(5, 'Paco el Chato', 'Español'),
(6, 'EEE', 'Matemáticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_prof` int(30) NOT NULL,
  `Nomb` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Ape` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Usuario` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Pass` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_prof`, `Nomb`, `Ape`, `correo`, `Usuario`, `Pass`, `Estatus`) VALUES
(1, 'Rogelio', 'Mares', 'gmares@gmail.com', 'Roger', '123456', 1),
(2, 'Bibiana', 'Herrera', 'bherrera@gmail.com', 'Bibi', '123456789', 1),
(5, 'Martha', 'Ramírez', 'mramires@gmail.com', 'Golo', '123456', 1),
(7, 'Gabriel', 'Gaytan', 'ggabriel@gmail.com', 'Teto', '321654', 1),
(8, 'fgdsf', 'fgs', 'Tres@gmail.com', 'ASADADS', '7812687162', 1),
(9, 'CCCC', 'aaaaa', 'iii@gmail.com', 'NSNS', '222222', 0),
(12, 'Esvair', 'MM', 'mono@gmail.com', 'Mono', 'asdas', 1),
(15, 'DOSESEESE', 'wge', 'dsfg@gmail.com', 'dfg', 'sdfs', 1),
(16, 'aaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaa', 1),
(17, 'bnncb', 'cvbsd', 'dsfgds', 'g', 'dfg', 1),
(18, 'dfgdf', 'dfgdsf', 'dfgsd', 'q5345324', '345234', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `u_profesor`
--

CREATE TABLE `u_profesor` (
  `id_uprof` int(30) NOT NULL,
  `id_prof` int(30) NOT NULL,
  `id_libro` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `u_profesor`
--

INSERT INTO `u_profesor` (`id_uprof`, `id_prof`, `id_libro`) VALUES
(1, 0, 0),
(2, 16, 0),
(3, 17, 0),
(4, 18, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_va`
--
ALTER TABLE `admin_va`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_prof`);

--
-- Indices de la tabla `u_profesor`
--
ALTER TABLE `u_profesor`
  ADD PRIMARY KEY (`id_uprof`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_va`
--
ALTER TABLE `admin_va`
  MODIFY `id_usuario` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_prof` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `u_profesor`
--
ALTER TABLE `u_profesor`
  MODIFY `id_uprof` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
