-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 30 2013 г., 09:13
-- Версия сервера: 5.5.30
-- Версия PHP: 5.4.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cirm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cinstallations`
--

CREATE TABLE IF NOT EXISTS `cinstallations` (
  `id` smallint(4) unsigned NOT NULL,
  `date` date NOT NULL,
  `cdate` datetime NOT NULL,
  `ls_num` smallint(6) NOT NULL,
  `type` char(50) NOT NULL,
  `name` char(50) NOT NULL DEFAULT '',
  `phone` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` char(250) NOT NULL DEFAULT '',
  `comment` char(250) NOT NULL DEFAULT '',
  `open` char(50) NOT NULL DEFAULT '',
  `responsible` char(50) NOT NULL DEFAULT '',
  `close` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cinstallations`
--

INSERT INTO `cinstallations` (`id`, `date`, `cdate`, `ls_num`, `type`, `name`, `phone`, `address`, `description`, `comment`, `open`, `responsible`, `close`) VALUES
(16, '2013-05-09', '2013-05-29 12:53:20', 5555, 'Телефон', 'Test Test', 888888, 'Test 123', 'TestTestTestTest', 'Test Test Test', 'Admin Admin', 'Telephome Telephone', 'Admin Admin'),
(15, '2013-05-28', '2013-05-29 12:53:31', 6666, 'Интернет', 'Test Test', 888888, 'Test 123', 'TestTestTestTest', 'Test Test Test', 'Admin Admin', 'Internet Repairs', 'Admin Admin'),
(14, '2013-05-09', '2013-05-29 12:53:13', 7777, 'Интернет+Телефон', 'Test Test', 888888, 'Test 123', 'TestTestTestTest', 'Test Test Test', 'Admin Admin', 'Admin Admin', 'Admin Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `crepairs`
--

CREATE TABLE IF NOT EXISTS `crepairs` (
  `id` smallint(5) unsigned NOT NULL,
  `date` date NOT NULL,
  `cdate` date NOT NULL,
  `client` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `product` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `box` tinyint(1) NOT NULL,
  `wire` tinyint(1) NOT NULL,
  `sh` tinyint(1) NOT NULL,
  `attrition` tinyint(1) NOT NULL,
  `scratch` tinyint(1) NOT NULL,
  `new` tinyint(1) NOT NULL,
  `diag` tinyint(1) NOT NULL,
  `repair` tinyint(1) NOT NULL,
  `description` char(250) NOT NULL,
  `comment` char(250) NOT NULL,
  `cost` smallint(5) unsigned NOT NULL,
  `responsible` char(50) NOT NULL,
  `open` char(50) NOT NULL,
  `close` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `crepairs`
--

INSERT INTO `crepairs` (`id`, `date`, `cdate`, `client`, `phone`, `product`, `sn`, `box`, `wire`, `sh`, `attrition`, `scratch`, `new`, `diag`, `repair`, `description`, `comment`, `cost`, `responsible`, `open`, `close`) VALUES
(6, '2013-04-29', '2013-04-29', 'Test Test Test', 999999, 'TestTestTest', '1324657498', 1, 0, 0, 1, 0, 0, 0, 1, 'TestTestTestTest', 'Test Test Test', 200, 'Admin Admin', 'Admin Admin', 'Admin Admin'),
(7, '2013-05-29', '2013-05-29', 'TestTestTest', 123456, 'TestTestTest', '1324657498', 0, 1, 1, 1, 0, 0, 1, 0, 'TestTestTestTest', 'Test Test Test', 150, 'Admin Admin', 'Admin Admin', 'Admin Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `ctickets`
--

CREATE TABLE IF NOT EXISTS `ctickets` (
  `id` smallint(4) unsigned NOT NULL,
  `date` datetime NOT NULL,
  `cdate` datetime NOT NULL,
  `name` char(50) NOT NULL DEFAULT '',
  `phone` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` char(250) NOT NULL DEFAULT '',
  `comment` char(250) NOT NULL DEFAULT '',
  `subunit` varchar(50) NOT NULL,
  `open` char(50) NOT NULL DEFAULT '',
  `responsible` char(50) NOT NULL DEFAULT '',
  `close` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ctickets`
--

INSERT INTO `ctickets` (`id`, `date`, `cdate`, `name`, `phone`, `address`, `description`, `comment`, `subunit`, `open`, `responsible`, `close`) VALUES
(29, '2013-05-29 12:42:53', '2013-05-29 12:46:28', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', 'Test Test Test', '', 'Admin Admin', 'Admin Admin', 'Admin Admin'),
(33, '2013-05-29 12:43:50', '2013-05-29 12:46:25', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', 'Test Test Test', '', 'Admin Admin', 'Admin Admin', 'Admin Admin'),
(25, '2013-05-29 12:42:25', '2013-05-29 12:46:20', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', 'Test Test Test', '', 'Admin Admin', 'Admin Admin', 'Admin Admin'),
(26, '2013-05-29 12:42:33', '2013-05-29 12:46:16', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', 'Test Test Test', '', 'Admin Admin', 'Admin Admin', 'Admin Admin'),
(35, '2013-05-29 12:44:04', '2013-05-29 12:45:58', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', 'Test Test Test', '', 'Admin Admin', 'Admin Admin', 'Admin Admin'),
(28, '2013-05-29 12:42:46', '2013-05-29 12:46:12', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', 'Test Test Test', '', 'Admin Admin', 'Admin Admin', 'Admin Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'internet', 'Интернет'),
(4, 'telephone', 'Телефония'),
(5, 'repairmen', 'Ремонтники');

-- --------------------------------------------------------

--
-- Структура таблицы `installations`
--

CREATE TABLE IF NOT EXISTS `installations` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `ls_num` smallint(6) NOT NULL,
  `type` char(50) NOT NULL,
  `name` char(50) NOT NULL DEFAULT '',
  `contact` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` char(250) NOT NULL DEFAULT '',
  `comment` char(250) NOT NULL,
  `open` char(50) NOT NULL DEFAULT '',
  `responsible` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `installations`
