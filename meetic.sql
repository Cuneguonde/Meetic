DROP DATABASE IF EXISTS meetic;
CREATE DATABASE meetic;

USE meetic;
CREATE TABLE `registered_users` (
  
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateDeNaissance` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `loisir` varchar(255) NOT NULL,
     PRIMARY KEY (id));


INSERT INTO `registered_users` (`nom`, `prenom`, `dateDeNaissance`, `genre`, `ville`,`email`,`mdp`,`loisir`) VALUES
('Antoine', 'Philippe', 'peuimporte', 'homme','Ivry','genphilippeantoine@gmail.com','password','natation');




