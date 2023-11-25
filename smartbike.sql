-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 nov. 2023 à 20:48
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `smartbike`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `no_article` int(11) NOT NULL,
  `nom_art` varchar(100) NOT NULL,
  `poid` varchar(100) NOT NULL,
  `vitesse` varchar(100) NOT NULL,
  `seige` varchar(100) NOT NULL,
  `armortisseur` varchar(100) NOT NULL,
  `chargeur` varchar(100) NOT NULL,
  `taille` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `prod_img` varchar(100) NOT NULL,
  `no_prix` int(11) NOT NULL,
  `no_cat` int(11) NOT NULL,
  `no_vandeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`no_article`, `nom_art`, `poid`, `vitesse`, `seige`, `armortisseur`, `chargeur`, `taille`, `description`, `prod_img`, `no_prix`, `no_cat`, `no_vandeur`) VALUES
(48, 'Fat Bike Engwe EP-2 Pro 2022 Version 750W 20&quot; VTT électrique Pliable', '36,9', '25', 'Sièges sport confortables', 'Suspension à ressort à huile avant', '48V3a', '198 cm * 45 cm * 100 cm', 'dsfzkjeôéjiénojqdohpfe', 'WhatsApp Image 2023-05-04 at 21.15.07 (1).jpeg', 16, 12, 1),
(49, 'Fat Bike Engwe EP-2 Pro 2022 Version 750W 20&quot; VTT électrique Pliable', '36,9', '25', 'Sièges sport confortables', 'Suspension à ressort à huile avant', '48V3a', '198 cm * 45 cm * 100 cm', 'kjrejpi_^à ep _yé_uhjodqçràé', 'WhatsApp Image 2023-05-04 at 21.15.07.jpeg', 11, 12, 1),
(50, 'Fat Bike Engwe EP-2 Pro 2022 Version 750W 20&quot; VTT électrique Pliable', '	36,9', '28', 'Sièges Urbain confortables', '	Suspension à ressort à huile avant', 'dd', '198 cm * 45 cm * 100 cm', 'jhpihp _py ouyèt o_ çy', 'WhatsApp Image 2023-05-04 at 21.15.08 (5).jpeg', 16, 15, 1),
(51, 'Fat Bike Engwe EP-2 Pro 2022 Version 750W 20&quot; VTT électrique Pliable', '6788', '30', 'Sièges Urbain confortables', '	Suspension à ressort à huile avant', '48V3a', '200 cm * 48 cm * 90 cm', 'rz &quot;tr t&quot;é t eg&quot;grr &quot;hg(t&quot;  &#039;( ty(', 'WhatsApp Image 2023-05-04 at 21.15.08 (2).jpeg', 16, 13, 1),
(52, 'Fat Bike Engwe EP-2 Pro 2022 Version 750W 20&quot; VTT électrique Pliable', '6788', '30', 'Sièges Urbain confortables', 'Suspension à ressort à huile avant', '48V3a', '198 cm * 45 cm * 100 cm', 'bizye _è y çfh_è&#039;&quot;éè  zrizeçzehriz  uyçeàçz', 'WhatsApp Image 2023-05-04 at 21.15.08 (4).jpeg', 14, 13, 1),
(53, 'Fat Bike Engwe EP-2 Pro 2022 Version 750W 20&quot; VTT électrique Pliable', '6788', '28', 'Sièges sport confortables', 'Suspension à ressort à huile avant', '48V3a', '198 cm * 45 cm * 100 cm', 'jhioyç é&quot;è à&quot;é_y&quot;_)_   çy_ahoqip çazejnohj çàerohoiuàh  àuàrupoe', 'WhatsApp Image 2023-05-04 at 21.15.08 (3).jpeg', 16, 12, 1),
(54, 'Fat Bike Engwe EP-2 Pro 2022 Version 750W 20&quot; VTT électrique Pliable', '36,9', 'dd', 'Sièges Urbain confortables', 'Suspension à ressort à huile avant', '48V3a', '198 cm * 45 cm * 100 cm', 'nbiu yr pçé_àç àez__çyçfeziuh çyèç', 'WhatsApp Image 2023-05-04 at 21.15.08 (6).jpeg', 15, 13, 1),
(55, 'Fat Bike Engwe EP-2 Pro 2022 Version 750W 20&quot; VTT électrique Pliable', '6788', '46', 'Sièges sport confortables', 'Suspension à ressort à huile avant', '48V3a', '198 cm * 45 cm * 100 cm', ',pzij  _u&#039; àçèé rré_yçà_r poeh ç_èé o èyé çèy féeiuéèç-èé', 'WhatsApp Image 2023-05-04 at 21.15.08 (5).jpeg', 15, 13, 1),
(56, 'Fat Bike Engwe EP-2 Pro 2022 Version 750W 20&quot; VTT électrique Pliable', '36,9', '25', 'Sièges sport confortables', 'Suspension à ressort à huile avant', '48V3a', '198 cm * 45 cm * 100 cm', 'gyog _î$gytfiè tpo_ yfdr u-ytypm moi-re', 'WhatsApp Image 2023-05-04 at 21.15.08.jpeg', 16, 12, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `no_cat` int(11) NOT NULL,
  `nom_categorie` varchar(100) NOT NULL,
  `no_rayon` int(11) NOT NULL,
  `no_modele` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`no_cat`, `nom_categorie`, `no_rayon`, `no_modele`) VALUES
(12, 'BikeOne', 20, 1),
(13, 'Bike22', 20, 1),
(14, 'Bike5', 20, 1),
(15, 'BikeFirst', 20, 1);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `no_client` int(11) NOT NULL,
  `nom_client` varchar(100) NOT NULL,
  `prenom_client` varchar(100) NOT NULL,
  `tel_client` varchar(100) NOT NULL,
  `email_client` varchar(100) NOT NULL,
  `adresse_client` varchar(100) NOT NULL,
  `appartement` varchar(100) NOT NULL,
  `town_client` varchar(100) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`no_client`, `nom_client`, `prenom_client`, `tel_client`, `email_client`, `adresse_client`, `appartement`, `town_client`, `postal_code`, `country`) VALUES
(1, 'Azamo', 'Jordan', '0786598765', 'wilfidndongmo@gmail.com', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(3, 'Azamo', 'Jordan', '07865987688', 'wilfidndong@gmail.com', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(5, 'Zamnana', 'Paul', '0786598769', 'wilfoudndong@gmail.com', '9 rue denis valve', 'Appart 9', 'Paris', '9556', 'Germany'),
(6, 'Azamo', 'Jordan', '078659688', 'sapolidndong@gmail.fr', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(7, 'Kapapo', 'Michael', '078895987688', 'wilfidnbradleg@gmail.com', '7 rue paul bert', 'Appart 6', 'Lyon', '93456', 'Germany'),
(9, 'SambaJordan', 'Goalop', '547765823432', 'dainundong@gmail.fr', '8 reur develea', 'Appart 1', 'Bordeaux', '8762', 'Grace'),
(10, 'Guefack', 'Ariana', '677345267', 'guefackg@gmail.fr', 'Angola town', 'Appart 23', 'Freedomain', '93456', 'Ice-land'),
(12, 'Guefack', 'Ariana', '677399267', 'Fandofackg@gmail.fr', 'Angola town', 'Appart 23', 'Freedomain', '93456', 'Ice-land'),
(14, 'Guefack', 'Ariana', '677323267', 'Faofackg@gmail.fr', 'Angola town', 'Appart 23', 'Freedomain', '93456', 'Ice-land'),
(16, 'Azamo', 'Jordan', '07865969999998', 'wilfippn89ong@gmail.com', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'France'),
(17, 'Azamo', 'Jordan', '568923445688', 'franckondong@gmail.com', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(19, 'Azamo', 'Jordan', '5683445688', 'franondong@gmail.com', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(21, 'Azamo', 'Jordan', '99886587688', 'divineng@gmail.com', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(22, 'Azamo', 'Jordan', '0785987688', 'wilfidndg@gmail.com', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(23, 'Guefack', 'Ariana', '6767345267', 'gYUefackg@gmail.fr', 'Angola town', 'Appart 23', 'Freedomain', '93456', 'Ice-land'),
(24, 'Azamo', 'Jordan', '078659678988', 'fabiengalog@gmail.fr', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(25, 'Azamo', 'Jordan', '07869688', 'saplidndong@gmail.fr', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(27, 'Azamo', 'Jordan', '07865900688', 'sapolidnsamong@gmail.fr', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(28, 'Guefack', 'Ariana', '677356545267', 'kaligankg@gmail.fr', 'Angola town', 'Appart 23', 'Freedomain', '93456', 'Ice-land'),
(29, 'Azamo', 'Jordan', '0786566666666', 'sapolidndong@yoomail.fr', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(31, 'Azamo', 'Jordan', '078654444449688', 'sapolidndong@dddddmail.fr', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(32, 'Azamo', 'Jordan', '078600000088', 'sapolidnduuuuung@gmail.fr', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(33, 'Guefack', 'Ariana', '6773432267', 'fimbaackg@gmail.fr', 'Angola town', 'Appart 23', 'Freedomain', '93456', 'Ice-land'),
(34, 'Guefack', 'Ariana', '55544887656', 'fimblolodofkg@gmail.fr', 'Angola town', 'Appart 23', 'Freedomain', '93456', 'Ice-land'),
(35, 'Azamo', 'Jordan', '07800087688', 'wilfidfranck@gmail.com', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(36, 'Guefack', 'Ariana', '67876005267', 'kamgackg@gmail.fr', 'Angola town', 'Appart 23', 'Freedomain', '93456', 'Ice-land'),
(37, 'Guefack', 'Ariana', '776562345576', 'Ahahaaackg@gmail.fr', 'Angola town', 'Appart 23', 'Freedomain', '93456', 'Ice-land'),
(38, 'Azamo', 'Jordan', '078659878', 'Afrodacong@gmail.com', '7 rue paul bert', 'Appart 6', 'Chatillon', '93456', 'Germany'),
(39, 'Gillian', 'John', '2366879890917', 'gillian@gmail.com', 'Cergy prefecture', '67', 'Paris', '43288', 'Germany'),
(40, 'Bounguili-koua', 'Dieuvit', '0745722141', 'kouadieuvit@gmail.com', '19A avenue d&#039;Estienne d&#039;Orves', '4', 'Juvisy sur Orge', '91260', 'France'),
(41, 'FRAMA', 'Franck', '0758828616', 'wilfridndongmo@gmail.com', '55 Rue gabriell peri', 'appartement 1', 'Chatillon', '92320', 'Finland');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `no_cmde` int(11) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `quantite` int(100) NOT NULL,
  `prix_total` decimal(10,2) NOT NULL,
  `livraison` varchar(100) NOT NULL,
  `date_cmde` date NOT NULL,
  `no_panier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`no_cmde`, `contact`, `adresse`, `quantite`, `prix_total`, `livraison`, `date_cmde`, `no_panier`) VALUES
