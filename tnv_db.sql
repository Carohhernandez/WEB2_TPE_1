-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2021 a las 03:26:10
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tnv_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` varchar(1000) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `titulo`, `contenido`, `imagen`, `pais`) VALUES
(1, 'Parque Nacional Tierra del Fuego', 'En el extremo sudoeste de la isla de Tierra del Fuego, próximo a la ciudad de Ushuaia, el Parque Nacional Tierra del Fuego preserva cerca de 70.000 hectáreas de Bosques Patagónicos que invitan a disfrutar caminatas en contacto con la naturaleza virgen. \r\n\r\nSe trata del área protegida más austral de la Argentina, donde las estribaciones de la gran cordillera toman menor altura y se encuentran con el mar en el canal del Beagle. \r\n\r\nSe recomienda visitarlo desde octubre hasta a abril', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/97/28/19/al-fin-del-mundo.jpg?w=1200&h=-1&s=1', 1),
(2, 'Cuesta del Obispo', 'La cuesta consta de un camino consolidado, ancho, enripiado y en permanente conservación que va serpenteando en su ascenso. Unas centenas de metros antes de llegar a su tope existe un mirador desde donde puede observarse la vertiginosa cuesta en casi toda su extensión.\r\n\r\nDe aproximadamente unos 20 kilómetros de extensión y a 57 km de la ciudad de Salta, puede llegarse a través de la ruta provincial Nº 33. La cuesta asciende desde los límites de la localidad de Chicoana a 1270 msnm hasta alcanzar su tope (altura máxima de la carretera) en la Piedra del Molino (punto panorámico) a 3340 msnm, desde donde la Ruta provincial 33 atraviesa el parque nacional Los Cardones hacia Cachi.\r\n\r\nOrillando barrancos y precipicios hasta llegar a la cima pueden apreciarse durante todo el año diferentes formaciones de nubes suspendidas a mitad de camino y cóndores sobrevolando el lugar a escasos metros de altura.', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/1f/76/f3/img-20180219-100200158.jpg?w=1000&h=-1&s=1', 1),
(3, 'Parque Provincial Aconcagua', 'Esta área es conocida internacionalmente por el cerro más alto del hemisferio occidental, el Aconcagua, de 6962 m. Protege el sector de la cordillera de los Andes donde alcanza la máxima altura de América, con numerosas cumbres que superan los 5.000 m. \r\n\r\nAdemás, preserva glaciares que originan ríos y vegas de una belleza natural que atrae a visitantes de todo el mundo. \r\n\r\nEl parque posee valores arqueológicos, incluso el mismo cerro Aconcagua era un sitio ceremonial de los incas, razón por la cual forma parte del sistema vial andino “Qhapac Ñan” –Camino del Inca- , declarado Patrimonio Mundial por la Unesco.', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/b5/a8/02/aconcagua-32-largejpg.jpg?w=1200&h=-1&s=1', 1),
(4, 'Explorá Punta del Este', 'Uno de los puntos más fuertes de la ciudad es la Avenida Gorlero, la principal calle del balneario. En torno a esta avenida nació la vida turística de Punta del Este y en ella se encuentran galerías comerciales, restaurantes, cines, un casino, locales comerciales y muchos atractivos más. \r\n\r\nEl punto neurálgico de la avenida Gorlero es la Plaza Artigas, donde se desarrolla la popular feria de los artesanos; en sus numerosos stands se puede observar y adquirir artesanías en cuero, piedra, metales, vidrio y otros materiales. Otro lugar a visitar es la Isla Gorriti, se puede acceder mediante cruceros, veleros y barcazas que salen a toda hora desde el puerto de Punta del Este. También se pueden contratar paseos en helicóptero.', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/6e/80/9d/playa-mansa.jpg?w=1200&h=-1&s=1', 6),
(5, 'Escapada a Colonia del Sacramento desde Montevideo', 'Haga una escapada desde la ciudad de Montevideo a Colonia del Sacramento. En este recorrido guiado de 9 horas podrá disfrutar de una excelente oportunidad para descubrir esta ciudadela. \r\n\r\nEn 1995, Colonia del Sacramento fue declarada Patrimonio Cultural por la UNESCO por su singular centro histórico, que guarda vestigios de la primera colonia portuguesa en el Río de la Plata en 1680, así como un rico patrimonio español de los siguientes siglos. \r\n\r\nEsta excursión es ideal para amantes de la historia pues permite pasear por un pueblo de siglos de antigüedad mientras escucha los comentarios del guía. Recogida en el hotel y traslado de vuelta con paradas a lo largo de una granja local, el museo de Granja Colonia y la tienda de caramelos están incluidos.', 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-720x480/06/6c/7f/b1.jpg', 6),
(6, 'Tours de vinos por Wine Explorers', 'Si eres amante del vino o simplemente quieres conocer las mejores bodegas de Uruguay, su proceso de producción y ser recibido por los dueños de los establecimientos, ¡no debes perderte esta experiencia!\r\n\r\nVerónica González, la propietaria de la empresa, lo acompañará personalmente, lo llevará en su automóvil, almorzará con usted y le hará muchas recomendaciones que mejorarán su estadía en Uruguay.', 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-720x480/09/58/28/38.jpg', 6),
(7, 'Parque de Ibirapuera', 'El Parque do Ibirapuera, principal lugar de interés del barrio, es una zona verde perfecta para disfrutar en familia que ofrece múltiples posibilidades: hacer picnic, relajarse, practicar deporte, hacer ejercicio o admirar obras de arte. \r\n\r\nEs un lugar muy concurrido los fines de semana y una zona de esparcimiento muy popular entre los paulistanos. En sus 1584 km2 hay tres lagos, dos museos y otros espacios culturales diversos. Además, es lugar de celebración de diversos eventos durante todo el año, como conciertos gratuitos y un espectáculo de luz y agua en diciembre con motivo de las fiestas navideñas. \r\n\r\nEl parque alberga dos importantes monumentos que visitar: el Obelisco y el Monumento a las Banderas. ¡En Ibirapuera encontrarás un lugar fantástico para desconectar!', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/22/70/87/ovo-de-pascoa-ibirapuera.jpg?w=1200&h=-1&s=1', 2),
(8, 'Pão de Açúcar', 'El Pan de Azúcar (en portugués, Pão de Açúcar) es un peñasco situado en Río de Janeiro, Brasil, en la boca de la bahía de Guanabara sobre una península que sobresale en el océano Atlántico.\r\n\r\nEste pico es uno de los más llamativos entre los varios morros monolíticos de granito que se elevan directamente del borde del mar en Río de Janeiro. Un teleférico de cristal artesonado (llamado \"bondinho del Pan de Azúcar\" en el portugués popular) con capacidad para 65 pasajeros, recorre una ruta de 1.401 metros entre los morros de Babilonia y Urca cada cinco minutos. La línea del teleférico original fue construida en 1912.', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/8d/fc/12/foto-oficial.jpg?w=1200&h=-1&s=1', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id_pais` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id_pais`, `nombre`) VALUES
(1, 'Argentina'),
(2, 'Brasil'),
(6, 'Uruguay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `password`) VALUES
(2, 'admin@gmail.com', '$2y$10$6k/R3l0rRpnLQIEhVlpc3umLePFdKxQBzTwXNJnW0T5t6nMK8vOZO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `pais` (`pais`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`pais`) REFERENCES `paises` (`id_pais`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
