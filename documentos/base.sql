-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para foro
CREATE DATABASE IF NOT EXISTS `foro` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `foro`;

-- Volcando estructura para tabla foro.dudas
CREATE TABLE IF NOT EXISTS `dudas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asunto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image.jpg',
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dudas_user_id_foreign` (`user_id`),
  CONSTRAINT `dudas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla foro.dudas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `dudas` DISABLE KEYS */;
/*!40000 ALTER TABLE `dudas` ENABLE KEYS */;

-- Volcando estructura para tabla foro.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla foro.migrations: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2001_01_30_164318_create_roles_table', 1),
	(2, '2002_10_12_100000_create_password_resets_table', 1),
	(3, '2004_10_12_000000_create_users_table', 1),
	(4, '2005_01_30_164709_create_dudas_table', 1),
	(5, '2006_01_30_165337_create_respuestas_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla foro.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla foro.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla foro.respuestas
CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asunto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image.jpg',
  `user_id` int(10) unsigned NOT NULL,
  `duda_id` int(10) unsigned NOT NULL,
  `respuesta_padre_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `respuestas_user_id_foreign` (`user_id`),
  KEY `respuestas_duda_id_foreign` (`duda_id`),
  KEY `respuestas_respuesta_padre_id_foreign` (`respuesta_padre_id`),
  CONSTRAINT `respuestas_duda_id_foreign` FOREIGN KEY (`duda_id`) REFERENCES `dudas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `respuestas_respuesta_padre_id_foreign` FOREIGN KEY (`respuesta_padre_id`) REFERENCES `respuestas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `respuestas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla foro.respuestas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
/*!40000 ALTER TABLE `respuestas` ENABLE KEYS */;

-- Volcando estructura para tabla foro.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla foro.roles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla foro.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image.jpg',
  `rol_id` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_rol_id_foreign` (`rol_id`),
  CONSTRAINT `users_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla foro.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
