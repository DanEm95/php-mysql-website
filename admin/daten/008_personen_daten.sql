-- 008_personen_daten.sql

use mvc3

LOAD DATA LOCAL INFILE
'personen.csv' INTO TABLE `personen`
CHARACTER SET 'utf8'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
(anrede,vorname,nachname,strasse,hausnr,plz,ort,email,password);
