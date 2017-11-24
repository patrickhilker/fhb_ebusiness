CREATE TABLE `grandefinale` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `anrede` VARCHAR(7) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `strasse` VARCHAR(255) NOT NULL,
  `plz` VARCHAR(5) NOT NULL,
  `ort` VARCHAR(255) NOT NULL,
  `jahreszeit` VARCHAR(8) NOT NULL,
  `wuensche` TEXT NOT NULL,
PRIMARY KEY (`id`));