<?php 
include("konfig.php");

$id_perdoruesi_umrrsg = $_GET['id_perdoruesi_umrrsg'];

$rezultati = mysqli_query($konektimi,"DELETE FROM perdoruesit_umrrsg WHERE id_perdoruesi_umrrsg=$id_perdoruesi_umrrsg");

header("Location:fshije_perdorues.php");
?>