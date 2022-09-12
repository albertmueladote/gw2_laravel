-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando datos para la tabla gw2.guild: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `guild` DISABLE KEYS */;
INSERT INTO `guild` (`id`, `name`, `url`, `api`, `created_at`, `updated_at`) VALUES
	(1, 'Trolls De Arco Del León', 'trolls-de-arco-del-leon', 'C784C2E6-051D-EB11-81A8-CDE2AC1EED30', '2029-03-22 12:22:40', '2029-03-22 12:22:40'),
	(2, 'Valkyries Of Orion', 'valkyries-of-orion', '40A4157F-613E-E811-81A1-02A368428674', '2029-03-22 12:22:40', '2029-03-22 12:22:40'),
	(3, 'Alumnos De Hoeth', 'alumnos-de-hoeth', '916E77D9-E4A5-EB11-81A8-F161567B2263', '2029-03-22 12:22:41', '2029-03-22 12:22:41'),
	(4, 'Maestros De Hoeth', 'maestros-de-hoeth', 'D9BC6C8A-3288-E611-80D3-441EA14F1E40', '2029-03-22 12:22:41', '2029-03-22 12:22:41'),
	(5, 'The Ratcave', 'the-ratcave', '3BFC6FEE-9575-E811-81A8-83C7278578E0', '2022-04-01 14:01:30', '2022-04-01 14:01:30'),
	(6, 'Wardens Of Destiny', 'wardens-of-destiny', '081E175C-5AF5-430E-AA2F-798226BBF4F7', '2022-04-01 14:01:31', '2022-04-01 14:01:31'),
	(7, 'Sin Estabilidad', 'sin-estabilidad', '3D0C58D0-4A7F-E911-81A8-83C7278578E0', '2022-04-01 14:01:31', '2022-04-01 14:01:31'),
	(8, 'Cliffside Immortals', 'cliffside-immortals', '95969F10-A983-EC11-81B7-AD7CCA945DAC', '2022-04-01 14:01:32', '2022-04-01 14:01:32'),
	(9, 'Neko Hikikomori Kyoukai', 'neko-hikikomori-kyoukai', 'D307C3B2-DDFB-EA11-81A8-B942C6BB2B96', '2022-04-11 11:08:01', '2022-04-11 11:08:01'),
	(10, 'Reyes Invencibles', 'reyes-invencibles', '95DB89E0-60C5-EB11-81A8-F161567B2263', '2022-04-11 11:08:01', '2022-04-11 11:08:01'),
	(11, 'Skulls Bones And Big Stones', 'skulls-bones-and-big-stones', 'D558DA67-02B7-E611-80D3-E83935B5B448', '2022-04-11 11:08:02', '2022-04-11 11:08:02'),
	(12, 'El Quartel', 'el-quartel', 'AB5C81BD-FE09-E811-81A1-06AAF25406CE', '2022-04-11 12:43:40', '2022-04-11 12:43:40'),
	(13, 'Acrobats Of The Skies', 'acrobats-of-the-skies', '980F2E20-F803-E911-81A8-B942C6BB2B96', '2022-04-11 12:43:41', '2022-04-11 12:43:41'),
	(14, 'Made In Mist', 'made-in-mist', '3A929DBA-F9BD-E811-81A8-83C7278578E0', '2022-04-11 12:43:41', '2022-04-11 12:43:41');
/*!40000 ALTER TABLE `guild` ENABLE KEYS */;

