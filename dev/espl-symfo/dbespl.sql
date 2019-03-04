-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 04 mars 2019 à 15:08
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
  `jour_naissance_candidat` int(11) NOT NULL,
  `mois_naissance_candidat` int(11) NOT NULL,
  `annee_naissance_candidat` int(11) NOT NULL,
  `lieu_naissance_candidat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_candidat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixe_candidat` int(11) NOT NULL,
  `mobile_candidat` int(11) NOT NULL,
  `adresse_candidat` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_candidat` int(11) NOT NULL,
  `ville_candidat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secu_candidat` int(11) NOT NULL,
  `permis_candidat` tinyint(1) NOT NULL,
  `code_acces_candidat` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat_dossier_candidat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_formation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `id` int(11) NOT NULL,
  `nom_ecole` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `nom_formation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ecole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `garant`
--

CREATE TABLE `garant` (
  `id` int(11) NOT NULL,
  `nom_garant` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_garant` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_garant` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_garant` int(11) NOT NULL,
  `lien_parente` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_garant` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_garant` int(11) NOT NULL,
  `ville_garant` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_garant` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entreprise_garant` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_candidat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `charge_recrutement`
--
ALTER TABLE `charge_recrutement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `garant`
--
ALTER TABLE `garant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
