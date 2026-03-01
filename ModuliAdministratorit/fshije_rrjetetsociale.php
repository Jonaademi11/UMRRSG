<?php

include("konfig.php");

$ID_rrjetiSocial_umrrsg = $_GET['ID_rrjetiSocial_umrrsg'];

$rezultati = mysqli_query($konektimi, "DELETE FROM rrjetetsociale_umrrsg WHERE ID_rrjetiSocial_umrrsg=$ID_rrjetiSocial_umrrsg");

header("Location:menaxho_rrjetetsociale.php");
?>
