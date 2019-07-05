
CREATE DATABASE Poterie;

USE Poterie;
CREATE USER "adminPoterie" @"%";

GRANT ALL PRIVILEGES ON Poterie.* TO "adminPoterie" @"%";
FLUSH PRIVILEGES; 








CREATE TABLE Maitres ( 

    id INT PRIMARY KEY AUTO_INCREMENT,  
    nom VARCHAR (200),
    prenom VARCHAR (255),
    telephone VARCHAR(20),
    adresse VARCHAR (255),
    email VARCHAR (255)    
);

CREATE TABLE Eleves (

    id_Eleves INT PRIMARY KEY AUTO_INCREMENT,  
    nom VARCHAR (200),
    age INT,
    race VARCHAR (200),
    id_Maitre INT, 
    FOREIGN KEY(id_Maitre) REFERENCES Maitres (id)
);

CREATE TABLE Creations (

    id INT PRIMARY KEY AUTO_INCREMENT,  
    auteur VARCHAR (200),
    dateCreation VARCHAR (200),
    descipt VARCHAR (255),
    id_Eleves INT, 
    FOREIGN KEY(id_Eleves) REFERENCES Eleves (id_Eleves)

);





