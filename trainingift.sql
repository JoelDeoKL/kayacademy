-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage de la structure de la table kaysoft. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.categories : ~2 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `nom_categorie`, `description_categorie`, `etat`, `created_at`, `updated_at`, `image`) VALUES
	(1, 'Programmation', 'La belle vie de la programmation', 1, '2021-03-09 10:30:06', '2021-03-31 09:02:05', 'images/WRevHRDnu8QkVP0Jx1k5cM4cPytSVA6si0nhZKMT.jpeg'),
	(2, 'Design', 'Design', 1, '2021-03-09 10:30:36', '2021-03-09 10:30:36', 'images/DoBPWG2ax34k9YTHEeRngh5G1cN88VkgsCSNn5uy.jpeg'),
	(3, 'Développement', 'Développement', 1, '2021-03-19 01:05:16', '2021-03-19 01:05:18', 'images/bcjsq4ySSHK6yBCWbpfGRQKcLW4L5oeEML7wCjQ4.jpeg');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Listage de la structure de la table kaysoft. chapitres
CREATE TABLE IF NOT EXISTS `chapitres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre_chapitre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_chapitre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `videos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modules_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.chapitres : ~1 rows (environ)
/*!40000 ALTER TABLE `chapitres` DISABLE KEYS */;
INSERT INTO `chapitres` (`id`, `titre_chapitre`, `description_chapitre`, `videos`, `texte`, `modules_id`, `created_at`, `updated_at`, `image`) VALUES
	(1, 'Déclaration et fonctionnement des variables', 'La belle vie oui', 'comment_créer_une_variable', 'chapitrechapitrechapitre', 1, '2021-03-31 09:19:15', '2021-04-05 22:16:55', 'images/jw1HjamyefoG8za30QqVkGlDF1jiNhdFFEXvdBoS.jpeg'),
	(2, 'Instancier un objet', 'La belle vie avec les objets', 'comment_créer_une_variable', 'La belle vie', 7, '2021-04-05 07:47:44', '2021-04-05 07:47:44', 'images/4bQBcAxEcMpRI2x1N6lGJRtS306R5E8c61mcnk2L.png');
/*!40000 ALTER TABLE `chapitres` ENABLE KEYS */;

-- Listage de la structure de la table kaysoft. commentaires
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_complet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapitres_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.commentaires : ~0 rows (environ)
/*!40000 ALTER TABLE `commentaires` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaires` ENABLE KEYS */;

-- Listage de la structure de la table kaysoft. cours
CREATE TABLE IF NOT EXISTS `cours` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre_cours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau` int(11) NOT NULL,
  `duree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` int(11) NOT NULL,
  `categorie_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.cours : ~4 rows (environ)
/*!40000 ALTER TABLE `cours` DISABLE KEYS */;
INSERT INTO `cours` (`id`, `titre_cours`, `niveau`, `duree`, `titulaire`, `description`, `etat`, `categorie_id`, `created_at`, `updated_at`, `image`) VALUES
	(1, 'Python', 3, '160 Heures', 'Joel Deo', 'La belle vie', 1, 1, '2021-03-09 10:31:41', '2021-04-05 03:44:24', 'images/QVTGOIkNgIP3dK9T4Kznfn2x46gjEKygqolgRgFs.png'),
	(2, 'Langage C', 2, '90 Heures', 'Joel Deo', 'La belle vie', 1, 1, '2021-03-09 10:32:58', '2021-04-04 20:08:48', 'images/CuWrb46AR2msiZcVjMC55EIOwjFyB17r5P6JkC03.png'),
	(4, 'Inforgraphie', 3, '90 Heures', 'Yohan', 'Infographie', 1, 2, '2021-03-09 10:35:22', '2021-03-09 10:35:22', 'images/NZrggdcs1CjcQ9fvLOqYQnwGZUXONTi8eATLcSF3.jpeg'),
	(5, 'Programmation Orientée Objet', 2, '90 Heures', 'Mr Emma', 'Une description', 1, 1, '2021-04-05 07:42:49', '2021-04-05 07:42:49', 'images/78aUrFB5Lar6bTgVKAeYcbXiWt0zzMOXqmUCMnNk.jpeg');
