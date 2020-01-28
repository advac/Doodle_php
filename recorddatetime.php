<?php
header("Content-Type: text/plain ; charset=utf-8");
header("Cache-Control: no-cache , private");
header("Pragma: no-cache");
include("includes/bdd.inc.php");

if(isset($_REQUEST['event']) && isset($_REQUEST['date']) && isset($_REQUEST['time'])){
    $event = intval($_REQUEST['event']);
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];
    $nombre_participant = 0;
    $datetime = new DateTime($date . ' ' . $time);
    $dateFormatee = date_format($datetime, 'Y-m-d H:m:s');
    $sql = "INSERT INTO doodle (dateheure, nombre_participants, numero_evenement) VALUES ('$dateFormatee' , $nombre_participant , $event )";
    if (mysqli_query($lien, $sql)) {
        echo "New record created successfully";
     } else {
        echo "Error: " . $sql . "" . mysqli_error($lien);
     }
     $lien->close();
     header("Location: http://localhost/doodle/admindoodle.php");
}
?>