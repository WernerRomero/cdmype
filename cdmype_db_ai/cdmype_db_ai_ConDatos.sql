-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2020 a las 01:01:54
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cdmype_db_ai`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `id_ciclo` int(10) NOT NULL,
  `nombre_del_ciclo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciclo`
--

INSERT INTO `ciclo` (`id_ciclo`, `nombre_del_ciclo`) VALUES
(1, 'Ciclo I 2015'),
(2, 'Ciclo II 2015'),
(3, 'Ciclo I 2016'),
(4, 'Ciclo II 2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
  `cod_del_cliente` varchar(9) NOT NULL,
  `fecha_reg` date NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellido_cliente` varchar(50) NOT NULL,
  `direccion_cliente` varchar(150) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `tel_clicente` varchar(10) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `id_compania` int(10) NOT NULL,
  `fecha_nacimiento_cliente` date NOT NULL,
  `email_cliente` varchar(150) NOT NULL,
  `trabajo` enum('si','no') NOT NULL,
  `instituto_procede` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `cod_del_cliente`, `fecha_reg`, `nombre_cliente`, `apellido_cliente`, `direccion_cliente`, `municipio`, `tel_clicente`, `celular`, `id_compania`, `fecha_nacimiento_cliente`, `email_cliente`, `trabajo`, `instituto_procede`) VALUES