-- Volcando datos para la tabla gw2.guild_block: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `guild_block` DISABLE KEYS */;
INSERT INTO `guild_block` (`id`, `guild`, `type`, `value`, `extra`, `row`, `column`, `created_at`, `updated_at`) VALUES
	(1, 4, 'text', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum&nbsp;</p>\n', '', 1, 1, '2022-04-03 21:49:24', '2022-04-21 17:53:50'),
	(2, 4, 'text', '<h1 dir="ltr">&nbsp;</h1>\n\n<p dir="ltr">&nbsp;</p>\n\n<h1 dir="ltr"><span style="color:#3498db">&iquest;Que hacemos?</span></h1>\n\n<p dir="ltr"><br />\nNuestra pasi&oacute;n es ense&ntilde;ar y esperamos que la vuestra sea aprender.&nbsp;</p>\n\n<p dir="ltr">Desde un inicio inculcamos la importancia de formar a quienes saben menos y cualquier miembro del clan estar&aacute; dispuesto a dedicaros su tiempo para ello.</p>\n\n<p dir="ltr">Semana tras semana, jugadores muy cualificados os preparar&aacute;n para todo el contenido del juego. Apuntaos a uno de los muchos grupos que tenemos tanto de pve como pvp,&nbsp; cada grupo es distinto tanto en nivel como en su forma de hacer las cosas, busca el tuyo y si&eacute;ntete como en casa.</p>\n', '', 2, 1, '2022-04-03 21:49:24', '2022-04-21 17:55:25'),
	(3, 4, 'image', 'k5lkfC6GOr.png', 'image_preview_center image_preview_expand_h', 2, 2, '2022-04-03 21:49:24', '2022-04-21 17:54:00'),
	(4, 3, 'text', '<p>Esto es un texto de prueba</p>\n', '', 1, 1, '2022-04-03 21:49:24', '2022-04-21 17:14:11'),
	(7, 1, 'text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '', 1, 1, '2022-04-03 21:49:24', '2022-04-03 21:49:24'),
	(8, 1, 'text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '', 2, 1, '2022-04-03 21:49:24', '2022-04-03 21:49:24'),
	(9, 1, 'text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '', 2, 2, '2022-04-03 21:49:24', '2022-04-03 21:49:24'),
	(10, 3, 'text', '<p>hola mundo</p>\n', '', 2, 2, '2022-04-21 16:12:43', '2022-04-22 13:49:03'),
	(11, 3, 'text', '<p>hola mundo</p>\n', '', 2, 1, '2022-04-21 17:13:14', '2022-04-22 13:49:02'),
	(12, 4, 'text', '<h1 dir="ltr"><span style="color:#3498db">&iquest;C&oacute;mo unirte a nosotros?</span></h1>\n\n<p dir="ltr">Somos, ante todo, un gran grupo de amigos y muy acogedores con los nuevos miembros. No buscamos jugadores que solo quieran interaccionar con nosotros &uacute;nicamente para los eventos. Buscamos jugadores que quieran&nbsp; jugar con nosotros d&iacute;a a d&iacute;a.</p>\n\n<p dir="ltr">Nuestro clan es de representaci&oacute;n obligatoria, adem&aacute;s, debes vivir en la franja horaria espa&ntilde;ola y usar discord para comunicarte con nosotros. Si todo eso encaja con tus planes dentro del juego, puedes ponerte en contacto con el l&iacute;der del clan tanto en discord (Patriarkus#8191) como en el juego (patriarkus.3785) y te atender&aacute; lo antes posible.&nbsp;</p>\n\n<p dir="ltr">&iexcl;Te esperamos!</p>\n', '', 3, 1, '2022-04-21 17:54:10', '2022-04-21 17:55:58'),
	(13, 4, 'text', '<h1><span style="color:#3498db">Contactos:</span></h1>\n\n<ul>\n <li>usuario 1</li>\n  <li>usuario 2</li>\n  <li>usuario 3</li>\n  <li>usuario 4</li>\n</ul>\n', '', 4, 4, '2022-04-21 17:56:35', '2022-04-21 18:01:37'),
	(14, 4, 'text', '', '', 4, 3, '2022-04-21 17:56:43', '2022-04-21 17:56:44'),
	(15, 4, 'text', '', '', 4, 2, '2022-04-21 17:56:44', '2022-04-21 17:57:06'),
	(16, 4, 'text', '', '', 4, 1, '2022-04-21 17:56:45', '2022-04-21 17:56:46');
/*!40000 ALTER TABLE `guild_block` ENABLE KEYS */;

-- Volcando datos para la tabla gw2.migrations: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_12_14_000001_create_personal_access_tokens_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando datos para la tabla gw2.user: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`, `api`, `password`, `last_login`, `created_at`, `updated_at`) VALUES
	(1, 'patriarkus.3785', 'albertmueladote@gmail.com', '688DFABB-B97B-3E42-B07E-640FF87CDF2F9CF33BBE-1E58-4AD7-A54C-CA093F80667C', '123', '2022-04-13 03:01:38', '2029-03-22 12:22:39', '2022-07-24 13:18:52'),
	(2, 'laura', NULL, '37F8BFF6-A343-7B41-8237-82C3F77DE3E1C4616424-AFF8-4579-9043-44F929909B91', '123', '2022-04-21 17:13:52', '2029-03-22 12:22:57', '2029-03-22 12:22:57'),
	(3, 'fer', NULL, 'FA9FE1E6-ACCB-BB4D-A35A-03180A901AE54281DE76-EB66-496D-9384-038DCB335698', '123', '2022-04-21 17:14:06', '2022-04-01 14:01:30', '2022-04-01 14:01:30'),
	(4, 'fabio', NULL, '8AFE1D5B-2FBA-3244-834E-3449C5A1F0FE89D178E1-5DC1-4001-AF5C-5597E567971E', '123', '2022-04-12 22:10:38', '2022-04-11 11:08:00', '2022-04-11 11:08:00'),
	(5, 'felix', NULL, 'D6C8CBFA-4E71-8C40-8DAE-800795FD7D2DBB6225DA-E81D-4864-B487-318AA31D11C2', '123', '2022-04-12 22:11:23', '2022-04-11 12:43:40', '2022-04-11 12:43:40');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Volcando datos para la tabla gw2.user_guild: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `user_guild` DISABLE KEYS */;
INSERT INTO `user_guild` (`id`, `user`, `guild`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2029-03-22 12:22:40', NULL),
	(2, 1, 2, '2029-03-22 12:22:40', NULL),
	(3, 2, 4, '2029-03-22 12:22:57', NULL),
	(4, 2, 2, '2029-03-22 12:22:57', NULL),
	(5, 3, 5, '2022-04-01 14:01:30', NULL),
	(6, 3, 6, '2022-04-01 14:01:31', NULL),
	(7, 3, 7, '2022-04-01 14:01:31', NULL),
	(8, 3, 8, '2022-04-01 14:01:32', NULL),
	(9, 3, 4, '2022-04-01 14:01:32', NULL),
	(10, 4, 4, '2022-04-11 11:08:00', NULL),
	(11, 4, 9, '2022-04-11 11:08:01', NULL),
	(12, 4, 3, '2022-04-11 11:08:01', NULL),
	(13, 4, 10, '2022-04-11 11:08:01', NULL),
	(14, 4, 11, '2022-04-11 11:08:02', NULL),
	(15, 5, 12, '2022-04-11 12:43:40', NULL),
	(16, 5, 13, '2022-04-11 12:43:41', NULL),
	(17, 5, 14, '2022-04-11 12:43:41', NULL),
	(18, 5, 4, '2022-04-11 12:43:42', NULL);
/*!40000 ALTER TABLE `user_guild` ENABLE KEYS */;

-- Volcando datos para la tabla gw2.user_guild_leader: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `user_guild_leader` DISABLE KEYS */;
INSERT INTO `user_guild_leader` (`id`, `user`, `guild`, `created_at`, `updated_at`) VALUES
	(1, 1, 3, '2029-03-22 12:22:41', NULL),
	(2, 1, 4, '2029-03-22 12:22:41', NULL),
	(3, 2, 4, '2029-03-22 12:22:57', NULL),
	(4, 2, 2, '2029-03-22 12:22:57', NULL),
	(5, 2, 3, '2029-03-22 12:22:57', NULL);
/*!40000 ALTER TABLE `user_guild_leader` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
