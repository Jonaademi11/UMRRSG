<?php

session_start();
include("konfig.php"); // Establishing connection with our database

$gabim = ""; // Variable for storing our errors.
if (isset($_POST["submit"])) {
    if (empty($_POST["perdoruesi"]) || empty($_POST["fjalekalimi"])) {
        $gabim = "Te dy fushat duhet te plotesohen.";
    } else {
        // Define $username and $password
        $perdoruesi = $_POST['perdoruesi'];
        $fjalekalimi = $_POST['fjalekalimi'];
        // Check username and password from database
        $sql = "SELECT id_perdoruesi_umrrsg FROM perdoruesit_umrrsg WHERE perdoruesi_umrrsg='$perdoruesi' 
        and fjalekalimi_umrrsg='$fjalekalimi'"; // Updated table and column names
        $rez = mysqli_query($konektimi, $sql);
        $rreshti = mysqli_fetch_array($rez, MYSQLI_ASSOC);
        // If username and password exist in our database then create a session.
        // Otherwise echo error.
        if (mysqli_num_rows($rez) == 1) {
            $_SESSION['perdoruesi_umrrsg'] = $perdoruesi; // Initializing Session with updated session variable
            header("location: ballina.php"); // Redirecting To Other Page
        } else {
            $gabim = "Perdoruesi dhe Fjalekalimi eshte gabim.";
        }
    }
}
?>
