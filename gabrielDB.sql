-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 07 Avril 2017 à 10:14
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `gabrielDB`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `contentType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `about`
--

INSERT INTO `about` (`id`, `content`, `contentType`) VALUES
(1, 'Chef d\'orchestre et compositeur formé à Paris et à Vienne, Gabriel Mattei partage ses activités musicales entre Strasbourg, Paris et Bruxelles. Directeur de l\'Orchestre métropolitain de Strasbourg (Orchesre m) et kammerensemble Kehl-Strasbourg, il developpe une activité musicale exigeante et transversale alliant sa volonté d\'associer différents cultures à la grande tradition de la musique classique et son souci de communication avec le public.', 'textBio'),
(2, 'Gabriel MATTEI a été directeur musical de l\'Orchestre Universitaire de Strasbourg de 2002 à 2006, de l\'Ortenau Orchestre d\'Offrenburg(Allemagne) de 2009 à 2011 et dirige le Kammerenselble Kehl- Strasbourg depuis 2004.Chef de choeur, il a dirigé le choeur mulhousien << La Saltarelle>> de 2004 à 2008. Co-directeur de la Compagnie l\'Elan Lyrique, il dirige >>l\'Histoire du Soldat>> de Stravinsky et Ramuz en 2004/2005 et, en 2006, une nouvelle production de l\'opéra << le pauvre Matelot >>de Milhaud ainsi que << Le Gendarme incompris >> de Poulenc. En 2007, Gabriel MATTEI crée un nouvel orchestreà géométrie variable l\'Orchestre métropolitain (Orchestre m) avec lequel il se consacre à la musique du XXème siècle,et plus particulièrement aux compositeur français de cette période. Il expérimete également avec ses musiciens diverses formes de concert avec des dispositifs scénographiques expérimentaux (concert à vélo, concert en piscine, concert en appartement...)', 'subBio'),
(3, 'Après avoir développé plusieurs échanges artistiques entre la France et l’Amérique du sud (Venezuela en 2001 et Argentine à partir de 2003) , Gabriel Mattei amorce dès 2012 des collaborations musicales avec la Chine continentale et Taïwan. Chef invité, il a dirigé l’Orchestre Philharmonique de Monte Carlo, l’Orchestre Philharmonique de Strasbourg, l’Orquestre symphonique de Bahía Blanca (Argentine), L’Orchestre de la fondation TECO de Taïwan, l’Orchestre Symphonique Libertador San Martín de Buenos Aires, l’Ensemble du Nouveau Siècle et l’Orchestre du Festival de Neuf-Brisach... ', 'subBio'),
(4, 'cvEnglish.pdf', 'cv'),
(5, 'cvFrench.pdf', 'cv'),
(6, 'cvChinese.pdf', 'cv');

-- --------------------------------------------------------

--
-- Structure de la table `content`
--

CREATE TABLE `content` (
  `idcontent` int(11) NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `subtitle` varchar(150) DEFAULT NULL,
  `new` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `description` text,
  `category` enum('symphonicMusic','performingArt') DEFAULT NULL,
  `best` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `content`
--

INSERT INTO `content` (`idcontent`, `title`, `subtitle`, `new`, `year`, `description`, `category`, `best`) VALUES
(1, 'Beethoven symphony #7,', 'Orquesta Sinfónica Provincial de Bahía Blanca,', 1, 2014, '', 'symphonicMusic', 1),
(3, 'Órgão da casa,', 'Cova do vapor, Lisbonne', 1, 2013, '', 'performingArt', 1),
(8, 'Le Carnaval des Animaux,', 'Saint Saëns', 0, 2016, '', 'symphonicMusic', 1),
(9, 'On social metamorphosis', 'Kadist Art Foundation, Paris', 0, 2012, '', 'performingArt', 1),
(10, 'Symphonie #2 / Borodine,', 'Orquesta Sinfónica\nProvincial de Bahía Blanca', 1, 2017, '', 'symphonicMusic', 1),
(11, 'La dame de chez Maxime... ou presque,', 'Théâtre du Peuple, Bussang', 0, 2017, '', 'performingArt', 0),
(12, 'Lanquan li Jorn Son Lonc en May,', 'Pompidou Paris / ISELP Bruxelles', 1, 2017, NULL, 'performingArt', 0),
(13, 'Spirit of coalition,', 'Parckdesign2016 , Bruxelles', 0, 2016, '', 'performingArt', 0),
(14, 'The Disoriented Cabaret,', 'Dutch Art Institute, Arnhem / Greylight Projects, Bruxelles', 0, 2016, NULL, 'performingArt', 0),
(15, 'Dieu, les caravanes et les voitures,', 'Rodéo d’âme, Strasbourg', 0, 2016, NULL, 'performingArt', 0),
(16, 'Opéra de Quat’sous,', 'Théâtre du Peuple, Bussang', 0, 2016, NULL, 'performingArt', 0),
(17, 'Récital à deux sous,', 'Théâtre du Peuple, Bussang', 0, 2016, NULL, 'performingArt', 0),
(18, 'Contrepoint pour Télévision,', 'Strasbourg', 0, 2014, NULL, 'performingArt', 0),
(19, 'Drapeau sonore,', 'EVENTO 2011, Bordeaux', 0, 2011, NULL, 'performingArt', 0),
(20, 'L\'ORCHESTRE 1 1* 1 2 / 1 2 1 1 - 1percu - cordes,', 'Ceeac, Strasbourg', 0, 2011, NULL, 'performingArt', 0),
(21, 'Une poignée de Terre,', 'Rodéo d’âme, Strasbourg', 0, 2011, NULL, 'performingArt', 0),
(22, 'Histoire du Soldat / Strasvinsky,', 'Elan Lyrique, Strasbourg', 0, 2004, NULL, 'symphonicMusic', 0),
(23, 'Le Pauvre Matelot / Milhaud & Gendarme incompris/ Poulenc,', 'Elan Lyrique, TAPS Strasbourg', 0, 2005, NULL, 'symphonicMusic', 0),
(24, 'La clé des chants,', 'Orchestre Philarmonique de Monte Carlo', 0, 2008, NULL, 'symphonicMusic', 0),
(25, 'HsinChu Young symphonic Orchestra,', 'Taïwan', 0, 2014, NULL, 'symphonicMusic', 0),
(26, 'TECO Foundation Orchestra,', 'Taïwan', 0, 2012, NULL, 'symphonicMusic', 0),
(27, 'Requiem/MOZART,', 'Orchestre M , Strasbourg', 0, 2009, NULL, 'symphonicMusic', 0),
(28, 'Symphonie #8/DVORAK,', 'Orquesta Sinfónica Provincial de Bahía Blanca,', 0, 2013, NULL, 'symphonicMusic', 0),
(29, 'Piano concerto #5 / BEETHOVEN,', 'Orquesta Sinfónica Provincial de Bahía Blanca,', 0, 2013, NULL, 'symphonicMusic', 0),
(30, 'Bastien & Bastienne /MOZART,', 'Orchestre M , Strasbourg', 0, 2013, NULL, 'symphonicMusic', 0),
(31, 'Youth Concert,', 'Kammerensemble Kehl-Strasbourg -Kehl', 0, 2015, NULL, 'symphonicMusic', 0);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `linkType` varchar(100) NOT NULL,
  `idcontent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `media`
--

INSERT INTO `media` (`id`, `link`, `linkType`, `idcontent`) VALUES
(1, 'https://youtu.be/qJHuqI5iDUs', 'video', 1),
(2, 'orgaoDaCasa1.jpg', 'img', 3),
(3, 'orgaoDaCasa2.JPG', 'img', 3),
(4, 'orgaoDaCasa3.jpg', 'img', 3),
(5, 'orgaoDaCasa4.JPG', 'img', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'GMadmin', '8203d12d245cbe5b0031cd8183f61bc1da314b30');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`idcontent`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `content`
--
ALTER TABLE `content`
  MODIFY `idcontent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;