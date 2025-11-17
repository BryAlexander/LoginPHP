-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2025 a las 01:42:51
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
-- Base de datos: `loginphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuarios`
--

CREATE TABLE `registro_usuarios` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro_usuarios`
--

INSERT INTO `registro_usuarios` (`id`, `nombre`, `apellido`, `correo`, `contraseña`) VALUES
('1234567890', 'alexander', 'Cerda', 'alcerda@utpl.edu', '$2y$10$UGpmH3RW3Au5VR1Gr8nWg.19wCO.BJdtWbMltNu4mOqxJSB.Gr0FS'),
('12457891', 'Maria', 'Grefa', 'grefa@hotmail.com', '$2y$10$UbE3sdlpYT3akV.gKQl51e0Et2F8Z2lSAlTe4dysEEs.KkAOAJE7O'),
('1246789452', 'Jose', 'Cruz', 'cruz@hotmail.com', '$2y$10$TKAXRRgQ374VDvdZ3TrrQOFuYMzrIfmd23BOuOqptpAdE1RBSh1EK'),
('1725880460', 'Bryan', 'Cerda', 'bacerda@utpl.edu.ec', '$2y$10$hH7ekgwCjFat437.eU0hAexBFKO/eKlUjgAaWFBkhoizDvbTe/7sS'),
('457985421', 'Abigail', 'Estrella', 'abi@hotmail.com', '$2y$10$N/bmKm4zMhV6BLfPF/7i/OiEchFUsiBAOSD7YCI7.qdy854N.1epy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
