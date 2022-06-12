-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2022 a las 02:06:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `google-news`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `googlenotices`
--

create database `google-news`;

use `google-news`;

CREATE TABLE `googlenotices` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Descripcion` text NOT NULL,
  `urlImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `googlenotices`
--

INSERT INTO `googlenotices` (`Id`, `Titulo`, `Descripcion`, `urlImage`) VALUES
(1, 'Huracan Mitch Recuerdo', 'El Mitch logró cubrir por completo el puente Malloll en un abrir y cerrar de ojos, mientras que ETA, aunque ha causado innumerables inundaciones, de momento no ha ocasionado esa tragedia.\r\nPor el paso del ciclón de hace 22 años, se dañaron diferentes puentes producto de las copiosas lluvias, y en pleno 2020 se está viviendo la misma situación.', 'https://www.google.com/search?q=huracan+mitch+noticia&rlz=1C1UEAD_esHN971HN971&sxsrf=ALiCzsYGAwyEVgtdDFftfs6vX8e2efSKig:1654991964145&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjJ3oPBzab4AhW9hIQIHYrfAjAQ_AUoAXoECAEQAw&cshid=1654991977108842&biw=1366&bih=625&dpr=1#imgrc=Ts0ANrFdlARqoM'),
(2, 'Atentado 9/11', 'Si hay un acontecimiento histórico reciente que ha cambiado el mundo ese es, sin duda, los atentados del 11-S, de los que se van a cumplir 18 años. Además, al ser retransmitidos en directo por televisión, se han quedado grabados en nuestra memoria colectiva. Pero... ¿podrían haberse evitado? Esa pregunta es el punto de partida de El príncipe de las tinieblas. El hombre que arruinó los planes de Bin Laden (Ponent Mont) una apasionante distopía basada en la historia real de John Patrick O\'Neill (1952-2001), un agente del FBI que advirtió durante años sobre un posible atentado de Bin Laden y que, ironías de la vida, murió en las Torres Gemelas.\r\nEsta interesante historia comienza en enero de 2005, cuando John Kerry se convierte en el 44º presidente de los Estados Unidos, después de derrotar a George W. Bush hijo en las elecciones. Es entonces cuando su vicepresidente, Barak Obama, le cuenta que su victoria electoral solo ha sido posible gracias a que el agente del FBI, John Patrick O\'Neill, y Robert Booker, de la CIA, impidieron los atentados que Al Qaeda y Bin Laden habían preparado.', 'https://www.google.com/search?q=torres+gemelas&tbm=isch&ved=2ahUKEwiXgIrIzab4AhXJA98KHbu1BDgQ2-cCegQIABAA&oq=torres+g&gs_lcp=CgNpbWcQARgAMgQIIxAnMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOgcIIxDqAhAnOgQIABBDOggIABCABBCxAzoLCAAQgAQQsQMQgwE6BwgAELEDEEM6CggAELEDEIMBEENQyQ9YrjFgtzdoAXAAeACAAbcBiAHkB5IBAzQuNZgBAKABAaoBC2d3cy13aXotaW1nsAEKwAEB&sclient=img&ei=aiylYpejOMmH_Aa765LAAw&bih=625&biw=1366&rlz=1C1UEAD_esHN971HN971#imgrc=3QYRkFHyFQiJbM'),
(3, 'Demanda Facebook', 'Este miércoles 9 de noviembre, la procuradora general de Nueva York, Letitia James, anunció una demanda antimonopolio masiva contra Facebook; esta se trata de la segunda vez este año que Estados Unidos arremete contra los gigantes tecnológicos GAFA y consta de la participación de nada más ni menos que 46 fiscales de los estados del país. \r\n\r\nEsta demanda conjunta está encabeza por la Comisión Federal de Comercio de EEUU (FTC por sus siglas en inglés) y se centra en las adquisiciones más importantes de Facebook: Instagram y WhatsApp. Los fiscales generales alegan que Facebook utilizó el poder y el alcance de su plataforma para reprimir el crecimiento de usuarios de servicios competidores. En otras palabras, Facebook está siendo demandado por monopolio. \r\n\r\nY en palabras de la procuradora general de Nueva York: \r\n\r\n«Durante casi una década, Facebook ha utilizado su dominio y poder de monopolio para aplastar a rivales más pequeños y acabar con la competencia… Facebook utilizó grandes cantidades de dinero para adquirir rivales potenciales antes de que pudieran amenazar el dominio de la empresa”.', 'https://www.google.com/search?q=demanda+facebook&tbm=isch&ved=2ahUKEwiOorH5zab4AhUVDd8KHYMWD6UQ2-cCegQIABAA&oq=demanda+facebook&gs_lcp=CgNpbWcQAzIGCAAQHhAIMgQIABAYMgQIABAYOgQIIxAnOgQIABBDOgUIABCABDoICAAQsQMQgwE6CAgAEIAEELEDOgcIABCxAxBDOgcIIxDqAhAnOgsIABCABBCxAxCDAToGCAAQHhAFUMEwWMuBAWCKgwFoB3AAeAGAAbEDiAHWGZIBCjcuMTIuMi4xLjGYAQCgAQGqAQtnd3Mtd2l6LWltZ7ABCsABAQ&sclient=img&ei=0iylYo7xE5Wa_AaDrbyoCg&bih=625&biw=1366&rlz=1C1UEAD_esHN971HN971#imgrc=SgUtm0s-Ba8oDM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `googlenotices`
--
ALTER TABLE `googlenotices`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `googlenotices`
--
ALTER TABLE `googlenotices`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
