<?php
    header("Content-Type: text/plain ; charset=utf-8");
    header("Cache-Control: no-cache , private");
    header("Pragma: no-cache");
    include("includes/bdd.inc.php");

    $file = fopen("recordedatetimelog.txt", 'a');
    function write2log($file, $texte)
    {
        $objDateTime = new DateTime('NOW');
        $dateFormatee = date_format($objDateTime, 'd/m/y H:i:s:ms : ') . $texte . "\n";
        fwrite($file, $dateFormatee);
    }

    if(isset($_REQUEST["event"])&& $_REQUEST['event'] != "")
    {
        $numero_evenement = $_REQUEST['event'];
    }else{
        echo "ERROR : input (évènement manquant)";
        write2log($file, "ERROR : input (évènement manquant)");
        exit();
    }
    if(isset($_REQUEST["date"])&& $_REQUEST['date'] != "")
    {
        $date = $_REQUEST['date'];
    }else{
        echo "ERROR : input (date manquant)";
        write2log($file, "ERROR : input (date manquant)");
        exit();
    }
    if(isset($_REQUEST["time"])&& $_REQUEST['time'] != "")
    {
        $time = $_REQUEST['time'];
    }else{
        echo "ERROR : input (time manquant)";
        write2log($file, "ERROR : input (time manquant)");
        exit();
    }
    $sql = "INSERT INTO doodle (id_doodle, dateheure, nombre_participants, numero_evenement) VALUES (NULL, '$date $time', 0, $numero_evenement)"; 
    $resultat = mysqli_query($lien, $sql);
    if(!$resultat)
    {
        echo "ERROR : database (INSERT)";
        write2log($file, "ERROR : database (INSERT)");
    }
    header("location: http://localhost/AJAX/DOODLE/Doodle_php/admindoodle.php");
    //echo "nouvel évènement numéro ", $numero_evenement, " le ",$date, " à ", $time;

    fclose($file);
?>