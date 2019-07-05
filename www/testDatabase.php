
<link rel="stylesheet" href="style.css">
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
/*
//j'insere un nouveau maitre et je recupere son id
$nouvelID = $database->insertMaitre('Olivier', '0796547523'); 
echo "<p> Un nouveau maitre inseré avec l'ID: $nouvelID </p>";


//inserer un nouveau chien et recupere son id
$idChien = $database->insertChien('Ona' ,3 , 'Berger des Carpattes' ,$nouvelID);
echo "<p> Un nouveau chien inseré avec l'ID: $idChien </p>";
*/
/*
$database->insertMaitre('Philou', '0786485745'); 
$database->insertMaitre('doc',    '0776546454'); 

$database->insertChien('Cayenne', '4', 'Berger des Carpattes' , '1' );
*/
/*
 //11
$listeChiens = $database->getAllChien();
echo "<ul>"; 
foreach($listeChiens as $chien)
{   
    echo "<li>"."l'Id du chien est :  ".$chien->getId()."</li>". 
         "<li>"."le nom du chien est :  ".$chien->getNom()."</li>".          
         "<li>"."la race est  :  ".$chien->getRace()."</li>".
         "<li>"."l'age est  :  ".$chien->getAge()."</li>".
         "<li>"."le nom du maitre est   :  ".$chien->getNomMaitre()."</li>".
         "<li>"."joignable au   :  ".$chien->getTelephone()."</li><br>";
}
echo "</ul>"; 
*/
/*
//11
$listeChiens = $database->getAllDogs();
echo "<ul>";
    foreach($listeChiens as $chien)
    {
        echo "<li>";
        echo "Le chien numero: ".$chien->getId().":" .$chien->getNom()." de race ".$chien->getRace();
        echo "<li>";
    }
echo "</ul>";
*/



//12
/*
$chien = $database->getChienById(1);
//var_dump($chien);
echo "<ul>"; 
  
    echo "<li>"."l'Id du chien est :  ".$chien->getId()."</li>". 
         "<li>"."le nom du chien est :  ".$chien->getNom()."</li>".          
         "<li>"."la race est  :  ".$chien->getRace()."</li>".
         "<li>"."l'age est  :  ".$chien->getAge()."</li>";

echo "</ul>"; 
*/
/*
$database->deleteChien(72);
$listeChiens = $database->getAllDogs();
echo "<ul>";
    foreach($listeChiens as $chien)
    {
        echo "<li>";
        echo "Le chien numero: ".$chien->getId().":" .$chien->getNom()." de race ".$chien->getRace();
        echo "<li>";
    }
echo "</ul>";
*/

$database->updateChien(73,"Boule",9,"terrier");

$listeChiens = $database->getAllDogs();

echo "<ul>";
    foreach($listeChiens as $chien)
    {
        echo "<li>";
        echo "Le chien numero: ".$chien->getId().":" .$chien->getNom()." de race ".$chien->getRace();
        echo "<li>";
    }
echo "</ul>";


?>