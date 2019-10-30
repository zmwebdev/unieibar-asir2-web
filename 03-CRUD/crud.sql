/* https://mariadb.com/kb/en/library/documentation/ */
/* databasea import */
/* $mysql -u user -p < crud.sql */

CREATE DATABASE IF NOT EXISTS asir2_crud;

use asir2_crud;

CREATE TABLE IF NOT EXISTS blog (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    info VARCHAR(250) NOT NULL,
    img VARCHAR(100)
);


/* insert blog */
INSERT INTO blog (title, info, img)
VALUES ('Titulua 1', 'Hau da informazioa','irudia01.png'); 