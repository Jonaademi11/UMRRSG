<html>
<head>
	<title>Moduli Perdoruesit</title>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

<?php
//including the database connection file
include_once("konfig.php");

if(isset($_POST['shtoKontakt'])) {	
	$subjekti = $_POST['subjekti'];
	$mesazhi = $_POST['mesazhi'];
	$email = $_POST['email'];
		
	// checking empty fields
	if(empty($subjekti) || empty($mesazhi) || empty($email)) {			
		if(empty($subjekti)) {echo "<font color='white'>Fusha Subjekti eshte e zbrazet.</font><br/>";}
		if(empty($mesazhi)) {echo "<font color='white'>Fusha Mesazhi eshte e zbrazet.</font><br/>";}
		if(empty($email)) {echo "<font color='white'>Fusha Email eshte e zbrazet.</font><br/>";}
		//link to the previous Mesazhi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($konektimi, "INSERT INTO kontakti(subjekti,mesazhi,email) VALUES('$subjekti','$mesazhi','$email')");
		//display success messMesazhi
	//	echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='contact.php'>View Result</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>