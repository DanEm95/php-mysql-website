-- 009_personen_termine_daten.sql

use mvc3

SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE
'personen_termine.csv' INTO TABLE `personen_termine`
CHARACTER SET 'utf8'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(personen_id,termine_id);

SET FOREIGN_KEY_CHECKS=1;
