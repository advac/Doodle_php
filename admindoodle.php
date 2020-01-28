<?php
    include("includes/bdd.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestionnaire de rendez-vous pour l'admin</title>
</head>
<body>
    <h1>Gestionnaire de rendez-vous pour l'admin</h1>
    <h3>Dates et heures proposées</h3>
    <form method="GET" action="recorddatetime.php">
        <p>
            Numéro d'évenement:
            <input type="text" name="event">
            <input type="date" name="date">
            <input type="time" name="heure">
        </p>
        <input type="submit" value="Valider le formulaire">
        <div>
            <?php
                $sql = "SELECT * FROM doodle WHERE numero_evenement = 1";
                $resultat = mysqli_query($lien, $sql);
                if(!$resultat)
                {
                    echo "ERROR : BDD";
                }
                while($ligne = mysqli_fetch_array($resultat))
                {
                    $dateheure = $ligne['dateheure'];
                    $nombre_participants = $ligne['nombre_participants'];
                    echo "<p>$dateheure $nombre_participants</p>";
                }

            ?>
        </div>
    </form>
    <script src="jquery.js" type="text/javascript"></script>  
    <script language="javascript" type="text/javascript"></script>
</body>
</html>