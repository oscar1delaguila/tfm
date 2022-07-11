


DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categorias_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS `juguetes`;

CREATE TABLE `juguetes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_juguete` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





DROP TABLE IF EXISTS `categoria_juguete`;

CREATE TABLE `categoria_juguete` (
  `categoria_id` bigint(20) unsigned NOT NULL,
  `juguete_id` bigint(20) unsigned NOT NULL,
  KEY `categoria_juguete_categoria_id_foreign` (`categoria_id`),
  KEY `categoria_juguete_juguete_id_foreign` (`juguete_id`),
  CONSTRAINT `categoria_juguete_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  CONSTRAINT `categoria_juguete_juguete_id_foreign` FOREIGN KEY (`juguete_id`) REFERENCES `juguetes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


