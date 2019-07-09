<?php
//import des fichiers necessaire au test
require_once("database.php");
require_once("classChien.php");
?>

<html>
    <head>
        <title>Afficher Chien</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <section class ="container">
            <div class="row justify-content-around">
                <div class="col-10">
              

            <?php
            //j'affiche le titre
            echo "<h1> Afficher chien par ID edite dans l'URL </h1>";

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
                echo "<h2> <span> connexion à la base de données réussie !!!  </span> </h2> <br/><br/><br/>
                <h3>Informations de connexion: </h3>
                //le chemin vers le serveur
                $PARAM_hote='mariadb'; <br>
                // le port de connection a al base de donnée
                $PARAM_port='3306';<br>
                // le nom de ma base de donnée
                $PARAM_nom_bd='AnnuaireToutou';<br>
                // le nom de user pour se connecter
                $PARAM_utilisateur='adminToutou';<br>
                //mot de passse du user pour se connecter
                $PARAM_mot_passe='Annu@ireT0ut0u';<br>";
            }
//-----------------------------------------------------------------------
            $chien = $database->getChienById($_GET["id"]);
            var_dump($chien);
       

            echo "<ul>";   
                echo "<li>"."l'Id du chien est :  <strong>".$chien->getId()."</strong></li>". 
                    "<li>"."le nom du chien est :  <strong>".$chien->getNom()."</strong></li>".          
                    "<li>"."la race est  :  <strong>".$chien->getRace()."</strong></li>". 
                    "<li>"."l'age est  :  <strong>".$chien->getAge()."</strong></li>";
                //    "<li>  <img src='assets/chien.jpg' alt='' width='400px' ></li>";
            echo "</ul>"; 
            ?>
                </div>
                <a href="index.php">Acceuil</a>
                <a href="create-chien.php">Ajouter un chien</a>
                <a href="process-delete.php?id=<?php echo $chien->getId(); ?>">Delete</a>
                <a href="update-chien.php?id=<?php echo $chien->getId(); ?>">Update</a>


            </div>
        </section>

    </body>
</html>