/*!40000 ALTER TABLE `cours` ENABLE KEYS */;

-- Listage de la structure de la table kaysoft. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table kaysoft. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.migrations : ~14 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_08_08_021543_create_cours_table', 1),
	(5, '2020_09_13_215519_create_categories_table', 1),
	(6, '2020_09_14_194253_add_image_to_cours', 1),
	(7, '2020_09_19_030553_add_image_to_categories', 1),
	(8, '2020_09_19_032749_create_modules_table', 1),
	(9, '2020_09_20_102000_add_image_to_modules', 1),
	(10, '2020_09_22_071539_create_chapitres_table', 1),
	(11, '2020_09_22_214855_add_image_to_chapitres', 1),
	(12, '2020_10_29_100524_create_commentaires_table', 1),
	(13, '2021_01_13_213537_create_points_table', 1),
	(14, '2021_01_15_010633_create_questionnaires_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table kaysoft. modules
CREATE TABLE IF NOT EXISTS `modules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre_module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` int(11) NOT NULL,
  `cours_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.modules : ~5 rows (environ)
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`id`, `titre_module`, `description_module`, `etat`, `cours_id`, `created_at`, `updated_at`, `image`) VALUES
	(1, 'Variables', 'Une vie', 1, 1, '2021-03-09 10:55:37', '2021-04-05 21:04:46', 'images/O5UXQv2NbFZrxvVr6roPYon1ZmGVemsyDM1cXvwA.jpeg'),
	(2, 'Les fonctions', 'La belle vie', 1, 1, '2021-03-09 10:56:10', '2021-04-05 04:02:19', 'images/XIpVUmhl6p9AcYarQjfRGQx0gNlFoxEXVfUuhDrI.png'),
	(3, 'Variables', 'Variables', 1, 2, '2021-03-09 10:56:57', '2021-03-09 10:56:57', 'images/Pl8dnvmzCP4pTJWokSVJwbpASbpDV4n5PpFGgCXx.jpeg'),
	(4, 'Les fonctions', 'Les fonctions', 1, 2, '2021-03-09 10:57:53', '2021-03-09 10:57:53', 'images/oi7RtrMdPz500I8gwP2KQcmeMP9h9hRj7v4zRjgz.png'),
	(5, 'Photoshop', 'Photoshop', 1, 4, '2021-03-09 10:59:56', '2021-03-09 10:59:56', 'images/WjhC8Y6ULhYV7q422RHJw2AgYbi8YLHCqMMvhYfU.png'),
	(6, 'Illustrator', 'Illustrator', 1, 4, '2021-03-09 15:23:39', '2021-03-09 15:23:39', 'images/z4O1Rh4Nv7dGuB9ma1l6t91lAlDGJUpspJD6bVRp.png'),
	(7, 'Les objets', 'Les objets', 1, 5, '2021-04-05 07:43:22', '2021-04-05 07:43:22', 'images/6oFxcFxEqXA1ROSUuYTCtdjNzShusJwTHrtuomsH.jpeg');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;

-- Listage de la structure de la table kaysoft. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table kaysoft. points
CREATE TABLE IF NOT EXISTS `points` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `quiz_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.points : ~0 rows (environ)
/*!40000 ALTER TABLE `points` DISABLE KEYS */;
/*!40000 ALTER TABLE `points` ENABLE KEYS */;

-- Listage de la structure de la table kaysoft. questionnaires
CREATE TABLE IF NOT EXISTS `questionnaires` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapitres_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.questionnaires : ~0 rows (environ)
/*!40000 ALTER TABLE `questionnaires` DISABLE KEYS */;
/*!40000 ALTER TABLE `questionnaires` ENABLE KEYS */;

-- Listage de la structure de la table kaysoft. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kaysoft.users : ~1 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 'Joel Deo', 'joeldeocm88@gmail.com', NULL, '$2y$10$3z4Y/V1D07sQAbkvW9Lcw.YliibHJruTPJf/5UHtgcD7/N5YdUcL6', NULL, '2021-04-04 20:07:50', '2021-04-04 20:07:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
