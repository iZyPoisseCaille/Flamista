CREATE TABLE IF NOT EXISTS `biere` (
  `num_biere` INT,
  `nom` VARCHAR(50) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `composition_1` VARCHAR(255) NOT NULL,
  `composition_2` VARCHAR(255) NOT NULL,
  `composition_3` VARCHAR(255) NOT NULL,
  `composition_4` VARCHAR(255) NOT NULL,
  `composition_5` VARCHAR(255) NOT NULL,
  PRIMARY KEY(`num_biere`)
);

CREATE TABLE IF NOT EXISTS `client` (
	`id_client` INT AUTO_INCREMENT,
	`nom` VARCHAR(255) NOT NULL,
	`age` INTEGER NOT NULL,
	PRIMARY KEY(`id_client`)
);

CREATE TABLE IF NOT EXISTS `facture` (
	`num_facture` INT AUTO_INCREMENT,
	`dateF` DATE NOT NULL,
	`id_client` INT NOT NULL,
	PRIMARY KEY(`num_facture`),
	FOREIGN KEY(`id_client`) REFERENCES `client`(`id_client`)
);

CREATE TABLE IF NOT EXISTS `teammateMMI` (
	`id_teammate` INT,
	`nom` VARCHAR(255) NOT NULL,
	`role` VARCHAR(255) NOT NULL,
	`description` VARCHAR(500) NOT NULL,
	PRIMARY KEY(`id_teammate`)
);

CREATE TABLE IF NOT EXISTS `teammateGB` (
	`id_teammate` INT,
	`nom` VARCHAR(255) NOT NULL,
	`role` VARCHAR(255) NOT NULL,
	`description` VARCHAR(500) NOT NULL,
	PRIMARY KEY(`id_teammate`)
);