(1, 'ai-0115', '2015-06-04', 'Juan', 'Perez', 'Usulután', 'Usulután', '2600-0000', '7600-0000', 2, '2000-06-05', 'juanperez@email.com', 'si', 'INU'),
(2, 'ai-0215', '2015-06-04', 'Maria', 'José', 'Usulután', 'Usulután', '', '', 1, '2000-06-04', 'mariajose@email.com', 'no', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobro`
--

CREATE TABLE `cobro` (
  `id_cobro` int(10) NOT NULL,
  ` id_cliente` int(10) DEFAULT NULL,
  `cod_cliente` varchar(10) NOT NULL,
  `cod_factura` varchar(7) DEFAULT NULL,
  `id_factura` int(10) DEFAULT NULL,
  `id_horario` int(10) DEFAULT NULL,
  `cantidad_num` varchar(7) DEFAULT NULL,
  `cantidad_text` varchar(255) DEFAULT NULL,
  `en_concepto_de` varchar(255) DEFAULT NULL,
  `fecha_cobro` date DEFAULT NULL,
  `id_cuota` int(10) DEFAULT NULL,
  `recibi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cobro`
--

INSERT INTO `cobro` (`id_cobro`, ` id_cliente`, `cod_cliente`, `cod_factura`, `id_factura`, `id_horario`, `cantidad_num`, `cantidad_text`, `en_concepto_de`, `fecha_cobro`, `id_cuota`, `recibi`) VALUES
(1, 1, 'ai-0115', 'MA-1', 1, 1, '$50', ' Cincuenta Dolares', 'Matricula', '2015-01-09', 1, 'Juan Perez'),
(2, 1, 'ai-0115', 'ME-2', 2, 1, '$25', ' Veinticinco Dolares', 'Mensualidad', '2015-01-02', 1, 'Juan Perez'),
(3, 2, 'ai-0215', 'MA-3', 1, 1, '$50', ' Cincuenta Dolares', 'Matricula', '2016-01-01', 1, 'Maria José'),
(4, 2, 'ai-0215', 'ME-4', 2, 1, '$25', ' Veinticinco Dolares', 'Mensualidad', '2016-02-01', 1, 'Maria José');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE `compania` (
  `id_compania` int(10) NOT NULL,
  `nombre_compania` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compania`
--

INSERT INTO `compania` (`id_compania`, `nombre_compania`) VALUES
(1, 'No tiene'),
(2, 'Tigo'),
(3, 'Movistar'),
(4, 'Claro'),
(5, 'Digicel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota`
--

CREATE TABLE `cuota` (
  `id_cuota` int(10) NOT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `id_ciclo` int(10) DEFAULT NULL,
  `numero_cuota` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuota`
--

INSERT INTO `cuota` (`id_cuota`, `fecha`, `id_ciclo`, `numero_cuota`) VALUES
(1, '2015-02-01', 1, 'Cuota N°1'),
(2, '2015-08-01', 2, 'Cuota N°2'),
(3, '2016-02-01', 3, 'Cuota N°1'),
(4, '2016-08-01', 4, 'Cuota N°2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE `dia` (
  `id_dia` int(10) NOT NULL,
  `nombre_del_dia` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dia`
--

INSERT INTO `dia` (`id_dia`, `nombre_del_dia`) VALUES
(1, 'Domingo'),
(2, 'Lunes'),
(3, 'Martes'),
(4, 'Miercoles'),
(5, 'Jueves'),
(6, 'Viernes'),
(7, 'Sabado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(10) NOT NULL,
  `id_ciclo` int(10) DEFAULT NULL,
  `id_sub_nivel` int(10) DEFAULT NULL,
  `id_dia` int(10) DEFAULT NULL,
  `inicio_clase` varchar(10) DEFAULT NULL,
  `fin_clase` varchar(10) DEFAULT NULL,
  `inicio_fin_clase` varchar(15) DEFAULT NULL,
  `id_dia2` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `id_ciclo`, `id_sub_nivel`, `id_dia`, `inicio_clase`, `fin_clase`, `inicio_fin_clase`, `id_dia2`) VALUES
(1, 1, 1, 2, '07:00', '07:30', '07:00 - 07:30', 4),
(2, 1, 2, 3, '07:00', '07:30', '07:00 - 07:30', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_inscripcion` int(10) NOT NULL,
  `id_cliente` int(10) DEFAULT NULL,
  `id_horario` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id_inscripcion`, `id_cliente`, `id_horario`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `id_nivel` int(10) NOT NULL,
  `nombre_del_nivel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nombre_del_nivel`) VALUES
(1, 'Nivel A1'),
(2, 'Nivel A2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `id_cliente` int(10) DEFAULT NULL,
  `nombre_repre` varchar(100) DEFAULT NULL,
  `parentesco` varchar(75) DEFAULT NULL,
  `lugar_trabajo` varchar(250) NOT NULL,
  `tel_casa_repre` varchar(10) DEFAULT NULL,
  `tel_trabajo_repre` varchar(10) DEFAULT NULL,
  `celular_repre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `representante`
--

INSERT INTO `representante` (`id_cliente`, `nombre_repre`, `parentesco`, `lugar_trabajo`, `tel_casa_repre`, `tel_trabajo_repre`, `celular_repre`) VALUES
(2, 'José Maria', 'Padre', 'Otro', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_nivel`
--

CREATE TABLE `sub_nivel` (
  `id_sub_nivel` int(10) NOT NULL,
  `id_nivel` int(10) DEFAULT NULL,
  `nombre_del_sub_nivel` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sub_nivel`
--

INSERT INTO `sub_nivel` (`id_sub_nivel`, `id_nivel`, `nombre_del_sub_nivel`) VALUES
(1, 1, 'L1'),
(2, 1, 'L2'),
(3, 2, 'L3'),
(4, 2, 'L4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_factura`
--

CREATE TABLE `tipo_factura` (
  `id_factura` int(10) NOT NULL,
  `nombre_factura` varchar(50) DEFAULT NULL,
  `abreviacion` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_factura`
--

INSERT INTO `tipo_factura` (`id_factura`, `nombre_factura`, `abreviacion`) VALUES
(1, 'Matricula', 'MA'),
(2, 'Mensualidad', 'ME'),
(3, 'Libros', 'LI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `id_cliente` int(10) DEFAULT NULL,
  `lugar_de_trabajo` varchar(100) DEFAULT NULL,
  `direccion_trabajo` varchar(255) DEFAULT NULL,
  `cargo_trabajo` varchar(100) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`id_cliente`, `lugar_de_trabajo`, `direccion_trabajo`, `cargo_trabajo`, `telefono`) VALUES
(1, 'INU', 'Usulután', 'Chalet', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tipo` enum('admin','user','docente') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `tipo`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin'),
(2, 'usuario', 'administrador', 'admin', 'administrador', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  ADD PRIMARY KEY (`id_ciclo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_compania` (`id_compania`);

--
-- Indices de la tabla `cobro`
--
ALTER TABLE `cobro`
  ADD PRIMARY KEY (`id_cobro`),
  ADD KEY `cod_del_cliente` (` id_cliente`),
  ADD KEY `id_factura` (`id_factura`),
  ADD KEY `id_horario` (`id_horario`),
  ADD KEY `id_cuota` (`id_cuota`);

--
-- Indices de la tabla `compania`
--
ALTER TABLE `compania`
  ADD PRIMARY KEY (`id_compania`);

--
-- Indices de la tabla `cuota`
--
ALTER TABLE `cuota`
  ADD PRIMARY KEY (`id_cuota`),
  ADD KEY `id_ciclo` (`id_ciclo`);

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_dia`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `id_ciclo` (`id_ciclo`),
  ADD KEY `id_sub_nivel` (`id_sub_nivel`),
  ADD KEY `id_dia` (`id_dia`),
  ADD KEY `id_dia2` (`id_dia2`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `cod_del_cliente` (`id_cliente`),
  ADD KEY `id_horario` (`id_horario`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD KEY `cod_del_cliente` (`id_cliente`);

--
-- Indices de la tabla `sub_nivel`
--
ALTER TABLE `sub_nivel`
  ADD PRIMARY KEY (`id_sub_nivel`),
  ADD KEY `id_nivel` (`id_nivel`);

--
-- Indices de la tabla `tipo_factura`
--
ALTER TABLE `tipo_factura`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD KEY `cod_del_cliente` (`id_cliente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  MODIFY `id_ciclo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cobro`
--
ALTER TABLE `cobro`
  MODIFY `id_cobro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `compania`
--
ALTER TABLE `compania`
  MODIFY `id_compania` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cuota`
--
ALTER TABLE `cuota`
  MODIFY `id_cuota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `dia`
--
ALTER TABLE `dia`
  MODIFY `id_dia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id_inscripcion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sub_nivel`
--
ALTER TABLE `sub_nivel`
  MODIFY `id_sub_nivel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_factura`
--
ALTER TABLE `tipo_factura`
  MODIFY `id_factura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_compania`) REFERENCES `compania` (`id_compania`);

--
-- Filtros para la tabla `cobro`
--
ALTER TABLE `cobro`
  ADD CONSTRAINT `cobro_ibfk_10` FOREIGN KEY (`id_cuota`) REFERENCES `cuota` (`id_cuota`),
  ADD CONSTRAINT `cobro_ibfk_6` FOREIGN KEY (`id_factura`) REFERENCES `tipo_factura` (`id_factura`),
  ADD CONSTRAINT `cobro_ibfk_7` FOREIGN KEY (`id_horario`) REFERENCES `horario` (`id_horario`),
  ADD CONSTRAINT `cobro_ibfk_9` FOREIGN KEY (` id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `cuota`
--
ALTER TABLE `cuota`
  ADD CONSTRAINT `cuota_ibfk_1` FOREIGN KEY (`id_ciclo`) REFERENCES `ciclo` (`id_ciclo`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_6` FOREIGN KEY (`id_ciclo`) REFERENCES `ciclo` (`id_ciclo`),
  ADD CONSTRAINT `horario_ibfk_7` FOREIGN KEY (`id_dia`) REFERENCES `dia` (`id_dia`),
  ADD CONSTRAINT `horario_ibfk_8` FOREIGN KEY (`id_dia2`) REFERENCES `dia` (`id_dia`),
  ADD CONSTRAINT `horario_ibfk_9` FOREIGN KEY (`id_sub_nivel`) REFERENCES `sub_nivel` (`id_sub_nivel`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_4` FOREIGN KEY (`id_horario`) REFERENCES `horario` (`id_horario`),
  ADD CONSTRAINT `inscripcion_ibfk_5` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `representante`
--
ALTER TABLE `representante`
  ADD CONSTRAINT `representante_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `sub_nivel`
--
ALTER TABLE `sub_nivel`
  ADD CONSTRAINT `sub_nivel_ibfk_1` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id_nivel`);

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `trabajo_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
