-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2017 at 04:59 
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

DROP TABLE IF EXISTS `claves`;
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

DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `grupo_curso` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_clave`
--

DROP TABLE IF EXISTS `tipo_clave`;
CREATE TABLE `tipo_clave` (
  `id_tipo_clave` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
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

DROP TABLE IF EXISTS `usuarios_clave`;
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

DROP TABLE IF EXISTS `usuarios_curso`;
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
  ADD UNIQUE KEY `clave` (`clave`);

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
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `usuarios_clave`
--
ALTER TABLE `usuarios_clave`
  ADD PRIMARY KEY (`id_relacion`);

--
-- Indexes for table `usuarios_curso`
--
ALTER TABLE `usuarios_curso`
  ADD PRIMARY KEY (`id_relacion_curso`);

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
ALTER TABLE `claves`
  ADD CONSTRAINT `fk_claves_tipo_clave`
  FOREIGN KEY (`ref_tipo_clave`)
    REFERENCES `tipo_clave`(`id_tipo_clave`)
    ON DELETE CASCADE
    ON UPDATE CASCADE;

ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_tipo_usuario`
  FOREIGN KEY (`ref_tipo_usuario`)
    REFERENCES `tipo_usuario`(`id_tipo_usuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE;

ALTER TABLE `usuarios_curso`
  ADD CONSTRAINT `fk_usuarios_cursos_curso`
  FOREIGN KEY (`ref_id_curso`)
    REFERENCES `curso`(`id_curso`)
    ON DELETE CASCADE
    ON UPDATE CASCADE;

ALTER TABLE `usuarios_curso`
  ADD CONSTRAINT `fk_usuarios_cursos_usuarios`
  FOREIGN KEY (`ref_id_usuario`)
    REFERENCES `usuarios`(`id_usuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE;

ALTER TABLE `usuarios_clave`
  ADD CONSTRAINT `fk_relacion_usuarios`
  FOREIGN KEY (`ref_id_usuario`)
    REFERENCES `usuarios`(`id_usuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE;


ALTER TABLE `usuarios_clave`
  ADD CONSTRAINT `fk_relacion_claves`
  FOREIGN KEY (`ref_id_clave`)
    REFERENCES `claves`(`id_clave`)
    ON DELETE CASCADE
    ON UPDATE CASCADE;