-- 005_kategorien_daten.sql

use mvc3

LOAD DATA LOCAL INFILE
'kategorien.csv' INTO TABLE `kategorien`
CHARACTER SET 'utf8'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(kategorien);
