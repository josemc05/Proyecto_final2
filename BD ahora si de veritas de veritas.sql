-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 10-12-2021 a las 06:34:41
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_transporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_reserva`
--

CREATE TABLE `estado_reserva` (
  `estado_id_reserva` int(11) NOT NULL,
  `estado_reserva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_viajes`
--

CREATE TABLE `historial_viajes` (
  `hist_id_reserva` int(11) NOT NULL,
  `hist_pasajeros` int(11) NOT NULL,
  `hist_destino` varchar(100) NOT NULL,
  `hist_fecha_inicio` datetime NOT NULL,
  `hist_fecha_fin` datetime NOT NULL,
  `hist_descripcion` varchar(1000) NOT NULL,
  `hist_re_cedula_user` varchar(14) NOT NULL,
  `hist_re_placa` varchar(6) NOT NULL,
  `hist_re_cedula_trans` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_viajes`
--

INSERT INTO `historial_viajes` (`hist_id_reserva`, `hist_pasajeros`, `hist_destino`, `hist_fecha_inicio`, `hist_fecha_fin`, `hist_descripcion`, `hist_re_cedula_user`, `hist_re_placa`, `hist_re_cedula_trans`) VALUES
(1, 5, 'calidonia', '2021-12-02 17:01:00', '2021-12-02 20:00:00', 'para cualquier cosa', '8-941-2096', 'AS2021', '8-941-2099'),
(2, 2, 'cali-donia', '2021-12-10 06:33:01', '2021-12-11 04:33:01', 'lero lero', '8-941-2096', 'AS2321', 'E-8-101016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `pasajeros` int(11) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `re_cedula_user` varchar(14) NOT NULL,
  `re_placa` varchar(6) NOT NULL,
  `re_cedula_trans` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `pasajeros`, `destino`, `fecha_inicio`, `fecha_fin`, `descripcion`, `re_cedula_user`, `re_placa`, `re_cedula_trans`) VALUES
(8, 5, 'calidonia', '2021-12-01 20:44:21', '2021-12-01 20:44:21', 'calidonia', '8-941-2096', 'AS2021', '1-111-1111'),
(9, 5, 'calidonia', '2021-12-01 20:44:21', '2021-12-01 22:44:21', 'calidonia', '8-941-2096', 'AS2021', '1-111-1111'),
(15, 5, 'calidonia', '2021-12-02 17:01:00', '2021-12-02 22:00:00', 'para cualquier cosa', '8-941-2096', 'AS2021', '8-941-2099'),
(16, 5, 'calidonia', '2021-12-02 17:01:00', '2021-12-02 22:00:00', 'para cualquier cosa', '8-941-2096', 'AS2021', '8-941-2099'),
(17, 5, 'calidonia', '2021-12-02 17:01:00', '2021-12-02 22:00:00', 'para cualquier cosa', '8-941-2096', 'AS2021', '8-941-2099');

--
-- Disparadores `reservas`
--
DELIMITER $$
CREATE TRIGGER `insertar_estado` AFTER INSERT ON `reservas` FOR EACH ROW BEGIN
    INSERT INTO estado_reserva (estado_id_reserva, estado_reserva) VALUES (new.id_reserva, 1); 
 END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pasar_historial` BEFORE DELETE ON `reservas` FOR EACH ROW BEGIN
    INSERT INTO historial_viajes (hist_pasajeros, hist_destino, hist_fecha_inicio, hist_fecha_fin, hist_descripcion, hist_re_cedula_user, hist_re_placa, hist_re_cedula_trans) VALUES (OLD.pasajeros, old.destino, old.fecha_inicio, old.fecha_fin, old.descripcion, old.re_cedula_user, old.re_placa, old.re_cedula_trans); 
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula_user` varchar(14) NOT NULL,
  `nombre_user` varchar(30) NOT NULL,
  `apellido_user` varchar(30) NOT NULL,
  `correo_user` varchar(50) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `tipo_user` int(11) NOT NULL,
  `foto_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula_user`, `nombre_user`, `apellido_user`, `correo_user`, `password_user`, `tipo_user`, `foto_user`) VALUES
('1-111-1111', 'transpor', 'tista', 'transportista@utp.ac.pa', 'trans', 2, 'user.png'),
('8-941-2096', 'Jose', 'Cuevas', 'jose.cuevas@utp.ac.pa', '123456', 3, 'user.png'),
('8-941-2099', 'Jose', 'Cuevas', 'chuevissexpai@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 'user.png'),
('8-941-2222', 'admin', 'admin', 'admin@utp.ac.pa', 'admin', 1, 'user.png'),
('E-8-101016', 'Cho', 'fer', 'cho.fer@utp.ac.pa', 'a0a080f42e6f13b3a2df133f073095dd', 2, 'user.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `placa` varchar(6) NOT NULL,
  `tipo_vehi` varchar(10) NOT NULL,
  `estado_vehi` int(11) NOT NULL,
  `km_actuales` int(11) NOT NULL,
  `km_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`placa`, `tipo_vehi`, `estado_vehi`, `km_actuales`, `km_mantenimiento`) VALUES
('AS2021', 'SUV', 1, 1000, 1000),
('AS2121', 'sedan', 1, 1000, 1000),
('AS2221', 'Pick-up', 1, 1000, 1000),
('AS2321', 'sedan', 2, 2000, 1000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado_reserva`
--
ALTER TABLE `estado_reserva`
  ADD PRIMARY KEY (`estado_id_reserva`),
  ADD KEY `estado_id_reserva` (`estado_id_reserva`);

--
-- Indices de la tabla `historial_viajes`
--
ALTER TABLE `historial_viajes`
  ADD PRIMARY KEY (`hist_id_reserva`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `re_cedula_user` (`re_cedula_user`),
  ADD KEY `re_placa` (`re_placa`),
  ADD KEY `re_cedula_trans` (`re_cedula_trans`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula_user`),
  ADD UNIQUE KEY `correo_user` (`correo_user`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial_viajes`
--
ALTER TABLE `historial_viajes`
  MODIFY `hist_id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estado_reserva`
--
ALTER TABLE `estado_reserva`
  ADD CONSTRAINT `estado_reserva_ibfk_1` FOREIGN KEY (`estado_id_reserva`) REFERENCES `reservas` (`id_reserva`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`re_cedula_user`) REFERENCES `usuarios` (`cedula_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`re_placa`) REFERENCES `vehiculos` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservas_ibfk_3` FOREIGN KEY (`re_cedula_trans`) REFERENCES `usuarios` (`cedula_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
