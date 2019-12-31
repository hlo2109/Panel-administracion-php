-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-12-2019 a las 18:20:34
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admintutorial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `slug` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `father` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  `date_create` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `father`, `description`, `date_create`, `date_update`) VALUES
(14, 'Blog', 'blog', 0, '', '2019-12-29 20:18:19', NULL),
(15, 'Generales', 'generales', 0, '', '2019-12-29 20:18:33', NULL),
(16, 'Slider', 'slider', 0, '', '2019-12-29 20:25:07', NULL),
(17, 'Seo paginas estaticas', 'seo-paginas-estaticas', 0, '', '2019-12-29 21:37:59', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(140) COLLATE utf8_bin NOT NULL,
  `slug` varchar(140) COLLATE utf8_bin NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_bin,
  `description` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `tags` text COLLATE utf8_bin,
  `image` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `contents`
--

INSERT INTO `contents` (`id`, `id_user`, `name`, `slug`, `id_category`, `content`, `description`, `tags`, `image`, `date_create`, `date_update`) VALUES
(12, 1, 'Blog 1', 'blog-1', 14, '<p><img src=\"http://php.test/git/plantillaPHP/plantillaParte1//images/217214255MA==.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-dii fr-fil\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni,&nbsp;<img src=\"http://php.test/git/plantillaPHP/plantillaParte1//images/666168520MA==.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-fir fr-dii\">quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>aerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis&nbsp;</p><p>aerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis </p><p><br></p><p><br></p>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet dolo', 'ejemplo, blog, otro', '1515469817MA==.jpg', '2019-12-29 20:19:40', '2019-12-29 22:47:02'),
(14, 1, 'Blog 2', 'blog-2', 14, '<p><img src=\"../images/217214255MA==.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-dib\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p><br></p>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet dolo', '', '1158520739MA==.jpg', '2019-12-29 20:20:14', '2019-12-29 22:05:23'),
(15, 1, 'Blog 3', 'blog-3', 14, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p><br></p>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet dolo', NULL, '1112945040MA==.jpg', '2019-12-29 20:20:35', NULL),
(16, 1, 'Blog 4', 'blog-4', 14, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p><br></p>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet dolo', NULL, '563363247MA==.jpg', '2019-12-29 20:20:58', NULL),
(17, 1, 'Blog 5', 'blog-5', 14, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p><br></p>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet dolo', NULL, '1999065546MA==.jpg', '2019-12-29 20:21:21', NULL),
(18, 1, 'Blog 6', 'blog-6', 14, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p><br></p>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet dolo', NULL, '1914730321MA==.jpg', '2019-12-29 20:21:41', NULL),
(19, 1, 'Sobre nosotros', 'nosotros', 15, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliq<img src=\"http://php.test/git/plantillaPHP/plantillaParte1//images/937647557MA==.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-dii fr-fil\">uid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo.</p><p><br></p>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet doloribus voluptatum magni, quae quas minima quod autem neque tempora at iste aliquid consequatur quaerat numquam quis cumque nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia eveniet dolo', '', '1416654124MA==.jpg', '2019-12-29 20:22:12', '2019-12-29 22:48:41'),
(21, 1, 'ContÃ¡ctenos', 'contactenos', 15, '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore et qui eligendi quae expedita! Minima quasi neque non laudantium nihil earum, architecto, suscipit, error consectetur dolorem alias deserunt eum atque!</p>', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore et qui eligendi quae expedita! Minima quasi neque non laudantium nihil earum, architecto, suscipit, error consectetur dolorem alias deserunt eum atque!', NULL, '179266859MA==.jpg', '2019-12-29 20:23:22', NULL),
(22, 1, 'Suscribete', 'suscribete', 15, '<p>Suscribete para optener notificaci&oacute;nes de noticias en tu bandeja de entrada.</p>', '', NULL, '', '2019-12-29 20:23:49', NULL),
(23, 1, 'Mensaje footer', 'Mensaje footer', 15, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, accusantium at vel sed ipsam vitae similique, optio eligendi ipsum tempore laudantium quis. Pariatur adipisci officiis maxime, ab nobis ipsam iste.</p><p><a href=\"http://php.test/git/plantillaPHP/plantillaParte1/contacto.php\"></a></p>', '', NULL, '', '2019-12-29 20:24:42', NULL),
(24, 1, 'Slider 1', 'slider1', 16, '', 'https://google.com', NULL, '1629553244MA==.jpg', '2019-12-29 20:25:31', '2019-12-29 21:00:07'),
(25, 1, 'Slider 2', 'slider-2', 16, '', '', NULL, '761075621MA==.jpg', '2019-12-29 20:25:46', NULL),
(26, 1, 'Slider 3', 'slider-3', 16, '', '', NULL, '1274619698MA==.jpg', '2019-12-29 20:26:02', NULL),
(27, 1, 'Slider 4', 'slider-4', 16, '', '', NULL, '1312836608MA==.jpg', '2019-12-29 20:26:23', NULL),
(28, 1, 'Parallax ejemplo', 'parallax', 15, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore praesentium dicta ad velit consectetur, ex enim itaque eligendi consequuntur quod modi dolorem qui. Quos cum deleniti molestiae aspernatur, nostrum reiciendis?</p>', '', NULL, '', '2019-12-29 20:31:21', NULL),
(30, 1, 'Blog', 'blog', 17, '', 'Esto es un blog', 'blog, categorias', '611172471MA==.jpg', '2019-12-29 21:38:27', NULL),
(31, 1, 'Web de ejemplo', 'home', 17, '', 'Esta es la pagina de inicio', 'Ejemplo, web', '1417401613MA==.jpg', '2019-12-29 21:39:23', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents_categories`
--

CREATE TABLE `contents_categories` (
  `id_content` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents_images`
--

CREATE TABLE `contents_images` (
  `id_content` int(11) NOT NULL,
  `id_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `alt` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `url` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `page` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `name`, `page`) VALUES
(1, 'Multimedia', 'multimedia.php'),
(2, 'Mensajes', 'mensajes.php'),
(3, 'Categorias', 'categorias.php'),
(4, 'Contenidos', 'contenidos.php'),
(5, 'Usuarios', 'usuarios.php'),
(6, 'Inicio', 'index.php'),
(7, 'Categoria form', 'categoria_form.php'),
(8, 'Categoria form update', 'categoria_form_update.php'),
(9, 'Contenido form', 'contenido_form.php'),
(10, 'Contenido form update', 'contenido_form_update.php'),
(11, 'Usuario form', 'usuario_form.php'),
(12, 'Usuario form update', 'usuario_form_update.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_profile`
--

CREATE TABLE `menu_profile` (
  `id_menu` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `menu_profile`
--

INSERT INTO `menu_profile` (`id_menu`, `id_profile`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(6, 2),
(2, 2),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(3, 2),
(7, 2),
(8, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(140) COLLATE utf8_bin NOT NULL,
  `email` varchar(250) COLLATE utf8_bin NOT NULL,
  `phone` varchar(40) COLLATE utf8_bin NOT NULL,
  `affair` varchar(140) COLLATE utf8_bin NOT NULL,
  `message` varchar(500) COLLATE utf8_bin NOT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `affair`, `message`, `date_create`) VALUES
(5, 'Ejemplo', 'ejemplo@ejemplo.com', '123456', 'Ejemplo', 'Esto es un ejemplo', '2019-12-29 21:48:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multimedia`
--

CREATE TABLE `multimedia` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `ext` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `size` float DEFAULT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `multimedia`
--

INSERT INTO `multimedia` (`id`, `image`, `ext`, `size`, `date_create`) VALUES
(2, '1137863861MA==.jpg', 'jpg', 2.05753, '2019-12-27 03:24:48'),
(3, '1228955299MA==.jpg', 'jpg', 0.12882, '2019-12-27 03:24:48'),
(4, '1577015688MA==.jpg', 'jpg', 0.53334, '2019-12-27 03:24:48'),
(5, '1356859949MA==.jpg', 'jpg', 0.39749, '2019-12-27 03:24:48'),
(6, '900917945MA==.jpg', 'jpg', 0.21496, '2019-12-27 03:24:48'),
(7, '526764489MA==.jpg', 'jpg', 0.67482, '2019-12-27 03:24:48'),
(9, '1800607166MA==.jpg', 'jpg', 0.3177, '2019-12-27 03:24:48'),
(10, '217214255MA==.jpg', 'jpg', 0.6031, '2019-12-27 03:24:48'),
(11, '568854184MA==.jpg', 'jpg', 0.75826, '2019-12-27 03:24:48'),
(12, '666168520MA==.jpg', 'jpg', 0.46437, '2019-12-27 03:24:48'),
(13, '951833636MA==.jpg', 'jpg', 0.91805, '2019-12-27 03:24:48'),
(14, '739748460MA==.jpg', 'jpg', 0.33418, '2019-12-27 03:47:53'),
(16, '1017236765MA==.jpg', 'jpg', 0.12882, '2019-12-27 04:05:20'),
(17, '937647557MA==.jpg', 'jpg', 0.24571, '2019-12-27 04:05:34'),
(19, '1152629336MA==.jpg', 'jpg', 0, '2019-12-27 04:16:13'),
(20, '129204512MA==.jpg', 'jpg', 0, '2019-12-27 04:16:13'),
(21, '1387889589MA==.jpg', 'jpg', 1.12429, '2019-12-27 04:39:28'),
(22, '1830722097MA==.jpg', 'jpg', 0.33418, '2019-12-27 04:40:04'),
(24, '68717155MA==.jpg', 'jpg', 0.03552, '2019-12-27 04:43:19'),
(25, '204438198MA==.jpg', 'jpg', 0.82044, '2019-12-27 04:44:15'),
(26, '1515469817MA==.jpg', 'jpg', 0.1564, '2019-12-29 20:19:40'),
(27, '136842315MA==.jpg', 'jpg', 0.26343, '2019-12-29 20:20:01'),
(28, '1158520739MA==.jpg', 'jpg', 0.26343, '2019-12-29 20:20:14'),
(29, '1112945040MA==.jpg', 'jpg', 0.12112, '2019-12-29 20:20:35'),
(30, '563363247MA==.jpg', 'jpg', 0.09771, '2019-12-29 20:20:58'),
(31, '1999065546MA==.jpg', 'jpg', 0.22524, '2019-12-29 20:21:21'),
(32, '1914730321MA==.jpg', 'jpg', 0.07623, '2019-12-29 20:21:41'),
(33, '1416654124MA==.jpg', 'jpg', 0.11769, '2019-12-29 20:22:12'),
(34, '848901525MA==.jpg', 'jpg', 0.57516, '2019-12-29 20:23:07'),
(35, '179266859MA==.jpg', 'jpg', 0.57516, '2019-12-29 20:23:22'),
(36, '1629553244MA==.jpg', 'jpg', 0.57516, '2019-12-29 20:25:31'),
(37, '761075621MA==.jpg', 'jpg', 0.29697, '2019-12-29 20:25:46'),
(38, '1274619698MA==.jpg', 'jpg', 0.11769, '2019-12-29 20:26:02'),
(39, '1312836608MA==.jpg', 'jpg', 0.49548, '2019-12-29 20:26:23'),
(40, '611172471MA==.jpg', 'jpg', 0.1564, '2019-12-29 21:38:27'),
(41, '1417401613MA==.jpg', 'jpg', 0.22524, '2019-12-29 21:39:23'),
(42, '732421641MA==.jpg', 'jpg', 0.11769, '2019-12-29 22:07:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id`, `name`) VALUES
(1, 'Administrador'),
(2, 'Usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscription`
--

CREATE TABLE `suscription` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `suscription`
--

INSERT INTO `suscription` (`id`, `email`, `date_create`) VALUES
(1, 'admin@admin.com', '2019-12-29 21:53:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(250) COLLATE utf8_bin NOT NULL,
  `id_profile` int(11) NOT NULL,
  `date_create` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `id_profile`, `date_create`, `date_update`) VALUES
(1, 'Hlo', 'dev@hlo21.com', '$2y$10$GLb3M.Beo.8fXeFjYmDBgO7zLkL9AU7OrsGpuZEpudirajiSbB.Y.', 1, '2019-07-25 03:09:45', '2019-08-08 02:55:15'),
(2, 'Usuario', 'user@hlo21.com', '$2y$10$5/D0nMAdtGwCCJrhGDU5y.Zjj3GNnYVwjD3hQ9ScIr8g7o22uhz42', 2, '2019-12-28 15:55:22', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `contents_categories`
--
ALTER TABLE `contents_categories`
  ADD KEY `id_content` (`id_content`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `contents_images`
--
ALTER TABLE `contents_images`
  ADD KEY `id_content` (`id_content`),
  ADD KEY `id_image` (`id_image`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu_profile`
--
ALTER TABLE `menu_profile`
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_profile` (`id_profile`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscription`
--
ALTER TABLE `suscription`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_profile` (`id_profile`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `suscription`
--
ALTER TABLE `suscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `contents_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `contents_categories`
--
ALTER TABLE `contents_categories`
  ADD CONSTRAINT `contents_categories_ibfk_1` FOREIGN KEY (`id_content`) REFERENCES `contents` (`id`),
  ADD CONSTRAINT `contents_categories_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `contents_images`
--
ALTER TABLE `contents_images`
  ADD CONSTRAINT `contents_images_ibfk_1` FOREIGN KEY (`id_content`) REFERENCES `contents` (`id`),
  ADD CONSTRAINT `contents_images_ibfk_2` FOREIGN KEY (`id_image`) REFERENCES `images` (`id`);

--
-- Filtros para la tabla `menu_profile`
--
ALTER TABLE `menu_profile`
  ADD CONSTRAINT `menu_profile_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `menu_profile_ibfk_2` FOREIGN KEY (`id_profile`) REFERENCES `profiles` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_profile`) REFERENCES `profiles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