--

INSERT INTO `installations` (`id`, `date`, `ls_num`, `type`, `name`, `contact`, `address`, `description`, `comment`, `open`, `responsible`) VALUES
(17, '2013-05-09', 4444, 'Интернет+Телефон', 'Test Test', 888888, 'Test 123', 'TestTestTestTest', '', 'Admin Admin', 'Admin Admin'),
(13, '2013-01-17', 8888, 'Телефон', 'Test Test', 888888, 'Test 123', 'TestTestTestTest', '', 'Admin Admin', 'Telephome Telephone'),
(12, '2013-05-28', 9999, 'Интернет', 'Test Test', 888888, 'Test 123', 'TestTestTestTest', '', 'Admin Admin', 'Admin Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `repairs`
--

CREATE TABLE IF NOT EXISTS `repairs` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `client` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `product` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `box` tinyint(1) NOT NULL,
  `wire` tinyint(1) NOT NULL,
  `sh` tinyint(1) NOT NULL,
  `attrition` tinyint(1) NOT NULL,
  `scratch` tinyint(1) NOT NULL,
  `new` tinyint(1) NOT NULL,
  `diag` tinyint(1) NOT NULL,
  `repair` tinyint(1) NOT NULL,
  `description` char(250) NOT NULL,
  `comment` char(250) NOT NULL,
  `cost` smallint(5) unsigned NOT NULL,
  `responsible` char(50) NOT NULL,
  `open` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `repairs`
--

INSERT INTO `repairs` (`id`, `date`, `client`, `phone`, `product`, `sn`, `box`, `wire`, `sh`, `attrition`, `scratch`, `new`, `diag`, `repair`, `description`, `comment`, `cost`, `responsible`, `open`) VALUES
(8, '2013-05-29', 'TestTestTest', 123456, 'TestTestTest', '1324657498', 1, 1, 0, 0, 0, 1, 0, 1, 'TestTestTestTest', '', 0, 'Internet Repairs', 'Admin Admin'),
(9, '2013-05-29', 'TestTestTest', 123456, 'TestTestTest', '1324657498', 1, 1, 1, 1, 1, 0, 0, 1, 'TestTestTestTest', '', 0, 'Internet Repairs', 'Admin Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(250) NOT NULL,
  `cost` smallint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `description`, `cost`) VALUES
(1, 'Тест50', 50),
(2, 'Тест100', 100),
(3, 'Тест150', 150),
(4, 'Тест200', 200);

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `name` char(50) NOT NULL DEFAULT '',
  `phone` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` char(250) NOT NULL DEFAULT '',
  `comment` char(250) NOT NULL DEFAULT '',
  `subunit` varchar(50) NOT NULL,
  `open` char(50) NOT NULL DEFAULT '',
  `responsible` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`id`, `date`, `name`, `phone`, `address`, `description`, `comment`, `subunit`, `open`, `responsible`) VALUES
(27, '2013-05-29 12:42:39', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(24, '2013-05-29 12:42:13', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Internet Repairs'),
(23, '2013-05-29 12:42:04', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(22, '2013-05-29 12:41:56', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Internet Repairs'),
(21, '2013-05-29 12:41:10', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', 'esewerwerwer', '', 'Admin Admin', 'Admin Admin'),
(30, '2013-05-29 12:42:59', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(31, '2013-05-29 12:43:10', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(32, '2013-05-29 12:43:18', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(34, '2013-05-29 12:43:58', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(36, '2013-05-29 12:44:11', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(37, '2013-05-29 12:44:17', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(38, '2013-05-29 12:44:23', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(39, '2013-05-29 12:44:28', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(40, '2013-05-29 12:44:43', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin'),
(41, '2013-05-29 12:44:48', 'Test Test', 123456, 'Test 123', 'TestTestTestTest', '', '', 'Admin Admin', 'Admin Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '\0\0', 'admin', 'ed3cc690ad98d799c42ead09a4dbdfdd34aff537', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, '8e2ce6d1d64c10848cafdf8853286e0627b57845', 1268889823, 1369875051, 1, 'Admin', 'Admin', 'Admin', '99-99-99'),
(2, 'S�.', 'internet', '6cedcf918d8fe38d93f92e3261eab1f44045cd65', NULL, 'internet@internet.com', NULL, NULL, NULL, '110f340356cec19568c5b8faecc69399f30b6e53', 1366696301, 1369875562, 1, 'Internet', 'Repairs', 'Internet', '99-99-99'),
(5, 'S�.', 'telephone', '37187345be7b3cf8358199cd3f01509234b38d89', NULL, 'telephone@telephone.com', NULL, NULL, NULL, NULL, 1369206311, 1369206311, 1, 'Telephome', 'Telephone', 'Telephone', '99-99-99');

-- --------------------------------------------------------

--
-- Структура таблицы `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(42, 2, 3),
(43, 2, 5),
(44, 5, 4),
(45, 1, 1),
(46, 1, 2),
(47, 1, 3),
(48, 1, 4),
(49, 1, 5);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
