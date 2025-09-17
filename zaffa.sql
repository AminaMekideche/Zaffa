-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 26 mai 2024 à 10:45
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
-- Base de données : `zaffa`
--

-- --------------------------------------------------------

--
-- Structure de la table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(11) NOT NULL,
  `invitees_count` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL,
  `main_dishes` varchar(255) DEFAULT NULL,
  `side_dishes` varchar(255) DEFAULT NULL,
  `salads` varchar(255) DEFAULT NULL,
  `drinks` varchar(255) DEFAULT NULL,
  `desserts` varchar(255) DEFAULT NULL,
  `arabic_firstname` varchar(255) NOT NULL,
  `arabic_lastname` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `event_details`
--

INSERT INTO `event_details` (`id`, `invitees_count`, `start_date`, `start_time`, `end_date`, `end_time`, `main_dishes`, `side_dishes`, `salads`, `drinks`, `desserts`, `arabic_firstname`, `arabic_lastname`, `phone`, `email`) VALUES
(1, 20, '2024-05-22', '03:01:00', '2024-05-31', '00:06:00', 'رشتة', 'طاجين زيتون', 'سلطة الفتوش', 'مشروبات طبيعية', 'Tiramisu', 'امنة', 'مكيدش', '0659243951', 'amina39@gmail.com'),
(2, 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', ''),
(3, 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', ''),
(4, 40, '2024-05-15', '02:16:00', '2024-05-29', '04:16:00', 'رشتة', 'مثوم', 'سلطة سيزار', 'مشروبات غازية', 'Tiramisu', 'سيرين', 'بن زغيبة', '0773227821', 'sirinbnz@gmail.com'),
(5, 60, '2024-05-23', '02:30:00', '2024-05-30', '04:35:00', 'شخشوخة', 'شربة فريك', 'سلطة الفتوش', 'مشروبات طبيعية', 'Mini cheesecake', 'ايمان', 'بورحلة', '0645241511', 'iman@gmail.com'),
(6, 60, '2024-05-23', '02:30:00', '2024-05-30', '04:35:00', 'شخشوخة', 'شربة فريك', 'سلطة الفتوش', 'مشروبات طبيعية', 'Mini cheesecake', 'ايمان', 'بورحلة', '0645241511', 'iman@gmail.com'),
(7, 50, '2024-05-08', '00:48:00', '2024-05-31', '05:46:00', 'رشتة', 'مثوم', 'سلطة سيزار', 'مشروبات غازية', 'Tiramisu,Mini tartelette', 'اماني', 'جعيجع', '0658451211', 'amani@gmail.com'),
(8, 50, '2024-05-08', '00:48:00', '2024-05-31', '05:46:00', 'رشتة', 'مثوم', 'سلطة سيزار', 'مشروبات غازية', 'Tiramisu,Mini tartelette', 'اماني', 'جعيجع', '0658451211', 'amani@gmail.com'),
(9, 40, '2024-05-30', '04:17:00', '2024-06-06', '06:17:00', 'شخشوخة', 'طاجين زيتون,مثوم', 'سلطة سيزار', 'تاي', 'Mini cheesecake', 'امنة', 'مكيدش', '0695241322', 'amina@gmail.com'),
(10, 20, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', 'مثوم', '', '', '', '', '', '', ''),
(11, 20, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', 'مثوم', '', '', '', '', '', '', ''),
(12, 20, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', ''),
(13, 20, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', ''),
(14, 20, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', ''),
(15, 20, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', ''),
(16, 20, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', ''),
(17, 20, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', ''),
(18, 20, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', ''),
(19, 20, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '', '', '', '', '', '', '', ''),
(20, 120, '2024-05-30', '13:00:00', '2024-06-02', '13:00:00', 'كسكس', 'مثوم', 'سلطة ماسيدوان', 'مشروبات غازية,تاي', 'Tiramisu', 'سامي', 'بن فلان', '0657654434', 'sami@gmail.com'),
(21, 130, '2024-05-19', '14:40:00', '2024-05-30', '14:40:00', 'كسكس', 'طاجين زيتون', 'سلطة سيزار', 'مشروبات غازية,تاي', 'Mini tartelette', 'سامي', 'بن فلان', '0657654434', 'sami@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
