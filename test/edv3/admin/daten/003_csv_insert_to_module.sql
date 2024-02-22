USE edv3;

LOAD DATA INFILE 'C:/xampp/htdocs/fah31/phpb/edv3/admin/daten/CSV/module.csv'
INTO TABLE module
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(id, titel, beschreibung, preis);
