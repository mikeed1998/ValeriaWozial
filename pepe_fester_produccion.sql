-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2024 a las 23:46:07
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
-- Base de datos: `pepe_fester_produccion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `menu_display` tinyint(1) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `user`, `email`, `password`, `role`, `menu_display`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@wozial.com', '$2a$10$4RkbKKmavc66IzEvXM6Ek.gH9H.aqsX9F4HWL75ts0ydOChZWvSKy', 1, 1, 1, '7bcbWneSubNyaE2pGrIcVCozYm8yAXH4dmNiQyaBOYKJuQxNGFQQdNWIMgQU', '2020-10-14 23:24:37', '2020-10-14 23:24:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusels`
--

CREATE TABLE `carrusels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrusels`
--

INSERT INTO `carrusels` (`id`, `titulo`, `subtitulo`, `image`, `url`, `video`, `orden`) VALUES
(45, NULL, NULL, 'aBmNFdh4PLIVTBD5KCbLapbzfebHdI.png', NULL, NULL, 666),
(46, NULL, NULL, 'wGFhlfZIM8LaF18g2MwavkJ1iknL3x.png', NULL, NULL, 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT 'Edit categoria',
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'categoría01.png',
  `parent` int(11) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `slug`, `image`, `parent`, `activo`, `orden`) VALUES
