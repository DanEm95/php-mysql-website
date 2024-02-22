-- 007_termine_daten.sql

use mvc3

LOAD DATA LOCAL INFILE
'termine.csv' INTO TABLE `termine`
CHARACTER SET 'utf8'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(beginn,ende,seminare_id,standorte_id,raum);