(5, '677356545267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-03', 7),
(6, '677356545267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-03', 7),
(7, '677356545267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-03', 7),
(8, '078654444449688', '7 rue paul bert', 1, '750.00', 'gratuite', '2023-05-04', 9),
(9, '078600000088', '7 rue paul bert', 1, '1000.00', 'gratuite', '2023-05-04', 10),
(10, '6773432267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-04', 11),
(11, '55544887656', 'Angola town', 1, '1000.00', 'gratuite', '2023-05-04', 12),
(12, '07800087688', '7 rue paul bert', 1, '800.00', 'gratuite', '2023-05-04', 13),
(13, '67876005267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-04', 14),
(14, '67876005267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-04', 14),
(15, '67876005267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-04', 14),
(16, '776562345576', 'Angola town', 1, '800.00', 'gratuite', '2023-05-04', 15),
(17, '776562345576', 'Angola town', 1, '800.00', 'gratuite', '2023-05-04', 15),
(18, '078659688', '7 rue paul bert', 1, '750.00', 'gratuite', '2023-05-04', 21),
(19, '078659688', '7 rue paul bert', 1, '750.00', 'gratuite', '2023-05-04', 22),
(20, '677345267', 'Angola town', 1, '800.00', 'gratuite', '2023-05-04', 23),
(21, '677345267', 'Angola town', 1, '1000.00', 'gratuite', '2023-05-04', 24),
(22, '677345267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-04', 25),
(23, '677345267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-04', 25),
(24, '07865987688', '7 rue paul bert', 1, '800.00', 'gratuite', '2023-05-04', 27),
(25, '677345267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-04', 25),
(26, '078659688', '7 rue paul bert', 1, '800.00', 'gratuite', '2023-05-04', 28),
(27, '078659688', '7 rue paul bert', 1, '800.00', 'gratuite', '2023-05-04', 28),
(28, '07865987688', '7 rue paul bert', 1, '750.00', 'gratuite', '2023-05-04', 29),
(29, '078659688', '7 rue paul bert', 1, '750.00', 'gratuite', '2023-05-04', 30),
(30, '07865987688', '7 rue paul bert', 1, '800.00', 'gratuite', '2023-05-05', 31),
(31, '677345267', 'Angola town', 1, '800.00', 'gratuite', '2023-05-05', 32),
(32, '078659688', '7 rue paul bert', 1, '1000.00', 'gratuite', '2023-05-05', 33),
(33, '078659688', '7 rue paul bert', 1, '1000.00', 'gratuite', '2023-05-05', 35),
(34, '078659878', '7 rue paul bert', 1, '1200.00', 'gratuite', '2023-05-05', 36),
(35, '6773432267', 'Angola town', 1, '750.00', 'gratuite', '2023-05-05', 37),
(36, '677345267', 'Angola town', 1, '1200.00', 'gratuite', '2023-05-07', 38),
(37, '677345267', 'Angola town', 1, '1200.00', 'gratuite', '2023-05-07', 39),
(38, '2366879890917', 'Cergy prefecture', 1, '1200.00', 'gratuite', '2023-05-07', 40),
(39, '2366879890917', 'Cergy prefecture', 1, '1200.00', 'gratuite', '2023-05-07', 41),
(40, '078659878', '7 rue paul bert', 1, '750.00', 'gratuite', '2023-05-08', 42),
(41, '078659878', '7 rue paul bert', 1, '1200.00', 'gratuite', '2023-05-09', 44),
(42, '078659878', '7 rue paul bert', 1, '750.00', 'gratuite', '2023-05-09', 45),
(43, '0745722141', '19A avenue d&#039;Estienne d&#039;Orves', 1, '1000.00', 'gratuite', '2023-05-11', 46),
(44, '078659688', '7 rue paul bert', 1, '750.00', 'gratuite', '2023-05-12', 47),
(45, '078659688', '7 rue paul bert', 1, '750.00', 'gratuite', '2023-05-12', 48),
(46, '0758828616', '55 Rue gabriell peri', 1, '750.00', 'gratuite', '2023-11-25', 49);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `no_livreur` int(11) NOT NULL,
  `nom_livreur` varchar(100) NOT NULL,
  `prenom_livreur` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email_livreur` varchar(100) NOT NULL,
  `no_vandeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `no_modele` int(11) NOT NULL,
  `nom_modele` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`no_modele`, `nom_modele`, `description`) VALUES
