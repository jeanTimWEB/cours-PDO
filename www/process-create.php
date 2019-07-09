<?php 
/*intermédiaire elle devrait etre que en PHP et PAS DE HTML SINON ERREUR FATAL
-récuperer les infos du formulaire ave $_POST
-importer et instancier une database
-appeler la function insertDog() en lui passant les infos du formulaire
-récuperer le nouvel id du chien créer
-rediriger le user vers la page de profil du nouveau chien
*/
require_once("database.php");

$database = new Database;

/*            
        +-------------------------------------------------------+
        |                 PHP validation du formulaire          |
        +-------------------------------------------------------+
*/
          //  echo "bienvenue sur la page de validation";

            $nom = $_POST['nom'];
            $age = $_POST['age'];
            $race = $_POST['race'];
            $nomMaitre = $_POST['nomMaitre'];


//insertChien($name, $age, $race, $id_maitre);
$id = $database->insertChien($nom, $age, $race, $nomMaitre);   //id pour afficher chien

header('Location: afficherChien.php?id='.$id);



        ?>




