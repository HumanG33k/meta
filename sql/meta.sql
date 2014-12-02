-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2014 at 07:00 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meta`
--
CREATE DATABASE IF NOT EXISTS `meta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `meta`;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE IF NOT EXISTS `attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `type_attributes_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_attributes` (`type_attributes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attributes_elements`
--

CREATE TABLE IF NOT EXISTS `attributes_elements` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL COMMENT 'valeur d''un attribut ',
  `attribute_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `attribute_id` (`attribute_id`,`element_id`),
  KEY `element_id` (`element_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `attributes_marks`
--

CREATE TABLE IF NOT EXISTS `attributes_marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mark_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mark_id` (`mark_id`),
  KEY `attribute_id` (`attribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `position` int(2) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `position`, `created`, `updated`) VALUES
(1, 'name', 'test', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'mohamed', 'hello', 7, '2014-11-26 18:03:10', '2014-11-26 18:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories_news`
--

CREATE TABLE IF NOT EXISTS `categories_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `new_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `new_id` (`new_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` mediumtext COLLATE utf8_bin NOT NULL COMMENT 'content',
  `rank` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `new_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `ip_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`comment_id`,`ip_id`),
  KEY `comment_id` (`comment_id`),
  KEY `ip_id` (`ip_id`),
  KEY `new_id` (`new_id`),
  KEY `new_id_2` (`new_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `element_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `element_id` (`element_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `css_key_types`
--

CREATE TABLE IF NOT EXISTS `css_key_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `css_types`
--

CREATE TABLE IF NOT EXISTS `css_types` (
  `name` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opening_syntax` varchar(11) CHARACTER SET latin1 NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE IF NOT EXISTS `elements` (
  `id` int(11) NOT NULL,
  `mark_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `position` int(11) NOT NULL,
  `description` varchar(250) COLLATE utf8_bin NOT NULL,
  `element_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mark_id` (`mark_id`,`content_id`),
  KEY `content_id` (`content_id`),
  KEY `mark_id_2` (`mark_id`,`content_id`),
  KEY `element_id` (`element_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `elements_keys`
--

CREATE TABLE IF NOT EXISTS `elements_keys` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  `element_id` int(11) NOT NULL,
  `key_id` int(11) NOT NULL,
  `css_key_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `element_id` (`element_id`),
  KEY `key_id` (`key_id`),
  KEY `css_type_value_id` (`css_key_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `elements_pages`
--

CREATE TABLE IF NOT EXISTS `elements_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `element_id` (`element_id`,`page_id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `elements_pages_templates`
--

CREATE TABLE IF NOT EXISTS `elements_pages_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `element_id` (`element_id`),
  KEY `page_id` (`page_id`),
  KEY `template_id` (`template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `elements_pseudo_elements_selectors`
--

CREATE TABLE IF NOT EXISTS `elements_pseudo_elements_selectors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element_id` int(11) DEFAULT NULL,
  `pseudo_element_id` int(11) NOT NULL,
  `selector_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `element_id` (`element_id`),
  KEY `pseudo_element_id` (`pseudo_element_id`),
  KEY `selector_id` (`selector_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `entity`
--

CREATE TABLE IF NOT EXISTS `entity` (
  `name` varchar(11) NOT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  `syntax` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `extensions`
--

CREATE TABLE IF NOT EXISTS `extensions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8_bin NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `extensions_mimes`
--

CREATE TABLE IF NOT EXISTS `extensions_mimes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `extension_id` int(11) NOT NULL,
  `mime_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `extension_id` (`extension_id`,`mime_id`),
  KEY `mine_id` (`mime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(2) DEFAULT NULL,
  `nbpost` int(11) NOT NULL,
  `nbtread` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `state_id` (`state_id`),
  KEY `categorie_id` (`category_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `position`, `nbpost`, `nbtread`, `category_id`, `state_id`, `created`, `updated`) VALUES
(1, 2, 1, 1, 1, 1, '2014-11-26 18:57:17', '2014-11-26 18:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `constant` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `constant`, `created`, `updated`) VALUES
(1, 'info3005', 1, '2014-11-26 18:31:45', '2014-11-26 18:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `html_types`
--

CREATE TABLE IF NOT EXISTS `html_types` (
  `name` varchar(10) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ips`
--

CREATE TABLE IF NOT EXISTS `ips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ips_users`
--

CREATE TABLE IF NOT EXISTS `ips_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ip_id` (`ip_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE IF NOT EXISTS `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opening_syntax` varchar(10) CHARACTER SET latin1 NOT NULL,
  `closing_syntax` varchar(10) CHARACTER SET latin1 NOT NULL,
  `html_type_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `html_type_id` (`html_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `used` int(5) NOT NULL DEFAULT '0',
  `mime_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`mime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mimes`
--

CREATE TABLE IF NOT EXISTS `mimes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `subtype_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`,`subtype_id`),
  KEY `subtype_id` (`subtype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=42 ;

--
-- Dumping data for table `mimes`
--

INSERT INTO `mimes` (`id`, `type_id`, `subtype_id`, `created`, `updated`) VALUES
(2, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 4, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 4, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 4, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 4, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 4, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 4, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 4, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 4, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 4, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 4, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 4, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 4, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 4, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 4, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 4, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 4, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 4, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 4, 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 4, 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 4, 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 4, 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 4, 28, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 4, 29, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 4, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 4, 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 4, 32, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 4, 33, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 4, 34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 4, 35, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 4, 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 4, 37, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 4, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 4, 39, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 4, 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 4, 41, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8_bin NOT NULL,
  `body` longtext COLLATE utf8_bin NOT NULL,
  `published` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `state_id` (`state_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `adresse` int(250) NOT NULL,
  `state_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_bin NOT NULL COMMENT 'content',
  `email` varchar(250) COLLATE utf8_bin NOT NULL COMMENT 'poster email ',
  `user_id` int(11) DEFAULT NULL,
  `thread_id` int(11) NOT NULL,
  `ip_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `tread_id` (`thread_id`),
  KEY `ip_id` (`ip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prefixes`
--

CREATE TABLE IF NOT EXISTS `prefixes` (
  `name` varchar(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pseudo_elements`
--

CREATE TABLE IF NOT EXISTS `pseudo_elements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `syntax` varchar(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prefixe_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `prefixe_id` (`prefixe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prefixe_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `prefixe_id` (`prefixe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `selectors`
--

CREATE TABLE IF NOT EXISTS `selectors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `css_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type__css_id` (`css_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `description`) VALUES
(1, 'published', 'is published');

-- --------------------------------------------------------

--
-- Table structure for table `subtypes`
--

CREATE TABLE IF NOT EXISTS `subtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=42 ;

--
-- Dumping data for table `subtypes`
--

INSERT INTO `subtypes` (`id`, `name`, `created`, `updated`) VALUES
(1, 'cgm', NULL, NULL),
(2, 'example', NULL, NULL),
(3, 'fits', NULL, NULL),
(4, 'g3fax', NULL, NULL),
(5, 'jp2', NULL, NULL),
(6, 'jpm', NULL, NULL),
(7, 'jpx', NULL, NULL),
(8, 'naplps', NULL, NULL),
(9, 'png', NULL, NULL),
(10, 'prs.btif', NULL, NULL),
(11, 'prs.pti', NULL, NULL),
(12, 'pwg-raster', NULL, NULL),
(13, 't38', NULL, NULL),
(14, 'tiff', NULL, NULL),
(15, 'tiff-fx', NULL, NULL),
(16, 'vnd.adobe.photoshop', NULL, NULL),
(17, 'vnd.airzip.accelerator.azv', NULL, NULL),
(18, 'vnd.cns.inf2', NULL, NULL),
(19, 'vnd.dece.graphic', NULL, NULL),
(20, 'vnd-djvu', NULL, NULL),
(21, 'vnd.dwg', NULL, NULL),
(22, 'vnd.dxf', NULL, NULL),
(23, 'vnd.dvb.subtitle', NULL, NULL),
(24, 'vnd.fastbidsheet', NULL, NULL),
(25, 'vnd.fpx', NULL, NULL),
(26, 'vnd.fst', NULL, NULL),
(27, 'vnd.fujixerox.edmics-mmr', NULL, NULL),
(28, 'vnd.fujixerox.edmics-rlc', NULL, NULL),
(29, 'vnd.globalgraphics.pgb', NULL, NULL),
(30, 'vnd.microsoft.icon', NULL, NULL),
(31, 'vnd.mix', NULL, NULL),
(32, 'vnd.ms-modi', NULL, NULL),
(33, 'vnd.net-fpx', NULL, NULL),
(34, 'vnd.radiance', NULL, NULL),
(35, 'vnd.sealed-png', NULL, NULL),
(36, 'vnd.sealedmedia.softseal-gif', NULL, NULL),
(37, 'vnd.sealedmedia.softseal-jpg', NULL, NULL),
(38, 'vnd-svf', NULL, NULL),
(39, 'vnd.valve.source.texture', NULL, NULL),
(40, 'vnd-wap-wbmp', NULL, NULL),
(41, 'vnd.xiff', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `version` varchar(10) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_bin NOT NULL,
  `statut` tinyint(1) NOT NULL,
  `nbview` int(11) NOT NULL,
  `nbpost` int(11) NOT NULL,
  `nbcomment` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `forum_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `forum_id` (`forum_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8_bin NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created`, `updated`) VALUES
(1, 'application', NULL, NULL),
(2, 'audio', NULL, NULL),
(3, 'example', NULL, NULL),
(4, 'image', NULL, NULL),
(5, 'message', NULL, NULL),
(6, 'model', NULL, NULL),
(7, 'multipart', NULL, NULL),
(8, 'text', NULL, NULL),
(9, 'video', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_attributes`
--

CREATE TABLE IF NOT EXISTS `type_attributes` (
  `name` varchar(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `type_attributes`
--

INSERT INTO `type_attributes` (`name`, `created`, `updated`, `id`) VALUES
('name', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('name', '2014-11-26 00:00:00', '2014-11-26 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `name` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `biography` mediumtext COLLATE utf8_bin,
  `phone` int(20) DEFAULT NULL,
  `email` varchar(70) COLLATE utf8_bin NOT NULL,
  `website` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `gravavatar` varchar(100) COLLATE utf8_bin NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `sexe` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `group_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `publicname` (`name`),
  UNIQUE KEY `username` (`username`,`name`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `firstname`, `lastname`, `birthday`, `biography`, `phone`, `email`, `website`, `avatar`, `gravavatar`, `isactive`, `sexe`, `created`, `updated`, `group_id`) VALUES
(1, 'aishaba', 'aishaba', '', 'aisha', 'bah', '2014-11-26', '', 2147483647, 'eab9005@umoncton.ca', '', '', 'aisha', 1, 0, '2014-11-26 18:33:19', '2014-11-26 18:34:13', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_ibfk_1` FOREIGN KEY (`type_attributes_id`) REFERENCES `type_attributes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `attributes_elements`
--
ALTER TABLE `attributes_elements`
  ADD CONSTRAINT `attributes_elements_ibfk_1` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `attributes_elements_ibfk_2` FOREIGN KEY (`element_id`) REFERENCES `elements` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `attributes_marks`
--
ALTER TABLE `attributes_marks`
  ADD CONSTRAINT `attributes_marks_ibfk_1` FOREIGN KEY (`mark_id`) REFERENCES `marks` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `attributes_marks_ibfk_2` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `categories_news`
--
ALTER TABLE `categories_news`
  ADD CONSTRAINT `categories_news_ibfk_2` FOREIGN KEY (`new_id`) REFERENCES `news` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `categories_news_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`ip_id`) REFERENCES `ips` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_4` FOREIGN KEY (`new_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`element_id`) REFERENCES `elements` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `elements`
--
ALTER TABLE `elements`
  ADD CONSTRAINT `elements_ibfk_1` FOREIGN KEY (`mark_id`) REFERENCES `marks` (`id`),
  ADD CONSTRAINT `elements_ibfk_2` FOREIGN KEY (`element_id`) REFERENCES `elements` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `elements_keys`
--
ALTER TABLE `elements_keys`
  ADD CONSTRAINT `elements_keys_ibfk_1` FOREIGN KEY (`element_id`) REFERENCES `elements` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elements_keys_ibfk_2` FOREIGN KEY (`key_id`) REFERENCES `keys` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elements_keys_ibfk_3` FOREIGN KEY (`css_key_type_id`) REFERENCES `css_key_types` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `elements_pages`
--
ALTER TABLE `elements_pages`
  ADD CONSTRAINT `elements_pages_ibfk_1` FOREIGN KEY (`element_id`) REFERENCES `elements` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elements_pages_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `elements_pages_templates`
--
ALTER TABLE `elements_pages_templates`
  ADD CONSTRAINT `elements_pages_templates_ibfk_1` FOREIGN KEY (`element_id`) REFERENCES `elements` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elements_pages_templates_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elements_pages_templates_ibfk_3` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `elements_pseudo_elements_selectors`
--
ALTER TABLE `elements_pseudo_elements_selectors`
  ADD CONSTRAINT `elements_pseudo_elements_selectors_ibfk_1` FOREIGN KEY (`element_id`) REFERENCES `elements` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elements_pseudo_elements_selectors_ibfk_2` FOREIGN KEY (`pseudo_element_id`) REFERENCES `pseudo_elements` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elements_pseudo_elements_selectors_ibfk_3` FOREIGN KEY (`selector_id`) REFERENCES `selectors` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `extensions_mimes`
--
ALTER TABLE `extensions_mimes`
  ADD CONSTRAINT `extensions_mimes_ibfk_1` FOREIGN KEY (`extension_id`) REFERENCES `extensions` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `extensions_mimes_ibfk_2` FOREIGN KEY (`mime_id`) REFERENCES `mimes` (`id`);

--
-- Constraints for table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `forums_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `forums_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `ips_users`
--
ALTER TABLE `ips_users`
  ADD CONSTRAINT `ips_users_ibfk_1` FOREIGN KEY (`ip_id`) REFERENCES `ips` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ips_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`html_type_id`) REFERENCES `html_types` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`mime_id`) REFERENCES `mimes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mimes`
--
ALTER TABLE `mimes`
  ADD CONSTRAINT `mimes_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mimes_ibfk_2` FOREIGN KEY (`subtype_id`) REFERENCES `subtypes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_ibfk_3` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_3` FOREIGN KEY (`ip_id`) REFERENCES `ips` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pseudo_elements`
--
ALTER TABLE `pseudo_elements`
  ADD CONSTRAINT `pseudo_elements_ibfk_1` FOREIGN KEY (`prefixe_id`) REFERENCES `prefixes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_ibfk_1` FOREIGN KEY (`prefixe_id`) REFERENCES `prefixes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `selectors`
--
ALTER TABLE `selectors`
  ADD CONSTRAINT `selectors_ibfk_1` FOREIGN KEY (`css_type_id`) REFERENCES `css_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_ibfk_1` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `threads_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
