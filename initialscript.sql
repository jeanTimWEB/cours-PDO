

/*version de will */
CREATE DATABASE AnnuaireToutou; 

USE AnnuaireToutou; 

CREATE USER "adminToutou" @"localhost" IDENTIFIED BY "Annu@aireToutou";
 GRANT ALL PRIVILEGES on AnnuaireToutou.* TO "adminToutou"@"localhost";
  CREATE TABLE Maitres ( id INT PRIMARY KEY AUTO_INCREMENT,
   --automaticement unique et not null-- 
   nom VARCHAR(200),
    telephone VARCHAR(20) );

     CREATE TABLE Chiens ( id INT PRIMARY KEY AUTO_INCREMENT, 
     nom VARCHAR(255), 
     age INT, race VARCHAR(200),
     id_maitre INT,
     FOREIGN KEY (id_Maitre);
     SELECT c.id, c.nom, c.age, c.race, m.nom AS nomMaitre, m.telephone FROM Chiens c INNER JOIN Maitres m ON c.id_maitre = m.id WHERE c.id= 1;
    REFERENCES Maitres (id) ); --inseret un maitre-- 
      
      INSERT INTO Maitres (nom, telephone) VALUES ("bob", "0798767654");
       --inseret un new chien__
      INSERT INTO Chiens (nom, age, race, id_maitre) VALUES ('Nolly', 2, 'bouledog', 1);
       SELECT c.id, c.nom, c.age, c.race, m.nom AS nomMaitre, m.telephone FROM Chiens c INNER JOIN Maitres m ON c.id_maitre = m.id WHERE c.id= 1;



--création de la database
CREATE DATABASE AnnuaireToutou;
--création d'un user & mot de passe access
USE AnnuaireToutou;
CREATE USER "adminToutou"@"%" IDENTIFIED BY ‘Annu@ireT0ut0u’ ;
--donne les privilèges sur la base de donnée.
GRANT ALL PRIVILEGES ON AnnuaireToutou.* TO "adminToutou" @"%"; --WITH GRANT OPTION  donnerai  les privilèges pour creer des users
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

INSERT INTO Maitres (nom, telephone) VALUES ('Bob','0798789871');

INSERT INTO CHIENS (nom, age, race, id_maitre) VALUES('Nolly',2,'bouledog',1)


--selectionner des chiens
SELECT id as _id,nom as _nom,race as _race FROM CHIENS;

--selectionner un chien avec les info des son maitre
SELECT c.id as _id , c.nom as _nom , c.age as _age , c.race as _race , m.nom as _nomMaitre, m.telephone as _telephone
FROM CHIENS c
INNER JOIN Maitres  m
ON c.id_maitre = m.id;


