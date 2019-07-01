/**/



--création de la database
CREATE DATABASE AnnuaireToutou;
--création d'un user & mot de passe access
USE AnnuaireToutou;
CREATE USER "adminToutou" @"localhost" IDENTIFIED BY ‘Annu@ireT0ut0u’ ;
--donne les privilèges sur la base de donnée.
GRANT ALL PRIVILEGES ON AnnuaireToutou.* TO "adminToutou" @"localhost"; --WITH GRANT OPTION  donnerai  les privilèges pour creer des users
-- flush (pousser - contraindre les droits au user)
FLUSH PRIVILEGES; 

--- création des tables 
CREATE TABLE `Maitres` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL
)

CREATE TABLE `CHIENS` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `race` varchar(200) DEFAULT NULL,
  `id_maitre` int(11) DEFAULT NULL
)

ALTER TABLE Maitres MODIFY COLUMN id INT auto_increment;


ALTER TABLE CHIENS MODIFY COLUMN id INT auto_increment;

ALTER TABLE CHIENS
ADD FOREIGN KEY (id_Maitre) REFERENCES Maitres(id); 


/*CREATE DATABASE AnnuaireToutou; -- CRÉATION DE LA BASE DE DONÉE

CREATE TABLE Maitres( --Création de la table maitre

    id INT PRIMARY KEY AUTO_INCREMENT,  -- CLÉ UNIQUE !! AUTO_INCREMENTE  
    nom VARCHAR (200),
    telephone VARCHAR(20) --CONSIDERER COMME UNE CHAINE DE CARACTÈRES POUR COMPATIBILITÉ
);

CREATE TABLE Chiens (

    id INT PRIMARY KEY AUTO_INCREMENT,  -- CLÉ UNIQUE !! AUTO_INCREMENTE  
    nom VARCHAR (200),
    age INT,
    race VARCHAR (200),
    id_maitre INT,      -- LE TYPE DE VARIABLE DOIT CORRESPONDRE À LA CLÉ. FOREIGN KEY
    FOREIGN KEY(id_maitre) REFERENCES Maitres (id)
);

)*/
