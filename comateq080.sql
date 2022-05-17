-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 09:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `comateq080`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `Num_id` int(11) NOT NULL,
  `Nombre` varchar(14) NOT NULL,
  `ApellidoP` varchar(14) NOT NULL,
  `ApellidoM` varchar(14) NOT NULL,
  `Email` varchar(16) NOT NULL,
  `Nombre_Universidad` varchar(40) NOT NULL,
  `Posicion_Organizacion` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`Num_id`, `Nombre`, `ApellidoP`, `ApellidoM`, `Email`, `Nombre_Universidad`, `Posicion_Organizacion`) VALUES
(456, 'Mariely', 'Ocasio', 'Rodriguez', 'marielyocasiomor', 'UPRM', 'student'),
(456, 'Mariely', 'Ocasio', 'Rodriguez', 'marielyocasiomor', 'UPRM', 'student'),
(678, 'Mariely', 'Ocasio', 'Rodriguez', 'marielyocasiomor', 'UPRM', 'student'),
(456, 'Mariely', 'Mariely', 'Ocasio', 'marielyocasiomor', 'UPRM', 'student'),
(199, 'Mariely', 'Mariely', 'Ocasio', 'marielyocasiomor', 'UPRM', 'student'),
(23, 'Jose', 'Ramirez', 'Coto', 'jose.ramirez@yah', 'INTER', 'associate'),
(12, 'Keyla', 'Torres', 'Morales', 'keylaaa@outlook.', 'Sagrado Corazon', 'associate'),
(3456, 'Camila', 'Carrero', 'Silva', 'cami123@gmail.co', 'INTER', 'profesor'),
(1234, 'Ryan', 'ortiz', 'sanchez', 'ryan45@yahoo.com', 'UPRM', 'associate');

-- --------------------------------------------------------

--
-- Table structure for table `coordinador`
--

CREATE TABLE `coordinador` (
  `Num_id` int(11) NOT NULL,
  `Nombre` varchar(14) NOT NULL,
  `ApellidoP` varchar(14) NOT NULL,
  `ApellidoM` varchar(14) NOT NULL,
  `Email` varchar(16) NOT NULL,
  `Nombre_Universidad` varchar(40) NOT NULL,
  `Nombre_Equipos` varchar(16) NOT NULL,
  `URL_Web` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinador`
--

INSERT INTO `coordinador` (`Num_id`, `Nombre`, `ApellidoP`, `ApellidoM`, `Email`, `Nombre_Universidad`, `Nombre_Equipos`, `URL_Web`) VALUES
(1234, 'Sergio', 'Ojeda', 'Martinez', 'sergio@yahoo.com', 'INTER', 'inter2022', 'www.comateq.com');

-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `Nombre_Asociado` varchar(15) NOT NULL,
  `Nombre_Estudiantes1` varchar(14) NOT NULL,
  `Nombre_Estudiantes2` varchar(14) NOT NULL,
  `Nombre_Estudiantes3` varchar(14) NOT NULL,
  `Puntuacion` float NOT NULL,
  `Año_participacion` int(4) NOT NULL,
  `Nombre_Universidad` varchar(40) NOT NULL,
  `Nombre_Coordinador` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `Num_id` int(11) NOT NULL,
  `Nombre` varchar(14) NOT NULL,
  `ApellidoP` varchar(14) NOT NULL,
  `ApellidoM` varchar(14) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Grado` int(11) NOT NULL,
  `Nombre_Escuela` varchar(40) NOT NULL,
  `Nombre_Coordinador` varchar(14) NOT NULL,
  `Nombre_Universidad` varchar(40) NOT NULL,
  `Direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`Num_id`, `Nombre`, `ApellidoP`, `ApellidoM`, `Edad`, `Grado`, `Nombre_Escuela`, `Nombre_Coordinador`, `Nombre_Universidad`, `Direccion`) VALUES
(1234, 'Nataly', 'Ojeda', 'Martinez', 15, 8, 'Blanca Malaret', 'Jose', 'UPRM', 'Barrio Machuchal Sabana Grande, PR');

-- --------------------------------------------------------

--
-- Table structure for table `examen`
--

CREATE TABLE `examen` (
  `Nombre_Administrador` varchar(14) NOT NULL,
  `Nombre_Coordinador` varchar(14) NOT NULL,
  `Nombre_Universidad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examen`
--

INSERT INTO `examen` (`Nombre_Administrador`, `Nombre_Coordinador`, `Nombre_Universidad`) VALUES
('Eduardo', 'Jose', 'INTER');

-- --------------------------------------------------------

--
-- Table structure for table `problema`
--

CREATE TABLE `problema` (
  `Nombre_Coordinador` varchar(14) NOT NULL,
  `Nombre_Universidad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problema`
--

INSERT INTO `problema` (`Nombre_Coordinador`, `Nombre_Universidad`) VALUES
('Ramon', 'UPRM');
COMMIT;