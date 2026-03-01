<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$ID_kontakti = $_GET['ID_kontakti'];

//deleting the row from table
$rezultati = mysqli_query($konektimi,"DELETE FROM kontakti WHERE ID_kontakti=$ID_kontakti");

//redirecting to the display page (index.php in our case)
header("Location:menaxho_kontakt.php");
?>

