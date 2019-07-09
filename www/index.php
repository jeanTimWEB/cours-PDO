<!DOCTYPE html>
<html>
    <head>
        <title>Veterinaire de la Lune - GE</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <section class="container">
            <div class="row">
                <div class="col">
                <?php
//import des fichiers necessaire au test
require_once("database.php");
require_once("classChien.php");

//j'affiche le titre
echo "<h1> Test de la Database </h1>";

//j'instancie une nouvelle connexion à ma base de donnée
$database = new Database();

//affiche -debugg du contenu de la variable
//var_dump($database); 

    if($database->getConnexion() == NULL)
        {
            echo "<h2> la connexion a échoué </h2>" ; 
        }
    else
        {
            echo "<h2> <span> connexion à la base de donnée réussie !!!  </span>  <br/><br/><br/>
            //le chemin vers le serveur
            $PARAM_hote='mariadb'; <br>
            // le port de connection a al base de donnée
            $PARAM_port='3306';<br>
            // le nom de ma base de donnée
            $PARAM_nom_bd='AnnuaireToutou';<br>
            // le nom de user pour se connecter
            $PARAM_utilisateur='adminToutou';<br>
            //mot de passse du user pour se connecter
            $PARAM_mot_passe='Annu@ireT0ut0u';</h2><br>";
        }


     $listeChiens = $database->getAllDogs();

     foreach($listeChiens as $chien)
        {
            $id = $chien->getId();

            echo "<a target='blank' href='http://localhost/afficherChien.php?id=$id'>".$chien->getNom()."</a>.<br/><br/>";


         //   echo "id=".$chien->getId()."<br/><br/>";
           
        }

        echo '<a href="listeChiens.php">Liste des chiens</a><br/><br/>';
        echo '<a href="create-chien.php">Ajouter un chien</a>';
?>        
                </div>
            </div>
        </section>
    </body>
</html>






