-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2022 a las 00:08:34
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tarea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(15) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `nombre` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `telefono` varchar(8) COLLATE utf8mb4_bin NOT NULL,
  `dpi` varchar(13) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(400) COLLATE utf8mb4_bin NOT NULL,
  `seguridad` varchar(400) COLLATE utf8mb4_bin NOT NULL,
  `fecha_sesion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `nombre`, `telefono`, `dpi`, `password`, `seguridad`, `fecha_sesion`) VALUES
(33, 'Marleny', 'Marleny Lisset Mira Alvarado', '32198348', '2969637980101', '$2y$10$GZO9mmJzaFWAduV054/CCuGV4yyZIscALYf2gY4aVhYdVgbxm5SpK', '$2y$10$6QUc0MaDPO6/Y9k7q3gmp.LzWlzOkOrjztEYZCmzFSwCkvmpY4bN.', '2022-08-17 22:07:41'),
(34, 'Rubelsy', 'Rubelsy Antonio Velasquez Baten', '56897412', '5269789411401', '$2y$10$Lvlg3t2oB066y1ASaHrOm.vsb5qb.zcpAmdfMpvf5jNmZQrXblPvq', '$2y$10$257i6YpT5wLWfm6aAkyt1ejpFvOu7ZqLVh2V.SWpS/nlbvjwPsPAe', '2022-08-17 21:59:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
