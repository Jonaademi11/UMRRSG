<?php
include('konfig.php');
session_start();
$kontrollo_perdoruesin = $_SESSION['perdoruesi_umrrsg'];
$databaza= mysqli_query($konektimi, "SELECT perdoruesi_umrrsg FROM perdoruesit_umrrsg WHERE perdoruesi_umrrsg='$kontrollo_perdoruesin'");
$rreshti = mysqli_fetch_array($databaza, MYSQLI_ASSOC);
$kyqja_perdoruesit = $rreshti['perdoruesi_umrrsg']; // Update the variable name
if (!isset($kontrollo_perdoruesin)) {
    header("Location: index.php");
}
?>