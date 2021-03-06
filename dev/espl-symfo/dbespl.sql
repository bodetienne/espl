-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 06 mars 2019 à 14:10
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbespl`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE `candidat` (
  `id` int(11) NOT NULL,
  `nom_candidat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_candidat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jour_naissance_candidat` int(2) NOT NULL,
  `mois_naissance_candidat` int(2) NOT NULL,
  `annee_naissance_candidat` int(4) NOT NULL,
  `lieu_naissance_candidat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_candidat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixe_candidat` int(10) NOT NULL,
  `mobile_candidat` int(10) NOT NULL,
  `adresse_candidat` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_candidat` int(5) NOT NULL,
  `ville_candidat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secu_candidat` int(15) NOT NULL,
  `permis_candidat` tinyint(1) NOT NULL,
  `code_acces_candidat` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat_dossier_candidat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_formation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id`, `nom_candidat`, `prenom_candidat`, `jour_naissance_candidat`, `mois_naissance_candidat`, `annee_naissance_candidat`, `lieu_naissance_candidat`, `mail_candidat`, `fixe_candidat`, `mobile_candidat`, `adresse_candidat`, `cp_candidat`, `ville_candidat`, `secu_candidat`, `permis_candidat`, `code_acces_candidat`, `etat_dossier_candidat`, `id_formation`) VALUES
(1, 'Bodet', 'Etienne', 20, 7, 1999, 'Cholet', 'etienne.bodet@my-digital-school.org', 0, 0, 'Loublande', 79700, 'Mauléon', 0, 1, '497985', 'en_cours', 3);

-- --------------------------------------------------------

--
-- Structure de la table `charge_recrutement`
--

CREATE TABLE `charge_recrutement` (
  `id` int(11) NOT NULL,
  `nom_cdr` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_cdr` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_cdr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ecole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `charge_recrutement`
--

INSERT INTO `charge_recrutement` (`id`, `nom_cdr`, `prenom_cdr`, `mail_cdr`, `id_ecole`) VALUES
(1, 'Belsoeur', 'Géraldine', 'geraldine.belsoeur@espl.fr', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `id` int(11) NOT NULL,
  `nom_ecole` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id`, `nom_ecole`) VALUES
(1, 'MyDigitalSchool');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `nom_formation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ecole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `nom_formation`, `id_ecole`) VALUES
(1, 'Bachelor Cycle Web & Digital - Année 1', 1),
(2, 'Bachelor Cycle Web & Digital - Année 2', 1),
(3, 'B3 Spécialisation Développeur Web', 1),
(4, 'B3 Spécialisation Webdesign', 1),
(5, 'B3 Spécialisation Webmarketing & Social Media', 1),
(6, 'B3 Spécialisation E-Business', 1),
(7, 'MBA Entrepreneuriat Web & Digital - Année 1', 1),
(8, 'MBA Expert Web & Digital - Année 1', 1),
(9, 'MBA Entrepreneuriat Web & Digital - Année 2', 1),
(10, 'MBA Expert Web & Digital - Année 2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `garant`
--

CREATE TABLE `garant` (
  `id` int(11) NOT NULL,
  `nom_garant` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_garant` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_garant` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_garant` int(10) NOT NULL,
  `lien_parente` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_garant` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_garant` int(5) NOT NULL,
  `ville_garant` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_garant` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entreprise_garant` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_candidat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `garant`
--

INSERT INTO `garant` (`id`, `nom_garant`, `prenom_garant`, `mail_garant`, `tel_garant`, `lien_parente`, `adresse_garant`, `cp_garant`, `ville_garant`, `profession_garant`, `entreprise_garant`, `id_candidat`) VALUES
(1, 'Bodet', 'Fabienne', 'fabienne.bodet@gmail.com', 0, 'Mère', 'Loublande', 79700, 'Mauléon', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `piece_jointe`
--

CREATE TABLE `piece_jointe` (
  `id` int(11) NOT NULL,
  `photo_identite` longblob NOT NULL,
  `releve_notes` longblob,
  `diplome` longblob,
  `cv` longblob NOT NULL,
  `lettre_motivation` longblob NOT NULL,
  `piece_identite` longblob NOT NULL,
  `credits_ects` longblob,
  `id_candidat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `intitule_question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ecole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reponse_specifique`
--

CREATE TABLE `reponse_specifique` (
  `id` int(11) NOT NULL,
  `dossier_reflexion` longblob NOT NULL,
  `connaissance_ecole` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `participation_jpo` tinyint(1) NOT NULL,
  `questions_prealables` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_candidat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sous_question`
--

CREATE TABLE `sous_question` (
  `id` int(11) NOT NULL,
  `option_ss_question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKformation` (`id_formation`);

--
-- Index pour la table `charge_recrutement`
--
ALTER TABLE `charge_recrutement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKecole2` (`id_ecole`);

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKecole` (`id_ecole`);

--
-- Index pour la table `garant`
--
ALTER TABLE `garant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKcandidat` (`id_candidat`);

--
-- Index pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKcandidat2` (`id_candidat`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKecole3` (`id_ecole`);

--
-- Index pour la table `reponse_specifique`
--
ALTER TABLE `reponse_specifique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKcandidat3` (`id_candidat`);

--
-- Index pour la table `sous_question`
--
ALTER TABLE `sous_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKquestion` (`id_question`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `charge_recrutement`
--
ALTER TABLE `charge_recrutement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `garant`
--
ALTER TABLE `garant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reponse_specifique`
--
ALTER TABLE `reponse_specifique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sous_question`
--
ALTER TABLE `sous_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD CONSTRAINT `FKformation` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id`);

--
-- Contraintes pour la table `charge_recrutement`
--
ALTER TABLE `charge_recrutement`
  ADD CONSTRAINT `FKecole2` FOREIGN KEY (`id_ecole`) REFERENCES `ecole` (`id`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FKecole` FOREIGN KEY (`id_ecole`) REFERENCES `ecole` (`id`);

--
-- Contraintes pour la table `garant`
--
ALTER TABLE `garant`
  ADD CONSTRAINT `FKcandidat` FOREIGN KEY (`id_candidat`) REFERENCES `garant` (`id`);

--
-- Contraintes pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  ADD CONSTRAINT `FKcandidat2` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FKecole3` FOREIGN KEY (`id_ecole`) REFERENCES `ecole` (`id`);

--
-- Contraintes pour la table `reponse_specifique`
--
ALTER TABLE `reponse_specifique`
  ADD CONSTRAINT `FKcandidat3` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`);

--
-- Contraintes pour la table `sous_question`
--
ALTER TABLE `sous_question`
  ADD CONSTRAINT `FKquestion` FOREIGN KEY (`id_question`) REFERENCES `question` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
