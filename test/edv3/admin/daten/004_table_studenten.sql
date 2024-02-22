USE edv3;

CREATE TABLE IF NOT EXISTS studenten (
	id INT PRIMARY KEY AUTO_INCREMENT,
	anrede VARCHAR(30) NOT NULL,
	vorname VARCHAR(30) NOT NULL,
	nachname VARCHAR(30) NOT NULL,       
	ort VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL DEFAULT '',
	passwort VARCHAR(60) NOT NULL,
	UNIQUE (email)
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
