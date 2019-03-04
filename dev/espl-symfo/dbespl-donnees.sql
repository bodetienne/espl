-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 04 mars 2019 à 16:50
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

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id`, `nom_candidat`, `prenom_candidat`, `jour_naissance_candidat`, `mois_naissance_candidat`, `annee_naissance_candidat`, `lieu_naissance_candidat`, `mail_candidat`, `fixe_candidat`, `mobile_candidat`, `adresse_candidat`, `cp_candidat`, `ville_candidat`, `secu_candidat`, `permis_candidat`, `code_acces_candidat`, `etat_dossier_candidat`, `id_formation`) VALUES
(1, 'Bodet', 'Etienne', 20, 7, 1999, 'Cholet', 'etienne.bodet@my-digital-school.org', 0, 0, 'Loublande', 79700, 'Mauléon', 0, 1, '497985', 'en_cours', 1);

--
-- Déchargement des données de la table `charge_recrutement`
--

INSERT INTO `charge_recrutement` (`id`, `nom_cdr`, `prenom_cdr`, `mail_cdr`, `id_ecole`) VALUES
(1, 'Belsoeur', 'Géraldine', 'geraldine.belsoeur@espl.fr', 1);

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id`, `nom_ecole`) VALUES
(1, 'MyDigitalSchool');

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `nom_formation`, `id_ecole`) VALUES
(1, 'B3 Spécialisation Développeur Web', 1);

--
-- Déchargement des données de la table `garant`
--

INSERT INTO `garant` (`id`, `nom_garant`, `prenom_garant`, `mail_garant`, `tel_garant`, `lien_parente`, `adresse_garant`, `cp_garant`, `ville_garant`, `profession_garant`, `entreprise_garant`, `id_candidat`) VALUES
(1, 'Bodet', 'Fabienne', 'fabienne.bodet@gmail.com', 0, 'Mère', 'Loublande', 79700, 'Mauléon', NULL, NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
