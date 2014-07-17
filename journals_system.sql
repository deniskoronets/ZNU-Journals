-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 17 2014 г., 07:48
-- Версия сервера: 5.5.37-0ubuntu0.13.10.1
-- Версия PHP: 5.5.3-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `journals_system`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rubric_id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `file_path` varchar(1000) NOT NULL,
  `annotation` text NOT NULL,
  `authors` varchar(5000) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`article_id`, `journal_id`, `user_id`, `rubric_id`, `issue_id`, `name`, `file_path`, `annotation`, `authors`) VALUES
(1, 1, 1, 1, 2, 'Какая-то статья', 'supera.pdf', 'blah-blah-blah', 'Пупкин В.В, Гусь А.А., Лебедь М.М.'),
(2, 1, 1, 1, 2, 'Другая статья', 'azaza.pdf', 'пробное описание статьи', 'Задницов З.З.');

-- --------------------------------------------------------

--
-- Структура таблицы `dialogs`
--

CREATE TABLE IF NOT EXISTS `dialogs` (
  `dialog_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_name` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `latest_file` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `status` tinyint(1) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`dialog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `editors`
--

CREATE TABLE IF NOT EXISTS `editors` (
  `user_id` int(11) NOT NULL,
  `journal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `forms_to_articles`
--

CREATE TABLE IF NOT EXISTS `forms_to_articles` (
  `fta_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) NOT NULL,
  `form` text CHARACTER SET latin1 NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `in_archive` tinyint(1) NOT NULL,
  PRIMARY KEY (`fta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `forms_to_articles_values`
--

CREATE TABLE IF NOT EXISTS `forms_to_articles_values` (
  `ftav_id` int(11) NOT NULL AUTO_INCREMENT,
  `fta_id` int(11) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `values` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ftav_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `issues`
--

CREATE TABLE IF NOT EXISTS `issues` (
  `issue_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `volume` varchar(10) NOT NULL,
  `series` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `image` varchar(300) NOT NULL,
  `access_mode` tinyint(1) NOT NULL,
  PRIMARY KEY (`issue_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `issues`
--

INSERT INTO `issues` (`issue_id`, `journal_id`, `name`, `volume`, `series`, `year`, `publisher`, `status`, `image`, `access_mode`) VALUES
(1, 1, 'Пробный выпуск', '1', '1', '1', '1', 1, 'journal_1.png', 1),
(2, 1, 'Ювилейный выпуск', '1', '1', '1', '1', 1, 'journal_1.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `journals`
--

CREATE TABLE IF NOT EXISTS `journals` (
  `journal_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `user_languages` varchar(50) NOT NULL,
  PRIMARY KEY (`journal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `journals`
--

INSERT INTO `journals` (`journal_id`, `name`, `status`, `theme`, `user_languages`) VALUES
(1, 'Пробный журнал', '1', 'somebuild', 'Ru, Ua, En'),
(2, 'Историческая Русь', '1', 'default', 'En, Ru');

-- --------------------------------------------------------

--
-- Структура таблицы `mailings`
--

CREATE TABLE IF NOT EXISTS `mailings` (
  `mailing_id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(100) CHARACTER SET latin1 NOT NULL,
  `to` varchar(100) CHARACTER SET latin1 NOT NULL,
  `title` varchar(300) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `attempts_num` int(11) NOT NULL,
  PRIMARY KEY (`mailing_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `messages_to_dialogs`
--

CREATE TABLE IF NOT EXISTS `messages_to_dialogs` (
  `mtd_id` int(11) NOT NULL AUTO_INCREMENT,
  `dialog_id` int(11) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message` varchar(5000) CHARACTER SET latin1 NOT NULL,
  `attachment` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`mtd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `rubrics`
--

CREATE TABLE IF NOT EXISTS `rubrics` (
  `rubric_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) NOT NULL,
  `name` varchar(1000) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`rubric_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `rubrics`
--

INSERT INTO `rubrics` (`rubric_id`, `journal_id`, `name`) VALUES
(1, 1, '??????? ???????');

-- --------------------------------------------------------

--
-- Структура таблицы `rubrics_to_issues`
--

CREATE TABLE IF NOT EXISTS `rubrics_to_issues` (
  `rti_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  PRIMARY KEY (`rti_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `rubrics_to_issues`
--

INSERT INTO `rubrics_to_issues` (`rti_id`, `journal_id`, `issue_id`, `name`) VALUES
(1, 1, 2, 'Пробная рубрика');

-- --------------------------------------------------------

--
-- Структура таблицы `static_pages`
--

CREATE TABLE IF NOT EXISTS `static_pages` (
  `static_page_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `html_file_path` varchar(255) NOT NULL,
  `is_visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`static_page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `static_pages`
--

INSERT INTO `static_pages` (`static_page_id`, `journal_id`, `name`, `html_file_path`, `is_visible`) VALUES
(1, 1, 'Информация для редакторов', 'for_editors', 1),
(2, 1, 'Информация о журнале', 'about', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(64) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `password`, `email`, `name`) VALUES
(1, 'den', '123', 'azazaa@mail.sup', 'azaza');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
