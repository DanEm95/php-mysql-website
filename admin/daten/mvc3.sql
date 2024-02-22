CREATE DATABASE IF NOT EXISTS mvc3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

USE mvc3;

-- mysql -u root < mvc3.sql


-- admins = {id, login, password}
--
CREATE TABLE IF NOT EXISTS admins
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	login VARCHAR(30) NOT NULL UNIQUE,
	password VARCHAR(256) NOT NULL
)DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- seminare = {id, titel, beschreibung, preis, kategorien_id}
--

CREATE TABLE IF NOT EXISTS seminare
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	titel VARCHAR(30) NOT NULL UNIQUE,
	beschreibung TEXT NOT NULL,
	preis DECIMAL(6,2) NOT NULL,
	kategorien_id INT NOT NULL
)DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS personen
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	anrede VARCHAR(30) NOT NULL,
	vorname VARCHAR(30) NOT NULL,
	nachname VARCHAR(30) NOT NULL,
	strasse VARCHAR(50) NOT NULL,
	hausnr INT NOT NULL,
	plz INT NOT NULL,
	ort VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(256) NOT NULL
)DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS termine
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	beginn DATE NOT NULL,
	ende DATE NOT NULL,
	seminare_id INT NOT NULL,
	standorte_id INT NOT NULL,
	raum VARCHAR(30) NOT NULL
)DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS personen_termine
(
	personen_id INT NOT NULL,
	termine_id INT NOT NULL
)DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS standorte
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	standort VARCHAR(50) NOT NULL UNIQUE
)DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS kategorien
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	kategorien VARCHAR(30) NOT NULL
)DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
