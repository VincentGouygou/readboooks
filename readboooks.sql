-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 déc. 2024 à 14:18
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `readboooks`
--

-- --------------------------------------------------------

--
-- Structure de la table `listdesthemesparlivres`
--

CREATE TABLE `listdesthemesparlivres` (
  `livrethemeId` bigint(20) NOT NULL,
  `idtheme` bigint(20) NOT NULL,
  `idLivre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `listdesthemesparlivres`
--

INSERT INTO `listdesthemesparlivres` (`livrethemeId`, `idtheme`, `idLivre`) VALUES
(1, 5, 1),
(2, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `listlivres`
--

CREATE TABLE `listlivres` (
  `idLivre` int(6) UNSIGNED NOT NULL,
  `useridProprio` bigint(20) NOT NULL,
  `UseridPossess` bigint(20) NOT NULL,
  `dispo` int(2) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `synopsis` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prixCaution` bigint(20) NOT NULL,
  `couvThumbnail` varchar(255) NOT NULL,
  `themes` bigint(20) NOT NULL,
  `note` bigint(20) NOT NULL,
  `nbrPages` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `listlivres`
--

INSERT INTO `listlivres` (`idLivre`, `useridProprio`, `UseridPossess`, `dispo`, `titre`, `format`, `auteur`, `synopsis`, `prixCaution`, `couvThumbnail`, `themes`, `note`, `nbrPages`) VALUES
(1, 1, 0, 1, 'Le bout du fleuve', 'poche', 'James Oliver Curwood', 'Un officier de police, charge de poursuivre un pretendu criminel, se prend d\'une vive sympathie pour celui-ci apres l avoir arrete. II ne tarde pas a acquerir la certitude de l innocence de son prisonnier, avec qui il presente une frappante ressemblance physique. Situation originale, qui engendre bien des peripeties... ', 5, 'https://pictures.abebooks.com/inventory/md/md30345163687.jpg', 1, 5, 183),
(25, 1, 0, 1, 'Le Grand Meaulnes', '', 'Alain-Fournier', 'Œuvre en texte integral, en lien avec l’objet d’étude « Récits d’enfance et d’adolescence » du programme de français en troisième (3e). Résumé Le narrateur, François Seurel, raconte les aventures de son camarade Augustin Meaulnes. Celui-ci tombe fou amoureux d’une mystérieuse jeune fille, mais perd aussitôt sa trace. Les deux amis se lancent alors dans une quête éperdue pour la retrouver. Empreint de nostalgie et largement autobiographique, Le Grand Meaulnes est le roman de la fin de l’adolescence et de l’entrée dans l’âge adulte. L’édition Classiques & Cie collège Par Hélène Ricard Soigneusement annoté, le texte de la pièce est associé à un dossier illustré, qui comprend : – un guide de lecture intitulé « Un récit d’adolescence entre réalité et fiction », avec des repères, un parcours de l œuvre et un groupement de documents sur le thème de la fête galante dans l’art et la littérature, – une enquête documentaire sur l’ école, de Jules Ferry à la veille de la guerre de 14-18.', 0, 'http://books.google.com/books/content?id=jIGNPDRIvAkC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 324),
(26, 1, 0, 1, 'Le préféré', '', 'Bernard Darley', 'Un homme aborde un rivage après le naufrage de son navire. Il est attendu. La ville où il est conduit le reconnaît, lui donne un nom, un passe qui lentement l’enchaîneront. C’est à travers deux vies, deux abandons, deux refus, que le lecteur pénètre, dans des souvenirs qui progressivement se mêlent : ce palais où le naufragé prendra l’existence d’un autre, cette ombre qui fuyait une nuit dans les allées du parc et qu’il avait aimée. L’homme peut-il substituer à son propre passé celui d’un autre, et devenir ainsi son propre préféré ? Et quel est le Prince, autour de qui s’exerce une telle alchimie ? Cette histoire lointaine et proche, prise dans un temps immobile, rejoint celles que les conteurs d’Orient façonnent au gré de leur inspiration, de leur auditoire et de l’implacable lumière du jour.', 0, 'http://books.google.com/books/content?id=iDpYDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 119),
(27, 1, 0, 1, 'Les Misérables', '', 'Victor Hugo', 'Oeuvre en texte abregé, en lien avec le thème « Dénoncer les travers de la société » du nouveau programme de français en 4e. Résumé Jean Valjean, ancien bagnard condamné pour avoir volé du pain, tente de se racheter en se tournant vers le Bien. Son destin croise celui de personnages emblématiques tels que Monseigneur Myriel, Cosette ou encore Gavroche. Le chef-d oeuvre de Victor Hugo dans une version abrégée, accessible à tous les collégiens. Un roman historique et une fresque sociale d une ampleur inégalée. L édition Classiques & Cie collège Par Dominique Lanni. Soigneusement annoté, le texte du récit est associé à un dossier illustré, qui comprend : - un guide de lecture intitulé « Un roman historique et une fresque sociale \", avec des repères, un parcours de l oeuvre et un groupement de documents sur le thème du peuple en colère, - une enquête documentaire sur Paris à l époque de la révolution de Juillet.', 0, 'http://books.google.com/books/content?id=sMkhvNmGENEC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 292),
(28, 1, 0, 1, 'Da Vinci code', '', 'Dan Brown', '« Da Vinci Code est un livre envoûtant, ideal pour les passionnés d histoire, les amateurs de conspirations, les mordus du mystère, pour tous ceux qui aiment les grands récits que l on ne parvient pas à lâcher. J ai adoré ce roman. » Harlan Coben De passage à Paris, Robert Langdon, professeur à Havard et spécialiste de symbologie, est appelé d urgence au Louvre, en pleine nuit. Jacques Saunière, le conservateur en chef a été retrouvé assassiné au milieu de la Grande Galerie. Au côté du cadavre, la police a trouvé un message codé. Langdon et Sophie Neveu, une brillante cryptographe membre de la police, tentent de le résoudre. Ils sont stupéfaits lorsque les premiers indices le conduisent à l oeuvre de Léonard de Vinci. Ils découvrent également que Saunière était membre du Prieuré de Sion, une société secrète dont avaient fait partie Nexton, Boticelli, Léonardo da Vinci, Victor Hugo, et qu il protégeait un secret millénaire. L enquête de nos deux héros les entraînera à travers la France et le Royaume-Uni, non seulement pour chercher une vérité longtemps cachée concernant la Chrétienté, mais également pour échapper à ceux qui voudraient s emparer du secret. Pour réussir, il leur faut résoudre de nombreuses énigmes, et vite, sinon le secret risque d être perdu à tout jamais.', 0, 'http://books.google.com/books/content?id=SteVfQT2WY0C&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 471),
(29, 1, 0, 1, 'Les Misérables', '', 'Victor HUGO', 'Les Miserables est un roman de Victor Hugo paru en 1862. Ce roman littéraire, historique, social et philosophique est l un des plus populaires de la littérature française. Victor Hugo y décrit la vie misérable à Paris et dans la France provinciale. L histoire se déroule au début du XIXème siècle entre la bataille de Waterloo en 1815 et les émeutes de juin 1832. Cette peinture très précise de la vie dans le Paris pauvre et en province en a fait son succès populaire. Témoins de la misère de ce siècle, voire misérables eux-mêmes, les personnages de ce livre illustrent la France et ses injustices sociales. La vie de Jean Valjean, ex bagnard est le fil rouge de ce roman qui se compose de cinq tomes, à savoir: - Tome 1 Fantine - Tome 2 Cosette - Tome 3 Marius - Tome 4 L idylle rue plumet et l épopée rue Saint-Denis - Tome 5 Jean Valjean', 0, 'http://books.google.com/books/content?id=foHPDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 438),
(30, 1, 0, 1, 'Les Misérables', '', 'Victor HUGO', 'Les Miserables est un roman de Victor Hugo paru en 1862. Ce roman littéraire, historique, social et philosophique est l un des plus populaires de la littérature française. Victor Hugo y décrit la vie misérable à Paris et dans la France provinciale. L histoire se déroule au début du XIXème siècle entre la bataille de Waterloo en 1815 et les émeutes de juin 1832. Cette peinture très précise de la vie dans le Paris pauvre et en province en a fait son succès populaire. Témoins de la misère de ce siècle, voire misérables eux-mêmes, les personnages de ce livre illustrent la France et ses injustices sociales. La vie de Jean Valjean, ex bagnard est le fil rouge de ce roman qui se compose de cinq tomes, à savoir: - Tome 1 Fantine - Tome 2 Cosette - Tome 3 Marius - Tome 4 L idylle rue plumet et l épopée rue Saint-Denis - Tome 5 Jean Valjean', 0, 'http://books.google.com/books/content?id=foHPDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 438),
(31, 1, 0, 1, 'Les Misérables', '', 'Victor Hugo', 'Oeuvre en texte abregé, en lien avec le thème « Dénoncer les travers de la société » du nouveau programme de français en 4e. Résumé Jean Valjean, ancien bagnard condamné pour avoir volé du pain, tente de se racheter en se tournant vers le Bien. Son destin croise celui de personnages emblématiques tels que Monseigneur Myriel, Cosette ou encore Gavroche. Le chef-d oeuvre de Victor Hugo dans une version abrégée, accessible à tous les collégiens. Un roman historique et une fresque sociale d une ampleur inégalée. L édition Classiques & Cie collège Par Dominique Lanni. Soigneusement annoté, le texte du récit est associé à un dossier illustré, qui comprend : - un guide de lecture intitulé « Un roman historique et une fresque sociale \", avec des repères, un parcours de l oeuvre et un groupement de documents sur le thème du peuple en colère, - une enquête documentaire sur Paris à l époque de la révolution de Juillet.', 0, 'http://books.google.com/books/content?id=sMkhvNmGENEC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 292),
(32, 1, 0, 1, 'Les Misérables', '', 'Victor Hugo', 'Oeuvre en texte abregé, en lien avec le thème « Dénoncer les travers de la société » du nouveau programme de français en 4e. Résumé Jean Valjean, ancien bagnard condamné pour avoir volé du pain, tente de se racheter en se tournant vers le Bien. Son destin croise celui de personnages emblématiques tels que Monseigneur Myriel, Cosette ou encore Gavroche. Le chef-d oeuvre de Victor Hugo dans une version abrégée, accessible à tous les collégiens. Un roman historique et une fresque sociale d une ampleur inégalée. L édition Classiques & Cie collège Par Dominique Lanni. Soigneusement annoté, le texte du récit est associé à un dossier illustré, qui comprend : - un guide de lecture intitulé « Un roman historique et une fresque sociale \", avec des repères, un parcours de l oeuvre et un groupement de documents sur le thème du peuple en colère, - une enquête documentaire sur Paris à l époque de la révolution de Juillet.', 0, 'http://books.google.com/books/content?id=sMkhvNmGENEC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 292),
(33, 1, 0, 1, 'Les Misérables', '', 'Victor Hugo', 'Oeuvre en texte abregé, en lien avec le thème « Dénoncer les travers de la société » du nouveau programme de français en 4e. Résumé Jean Valjean, ancien bagnard condamné pour avoir volé du pain, tente de se racheter en se tournant vers le Bien. Son destin croise celui de personnages emblématiques tels que Monseigneur Myriel, Cosette ou encore Gavroche. Le chef-d oeuvre de Victor Hugo dans une version abrégée, accessible à tous les collégiens. Un roman historique et une fresque sociale d une ampleur inégalée. L édition Classiques & Cie collège Par Dominique Lanni. Soigneusement annoté, le texte du récit est associé à un dossier illustré, qui comprend : - un guide de lecture intitulé « Un roman historique et une fresque sociale \", avec des repères, un parcours de l oeuvre et un groupement de documents sur le thème du peuple en colère, - une enquête documentaire sur Paris à l époque de la révolution de Juillet.', 0, 'http://books.google.com/books/content?id=sMkhvNmGENEC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 292),
(34, 1, 0, 1, 'Les Misérables', '', 'Victor Hugo', 'Oeuvre en texte abregé, en lien avec le thème « Dénoncer les travers de la société » du nouveau programme de français en 4e. Résumé Jean Valjean, ancien bagnard condamné pour avoir volé du pain, tente de se racheter en se tournant vers le Bien. Son destin croise celui de personnages emblématiques tels que Monseigneur Myriel, Cosette ou encore Gavroche. Le chef-d oeuvre de Victor Hugo dans une version abrégée, accessible à tous les collégiens. Un roman historique et une fresque sociale d une ampleur inégalée. L édition Classiques & Cie collège Par Dominique Lanni. Soigneusement annoté, le texte du récit est associé à un dossier illustré, qui comprend : - un guide de lecture intitulé « Un roman historique et une fresque sociale \", avec des repères, un parcours de l oeuvre et un groupement de documents sur le thème du peuple en colère, - une enquête documentaire sur Paris à l époque de la révolution de Juillet.', 0, 'http://books.google.com/books/content?id=sMkhvNmGENEC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 292),
(35, 1, 0, 1, 'Les Misérables', '', 'Victor Hugo', 'Oeuvre en texte abregé, en lien avec le thème « Dénoncer les travers de la société » du nouveau programme de français en 4e. Résumé Jean Valjean, ancien bagnard condamné pour avoir volé du pain, tente de se racheter en se tournant vers le Bien. Son destin croise celui de personnages emblématiques tels que Monseigneur Myriel, Cosette ou encore Gavroche. Le chef-d oeuvre de Victor Hugo dans une version abrégée, accessible à tous les collégiens. Un roman historique et une fresque sociale d une ampleur inégalée. L édition Classiques & Cie collège Par Dominique Lanni. Soigneusement annoté, le texte du récit est associé à un dossier illustré, qui comprend : - un guide de lecture intitulé « Un roman historique et une fresque sociale \", avec des repères, un parcours de l oeuvre et un groupement de documents sur le thème du peuple en colère, - une enquête documentaire sur Paris à l époque de la révolution de Juillet.', 0, 'http://books.google.com/books/content?id=sMkhvNmGENEC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 292),
(36, 1, 0, 1, 'Da Vinci code', '', 'Dan Brown', '« Da Vinci Code est un livre envoûtant, ideal pour les passionnés d histoire, les amateurs de conspirations, les mordus du mystère, pour tous ceux qui aiment les grands récits que l on ne parvient pas à lâcher. J ai adoré ce roman. » Harlan Coben De passage à Paris, Robert Langdon, professeur à Havard et spécialiste de symbologie, est appelé d urgence au Louvre, en pleine nuit. Jacques Saunière, le conservateur en chef a été retrouvé assassiné au milieu de la Grande Galerie. Au côté du cadavre, la police a trouvé un message codé. Langdon et Sophie Neveu, une brillante cryptographe membre de la police, tentent de le résoudre. Ils sont stupéfaits lorsque les premiers indices le conduisent à l oeuvre de Léonard de Vinci. Ils découvrent également que Saunière était membre du Prieuré de Sion, une société secrète dont avaient fait partie Nexton, Boticelli, Léonardo da Vinci, Victor Hugo, et qu il protégeait un secret millénaire. L enquête de nos deux héros les entraînera à travers la France et le Royaume-Uni, non seulement pour chercher une vérité longtemps cachée concernant la Chrétienté, mais également pour échapper à ceux qui voudraient s emparer du secret. Pour réussir, il leur faut résoudre de nombreuses énigmes, et vite, sinon le secret risque d être perdu à tout jamais.', 0, 'http://books.google.com/books/content?id=SteVfQT2WY0C&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 471),
(37, 1, 0, 1, 'Nos jeux préférés du lundi (Les récrés d Agathe)', '', 'Jean-Philippe Chabot', 'Le lundi, je suis très contente de retrouver mes copains. Ce matin, on a ecrit chacun notre jeu préféré sur un papier qu’on a mis dans la casquette de Léonard. Et chacun son tour, on a tiré au sort un jeu. Quelle journée géniale ! Le temps d’une journée, Pakita entraîne le lecteur de récré en récré. Les récrés d Agathe, une mini série qui plaira à tous les lecteurs de L’école d’Agathe, pour s’amuser et faire de la récréation un moment encore plus original et ludique.', 0, 'http://books.google.com/books/content?id=g4_ICQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 48),
(38, 1, 0, 1, 'Nos jeux préférés du lundi (Les récrés d Agathe)', '', 'Jean-Philippe Chabot', 'Le lundi, je suis très contente de retrouver mes copains. Ce matin, on a ecrit chacun notre jeu préféré sur un papier qu’on a mis dans la casquette de Léonard. Et chacun son tour, on a tiré au sort un jeu. Quelle journée géniale ! Le temps d’une journée, Pakita entraîne le lecteur de récré en récré. Les récrés d Agathe, une mini série qui plaira à tous les lecteurs de L’école d’Agathe, pour s’amuser et faire de la récréation un moment encore plus original et ludique.', 0, 'http://books.google.com/books/content?id=Smc2DAAAQBAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', 0, 0, 48),
(39, 1, 0, 1, 'Maigret et la vieille dame', '', 'Georges Simenon', 'Une vieille dame indigne A Etretat, un dimanche soir, les enfants de Valentine Besson sont reunis autour de leur mère pour fêter son anniversaire. Au cours de la nuit, Rose Trochu, la servante, meurt empoisonnée après avoir bu un verre d eau censé contenir des somnifères et destiné à Valentine. C est du moins ce qu affirme la vieille dame à Maigret lorsque, prétendant avoir échappé à la mort de justesse, elle fait appel à lui pour découvrir l assassin. Adapté pour la télévision en 1977, dans une réalisation de Stéphane Bertin sous le titre Maigret et la dame d Etretat avec Jean Richard (Commissaire Maigret), Simone Valère (Valentine Besson), Victor Garrivier (Théo Besson) et en 1995, par David Delrieux, avec Bruno Cremer (Commissaire Maigret), Odette Laure (Valentine Besson), Béatrice Agenin (Arlette). Retrouvez Simenon au Livre de Poche : https://www.livredepoche.com/auteur/georges-simenon et dans les anthologies publiées chez Omnibus, une collection des Presses de la Cité https://georges-simenon.lisez.com/', 0, 'http://books.google.com/books/content?id=by4DT2wL4k0C&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 133),
(40, 1, 0, 1, 'Maigret et la vieille dame', '', 'Georges Simenon', 'Une vieille dame indigne A Etretat, un dimanche soir, les enfants de Valentine Besson sont reunis autour de leur mère pour fêter son anniversaire. Au cours de la nuit, Rose Trochu, la servante, meurt empoisonnée après avoir bu un verre d eau censé contenir des somnifères et destiné à Valentine. C est du moins ce qu affirme la vieille dame à Maigret lorsque, prétendant avoir échappé à la mort de justesse, elle fait appel à lui pour découvrir l assassin. Adapté pour la télévision en 1977, dans une réalisation de Stéphane Bertin sous le titre Maigret et la dame d Etretat avec Jean Richard (Commissaire Maigret), Simone Valère (Valentine Besson), Victor Garrivier (Théo Besson) et en 1995, par David Delrieux, avec Bruno Cremer (Commissaire Maigret), Odette Laure (Valentine Besson), Béatrice Agenin (Arlette). Retrouvez Simenon au Livre de Poche : https://www.livredepoche.com/auteur/georges-simenon et dans les anthologies publiées chez Omnibus, une collection des Presses de la Cité https://georges-simenon.lisez.com/', 0, 'http://books.google.com/books/content?id=by4DT2wL4k0C&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 133),
(41, 6, 0, 1, 'Columbo, la lutte des classes ce soir à la télé', '', 'Lilian Mathieu', 'Quand un modeste policier enquête sur les riches et les demasque. Telle est la vision réjouissante que propose le sociologue Lilian Mathieu de la célèbre série télé américaine des années 70 80. Il démontre comment l inégalité sociale, culturelle et financière définit les rapports entre le lieutenant à l imper fripé et les meurtriers de la haute société californienne. Une analyse jubilatoire pour un revival nourri aux ressources des sciences sociales.', 0, 'http://books.google.com/books/content?id=CGSMDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 0, 0, 94);

-- --------------------------------------------------------

--
-- Structure de la table `listthemes`
--

CREATE TABLE `listthemes` (
  `idtheme` int(4) NOT NULL,
  `nomTheme1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `listthemes`
--

INSERT INTO `listthemes` (`idtheme`, `nomTheme1`) VALUES
(1, 'Roman'),
(2, 'Aventure'),
(3, 'Policier'),
(4, 'Drame'),
(5, 'Fantastique'),
(6, 'Manga'),
(7, 'Humour'),
(8, 'Bibliographie'),
(9, 'Politique'),
(10, 'Philosophie'),
(11, 'Sciences'),
(12, 'Psychologie');

-- --------------------------------------------------------

--
-- Structure de la table `listusers`
--

CREATE TABLE `listusers` (
  `userId` int(6) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `dateInscript` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `note` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `listusers`
--

INSERT INTO `listusers` (`userId`, `nom`, `prenom`, `motdepasse`, `telephone`, `dateInscript`, `note`, `email`) VALUES
(1, 'Mathis', 'Knoll', 'alicia46', '0607229383', '2024-12-11 09:58:59', 5, 'mathis.gouygou@gmx.fr'),
(2, 'Mathiss', 'Knoll', 'alicia46', '0607229383', '2024-12-08 16:43:34', 0, 'mathis.gousygou@gmx.fr'),
(3, 'Matshiss', 'Ksnoll', 'alicia46', '0607229383', '2024-12-08 16:43:52', 0, 'mathsis.gousygou@gmx.fr'),
(4, 'Matshiss', 'Ksnoll', 'alicia46', '0607229383', '2024-12-08 16:46:37', 0, 'mathvsis.gousygou@gmx.fr'),
(5, 'Matshiss', 'Ksnoll', 'alicia46', '0607229383', '2024-12-08 16:48:07', 0, 'mathvsis.govusygou@gmx.fr'),
(6, 'Matshiss', 'Ksnoll', 'alicia46', '0607229383', '2024-12-08 17:02:19', 0, 'mathvsis.gotvusygou@gmx.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `listdesthemesparlivres`
--
ALTER TABLE `listdesthemesparlivres`
  ADD PRIMARY KEY (`livrethemeId`);

--
-- Index pour la table `listlivres`
--
ALTER TABLE `listlivres`
  ADD PRIMARY KEY (`idLivre`);

--
-- Index pour la table `listthemes`
--
ALTER TABLE `listthemes`
  ADD PRIMARY KEY (`idtheme`);

--
-- Index pour la table `listusers`
--
ALTER TABLE `listusers`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `listdesthemesparlivres`
--
ALTER TABLE `listdesthemesparlivres`
  MODIFY `livrethemeId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `listlivres`
--
ALTER TABLE `listlivres`
  MODIFY `idLivre` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `listthemes`
--
ALTER TABLE `listthemes`
  MODIFY `idtheme` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `listusers`
--
ALTER TABLE `listusers`
  MODIFY `userId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
