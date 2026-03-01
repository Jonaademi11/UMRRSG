<?php

include("konfig.php");

$ID_grupmosha_umrrsg = $_GET['ID_grupmosha_umrrsg'];

$rezultati = mysqli_query($konektimi,"DELETE FROM grupmoshat_umrrsg WHERE ID_grupmosha_umrrsg=$ID_grupmosha_umrrsg");

header("Location: menaxho_grupmoshat.php");
?>