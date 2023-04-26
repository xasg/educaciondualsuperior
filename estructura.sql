-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2023 a las 21:26:53
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `educaciondual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_entidad`
--

CREATE TABLE `cat_entidad` (
  `id_entidad` int(11) NOT NULL,
  `id_cat_entidad` varchar(2) DEFAULT NULL,
  `nombre_entidad` varchar(45) DEFAULT NULL,
  `dt_nombre_corto` varchar(45) DEFAULT NULL,
  `dt_region` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_ies`
--

CREATE TABLE `cat_ies` (
  `id_cat_ies` int(11) NOT NULL,
  `id_ies` varchar(6) NOT NULL,
  `dt_nombre_ies` varchar(300) NOT NULL,
  `dt_estatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_nivel_estudios`
--

CREATE TABLE `cat_nivel_estudios` (
  `id_nivel_estudios` int(11) NOT NULL,
  `id_cat_nivel_estudios` varchar(2) NOT NULL,
  `dt_nombre_nivel_estudios` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_programa_educativo`
--

CREATE TABLE `cat_programa_educativo` (
  `id_programa_educativo` int(6) NOT NULL,
  `id_cat_programa_educativo` varchar(6) NOT NULL,
  `dt_nombre_programa_educativo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_subsistema`
--

CREATE TABLE `cat_subsistema` (
  `id_subsistema` int(11) NOT NULL,
  `id_cat_subsistema` varchar(2) NOT NULL,
  `dt_nombre_subsistema` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_ies`
--

CREATE TABLE `info_ies` (
  `id_info_ies` int(11) NOT NULL,
  `id_ies` varchar(6) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `dt_email` varchar(100) NOT NULL,
  `dt_telefono` varchar(10) NOT NULL,
  `dt_extencion` varchar(5) NOT NULL,
  `dt_direccion` varchar(200) NOT NULL,
  `dt_localidad` varchar(200) NOT NULL,
  `dt_municipio` varchar(200) NOT NULL,
  `dt_entidad` varchar(50) NOT NULL,
  `dt_cp` varchar(6) NOT NULL,
  `dt_latitud` varchar(100) NOT NULL,
  `dt_longitud` varchar(100) NOT NULL,
  `dt_ano_dual` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_educativo`
--

CREATE TABLE `programa_educativo` (
  `id_programa` int(11) NOT NULL,
  `id_ies` varchar(6) NOT NULL,
  `dt_programa` varchar(200) NOT NULL,
  `dt_otro_programa` varchar(200) NOT NULL,
  `dt_inicio` varchar(20) NOT NULL,
  `dt_num_periodo` int(11) NOT NULL,
  `dt_unidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_ies_programa`
--

CREATE TABLE `rel_ies_programa` (
  `id_ies_programa` int(6) NOT NULL,
  `id_cat_entidad` varchar(2) NOT NULL,
  `id_cat_subsistema` varchar(2) NOT NULL,
  `id_ies` varchar(6) NOT NULL,
  `id_cat_nivel_estudios` varchar(2) NOT NULL,
  `id_cat_programa_educativo` varchar(6) NOT NULL,
  `dt_matricula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `id_responsable` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `dt_entidad` varchar(50) NOT NULL,
  `id_ies` varchar(6) NOT NULL,
  `dt_nom_responsable` varchar(50) NOT NULL,
  `dt_cargo` varchar(50) NOT NULL,
  `dt_telefono` varchar(10) NOT NULL,
  `dt_celular` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_educativa`
--

CREATE TABLE `unidad_educativa` (
  `id_unidad_educativa` int(11) NOT NULL,
  `id_programa_educativo` varchar(4) NOT NULL,
  `dt_unidad` varchar(250) NOT NULL,
  `dt_convenio` varchar(5) NOT NULL,
  `dt_estudiante_fem` varchar(5) NOT NULL,
  `dt_estudiante_mas` int(11) NOT NULL,
  `dt_docente_fem` int(5) NOT NULL,
  `dt_docente_mas` int(5) NOT NULL,
  `dt_egresados` varchar(5) NOT NULL,
  `dt_egresados_fem` int(5) NOT NULL,
  `dt_egresados_mas` int(5) NOT NULL,
  `dt_estudiante_cursan_f` int(5) NOT NULL,
  `dt_estudiante_cursan_m` int(5) NOT NULL,
  `dt_beneficios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_ies` varchar(6) NOT NULL,
  `dt_correo` varchar(40) NOT NULL,
  `dt_password` varchar(10) NOT NULL,
  `dt_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_entidad`
--
ALTER TABLE `cat_entidad`
  ADD PRIMARY KEY (`id_entidad`);

--
-- Indices de la tabla `cat_ies`
--
ALTER TABLE `cat_ies`
  ADD UNIQUE KEY `id_cat_ies` (`id_cat_ies`);

--
-- Indices de la tabla `cat_nivel_estudios`
--
ALTER TABLE `cat_nivel_estudios`
  ADD UNIQUE KEY `id_nivel_estudios` (`id_nivel_estudios`);

--
-- Indices de la tabla `cat_programa_educativo`
--
ALTER TABLE `cat_programa_educativo`
  ADD UNIQUE KEY `id_programa_educativo` (`id_programa_educativo`);

--
-- Indices de la tabla `cat_subsistema`
--
ALTER TABLE `cat_subsistema`
  ADD UNIQUE KEY `id_subsistema` (`id_subsistema`);

--
-- Indices de la tabla `info_ies`
--
ALTER TABLE `info_ies`
  ADD PRIMARY KEY (`id_info_ies`);

--
-- Indices de la tabla `programa_educativo`
--
ALTER TABLE `programa_educativo`
  ADD UNIQUE KEY `id_programa` (`id_programa`);

--
-- Indices de la tabla `rel_ies_programa`
--
ALTER TABLE `rel_ies_programa`
  ADD UNIQUE KEY `id_ies_programa` (`id_ies_programa`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id_responsable`);

--
-- Indices de la tabla `unidad_educativa`
--
ALTER TABLE `unidad_educativa`
  ADD PRIMARY KEY (`id_unidad_educativa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_entidad`
--
ALTER TABLE `cat_entidad`
  MODIFY `id_entidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cat_ies`
--
ALTER TABLE `cat_ies`
  MODIFY `id_cat_ies` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cat_nivel_estudios`
--
ALTER TABLE `cat_nivel_estudios`
  MODIFY `id_nivel_estudios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cat_programa_educativo`
--
ALTER TABLE `cat_programa_educativo`
  MODIFY `id_programa_educativo` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cat_subsistema`
--
ALTER TABLE `cat_subsistema`
  MODIFY `id_subsistema` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_ies`
--
ALTER TABLE `info_ies`
  MODIFY `id_info_ies` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programa_educativo`
--
ALTER TABLE `programa_educativo`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rel_ies_programa`
--
ALTER TABLE `rel_ies_programa`
  MODIFY `id_ies_programa` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id_responsable` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidad_educativa`
--
ALTER TABLE `unidad_educativa`
  MODIFY `id_unidad_educativa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
