<?php
require_once("database.php");

$database = new Database;

$maitres = $database->getAllMasters();
?>

<!DOCTYPE html>
<html>

<head>
    <title>create-chien</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section class="container-fluid">
        <div class="row justify-content-around">
            <div class="col">
                <h2>Creer une entrée chien édité sur le formulaire</h2>
                <form action="process-create.php" method="post">
                    <p>
                     

                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder="Médor"><br/>

                        <label for="age">Age</label>
                        <input type="number" name="age"  id="age" placeholder="12"><br/>

                        <label for="race">Race</label>
                        <input type="text" name="race"  id="race" placeholder="Colie"><br/>

                        <label for="select">Maitre</label>
                        <select name="nomMaitre" id="select">
                    <?php 
                    foreach($maitres as $maitre)
                        {
                        echo "<option value=".$maitre->getId().">".$maitre->getNomMaitre()."</option>";
                        }

                    ?>       
                        </select>
                        <input type="submit" value="Valider" id="valid" >
                    </p>
                </form>
            </div>
            <div class="col">
                <h2>Bienvenue au Cabinet vétérinaire</h2>
                <br>
                <h2>Inscription d'un nouveau chien</h2>
                <a href="index.php">Index</a>
            </div>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>


</html>