(1, 'VTT', 'Souple, léger, il offre une grande maniabilité.'),
(2, 'DGM', 'DFFFFFFF');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `no_panier` int(11) NOT NULL,
  `no_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`no_panier`, `no_client`) VALUES
(26, 3),
(27, 3),
(29, 3),
(31, 3),
(17, 6),
(18, 6),
(19, 6),
(20, 6),
(21, 6),
(22, 6),
(28, 6),
(30, 6),
(33, 6),
(35, 6),
(47, 6),
(48, 6),
(23, 10),
(24, 10),
(25, 10),
(32, 10),
(38, 10),
(39, 10),
(1, 21),
(2, 22),
(3, 23),
(4, 24),
(5, 25),
(6, 27),
(7, 28),
(8, 29),
(9, 31),
(10, 32),
(11, 33),
(34, 33),
(37, 33),
(12, 34),
(13, 35),
(14, 36),
(15, 37),
(16, 38),
(36, 38),
(42, 38),
(43, 38),
(44, 38),
(45, 38),
(40, 39),
(41, 39),
(46, 40),
(49, 41);

-- --------------------------------------------------------

--
-- Structure de la table `panier_articles`
--

CREATE TABLE `panier_articles` (
  `no_panier` int(11) NOT NULL,
  `no_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `panier_articles`
