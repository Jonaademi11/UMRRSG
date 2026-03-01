<html>

	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
		 
	</head>

<body>

<?php
include_once("konfig.php");
    if(isset($_POST['submit'])) {
        $perdoruesi = $_POST['perdoruesi'];
        $fjalekalimi = $_POST['fjalekalimi'];
		 if(empty($perdoruesi) || empty($fjalekalimi)){

            if(empty($perdoruesi)) {
                echo "<font color='white'> Fusha perdoruesi eshte e zbrazet.</font><br/>";
            }
            
            if(empty($fjalekalimi)) {
                echo "<font color='white'> Fusha fjalekalimi eshte e zbrazet.</font><br/>";
            }
                
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        
        }else{

            $rezultati = mysqli_query($konektimi, "INSERT INTO perdoruesit_umrrsg(perdoruesi_umrrsg,fjalekalimi_umrrsg)VALUES('$perdoruesi','$fjalekalimi')");
            //echo "<font color='green'>Te dhenat jane futur me sukses ne databaze.</font>";
            //echo "<br/><a href='admin.php'>Shiko rezultatin</a>";
            echo "<script>
            setTimeout (function() {
                window.location.href = 'perdoruesit.php';
            }, 3000);
            </script>";
            echo "<p><b>  E dhena eshte duke u regjistruar ne sistem.
            Ju lutem prisni 3 sekonda. <b></p>";
        }
    }
    ?>