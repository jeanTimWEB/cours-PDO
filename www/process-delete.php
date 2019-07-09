<?php
//import de la database
require_once('database.php');

$database = new database();

$id = $_GET['id'];

$resultat = $database->deleteChien($id);
if($resultat == true)
{
    header('Location: listeChiens.php');
}
else
{
    echo 'suppression impossible';
}


?>