(10, 'Categoria 1', NULL, 'cQA2pT4Uz0CwJRnWTbSnQvMHGZ1yBp.png', 0, 1, 666),
(11, 'Categoria 2', NULL, 'OSSNRGFQfOPMp7tfCQtqlcHakiLFmz.png', 0, 1, 666),
(12, 'Categoria 3', NULL, 'VEgfUonk6WjK4EdgVnkTqJ5k7zLoCE.png', 0, 1, 666),
(13, 'Categoria 4', NULL, 'GByZzQdVlSWPZRkeYPek7j9n3csqMj.png', 0, 1, 666),
(14, 'categoria 5', NULL, 'kPDF8tQ8fLN2t7ESRt1MjAXVlZF7kU.png', 0, 1, 666),
(16, 'Alexis israel', NULL, 'HMU1Lq94XD10mVgkoRu58IeTgIJWmo.jpg', 0, 1, 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_detalles`
--

CREATE TABLE `categoria_detalles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `sub_descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `color` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id`, `nombre`, `color`, `created_at`, `updated_at`) VALUES
(1, 'azul', '#0015ff', '2023-08-15 16:00:54', '2023-08-15 16:00:54'),
(2, 'rojo', '#ff0000', '2023-08-15 16:03:39', '2023-08-15 16:03:39'),
(3, 'amarillo', '#908711', '2023-08-15 21:13:34', '2023-08-15 21:13:34'),
(4, 'morado', '#aa00ff', '2023-08-15 23:30:50', '2023-08-15 23:30:50'),
(5, 'morado', '#9c27b0', '2023-09-06 22:05:24', '2023-09-06 22:05:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracions`
--

CREATE TABLE `configuracions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `prodspag` varchar(255) DEFAULT NULL,
  `paypalemail` varchar(255) DEFAULT NULL,
  `destinatario` varchar(255) DEFAULT NULL,
  `destinatario2` varchar(255) DEFAULT NULL,
  `remitente` varchar(255) DEFAULT NULL,
  `remitentepass` varchar(255) DEFAULT NULL,
  `remitentehost` varchar(255) DEFAULT NULL,
  `remitenteport` varchar(6) DEFAULT NULL,
  `remitenteseguridad` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `whatsapp2` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `envio` varchar(255) DEFAULT NULL,
  `envioglobal` varchar(255) DEFAULT NULL,
  `iva` varchar(255) DEFAULT NULL,
  `incremento` varchar(255) DEFAULT NULL,
  `mapa` text DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configuracions`
--

INSERT INTO `configuracions` (`id`, `title`, `description`, `prodspag`, `paypalemail`, `destinatario`, `destinatario2`, `remitente`, `remitentepass`, `remitentehost`, `remitenteport`, `remitenteseguridad`, `telefono`, `whatsapp`, `whatsapp2`, `facebook`, `instagram`, `youtube`, `linkedin`, `envio`, `envioglobal`, `iva`, `incremento`, `mapa`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'Pepe Fester', 'Descripcion del sitio.', NULL, NULL, 'michaelwozial@gmail.com', 'michaelwozial@outlook.com', 'pepe_fester_admin@proyectoswozial.com', '?a6VJe%KnJnt', 'mail.proyectoswozial.com', '465', NULL, '3333333333', '32323', '', 'https://www.facebook.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.26095032911!2d-100.3780338847383!3d20.57739830840845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d344c63af2b2af%3A0x8506d3bdeed8e510!2sAv.%20Luis%20Vega%20Monrroy%20901A%2C%20zona%20dos%20extendida%2C%20Plazas%20del%20Sol%201ra%20Secc%2C%2076099%20Santiago%20de%20Quer%C3%A9taro%2C%20Qro.!5e0!3m2!1ses-419!2smx!4v1635149990350!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Avenida Lapizlazuli 2074 int3. Residencial Victoria, Guadalajara, Jalisco, México.', NULL, '2023-11-18 02:17:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `calle` varchar(255) DEFAULT NULL,
  `numext` varchar(255) DEFAULT NULL,
  `numint` varchar(255) DEFAULT NULL,
  `entrecalles` varchar(255) DEFAULT NULL,
  `colonia` varchar(255) DEFAULT NULL,
  `cp` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `estado_code` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT 'Mexico',
  `favorito` tinyint(1) DEFAULT NULL,
  `user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `domicilios`
--

INSERT INTO `domicilios` (`id`, `alias`, `calle`, `numext`, `numint`, `entrecalles`, `colonia`, `cp`, `municipio`, `estado`, `estado_code`, `pais`, `favorito`, `user`, `created_at`, `updated_at`) VALUES
(1, 'Alexis Garcia R', 'Faro faro', '3016', NULL, 'Arrecife y lapizlazuli', 'Satnta Eduwiges', '44580', 'Guadalajara', 'Jalisco', NULL, 'Mexico', NULL, 4, '2023-08-18 14:32:46', '2023-09-06 22:12:02'),
(2, 'Jesus R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mexico', NULL, 7, '2023-08-21 13:10:52', '2023-08-21 13:11:01'),
(3, 'Abel', 'Cordillera', '1313', NULL, 'Perla', 'Independencia', '4440', 'Guadalajara', 'Jalisco', NULL, 'Mexico', NULL, 8, '2023-08-23 23:35:09', '2023-08-23 23:42:06'),
(4, 'Michael', 'Av. Siempre viva', '23', '22', 'uno y dos', 'bonita', '44344', 'Guadalajara', 'Jalisco', NULL, 'Mexico', NULL, 9, '2023-10-19 23:29:07', '2023-11-07 22:56:37'),
(5, 'Wozial', 'Av. Lapizlazuli', '2074', '3', 'Av. Esmeralda y Perla', 'Victoria', '33224', 'Guadalajara', 'Jalisco', NULL, 'Mexico', NULL, 10, '2023-12-12 20:25:48', '2023-12-12 20:27:54'),
(6, 'A', 'c', '12', '33333333535454', 'ee', 'ina', '11223', 'aa', 'a', NULL, 'Mexico', NULL, 11, '2023-12-13 02:29:52', '2023-12-13 02:41:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `elemento` varchar(255) NOT NULL,
  `texto` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `contenido` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `seccion` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `elementos`
--

INSERT INTO `elementos` (`id`, `elemento`, `texto`, `imagen`, `url`, `contenido`, `activo`, `orden`, `seccion`) VALUES
(58, 'fester logo', NULL, 'LAqH3g7AaRNrk3rtkTzA0Mq9TnZvib.png', NULL, 1, 1, 666, 1),
(59, 'fester imagen', NULL, 'wOSsOekkSZRADeST4DuGzMGycKiIRd.png', NULL, 1, 1, 666, 1),
(60, 'fester titulo', 'SERVICIOS DE APLICACIÓN', NULL, NULL, 0, 1, 666, 1),
(61, 'fester texto', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto laboriosam consectetur doloremque. Architecto quae fugiat in assumenda corrupti accusamus nobis eveniet animi. Ut dolores quidem, veniam dolore voluptate eveniet delectus beatae atque rem sapiente temporibus nemo reprehenderitex explicabo provident.', NULL, NULL, 0, 1, 666, 1),
(64, 'contacto texto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam sit earum unde aspernatur optio, ipsum nesciunt! Molestias, inventore? Error, minima.3233fd\n                            22', NULL, NULL, 0, 1, 666, 1),
(65, 'tienda', NULL, NULL, NULL, 0, 1, 666, 2),
(66, 'proyectos texto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam sit earum unde aspernatur optio, ipsum nesciunt! Molestias, inventore? Error, minima.ds', NULL, NULL, 0, 1, 666, 3),
(67, 'contacto texto', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores qui sint alias nostrum, voluptatibus nisi!', NULL, NULL, 0, 1, 666, 4),
(68, 'contacto correo', NULL, 'zo4ktx3KsO6Ml6dyDqOqxJizxzTGwc.png', NULL, 0, 1, 666, 1),
(69, 'contacto direccion', NULL, NULL, NULL, 0, 1, 666, 4),
(70, 'contacto telefono', NULL, NULL, NULL, 0, 1, 666, 4),
(71, 'contacto whatsapp', NULL, NULL, NULL, 0, 1, 666, 4),
(72, 'contacto facebook', NULL, NULL, NULL, 0, 1, 666, 4),
(73, 'contacto instagram', NULL, NULL, NULL, 0, 1, 666, 4),
(74, 'contacto mapa', NULL, NULL, NULL, 0, 1, 666, 4),
(75, 'soluciones texto', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', NULL, NULL, 0, 1, 666, 5),
(76, 'punto de venta texto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto explicabo numquam ipsam quia molestiae veritatis eum corporis hic eos delectus?s', NULL, NULL, 0, 1, 666, 6),
(77, 'subdistribuidor portada', NULL, 'U4hx8dJdznPrdSRVdGECy6tGJpMrCD.png', NULL, 1, 1, 666, 7),
(78, 'subdistribuidor texto', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto laboriosam consectetur doloremque. Architecto quae fugiat in assumenda corrupti accusamus nobis eveniet animi. Ut dolores quidem, veniam dolore voluptate eveniet delectus beatae atque rem sapiente temporibus nemo reprehenderit quibusdam consequuntur nam accusamus autem maxime error! Corrupti dicta velit ex explicabo provident.dfs22', NULL, NULL, 0, 1, 666, 7),
(79, 'nosotros portada', NULL, 'uyCA6lDTT5Ild7JLpBpmMlJX1A9KAR.png', NULL, 1, 1, 666, 8),
(80, 'nosotros texto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, non! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam impedit laudantium animi deserunt ullam alias aperiam, amet, consequatur suscipit id quae iusto sint quam explicabo ut modi libero. Recusandae est numquam corporis saepe repellat sunt, tenetur culpa quis suscipit nesciunt quod esse quam facilis ipsam quaerat laudantium, libero consequatur modi.1', NULL, NULL, 0, 1, 666, 8),
(83, 'Misión - icono', NULL, 'kjGnbokJlWuQ2mj1gVENGIEGqIVnay.png', NULL, 1, 1, 666, 8),
(84, 'Misión - Imagen', NULL, 'WQofY0ZBhqLziJrvV5X7y9OFEbENO6.png', NULL, 1, 1, 666, 8),
(85, 'Misión - Titulo', 'MISIÓN1', NULL, NULL, 0, 1, 666, 8),
(86, 'Misión - Texto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum in reprehenderit ipsam aliquid, aut consequuntur officia perferendis quod eaque dignissimos!1', NULL, NULL, 0, 1, 666, 8),
(87, 'Valores - Icono', NULL, 'htgjl0hRuGIBXzbyuJpAPp09xLvyNb.png', NULL, 1, 1, 666, 8),
(88, 'Valores - Imagen', NULL, 'wzJzSr95yfk6M05IVRunrwayjHbat7.png', NULL, 1, 1, 666, 8),
(89, 'Valores - Titulo', 'VALORES1', NULL, NULL, 0, 1, 666, 8),
(90, 'Valores - Texto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum in reprehenderit ipsam aliquid, aut consequuntur officia perferendis quod eaque dignissimos!1', NULL, NULL, 0, 1, 666, 8),
(91, 'Visión - Icono', NULL, '21UKIHPonc3V6NT7eIUdLR16YFYHSP.png', NULL, 1, 1, 666, 8),
(92, 'Visión - Imagen', NULL, 'v4OuWWMXjII7oOh8StCzRQWqWQH3gb.png', NULL, 1, 1, 666, 8),
(93, 'Visión - Titulo', 'VISIÓN1', '', NULL, 0, 1, 666, 8),
(94, 'Visión - Texto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum in reprehenderit ipsam aliquid, aut consequuntur officia perferendis quod eaque dignissimos!1', NULL, NULL, 0, 1, 666, 8),
(95, 'nosotros portada 2', NULL, 'UZskMR6bwbdUaquZ7EWiblPunr097y.png', NULL, 1, 1, 666, 8),
(96, 'nosotros texto 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, non! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam impedit laudantium animi deserunt ullam alias aperiam, amet, consequatur suscipit id quae iusto sint quam explicabo ut modi libero. Recusandae est numquam corporis saepe repellat sunt, tenetur culpa quis suscipit nesciunt quod esse quam facilis ipsam quaerat laudantium, libero consequatur modi.1', NULL, NULL, 0, 1, 666, 8),
(97, 'contacto imagen', NULL, '1VPwrDgZkWDUNzHw0t6UiKbqUNpiRu.png', NULL, 1, 1, 666, 4),
(98, 'Contacto Imagen Home', NULL, 'cZw2NtUhMj13D71FZCcQ9bz9EGh8xl.png', NULL, 1, 1, 666, 1),
(99, 'mapa contacto', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16761.18441515513!2d-103.43609324626344!3d20.664317983074593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428aea94a0b5af5%3A0x9638b3c7e65a7b39!2sMetropolitano%2C%20P.%C2%BA%20del%20Sereno%2C%20Parque%20Sereno%2C%20Rinconada%20del%20Parque%2C%2045030%20Zapopan%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1699368099741!5m2!1ses-419!2smx', NULL, NULL, 0, 1, 666, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `imagen`, `titulo`, `subtitulo`, `descripcion`, `whatsapp`, `facebook`, `instagram`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'E3KevLhtepFk8skHlpXCq62nuDTp5d.png', 'Soy Alejandra', 'Acesor Profecional', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam numquam modi quibusdam repellat exercitationem laborum dolorem eum fugit mollitia ad?a', NULL, NULL, NULL, 0, 1, 666, NULL, NULL),
(2, 'imagen_04.png', 'Soy Alejandra', 'Acesor Profecional', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam numquam modi quibusdam repellat exercitationem laborum dolorem eum fugit mollitia ad?', NULL, NULL, NULL, 0, 1, 666, NULL, NULL),
(3, 'imagen_04.png', 'Soy Alejandra', 'Acesor Profecionall', 'Lorem ipsum dolor sit, amet aconsectetur adipisicing elit. Ullam numquam modi quibusdam repellat exercitationem laborum dolorem eum fugit mollitia ad?', NULL, NULL, NULL, 0, 1, 666, NULL, NULL),
(4, 'imagen_04.png', 'Soy Alejandra', 'Acesor Profecional', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam numquam modi quibusdam repellat exercitationem laborum dolorem eum fugit mollitia ad?', NULL, NULL, NULL, 0, 1, 666, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rfc` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `razon_social` varchar(255) DEFAULT NULL,
  `calle` varchar(255) DEFAULT NULL,
  `numext` varchar(255) DEFAULT NULL,
  `numint` varchar(255) DEFAULT NULL,
  `colonia` varchar(255) DEFAULT NULL,
  `cp` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `rfc`, `mail`, `razon_social`, `calle`, `numext`, `numint`, `colonia`, `cp`, `municipio`, `estado`, `user`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta` text NOT NULL,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `faqs`
--

INSERT INTO `faqs` (`id`, `pregunta`, `respuesta`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'primera', '<p>ddsssssssssssssss dsssssss</p>', 666, '2023-11-08 22:59:14', '2023-11-08 22:59:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas`
--

CREATE TABLE `herramientas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icono` varchar(255) DEFAULT 'icono1.png',
  `titulo` varchar(255) DEFAULT 'Herramienta nueva',
  `descripcion` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `herramientas`
--

INSERT INTO `herramientas` (`id`, `icono`, `titulo`, `descripcion`, `pdf`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'icono1.png', 'Herramienta nuevaaaa', NULL, 'V8ZnWJGESHITlYcBGqEJ08IAz30Ygh.pdf', 0, 1, 666, NULL, NULL),
(2, 'icono1.png', 'Herramienta nuevaa', NULL, 'VqvDlymGErWHBxs0XkavmT0TOgZgMA.pdf', 0, 1, 666, NULL, NULL),
(3, 'icono1.png', 'Herramienta nuevaa', NULL, NULL, 0, 1, 666, NULL, NULL),
(4, 'icono1.png', 'Herramienta nueva', NULL, NULL, 0, 1, 666, NULL, NULL),
(5, 'icono1.png', 'Herramienta nueva', NULL, NULL, 0, 1, 666, NULL, NULL),
(6, 'icono1.png', 'Herramienta nueva', NULL, NULL, 0, 1, 666, NULL, NULL),
(7, 'icono1.png', 'Herramienta nueva', NULL, NULL, 0, 1, 666, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logoequipos`
--

CREATE TABLE `logoequipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logoequipos`
--

INSERT INTO `logoequipos` (`id`, `imagen`, `titulo`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(3, 'uWiSPJiPILkxlePx6tCKRKVHYxrm44.png', NULL, 0, 1, 666, NULL, NULL),
(5, '7rQxMppmAbWWoiyjyJATdSi8M4VZkJ.png', NULL, 0, 1, 666, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_13_163806_create_admins_table', 1),
(5, '2020_10_14_181530_create_configuracions_table', 1),
(6, '2020_12_08_170359_create_carrusels_table', 1),
(7, '2020_12_09_193424_create_politicas_table', 1),
(8, '2020_12_16_000636_create_faqs_table', 1),
(9, '2021_02_02_175759_create_seccions_table', 1),
(10, '2021_02_02_175823_create_elementos_table', 1),
(13, '2021_10_27_064531_create_categorias_table', 2),
(19, '2021_04_01_184932_create_productos_table', 3),
(20, '2021_04_02_200200_create_productos_photos_table', 3),
(24, '2022_07_18_203052_create_vacantes_table', 4),
(28, '2022_10_26_181015_create_categoria_detalles_table', 5),
(29, '2023_03_27_183730_create_services_table', 5),
(30, '2023_03_28_063647_create_herramientas_table', 6),
(31, '2023_03_28_223646_create_equipos_table', 7),
(32, '2023_03_30_152644_create_logoequipos_table', 8),
(33, '2023_08_15_094644_create_colores_table', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` char(36) NOT NULL,
  `estatus` int(11) DEFAULT NULL,
  `guia` varchar(255) DEFAULT NULL,
  `linkguia` text DEFAULT NULL,
  `domicilio` bigint(20) UNSIGNED NOT NULL,
  `factura` tinyint(1) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `importe` double(9,2) NOT NULL,
  `iva` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL,
  `envio` double(9,2) DEFAULT NULL,
  `comprobante` varchar(255) DEFAULT NULL,
  `cupon` varchar(255) DEFAULT NULL,
  `cancelado` tinyint(1) DEFAULT 0,
  `usuario` bigint(20) UNSIGNED NOT NULL,
  `data` text DEFAULT NULL,
  `envia_resp` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `uid`, `estatus`, `guia`, `linkguia`, `domicilio`, `factura`, `cantidad`, `importe`, `iva`, `total`, `envio`, `comprobante`, `cupon`, `cancelado`, `usuario`, `data`, `envia_resp`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'ord_2usQgqe8yg2U9FmY4', 1, NULL, NULL, 4, NULL, 1, 230.00, 0.00, 230.00, 100.00, NULL, NULL, 0, 9, '{\"22\":{\"id\":22,\"categoria\":7,\"nombre\":\"fdsdsdsdsdsdsdsds\",\"precio\":130,\"descripcion\":\"fdfdfdfdfdfdfd\",\"imagen\":\"XbLFzU2lqz3sRKQ6hXAf6LHFKY7CPu.png\",\"existencias\":1}}', NULL, NULL, '2023-11-08 22:00:03', '2023-11-08 22:00:03'),
(8, 'ord_2usQkhKVKr8wPcaaG', 1, NULL, NULL, 4, NULL, 1, 230.00, 0.00, 230.00, 100.00, NULL, NULL, 0, 9, '{\"22\":{\"id\":22,\"categoria\":7,\"nombre\":\"fdsdsdsdsdsdsdsds\",\"precio\":130,\"descripcion\":\"fdfdfdfdfdfdfd\",\"imagen\":\"XbLFzU2lqz3sRKQ6hXAf6LHFKY7CPu.png\",\"existencias\":1}}', NULL, NULL, '2023-11-08 22:05:05', '2023-11-08 22:05:05'),
(9, 'ord_2usQq9Peu97y1sppF', 1, NULL, NULL, 4, NULL, 1, 230.00, 0.00, 230.00, 100.00, NULL, NULL, 0, 9, '{\"22\":{\"id\":22,\"categoria\":7,\"nombre\":\"fdsdsdsdsdsdsdsds\",\"precio\":130,\"descripcion\":\"fdfdfdfdfdfdfd\",\"imagen\":\"XbLFzU2lqz3sRKQ6hXAf6LHFKY7CPu.png\",\"existencias\":1}}', NULL, NULL, '2023-11-08 22:10:56', '2023-11-08 22:10:56'),
(10, 'ord_2usQyTUfuKhaNEBgs', 1, NULL, NULL, 4, NULL, 1, 1120.22, 0.00, 1120.22, 100.00, NULL, NULL, 0, 9, '{\"24\":{\"id\":24,\"categoria\":8,\"nombre\":\"Proyecto 4\",\"precio\":1020.22,\"descripcion\":\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit\",\"imagen\":\"vk78Qwtc52ORM2Bo4wjQKWRQwPEXBY.jpg\",\"existencias\":1}}', NULL, NULL, '2023-11-08 22:21:48', '2023-11-08 22:21:48'),
(11, 'ord_2usR3q2JABp72mmpt', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-08 22:27:32', '2023-11-08 22:27:32'),
(12, 'ord_2usR4WFCDqmPFYAhS', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-08 22:28:26', '2023-11-08 22:28:26'),
(13, 'ord_2usR7ptL9hvsFvWCh', 1, NULL, NULL, 4, NULL, 1, 230.00, 0.00, 230.00, 100.00, NULL, NULL, 0, 9, '{\"22\":{\"id\":22,\"categoria\":7,\"nombre\":\"fdsdsdsdsdsdsdsds\",\"precio\":130,\"descripcion\":\"fdfdfdfdfdfdfd\",\"imagen\":\"XbLFzU2lqz3sRKQ6hXAf6LHFKY7CPu.png\",\"existencias\":1}}', NULL, NULL, '2023-11-08 22:32:47', '2023-11-08 22:32:47'),
(14, 'ord_2usS64AjM5TnvYpMA', 1, NULL, NULL, 4, NULL, 1, 330.23, 0.00, 330.23, 100.00, NULL, NULL, 0, 9, '{\"23\":{\"id\":23,\"categoria\":7,\"nombre\":\"producto 3\",\"precio\":230.23,\"descripcion\":\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit\",\"imagen\":\"U7VRTQm1rKb9nfvYHe4n8WyDXuMAxW.jpg\",\"existencias\":1}}', NULL, NULL, '2023-11-08 23:46:25', '2023-11-08 23:46:25'),
(15, 'ord_2usS82sQZRZPzFKAU', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-08 23:48:58', '2023-11-08 23:48:58'),
(16, 'ord_2usS8rAm3Dmt7rZSR', 1, NULL, NULL, 4, NULL, 1, 1120.22, 0.00, 1120.22, 100.00, NULL, NULL, 0, 9, '{\"24\":{\"id\":24,\"categoria\":8,\"nombre\":\"Proyecto 4\",\"precio\":1020.22,\"descripcion\":\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit\",\"imagen\":\"vk78Qwtc52ORM2Bo4wjQKWRQwPEXBY.jpg\",\"existencias\":1}}', NULL, NULL, '2023-11-08 23:50:03', '2023-11-08 23:50:03'),
(17, 'ord_2usSARm86rwPcSHgH', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-08 23:52:08', '2023-11-08 23:52:08'),
(18, 'ord_2usSBBGhKhnbbRWnv', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-08 23:53:06', '2023-11-08 23:53:06'),
(19, 'ord_2usSCTtDQm1BgsrkE', 1, NULL, NULL, 4, NULL, 1, 1120.22, 0.00, 1120.22, 100.00, NULL, NULL, 0, 9, '{\"24\":{\"id\":24,\"categoria\":8,\"nombre\":\"Proyecto 4\",\"precio\":1020.22,\"descripcion\":\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit\",\"imagen\":\"vk78Qwtc52ORM2Bo4wjQKWRQwPEXBY.jpg\",\"existencias\":1}}', NULL, NULL, '2023-11-08 23:54:47', '2023-11-08 23:54:47'),
(20, 'ord_2usSF7UJPGswjQ8Ls', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-08 23:58:16', '2023-11-08 23:58:16'),
(21, 'ord_2usSNTNceLXMYZR52', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-09 00:07:52', '2023-11-09 00:07:52'),
(22, 'ord_2usSPeT2vbQK9mzN6', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-09 00:09:26', '2023-11-09 00:09:26'),
(23, 'ord_2usSRnkMuXpMLz7Ea', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-09 00:12:13', '2023-11-09 00:12:13'),
(24, 'ord_2usST9sNwsPdFCxev', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-09 00:14:02', '2023-11-09 00:14:02'),
(25, 'ord_2usSUNk2w1RuJMqdN', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-09 00:15:38', '2023-11-09 00:15:38'),
(26, 'ord_2usSdtZrZgJDxRfPz', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-09 00:28:05', '2023-11-09 00:28:05'),
(27, 'ord_2usSepnGEiRbjrsDW', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-09 00:29:19', '2023-11-09 00:29:19'),
(28, 'ord_2usSgmnPQ8uvTVpQ6', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-09 00:31:53', '2023-11-09 00:31:53'),
(29, 'ord_2usShNrMEJXyCNCst', 1, NULL, NULL, 4, NULL, 2, 2580.44, 0.00, 2580.44, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":2}}', NULL, NULL, '2023-11-09 00:32:39', '2023-11-09 00:32:39'),
(30, 'ord_2usSmQ9FmJQxwZbVS', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-09 00:37:55', '2023-11-09 00:37:55'),
(31, 'ord_2usin6WnmPCSBjbG8', 1, NULL, NULL, 4, NULL, 1, 1340.22, 0.00, 1340.22, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":1}}', NULL, NULL, '2023-11-09 20:53:55', '2023-11-09 20:53:55'),
(32, 'ord_2usjx5XEpHd7zrX19', 1, NULL, NULL, 4, NULL, 3, 2810.67, 0.00, 2810.67, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"existencias\":2},\"23\":{\"id\":23,\"categoria\":7,\"nombre\":\"producto 3\",\"precio\":230.23,\"descripcion\":\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit\",\"imagen\":\"U7VRTQm1rKb9nfvYHe4n8WyDXuMAxW.jpg\",\"existencias\":1}}', NULL, NULL, '2023-11-09 22:22:56', '2023-11-09 22:22:56'),
(33, 'ord_2ut4rMkzw3AmcsnYe', 1, NULL, NULL, 4, NULL, 3, 3820.66, 0.00, 3820.66, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"presentacion\":\"30KG\",\"existencias\":\"3\"}}', NULL, NULL, '2023-11-10 22:18:22', '2023-11-10 22:18:22'),
(34, 'ord_2ut57UFpQtLSYB166', 1, NULL, NULL, 4, NULL, 2, 2580.44, 0.00, 2580.44, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"presentacion\":\"40KG\",\"existencias\":\"2\"}}', NULL, NULL, '2023-11-10 22:38:11', '2023-11-10 22:38:11'),
(35, 'ord_2ut5PebiSQ17EfF67', 1, NULL, NULL, 4, NULL, 2, 2580.44, 0.00, 2580.44, 100.00, NULL, NULL, 0, 9, '{\"15\":{\"id\":15,\"categoria\":7,\"nombre\":\"UNO\",\"precio\":1240.22,\"descripcion\":\"El trozo de texto est\\u00e1ndar de Lorem Ipsum usado desde el a\\u00f1o 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \\\"de Finibus Bonorum et Malorum\\\" por Cicero son tambi\\u00e9n reproducidas en su forma original exacta, acompa\\u00f1adas por versiones en Ingl\\u00e9s de la traducci\\u00f3n realizada en 1914 por H. Rackham.\\nsdsdd\",\"imagen\":\"TlR99kUTNhDk9Svn9XmTWSzrO48kN0.png\",\"presentacion\":\"40KG\",\"existencias\":\"2\"}}', NULL, NULL, '2023-11-10 22:59:22', '2023-11-10 22:59:22'),
(36, 'ord_2uvLj9EWLNuS3sqm7', 1, NULL, NULL, 4, NULL, 4, 9296.00, 0.00, 9296.00, 100.00, NULL, NULL, 0, 9, '{\"29\":{\"id\":29,\"categoria\":\"14\",\"nombre\":\"Fester CR-66\",\"precio\":\"2299.00\",\"descripcion\":\"Impermeabilizante elastom\\u00e9rico base agua de secado r\\u00e1pido\\r\\n\\r\\nFester A es un impermeabilizante elastom\\u00e9rico que debido a su tecnolog\\u00eda de r\\u00e1pido secado, permite hacer la impermeabilizaci\\u00f3n completa en un solo d\\u00eda. Es elaborado a base de resinas acr\\u00edlicas, pigmentos inorg\\u00e1nicos, agregados minerales y aditivos especiales que le proporcionan secado r\\u00e1pido, excelentes caracter\\u00edsticas de impermeabilidad, resistencia a rayos UV, adherencia en superficie humeda, etc.\",\"imagen\":\"u0sV0uVkpMK3LTPNnpaj5VJkS31yl9.png\",\"presentacion\":\"10kg\",\"existencias\":\"1\"},\"28\":{\"id\":28,\"categoria\":\"14\",\"nombre\":\"Fester CR-66\",\"precio\":\"2299.00\",\"descripcion\":\"Impermeabilizante elastom\\u00e9rico base agua de secado r\\u00e1pido\\r\\n\\r\\nFester A es un impermeabilizante elastom\\u00e9rico que debido a su tecnolog\\u00eda de r\\u00e1pido secado, permite hacer la impermeabilizaci\\u00f3n completa en un solo d\\u00eda. Es elaborado a base de resinas acr\\u00edlicas, pigmentos inorg\\u00e1nicos, agregados minerales y aditivos especiales que le proporcionan secado r\\u00e1pido, excelentes caracter\\u00edsticas de impermeabilidad, resistencia a rayos UV, adherencia en superficie humeda, etc.\",\"imagen\":\"Fvootlr5PsrzDmoSWojiT6L5ahwX8V.png\",\"presentacion\":\"20kg\",\"existencias\":3}}', NULL, NULL, '2023-11-17 21:13:31', '2023-11-17 21:13:31'),
(37, 'ord_2v4Z8xWnagLJafTnq', 1, NULL, NULL, 5, NULL, 3, 2700.00, 0.00, 2700.00, 100.00, NULL, NULL, 0, 10, '{\"37\":{\"id\":37,\"categoria\":\"18\",\"nombre\":\"Fester Epoxine 100\",\"precio\":\"1000.00\",\"descripcion\":\"Recubrimiento ep\\u00f3xico termofijo, poliam\\u00eddico de 2 componentes, con solventes y aditivos, que al mezclarse producen un compuesto de baja viscosidad que una vez aplicado forma una capa protectora y decorativa con propiedades de durabilidad.\",\"imagen\":\"XJ6CyYRHpDA2loYOlZ3nhbdu4r4fjf.png\",\"presentacion\":\"4L con 830ml\",\"existencias\":\"2\"},\"39\":{\"id\":39,\"categoria\":\"14\",\"nombre\":\"Imperf\\u00e1cil Repelente de Agua\",\"precio\":\"600.00\",\"descripcion\":\"Emulsi\\u00f3n protectora de superficies base agua\\r\\n\\r\\nEs una emulsi\\u00f3n base agua que crea una barrera protectora impermeable que impide el paso del agua a trav\\u00e9s de las superficies porosas.\",\"imagen\":\"AMbyhjl8wXGrz9q26QFbzMaiclH8kW.png\",\"presentacion\":\"3.8L\",\"existencias\":\"1\"}}', NULL, NULL, '2023-12-13 00:14:00', '2023-12-13 00:14:00'),
(38, 'ord_2v4b6g9MC5sSR4KKz', 1, NULL, NULL, 6, NULL, 1, 1100.00, 0.00, 1100.00, 100.00, NULL, NULL, 0, 11, '{\"37\":{\"id\":37,\"categoria\":\"18\",\"nombre\":\"Fester Epoxine 100\",\"precio\":\"1000.00\",\"descripcion\":\"Recubrimiento ep\\u00f3xico termofijo, poliam\\u00eddico de 2 componentes, con solventes y aditivos, que al mezclarse producen un compuesto de baja viscosidad que una vez aplicado forma una capa protectora y decorativa con propiedades de durabilidad.\",\"imagen\":\"XJ6CyYRHpDA2loYOlZ3nhbdu4r4fjf.png\",\"presentacion\":\"4L con 3.17L\",\"existencias\":\"1\"}}', NULL, NULL, '2023-12-13 02:42:53', '2023-12-13 02:42:53'),
(39, 'ord_2v4d6zLh6zcVNHeYu', 1, NULL, NULL, 6, NULL, 1, 700.00, 0.00, 700.00, 100.00, NULL, NULL, 0, 11, '{\"39\":{\"id\":39,\"categoria\":\"14\",\"nombre\":\"Imperf\\u00e1cil Repelente de Agua\",\"precio\":\"600.00\",\"descripcion\":\"Emulsi\\u00f3n protectora de superficies base agua\\r\\n\\r\\nEs una emulsi\\u00f3n base agua que crea una barrera protectora impermeable que impide el paso del agua a trav\\u00e9s de las superficies porosas.\",\"imagen\":\"AMbyhjl8wXGrz9q26QFbzMaiclH8kW.png\",\"presentacion\":\"1L\",\"existencias\":\"1\"}}', NULL, NULL, '2023-12-13 05:15:11', '2023-12-13 05:15:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_detalles`
--

CREATE TABLE `pedido_detalles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double(9,2) NOT NULL,
  `importe` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL,
  `pedido` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `color` bigint(20) UNSIGNED DEFAULT NULL,
  `log` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE `politicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `politicas`
--

INSERT INTO `politicas` (`id`, `titulo`, `descripcion`, `archivo`, `created_at`, `updated_at`) VALUES
(1, 'Aviso de Privacidad', NULL, NULL, NULL, '2022-03-31 17:19:19'),
(2, 'Métodos de Pago', NULL, NULL, NULL, NULL),
(3, 'Devoluciones', NULL, NULL, NULL, NULL),
(4, 'Terminos y Condiciones', NULL, NULL, NULL, NULL),
(5, 'Garantias', NULL, NULL, NULL, NULL),
(6, 'Políticas de Envio', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentaciones_productos`
--

CREATE TABLE `presentaciones_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `presentacion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT 'Producto nuevo',
  `descripcion` text DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `portada` varchar(255) DEFAULT 'producto_01.png',
  `pdf` varchar(255) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` varchar(255) DEFAULT '$0.00',
  `color` int(11) DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria`, `portada`, `pdf`, `cantidad`, `precio`, `color`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(41, 'Producto Nuevo', 'Si no sabes qué es Amazon Renewed o productos reacondicionados o renovados de Amazon, ve mi experiencia de compra en este video porque gracias a ello puedes comprar celulares, videojuegos, televisores, relojes inteligentes, tablets, computadoras y más tecnología de forma segura y económica.', '10', 'Vba0fT6YTSAurKK5nhpGpfhemmypm3.png', NULL, 0, '1000', 2, 0, 1, 666, '2023-08-15 22:18:04', '2023-09-06 21:45:26'),
(42, 'Producto nuevo', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', '11', 'QyOMXMycVYRqcwt4cOM1myc9siQXnm.png', NULL, 0, '100', 4, 1, 1, 666, '2023-08-16 06:40:42', '2023-09-06 22:06:01'),
(43, 'Nuevo producto', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', '12', 'j82pZ7nWisc4nWMsFU2GaOsZibJt4a.png', NULL, 3, '4000', 1, 1, 1, 666, '2023-08-16 06:41:37', '2023-08-21 08:30:06'),
(44, 'Producto nuevo', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', '10', '125MYWliSIDRrKN1JcYMewHAELeUK5.png', NULL, 4, '4000', 3, 1, 1, 666, '2023-08-16 06:42:45', '2023-08-21 08:30:07'),
(45, 'Producto nuevo', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', '10', 'Jf5WBgAtLq2lGmqgmDmHlXtUk9LoWC.png', NULL, 6, '4000', 1, 1, 1, 666, '2023-08-16 06:43:13', '2023-08-21 08:30:25'),
(46, 'Producto nuevo', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', '10', 'ILlnt4Vt6n0umkEsGH01Jj68DYbMjk.png', NULL, 10, '4000', 4, 1, 1, 666, '2023-08-16 06:43:51', '2023-08-21 16:54:34'),
(47, 'Producto nuevo', 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final', '14', 'ch5oJEXKERGkqBNRC6BKpj972tdv2h.png', NULL, 4, '4000', 4, 1, 1, 666, '2023-08-16 06:44:29', '2023-09-06 21:45:05'),
(49, 'Perrito huevo', 'descripcion de mi perrito', '12', 'q9v3zSutfQbA6ksrpcXrw3Yo08Ptyl.png', NULL, 9, '50', 5, 0, 1, 666, '2023-09-06 22:07:34', '2023-09-06 22:11:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_photos`
--

CREATE TABLE `productos_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos_photos`
--

INSERT INTO `productos_photos` (`id`, `producto`, `titulo`, `image`, `orden`) VALUES
(21, 34, NULL, 'XoIafc4wHYCS78YxMNFh3ANqW1u1TP.png', 666),
(22, 36, NULL, 'oyVDQb3T19zLoJqHywOFePvll0R2R8.png', 666),
(29, 41, NULL, 'CZmbC3ssxkZ7yGsm25KNdAzGxYNc4P.jpg', 666),
(30, 41, NULL, 'QfoYsPPKAv84LIZY2jQCWl8MxndMNI.jpg', 666),
(31, 41, NULL, 'DtnGMTU21qnqGFBkS6RDIoAeWZwxoE.jpg', 666),
(32, 49, NULL, 'eYfvigh4SocJhT8cs7TsA61kFH0zPd.png', 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_presentacions`
--

CREATE TABLE `producto_presentacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tamanio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_relacions`
--

CREATE TABLE `producto_relacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `otroProducto` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_sizes`
--

CREATE TABLE `producto_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tamanio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_variantes`
--

CREATE TABLE `producto_variantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `presentacion` bigint(20) UNSIGNED NOT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `precio` varchar(255) NOT NULL,
  `descuento` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `tipo_envio` varchar(255) DEFAULT NULL,
  `peso` varchar(255) DEFAULT NULL,
  `largo` varchar(255) DEFAULT NULL,
  `ancho` varchar(255) DEFAULT NULL,
  `alto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_categoria_productos`
--

CREATE TABLE `p_f_categoria_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `icono` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_f_categoria_productos`
--

INSERT INTO `p_f_categoria_productos` (`id`, `categoria`, `icono`, `aux`, `created_at`, `updated_at`) VALUES
(14, 'Impermeabilizante', 'LzXRdnvR3auU9TrHDx76eQvV3R53lr.png', NULL, '2023-11-16 21:56:59', '2023-11-17 21:49:06'),
(15, 'Adhesivos de concreto', 'i3pRSMlRgNCUnJTRvxcwhWmIwjgwxk.png', NULL, '2023-11-16 21:57:46', '2023-11-16 23:20:44'),
(16, 'Auxiliares y aditivos de concreto', 'zSTuNClXnWLulogjsvCQQDvX0vX4kf.png', NULL, '2023-11-16 21:58:08', '2023-11-16 23:20:58'),
(17, 'Grounts y anclajes', 'qaeLcT3zMM5HEUePLfYOCitwnoJgOx.png', NULL, '2023-11-16 21:58:30', '2023-11-16 23:21:10'),
(18, 'Selladores y resanadores', 'B0KOqpzwgdXO6IKaOftOrs6dVhTQtf.png', NULL, '2023-11-16 21:58:49', '2023-11-16 23:21:25'),
(19, 'Otra categoria', 'PtaaBpkVD1eEqzb3ZmDykYa9JavCNG.png', NULL, '2023-11-16 21:59:04', '2023-11-16 23:21:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_galerias`
--

CREATE TABLE `p_f_galerias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `galeria` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_galeria_producto_imagenes`
--

CREATE TABLE `p_f_galeria_producto_imagenes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `galeria` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_necesidades`
--

CREATE TABLE `p_f_necesidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_sector` int(11) DEFAULT NULL,
  `sector` text DEFAULT NULL,
  `necesidades` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_f_necesidades`
--

INSERT INTO `p_f_necesidades` (`id`, `tipo_sector`, `sector`, `necesidades`, `created_at`, `updated_at`) VALUES
(1, 1, 'hogar', 'Lorem, Lorem ipsum dolor sit amet. ipsum dolor sit amet consectetur adipisicing elit. Facere ducimus sed deserunt, porro nam voluptatem.sdsdsd1', '2023-10-31 00:56:22', '2023-11-18 02:33:30'),
(2, 1, 'hogar', 'Lorem, Lorem ipsum dolor sit amet. ipsum dolor sit amet consectetur adipisicing elit. Facere ducimus sed deserunt, porro nam voluptatem.1', '2023-10-31 02:24:17', '2023-11-18 02:33:32'),
(3, 2, 'privado', 'Lorem, Lorem ipsum dolor sit amet. ipsum dolor sit amet consectetur adipisicing elit. Facere ducimus sed deserunt, porro nam voluptatem.sdsdsds1', '2023-10-31 02:24:28', '2023-11-18 02:34:09'),
(5, 2, 'privado', 'Lorem, Lorem ipsum dolor sit amet. ipsum dolor sit amet consectetur adipisicing elit. Facere ducimus sed deserunt, porro nam voluptatem.1', '2023-10-31 02:24:42', '2023-11-18 02:34:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_presentacion_productos`
--

CREATE TABLE `p_f_presentacion_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `presentacion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_f_presentacion_productos`
--

INSERT INTO `p_f_presentacion_productos` (`id`, `producto`, `presentacion`, `created_at`, `updated_at`) VALUES
(47, 37, '4L con 3.17L', '2023-12-12 21:05:39', '2023-12-12 21:05:39'),
(48, 37, '4L con 830ml', '2023-12-12 21:05:39', '2023-12-12 21:05:39'),
(50, 39, '1L', '2023-12-12 21:16:58', '2023-12-12 21:16:58'),
(51, 39, '3.8L', '2023-12-12 21:16:58', '2023-12-12 21:16:58'),
(52, 40, '10 kg', '2023-12-12 21:35:25', '2023-12-12 21:35:25'),
(53, 41, '25 m', '2023-12-12 21:46:24', '2023-12-12 21:46:24'),
(54, 42, '300ml', '2023-12-12 22:23:08', '2023-12-12 22:23:08'),
(55, 43, '19L', '2023-12-12 22:27:37', '2023-12-12 22:27:37'),
(56, 43, '200L', '2023-12-12 22:27:37', '2023-12-12 22:27:37'),
(57, 44, '19 L', '2023-12-12 22:36:21', '2023-12-12 22:36:21'),
(58, 45, '19 L', '2023-12-12 22:42:47', '2023-12-12 22:42:47'),
(59, 46, '3 años: Cubeta 4L y cubeta 19L', '2023-12-12 22:49:15', '2023-12-12 22:49:15'),
(60, 46, '5 años: Cubeta 4L y cubeta 19L', '2023-12-12 22:49:15', '2023-12-12 22:49:15'),
(61, 46, '7 años: Cubeta 19L', '2023-12-12 22:49:15', '2023-12-12 22:49:15'),
(62, 47, '19L', '2023-12-12 22:54:16', '2023-12-12 22:54:16'),
(63, 48, '1 L', '2023-12-12 23:00:31', '2023-12-12 23:00:31'),
(64, 49, 'Complementos', '2023-12-12 23:52:10', '2023-12-12 23:52:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_productos`
--

CREATE TABLE `p_f_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `precio` double(8,2) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `existencias` int(11) DEFAULT NULL,
  `presentacion` varchar(255) DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `inicio` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_f_productos`
--

INSERT INTO `p_f_productos` (`id`, `categoria`, `nombre`, `precio`, `descripcion`, `existencias`, `presentacion`, `imagen`, `inicio`, `created_at`, `updated_at`) VALUES
(37, 18, 'Fester Epoxine 100', 1000.00, 'Recubrimiento epóxico termofijo, poliamídico de 2 componentes, con solventes y aditivos, que al mezclarse producen un compuesto de baja viscosidad que una vez aplicado forma una capa protectora y decorativa con propiedades de durabilidad.', 0, NULL, 'XJ6CyYRHpDA2loYOlZ3nhbdu4r4fjf.png', 1, '2023-12-12 21:05:39', '2023-12-13 02:42:53'),
(39, 14, 'Imperfácil Repelente de Agua', 600.00, 'Emulsión protectora de superficies base agua\r\n\r\nEs una emulsión base agua que crea una barrera protectora impermeable que impide el paso del agua a través de las superficies porosas.', 3, NULL, 'AMbyhjl8wXGrz9q26QFbzMaiclH8kW.png', 1, '2023-12-12 21:16:58', '2023-12-13 05:15:11'),
(40, 16, 'Fester CM-100', NULL, 'Mortero anticorrosivo para tratamiento del acero de refuerzo utilizado en elementos de concreto.\r\n\r\nMortero a base de cemento, agregados minerales, resinas en polvo de alta calidad e inhibidores de corrosión que protegen el acero de refuerzo utilizado en elementos estructurales de concreto.', NULL, NULL, 'qfubq4KePOOfHebF9W49ePDg6UzYDh.png', 1, '2023-12-12 21:35:25', '2023-12-12 21:35:35'),
(41, 17, 'Banda Ojillada de PVC', NULL, 'Sello retenedor de agua en juntas frías por diseño constructivo en elementos de concreto.\r\n\r\nBanda fabricada a base de cloruro de polivinilo (PVC) en forma de tira continua de gran flexibilidad y elasticidad. Su diseño consta de dos semibultos laterales y un bulto central que permiten soportar movimientos de las estructuras.', NULL, NULL, 'VxhTUrNNxpMjFrAHjy0lSJlMPGsosE.png', 1, '2023-12-12 21:46:24', '2023-12-12 21:48:23'),
(42, 18, 'Fester CF 890', NULL, 'Sistema de fijación profesional fórmula poliéster.\r\n\r\nEl sistema de anclaje químico Fester CF 890 es una resina poliéster de última generación ideal para anclar cargas pesadas a elementos difíciles de construcción tales como: roca, concreto, block (bloque) y materiales porosos.', NULL, NULL, '6ZbXKwJMsFwGXpJX6ul1dM60CoWvEL.png', 0, '2023-12-12 22:23:08', '2023-12-12 22:43:12'),
(43, 18, 'Fester Curafest MC 330', NULL, 'Sellador Acrílico para curar concreto o morteros al retirar la cimbra.\r\n\r\nLíquido viscoso color blanco formulado con resinas acrílicas, diseñado para curar concretos o morteros al retirar la cimbra, habiendo transcurrido entre 16 y 24 horas, formando una película que tarda la evaporación del agua remanente', 1, NULL, 'Tl3PD7rD80ZCO3OOYRjrPmEhWVmvkJ.png', 0, '2023-12-12 22:27:37', '2023-12-12 22:43:11'),
(44, 14, 'Fester Acriton ProShield', NULL, 'Impermeabilizante acrílico elastomérico base agua de secado extra rápido que revoluciona la tecnología logrando el mejor balance de propiedades mecánicas; además de secado extra rápido* y propiedades de hidro-repelencia y perleo con tecnología Proshield®.', NULL, NULL, 'chDAGV5S4ShlaWnIbMSBCHOzFYTsSv.png', 0, '2023-12-12 22:36:21', '2023-12-12 22:36:21'),
(45, 15, 'Fester AD', NULL, 'Adhesivo de usos múltiples.\r\n\r\nAdhesivo líquido base agua de color blanco para uso en interiores, formulado con resinas de PVA.', NULL, NULL, 'sF93uzsg9GjmdvfFPzHYPyPKmkr1yV.png', 0, '2023-12-12 22:42:47', '2023-12-12 22:42:47'),
(46, 14, 'Fester A', NULL, 'Impermeabilizante elastomérico base agua de secado rápido.\r\n\r\nFester A es un impermeabilizante elastomérico que debido a su tecnología de rápido secado, permite hacer la impermeabilización completa en un solo día. Es elaborado a base de resinas acrílicas, pigmentos inorgánicos, agregados minerales y aditivos especiales que le proporcionan secado rápido, excelentes características de impermeabilidad, resistencia a rayos UV, adherencia en superficie húmeda, etc.', NULL, NULL, 'nUMnTx1i1VOW4WpBoELVQa39F8jkV6.png', 0, '2023-12-12 22:49:15', '2023-12-13 00:10:32'),
(47, 14, 'Fester Blanc', NULL, 'Recubrimiento protector y decorativo elástico.\r\n\r\nProducto formulado a base de resinas 100% acrílicas y pigmentos seleccionados que le proporcionan propiedades de elasticidad, reflectividad, protección y duración.', NULL, NULL, 'RYZzEWIPDiWvXsO3YPbjbk7ibVfCki.png', 0, '2023-12-12 22:54:16', '2023-12-12 22:54:16'),
(48, 18, 'Imperfácil no más goteras pasta', NULL, 'Reparador asfáltico para goteras\r\n\r\nMaterial de consistencia pastosa, formulado a base de asfalto modificado, solventes especiales de rápida evaporación, rellenos minerales, fibras naturales libres de asbesto y aditivos especiales que le permiten tener excelentes propiedades de adherencia en superficies húmedas o secas.', NULL, NULL, 'oijXilCwAxbRcznmiH46sQTL9TduSU.png', 0, '2023-12-12 23:00:31', '2023-12-12 23:00:31'),
(49, 19, 'Fester Garden', NULL, 'Sistema de elementos plásticos y geo-membranas que en conjunto, conforman la alternativa para atender las necesidades al colocar áreas verdes en los techos, facilitando la salida del agua hacia drenes o bajantes pluviales.                                                                            \r\n\r\nFester Garden ofrece dos sistemas los cuales están relacionados directamente al tipo y tamaño de naturación que va a contener. Fester Garden Extensivo y Fester Garden Intensivo.', NULL, NULL, '8NndgDNsxhS0R5V5JJ8l3AOmLea50l.png', 0, '2023-12-12 23:52:10', '2023-12-12 23:52:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_proyectos`
--

CREATE TABLE `p_f_proyectos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_f_proyectos`
--

INSERT INTO `p_f_proyectos` (`id`, `titulo`, `imagen`, `aux`, `created_at`, `updated_at`) VALUES
(11, 'NOMBRE DEL PROYECTO', 'cRZ8rxEwZezOsM62i0t0Ge8c8LYJvV.png', NULL, '2023-10-27 23:01:15', '2023-11-16 23:14:07'),
(12, 'NOMBRE DEL PROYECTO', '8S5lj7T5t9136dd2maoDZuUrVdjclX.png', NULL, '2023-10-27 23:05:47', '2023-11-17 21:53:14'),
(14, 'NOMBRE DEL PROYECTO', 'GNlpiawp0NkhTJisWU1ZbIxQW8pTaN.png', NULL, '2023-10-27 23:06:14', '2023-11-16 23:14:57'),
(15, 'NOMBRE DEL PROYECTO', 'Nk57FTjHaQJAh3Lwzn5PzWMbr7cSX8.png', NULL, '2023-10-27 23:06:27', '2023-11-16 23:15:42'),
(16, 'NOMBRE DEL PROYECTO', 'hrKZtKq5J534xYZRcRArEGAhipHnwT.png', NULL, '2023-10-27 23:06:39', '2023-11-16 23:15:51'),
(19, 'NOMBRE DEL PROYECTO', 'iRy9io8Wwqt7AWY2tH5czv8CQY6Mp1.png', NULL, '2023-11-17 22:28:25', '2023-11-17 22:28:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_punto_ventas`
--

CREATE TABLE `p_f_punto_ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `codigo_postal` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `mapa` text DEFAULT NULL,
  `street_view` text DEFAULT NULL,
  `aux` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_f_punto_ventas`
--

INSERT INTO `p_f_punto_ventas` (`id`, `direccion`, `codigo_postal`, `ciudad`, `estado`, `mapa`, `street_view`, `aux`, `created_at`, `updated_at`) VALUES
(1, 'Av. Siempre viva 2223', '44331', 'Guadalajara', 'Jalisco', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.6744194802013!2d-103.39920042400838!3d20.642123600944444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0ed241a9bb%3A0xbb4c3906c38265fd!2sWozial%20Marketing%20Lovers!5e0!3m2!1ses-419!2smx!4v1698685546354!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, NULL, '2023-10-30 23:29:42', '2023-10-31 21:10:39'),
(3, 'Av. nueva2', '332212', 'Guadalajra2', 'Jalisco2', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.7426822062457!2d-103.40595622400834!3d20.639342701038224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428adca953bffff%3A0xd79751756eb1ae92!2sCodeation%20Studio%20S.A.S%20de%20C.V.!5e0!3m2!1ses-419!2smx!4v1699294267417!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, NULL, '2023-11-07 00:11:38', '2023-11-18 02:22:20'),
(4, 'Av. Bonita', '33442', 'Zapopan', 'Jalisco', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.1847648684043!2d-103.44567591385768!3d20.662060751031845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428aea94a0b5af5%3A0x9638b3c7e65a7b39!2sMetropolitano%2C%20P.%C2%BA%20del%20Sereno%2C%20Parque%20Sereno%2C%20Rinconada%20del%20Parque%2C%2045030%20Zapopan%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1699294349332!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, NULL, '2023-11-07 00:12:34', '2023-11-07 00:12:34'),
(5, 'Av. Cruz del Sur 4432', '44332', 'Zapopan', 'Jalisco', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.8018701532483!2d-103.39918672400839!3d20.636931201119786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428adb64a35fbd7%3A0x6752e678b55f41f5!2sLittle%20Caesars%20Pizza!5e0!3m2!1ses-419!2smx!4v1699294401890!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, NULL, '2023-11-07 00:13:52', '2023-11-07 00:13:52'),
(6, 'Av. Auxiliar', '23233', 'Zapopan', 'Jalisco', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.7426822062457!2d-103.40595622400834!3d20.639342701038224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428adca953bffff%3A0xd79751756eb1ae92!2sCodeation%20Studio%20S.A.S%20de%20C.V.!5e0!3m2!1ses-419!2smx!4v1699294267417!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, NULL, '2023-11-16 22:09:04', '2023-11-16 22:09:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_slider_principals`
--

CREATE TABLE `p_f_slider_principals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_f_slider_principals`
--

INSERT INTO `p_f_slider_principals` (`id`, `titulo`, `texto`, `foto`, `created_at`, `updated_at`) VALUES
(14, 'Nuestros clientes', NULL, 'hXIVS1MzAS4eqGWbNTZZC8gMrEclo9.png', '2023-12-13 00:08:06', '2024-01-26 22:46:16'),
(15, 'Con quien estamos trabajando', NULL, '6FgQDNOnEW5JqHT0QWcPqhleHSIT1W.png', '2024-01-26 22:50:42', '2024-01-26 22:51:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_solucions`
--

CREATE TABLE `p_f_solucions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icono` text DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_f_solucions`
--

INSERT INTO `p_f_solucions` (`id`, `icono`, `imagen`, `titulo`, `descripcion`, `created_at`, `updated_at`) VALUES
(8, 'mjmNFVFRCtIzg7NZJdtS0BzVIY7XL7.png', 'x0UspBh8OKzT2obTcpimBwvSwjcTGY.png', 'SOLUCIÓN 1', 'dsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsds', '2023-10-30 21:38:10', '2023-11-16 23:24:50'),
(9, 'UcRoPzMKZaiWIxhCoCzMQdoy1w7x2E.png', 'ddgbZs15CYgCdc69miWJ3amI0MgCax.png', 'SOLUCIÓN 2s43h', 'ddddddddddddd ssssssssssssssssssssss sddddddddddd43h', '2023-10-30 21:45:03', '2023-11-18 02:18:02'),
(10, 'fLixbGOSL44J4nYQkSAzoJWGHZTCZf.png', 'YjtEXXU1f4QHo8lAGSdFv12Sd89FgY.png', 'SOLUCIÓN 3', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velitNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', '2023-11-07 00:10:32', '2023-11-16 23:24:46'),
(11, 'MceUNadHGRrxs5NbkgqIPQ00VgdM1D.png', 'QCSjRrKIiPd479zUKJJNEjDQmdw2iK.png', 'SOLUCIÓN 4', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '2023-11-16 23:23:39', '2023-11-16 23:23:39'),
(12, 'I4YZ6pj8dJzpibZLoXFrvu5iN755Hh.png', 'rYyaUQrdeCkEaNUbVsx7wacIIAvVsc.png', 'SOLUCIÓN 5', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '2023-11-16 23:24:12', '2023-11-16 23:24:12'),
(14, 'fWGpitrF1f83uYCpVtfDSqwIBZ5uaS.png', 'oCIFasD6CohVHxaXf1U7bF2zkslx3X.png', 'SOLUCIÓN 6', 'DSDSD DS DSDS DSDSSDShh', '2023-11-17 22:27:27', '2023-12-13 00:42:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_f_subdistribuidors`
--

CREATE TABLE `p_f_subdistribuidors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_f_subdistribuidors`
--

INSERT INTO `p_f_subdistribuidors` (`id`, `beneficio`, `created_at`, `updated_at`) VALUES
(1, 'Lorem, Lorem ipsum dolor sit amet. ipsum dolor sit amet consectetur adipisicing elit. Facere ducimus sed deserunt, porro nam voluptatem.34343443fs22', '2023-10-31 00:27:31', '2023-11-18 02:28:31'),
(2, 'Lorem, Lorem ipsum dolor sit amet. ipsum dolor sit amet consectetur adipisicing elit. Facere ducimus sed deserunt, porro nam voluptatem.fs22', '2023-10-31 00:28:19', '2023-11-18 02:28:32'),
(3, 'Lorem, Lorem ipsum dolor sit amet. ipsum dolor sit amet consectetur adipisicing elit. Facere ducimus sed deserunt, porro nam voluptatem.s22', '2023-10-31 00:28:25', '2023-11-18 02:28:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccions`
--

CREATE TABLE `seccions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seccion` varchar(255) NOT NULL,
  `portada` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccions`
--

INSERT INTO `seccions` (`id`, `seccion`, `portada`, `slug`) VALUES
(1, 'inicio', 'fas fa-home-lg-alt', 'index'),
(2, 'tienda', 'fas fa-hands-helping', 'store'),
(3, 'proyectos', 'fas fa-shield', 'proyects'),
(4, 'contacto', 'fa-solid fa-envelope', 'contact'),
(5, 'soluciones', 'fa-solid fa-check', 'solutios'),
(6, 'puntos', 'fa-solid fa-location-dot', 'pointofsale'),
(7, 'subdistribuidores', 'fa-solid fa-business-time', 'subdist'),
(8, 'nosotros', 'fa-solid fa-paperclip', 'aboutus');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icono` varchar(5000) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(5000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `icono`, `titulo`, `descripcion`, `image`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(14, NULL, 'NOMBRE DEL PROYECTO 1', 'Lorem123', 'T3QoOxzJDwhRSDPfilvlWHLUkjIEik.png', 0, 1, 666, NULL, NULL),
(15, NULL, 'Proyecto 2', 'Descripcion del proyecto 2', '5ZhaBHZn95ORmaTZ0QQBnsRJG5cTGi.jpeg', 0, 1, 666, NULL, NULL),
(16, NULL, 'proyecto 3', 'descripcion proyecto 3', 'riaQm7bhzmsTSY3VlXJhh2BnNGEwmL.png', 0, 1, 666, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `rfc` varchar(255) DEFAULT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT 0,
  `puntos` int(11) DEFAULT NULL,
  `distr_code` varchar(255) DEFAULT NULL,
  `referido_by` varchar(255) DEFAULT NULL,
  `distribuidor` tinyint(1) NOT NULL DEFAULT 0,
  `profile` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `email`, `email_verified_at`, `telefono`, `facebook`, `empresa`, `avatar`, `rfc`, `nivel`, `puntos`, `distr_code`, `referido_by`, `distribuidor`, `profile`, `activo`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'yahir', 'lopez', '', 'yahir@wozial.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', NULL, 0, NULL, 1, 1, '$2y$10$ixFvI1ajnMzpjT8EhK0KsOzC/I8X5prS5vUZLKCsh2eOf7zllQPim', NULL, '2022-03-01 00:49:39', '2022-03-01 05:10:39', NULL),
(4, 'Alexis i', 'R Garcia', NULL, 'alexis.israel.rg@gmail.com', NULL, '3325141438', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$DIla95hgW/B0z6fDgKWEe.hYS1GdunG1P91Ckk13l8PAuGk0eijF2', NULL, '2023-07-27 10:02:59', '2023-08-21 15:26:29', NULL),
(7, 'Jesus', 'Garcia', NULL, 'jesus@wozial.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$uMZXbk2X9T/ZK4or9jBRZe74DIwlfSs758I4xCCwZozIrE6caSP7m', NULL, '2023-08-21 19:10:52', '2023-08-21 19:10:52', NULL),
(8, 'Abel', 'Quintero', NULL, 'abel.wozial@hotmail.com', NULL, '3333333333', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$GWMjkmrixY2yIgGWrkbhwOcpk79WmlhC7E9y9uNMRtcN9JhwcWMUK', NULL, '2023-08-23 23:35:09', '2023-08-23 23:41:48', NULL),
(9, 'Michael Eduardo', 'Sandoval Pérez', NULL, 'mikeed1998@gmail.com', NULL, '3322932239', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$61e9mxpY9Hvf.e8erqub0OEFi0vHUUM0wLmazHHo9EDRgW3JkmhFC', NULL, '2023-10-19 23:29:07', '2023-10-19 23:59:20', NULL),
(10, 'Wozial', 'User', NULL, 'user@wozial.com', NULL, '3322332233', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$hv.gVInHQbhxga8.2rNo5.McFM5LdIk6WtUP6tLyDsCXFUidNSfgC', NULL, '2023-12-12 20:25:48', '2023-12-12 20:26:46', NULL),
(11, 'Abel', 'Quintero', NULL, 'abel.wozial@gmail.com', NULL, '3322332233', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$FuLnAZEd6ttw3Zel7F29tOb1Sgu0JPXGDvPo3t3uBYdj//qj50yRy', NULL, '2023-12-13 02:29:52', '2023-12-13 02:42:00', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `p_f_slider_principals`
--
ALTER TABLE `p_f_slider_principals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `p_f_slider_principals`
--
ALTER TABLE `p_f_slider_principals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
