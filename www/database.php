<?php
require_once("classChien.php");

class Database{

    //attributs
    private $_connexion;
   
    //constructeur
    public function __construct()
        {
            //le chemin vers le serveur
            $PARAM_hote='mariadb'; // localhost
            // le port de connection a al base de donnée
            $PARAM_port='3306';
            // le nom de ma base de donnée
            $PARAM_nom_bd='AnnuaireToutou';
            // le nom de user pour se connecter
            $PARAM_utilisateur='adminToutou';
            //mot de passse du user pour se connecter
            $PARAM_mot_passe='Annu@ireT0ut0u';

            try
            {//le code qu'on essaye de faire 
               $this->_connexion = new PDO(
                                            'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,
                                             $PARAM_utilisateur,
                                             $PARAM_mot_passe
                                          );                      
            } // si il échoue 
            catch(Exception $e)
            {
                echo 'Erreur: '.$e->getMessage().'<br/>';
                echo 'Code '.$e->getCode();
            }

            
        }
    //methodes - comportement
    public function getConnexion()
    {
        return $this->_connexion;
    }
//----------------------------------------------------
/*
        //fonction pour inserer un nouveau maitre BOB , (function primaire sans attribut).
    public function insertMaitre()
    {
        //je prépare la requete
        $pdoStatement = $this->_connexion->prepare("INSERT INTO Maitres (nom, telephone) VALUES ('Bob','0798767654')");
        //j'execute la requete
        $pdoStatement->execute();

        // pour debugger et verifier que tout c'est bien passé
       var_dump($pdoStatement->errorInfo());
    }
*/
//-------------------
        //fonction pour inserer un nouveau maitre editable par paramètres de fonction
        public function insertMaitre($name, $phoneNumber)
        {
            //je prépare la requete                                                       //dans PDO on utilise la notation : pour les variables
            $pdoStatement = $this->_connexion->prepare("INSERT INTO Maitres (nom, telephone) VALUES (:nom,:telephone)");
            //j'execute la requete
            $pdoStatement->execute(array(
                "nom" => $name,
                "telephone" => $phoneNumber));
    
            // pour debugger et verifier que tout c'est bien passé
           //var_dump($pdoStatement->errorInfo());

            //je recupère l'id qui a été créer par la base de donee'
          $id = $this->_connexion->lastInsertId();
          return $id;
        }
//------------------------------------------------------------------------------------------
        public function insertChien($name, $age, $race, $id_maitre)
        {
            //je prépare la requete                                                                    //dans PDO on utilise la notation : pour les variables
            $pdoStatement = $this->_connexion->prepare("INSERT INTO CHIENS (nom, age, race, id_maitre) VALUES (:nom, :age, :race, :id_maitre)"); // on associe le nom de varable SQL au nom de la variable en PHP
            //j'execute la requete   l'array se rempli comme un tableau associatif
            $pdoStatement->execute(array( //seulemment en cas d'insertion ou de ::
                "nom" => $name, 
                "age" => $age,
                "race" => $race,
                "id_maitre" => $id_maitre)
            );
    
            // pour debugger et verifier que tout c'est bien passé on peut utiliser var dump
          // var_dump($pdoStatement->errorInfo());

          //je recupère l'id qui a été créer par la base de donee'
          $id = $this->_connexion->lastInsertId();
          return $id;          
        }
//------------------------------------------------------------------------------------------
       public function getAllChien()
        {
            //je prépare la requete   //($dbh php tuto)
            $pdoStatement = $this->_connexion->prepare(
            "SELECT c.id as _id , c.nom  as _nom, c.age as _age, c.race as _race , m.nom as _nomMaitre, m.telephone as _telephone
            FROM CHIENS c
            INNER JOIN Maitres  m
            ON c.id_maitre = m.id;");

            $pdoStatement->execute();

            return  $pdoStatement->fetchAll(PDO::FETCH_CLASS , 'Chien');
                    //retourn une liste d'objets
                
        }
//-------------------------------------------------------------------------------------------------
        public function getAllDogs()
        {
            $pdoStatement = $this->_connexion->prepare( 
                "SELECT id as _id,nom as _nom,race as _race FROM CHIENS");
                
            $pdoStatement->execute();
            
            $chiens =$pdoStatement->fetchAll(PDO::FETCH_CLASS , 'Chien');
            
            return $chiens;
        }


//--------------------------------------------------------------------------------------------
       
        public function getChienById($id)
        {       
        //je prépare la requete   //($dbh php tuto)
        $pdoStatement = $this->_connexion->prepare(
           "SELECT c.id as _id , c.nom  as _nom, c.age as _age, c.race as _race , m.nom as _nomMaitre, m.telephone as _telephone
           FROM CHIENS c
           INNER JOIN Maitres  m
           ON c.id_maitre = m.id
           WHERE  c.id = :id");
        

            $pdoStatement->execute(["id" => $id]);

            $monChien =  $pdoStatement->fetchObject("Chien");
            return $monChien;

        }
//--------------------------------------------------------------------------------------------

            public function DeleteChien($id){

             //prepare
            
            $pdoStatement = $this->_connexion->prepare(
           "DELETE c.* 
            FROM CHIENS c          
            WHERE  c.id = :id");
            //execute
            $pdoStatement->execute(["id" => $id]);
           // var_dump($pdoStatement->errorInfo());

            }
//---------------------------------------------------------------------------------------

            public function updateChien($id,$nom,$age,$race)
            {
                $pdoStatement = $this->_connexion->prepare(
                    "UPDATE CHIENS                   
                    SET nom = :nom, age = :age, race = :race
                    WHERE  id = :id"
                );
                //execute
                $pdoStatement->execute([
                    'id' => $id,
                    'nom' => $nom,
                    'age' => $age,
                    'race' => $race]);
            }



}//fin de database


       







?>