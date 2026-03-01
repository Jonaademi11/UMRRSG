<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">


<?php
// including the database connection file
include_once("konfig.php");

if (isset($_POST['shtorrjetiSocial'])) {
    $rrjetiSocial_umrrsg = $_POST['rrjetiSocial_umrrsg'];
    $vitiThemelimit_umrrsg = $_POST['vitiThemelimit_umrrsg'];
    $ID_grupmosha_umrrsg = $_POST['ID_grupmosha_umrrsg'];
    $foto = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $emri = $_FILES['userfile']['name'];
	

    // checking empty fields
    if (empty($rrjetiSocial_umrrsg) || empty($vitiThemelimit_umrrsg) || empty($ID_grupmosha_umrrsg)) {

        if (empty($rrjetiSocial_umrrsg)) {
            echo "<font color='white'> Fusha Rrjeti Social eshte e zbrazet.</font><br/>";
        }

        if (empty($vitiThemelimit_umrrsg)) {
            echo "<font color='white'> Fusha Viti Themelimit eshte e zbrazet.</font><br/>";
        }

        if (empty($ID_grupmosha_umrrsg)) {
            echo "<font color='white'>Fusha Grupmosha eshte e zbrazet.</font><br/>";
        }

        // link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)

        // insert data into database
        $rezultati = mysqli_query($konektimi, "INSERT INTO rrjetetsociale_umrrsg(rrjetiSocial_umrrsg, vitiThemelimit_umrrsg, ID_grupmosha_umrrsg, foto, emri) VALUES('$rrjetiSocial_umrrsg','$vitiThemelimit_umrrsg','$ID_grupmosha_umrrsg','$foto', '$emri')");

        // display success message
        echo "<script>
            setTimeout(function(){
                window.location.href = 'menaxho_rrjetetsociale.php';
            }, 3000);
        </script>";
        echo "<p><b>E dhena eshte duke u regjistuar ne sistem.Ju lutem prisni per 3 sekonda.</b></p>";
    }
}
?>
</body>
</html>