-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2015 a las 05:54:41
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cdmype_db_ai`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE IF NOT EXISTS `ciclo` (
`id_ciclo` int(10) NOT NULL,
  `nombre_del_ciclo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobro`
--

CREATE TABLE IF NOT EXISTS `cobro` (
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE IF NOT EXISTS `compania` (
`id_compania` int(10) NOT NULL,
  `nombre_compania` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota`
--

CREATE TABLE IF NOT EXISTS `cuota` (
`id_cuota` int(10) NOT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `id_ciclo` int(10) DEFAULT NULL,
  `numero_cuota` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE IF NOT EXISTS `dia` (
`id_dia` int(10) NOT NULL,
  `nombre_del_dia` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
`id_horario` int(10) NOT NULL,
  `id_ciclo` int(10) DEFAULT NULL,
  `id_sub_nivel` int(10) DEFAULT NULL,
  `id_dia` int(10) DEFAULT NULL,
  `inicio_clase` varchar(10) DEFAULT NULL,
  `fin_clase` varchar(10) DEFAULT NULL,
  `inicio_fin_clase` varchar(15) DEFAULT NULL,
  `id_dia2` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE IF NOT EXISTS `inscripcion` (
`id_inscripcion` int(10) NOT NULL,
  `id_cliente` int(10) DEFAULT NULL,
  `id_horario` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
`id_nivel` int(10) NOT NULL,
  `nombre_del_nivel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE IF NOT EXISTS `representante` (
  `id_cliente` int(10) DEFAULT NULL,
  `nombre_repre` varchar(100) DEFAULT NULL,
  `parentesco` varchar(75) DEFAULT NULL,
  `lugar_trabajo` varchar(250) NOT NULL,
  `tel_casa_repre` varchar(10) DEFAULT NULL,
  `tel_trabajo_repre` varchar(10) DEFAULT NULL,
  `celular_repre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_nivel`
--

CREATE TABLE IF NOT EXISTS `sub_nivel` (
`id_sub_nivel` int(10) NOT NULL,
  `id_nivel` int(10) DEFAULT NULL,
  `nombre_del_sub_nivel` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_factura`
--

CREATE TABLE IF NOT EXISTS `tipo_factura` (
`id_factura` int(10) NOT NULL,
  `nombre_factura` varchar(50) DEFAULT NULL,
  `abreviacion` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE IF NOT EXISTS `trabajo` (
  `id_cliente` int(10) DEFAULT NULL,
  `lugar_de_trabajo` varchar(100) DEFAULT NULL,
  `direccion_trabajo` varchar(255) DEFAULT NULL,
  `cargo_trabajo` varchar(100) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tipo` enum('admin','user','docente') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
 ADD PRIMARY KEY (`id_cliente`), ADD KEY `id_compania` (`id_compania`);

--
-- Indices de la tabla `cobro`
--
ALTER TABLE `cobro`
 ADD PRIMARY KEY (`id_cobro`), ADD KEY `cod_del_cliente` (` id_cliente`), ADD KEY `id_factura` (`id_factura`), ADD KEY `id_horario` (`id_horario`), ADD KEY `id_cuota` (`id_cuota`);

--
-- Indices de la tabla `compania`
--
ALTER TABLE `compania`
 ADD PRIMARY KEY (`id_compania`);

--
-- Indices de la tabla `cuota`
--
ALTER TABLE `cuota`
 ADD PRIMARY KEY (`id_cuota`), ADD KEY `id_ciclo` (`id_ciclo`);

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
 ADD PRIMARY KEY (`id_dia`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
 ADD PRIMARY KEY (`id_horario`), ADD KEY `id_ciclo` (`id_ciclo`), ADD KEY `id_sub_nivel` (`id_sub_nivel`), ADD KEY `id_dia` (`id_dia`), ADD KEY `id_dia2` (`id_dia2`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
 ADD PRIMARY KEY (`id_inscripcion`), ADD KEY `cod_del_cliente` (`id_cliente`), ADD KEY `id_horario` (`id_horario`);

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
 ADD PRIMARY KEY (`id_sub_nivel`), ADD KEY `id_nivel` (`id_nivel`);

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
MODIFY `id_ciclo` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cobro`
--
ALTER TABLE `cobro`
MODIFY `id_cobro` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `compania`
--
ALTER TABLE `compania`
MODIFY `id_compania` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cuota`
--
ALTER TABLE `cuota`
MODIFY `id_cuota` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dia`
--
ALTER TABLE `dia`
MODIFY `id_dia` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
MODIFY `id_horario` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
MODIFY `id_inscripcion` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
MODIFY `id_nivel` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sub_nivel`
--
ALTER TABLE `sub_nivel`
MODIFY `id_sub_nivel` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_factura`
--
ALTER TABLE `tipo_factura`
MODIFY `id_factura` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
