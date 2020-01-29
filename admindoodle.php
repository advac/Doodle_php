<?php 
    include("includes/bdd.inc.php");
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Gestionnaire de rendez-vous pour l'administrateur</title>
		
	</head>
<body>
<h1>Gestionnaire de rendez-vous pour l'administrateur</h1>
<?php
    $sql = "SELECT DISTINCT numero_evenement FROM doodle"; //select tout les elements du doodle : DISTINCT pour afficher sans doublons
    $resultat = mysqli_query($lien, $sql);
    if(!$resultat)
    {
        echo "ERROR : BDD";
    }
    echo "<select id='liste' onchange='onchangeselect();'>";    //on fabrique un select de l'evenement
    echo "<option selected>Sélectionner un numéro d'évenement</option>"; //rajout d'un select demandant la selection à user
    while($ligne = mysqli_fetch_array($resultat))
    {
        echo "<option>";
        echo $ligne["numero_evenement"];
        echo "</option>";
    }
    echo "</select>";

?>
<h3>Dates et heures proposées</h3>
<form method="GET" action="recorddatetime.php">
    <p>
        Numero d'évènement : 
        <input type="text" id="event" name="event">
        <input type="date" name="date">
        <input type="time" name="time">
    </p>
    <input type="submit" value="enregistrer">
    <div>
        <?php 
            $sql = "SELECT * FROM doodle WHERE numero_evenement = 1";
            $resultat = mysqli_query($lien, $sql);
            if(!$resultat){
                echo "ERROR : BDD";
            }
            while($ligne = mysqli_fetch_array($resultat))
            {
                $dateheure =$ligne["dateheure"];
                $nombre_participant =$ligne["nombre_participants"];
                echo "<p>evenement avec $nombre_participant participant le : $dateheure</p>";
            }
        ?>
    </div>
</form>
	<script src="js/jquery.js" type="text/javascript"></script>  
	<script language="JavaScript" type="text/javascript">
        function onchangeselect()
        {
            var index = document.getElementById("liste").selectedIndex;
            var texte = document.getElementById("liste").options[index].text;
            if(texte != "Sélectionner un numéro d'évenement")
            {
                document.getElementById("event").value = texte;
            }
        }
	</script>
</body>
</html>

