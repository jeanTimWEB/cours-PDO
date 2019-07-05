<?php
require_once("database.php");

$database = new Database;

$listeChiens = $database->getAllDogs();


?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des Chiens</h1>
    <h2>Annuaire</h2>

    <ul>
        <?php foreach($listeChiens as $chien){ ?>
        <li>
            <?php echo "<a href=afficherChien.php?id=".$chien->getId().">";
            echo "le chien numero". $chien->getId(). " : ". $chien->getNom()." : ".$chien->getRace();
       
            echo "</a>";
            ?>
            </li>
      <?php  } ?>
    
    </ul>


</body>

</html>