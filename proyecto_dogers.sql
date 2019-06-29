-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-06-2019 a las 17:12:12
-- Versión del servidor: 5.7.26-0ubuntu0.18.04.1
-- Versión de PHP: 7.3.5-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_dogers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_de_usuario`
--

CREATE TABLE `registro_de_usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `country` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_de_usuario`
--

INSERT INTO `registro_de_usuario` (`id`, `name`, `userName`, `avatar`, `country`, `email`, `password`, `repassword`) VALUES
(1, 'maria descha', 'made', 'img_5d0efece346a5.jpg', 'TW', 'descha83@hotmail.com', '$2y$10$tFIpCJHAnMpB4EDFatItNO2ZiGGj.Decrqoy2YimaQNvA/quFvS5u', 'DHmaria'),
(2, 'mariucha', 'mariu', 'img_5d0f0f115c157.jpg', 'AF', 'desc@hotmail.com', '$2y$10$qSjpGAxEtcUn64Ft5RdzauaGlw2B35ajX3Uh8WYp0QygrrluqNzj2', 'DHmalditabd'),
(3, 'rococo', 'coco', 'img_5d0f11b672dce.jpg', 'AF', 'coco@gmail.com', '$2y$10$IFPSNmpMA494cKCdhucZ3.4EPDH28wXW.e7vSOCp0dOptASMQhA6m', 'DHcoco'),
(4, 'maru', 'pepe', 'img_5d10322e64c1b.jpg', 'AF', 'pepe@hotmail.com', '$2y$10$dwb3may19CNTatk6i7kXCe/2dFPrsNbxCpyoqKA/jZsfaomq4Kx4a', 'DHpepe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_de_usuario`
--
ALTER TABLE `registro_de_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name_unique` (`userName`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_de_usuario`
--
ALTER TABLE `registro_de_usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
