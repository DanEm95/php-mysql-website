-- 006_standorte_daten.sql

use mvc3

LOAD DATA LOCAL INFILE
'standorte.csv' INTO TABLE `standorte`
CHARACTER SET 'utf8'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(standort);
