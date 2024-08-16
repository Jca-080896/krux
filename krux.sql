-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2022 a las 15:30:54
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `krux`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` tinytext NOT NULL,
  `ape1` tinytext NOT NULL,
  `ape2` tinytext NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `calle` varchar(40) DEFAULT NULL,
  `col_fracc` varchar(40) DEFAULT NULL,
  `num_ext` varchar(5) DEFAULT NULL,
  `codigo_postal` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `ape1`, `ape2`, `email`, `telefono`, `calle`, `col_fracc`, `num_ext`, `codigo_postal`) VALUES
(12, 'Diego', 'Gonzalez', 'Herrera', 'diego@gmail.com', '6778859763', '', '', '', ''),
(13, 'Jose Manuel', 'Reyna', 'Gonzalez', 'ElManuel@gmail.com', '618347298', '', '', '', ''),
(14, 'Fernando', 'Hernandez', 'NuÃ±es', 'Aroyuky@gmail.com', '618235690', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `titulo`, `descripcion`, `telefono`, `email`) VALUES
(1, 'Contacto Krux, organizadores de eventos infantiles.', 'Contactanos, para conocer nuestro paquetes y preciosQueremos escucharte.', '159444', 'krux.kids.dgo@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `id_clientes` int(11) NOT NULL,
  `id_paq` int(11) NOT NULL,
  `hora` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `id_clientes`, `id_paq`, `hora`, `fecha`, `descripcion`) VALUES
(31, 11, 3, '12:12:00', '2022-08-31', 'el evento es en un salon de eventos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `foto`) VALUES
(1, 'WhatsApp Image 2022-08-21 at 4.08.30 PM.jpeg'),
(2, 'WhatsApp Image 2022-08-21 at 4.08.03 PM.jpeg'),
(3, 'WhatsApp Image 2022-08-21 at 4.08.04 PM (2).jpeg'),
(4, 'WhatsApp Image 2022-08-21 at 4.08.27 PM (2).jpeg'),
(5, 'WhatsApp Image 2022-08-21 at 4.08.27 PM (1).jpeg'),
(6, 'WhatsApp Image 2022-08-21 at 4.08.27 PM.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `titulo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `texto1` text CHARACTER SET utf8mb4 NOT NULL,
  `titulo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `texto2` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `titulo1`, `texto1`, `titulo2`, `texto2`) VALUES
(1, 'MÃºltiples Actividades y Ejercicios', 'En Krux nos caracterizamos por ser pioneros e innovadores en el sector de fiestas infantiles por las distintas actividades que ofrecemos.', 'Las mejores fiestonas', 'Celebra en un ambiente cien por ciento familiar, nuestro personal completamente capacitado para llevar cada actividad de forma segura y divertida.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `desc1` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `desc2` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `desc3` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `desc4` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `desc5` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `desc6` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `desc7` varchar(120) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `titulo`, `precio`, `desc1`, `desc2`, `desc3`, `desc4`, `desc5`, `desc6`, `desc7`) VALUES
(1, 'Diamante', '6500', '100 alcancÃ­as surtidas.', '21 premios sorpresa.', '3 Kg de dulce surtido.', '30 bolsas de palomitas', 'Feria Divertida.', 'Servicio 4 hrs.', ''),
(2, 'Esmeralda', '3200', 'Feria Divertida:', 'Cancha de FÃºtbol.', 'Aros.', 'Canicas.', 'Fichas.', 'Tiro al blanco.', 'Servicio 4 hrs.'),
(3, 'Platino', '2500', 'TobogÃ¡n y alberca .', 'Cancha de FÃºtbol.', 'Servicio 4 hrs.', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `passwords`
--

CREATE TABLE `passwords` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL,
  `codigo` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `cliente` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `ap1` varchar(40) NOT NULL,
  `ap2` varchar(40) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `calle2` varchar(50) DEFAULT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`cliente`, `nom`, `ap1`, `ap2`, `email2`, `tel`, `calle2`, `colonia`, `num`, `cp`) VALUES
(6, 'lucho', 'arnoldo', 'srjuana', 'asdfa@jfakjdsf.com', '1234', 'vvvv', 'vvvv', 88888, 999999),
(7, 'asdf', 'fffff', 'ffff', 'ffff@fff.com', '333333', 'aaaaa', 'ccccc', 3333, 6666),
(8, 'juan', 'prez', 'lopez', 'asdf@asdf.com', '12344', 'pera', 'manzanos', 303, 44556),
(9, 'hector', 'ramos', 'perez', 'ramos@gmail.com', '618415324', 'gregorio', 'granja graciela', 118, 34190),
(10, 'Jessica', 'Contreras', 'Aguilar', 'jesi_lavequerita@gmail.com', '5579597903', 'hutztlan', 'Villas del manantial', 146, 34909),
(11, 'Jonathan Samuel', 'Gurrola', 'Antuna', 'jonita@gmail.com', '6773273745', 'roble', 'las arboledas', 258, 33687),
(12, 'Diego', 'Gonzalez', 'Herrera', 'diego@gmail.com', '6778859763', '', '', 0, 0),
(13, 'Jose Manuel', 'Reyna', 'Gonzalez', 'ElManuel@gmail.com', '618347298', '', '', 0, 0),
(14, 'Fernando', 'Hernandez', 'NuÃ±es', 'Aroyuky@gmail.com', '618235690', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `titulo1` text NOT NULL,
  `descripcion1` text NOT NULL,
  `titulo2` text NOT NULL,
  `descripcion2` text NOT NULL,
  `titulo3` text NOT NULL,
  `descripcion3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo1`, `descripcion1`, `titulo2`, `descripcion2`, `titulo3`, `descripcion3`) VALUES
(1, 'Juegos Extremos', 'Tu seguridad es primero, contamos con circuito cerrado de monitoreo.', 'Comodidad para los grandes', 'Instalaciones muy bien diseÃ±adas y confortables para toda la familia', 'Seguridad y vigilancia continua', 'Tu seguridad es primero, contamos con circuito cerrado de monitoreo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `somos`
--

CREATE TABLE `somos` (
  `id` int(11) NOT NULL,
  `titulo` text CHARACTER SET utf8mb4 NOT NULL,
  `subtitulo` text CHARACTER SET utf8mb4 NOT NULL,
  `texto` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `somos`
--

INSERT INTO `somos` (`id`, `titulo`, `subtitulo`, `texto`) VALUES
(1, 'SOMOS EXPERTOS EN FIESTAS Y EVENTOS INFANTILES', 'Quienes somos', 'Nuestra mÃ¡xima prioridad en cada evento es resguardar la salud y el bienestar de tu familia e invitados asÃ­ como de nuestro personal. A medida que nuestra vida diaria sigue afectada por la pandemia nuestro enfoque es realizar eventos con todas las medidas de bioseguridad posibles, para ello hemos implementado un riguroso protocolo de higiene aumentando la frecuencia de limpieza de nuestras instalaciones, enfocandonos aun mÃ¡s en las Ã¡reas con altos puntos de contacto como los juegos. Nuestro personal guardarÃ¡ en todo momento los principios bÃ¡sicos del distanciamiento fÃ­sico con los invitados para minimizar el contacto directo, sin dejar de lado la con calidez y calidad en el servicio. Si requieres mÃ¡s informaciÃ³n sobre nuestros protocolos de seguridad no dudes en contactarnos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `privilegios` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `confirmado` text NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`username`, `password`, `privilegios`, `email`, `confirmado`, `codigo`) VALUES
('root', '1234', 'admin', 'diegoglezh98@gmail.com', 'no', 1234),
('user', '1234', 'estandar', '', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `id_paq` (`id_paq`),
  ADD KEY `id_clientes` (`id_clientes`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`cliente`);

--
-- Indices de la tabla `somos`
--
ALTER TABLE `somos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`username`,`password`,`privilegios`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `privilegios` (`privilegios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `passwords`
--
ALTER TABLE `passwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_clientes`) REFERENCES `registro` (`cliente`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_paq`) REFERENCES `paquetes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
