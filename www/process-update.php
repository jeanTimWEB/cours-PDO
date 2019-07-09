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
        |                 PHP update du formulaire              |
        +-------------------------------------------------------+
*/
    


            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $age = $_POST['age'];
            $race = $_POST['race'];
           // $id = $_POST['id'];

            $database->updateChien($id,$nom,$age,$race);


//$id = $database->updateChien($id, $nom, $age, $race);   //id pour afficher chien

//header('Location: afficherChien.php?id='.$id);

header('Location: afficherChien.php?id='.$id);

        ?>