-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2024 a las 07:07:13
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `imagen_producto` varchar(500) NOT NULL,
  `descripcion_producto` varchar(500) NOT NULL,
  `stock_producto` int(11) NOT NULL,
  `precio_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `imagen_producto`, `descripcion_producto`, `stock_producto`, `precio_producto`) VALUES
(1, 'Molinillo de café', '.././img/molinillo.jpg', 'Molido regulable\r\nPara 50gr maximo', 20, 20000),
(5, 'Filtro de cafe', '.././img/filtrocafe.jpeg', 'De papel x20 unidades', 25, 8000),
(20, 'Cafe en grano', '.././img/bolsacafe.jpeg ', 'Originado en brasil, con notas a cacao y nueces', 30, 15000),
(22, 'Chemex', '.././img/chemex.jpeg ', 'Vidrio templado con capacidad de 250ml', 10, 40000),
(23, 'Distribuidor', '.././img/distribuidor.png', 'Acero inoxidable, ideal maquina espresso ', 5, 25000),
(24, 'Tamper', '.././img/tamper.jpeg ', 'Acero inoxidable y mango de madera, ideal maquina espresso', 10, 18000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
