-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage de la structure de la table bd_contacts. contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) unsigned DEFAULT NULL,
  `c_id` int(11) unsigned DEFAULT NULL,
  `nom_prenom` varchar(250) DEFAULT NULL,
  `tel_mobile` varchar(20) DEFAULT NULL,
  `tel_fixe` varchar(20) DEFAULT NULL,
  `detail` text,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 MAX_ROWS=3 AVG_ROW_LENGTH=3 COMMENT='Tables des contacts';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bd_contacts. contact_groupe
CREATE TABLE IF NOT EXISTS `contact_groupe` (
  `id` int(11) unsigned DEFAULT NULL,
  `id_contact` int(11) unsigned DEFAULT NULL,
  `id_groupe` smallint(5) unsigned DEFAULT NULL,
  KEY `Index 1` (`id`),
  KEY `FK_contact_groupe_contacts` (`id_contact`),
  KEY `FK_contact_groupe_goupes` (`id_groupe`),
  CONSTRAINT `FK_contact_groupe_contacts` FOREIGN KEY (`id_contact`) REFERENCES `contacts` (`id`),
  CONSTRAINT `FK_contact_groupe_goupes` FOREIGN KEY (`id_groupe`) REFERENCES `goupes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table contact groupe';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bd_contacts. favoris
CREATE TABLE IF NOT EXISTS `favoris` (
  `id` int(11) unsigned DEFAULT NULL,
  `id_contact` int(11) unsigned DEFAULT NULL,
  KEY `Index 1` (`id`,`id_contact`),
  KEY `FK__contacts` (`id_contact`),
  CONSTRAINT `FK__contacts` FOREIGN KEY (`id_contact`) REFERENCES `contacts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table des favoris';

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de la table bd_contacts. goupes
CREATE TABLE IF NOT EXISTS `goupes` (
  `id` smallint(5) unsigned DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `couleur` varchar(30) DEFAULT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table des groupes ';

-- Les données exportées n'étaient pas sélectionnées.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
