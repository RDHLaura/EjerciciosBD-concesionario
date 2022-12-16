-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 16-12-2022 a las 18:56:23
-- Versión del servidor: 10.9.3-MariaDB-1:10.9.3+maria~ubu2204
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ciudad` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `gastado` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `ciudad`, `gastado`) VALUES
(1, 'Marci', 'Mapinrea', '2763301.35'),
(2, 'Emmey', 'Sheshan', '6969105.44'),
(3, 'Ros', 'Viedma', '8060845.46'),
(4, 'Ami', 'Coronel Suárez', '3435009.99'),
(5, 'Tobye', 'São João de Caparica', '248104.70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coche`
--

CREATE TABLE `coche` (
  `id` bigint(20) NOT NULL,
  `modelo` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `marca` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `precio` decimal(12,2) DEFAULT NULL,
  `stock` decimal(5,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `coche`
--

INSERT INTO `coche` (`id`, `modelo`, `marca`, `precio`, `stock`) VALUES
(1, 'E250', 'Ford', '115602.00', '25'),
(2, 'Accord Crosstour', 'Honda', '157481.00', '2'),
(3, 'Passat', 'Volkswagen', '114097.00', '17'),
(4, 'CX-7', 'Mazda', '106057.00', '23'),
(5, 'Durango', 'Dodge', '13000.00', '8'),
(6, 'Sportvan G30', 'Chevrolet', '149298.00', '8'),
(7, 'Econoline E350', 'Ford', '121882.00', '0'),
(8, 'Ram Van 2500', 'Dodge', '166965.00', '2'),
(9, 'Odyssey', 'Honda', '165497.00', '16'),
(10, 'V8', 'Audi', '100964.00', '25'),
(13, 'a1', 'Mercedes', '75050.00', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargo`
--

CREATE TABLE `encargo` (
  `id` bigint(20) NOT NULL,
  `coche_id` bigint(20) DEFAULT NULL,
  `cliente_id` bigint(20) DEFAULT NULL,
  `cantidad` decimal(4,0) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `encargo`
--

INSERT INTO `encargo` (`id`, `coche_id`, `cliente_id`, `cantidad`, `fecha`) VALUES
(1, 1, 1, '16', '2016-01-16'),
(2, 2, 2, '1', '2017-08-13'),
(3, 3, 3, '9', '2020-06-26'),
(4, 4, 4, '32', '2019-11-07'),
(5, 5, 5, '40', '2016-01-24'),
(6, 6, 1, '4', '2018-07-18'),
(7, 7, 2, '60', '2018-01-18'),
(8, 8, 3, '78', '2017-05-12'),
(9, 9, 4, '95', '2019-03-26'),
(10, 10, 5, '11', '2016-02-27'),
(11, 1, 1, '23', '2018-08-15'),
(12, 2, 2, '90', '2017-11-06'),
(13, 3, 3, '12', '2019-06-07'),
(14, 4, 4, '100', '2018-10-23'),
(15, 5, 5, '100', '2018-04-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombreusu` varchar(50) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `edad` decimal(3,0) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombreusu`, `clave`, `nombre`, `apellidos`, `edad`, `direccion`) VALUES
('laura', '$2y$10$Z3C6YQhDoYzWwoZ/vPtnnuS0WffKqnqIxK/VZuzcQyTCaaCWhYzbi', 'laura', 'rodrg', '33', 'c/falsa 123'),
('nueva', '$2y$10$yKiwyt6h53.FQOLC1TIma.lwBScHwydakOlD.pwwgikpX95YmCalS', 'prueba', 'nueva', '44', 'Falsa'),
('usuario', '$2y$10$H801d99D32QFEgZeD7M08OIxbOX63qriDmf2jnb1jWMu3xk7K523.', NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coche`
--
ALTER TABLE `coche`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encargo`
--
ALTER TABLE `encargo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_encargo_cliente` (`cliente_id`),
  ADD KEY `fk_encargo_coche` (`coche_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nombreusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `coche`
--
ALTER TABLE `coche`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `encargo`
--
ALTER TABLE `encargo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encargo`
--
ALTER TABLE `encargo`
  ADD CONSTRAINT `fk_encargo_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_encargo_coche` FOREIGN KEY (`coche_id`) REFERENCES `coche` (`id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
