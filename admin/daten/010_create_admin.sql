-- 010_create_admin.sql

use mvc3

INSERT INTO admins(login,password) VALUES('admin','admin');

UPDATE admins
SET password = '$2y$10$j8LA2gr/H.aQGnWoM8uoBO7xNKxDG2K7AL3E4xjTkE76awSmrf7B6'
WHERE id;