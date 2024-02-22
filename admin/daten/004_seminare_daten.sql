-- 004_seminare_daten.sql

use mvc3

SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE
'seminare.csv' INTO TABLE `seminare`
CHARACTER SET 'utf8'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(titel, beschreibung, preis, kategorien_id);

SET FOREIGN_KEY_CHECKS=1;