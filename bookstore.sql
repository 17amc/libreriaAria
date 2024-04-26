-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2024 a las 21:41:20
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
-- Base de datos: `bookstore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `price`, `image_url`) VALUES
(1, 'Cien años de soledad', 'Gabriel García Márquez', 45000.00, 'https://www.rae.es/sites/default/files/portada_cien_anos_de_soledad_0.jpg'),
(2, 'El amor en los tiempos del cólera', 'Gabriel García Márquez', 38000.00, 'https://wmagazin.com/wp-content/uploads/2019/03/El-amor-en-los-tiempos-del-colera-Portada-759x1024.jpg'),
(3, 'La casa de los espíritus', 'Isabel Allende', 37000.00, 'https://images.cdn1.buscalibre.com/fit-in/360x360/15/ee/15ee29bdb3c45283fd7cb3cd347b75d4.jpg'),
(4, 'Rayuela', 'Julio Cortázar', 39000.00, 'https://educacion.ufm.edu/wp-content/uploads/2013/07/Rayuela.jpg'),
(5, 'Crónica de una muerte anunciada', 'Gabriel García Márquez', 32000.00, 'https://images.cdn2.buscalibre.com/fit-in/360x360/13/97/1397a4f28df5ed21f99177884f3276bd.jpg'),
(6, 'La sombra del viento', 'Carlos Ruiz Zafón', 42000.00, 'https://images.cdn2.buscalibre.com/fit-in/360x360/4a/f8/4af862174ba709db62744f988c62e3b6.jpg'),
(7, 'El túnel', 'Ernesto Sabato', 39000.00, 'https://www.planetadelibros.com/usuaris/libros/thumbs/bbabf39e-fc4c-4ee7-b81b-d83d3f34b2b1/d_1200_1200/portada_el-tunel-edicion-conmemorativa_ernesto-sabato_201803221553.webp'),
(8, 'Los funerales de la Mamá Grande', 'Gabriel García Márquez', 34000.00, 'https://images.cdn1.buscalibre.com/fit-in/360x360/0a/ea/0aea75209a99330b7932c2ee35f84c2a.jpg'),
(9, 'Noticia de un secuestro', 'Gabriel García Márquez', 41000.00, 'https://libreriatemis.com/wp-content/uploads/2020/12/18-0284-0002-1.jpg'),
(10, 'La hojarasca', 'Gabriel García Márquez', 30000.00, 'https://images.cdn2.buscalibre.com/fit-in/360x360/7f/51/7f51e25951ff2066fa19b9caea189d4a.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
