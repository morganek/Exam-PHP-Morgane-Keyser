-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Ven 13 Juin 2014 à 18:25
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `lr`
--

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{\r\n"admin": 1,\r\n"moderator": 1\r\n}');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `joined` datetime NOT NULL,
  `group` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `salt`, `name`, `joined`, `group`) VALUES
(35, 'Morgane', '', 'd0c5af161e7988e1113ec36301453509c78892cad86e6e7c76567e1bec7f2809', '›¿Qüg¸TƒP‘¢Çm)¯msÇ¥pY¶ª%Qe’', 'Morgane Keyser', '2014-06-10 19:24:05', 2),
(36, 'morganek', '', '7feed3554c9bf73fd85007d7e6e63741457c11d8ca873e4e1ef3b6b1a53865b9', '''AFôDóUó‹ ½oE”{dR}÷:I-Ëñt²C;‡¡', 'morganek', '2014-06-10 19:36:28', 1),
(37, 'tfedwm14', '', '39099d1a1ad6e6e2ba92bd42b2cccf73729ac2b6fec1066bbd85ac62a72e556b', 'ˆ¨¯vœâhÖ%FÆÎÏ»h?Y¾SÖ™ßåƒ»', 'tfedwm14', '2014-06-11 18:50:34', 1),
(38, 'basilic', '', '0b2a657dec6f3fdfc71180388fa050a007617ce28eb30723f82576c75f0509f2', 'ÇmÕýmÐõf¤õùÉmÑWšƒê_…\\Š?¹LÖ¶', 'basilic', '2014-06-11 21:24:56', 1),
(39, 'bananeflambÃ©e', '', '48196a7a5a15c8d2a5422dee094a1dca16ed4065f7db878e21e8538ab4763530', 'r$,êE%&.|P	ëƒ÷ºz¸5¯•Ù¾:‚Þ', 'bananeflambÃ©e', '2014-06-11 21:34:02', 1),


-- --------------------------------------------------------

--
-- Structure de la table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
