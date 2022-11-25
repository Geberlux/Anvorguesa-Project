-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2022 a las 00:01:29
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gapardo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(100) NOT NULL,
  `categoria` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipoCategoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`, `tipoCategoria`) VALUES
(1, 'Guitarras', 1),
(2, 'Violines', 1),
(3, 'Bajos', 1),
(4, 'Flautas', 2),
(5, 'Saxos', 2),
(6, 'Armónicas', 2),
(7, 'Baterías', 3),
(8, 'Xilófonos', 3),
(9, 'Panderetas', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumentos`
--

CREATE TABLE `instrumentos` (
  `id_instrumento` int(100) NOT NULL,
  `nombreInstrumento` varchar(100) NOT NULL,
  `marcaInstrumento` varchar(100) NOT NULL,
  `descripcionInstrumento` text NOT NULL,
  `detallesInstrumento` text NOT NULL,
  `precioInstrumento` double(9,2) NOT NULL,
  `cantidadInstrumento` int(100) NOT NULL,
  `fotoInstrumento` varchar(100) NOT NULL,
  `categoriaInstrumento` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instrumentos`
--

INSERT INTO `instrumentos` (`id_instrumento`, `nombreInstrumento`, `marcaInstrumento`, `descripcionInstrumento`, `detallesInstrumento`, `precioInstrumento`, `cantidadInstrumento`, `fotoInstrumento`, `categoriaInstrumento`) VALUES
(1, 'Guitarra criolla clásica', 'Gracia M1\r\n\r\n', 'Guitarra para diestros natural\r\n\r\n', 'Construida de Abedul.\r\nTiene 6 cuerdas de nailon.\r\nGuitarra versátil que se adapta a una gran variedad de estilos musicales.\r\n', 19800.00, 60, 'Guitarra criolla clásica.jpg', 1),
(2, 'Guitarra eléctrica GRX40 ', 'Ibanez RG GIO\r\n\r\n', 'Color negro y blanco\r\n\r\n', 'Fabricada en álamo.\r\nCon 6 cuerdas y 22 trastes de tamaño medium jumbo.\r\nEl largo de escala es de 25.5 \".\r\nEl puente es tremolo.\r\nIncluye 3 micrófonos humbucker, simples.\r\nControles de selector de micrófonos, tono y volumen.\r\nPalanca incluida.\r\nSonidos fuertes y firmes con un estilo propio.\r\n', 51900.00, 80, 'Guitarra eléctrica GRX40.jpg', 1),
(3, 'Guitarra acústica EG481SCX \r\n\r\n', 'Takamine\r\n\r\n', 'Color negro mate.\r\n\r\n', 'Tapa de abeto.\r\nAcabado de gloss.\r\nForma del cuerpo: jumbo.\r\nTiene 6 cuerdas de metal.\r\nGuitarra versátil que se adapta a una gran variedad de estilos musicales.\r\n', 205600.00, 65, 'Guitarra acústica EG481SCX-W.jpg', 1),
(4, 'Violín acústico', 'Segovia', 'Estudio Antique 1/2 Tilo Arco', 'Terminación: Marrón antiguo mate. Tapa: madera contrachapada de tilo Parte posterior y lateral: madera contrachapada de tilo Diapasón: Madera dura terciada Clavija y mentonera: madera terciada Cordal: aleación de aluminio Arco redondo de palisandro Estuche Triangular de Gomaespuma', 11600.00, 45, 'Violín acústico.jpg', 2),
(5, 'Violín eléctrico', 'Parquer ', 'Con Estuche Arco Resina Cable', 'CUELLO MADERA Caoba\nFORMA DEL CUELLO Perfil bajo\nTUERCA Plástico\nANCHO DE TUERCA 42 mm\nSINTONIZADORES Die Cast\nESCALA 812 mm\nPROFUNDIDAD DEL CUERPO 95-118 mm\nPUENTE Sudamericano Roupanà\nSILLÍN Plástico\nCOLOR / ACABADO Natural / Brillo\n', 64700.00, 55, 'Violín Eléctrico.jpg', 2),
(6, 'Bajo eléctrico Jazz Bass', 'Sx', 'Con chapón Fjb-62/c y Funda', 'Escala: 864mm\nCuerpo: Basswood Solido\nMástil : Selected Canadian Maple\nDiapasón: Rosewood\nTrastes: 20\nPuente: Chrome\nBridge Cover: Chrome\nPickups: 2 x Single Coil\nControles: 2V. 1T.\nAccesorios: SX BB400 Funda\n', 46900.00, 80, 'Bajo eléctrico Jazz Bass.jpg', 3),
(7, 'Bajo acústico Nxt Bass ', 'Eko ', 'Con ecualizador afinador y corte', 'CUELLO MADERA Caoba\r\nFORMA DEL CUELLO Perfil bajo\r\nTUERCA Plástico\r\nANCHO DE TUERCA 42 mm\r\nSINTONIZADORES Die Cast\r\nESCALA 812 mm\r\nPROFUNDIDAD DEL CUERPO 95-118 mm\r\nPUENTE Sudamericano Roupanà\r\nSILLÍN Plástico\r\nCOLOR / ACABADO Natural / Brillo\r\n', 64700.00, 75, 'Bajo Acustico.jpg', 3),
(8, 'Batería Prodigy PDG5254T', 'Mapex ', 'Fierros + Platos + Banqueta', 'Medidas:\nB 22\"\nTT 12\"\nTT 13\"\nTF 16\"\nR 14\"x5,5\n', 160000.00, 65, 'Batería Prodigy PDG5254T.jpg', 7),
(9, 'Batería eléctrica Sensitiva Skd130 ', 'Soundking Parquer ', 'Cantidad de cuerpos: 8\r\nTipos de conexiones: PLUG,USB,MIDI\r\nCantidad de sonidos: 250\r\nIncluye palillos: Sí\r\nIncluye pedales: Sí\r\n', 'Tamaño: 700 mm × 1100 mm\r\nmódulo SKD130\r\n250 voces de percusión de alta calidad\r\n20 kits de batería predefinidos + 10 kits de batería definidos por el usuario\r\n20 canciones de demostración\r\nInstalación de grabación y reproducción\r\nMetrónomo: haga clic voz, selección de intervalo, volumen de clic\r\ntempo: 35-280bpm\r\n', 121000.00, 45, 'Batería eléctrica Sensitiva Skd130.jpg', 7),
(10, 'Xilofón cromático XCS', 'Nacional', 'En el xilofón cromático podemos interpretar todo tipo de melodías con el cálido sonido de sus placas de quina.\r\nSu fabricación artesanal y sonido natural, evoca lo autóctono y aporta originalidad a cualquier género musical. Desde música clásica a rock, y desde pop a música fusión.\r\n', 'Quince notas naturales – C a C2 (DO a DO2).\r\nDiez semitonos – C# a Bb1 (DO# a SIb1).\r\nPlacas desmontables de madera de quina.\r\nCaja acústica de madera.\r\nDos baquetas.\r\n', 18300.00, 80, 'Xilofón cromático XCS.jpg', 8),
(11, 'Xilofón diatónico X28', 'Nacional', 'Cantidad de teclas: 17\r\nEscala musical: Diatónica\r\nMaterial del cuerpo: Madera\r\nMaterial de las teclas: Madera\r\nAncho: 2 cm\r\n', 'Placas desmontables de madera de quina.\r\nCaja acústica de madera.\r\nDos baquetas.\r\nEl ancho de cada placa es de 2 Cm.\r\n', 10500.00, 60, 'Xilofón diatónico X28.jpg', 8),
(12, 'Pandero JB910H', 'Knight', '10 Pulgadas 8 Pares De Sonajas', '10 pulgadas/25 centímetros de diámetro\r\nParche de cuero sintético\r\n8 pares de sonajas\r\nColor natural\r\n', 1600.00, 75, 'Pandero JB910H.jpg', 9),
(13, 'Pandereta media luna Jb918', 'Knight', '4 Sonajas 4.5 X 5.5', 'Diámetro: 4.5 \"\r\nCantidad de sonajas: 4\r\nForma: Media luna\r\n', 500.00, 140, 'Pandereta media luna Jb918.jpg', 9),
(14, 'Flauta dulce Yrf23 ', 'Yamaha ', 'Escolar soprano', 'Condición del ítem: Nuevo\r\nColor: Blanco marfil\r\nIncluye estuche: Si\r\nModelo: YRS23\r\nNivel de habilidad: Principiante\r\nTipo de digitación: Alemana\r\nTipo de flauta: Dulce\r\nAfinación: Do\r\nMaterial: ABS Resina\r\n', 2000.00, 170, 'Flauta dulce Yrf23.jpg', 4),
(15, 'Flauta traversa JBFL-6248S', 'Knight ', 'Material: Metal\r\nNivel de habilidad: Profesional\r\nTipo de digitación: Alemana\r\nIncluye estuche: Sí\r\n', 'Afinación en C\r\nMaterial: Metal\r\nFlauta de plata\r\nSuperficie Plateado\r\nClave de diseño: 16 hoyos cerrado\r\nTecla de disposición: desalineado G, el tornillo de ajuste\r\nAlmohadillas Italia\r\nNivel de habilidad: Profesional\r\nIncluye estuche\r\nDimensiones: 13 x 8 x 41cm\r\nPeso: 0.9 k\r\nOrigen: China\r\n', 45400.00, 75, 'Flauta traversa JBFL-6248S.jpg', 4),
(16, 'Saxo alto JBAS-200', 'Knight ', 'Eb Llave F# Laqueado + estuche', 'Excelente Saxo Alto en Eb (Mi Bemol) y llave de F#, cuerpo dorado laqueado, incluye estuche semi rígido y boquilla.', 125300.00, 30, 'Saxo alto JBAS-200.jpg', 5),
(17, 'Saxo soprano SS650', 'Conn-Selmer', 'nstrumento ideal principiantes\r\nLos saxofones Conn-Selmer son una opción ideal para jóvenes y estudiantes músicos. El tamaño de la soprano es cómodo, ligero y fácil de alcanzar, lo que le permite centrarse en su música.\r\n', 'Cuerpo: Latón\r\nLlaves: Latón\r\nTamaño: Soprano\r\nMástil: Recto\r\nBotones: Blanco perlado\r\nClave: F #\r\nPads: Pisoni\r\nAcabado: Laca del oro\r\nAccesorios incluidos: Maletín ligero\r\n', 180000.00, 40, 'Saxo soprano SS650.jpg', 5),
(18, 'Saxo plástico Venova', 'Yamaha ', 'El Venova es un tipo completamente nuevo de instrumento que ofrece la expresividad de un instrumento de viento, que utiliza un sistema de digitación tan simple como el de una flauta dulce.', 'Tipo de saxofón	Soprano', 27200.00, 65, 'Saxo plástico Venova.jpg', 5),
(19, 'Armónica diatónica cromada', 'Magma', 'Armónica Blusera Afina Do + Estuche', 'Medidas: 103x27x21 mm.\r\nPlaca de caña de cobre de 0,9 mm.\r\nCubierta de metal, cromada, gran terminación\r\n', 1300.00, 180, 'Armónica diatónica cromada.jpg', 6),
(20, 'Armónica cromática 64', 'Hohner', 'Con el nuevo Super 64, HOHNER actualiza este icónico instrumento con un diseño impresionante y una amplia gama de características innovadoras. ', 'Teclas: C\r\nEscribe: cromático\r\nAfinación: afinación en solitario\r\nNumero de agujeros: dieciséis\r\nGama tonal: 4 octavas, C3 - D7\r\nLargo: 19,8 cm / 7,8 \"\r\n', 82300.00, 130, 'Armónica cromática 64 Hohner.jpg', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipo` int(10) NOT NULL,
  `nombreTipos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `nombreTipos`) VALUES
(1, 'Cuerda'),
(2, 'Vientos'),
(3, 'Percusión'),
(4, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(8) UNSIGNED NOT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `APELLIDO` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `CLAVE` varchar(100) DEFAULT NULL,
  `NIVEL` varchar(100) DEFAULT NULL,
  `FECHA_ALTA` datetime DEFAULT NULL,
  `ESTADO` enum('activo','banneado') NOT NULL DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `APELLIDO`, `EMAIL`, `CLAVE`, `NIVEL`, `FECHA_ALTA`, `ESTADO`) VALUES
(1, 'Bautista', 'Carloni', 'gr@dv.com', '81dc9bdb52d04dc20036dbd8313ed055', 'usuario', '2014-11-06 21:35:46', 'activo'),
(9, 'Bart', 'Simpson', 'bs@gmail.com', '731309c4bb223491a9f67eac5214fb2e', 'usuario', '2022-07-28 21:29:05', 'activo'),
(12, 'Harry', 'Mrtnz', 'hm@dv.net', 'b59c67bf196a4758191e42f76670ceba', 'Admin', '2022-09-06 18:49:21', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `codigoTipo` (`tipoCategoria`);

--
-- Indices de la tabla `instrumentos`
--
ALTER TABLE `instrumentos`
  ADD PRIMARY KEY (`id_instrumento`),
  ADD KEY `codigoCategoria` (`categoriaInstrumento`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `sdfsdfsdfdsfdsf` (`EMAIL`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `instrumentos`
--
ALTER TABLE `instrumentos`
  MODIFY `id_instrumento` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id_tipo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `codigoTipo` FOREIGN KEY (`tipoCategoria`) REFERENCES `tipos` (`id_tipo`);

--
-- Filtros para la tabla `instrumentos`
--
ALTER TABLE `instrumentos`
  ADD CONSTRAINT `codigoCategoria` FOREIGN KEY (`categoriaInstrumento`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
