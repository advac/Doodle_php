<?php
    header("Content-Type: text/plain ; charset=utf-8");
    header("Cache-Control: no-cache , private");
    header("Pragma: no-cache");
    include("includes/bdd.inc.php");

    if(isset($_REQUEST["check2050"]) && $_REQUEST["check2050"] == "on")
    {
        $sql = "SELECT * FROM doodle WHERE numero_evenement = '1' AND dateheure = '2020-01-28 20:50:00'";
        $resultat = mysqli_query($lien, $sql);
        if(!$resultat)
        {
            echo "ERROR : BDD";
        }
        $ligne = mysqli_fetch_array($resultat);
        $id_doodle =  $ligne["id_doodle"];
        //echo $nombre_participants;
        $nombre_participants++;
        $sql = "UPDATE doodle SET nombre_participants = $nombre_participants WHERE id_doodle = $id_doodle";
        $resultat = mysqli_query($lien, $sql);
        if(!$resultat)
        {
            echo "ERROR : BDD (update)";
        }
        echo $nombre_participants;
    }

    if(isset($_REQUEST["check2150"]) && $_REQUEST["check2150"] == "on")
    {
        $sql = "SELECT * FROM doodle WHERE numero_evenement = '1' AND dateheure = '2020-01-28 21:50:00'";
        $resultat = mysqli_query($lien, $sql);
        if(!$resultat)
        {
            echo "ERROR : BDD";
        }
        $ligne = mysqli_fetch_array($resultat);
        $id_doodle =  $ligne["id_doodle"];
        //echo $nombre_participants;
        $nombre_participants++;
        $sql = "UPDATE doodle SET nombre_participants = $nombre_participants WHERE id_doodle = $id_doodle";
        $resultat = mysqli_query($lien, $sql);
        if(!$resultat)
        {
            echo "ERROR : BDD (update)";
        }
        echo $nombre_participants;
    }

    if(isset($_REQUEST["check2250"]) && $_REQUEST["check2250"] == "on")
    {
        $sql = "SELECT * FROM doodle WHERE numero_evenement = '1' AND dateheure = '2020-01-28 22:50:00'";
        $resultat = mysqli_query($lien, $sql);
        if(!$resultat)
        {
            echo "ERROR : BDD";
        }
        $ligne = mysqli_fetch_array($resultat);
        $id_doodle =  $ligne["id_doodle"];
        //echo $nombre_participants;
        $nombre_participants++;
        $sql = "UPDATE doodle SET nombre_participants = $nombre_participants WHERE id_doodle = $id_doodle";
        $resultat = mysqli_query($lien, $sql);
        if(!$resultat)
        {
            echo "ERROR : BDD (update)";
        }
        echo $nombre_participants;
    }

    if(isset($_REQUEST["check2350"]) && $_REQUEST["check2350"] == "on")
    {
        $sql = "SELECT * FROM doodle WHERE numero_evenement = '1' AND dateheure = '2020-01-28 23:50:00'";
        $resultat = mysqli_query($lien, $sql);
        if(!$resultat)
        {
            echo "ERROR : BDD";
        }
        $ligne = mysqli_fetch_array($resultat);
        $id_doodle =  $ligne["id_doodle"];
        //echo $nombre_participants;
        $nombre_participants++;
        $sql = "UPDATE doodle SET nombre_participants = $nombre_participants WHERE id_doodle = $id_doodle";
        $resultat = mysqli_query($lien, $sql);
        if(!$resultat)
        {
            echo "ERROR : BDD (update)";
        }
        echo $nombre_participants;
    }

    if(isset($_REQUEST["check0050"]) && $_REQUEST["check0050"] == "on")
    {
        $sql = "SELECT * FROM doodle WHERE numero_evenement = '1' AND dateheure = '2020-01-29 00:50:00'";
        $resultat = mysqli_query($lien, $sql);
        if(!$resultat)
        {
            echo "ERROR : BDD";
        }
        $ligne = mysqli_fetch_array($resultat);
        $id_doodle =  $ligne["id_doodle"];
        //echo $nombre_participants;
        $nombre_participants++;
        $sql = "UPDATE doodle SET nombre_participants = $nombre_participants WHERE id_doodle = $id_doodle";
        $resultat = mysqli_query($lien, $sql);
        if(!$resultat)
        {
            echo "ERROR : BDD (update)";
        }
        echo $nombre_participants;
    }








?>