-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 27-06-2023 a las 03:32:59
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pdancedinasty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratacion`
--

CREATE TABLE `contratacion` (
  `Nombre(s)` text NOT NULL,
  `ApellidoP` text NOT NULL,
  `ApellidoM` text NOT NULL,
  `Curp` varchar(18) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Calle` varchar(100) NOT NULL,
  `CodigoP` varchar(10) NOT NULL,
  `NoE` varchar(20) NOT NULL,
  `NoI` varchar(20) NOT NULL,
  `EntidadF` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `Salon` varchar(20) NOT NULL,
  `FechaE` date NOT NULL,
  `DiaE` varchar(15) NOT NULL,
  `Hora` varchar(50) NOT NULL,
  `NoPer` int(200) NOT NULL,
  `TipoE` varchar(30) NOT NULL,
  `OtroE` varchar(50) NOT NULL,
  `Menu` varchar(30) NOT NULL,
  `Entrada` varchar(50) NOT NULL,
  `Fuerte` varchar(50) NOT NULL,
  `Postre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contratacion`
--

INSERT INTO `contratacion` (`Nombre(s)`, `ApellidoP`, `ApellidoM`, `Curp`, `Email`, `Telefono`, `Calle`, `CodigoP`, `NoE`, `NoI`, `EntidadF`, `Municipio`, `Colonia`, `Salon`, `FechaE`, `DiaE`, `Hora`, `NoPer`, `TipoE`, `OtroE`, `Menu`, `Entrada`, `Fuerte`, `Postre`) VALUES
('ALEJANDRO YAEL', 'DOMINGUEZ', 'PAEZ', 'DOPA020113HDMFZLA7', 'alejandro@gmail.com', 2147483647, 'Avenida San Lorenzo', '09830', '81', '504', 'Distrito Federal', 'Iztapalapa', 'El Manto ', 'Salon A', '2023-12-15', 'Viernes', '', 175, 'Otro', 'Despedida', 'Personalizable', 'BocadillosMole', 'Pechugas', 'Duraznos'),
('ALEJANDRO YAEL', 'DOMINGUEZ', 'PAEZ', 'DOPA020113HDFMZLA7', 'dominguez.paez.alejandro@gmail.com', 2147483647, 'Avenida', '09830', '81', '504', 'Baja California', 'Iztapalapa', 'EL', 'Jardín de eventos', '2023-12-18', 'Viernes[12:00-1', '', 175, 'PrimeraComunion', '', 'Economico', '', '', ''),
('ALEJANDRO YAEL', 'DOMINGUEZ', 'PAEZ', 'DOPA020113HDFMZLA7', 'dominguez.paez.alejandro@gmail.com', 2147483647, 'Avenida', '09830', '81', '504', 'Baja California', 'Iztapalapa', 'EL', 'Jardín de eventos', '2023-12-18', 'Viernes[12:00-1', '', 175, 'PrimeraComunion', '', 'Economico', '', '', ''),
('ALEJANDRO YAEL', 'DOMINGUEZ', 'PAEZ', 'DOPA020113HDFMZLA7', 'paez.alejandro@gmail.com', 2147483647, 'AV', '09830', '81', '504', 'Distrito Federal', 'Izta', 'El Manto', 'Salon A', '2023-12-20', 'Viernes', '19:00-00:00', 175, 'Bautizo', '', 'Economico', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
