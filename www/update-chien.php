<?php
require_once("database.php");


$database = new Database;



$chien = $database->getChienById($_GET["id"]);
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
                <h2>Controler et corriger les données sur le formulaire</h2>
                <form action="process-update.php" method="post">
                    <p>
                        <input type="hidden" name ="id" value="<?php echo $chien->getId() ?>">

                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" value="<?php echo $chien->getNom(); ?> " ><br/>

                        <label for="age">Age</label>
                        <input type="number" name="age"  id="age" value="<?php echo $chien->getAge(); ?>" ><br/>

                        <label for="race">Race</label>
                        <input type="text" name="race"  id="race" value="<?php echo $chien->getRace(); ?>" ><br/>

                       
                        
                        <input type="submit" value="Valider" id="valid" >
                    </p>
                </form>
            </div>
            <div class="col">
                <h2>Bienvenue au Cabinet vétérinaire</h2>
                <br>
                <h2>Mis a jour des informations</h2>
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