--

INSERT INTO `panier_articles` (`no_panier`, `no_article`) VALUES
(31, 52),
(32, 52),
(33, 49),
(34, 49),
(35, 49),
(36, 54),
(37, 53),
(38, 55),
(39, 54),
(40, 54),
(41, 55),
(42, 56),
(43, 55),
(44, 55),
(45, 51),
(46, 49),
(47, 50),
(48, 56),
(49, 51);

-- --------------------------------------------------------

--
-- Structure de la table `prix`
--

CREATE TABLE `prix` (
  `no_prix` int(11) NOT NULL,
  `valeur` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `prix`
--

INSERT INTO `prix` (`no_prix`, `valeur`) VALUES
(12, '700'),
(16, '750'),
(14, '800'),
(11, '1000'),
(15, '1200');

-- --------------------------------------------------------

--
-- Structure de la table `rayon`
--

CREATE TABLE `rayon` (
  `no_rayon` int(11) NOT NULL,
  `nom_rayon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rayon`
--

INSERT INTO `rayon` (`no_rayon`, `nom_rayon`) VALUES
(20, 'BMX Simple'),
(40, 'hiyggggy'),
(31, 'Smart 1'),
(30, 'Smart 10'),
(37, 'Smart 1?'),
(38, 'Smart 1S'),
(34, 'Smart 2'),
(35, 'Smart 3'),
(22, 'Smart 5'),
(24, 'Smart 6'),
(26, 'smart 8'),
(28, 'Smart 9'),
(19, 'Velos Complex'),
(2, 'Velos Electrique'),
(3, 'Velos Simple');

-- --------------------------------------------------------

--
-- Structure de la table `vandeur`
--

CREATE TABLE `vandeur` (
  `no_vandeur` int(11) NOT NULL,
  `nom_vandeur` varchar(100) NOT NULL,
  `prenom_vandeur` varchar(100) NOT NULL,
  `email_vdr` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `no_cmde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vandeur`
--

INSERT INTO `vandeur` (`no_vandeur`, `nom_vandeur`, `prenom_vandeur`, `email_vdr`, `telephone`, `adresse`, `no_cmde`) VALUES
(1, 'abraham', 'salamon', 'abrahamsalamon@gmail.com', '678567345', '7 rue paulbert', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`no_article`),
  ADD KEY `no_prix` (`no_prix`),
  ADD KEY `no_cat` (`no_cat`),
  ADD KEY `no_vandeur` (`no_vandeur`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`no_cat`),
  ADD KEY `no_rayon` (`no_rayon`),
  ADD KEY `no_modele` (`no_modele`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`no_client`),
  ADD UNIQUE KEY `tel_client` (`tel_client`),
  ADD UNIQUE KEY `email_client` (`email_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`no_cmde`),
  ADD KEY `no_panier` (`no_panier`);

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`no_livreur`),
  ADD UNIQUE KEY `telephone` (`telephone`),
  ADD UNIQUE KEY `email_livreur` (`email_livreur`),
  ADD KEY `no_vandeur` (`no_vandeur`);

--
-- Index pour la table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`no_modele`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`no_panier`),
  ADD KEY `no_client` (`no_client`);

--
-- Index pour la table `panier_articles`
--
ALTER TABLE `panier_articles`
  ADD PRIMARY KEY (`no_panier`,`no_article`),
  ADD KEY `no_article` (`no_article`);

--
-- Index pour la table `prix`
--
ALTER TABLE `prix`
  ADD PRIMARY KEY (`no_prix`),
  ADD UNIQUE KEY `valeur` (`valeur`);

--
-- Index pour la table `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`no_rayon`),
  ADD UNIQUE KEY `nom_rayon` (`nom_rayon`);

--
-- Index pour la table `vandeur`
--
ALTER TABLE `vandeur`
  ADD PRIMARY KEY (`no_vandeur`),
  ADD KEY `no_cmde` (`no_cmde`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `no_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `no_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `no_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `no_cmde` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `no_livreur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `no_modele` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `no_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `prix`
--
ALTER TABLE `prix`
  MODIFY `no_prix` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `rayon`
--
ALTER TABLE `rayon`
  MODIFY `no_rayon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `vandeur`
--
ALTER TABLE `vandeur`
  MODIFY `no_vandeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`no_prix`) REFERENCES `prix` (`no_prix`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`no_cat`) REFERENCES `categorie` (`no_cat`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_ibfk_3` FOREIGN KEY (`no_vandeur`) REFERENCES `vandeur` (`no_vandeur`) ON DELETE CASCADE;

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`no_rayon`) REFERENCES `rayon` (`no_rayon`) ON DELETE CASCADE,
  ADD CONSTRAINT `categorie_ibfk_2` FOREIGN KEY (`no_modele`) REFERENCES `modele` (`no_modele`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`no_panier`) REFERENCES `panier` (`no_panier`) ON DELETE CASCADE;

--
-- Contraintes pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD CONSTRAINT `livreur_ibfk_1` FOREIGN KEY (`no_vandeur`) REFERENCES `vandeur` (`no_vandeur`) ON DELETE CASCADE;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`no_client`) REFERENCES `client` (`no_client`) ON DELETE CASCADE;

--
-- Contraintes pour la table `panier_articles`
--
ALTER TABLE `panier_articles`
  ADD CONSTRAINT `panier_articles_ibfk_1` FOREIGN KEY (`no_panier`) REFERENCES `panier` (`no_panier`) ON DELETE CASCADE,
  ADD CONSTRAINT `panier_articles_ibfk_2` FOREIGN KEY (`no_article`) REFERENCES `articles` (`no_article`) ON DELETE CASCADE;

--
-- Contraintes pour la table `vandeur`
--
ALTER TABLE `vandeur`
  ADD CONSTRAINT `vandeur_ibfk_1` FOREIGN KEY (`no_cmde`) REFERENCES `commande` (`no_cmde`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
