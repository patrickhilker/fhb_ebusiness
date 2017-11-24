CREATE TABLE `erstemysqltabelle` ( 
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `vorname` VARCHAR(255) NOT NULL,
  `nachname` VARCHAR(255) NOT NULL,
  `strasse` VARCHAR(255) NOT NULL,
  `hausnummer` VARCHAR(4) NOT NULL,
  `plz` VARCHAR(5) NOT NULL,
  `stadt` VARCHAR(255) NOT NULL,
PRIMARY KEY (`id`));