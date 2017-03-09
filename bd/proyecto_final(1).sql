-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2017 at 07:50 
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto_final`
--
CREATE DATABASE IF NOT EXISTS `proyecto_final` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `proyecto_final`;

-- --------------------------------------------------------

--
-- Table structure for table `claves`
--

CREATE TABLE `claves` (
  `id_clave` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `fecha_insercion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ref_tipo_clave` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `grupo_curso` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_clave`
--

CREATE TABLE `tipo_clave` (
  `id_tipo_clave` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_curso` varchar(255) NOT NULL,
  `numero_lista` varchar(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `primer_apellido` varchar(255) NOT NULL,
  `segundo_apellido` varchar(255) NOT NULL,
  `cial` varchar(255) DEFAULT NULL,
  `expediente` varchar(255) DEFAULT NULL,
  `nif_nie` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `telefono_sms` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `url_foto` varchar(1000) NOT NULL,
  `tutor` tinyint(1) NOT NULL,
  `ref_tipo_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_clave`
--

CREATE TABLE `usuarios_clave` (
  `ref_id_clave` int(11) NOT NULL,
  `ref_id_usuario` int(11) NOT NULL,
  `fecha_relacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_relacion` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_curso`
--

CREATE TABLE `usuarios_curso` (
  `id_relacion_curso` int(11) NOT NULL,
  `ref_id_usuario` int(11) NOT NULL,
  `ref_id_curso` int(11) NOT NULL,
  `ano_curso` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `claves`
--
ALTER TABLE `claves`
  ADD PRIMARY KEY (`id_clave`),
  ADD UNIQUE KEY `clave` (`clave`),
  ADD KEY `fk_claves_tipo_clave` (`ref_tipo_clave`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `tipo_clave`
--
ALTER TABLE `tipo_clave`
  ADD PRIMARY KEY (`id_tipo_clave`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuarios_tipo_usuario` (`ref_tipo_usuario`);

--
-- Indexes for table `usuarios_clave`
--
ALTER TABLE `usuarios_clave`
  ADD PRIMARY KEY (`id_relacion`),
  ADD KEY `fk_relacion_usuarios` (`ref_id_usuario`),
  ADD KEY `fk_relacion_claves` (`ref_id_clave`);

--
-- Indexes for table `usuarios_curso`
--
ALTER TABLE `usuarios_curso`
  ADD PRIMARY KEY (`id_relacion_curso`),
  ADD KEY `fk_usuarios_cursos_curso` (`ref_id_curso`),
  ADD KEY `fk_usuarios_cursos_usuarios` (`ref_id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `claves`
--
ALTER TABLE `claves`
  MODIFY `id_clave` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_clave`
--
ALTER TABLE `tipo_clave`
  MODIFY `id_tipo_clave` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios_clave`
--
ALTER TABLE `usuarios_clave`
  MODIFY `id_relacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios_curso`
--
ALTER TABLE `usuarios_curso`
  MODIFY `id_relacion_curso` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
