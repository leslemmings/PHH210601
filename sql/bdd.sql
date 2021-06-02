DROP DATABASE IF EXISTS 'magasin';
CREATE DATABASE 'magasin';
USE 'magasin';


-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'produits'
-- 
-- ---

DROP TABLE IF EXISTS `produits`;
		
CREATE TABLE `produits` (
  `idproduit` INTEGER NOT NULL AUTO_INCREMENT,
  `idcat` INTEGER NOT NULL,
  `titre` VARCHAR(32) NOT NULL,
  `ref` VARCHAR(14) NOT NULL,
  `prix` DOUBLE NOT NULL DEFAULT 0.0,
  `photo` VARCHAR(256) NULL DEFAULT NULL,
  `description` VARCHAR(128) NULL DEFAULT NULL,
  PRIMARY KEY (`idproduit`)
);

-- ---
-- Table 'panier'
-- 
-- ---

DROP TABLE IF EXISTS `panier`;
		
CREATE TABLE `panier` (
  `idpanier` INTEGER NOT NULL AUTO_INCREMENT,
  `idcli` INTEGER NOT NULL,
  `date` DATETIME NULL DEFAULT now(),
  PRIMARY KEY (`idpanier`)
);

-- ---
-- Table 'panier_produit'
-- 
-- ---

DROP TABLE IF EXISTS `panier_produit`;
		
CREATE TABLE `panier_produit` (
  `idpp_panier` INTEGER NOT NULL,
  `idpp_produit` INTEGER NOT NULL,
  `quantite` INTEGER NOT NULL DEFAULT 0,
  PRIMARY KEY (`idpp_panier`, `idpp_produit`)
);

-- ---
-- Table 'categorie'
-- 
-- ---

DROP TABLE IF EXISTS `categorie`;
		
CREATE TABLE `categorie` (
  `idcategorie` INTEGER NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(32) NOT NULL,
  `description` VARCHAR(128) NULL DEFAULT NULL,
  PRIMARY KEY (`idcategorie`)
);

-- ---
-- Table 'clients'
-- 
-- ---

DROP TABLE IF EXISTS `clients`;
		
CREATE TABLE `clients` (
  `idclient` INTEGER NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(32) NOT NULL,
  `prenom` VARCHAR(32) NULL,
  `mail` VARCHAR(48) NULL DEFAULT NULL,
  `adresse` VARCHAR(128) NULL DEFAULT NULL,
  `mdp` VARCHAR(32) NOT NULL,
  `login` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`idclient`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `produits` ADD FOREIGN KEY (idcat) REFERENCES `categorie` (`idcategorie`);
ALTER TABLE `panier` ADD FOREIGN KEY (idcli) REFERENCES `clients` (`idclient`);
ALTER TABLE `panier_produit` ADD FOREIGN KEY (idpp_panier) REFERENCES `panier` (`idpanier`);
ALTER TABLE `panier_produit` ADD FOREIGN KEY (idpp_produit) REFERENCES `produits` (`idproduit`);

-- ---
-- Table Properties
-- ---
