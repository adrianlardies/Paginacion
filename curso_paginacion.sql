-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 29-03-2024 a las 19:18:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curso_paginacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `articulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `articulo`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(2, 'Curabitur eu ornare lorem. Phasellus porta massa arcu.'),
(3, 'Non convallis nisl pellentesque vitae.'),
(4, 'Vestibulum pharetra ex magna. Duis blandit turpis.'),
(5, 'In ante euismod hendrerit. In dui enim, molestie.'),
(6, 'Eu ante ut, placerat tempus sem.'),
(7, 'Proin ut elementum diam, a congue lectus.'),
(8, 'Nunc dictum nibh id nunc dictum, ut faucibus felis finibus.'),
(9, 'Nunc cursus dui sit amet velit facilisis.'),
(10, 'Nec consectetur urna eleifend. Curabitur scelerisque.'),
(11, 'Orci id est sollicitudin, sed lacinia nisi rutrum. '),
(12, 'Curabitur ut velit odio.'),
(13, 'Nullam finibus erat ut ipsum mattis, eu tristique lorem.'),
(14, 'Cras a consequat ex, vitae accumsan velit. Suspendisse sodales.'),
(15, 'Aenean luctus, neque nec dignissim bibendum, neque.'),
(16, 'Curabitur ut fermentum elit. In ipsum diam, accumsan. '),
(17, 'Dapibus tellus enim et metus. Sed fermentum risus.'),
(18, 'In blandit sagittis lectus nec fermentum. '),
(19, 'Quisque scelerisque erat in risus viverra.'),
(20, 'Proin bibendum ullamcorper leo, eget egestas.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
